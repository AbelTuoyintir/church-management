<?php

namespace Database\Seeders;

use App\Models\Announcement;
use App\Models\User;
use App\Models\Member;
use App\Models\Donation;
use App\Models\Volunteer;
use App\Models\Event;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::factory(1000)->create();
         Donation::factory(50000)->create();
         Member::factory(5000)->create();
         Donation::factory(900000)->create();
         Announcement::factory(600000)->create();
         Event::factory(665)->create();
         Volunteer::factory(6542)->create();



    }
}
