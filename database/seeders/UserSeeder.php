<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        User::create([
            "id" => 1,
            "name" => "User one",
            "email" => "example@example.com",
            "password" => Hash::make('123456789a'),
        ]);

        User::create([
            "id" => 2,
            "name" => "User two",
            "email" => "example2@example.com",
            "password" => Hash::make('123456789a'),
        ]);

        User::create([
            "id" => 3,
            "name" => "User three",
            "email" => "example3@example.com",
            "password" => Hash::make('123456789a'),
        ]);

        User::create([
            "id" => 4,
            "name" => "User four",
            "email" => "example4@example.com",
            "password" => Hash::make('123456789a'),
        ]);

        User::create([
            "id" => 5,
            "name" => "User five",
            "email" => "example5@example.com",
            "password" => Hash::make('123456789a'),
        ]);

        User::create([
            "id" => 6,
            "name" => "User six",
            "email" => "example6@example.com",
            "password" => Hash::make('123456789a'),
        ]);

        User::create([
            "id" => 7,
            "name" => "User seven",
            "email" => "example7@example.com",
            "password" => Hash::make('123456789a'),
        ]);

        User::create([
            "id" => 8,
            "name" => "User eight",
            "email" => "example8@example.com",
            "password" => Hash::make('123456789a'),
        ]);

        User::create([
            "id" => 9,
            "name" => "User nine",
            "email" => "example9@example.com",
            "password" => Hash::make('123456789a'),
        ]);

        User::create([
            "id" => 10,
            "name" => "first admin user",
            "email" => "example10@example.com",
            "password" => Hash::make('123456789a'),
        ]);

        User::create([
            "id" => 11,
            "name" => "second admin user",
            "email" => "example11@example.com",
            "password" => Hash::make('123456789a'),
        ]);

        User::create([
            "id" => 12,
            "name" => "third admin user",
            "email" => "example12@example.com",
            "password" => Hash::make('123456789a'),
        ]);

        User::create([
            "id" => 13,
            "name" => "User ten",
            "email" => "example13@example.com",
            "password" => Hash::make('123456789a'),
        ]);

        User::create([
            "id" => 14,
            "name" => "User eleven",
            "email" => "example14@example.com",
            "password" => Hash::make('123456789a'),
        ]);

        User::create([
            "id" => 15,
            "name" => "User twelve",
            "email" => "example15@example.com",
            "password" => Hash::make('123456789a'),
        ]);
    }
}
