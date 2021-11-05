<?php

namespace App\services\State;

trait KokoBesse{
    public function registerKokoBesseWardsAndTheirPollingUnits($lga,$wardCode)
    {
        foreach ($this->kokoBesseWards()['wards'] as $ward) {
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
public function kokoBesseWards()
    {
    return [
        'name'=>'Koko Besse',
        'wards'=>[
            [
            'name'=>'KOKO MAGAJI',
            'units'=>[
                    "GARKAR SARKI",
                    "BUMAWA",
                    "BADARAWA",
                    "DANDABI",
                    "DANKADE",
                    "GARKAR MAGAJI I",
                    "GARKAR MAGAJI / YAKI DA JAHILCI",
                    "GARKAR IDRIS KOKO",
                    "GARKAR WAKILI",
                    "GARKAR ISA NAGWARONYO",
                    "ASIBITI (DISPENSARY)",
                    "SHIYAR KASUWAR GARI KOKO",
                    "WURYA MODEL PRIMARY SCHOOL",
                    "GENERAL HOSPITAL KOKO",
                    "SHIYAR GIDAN WAYA KOKO",
                    "DAN-KADE B",
                    "RIJIYAR KWAKWARA KOKO",
                    "GOVERNMENT SCIENCE COLLEGE KOKO",
                    "SHIYAR GWARNO",
                    "TASHAR BOKA",
                    "TASHAR BOKO B",
                    "SHIYAR MUSA TIMERI KOKO",
                    "GIDAN GONA RIMA",
                    "ROUNDABOUT KASUWA KOKO"
                ]
            ],
            [
                'name'=>'ILLELA S GARI',
                'units'=>[
                    "KOKO MAGAJI PRIMARY SCHOOL",
                    "KAWON IDI TSOHO",
                    "DAN DASHE",
                    "GARKAR UMARU BA'ARE I",
                    "GARKAR UMARU BA'ARE II",
                    "GWADABAWA",
                    "ILLELA GABAS",
                    "ILLELA YAMMA",
                    "TUNGAR M. BAKO",
                    "TUNGAR ATTO",
                    "NASSARAWA",
                    "SABON GARI MURTSATSE",
                    "GOVERNMENT ALMAJIRI SCHOOL KOKO",
                    "SABON GARI OVERHEAD TANK",
                    "SHIYAR MAKABARTA KOKO",
                    "GIDAN WUTA R.E.B",
                    "SABON GARI",
                    "SABON GARI GIDAN RUWA",
                    "NANA AISHA MEMORIAL CLIMIC KOKO",
                    "KOKO GOVERNMENT LODGE"
                ]
            ],
            [
                'name'=>'KOKO FIRCIN',
                'units'=>[
                    "MAKARANTA / SALIHU M. P. S.",
                    "G. R. A. , KWANA",
                    "GARKAR LIMAN",
                    "GARKAR NOMA BAKI I",
                    "GARKAR NOMA BAKI II",
                    "AKASA KOKO",
                    "GARKAR BAGIRE",
                    "KOKO KAWO",
                    "YAKI DA JAHILCI",
                    "MAKARANTA NIZZAMIYYA",
                    "GARKAR WAKILI",
                    "MARINA BABBA",
                    "MAKARANTA/SALIHU MPS B",
                    "TURAKU TSOHUWAR KASUWA",
                    "ASIBITIN JARIRAI MICH KOKO",
                    "NUHU KOKO PRIMARY SCHOOL",
                    "MALLAMAWA KOKO",
                    "MAGISTRATE COURT KOKO",
                    "GIGINYA PRIMARY SCHOOL KOKO",
                    "TUDUN WADA TRANSFORMER",
                    "MAHAUTA TSOHUWAR KASUWA KOKO",
                    "MAYANKA KOKO",
                    "KAURA MODEL PRIMARY SCHOOL",
                    "RIJIYAR YONGU TEGA",
                    "DAGWALAN KALIN ABU GARDI",
                    "RIJIYAR GANGAREN DAGWALLA KOKO",
                    "MAKARANTA NIZAMIYYA B"
                ]
            ],
            [
                'name'=>'DADA/ ALELU',
                'units'=>[
                    "MAKARANTA DADA",
                    "YAMMA DADA",
                    "GUSAU /T.LALLE",
                    "JADADIN DADA",
                    "ALELU",
                    "DADA DISPENSARY"
                ]
            ],
            [
                'name'=>'JADADI',
                'units'=>[
                    "JADADI YAMMA",
                    "JADADI GABAS",
                    "JADADI KUDU",
                    "DANNIKI/T.ILLO/T.M. HANTSI"
                ]
            ],
            [
                'name'=>'LANI MANYAN /TAFUKKA SHIBA',
                'units'=>[
                    "LANI GARKAR SARKI",
                    "LANI KASUWA",
                    "LANI S/GARI",
                    "LANI MARGA YAWA",
                    "MANYAN TAFUKKA YAMMA",
                    "MANYAN TAFUKKA GABAS",
                    "SHIBA/KAMFA",
                    "LANI RIJIYAR FARENSI",
                    "LANI KASUWA B",
                    "KAMFA"
                ]
            ],
            [
                'name'=>'BESSE',
                'units'=>[
                    "RANGO, GIDAN BAKI",
                    "RANGO AGADI",
                    "KURBA",
                    "SIFAWA",
                    "R. DIKKO ALIYA",
                    "UNGUWAR MAGAJI",
                    "UNGUWAR SAUNA",
                    "UNG. HAUSAWA / MAKARANTA",
                    "TUNGAR SAINI",
                    "GWARAFA",
                    "T/GAYYA",
                    "TUDUN BUDE",
                    "R/DIKKO MACCA",
                    "PHC BESSE",
                    "BESSE GIDAN RUWA",
                    "SABON GARI NURSERY SCHOOL BESSE",
                    "SIFAWA B",
                    "UNGUWAR MAGAJI B",
                    "UNGUWAR HAUSAWA MAKARANTA B"
                ]
            ],
            [
                'name'=>'TAKWARE',
                'units'=>[
                    "RAFIN ALHAJI",
                    "TUNGAR MAGAJI",
                    "TUNGAR DIKKO",
                    "TAKWARE",
                    "TUNGAR TANKARI",
                    "TUNGAR AMADU",
                    "TSOHON ASIBITI TUNGAR MAGAJI"
                ]
            ],
            [
                'name'=>'DUTSINMARI/ DULMERU',
                'units'=>[
                    "DUTSIN MARI GABAS",
                    "DUTSIN MARI YAMMA",
                    "SAMANAJI",
                    "BUMA",
                    "NASSARAWA",
                    "KARWA",
                    "R.BUDA MUYALA I",
                    "KALBADE",
                    "TUNGAR SAKKE",
                    "GWARGWABE",
                    "DULMERU",
                    "BUNGA",
                    "KENDAWA",
                    "TAHO",
                    "DUNJERE",
                    "TUNGA MUSA",
                    "MAZOJI",
                    "DUTSINMARI KASUWA",
                    "KARWA ZABARMAWA",
                    "MADALLA KASUWA",
                    "SAMANAJI KASUWA",
                    "BUMA B",
                    "GWARGWABEN BUDA MUYALA",
                    "TUNGAR RAIRAI"
                ]
            ],
            [
                'name'=>'ZARIYA KAKA-KALA/AMIRU',
                'units'=>[
                    "BESSAWA I",
                    "BESSAWA II",
                    "ZAGGAWA I",
                    "ZAGGAWA II",
                    "KALA-KALA I",
                    "KALA-KALA II",
                    "TUNGAR TUWO",
                    "TUNGAR JINGO",
                    "WADATA/FARFAJIYA",
                    "TUNGAR MAILYALI",
                    "TUNGAR ALH. MODO/T.HASSAN",
                    "TUNGAR BOMBO/M/SHINKAFA",
                    "GABAILO/KABAWA",
                    "T/TUNE/T.ATIKU",
                    "ZARIYA KALA-KALA SECONDARY SCHOOL",
                    "KASUWA/MAHAUTA",
                    "YAR CEDIYA"
                ]
            ],
            [
                'name'=>'MADACCI HIRINI',
                'units'=>[
                    "GWARGWABE",
                    "FIRINI",
                    "MADACCI",
                    "GWARAM",
                    "MAIHAKO",
                    "U/SANYI",
                    "SAKKA",
                    "TUNGAR BOKA",
                    "TUNGAR HABIBU",
                    "TUNGAR MAJE",
                    "FIRINI BUNDU",
                    "FIRINI KASUWA",
                    "SAKKA B"
                ]
            ],
            [
                'name'=>'MAIKWARI/KARAMAR DAMBA/BAKOSHI',
                'units'=>[
                    "SHIYAR NOMA DAMBA",
                    "KASUWA NAGWADE",
                    "BAKOSHI",
                    "MAIKWARI",
                    "CHEGIRI",
                    "TUNGAR GIMBA",
                    "TALLE",
                    "TUNGAR MAGAJI",
                    "TUNGAR JATAU",
                    "AMIRU GARBA",
                    "DALIJAN",
                    "TAFKIN KANYA",
                    "TUNGAR WAYA",
                    "IBERE",
                    "TUNGAR BAKON GIWA",
                    "SHIYAR NOMA PRIMARY SCHOOL DAMBA",
                    "DAMBA GOVERNMENT DAY JUNIOR SECONDARY SCHOOL",
                    "DAMBA DISPENSARY",
                    "PRIMARY HEALTH CARE PHC BAKOSHI"
                ]
            ],
            
        ]
    ];
    }
}