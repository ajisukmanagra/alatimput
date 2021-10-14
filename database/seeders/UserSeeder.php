<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Farijan',
                'email' => 'farijan@gmail.com',
                'password' => bcrypt('farijan'),
                'level' => 'Admin'
            ],
        ];

        foreach($user as $key => $value) {
            User::create($value);
        }
    }
}