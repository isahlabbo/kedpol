<?php

namespace App\services\State;

trait Mayama{
    public function registerMayamaWardsAndTheirPollingUnits($lga,$wardCode)
    {
        foreach ($this->mayamaWards()['wards'] as $ward) {
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
public function mayamaWards()
    {
    return [
        'name'=>'Mayama',
        'wards'=>[
            [
            'name'=>'ANDARAI /KURUNKUDU/ZUGUN LIBA',
            'units'=>[
                "ANDARAI PRIMARY SCHOOL (ANDARAI KAURA)",
                "KASUWAR DAJI (ANDARAI BIRNI)",
                "ANDARI PRI. SCH. II (ANDARAI MAGAJI)",
                "ANDARI PRI. SCH. II (ANDARAI MALLAMAWA)",
                "SABON GARI PRI. SCH (SABON GARI TUNGA MAMMAN)",
                "FERMA OFFICE (KWARI KWASA)",
                "KURUNKUDU PRI SCH (KURUKUDU FADA)",
                "KURUNKUDU AREWA DISPENSARY (KURUN-KUDU AREWA)",
                "KURUNKUDU DISPENSARY (KURUNKUDU BAUCHI)",
                "ZUGUN LIBA PRI SCH (ZUGUN LIBA GARKA HAKIMI)",
                "ZUGUN LIBA DISPENSARY(ZUGUN LIBA SHIYAR YAMMA)",
                "KANARU PRI SCH (KANARU)",
                "ARAUSAYA PRI SCH (ARAUSAYA GARKA HAKIMI)",
                "GDSS ANDARAI",
                "PHC ANDARAI",
                "ANDARAI KASUWA GARI"
                ]
            ],
            [
                'name'=>'GIWA TAZO /ZARA',
                'units'=>[
                    "GIWATAZO PRI SCH (GIWATAZO FADA)",
                    "GIWATAZO PRI SCH (GIWATAZO GINGA)",
                    "TSALIBI PRI SCH (TSALIBI)",
                    "UNGUWAR KURYA DISPENSARY (UNGUWAR KURYA FILIN KASUWA)",
                    "UNGUWAR KURYA PRI SCH (UNGUWAR KURYA GARBAR ALH BALA)",
                    "MAITAWAYE PRI SCH (MAITAWAYE)",
                    "OPEN SPACE (GEZOJI GARKAR HAKIMI)",
                    "RAFIN TOFA PRI SCH (RAFIN TOFA)",
                    "NIKKI PRI SCH (NIKKI FILIN KASUWA)",
                    "GIWATAZO DISPENSARY (GIWATAZO HERE/SHIYAR HERE)",
                    "ZARA BIRNI PRI SCH (ZARA BIRNIN SHIYAR YAMMA )",
                    "ZARA BIRNI DISPENSARY (ZARA BIRNI SHIYAR YAMMA)",
                    "ZARA NOMA PRI SCH (ZARA NOMA GARKAR HAKIMI)",
                    "DANFILI SHIYA LIMAN",
                    "NIKKI PRIMARY SCHOOL",
                    "GIWATAZO MAHAUTA",
                    "HILIN TUNI"
                ]
            ],
            [
                'name'=>'GUNBIN KURE',
                'units'=>[
                    "GUMBIN KURE PRI SCH (GUMBIN KURE FADA)",
                    "GUMBIN KURE PRI SCH (GUMBIN KURE ADARAWA)",
                    "OPEN SPACE (GUNDUN GAWA)",
                    "RUNFA PRI SCH (RUNFA GARKAR HAKII)",
                    "TSAMIYA PRI SCH (TSAMIYA)",
                    "GUMAWA PRI SCH (GUMAWA GARKAR HAKIMI)",
                    "GAMJEJI PRI SCH (GAMJEJI FADA GARKAR HAKIMI)",
                    "GAMJEJI PRI SCH (GAMJEJI MARINA)",
                    "GUMBIN KURE DISPENSARY (GUMBIN KURE MAFARAUTA)",
                    "GAMJEJI MAHAUTA",
                    "GUMBIN KURE MARINA"
                ]
            ],
            [
                'name'=>'KARAYE/ DOGONDAJI',
                'units'=>[
                    "KARAYE DISPENSARY (KARAYE FADA SHIYAR FADA)",
                    "KARAYE PRI. SCH. (KARAYE MASAKA'A')",
                    "KARAYE PRI. SCH. (KARAYE MASAKA'B')",
                    "J.S.S KARAYE (KARAYE SHIYAR DISPENSARY)",
                    "J.S.S KARAYE (KARAYE YAMMA DISPENSARY)",
                    "DOGON DAJI PRI SCH (DOGON DAJI FADA)",
                    "DOGON DAJI PRI. SCH. (DOGON DAJI SHIYAR GABAS)",
                    "MDGS CLINIC (DOGON DAJI DOGON DAJI FILIN KASUWA)",
                    "DOGONDAJI OLD DISPENSARY (DOGONDAJI GABAS GARKAR ALH",
                    "DUHUWA PRI SCH (DUHUWA GARKAR WAKALI)",
                    "DUHUWA DISPENSARY (DUHUWA SHIYAR YAMMA)",
                    "TUNGA PRI. SCH. (TUNGAR GHARKAR HAKIMI)",
                    "KARAYE PRI. SCH.(KARAYE YAMMA GARKAR TSOHO)",
                    "PHC KARAYE",
                    "KARAYE MODEL PRI. SCHOOL",
                    "KARAYE GIDAN TAKI",
                    "RAMIN NAKADI DANFILI KARAYE"
                ]
            ],
            [
                'name'=>'KAWARA/S/SARA/YARKAMBA',
                'units'=>[
                    "KAWARA PRI. SCH. (KAWARA FADA)",
                    "KAWARA PRI. SCH. (KAWARA GARKAR GALADIMA 'A'))",
                    "KAWARA PRI. SCH. (KAWARA GARKAR GALADIMA 'B')",
                    "KAWARA DISPENSARY (KAWARA SHIYAR LIMAN)",
                    "OPEN SPACE (TUNGAR YAHUZA NASSARAWA)",
                    "MAJIDI PRI. SCH. (MAJIDI FADA)",
                    "RUWAN FILI PRI. SCH. II (RUWAN FILI (GARKAR HAHINU)",
                    "RUWAN FILI PRI. SCH. I (RUWAN FILI (SHIYAR ATTAH)",
                    "RUWAN FILI PRI. SCH. I ( RUWAN FILI PRI SCH)",
                    "YAR KAMBA PRI. SCHOOL (YAR KAMBA GARKAR HAKIMI)",
                    "YARKAMBA DISPENSARY (YAR KAMBA GIDAN BAKI)",
                    "SABON SARA DISPENSARY (SABON SARA GARKAR HAKIMI)",
                    "SABON SARA PRI. SCH. (SABON SARA GARKAR ALH AUDU M)",
                    "SABON SARA PRI SCH (SABON SARA GARKAR ALH SANI)",
                    "KAWARA MODEL PRIMARY SCHOOL",
                    "YARKAMBA DISPENSARY"
                ]
            ],
            [
                'name'=>'KUBERI GIDIGA',
                'units'=>[
                    "GIDIGA PRI. SCH. (GIDIGA FADA)",
                    "GIDIGA PRI. SCH. (GIDIGA SHIYAR IDI)",
                    "UNGUWAR SANDA PRI. SCH. (UNGUWAR SANDA)",
                    "KUBERI PRI. SCH. (KUBERI MARINA)",
                    "KUBERI DISPENSARY ( KUBERI GARKAR HAKIMI)",
                    "RAFIN NAGINDI PRI. SCH. (RAFIN NAGINDI KASUWA)",
                    "RAFIN NAGINDI DISPENSARY (RAFIN NAGINDI MARINA)",
                    "GIDIGA DISPENSARY ( GIDIGA WOLAWA)",
                    "KUBERI KAURA DANFILI",
                    "KUBERI MASAKA"
                ]
            ],
            [
                'name'=>'LIBA / DANWA / KUKA KOGO',
                'units'=>[
                    "LIBA DISPENSARY (LIBA FADA FILIN KASUWA )",
                    "KWATALO PRI. SCH. (KWATALO GARKAR HAKIMI)",
                    "KWATALO DISPENSARY (KWATALO FILIN KASUWA)",
                    "RURA FADA DISPENSARY (RURAL FADA GARKAR HAKIMI)",
                    "AIDA MDGS DISPENSARY (AIDA FADA FILIN KASUWA)",
                    "MAGWARADA PRI. SCH. (MAGWARADA GARKAR HAKIMI)",
                    "AIDA PRIMARY SCHOOL (AIDA MARKE)",
                    "DANYEN GARI PRI. SCHOOL (DANYEN GARI MAKERA)",
                    "KUKA KOGO PRI. SCHOOL (KUKA KOGO SHIYAR FADA)",
                    "YAR JEGA PRI SCHOOL (YAR JEGA GARKAR HAKIMI)",
                    "JARGABA PRI. SCHOOL (JAR GABA FILIN KASUWA)",
                    "MAISHEKA DISPENSARY (MAISHEKA)",
                    "DANWA PRI. SCH. (DANWA FADA GARKAR RAFI)",
                    "DANWA DISPENSARY (DANWA GARKAR IDI MAGAJI)",
                    "OPEN SPACE (TUNGAR MAGAJI GARKAR LIMAN)",
                    "OPEN SPACE (TSATSUMBAI GARKAR HAKIMI)",
                    "LIBA PRI SCHOOL (LIBA GARKAR AUWAL)",
                    "MAISHEKA GIDAN RUWA"
                ]
            ],
            [
                'name'=>'MAIYAMA',
                'units'=>[
                    "MAIYAMA MODEL PRI. SCH. (MAIYAMA FADA 'A' GARKAR LIMAN)",
                    "MAIYAMA MODEL PRI. SCH. (MAIYAMA FADA 'B' GARKAR DANGALADIMA)",
                    "MAIYAMA MODEL PRI. SCH. (MAIYAMA FILIN KUNTUM 'A')",
                    "MAIYAMA MODEL PRI. SCH. (MAIYAMA FILIN KUNTUM 'B')",
                    "MAIYAMA GRA SSS OFFICE (MAIYAMA MARINA)",
                    "MAIYAMA TUDUN ZARUMAI PRI. SCH. (MAIYAMA GARKAR ALH HARUNA JADA)",
                    "MAIYAMA TUDUN ZARUMAI PRI. SCH. (MAIYAMA KAURA MAKERAR DAN KAKALE)",
                    "G.D.S.S MAIYAMA (MAIYAMA KASUWAR KULI-KULI)",
                    "MCH MAIYAMA",
                    "TSOHUWAR KASUWA DANFILI",
                    "GIDAN RUWA KASUWAR INWALA",
                    "DANFILI RIJIYAR ALASAN ANU",
                    "GRA MAIYAMA",
                    "BOREHOLE, KATANGA ROAD S/GARI",
                    "GGSS MAIYAMA"
                ]
            ],
            [
                'name'=>'MUNGADI / BOTORO',
                'units'=>[
                    "MUNGADI PRI. SCH. (MUNGADI BIRNI 'A')",
                    "MUNGADI DISPENSARY (MUNGADI BIRNI 'B')",
                    "MUNGADI PRI. SCH. (MUNGADI RINAYE)",
                    "MUNGADI KASUWAR DAJI (MUNGADI KAURA 'A')",
                    "MUNGADI PRI. SCH. II (MUNGADI UNGUWAR FULANI)",
                    "MUNGADI KASUWAR DAJIO (MUNGADI KAURA 'B')",
                    "MUNGADI MDGS CLINIC (MUNGADI GARKAR DANDANE 'A')",
                    "MUNGADI MDGS CLINIC (MUNGADI GARKAR DANDANE 'B')",
                    "GYASUWA PRI. SCH. (GYASUWA GARKAR HAKIMI)",
                    "BOTORO PRI. SCH. (BOTORO KAURA 'A')",
                    "BOTORO PRI. SCH. (BOTORO KAURA 'B')",
                    "MUNGADI COURT YARD",
                    "UNGUWAR FULAN IGIDAN RUWA",
                    "TITIN HABBI MUNGADI",
                    "RIJIYAR MUKWALLA MUNGADI",
                    "BOTORO MAKERA",
                    "BOTORO MAKWALLA DANFILI"
                ]
            ],
            [
                'name'=>'SAMBAWA/ MAYALO',
                'units'=>[
                    "SAMBAWA PRI. SCH. (SAMBAWA FADA)",
                    "SAMBAWA PRI. SCH. (SAMBAWA KAURA 'A')",
                    "SAMBAWA OLD DISPENSARY (SAMBAWA KAURA 'B')",
                    "SAMBAWA AREA COURT (SAMBAWA JARGABA)",
                    "KANGIWA PRI. SCH. (KANGIWA GARKAR HAKIMI)",
                    "UNGUWAR SHUAIBU PRI. SCH. (UNGUWAR SHUAIBU)",
                    "UNGUWAR AUTA PRI. SCH. (UNGUWAR AUTA)",
                    "UNGUWAR ABU DISPENSARY ( UNGUWAR ABU)",
                    "MAYALO DISPENSARY (MAYALO FADA SHIYAR FADA)",
                    "MAYALO DISPENSARY (MAYALO FADA 'A')",
                    "MAYALO PRIMARY SCH. (MAYALO SHIYAR MAGAJI)",
                    "WAWA KARASA PRI. SCH. ( WAWA KASARA)",
                    "OPEN SPACE (BADARIYA GARKAR HAKIMI)",
                    "SAMBAWA MARINA",
                    "KAURA RINI",
                    "SAMBAWA PRIMARY SCHOOL",
                    "KANGIWAPRIMARY SCHOOL",
                    "MAYALO CIVIL DEFENCE",
                    "MAYALO ASIBITI",
                    "MAYALO PRIMARY SCHOOL"
                ]
            ],
            [
                'name'=>'SARAN DOSA / GUBBA',
                'units'=>[
                    "SARANDOSA PRI. SCH. (SARANDOSA GARKAR HAKIMI)",
                    "SARANDOSA DISPENSARY (SARANDOSA SHIYAR GABAS)",
                    "SARANDOSA PRI. SCH. (SARANDOSA GARKAR MAL. MUAZU)",
                    "GUBBA DISPENSARY (GUBBA GARKAR HAKIMI)",
                    "GUBBA PRI. SCH. (GUBBA FILIN KASUWA)",
                    "ACHIKARATU DODO PRIMARY SCH. ( ACHIKARATU DODO GARKAR HAKIMI)",
                    "ACHIKARATU YAHAYA PRI. SCH. (ACHIKARATU YAHAYA GARKAR HAKIMI)",
                    "ACHIKARATU DODO PRIMARY SCH. ( ACHIKARATU UBAN DAWAKI GARKAR HAKIMI)",
                    "HULKUI DISPENSARY (HULKULI GARKAR HAKIMI)",
                    "RAFIN GUZUMA PRI. SCH. (RAFIN GUZUMA GARKAR HALIMI)",
                    "OPEN SPACE (SABON GARI GARKAR HAKIMI)",
                    "SARANDOSA PRIMARY SCHOOL",
                    "SARANDOSA SHIYAR YAMMA",
                    "RAFIN GUZUMA PRIMARY SCHOOL"
                ]
            ],
            
        ]
    ];
    }
}