<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ward;
use App\Models\lga;
use App\Models\StateConstituency;

class StateConstituencyTableSeeder extends Seeder
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
                "name"=>"ALIERO",
                "wards"=>[]
            ],
            [
                "name"=>"AREWA",
                "wards"=>[]
            ],
            [
                "name"=>"ARGUNGU",
                "wards"=>[]
            ],
            [
                "name"=>"AUGIE",
                "wards"=>[]
            ],
            [
                "name"=>"BAGUDO EAST",
                "wards"=>['BAGUDO/TUGA','BAHINDI/BOKI-DOMA','KENDE/KURGU','MATSINKAI/GEZA','SHARABI/KWANGUWAI','ZAGGA/KWASARA']
            ],
            [
                "name"=>"BAGUDO WEST",
                "wards"=>['BANI/TSAMIYA','ILLO/SABON GARI','KAOJE/GWAMBA','LAFAGU/GANTE','LOLO/GIRIS']
            ],
            [
                "name"=>"BIRNIN KEBBI NORTH",
                'wards'=>["BIRNIN KEBBI MAFARA","BIRNIN KEBBI DANGALADIMA","GAWASU""GWADANGWAJE","KOLA/TARASA","MAKERA", "MAURIDA/KARYO/UNG. MIJIN NANA"]
            ],
            [
                "name"=>"BIRNIN KEBBI SOUTH",
                'wards'=>["AMBURSA","GULUMBE","KARDI YAMMA","LAGGA","NASSARAWA I", "NASSARAWA II", "UJARIYO", "ZAURO"]
            ],
            [
                "name"=>"BUNZA",
                'wards'=>[]
            ],
            [
                "name"=>"DANDI",
                'wards'=>[]
            ],
            [
                "name"=>"FAKAI",
                'wards'=>[]
            ],
            [
                "name"=>"GWANDU",
                'wards'=>[]
            ],
            [
                "name"=>"JEGA",
                'wards'=>[]
            ],
            [
                "name"=>"KALGO",
                'wards'=>[]
            ],
            [
                "name"=>"KOKO BESSE",
                'wards'=>[]
            ],
            [
                "name"=>"MAIYAMA",
                'wards'=>[]
            ],
            [
                "name"=>"NGASKI",
                'wards'=>[]
            ],
            [
                "name"=>"SAKABA",
                'wards'=>[]
            ],
            [
                "name"=>"SHANGA",
                'wards'=>[]
            ],
            [
                "name"=>"SURU",
                'wards'=>[]
            ],
            [
                "name"=>"WASAGU DANKO EAST",
                'wards'=>["AYU","BENA","DAN UMARU /MAI RAI-RAI","WASAGU"]
            ],
            [
                "name"=>"WASGU DANKO WEST",
                'wards'=>["DANKO/MAGA","KANYA","KYABU/KANDU","RIBAH/MACHIKA","WAJE","YALMO/SHINDA","GWANFI/KELE"]
            ],
            [
                "name"=>"YAURI",
                'wards'=>[]
            ],
            [
                "name"=>"ZURU",
                'wards'=>[]
            ]
        ];

        foreach ($constituencies as $constituency) {
            $stateConstituency = StateConstituency::firstOrCreate(['name'=>$constituency['name']]);
            if(count($constituency['wards']) == 0){
                foreach($this->getThisLga($constituency['name'])->wards as $ward){
                    $stateConstituency->stateConstituencyWards()->create(['ward_id'=>$ward->id]);
                }
            }else{
                foreach ($constituency['wards'] as $ward) {
                    $stateConstituency->stateConstituencyWards()->create(['ward_id'=>$this->getThisWard($ward)->id]);
                }
            }
            
        }
    }

    public function getThisLga($lgaName)
    {
        return Lga::where('name',$lgaName)->first();
    }

    public function getThisWard($lgaName)
    {
        
        return Ward::where('name',$lgaName)->first();
    }
}
