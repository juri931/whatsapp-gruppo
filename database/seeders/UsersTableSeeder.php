<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = ['Alex', 'Elena', 'Laroussi', 'Matteo', 'Nicola', 'Stefano'];

        foreach ($users as $user) {
            $new_user = new User();
            $new_user->name = $user;
            $new_user->email = $user . '@email.it';
            $new_user->password = Hash::make('passwordSicura');
            $new_user->save();
        }
    }
}
