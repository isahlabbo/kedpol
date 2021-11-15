<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Events\Core\WardRegistered;
use App\Events\Core\PollingUnitRegistered;
use App\Models\Lga;

class UpdateCount extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Lga::all() as $lga) {
            foreach($lga->wards as $ward){
                event(new WardRegistered($ward));
                foreach ($ward->pollingUnits as $pollingUnit) {
                    event(new PollingUnitRegistered($pollingUnit));
                }
            }
        }
    }
}
