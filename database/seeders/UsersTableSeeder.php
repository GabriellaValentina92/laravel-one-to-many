<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Anna',
                'email' => 'annafoglietta@fantabosco.it',
                'password' => Hash::make('qwerty'),
            ],

            [
                'name' => 'Odette',
                'email' => 'odettecigno@incantesimodellago.com',
                'password' => Hash::make('cigno123'),
            ],
        ];

        foreach($users as $user_data){
            User::create($user_data);

        }
    }
}
