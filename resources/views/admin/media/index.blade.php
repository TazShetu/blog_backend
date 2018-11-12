@extends('layouts.admin')

@section('content')
    @if($photos)
        <h1>Media</h1>
        <form action="delete/media" method="post" class="form-inline">
            {{csrf_field()}}
            {{method_field('delete')}}
            <div class="form-group">
                <select name="checkBoxArray" id="" class="form-control">
                    <option value="">Delete</option>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" name="delete_multi" class="btn btn-primary">
            </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th><input type="checkbox" id="options"></th>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Created</th>
                        <th>Updated</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($photos as $photo)
                        <tr>
                            <td><input class="checkBoxes" type="checkbox" name="checkBoxArray[]" value="{{$photo->id}}"></td>
                            <td>{{$photo->id}}</td>
                            <td><img height="50" src="{{$photo->file}}" alt="User/Post's been Deleted"></td>
                            <td>{{$photo->created_at->diffForHumans()}}</td>
                            <td>{{$photo->updated_at->diffForHumans()}}</td>
                            <td>
                                <input type="hidden" name="photo" value="{{$photo->id}}">
                                <div class="form-group">
                                    <input type="submit" name="delete_single" value="Delete" class="btn btn-danger">
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </form>
    @else
        <h4 class="text-center">No Photos to Show</h4>
    @endif



@stop

@section('scripts')
    <script>
        $(document).ready(function(){

            $('#options').click(function () {
               //console.log('Click');
                if (this.checked){
                    $('.checkBoxes').each(function () {
                       this.checked = true;
                    });
                }else {
                    $('.checkBoxes').each(function () {
                        this.checked = false;
                    });
                }
            });

        });
    </script>
@stop