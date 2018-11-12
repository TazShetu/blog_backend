<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'p',
            'email' => 'p@g.com',
            'password' => bcrypt('123456'),
            'role_id' => 1,
            'is_active' => 1
        ]);
    }
}
