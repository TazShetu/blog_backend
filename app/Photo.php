<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['file'];

    // <td><img height="50" src="/images/{{$user->photo ? $user->photo->file : '*'}}" alt="No Photo"></td>
    // now we do not want to hard code /images/ in the src
    // so here we do it dynamically
    // getFileAttribute this is the default name where File is the column name
    protected $uploades = '/images/';
    public function getFileAttribute($photo){
        return $this->uploades . $photo;
    }


}
