<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(WardPollingUnit::class);
        $this->call(AdminSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(FederalConstituencyTableSeeder::class);
        $this->call(StateConstituencyTableSeeder::class);
        $this->call(SenatorialZoneTableSeeder::class);
        $this->call(UpdateCount::class);
    }
}
