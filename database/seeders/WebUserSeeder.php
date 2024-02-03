<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AuthLogin;

class WebUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'role' => 'Developer',
                'name' => 'Web Developer',
                'phone' => '01839072709',
                'email' => 'yousufhossain50@gmail.com',
                'username' => 'developer',
                'password' => bcrypt('web@123'),
                'email_verified_at' => now(),
                'phone_verified_at' => now(),
                'address' => 'Chandpur Sadar',
                'country' => 'Bangladesh',
                'state' => 'Chandpur',
                'city' => 'Dhaka',
                'status' => 1,
                'online' => 1,
            ],

            [
                'role' => 'Developer',
                'name' => 'Web Developer',
                'phone' => '01839072709',
                'email' => 'admin@gmail.com',
                'username' => 'admin',
                'password' => bcrypt('web@123'),
                'email_verified_at' => now(),
                'phone_verified_at' => now(),
                'address' => 'Chandpur Sadar',
                'country' => 'Bangladesh',
                'state' => 'Chandpur',
                'city' => 'Dhaka',
                'status' => 1,
                'online' => 1,
            ],
        ];

        foreach($users as $user){
            AuthLogin::updateOrCreate($user);
        }
    }
}
