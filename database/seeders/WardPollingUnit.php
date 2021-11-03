<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lga;
use App\Services\State\Aliero;
use App\Services\State\Arewa;
use App\Services\State\Argungu;
use App\Services\State\Augie;
use App\Services\State\Bagudo;
use App\Services\State\BirninKebbi;

class WardPollingUnit extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    use Aliero,Arewa,Argungu, Augie, Bagudo, BirninKebbi;

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
                        $this->registerAlieroWardsAndTheirPollingUnits($newLga, $wardCode);
                    break;
                    case 'Arewa':
                    break;
                        $this->registerArewaWardsAndTheirPollingUnits($newLga, $wardCode);
                    break;
                    case 'Argungu':
                        $this->registerArgunguWardsAndTheirPollingUnits($newLga, $wardCode);
                    break;
                    case 'Augie':
                        $this->registerAugieWardsAndTheirPollingUnits($newLga, $wardCode);
                    break;
                    case 'Bagudo':
                        $this->registerBagudoWardsAndTheirPollingUnits($newLga, $wardCode);
                    break;
                    case 'Birnin Kebbi':
                        $this->registerBirninKebbiWardsAndTheirPollingUnits($newLga, $wardCode);
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
            'Augie',
            'Bagudo',
            'Birnin Kebbi',
        ];
    }
}
