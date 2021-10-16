<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // bikin data awal
        User::insert([
            ['username'=>'admin', 'password'=>User::hashPassword('admin'), 'email'=> 'admin@admin.com', 'jwt'=>''],
            ['username'=>'nixon', 'password'=>User::hashPassword('nixon'), 'email'=> 'nixon@admin.com', 'jwt'=>''],
        ]);
    }
}
