<?php

namespace Database\Seeders;

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
        $users = [
            ["name" => "Nakanwaji Rose", "email" => "rose@gmail.com","password" => "@rose123"],
            ["name" => "Mutesi Charlotte", "email" => "mutesi@gmail.com", "password" => "@mutesi123"],

        ];
        \App\Models\User::truncate();
        foreach ($users as $user) {
            \App\Models\User::updateOrCreate(
                ["name" => $user["name"]],
                [
                    "name" => $user["name"],
                    "email" => $user["email"],
                    "password" => $user["password"],
                ]);
        }
    }
}
