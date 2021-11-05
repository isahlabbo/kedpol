<?php

namespace App\services\State;

trait Gwandu{
    public function registerGwanduWardsAndTheirPollingUnits($lga,$wardCode)
    {
        foreach ($this->gwanduWards()['wards'] as $ward) {
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
public function gwanduWards()
    {
    return [
        'name'=>'Gwandu',
        'wards'=>[
            [
            'name'=>'CHEBERU / BUDA',
            'units'=>[
                    "AMORE BABBA - D/ FILI",
                    "AMORE BABBA - MAKARANTA",
                    "AMORE ADUWOYI",
                    "DANJEMA",
                    "MAGUN",
                    "CHEBERU",
                    "RUGGAR BOYE",
                    "GANDATOBE",
                    "MAITSANE",
                    "MAMMAWA",
                    "BADA",
                    "RANGO",
                    "WARARIN MAGAJI",
                    "GANDU",
                    "GARIN BUNZUGU",
                    "DANJEMA GABAS OPEN SPACE",
                    "PRIMARY HEALTH FACILITY WARARIN MAGAJI"
                ]
            ],
            [
                'name'=>'DALIJAN',
                'units'=>[
                        "BARAMA",
                        "LANGARMA",
                        "BUNDU SULE A",
                        "DALIJAN FILIN IBRO",
                        "DALIJAN G/HASSAN",
                        "DALIJAN G/BELLO B.C.",
                        "DALIJAN KASUWA",
                        "DALIJAN FILIN NUHU",
                        "NUFAWA",
                        "GWANYAL",
                        "WARARIN ZORAMWA",
                        "GWABARE MAIKASUWA",
                        "GWABARE MAIKASUWA MAKARANTA",
                        "GWABARE SAKKE",
                        "UNG KADE",
                        "PRIMARY HEALTH CARE BUNDU SULE",
                        "WATER BOARD/DAN LIM",
                        "GIDAN T.V DALIJAN",
                        "FILIN KIDI OPE SPACE",
                        "GIDAN RUWA WARARIN ZORAMAWA",
                        "HEALTH POST/S GUBIRWA"
                ]
            ],
            [
                'name'=>'DODORU',
                'units'=>[
                    "DODORU",
                    "UNG. INNA",
                    "GORKOMODO",
                    "KALBANGA",
                    "KAURARE KASUWA",
                    "KAURARE DAN FILI",
                    "BAKOSHI",
                    "YOLE BAKAHALBUWA",
                    "YOLE BIRNI",
                    "YOLE BIRNI/RUGGAR WURI",
                    "MAGORAWA",
                    "GURAMAWA",
                    "DODORO SHIYAR RUNJI"
                ]
            ],
            [
                'name'=>'GULMARE',
                'units'=>[
                    "GITTA BIRNI",
                    "GITTA NOMA",
                    "GULMARE MAKARANTA",
                    "GULMARE G. S/GOBIR",
                    "SAUNA KOCHI",
                    "GUYAWA",
                    "ILLELA",
                    "MADADI",
                    "TARI G/MAGAJI / DAN FILI",
                    "TARI G/MAGAJI '/ MAKARANTA",
                    "TARI KASUWA -GABAS",
                    "TARI KASUWA YAMMA",
                    "YOLE MAIMIYA",
                    "RUGGA WURI",
                    "MADADI GARKAR MAI GARI",
                    "GITTA NOMA PHC",
                    "ILLELA DAN FILI",
                    "KOCHI PRIMARY SCHOOL"
                ]
            ],
            [
                'name'=>'GWANDU MARAFA',
                'units'=>[
                        "DALHERAWA",
                        "DALHERAWA G/S/YAKI",
                        "GARKAR S/GABAS",
                        "GARKAR S/GWANDU",
                        "BINANCI G/MARAFA",
                        "BINANCI G/MARAFA MARINA",
                        "BINANCI KANWURI",
                        "ADARAWA",
                        "GARKAR M. JA'AFARU",
                        "GARKAR M. JA'AFARU KOFAR BAGURI",
                        "UNG. INUWA",
                        "DELHERAWA SHIYAR NOMA",
                        "RIJIYAR MAI KADA",
                        "RIJIYAR BARIKU",
                        "HUBBAREN LIMAN ZANGI",
                        "DARBEJIYAR ALU SABO"
                ]
            ],
            [
                'name'=>'GWANDU SARKIN FAWA',
                'units'=>[
                        "KURAR GISHIRI",
                        "GARBADAWA",
                        "GARKAR DANHASSAN",
                        "GARKAR ZAKI ZAKARA",
                        "GARKAR NAGOGGO",
                        "GARKAR GARBA ARGUNGU",
                        "GARKAR S/FAWA",
                        "HAMDALLAH",
                        "YOLE MAKANGARA",
                        "KURAR GISHIRI OPEN SPACE",
                        "ASIBITI OPEN SPACE",
                        "CHIEF MAGISTRATE COURT",
                        "TASHAR KELE OPEN SPACE",
                        "GUEST HOUSE OLD POLICE STATION"
                ]
            ],
            [
                'name'=>'KAMBAZA',
                'units'=>[
                    "KAMBAZA GARKAR UMARU",
                    "KAMBAZA KASUWA",
                    "KAMBAZA G/KULU HAJA",
                    "TAKARIN HAUSAWA",
                    "KAMBAZA FULANI G/MAGAJI",
                    "KAMBAZA G/S/FAWA",
                    "TAKARIN FULANI",
                    "MATSERI",
                    "DANMAGIRO",
                    "MAKERA OLD BOREHOLE",
                    "GIDAN TAKI",
                    "PHC KAMBAZA"
                ]
            ],
            [
                'name'=>'MARUDA',
                'units'=>[
                    "GUMBAI G/KOKANI",
                    "GUMBAI MAKARANTA",
                    "KUYU",
                    "JARIYAJE",
                    "KURYA",
                    "MARUDA KANWURI",
                    "MARUDA G/S/FAWA",
                    "NAMAN GOMA G/HAKIMI",
                    "NAMAN GOMA MAKARANTA",
                    "KWAZARI - DAN FILI",
                    "KWAZARI - MAKARANTA",
                    "RUGGAR DAWA",
                    "SABON BIRNI",
                    "MAKERA NAMAN GOMA",
                    "IFAD KANWURI",
                    "BAICI S PAWA",
                    "ASIBITI RUGGA DAWA"
                ]
            ],
            [
                'name'=>'MALISA',
                'units'=>[
                    "GORA KWATTIDO G/DIKKO",
                    "GORA KWATTIDO DANFILI",
                    "GYARTAU",
                    "ILLELAR GORA",
                    "GORA SULLUBAWA G/MAIYAKI",
                    "GORA SULLUBAWA G/LIMAN",
                    "RUGGAR DUTSE",
                    "DABAGI - KANWURI",
                    "KARANGIYA MAKARANTA",
                    "KETARE - G/MAIGARI",
                    "TUFARA - G/MAIGARI",
                    "MALISA G/DIKKO",
                    "MALISA HUGIYAL",
                    "RINAYE",
                    "GURUNSHI - G/MAIGARI",
                    "GWABARARE ASIBITI G/DIKKO"
                ]
            ],
            [
                'name'=>'MASAMA KWASGARA',
                'units'=>[
                    "KWAZGARA MAKARANTA",
                    "WUROYANDU G/HAKIMI",
                    "BUDAI - G/HAKIMI",
                    "SASSEDA - MAKARANTA",
                    "MASAMA G/SANYINNA",
                    "MASAMA G/LIMAN",
                    "MASAMA MAKARANTA",
                    "MASAMA G/NOMA",
                    "BADADI",
                    "YALANGO G/MAIYAKI",
                    "RUMBUKI G/ HAKIMI",
                    "KOFAR BIRNI MASAMA"
                ]
            ],
              
        ]
    ];
    }
}