<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('admins')->insert([
            'name'              => 'admin',
            'email'             => 'root@gmail.com',
            'password'          => \Hash::make('root'),
            'remember_token'    => \Str::random(10),
        ]);
    }
}
