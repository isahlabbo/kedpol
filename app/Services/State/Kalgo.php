<?php

namespace App\services\State;

trait Kalgo{
    public function registerKalgoWardsAndTheirPollingUnits($lga,$wardCode)
    {
        foreach ($this->kalgoWards()['wards'] as $ward) {
            // create wards with $ward['name'] as name
            $newWard = $lga->wards()->firstOrCreate(['name'=>$ward['name'],'code'=>$this->formatCode($wardCode,1)]);
            $unitCode = 1;
            foreach ($ward['units'] as $key => $value) {
                // create unit with $unit['code'] as code and $unit['name'] as name of the unit
                $newWard->pollingUnits()->firstOrCreate(['name'=>$value,'code'=>$this->formatCode($unitCode,2)]);
                $unitCode++;
            }
            $wardCode++;
        }
    }
public function kalgoWards()
    {
    return [
        'name'=>'Kalgo',
        'wards'=>[
            [
            'name'=>'BADARIYAR MAGARZA',
            'units'=>[
                "BADARIYA GARI",
                "BIRI GARI",
                "HIRISHI GARI",
                "MAGARE/UNG. TUDU",
                "MAGARZA SHIYAR GABAS",
                "MAGARZA SHIYAR YAMMA",
                "SHIYAR FAMFO"
                ]
            ],
            [
                'name'=>'DANGOMA / GAYI',
                'units'=>[
                    "ASARARA GARI",
                    "BAKOSHI GARI",
                    "DANGOMA SHIYAR LIMAN",
                    "DANGOMA SHIYAR KUDU",
                    "GAYI SHIYAR RUNJI ASIBITI (GAYI SHIYAR RUNJI)",
                    "GAYI SHIYAR HAKIMI",
                    "TUNGAR NOMA GARI",
                    "YANGA HAUSA/FULANI",
                    "TSOLA GARI",
                    "SHIYAR HAKIMI ASIBITI",
                    "SHIYAR RUNJI GARAGE",
                    "DANGOMA SHIYAR ASIBITI"
                ]
            ],
            [
                'name'=>'DIGGI',
                'units'=>[
                    "SIDDIKU MARAFA PRI.SCH(DIGGI SHIYAR BOKKIRE)",
                    "DIGGI SHIYAR ILLELA 'A'",
                    "DIGGI SEC.SCH. DIGGI III (DIGGI KOFAR YAMMA)",
                    "DIGGI SHIYAR DANGALADIMA",
                    "DIGGI SHIYAR TURMAWA",
                    "UNG. ARAWA",
                    "DIGGI SHIYAR YALLABE",
                    "SABON GARIN DIGGI OPEN SPACE",
                    "SHARIA COURT AREA",
                    "RAMEN KOFAR YAMMA YAMMA",
                    "USMAN MAGAWATA NIZZAMIYA",
                    "SABUWAR RAYUWA AREA"
                ]
            ],
            [
                'name'=>'ETENE',
                'units'=>[
                    "GANGARE GARI",
                    "KETA HAUSAWA",
                    "KETA FULANI ASIBITI (KETA FULANI I)",
                    "KETA FULANI II PRIMARY SCHOOL (KETA FULANI II)",
                    "ETENE SHIYAR AREWA",
                    "ETENE SHIYAR KUDU",
                    "DANFILI KASUWA KETA HAUSAWA",
                    "SHIYAR FADA KASUWA"
                ]
            ],
            [
                'name'=>'KALGO',
                'units'=>[
                    "AMANAWA GARI ASIBITI (AMANAWA GARI )",
                    "KALGO SHIYAR AREWA I",
                    "KALGO SHIYAR AREWA II",
                    "KALGO TSAKIYA I",
                    "KALGO TSAKIYA II",
                    "KALGO SHIYAR KUDU I",
                    "KALGO SHIYAR KUDU II",
                    "UNGUWAR DIKKO",
                    "UNGUWAR JEJI",
                    "UNGUWAR SALE",
                    "AREWA 1 B",
                    "MODEL PRIMARY SCHOOL AREWA 2",
                    "NEW MARKET OPEN SPACE",
                    "LGA QUARTERS MARAFAKKA",
                    "SHIYAR MARAFA MAGISTRATE COURT",
                    "CIVIL DEFENSE OPEN SPACE",
                    "DANFILI AREA OPEN SPACE",
                    "TSOHON MASALLACIN IDI AREA OPEN SPACE",
                    "SHIYAR KUDU 2 OLD DISPENSERY",
                    "UNGUWAN ADOWA PS"
                ]
            ],
            [
                'name'=>'KUKA',
                'units'=>[
                    "BODARON GOGE GARI",
                    "GALARUN SANI GARI IA",
                    "GALARU KONGORO PRI. SCH GARI / B PRI.SCH (KONGORO PRI.SCH (GALARU SANI GARI IB ))",
                    "KUKA SHIYAR FADA",
                    "KUKA SHIYAR KASUWA",
                    "KUKA SHIYAR LIMANU",
                    "KOKANI GARI",
                    "SABANA GARI IA",
                    "SABANA GARI IB",
                    "UNGUWAR KWALLE",
                    "KUSA GA MASALLACI OPEN SPACE (UNGUWAR BAWACE)",
                    "UNGUWAR TUJI",
                    "KUKANI KALLAI ASIBITI ()"
                ]
            ],
            [
                'name'=>'MUTUBARI',
                'units'=>[
                    "BANGANNA GARI IA",
                    "BANGANNA GARI 1B DISPENSARY (BANGANNA GARI 1B)",
                    "MUTUBARI SHIYAR GABAS",
                    "MUTUBARI SHIYAR YAMMA",
                    "KUSA GA MASALLACI OPEN SPACE (HEREBE KWAIDOWO)",
                    "KUSA GA MASALLACI OPEN SPACE (TUNGA SABO GARI)",
                    "MUTUBARI DISPENSERY"
                ]
            ],
            [
                'name'=>'NA YILLWA',
                'units'=>[
                    "KUTUKULLU GARI",
                    "MANDINKA GARI",
                    "NAYILWA PRI.SCHOOL (NAYILWA GARI)",
                    "SANDARE GARI",
                    "UNGUWAR DODO",
                    "UNGUWAR YALLI",
                    "UNGUWAR RAFI I",
                    "UNGUWAR RAFI II",
                    "UNGUWAR MAIYAKI I",
                    "UNGUWAR MAIYAKI II",
                    "KWAKWARE",
                    "UNGUWAR WOWO",
                    "SHIYAR ASIBITI NAYILWA",
                    "WADATA OPEN SPACE"
                ]
            ],
            [
                'name'=>'WURO GAURI',
                'units'=>[
                    "KUTUKULLU GARI",
                    "MANDINKA GARI",
                    "NAYILWA PRI.SCHOOL (NAYILWA GARI)",
                    "SANDARE GARI",
                    "UNGUWAR DODO",
                    "UNGUWAR YALLI",
                    "UNGUWAR RAFI I",
                    "UNGUWAR RAFI II",
                    "UNGUWAR MAIYAKI I",
                    "UNGUWAR MAIYAKI II",
                    "KWAKWARE",
                    "UNGUWAR WOWO",
                    "SHIYAR ASIBITI NAYILWA",
                    "WADATA OPEN SPACE"
                ]
            ],
            [
                'name'=>'ZUGURU',
                'units'=>[
                    "ZUGURU SHIYAR KOGORE",
                    "KWUIMI GARI",
                    "ZUGURU SHIYAR LUNKE",
                    "ZUIGURU SHIYAR KASUWA",
                    "RIJIYAR KOGORE",
                    "BAKIN KASUWA OPEN SPACE"
                ]
            ],
           
            
        ]
    ];
    }
}