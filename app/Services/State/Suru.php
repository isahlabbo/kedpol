<?php

namespace App\services\State;

trait Suru{
    public function registerSuruWardsAndTheirPollingUnits($lga,$wardCode)
    {
        foreach ($this->suruWards()['wards'] as $ward) {
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
public function suruWards()
    {
    return [
        'name'=>'Suru',
        'wards'=>[
            [
            'name'=>'ALJANNARE',
            'units'=>[
                "VETENARARY CLINIC (ALJANNARE K/FADA)",
                "ALJANNARE MAKARANTA",
                "TSOHON FILIN BAGABADI (G/HAKIMI BAGABADI)",
                "BAGONI PRIMARY SCHOOL (BAGONI G/HAKIMI)",
                "FILIN CIWA (CIWA G/HAKIMI)",
                "GIGINYA GOMA G/HAKIMI",
                "JUROKI GARKAR HAKIMI",
                "KABE PRIMARY SCH. G/HAKIMI",
                "NASSARAWA PRIMARY SCH. G/HAKIMI",
                "SULGURU PRIMARY SCHOOL G/HAKIMI",
                "TANKWASARE TSOHON FILI G/HAKIMI",
                "TUNGAR AUDU BAZABARME G/HAKIMI",
                "TUNGAR ALHAJI G/HAKIMI",
                "TUDUN GERO PRIMARY SCHOOL G/HAKIMI",
                "TUNGAR IBRAHIM PRIMARY SCH. G/HAKIMI",
                "TUNGAR ABDULMUMINI G/HAKIMI",
                "K/FANA PRIMARY SCHOOL (K/FANA )",
                "ALJANNARE KOFAR FANA",
                "ALJANNARE TSOHUWAR ASIBITI",
                "ALJANNARE PRIMARY SCHOOL STAFF QUARTERS",
                "ALJANNARE KOFAR FANA GIDAN RUWA",
                "KOFAR FANA MAYANKA",
                "TUNGAR AUDU DISPENSARY",
                "TUNGAR ALHAJI CLINIC"
                ]
            ],
            [
                'name'=>'BANDAM',
                'units'=>[
                    "MAKARANTA BANDAN (G/HAKIMI)",
                    "BANDAN PRIMARY SCHOOL (K/FADA)",
                    "BARBAREJON PRIMARY SCHOOL (BARBAREJON BANDAN)",
                    "DOLEN BANDAN PRIMARY SCHOOL (G/HAKIMI)",
                    "T/DOLENKWANDAGE PRIMARY SCHOOL (G/HAKIMI)",
                    "GAWASA BABBA PRIMARY SCHOOL (G/HAKIMI)",
                    "G S S TINDIFAI (KALA-KALA TINDIFAI)",
                    "MATANKARAWA PRIMARY SCHOOL (G/HAKIMI)",
                    "SAKA PRIMARY SCHOOL (G/HAKIMI)",
                    "TINFIDAI PRIMARY SCHOOL (G/HAKIMI)",
                    "D/FILI WABBAKU (G/HAKIMI)",
                    "ZAKUWA CLINIC (ASIBITI)",
                    "ZAKUWA MAKARANTA G/HAKIMI",
                    "TUNGAR MALAN G/HAKIMI",
                    "TINDIFAI HOSPITAL",
                    "BANDAN HOSPITAL",
                    "FILIN SAMINAKA SAKA",
                    "TUNGAR MALAM TSOHUWA",
                    "FILIN KASUWA GAWASA",
                    "ZAKUWA FILIN KASUWA"
                ]
            ],
            [
                'name'=>'BARBAREJO',
                'units'=>[
                    "BARBAREJO MAKARANTA",
                    "BILBILA KASUWA (BILBILA FILI)",
                    "FANA SABO PRIMARY SCHOOL (DALLA MAGAWATA)",
                    "SABO PRIMARY SCHOOL (G/HAKIMI)",
                    "GIMBA SANI PRIMARY SCHOOL (G/HAKIMI)",
                    "MASAMA PRIMARY SCHOOL (G/HAKIMI)",
                    "SHIRE SHANGA PRIMARY SCHOOL (G/HAKIMI)",
                    "T/ARAWA PRIMARY SCHOOL (G/HAKIMI)",
                    "T/GAWO PRIMARY SCHOOL (G/HAKIMI)",
                    "T/IDRISU PRIMARY SCHOOL (G/HAKIMI)",
                    "T/LANTA FILI PRIMARY SCHOOL (LANTA FILI)",
                    "WADATA PRIMARY SCHOOL (G/HAKIMI)",
                    "D/FILI ZUGUN BASU (G/HAKIMI)",
                    "TUNGAR TINI FILIN BORE HOLE",
                    "BARBAREJO DISPENSARY",
                    "INGWANGA FILI"
                ]
            ],
            [
                'name'=>'BAKUWAI',
                'units'=>[
                    "BAKOSHI MAKARANTA",
                    "FILIN KASUWA GOLGOLURE (GOLGOLURE FILI)",
                    "KAINIKI PRIMARY SCHOOL (G/HAKIMI KAINIKI)",
                    "KEJI MAKARANTA",
                    "FILIN KASUWA KUNBORU (G/HAKIMI KUMBORU)",
                    "KWAKWARE PRIMARY SCHOOL (D/FILI KWAKWARE)",
                    "KWAKWARE PRIMARY SCHOOL (G/SARKI KWANDAGE)",
                    "MATANKARI PRIMARY SCHOOL (G/SARKI MATANKARI)",
                    "TAKA LAFIYA PRIMARY SCHOOL (G/HAKIMI SALMATEJI)",
                    "TAKA LAFIYA PRIMARY SCHOOL (G/SARKI TAKA LAFIYA)",
                    "FILIN KASUWA (S/AMIRU TAKA)",
                    "D/FILI T/BORAI (G/HAKIMI T/BORAI)",
                    "YARMA PRIMARY SCHOOL (G/HAKIMI YARMA)",
                    "BAKUWAI MAKARANTA G/WAKILI",
                    "KAINIKI DISPENSARY",
                    "SHIYAR HOMA KAINIKI",
                    "TAKALAFIYA NASARAWA GIDAN RUWA",
                    "BAKUWAI CLINIC",
                    "DANDEMAWO MATANKARI",
                    "MATANKARI DISPENSARY",
                    "ILLELA MATANKARI",
                    "BAKOSHI DISPENSARY",
                    "BANBALA PRIMARY SCHOOL",
                    "YARMA DISPENSARY",
                    "FILIN KASUWA KWAKWARE",
                    "SHIYAR MAKERA KWAKWARE",
                    "TSOHUWAR ASIBITI KWAKWARE"
                ]
            ],
            [
                'name'=>'DAKIN GARI',
                'units'=>[
                    "DAKIN GARI KASUWA",
                    "BENDU MAKARANTA",
                    "MODEL PRIMARY SCHOOL",
                    "READING ROOM",
                    "KIGO ANNEX P/S (G/DANERI)",
                    "D/FILIN KOKANI JIGARA RIYA (G/KOKANI)",
                    "P/HEALTH CENTRE D/GARI (G/SAUNA)",
                    "D/FILIN M/GURU (G/HAKIMI)",
                    "FILIN MAKERA (MAKERA WAKILI)",
                    "NOMA PRIMARY SCHOOL D/GARI NOMA PR.SCH.",
                    "SABON GARI PRIMARY SCHOOL D/G SAB./G PR.SCH",
                    "MODEL PRIMARY SCHOOL D/GARI",
                    "SABON BIRNI ROUNDABOUT",
                    "TASHAR GARI GIDAN TAKI",
                    "BARBAREJO JUNCTION DAKINGARI",
                    "DAKINGARI TSOHUWAR MA'AUNA",
                    "DAKINGARI BINJI",
                    "MILLIONAIRE QUARTERS FILI",
                    "RUNTUWO MAKARANTA",
                    "DAKINGARI TOWN HALL",
                    "OLD MAGISTRATE COURT",
                    "DALLO FILI",
                    "SS ROUNDABOUT",
                    "OLD GUEST HOUSE",
                    "FILIN BUNDUBAGO",
                    "BUNDUBUKKI WATER TANK",
                    "FILIN RINI SHIYAR HABE",
                    "SHARIA COURT",
                    "FILIN KUKAR INNA",
                    "GIDAN RUWA OTOKE",
                    "BENDU ASIBITI"
                ]
            ],
            [
                'name'=>'DANDANE',
                'units'=>[
                    "DANDANE MAKARANTA",
                    "HORE G / MAIDUTSE",
                    "HORE MAKARANTA",
                    "DAN FILIN KASUWA HORE (HORE G.S ASKI)",
                    "LAFIYA G/HAKIMI",
                    "MAIKWARI MAKARANTA",
                    "TUNGAR GERO G/HAKIMI",
                    "DAN FILI T/KEJI (G/HAKIMI)",
                    "WURO-GAURI MAKARANTA",
                    "FILIN KASUWA TUNGAR MAGAJIYA (G/HAKIMI)",
                    "HORE QUARTERS",
                    "MAIKWARI GIDAN RUWA"
                ]
            ],
            [
                'name'=>'DANIYA/SHEMA',
                'units'=>[
                    "DANIYA MAKARANTA",
                    "DAN FILIN KASUWA KWARMISA (G/HAKIMI)",
                    "LEHURA G/HAKIMI",
                    "DAN FILIN KASUWA MABORU (G/HAKIMI)",
                    "SHEMA MAKARANTA",
                    "TANI-KWARA G/HAKIMI",
                    "ZUGUN MAIMARO Z. MAIMARO FILI",
                    "SHIYAR SAKATARIYA SHEMA",
                    "SHEMA CLINIC",
                    "KORMISA MANU"
                ]
            ],
            [
                'name'=>'GINGA',
                'units'=>[
                    "DUTSE PRIMARY SCHOOL (G/HAKIMI)",
                    "DAN FILI GEGE (G/HAKIMI)",
                    "GINGA G/HAKIMI",
                    "FANADI FANADI FILI",
                    "DAN FILI KASUWAR KUKAR MAIKI (G/HAKIMI)",
                    "SANGELU G/HAKIMI",
                    "SANGELU MAKARANTA",
                    "SANGELU MAKARANTA",
                    "SANGELU CLINIC LAMIDO",
                    "SABUWAR GINGA MAKARANTA"
                ]
            ],
            [
                'name'=>'GIRO',
                'units'=>[
                    "DAN FILI DANBE ALSURU (ALSURU G/HAKIMI)",
                    "FALA MAKARANTA",
                    "OLD CLINIC GIRO (G/SARKI)",
                    "GIRO G/YAMMA",
                    "GOBIRAJE G/HAKIMI",
                    "DANFILI LABA KASUWA (G/HAKIMI LABA)",
                    "GWARE G/HAKIMI",
                    "TUNGAR NAGWAMBA T. NAGWAMBA FILI",
                    "CLINIC .S. RUWA (G/HAKIMI)",
                    "GIRO MAKARANTA",
                    "GIRO VETERINARY"
                ]
            ],
            [
                'name'=>'KWAIFA',
                'units'=>[
                    "BUMA G/HAKIMI",
                    "DANDAWA G/SARKI",
                    "GARIN GUNGU G/HAKIMI",
                    "GUNGUN GARJAGA GARJAGA FILI",
                    "GUNGUN TAURA G/HAKIMI",
                    "GARKAR SARKI (KWAIFA)",
                    "KWAIFA MAKARANTA",
                    "MATANKARIN GIRO G/HAKIMI",
                    "T/DANDARE G/HAKIMI",
                    "TSUNTSAYE TSUNTSAYE FILI",
                    "BUMA GIDAN RUWA",
                    "KWAIFA GIDAN RUWA",
                    "KWAIFA KASUWA GARI FILI",
                    "DANDAWA CLINIC"
                ]
            ],
            [
                'name'=>'SURU',
                'units'=>[
                    "BAKALE G/HAKIMI",
                    "BOMARE G/HAKIMI",
                    "GWAFADI SABONGARI G/HAKIMI",
                    "GWAFADI TSOHUWA G/HAKIMI TSOH/FILI",
                    "ILLELA G/HAKIMI",
                    "KATU MAKARANTA",
                    "KANKURE G/HAKIMI",
                    "KAWARA G/SARKI",
                    "KAWARA MAKARANTA",
                    "SURU FILIN ANTA FILIN ANTA",
                    "SURU FILIN LAMIDO - FILIN LAMIDO",
                    "SURU KASUWA GARI",
                    "SURU MAKARANTA",
                    "SHIWAKA MAKARANTA",
                    "TALATA G/HAKIMI",
                    "TUNGAR MANU BAHJO G/HAKIMI",
                    "TUNGAR MALAM G/HAKIMI",
                    "TUNGAR NAINI G/HAKIMI",
                    "SURU FILIN LAMIDO",
                    "SURU MAKARANTA",
                    "BUMARE CLINIC",
                    "KATU CLINIC",
                    "SABUWAR KANKURE MAKARANTA",
                    "SURU AMURZUM JUNCTION",
                    "SURU BARIKI GIDAN RUWA",
                    "SURU MAKARANTA DAN GULBI",
                    "FILIN MIKE KAFA",
                    "SURU FILIN BUDA GIDAN RUWA",
                    "MAKARANTA SHINKAFA",
                    "SURU PRIMARY HEALTH CENTRE",
                    "SURU TASHA",
                    "SURU BADA JUNCTION"
                ]
            ],
            
        ]
    ];
    }
}