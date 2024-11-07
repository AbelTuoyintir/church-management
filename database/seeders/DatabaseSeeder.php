<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Member;
use App\Models\Donation;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::factory(20)->create();
         Donation::factory(50)->create();
         Member::factory(50)->create();


    }
}
