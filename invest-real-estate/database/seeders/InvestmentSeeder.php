<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Investment;

class InvestmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Investment::create([
            'user_id' => 1, // ID инвестора
            'property_id' => 1, // ID недвижимости
            'amount' => 5000000,
            'status' => 'активная',
        ]);
    }
}
