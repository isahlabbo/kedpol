<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lga;
use App\Services\State\Aliero;
use App\Services\State\Arewa;
use App\Services\State\Argungu;

class WardPollingUnit extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    use Aliero,Arewa,Argungu;

    public function formatCode($code, $step)
    {
        if($step == 1){
            if($code <10){
                $code = '0'.$code;
            }
        }else{
            if($code <10){
                $code = '00'.$code;
            }elseif($code < 100){
                $code = '0'.$code;
            }
        }
        return $code;
    }

    public function run()
    {
        foreach ($this->lgas() as $lga) {
            $lgaCode = 1;

            //create lga and the name is  $lga['name']
            $newLga = Lga::firstOrCreate(['name'=>$lga,'code'=>$this->formatCode($lgaCode,1)]);
            
            $wardCode = 1;
            switch ($lga) {
                case 'Aliero':
                    foreach ($this->alieroWards()['wards'] as $ward) {
                        // create wards with $ward['name'] as name
                        $newWard = $newLga->wards()->firstOrCreate(['name'=>$ward['name'],'code'=>$this->formatCode($wardCode,1)]);
                        $unitCode = 1;
                        foreach ($ward['units'] as $key => $value) {
                            // create unit with $unit['code'] as code and $unit['name'] as name of the unit
                            $newWard->pollingUnits()->firstOrCreate(['name'=>$value,'code'=>$this->formatCode($unitCode,2)]);
                            $unitCode++;
                        }
                        $wardCode++;
                    }
                    break;
                    case 'Arewa':
                    foreach ($this->alieroWards()['wards'] as $ward) {
                        // create wards with $ward['name'] as name
                        $newWard = $newLga->wards()->firstOrCreate(['name'=>$ward['name'],'code'=>$this->formatCode($wardCode,1)]);
                        $unitCode = 1;
                        foreach ($ward['units'] as $key => $value) {
                            // create unit with $unit['code'] as code and $unit['name'] as name of the unit
                            $newWard->pollingUnits()->firstOrCreate(['name'=>$value,'code'=>$this->formatCode($unitCode,2)]);
                            $unitCode++;
                        }
                        $wardCode++;
                    }
                    break;
                    case 'Argungu':
                    foreach ($this->argunguWards()['wards'] as $ward) {
                        // create wards with $ward['name'] as name
                        $newWard = $newLga->wards()->firstOrCreate(['name'=>$ward['name'],'code'=>$this->formatCode($wardCode,1)]);
                        $unitCode = 1;
                        foreach ($ward['units'] as $key => $value) {
                            // create unit with $unit['code'] as code and $unit['name'] as name of the unit
                            $newWard->pollingUnits()->firstOrCreate(['name'=>$value,'code'=>$this->formatCode($unitCode,2)]);
                            $unitCode++;
                        }
                        $wardCode++;
                    }
                    break;
                default:
                    # code...
                    break;
            }
            
            $lgaCode++;
        }
    }

    public function lgas()
    {
        return [
            'Aliero',
            'Arewa',
            'Argungu',
        ];
    }
}
