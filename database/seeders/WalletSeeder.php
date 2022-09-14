<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WalletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wallets = [
            ["wallet_number" => "W001", "balance" => "80000","user_id" => "1"],
            ["wallet_number" => "W002", "balance" => "46000", "user_id" => "2"],

        ];
        \App\Models\Wallet::truncate();
        foreach ($wallets as $wallet) {
            \App\Models\Wallet::updateOrCreate(
                ["wallet_number" => $wallet["wallet_number"]],
                [
                    "wallet_number" => $wallet["wallet_number"],
                    "balance" => $wallet["balance"],
                    "user_id" => $wallet["user_id"],
                ]);
        }
    }
}
