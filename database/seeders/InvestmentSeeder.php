<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InvestmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void       
     */
    public function run()
    {
        $investments = [
            ["user_id" => "1", "amount" => "50000","business_id" => "1","business_name" => "Samuel's Piggery","wallet_id" => "1","date_created" => "01/05/2020"],
            ["user_id" => "2", "amount" => "78000", "business_id" => "2","business_name" => "Linda's Catering","wallet_id" => "2","date_created" => "05/10/2020"],

        ];
        \App\Models\Investment::truncate();
        foreach ($investments as $investment) {
            \App\Models\Investment::updateOrCreate(
                ["user_id" => $investment["user_id"]],
                [
                    "amount" => $investment["amount"],
                    "business_id" => $investment["business_id"],
                    "business_name" => $investment["business_name"],
                    "wallet_id" => $investment["wallet_id"],
                    "date_created" => $investment["date_created"]
                ]);
        }
    }
}
