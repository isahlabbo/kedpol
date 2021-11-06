<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lga;
use App\Models\SenatorialZone;

class SenatorialZoneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $zones = [
            [
                'name'=>'KEBBI CENTRAL',
                'lgas'=>['ALIERO','BIRNIN KEBBI','BUNZA','GWANDU','KALGO','KOKO BESSE','MAIYAMA']
            ],

            [
                'name'=>'KEBBI NORTH',
                'lgas'=>['AREWA','ARGUNGU','AUGIE','BAGUDO','DANDI','JEGA','SURU']
            ],

            [
                'name'=>'KEBBI SOUTH',
                'lgas'=>['FAKAI','NGASKI','SAKABA','SHANGA','WASAGU DANKO','YAURI','ZURU']
            ]
        ];

        foreach ($zones as $zone) {
            $senatorialZone = SenatorialZone::firstOrCreate(['name'=>$zone['name']]);
            foreach ($zone['lgas'] as $lga) {
                $senatorialZone->senatorialZoneLgas()->create(['lga_id'=>$this->getThisLga($lga)->id]);
            }
        }
    }

    public function getThisLga($lgaName)
    {
        return Lga::where('name',$lgaName)->first();
    }
}
