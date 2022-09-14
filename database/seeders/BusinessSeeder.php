<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BusinessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $businesses = [
            ["name" => "Samuel's Piggery", "number" => "B001","icon" => "images/piggery.jpg"],
            ["name" => "Linda's Catering", "number" => "B002", "icon" => "images/catering.jpg"],

        ];
        \App\Models\Business::truncate();
        foreach ($businesses as $business) {
            \App\Models\Business::updateOrCreate(
                ["name" => $business["name"]],
                [
                    "name" => $business["name"],
                    "number" => $business["number"],
                    "icon" => $business["icon"],
                ]);
        }

    }
}
