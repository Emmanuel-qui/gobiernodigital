<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            "id" => 1,
            "name" => "admin",
            "slug" => "administrator",
            "description" => now(),
        ]);

        Role::create([
            "id" => 2,
            "name" => "user",
            "slug" => "unprivileged user",
            "description" => now(),
        ]);

        DB::table('role_user')->insert([
            'role_id' => 2,
            'user_id' => 1,
        ]);

        DB::table('role_user')->insert([
            'role_id' => 2,
            'user_id' => 2,
        ]);

        DB::table('role_user')->insert([
            'role_id' => 2,
            'user_id' => 3,
        ]);

        DB::table('role_user')->insert([
            'role_id' => 2,
            'user_id' => 4,
        ]);

        DB::table('role_user')->insert([
            'role_id' => 2,
            'user_id' => 5,
        ]);

        DB::table('role_user')->insert([
            'role_id' => 2,
            'user_id' => 6,
        ]);

        DB::table('role_user')->insert([
            'role_id' => 2,
            'user_id' => 7,
        ]);

        DB::table('role_user')->insert([
            'role_id' => 2,
            'user_id' => 8,
        ]);

        DB::table('role_user')->insert([
            'role_id' => 2,
            'user_id' => 9,
        ]);

        DB::table('role_user')->insert([
            'role_id' => 1,
            'user_id' => 10,
        ]);

        DB::table('role_user')->insert([
            'role_id' => 1,
            'user_id' => 11,
        ]);

        DB::table('role_user')->insert([
            'role_id' => 1,
            'user_id' => 12,
        ]);

        DB::table('role_user')->insert([
            'role_id' => 2,
            'user_id' => 13,
        ]);

        DB::table('role_user')->insert([
            'role_id' => 2,
            'user_id' => 14,
        ]);

        DB::table('role_user')->insert([
            'role_id' => 2,
            'user_id' => 15,
        ]);
    }
}
