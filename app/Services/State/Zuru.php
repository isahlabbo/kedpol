<?php

namespace App\services\State;

trait Zuru{
    public function registerZuruWardsAndTheirPollingUnits($lga,$wardCode)
    {
        foreach ($this->zuruWards()['wards'] as $ward) {
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
public function zuruWards()
    {
    return [
        'name'=>'Zuru',
        'wards'=>[
            [
            'name'=>'BEDI',
            'units'=>[
                "BEDI FADA 'A'",
                "UNG. PANSI UBANDAWAKI",
                "UNG. JOJI",
                "UNG. S/FAWA",
                "UNG. G/TAMBARI",
                "UNG. GARA",
                "KWANCI MANGA",
                "SOMDARO",
                "GAMJI DAKO",
                "DOMO YUMU",
                "ZAGDERI",
                "BEDI PADA B",
                "GOVT.DAY SES. SCH. BEDI",
                "U.M.U RIMI OPEN SPACE",
                "DONGO HARUNA KWANCI MANGA AREA",
                "DONGO PRIMARY SCHOOL",
                "FILIN JIRGI AREA",
                "KWEZGA PRIMARY SCHOOL",
                "ZAGDERI PRIMARY SCHOOL",
                "UNG. SARKIN HAUSAWA BEDI"
                ]
            ],
            [
                'name'=>'CIROMAN DABAI',
                'units'=>[
                    "DABAI FADA",
                    "SABON G/DABARI",
                    "UMAMA MUSA 'A'",
                    "UMAMA MUSA",
                    "B/GALADIMA",
                    "RESGE DUMBI",
                    "UNG. M. MARGISHI",
                    "KWENDU",
                    "UNG. S/UBAN DAWAKI",
                    "BANTO WUYA",
                    "DABAI MARKET",
                    "UKOTO PRIMARY SCHOOL",
                    "LAYIN BAKO TESE",
                    "GOMMAWA",
                    "AGATA USMAN S/KIDI",
                    "ASIBITIN SEMSAWNE",
                    "UNG. DAURA GALADIMA"
                ]
            ],
            [
                'name'=>'ISGOGO/DAGO',
                'units'=>[
                    "ISGOGO FADA",
                    "KARKARA DAGO",
                    "UNG. GALADIMA",
                    "JAMBO",
                    "ZANGINA",
                    "UTUMU ISGOGO",
                    "ISGOGO DAY SEC. SCH.",
                    "GAMBO GOMO DAGO",
                    "DONKA(2) PRIMARY SCHOOL DAGO",
                    "KAGADAMA DAGO PRI. SCH.",
                    "DONKA(1) PRIMARY SCHOOL",
                    "JAMBO PRIMARY SCHOOL KADIMTI"
                ]
            ],
            [
                'name'=>'MANGA/USHE',
                'units'=>[
                    "AMANAWA PRIMARY SCHOOL",
                    "UNG. BAWA D/GUJIYA 'A'",
                    "UNG. BAWA D/GUDIYA 'B'",
                    "ELEMBELU",
                    "UNG. GUJIYA MAGAJI",
                    "MADUGU",
                    "MAGORO",
                    "UNG. MANGA",
                    "RIO",
                    "UNG. S/DUTSE",
                    "UNG. DUSTE USHE",
                    "MANGORON WABE",
                    "UNGUWAR KUTARE LEPROSY CENTRE",
                    "SARKU PRIMARY SCHOOL",
                    "UNGUWAR RIMI TOLL GATE",
                    "GOVERNMENT SCIENCE COLLEGE ZURU",
                    "UKAMBO PRIMARY SCHOOL",
                    "UDUNKUDU PRIMARY SCHOOL",
                    "GAZZI PRIMARY SCHOOL",
                    "MAGORO PRIMARY SCHOOL",
                    "TUNGAR MAESA",
                    "SUGA PRIMARY SCHOOL",
                    "KBARMA DISPENSARY",
                    "TARU DANGE PRIMARY SCHOOL",
                    "AKUMU DISPENSARY",
                    "UNG. ROTI PRIMARY SCHOOL",
                    "UNG. CHIROMA GONGO USHE"
                ]
            ],
            [
                'name'=>'RAFIN ZURU',
                'units'=>[
                    "G/AUDU BENA",
                    "G/BAKI",
                    "G/DAMATURU",
                    "G/S/MAI DOYA",
                    "G/TUKUR",
                    "G/ALH BUDO",
                    "SAMI GOMO PRIMARY SCHOOL 'A'",
                    "SAMI GOMO PRIMARY SCHOOL 'B'",
                    "DANGA GOMO PRIMARY SCHOOL",
                    "EMIRS PALACE",
                    "TASHAR RIMI",
                    "GARKAR RAFIN ZURU A",
                    "G.B.O. 'A'",
                    "G.B.O.",
                    "G.R.A.",
                    "OLD ZIE",
                    "DAMBO GOMO",
                    "ZANGO LANGARE",
                    "GARKAR MELI",
                    "GARKAR AUDU BENA BEHIND KEBBI HOME SAVINGS ZURU",
                    "FAKAI GUEST HOUSE",
                    "GARKAR ALH. MUSA AGEGE",
                    "LATE ALH. ALMU RESIDENCE",
                    "WATER BOARD",
                    "UHOLA TUDUN WADA",
                    "GARKAN SALIHU SAKABA",
                    "GARKAR MAIBATALIYA",
                    "STATE LIBRARY",
                    "OPEN SPACE LATE GHANDI GANTA RESIDENCE",
                    "ZANGA I GG GOMO",
                    "TRAINING CENTER SABON KASUWA ZURU",
                    "GIDAN RADIO ZURU",
                    "KALHU",
                    "UNGUWAN SARKIN HAUSAWA",
                    "TASHAR RIMI ROUNDABOUT",
                    "GARKAR WALI",
                    "LATE UMARU MATO RESIDENCE",
                    "MAGORORIN BYE PASS",
                    "LATE UMARU MATO RESIDENCE",
                    "OPEN SPACE GARKAN MANU GWALLI",
                    "DOGA",
                    "RAFIN MOSE DISPENSARY",
                    "ZANGA III SHALA",
                    "LOW COST",
                    "ZANGA II BABA GWENTA",
                    "MANGORORIN DAMBO GOMO",
                    "GARKAR JIBO INEC"
                ]
            ],
            [
                'name'=>'RIKOTO',
                'units'=>[
                    "G/KIRSO",
                    "G/S/BUNU 'A'",
                    "G/S/BUNU",
                    "TUDUN WADA P.S. (G/R.S MAIDAWA)",
                    "G/S/RIKOTO",
                    "S/G/RIKOTO PRIMARY SCHOOL",
                    "TWINS QUARTERS",
                    "VETINARARY CLINIC",
                    "TUNGAR DORO",
                    "PHC RIKOTO",
                    "SUFEE",
                    "UNGUWAR SABA (OPEN SPACE)",
                    "GIDAN KIFI",
                    "ZONAL H/COURT RIKOTO",
                    "TOKO MAGAJI PRI. SCHOOL",
                    "TUDUN WADA PRIMARY SCHOOL A",
                    "TUDUN WADA PRIMARY SCHOOL B",
                    "BORE HOLE S/RIKOTO",
                    "UNGUWAR KONGO GALADIMA (OPEN SPACE)",
                    "UNG HIGH COURT",
                    "GOVT DAY S/SCHOOL RIKOTO",
                    "UNG WANDA (KWATA)",
                    "RIKOTO COPERS LODGE",
                    "RIKOTO PRIMARY SCHOOL",
                    "PRIMARY EDU. BOARD",
                    "GARKAR SIDDI M GORORI (OPEN SPACE)",
                    "ZONAL VET CLINIC",
                    "T/DORO PRIMARY SCHOOL"
                ]
            ],
            [
                'name'=>'RUMU/DABEN SEME',
                'units'=>[
                    "DABAN SEME FADA",
                    "RUMU FADA",
                    "S/DUTSE PRIMARY SCHOOL",
                    "DELEMBO",
                    "UNG/UKWARI",
                    "DEHERGE",
                    "UZOGU",
                    "ZOMZOMO PRIMARY SCHOOL",
                    "GARKAN MAI UNGUWAN DEGA",
                    "GARKAN SARKIN RUMU",
                    "S/ GARIN RUMU SKILL AQUIST. CENTER"
                ]
            ],
            [
                'name'=>'SENCHI',
                'units'=>[
                    "GAMJI PRIMARY SCHOOL 'A'",
                    "SENCHI PRIMARY SCHOOL",
                    "T/BAHAGO",
                    "T/KIBIYA",
                    "T/RIMI",
                    "UNG. DUDU",
                    "UNG. DUDU RITTI",
                    "UNG/KUDUN GALADIMA",
                    "UNG. KWALI DANDARESO",
                    "SEMKOMOH PRI SCH",
                    "UROPHO PRI SCH",
                    "MAMA ARZIKI COMP SEC SCH",
                    "TUNGAR BAHAGO DISPANSORY",
                    "CHWAMARNA PRIM SCHOOL"
                ]
            ],
            [
                'name'=>'TADURGA',
                'units'=>[
                    "BERE UNG. KUDU",
                    "JIKKA",
                    "MAIKAHO",
                    "RAFIN GOMO",
                    "T/DUTSE",
                    "TADURGA FADA",
                    "UNG. HAUSAWA",
                    "T/GULBI",
                    "DIGORO PRIMARY SCHOOL.",
                    "GDSS ZODI/ TADURGA",
                    "AREA E.O OFFICE.",
                    "INDUNGU PRIMARY SCHOOL"
                ]
            ],
            [
                'name'=>'ZODI',
                'units'=>[
                    "BOGU MAKERA",
                    "DEKEINBE/DIGAGO",
                    "GADA/UBANDAWAKI",
                    "GOMAWA",
                    "GOBO TAMBARI",
                    "KERI DOGO LOKOMO",
                    "MARAFA GUDU",
                    "RAFI HITTA",
                    "SALAMA GURAGORI",
                    "KWARGINLA",
                    "ZODI",
                    "EDIBI LONGNO"
                ]
            ],            
        ]
    ];
    }
}