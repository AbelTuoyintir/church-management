<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Donation;

class DonationSeeder extends Seeder
{
    public function run()
    {
        Donation::factory()->count(50)->create(); // Creates 50 dummy donations
    }
}
