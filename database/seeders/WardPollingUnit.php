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
use App\Services\State\Bunza;
use App\Services\State\Dandi;
use App\Services\State\Fakai;
use App\Services\State\Gwandu;
use App\Services\State\Jega;
use App\Services\State\Kalgo;
use App\Services\State\KokoBesse;
use App\Services\State\Mayama;
use App\Services\State\Ngaski;
use App\Services\State\Sakaba;
use App\Services\State\Shanga;
use App\Services\State\Suru;
use App\Services\State\WasaguDanko;
use App\Services\State\Yauri;
use App\Services\State\Zuru;

class WardPollingUnit extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    use Aliero, Arewa, Argungu, Augie, Bagudo, BirninKebbi ,Bunza, Dandi, Fakai, Gwandu, Jega, Kalgo, KokoBesse, Mayama, Ngaski, Sakaba, Shanga, Suru, WasaguDanko,Yauri, Zuru;

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
                case 'Bunza':
                    $this->registerBunzaWardsAndTheirPollingUnits($newLga, $wardCode);
                break;

                case 'Dandi':
                    $this->registerDandiWardsAndTheirPollingUnits($newLga, $wardCode);
                break;

                case 'Fakai':
                    $this->registerFakaiWardsAndTheirPollingUnits($newLga, $wardCode);
                break;

                case 'Gwandu':
                    $this->registerGwanduWardsAndTheirPollingUnits($newLga, $wardCode);
                break;

                case 'Jega':
                    $this->registerJegaWardsAndTheirPollingUnits($newLga, $wardCode);
                break;

                case 'Kalgo':
                    $this->registerKalgoWardsAndTheirPollingUnits($newLga, $wardCode);
                break;

                case 'Koko Besse':
                    $this->registerKokoBesseWardsAndTheirPollingUnits($newLga, $wardCode);
                break;

                case 'Maiyama':
                    $this->registerMayamaWardsAndTheirPollingUnits($newLga, $wardCode);
                break;

                case 'Ngaski':
                    $this->registerNgaskiWardsAndTheirPollingUnits($newLga, $wardCode);
                break;

                case 'Sakaba':
                    $this->registerSakabaWardsAndTheirPollingUnits($newLga, $wardCode);
                break;

                case 'Shanga':
                    $this->registerShangaWardsAndTheirPollingUnits($newLga, $wardCode);
                break;

                case 'Suru':
                    $this->registerSuruWardsAndTheirPollingUnits($newLga, $wardCode);
                break;

                case 'Wasagu Danko':
                    $this->registerWasaguDankoWardsAndTheirPollingUnits($newLga, $wardCode);
                break;

                case 'Yauri':
                    $this->registerYauriWardsAndTheirPollingUnits($newLga, $wardCode);
                break;

                case 'Zuru':
                    $this->registerZuruWardsAndTheirPollingUnits($newLga, $wardCode);
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
            'Bunza',
            'Dandi',
            'Fakai',
            'Gwandu',
            'Jega',
            'Kalgo',
            'Koko Besse',
            'Maiyama',
            'Ngaski',
            'Sakaba',
            'Shanga',
            'Suru',
            'Wasagu Danko',
            'Yauri',
            'Zuru',
            
            
        ];
    }
}
