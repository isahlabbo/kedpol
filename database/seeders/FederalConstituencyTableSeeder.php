<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lga;
use App\Models\FederalConstituency;

class FederalConstituencyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $constituencies = [
            [
                "name"=>"ALIERO / GWANDU / JEGA",
                "lgas"=>["ALIERO","GWANDU","JEGA"]
            ],
            [
                "name"=>"AREWA / DANDI",
                "lgas"=>['AREWA','DANDI']
            ],
            [
                "name"=>"ARGUNGU / AUGIE",
                "lgas"=>['ARGUNGU','AUGIE']
            ],
            [
                "name"=>"BAGUDO / SURU",
                "lgas"=>['BAGUDO','SURU']
            ],
            [
                "name"=>"BUNZA / BIRNIN KEBBI / KALGO",
                'lgas'=>['BUNZA','BIRNIN KEBBI','KALGO']
            ],
            [
                "name"=>"FAKAI / SAKABA / WASAGU DANKO / ZURU",
                'lgas'=>['FAKAI','SAKABA','WASAGU DANKO','ZURU']
            ],
            [
                "name"=>"KOKO BESSE / MAIYAMA",
                'lgas'=>['KOKO BESSE','MAIYAMA']
            ],
            [
                "name"=>"NGASKI / SHANGA / YAURI",
                'lgas'=>['NGASKI','SHANGA','YAURI']
            ]
        ];

        foreach ($constituencies as $constituency) {
            $federalConstituency = FederalConstituency::firstOrCreate(['name'=>$constituency['name']]);
            foreach ($constituency['lgas'] as $lga) {
                $federalConstituency->federalConstituencyLgas()->create(['lga_id'=>$this->getThisLga($lga)->id]);
            }
        }
    }

    public function getThisLga($lgaName)
    {
        return Lga::where('name',$lgaName)->first();
    }
}
