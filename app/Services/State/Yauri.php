<?php

namespace App\services\State;

trait Yauri{
    public function registerYauriWardsAndTheirPollingUnits($lga,$wardCode)
    {
        foreach ($this->yauriWards()['wards'] as $ward) {
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
public function yauriWards()
    {
    return [
        'name'=>'Yauri',
        'wards'=>[
            [
            'name'=>'CHULU/KOMA',
            'units'=>[
                "KOMA MAKARANTA",
                "TUNGA ALH. SANI",
                "UNG. BAKIN RUWA",
                "TUNGAN MAKERI",
                "GUNGUN YARIMAWA",
                "CHULU G/HAKIMI",
                "CHULU G/NOMA SULE",
                "YITA VILLAGE",
                "KOMA MAKARANTA"
                ]
            ],
            [
                'name'=>'GUNGUN SARKI',
                'units'=>[
                    "HIKIYA",
                    "KOFAR MAGINGA",
                    "BAHA G/HAKIMI",
                    "RUKUBALO PRIMARY SCHOOL",
                    "HIMAMBIRO G/HAKIMI ISYAKA 'A'",
                    "HINAMBIRO G/HAKIMI 'B'",
                    "BAHA PRIMARY SCHOOL",
                    "RUKUBALO G/HAKIMI",
                    "MURTALA SEC. SCH.",
                    "UNGUWAR BOHOLE",
                    "NITEL"
                ]
            ],
            [
                'name'=>'JIJIMA',
                'units'=>[
                    "KANGUNGU JIJIMA",
                    "JIJIMA FARANSAWA",
                    "TUNGAN MAISHAGALI",
                    "UNG. KUKA",
                    "JIJIMA SARKI",
                    "BARIKI",
                    "UTSUN",
                    "T/NOMA/T/ROGO"
                ]
            ],
            [
                'name'=>'TONDI',
                'units'=>[
                    "TONDI MAKARANTA HILALA",
                    "TONDI MAKARANTA GGSC",
                    "TILLO BUNZAWA",
                    "TSOHON TONDI",
                    "HILI KULA",
                    "HELA/YABON RUWA/UHUN 'A'",
                    "ROFIA/IKUM",
                    "TONDI GADA/GUSAU",
                    "GUNGUN SAKACE/TSAWA",
                    "HELA / YABON RUWA / UHU 'B'",
                    "TONDI GADA GUSAU DISPENSARY",
                    "TSOHON TONDI/SAWABU (OPEN SPACE)",
                    "TONDI MAKARANTA",
                    "COMPUTER BASED TESTING CENTRE",
                    "LOW COST PRIMARY SCHOOL",
                    "HELLA HIGH COURT",
                    "HELA YABON KUKA",
                    "HELA YABON RUWA UHU C OPEN SPACE"
                ]
            ],
            [
                'name'=>'YELWA CENTRAL',
                'units'=>[
                    "SHAGON GORO",
                    "SABON GARI PRIMARY SCHOOL",
                    "GARKAR MALAM TSOHO",
                    "GARKAR ALH. DANLADI",
                    "GARKAR ALH. KANE",
                    "GARKAR MAGATAKARDA",
                    "GARKAR SARKI",
                    "PALACE PRIMARY SCHOOL 'A'",
                    "PALACE PRIMARY SCHOOL B",
                    "SABON GARI PRIMARY SCH. B",
                    "STATE LIBRARY",
                    "UNGUWAR DANGALADIMA",
                    "POLICE BARRACKS",
                    "UNGUWAR MALAM",
                    "SABON GARI PRIMARY SCH.",
                    "JSS SABON GARI",
                    "KASUWAR KAMBARI",
                    "GARKAR SARKI",
                    "SARKIN YAKI OPEN SPACE",
                    "POST OFFICE"
                ]
            ],
            [
                'name'=>'YELWA/EAST',
                'units'=>[
                    "GARKAR ALH. MAIGANDI",
                    "WALI PRIMARY SCHOOL 'A'",
                    "WALI PRIMARY SCHOOL 'B'",
                    "GARKAR MAL. NA FARANSI",
                    "GARKAR SA'ADU MAI KWANO",
                    "G/S.T.",
                    "NYSC ZONAL OFFICE",
                    "G/M NABAKABE",
                    "SAIDU MAKERI ILLELA (OPEN SPACE)",
                    "YAURI TOWN HALL",
                    "UNGUWAR DOSO",
                    "UNGUWAR MALAMAI (OPEN SPACE)",
                    "UNGUWAR MALAMAI DISPENSARY"
                ]
            ],
            [
                'name'=>'YELWA/NORTH',
                'units'=>[
                    "WAJE PRIMARY SCHOOL 'A'",
                    "T/BINDIGA",
                    "HUTAWA PRIMARY SCHOOL",
                    "WORKSHOP",
                    "PRISON YARD",
                    "G/NOMA",
                    "G/ALH. ANARUWA",
                    "UNG. KABO",
                    "UNG SARKAWA",
                    "ABARSHI SEC. SCH.",
                    "GIDAN CUSTOM",
                    "GOVT. SEC. SCHOOL",
                    "UNGUWAR SARKAWA 'B' (OPEN SPACE)",
                    "POLICE QUARTERS",
                    "SUB TRAESURY",
                    "UNG. MAI DAMA MAI KILISHI",
                    "NASARAWA PRI. SCHOOL",
                    "GIDAN KOTU"
                ]
            ],
            [
                'name'=>'YELWA SOUTH',
                'units'=>[
                    "GARKAR YAN TAWAYE",
                    "GARKAR BASIRU",
                    "G/ALH. MAIBARIKI 'A'",
                    "G/ALH. MAIBARIKI 'B'",
                    "G/SARKIN ALARU",
                    "G/ALH - MANU",
                    "G/WALI",
                    "G/M NA ANNABI",
                    "TSOHUWAR TASHA",
                    "G/YAR YAURI",
                    "TURAKU",
                    "UNG. YANKILISHI",
                    "UNG. BARMO",
                    "KANDAHAR",
                    "NIZAMIYYA PRI. SCH",
                    "NIZAMIYYA NURSERY SCHOOL",
                    "VETINARARY CLINIC",
                    "KASUWAN YAN TANKWA"
                ]
            ],
            [
                'name'=>'YELWA WEST',
                'units'=>[
                    "GARKAN SARKIN FAWA JIDO",
                    "G/ALH. SALELE TELA",
                    "ZANGO PRIMARY SCHOOL",
                    "GIDAN HABIBU BALA",
                    "GIDAN AUDU TILLITI",
                    "TSAMIYAR CINEMA",
                    "G/TUNDE BAYARBE",
                    "ILLELA PHC",
                    "AMIR ABDULLAHI NIZAMIYYA",
                    "UNG MALAM BALA",
                    "L.G.E.A NI'IMA"
                ]
            ],
            [
                'name'=>'ZAMARE',
                'units'=>[
                    "ZAMARE PRIMARY SCHOOL",
                    "ZAMARE ALH. KUTA",
                    "BARISHI",
                    "ALH. SHARRU JALBABU",
                    "G/HARUNA DOGOJI",
                    "UNG. DAMISA 'A'",
                    "GARKAR YAHAYA UKANGALA",
                    "KANGUNGU ZAMARE",
                    "HIBIRABU PRIMARY SCHOOL",
                    "ZAMARE HEALTH CARE CENTRE",
                    "ZAMARE CENTRE GARAGE",
                    "BARISHI GDSS"
                ]
            ],
            
            
        ]
    ];
    }
}