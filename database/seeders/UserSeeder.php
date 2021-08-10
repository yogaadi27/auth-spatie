<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Administrator',
            'email'=> 'admin@gmail.com',
            'password' => Hash::make('admin'),
        ]);
        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'John Doe',
            'email' => 'johndoe@gmail.com',
            'password'=> Hash::make('12345'),
        ]);
        $user->assignRole('user');
    }
}
