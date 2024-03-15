<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        //
        DB::table('users')->insert(
            [
                [
                    'id_asisten' => 100213,
                    'name' => "admin",
                    'email' => "admin@admin.com",
                    'password' => Hash::make("adminpassword"),
                    'role_id' => 1
                ],
                [
                    'id_asisten' => 100212,
                    'name' => "asisten",
                    'email' => "asisten@asisten.com",
                    'password' => Hash::make("asistenpassword"),
                    'role_id' => 2
                ],
                [
                    'id_asisten' => 100211,
                    'name' => "PJ",
                    'email' => "pj@pj.com",
                    'password' => Hash::make("pjpassword"),
                    'role_id' => 3
                ]
            ]
        );
    }
}
