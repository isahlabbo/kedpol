<?php

namespace App\services\State;

trait Shanga{
    public function registerShangaWardsAndTheirPollingUnits($lga,$wardCode)
    {
        foreach ($this->shangaWards()['wards'] as $ward) {
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
public function shangaWards()
    {
    return [
        'name'=>'Shanga',
        'wards'=>[
            [
            'name'=>'atuwo',
            'units'=>[
                "ATUWO PRIMARY SCHOOL (MARINA'A' G/HAKIMI)",
                "DISPENSARY ATUWO (MARINA'B' G/NOMA)",
                "OPEN SPACE (DANDIJE G/HAKIMI)",
                "OPEN SPACE (DIKKO GAJERE G/HAKIMI)",
                "PRIMARY SCHOOL KYASTU (KYASTU 'A' G/HAKIMI)",
                "DISPENSARY KYASTU (KYASTU 'B' G/HAKIMI)",
                "PRIMARY SCHOOL KISIRA (KISIRA G/HAKIMI)",
                "PRIMARY SCHOOL LIKWA (LIKWA G/HAKIMI)"
                ]
            ],
            [
                'name'=>'BINUWA/GEBBE/BUKUNJI',
                'units'=>[
                    "PRIMARY SCHOOL BANDAKWAI (BANDAKWAI G/HAKIMI)",
                    "PRIMARY SCHOOL BINUWA (BINWA)",
                    "PRIMARYSCHOOL BUKUNJI (BUKUNJI)",
                    "PRIMARY SCHOOL GEBBE (GARKAR SARKI GEBBI)",
                    "PRIMARY SCHOOL KALKAMI (KALKAMI G/LIMAN)",
                    "PRIMARY SCHOOL KASOSHI (KASOCHI G/NOMA)",
                    "PRIMARY SCHOOL MAGON AUTA (MAGON AUTA)",
                    "OPEN SPACE (SARKAWA G/NOMA)",
                    "PRIMARY SCHOOL SHABANDAN (SHABANDAN G/SAIDU)",
                    "DISPENSARY TUNG. TSAMIYA (TUNG. TSAMIYA G/NOMA)",
                    "OPEN SPACE (TUNGA MAIKIDI G/HAKIMI)",
                    "AREA COURT GEBE",
                    "GDSS GEBE",
                    "OPEN SAPCE GARKAR SARKIN GEBE",
                    "OPEN SPACE GARKAR SARKIN GEBE",
                    "DISPENSARY DABE",
                    "OPEN SPACE NEAR BOREHOLE, SAMA DUBI",
                    "OPEN SPACE BATA RATAYA",
                    "OPEN SPACE MARKET SHABANDAN",
                    "OPEN SPACE TUDUN WADA SHANBANDAN"
                ]
            ],
            [
                'name'=>'DUGU TSOHO / DUGU RAHA',
                'units'=>[
                    "DISPENSARY RAHA (DUGU RAHA G/HAKIMI 'A')",
                    "PRIMARY SCHOOL RAHA (DUGU RAHA G/HAKIMI 'B')",
                    "PRIMARY SCHOOL DUGU TSOHO (DUGU TSOHO PRIMARY SCHOOL)",
                    "DISPENSARY DUGU TSOHO (DUGU TSOHO PRIMARY SCHOOL)",
                    "OPEN SPACE (KALGO G/HAKIMI)",
                    "PRIMARY SCHOOL KIYAFA (KIYAFA/GHAKIMI)",
                    "SECONDARY SCHOOL TUDUN FAILA (DUDUN FAILA G/HAKIMI)",
                    "PRIMARY SCHOOL TUNGAR BUNSURU (TUNGAR BUNSURU G/HAKIMI)",
                    "PRIMARY SCHOOL TUNGAR NOMA (TUNGAR NOMA G/HAKIMI)",
                    "PRIMARY SCHOOL TUNGAR TSAMIYA (TUNGAR TSAMIYA G/HAKIMI)",
                    "OPEN SPACE (UMAMI G/HAKIMI)",
                    "OPEN SPACE (ZARIYAWA G/HAKIMI)",
                    "DISPENSARY RAHA( DUGU/RAHA G/HAKIMI 'A')",
                    "PRI. SCH. RAHA D/RAHA G/HAKIMI 'B'",
                    "PRI. SCH. RAHA (D/RAHA G/HAKIMI 'B')",
                    "PRI. TSOHO PRI. SCH. A I",
                    "PRI. SCH. D/TSOHO D/TSOHO PRI. SCH. AII",
                    "PRI. SCH. 'A'",
                    "T/FAILA G/HAKIMI 'A'",
                    "PRI. SCH. T/TSAMIYA G/HAKIMI 'A'"
                ]
            ],
            [
                'name'=>'KAWARA/INGU/SARGO',
                'units'=>[
                    "PRIMARY SCHOOL GURWO (GURWO G/GALADIMA)",
                    "PRIMARY SCHOOL INUGU (INUGU PRIMARY SCHOOL)",
                    "PRIMARY SCHOOL JARGABA (JARGABA G/HAKIMI)",
                    "DISPENSARY KAWARA (KAWARA G/HAKIMI)",
                    "PRIMARY SCHOOL KAWARA (KAWARA U/TSAMIYA)",
                    "PRIMARY SCHOOL KWANJI (KWANJIG/NOMA)",
                    "PRIMARY SCHOOL KAIWA (KAIWA G/HAKIMI)",
                    "PRIMARY SCHOOL SARGO (SARGO G/HAKIMI)",
                    "PRIMARY SCHOOL T/LAILA (T/LAILA 'A')",
                    "OPEN SPACE TAKALAFIYA (TAKALAFIYA)",
                    "NIZZAMIYA PRI. SCH. KAWARA",
                    "OPEN SPACE KILMAU MARKET",
                    "OPEN SPACE WASADA KWARYA MARKET",
                    "OPEN SPACE TUNGAR MALAN"
                ]
            ],
            [
                'name'=>'RAFIN KIRYA / TAFKI TARA',
                'units'=>[
                    "DISPENSARY RAFIN KIRYA (RAFIN KIRYA G/HAKIMI)",
                    "PRIMARY SCHOOL RAFIN KIRYA (RAFIN KIRYA G/HAKIMI)",
                    "DISPENSARY TAFKI TARA (TAFKI TARA G/HAKIMI 'A')",
                    "PRIMARYSCHOOL TAFKI TARA (TAFKI TARA 'B')",
                    "PRIMARY SCHOOL KERI (KERI G/HAKIMI)",
                    "PRIMARY SCHOOL WAIWAYI (WAIWAYI G/HAKIMI)",
                    "SABON GARIN BALA G/HAKIMI OPEN SPACE (SABON GARIN BALA)",
                    "PRIMARY SCHOOL SANGARA (SANGARA)",
                    "PRI. SCH. RAFIN KIRYA",
                    "TAFKI TARA DISPENSARY",
                    "PRI. SCH. WAIWAYI II"
                ]
            ],
            [
                'name'=>'SAKACE/GOLONGO/HUNDEJI',
                'units'=>[
                    "ARABU LAFIYA OPEN SPACE (ARABU LAFIYA)",
                    "DISPENSARY BAKIN TURU (BAKIN TURU 'A')",
                    "BAGARUWA OPEN SPACE (BAGARUWA 'A')",
                    "PRIMARY SCHOOL DALA (DALA 'A')",
                    "DISPENSARY TORO ( TORO)",
                    "PRIMARY SCHOOL GOLONGO (GOLONGO G/HAKIMI 'A')",
                    "DISPENSARY GOLONGO (GOLONGO 'B')",
                    "PRIMARY SCHOOL HUNDEJI (HUNDEJI 'A')",
                    "PRIMARY SCHOOL SAKACE (SAKACE G/HAKIMI 'A')",
                    "PRIMARY SCHOOL TUNGAR MA'AJI (T. MA'AJI)",
                    "PRIMARY SCHOOL TUNGAR TANKARI (T. TANKARI)",
                    "PRIMARY SCHOOL TUNGAR FARI (T. FARI)",
                    "PRIMARY SCHOOL WADATA (WADATA)",
                    "GIDAN RUWA, BAKIN TURU",
                    "PRI. SCH. DALA (DALA 'A') I",
                    "GIDAN SHINKAFA",
                    "PRI. SCH. GOLONGO (GOLONGO G/HAKIMI A)",
                    "DISPENSARY GOLONGO (GOLONGO B) I",
                    "PRI. SCH. HUNDEJI (HUNDEJI B) DISPEN.",
                    "OPEN SPACE PRI. SCH. SAKACE G/HAKIMI",
                    "OPEN SPACE PRI. SCH. WADATA"
                ]
            ],
            [
                'name'=>'SAWASHI',
                'units'=>[
                    "LINZAMIYYA PRIMARY SCHOOL GIRON MASA (GIRON MASA G/NOMA 'A')",
                    "PRIMARY SCHOOL GIRON MASA (GIRON MASA 'B')",
                    "DISPENSARY KESSAN (KESSAN G/HAKIMI)",
                    "PRIMARY SCHOOL KWAKUTE (NASSARAWA T/KWAKUTA)",
                    "PRIMARY SCHOOL NASSARAWA (NASSARAWA 'A')",
                    "PRIMARY SCHOOL SAWASHI (SAWASHI PRIMARY SCHOOL 'A')",
                    "PRIMARY SCHOOL SANTE (SANTE G/HAKIMI)",
                    "OPEN SPACE TUNG. GALADIMA (TUNG. GALADIMA)",
                    "LIZAMIYA PRI SCH. G/MASA (G/MASA)",
                    "PRI. SCH. GIRON MASA (G/MASA B) C",
                    "PRI. SCH. GIRON MASA (G/MASA B) D",
                    "PRI. SCH. KWAKUTA (NASARAWA T/KWAKUTA)",
                    "PRI. SCH. NASARAWA (NASARAWA 'A') B",
                    "PRI. SCH. SAWASHI (SAWASHI PRI. SCH.) I",
                    "PRI. SCH. SAWASHI (SAWASHI PRI. SCH.) II"
                ]
            ],
            [
                'name'=>'SHANGA',
                'units'=>[
                    "PRIMARY SCHOOL GANWO (GANWO B. KASUWA 'A')",
                    "WAWA GIDAN HAKIMI OPEN SPACE (WAWA G. HAKIMI)",
                    "PRIMARY SCHOOL KUBAI (KUBAI B. KASUWA 'A')",
                    "PRIMARY SCHOOL SHANGA (SHANGA KWAKUTE 'A')",
                    "SECONDARY SCHOOL SHANGA (SHANGA U/MAGAJI 'A')",
                    "PRIMARY SCHOOL T/FANA (T. FANA G/HAKIMI 'A')",
                    "DISPENSARY T/FANA (T. FANA G/HAKIMI 'B')",
                    "PRIMARY SCHOOL T/MAKERA (T. MAKERA G/HAKIMI 'B')",
                    "PRI. SCH. GANWO( BAKIN KASUWA 'B')",
                    "PRI. SCH. SHANGA (SHANGA KWAKUTE 'B')",
                    "PRI. SCH. SHANGA (S/KWAKUTE 'A')",
                    "SEC. SCH. SHANGA (S/U/MAGAJI 'B')",
                    "SEC. SCH. SHANGA (S/U/MAGAJI 'A')",
                    "PRI. SCH. T/FANA/T/FANA G/HAKIMI 'A'",
                    "DISPENSARY T/FANA T/FANA G/HAKIMI 'B' C"
                ]
            ],
            [
                'name'=>'TAKWARE',
                'units'=>[
                    "DAN ZUGU GARBA OPEN SPACE (DAN ZUGU GARBA G/HAKIMI 'A')",
                    "PRIMARY SCHOOL DAN ZUGU JAFARU (DAN ZUGU JA'AFARU/GHAKIMI 'B')",
                    "PRIMARYSCHOOL TAKWAREN SANDA (TAKWARE G/SANDA 'A')",
                    "PRIMARY SCHOOL TAKWAREN FADA (TAKWARE/FADA 'A')",
                    "TUNGAR YAHAYA OPEN SPACE (T/YAHAYA G/HAKIMI)",
                    "PRIMARY SCHOOL T/GIWA (T/GIWA PRIMARY SCHOOL 'A')",
                    "PRIMARY SCHOOL T/NOMA (T/NOMA G/HAKIMI)",
                    "KANGI G/HAKIMI OPEN SPACE (KANGI G/HAKIMI)",
                    "S/GARI OPEN SPACE (S/GARI G/HAKIMI)",
                    "DANZUGU JAFARU PRI. SCH. 2",
                    "NIZZAMIYYA PRI. SCH.",
                    "TAKWARE PRI. SCH. 2",
                    "T/GIWA PRI. SCH. 2",
                    "TUNGAR NOMA PRI. SCH. II"
                ]
            ],
            [
                'name'=>'YAR BESSE',
                'units'=>[
                    "PRIMARY SCHOOL BALEWA (BELAWA G/HAKIMI)",
                    "PRIMARY SCHOOL HORI GARI (HORI GARI G/HAKIMI)",
                    "PRIMARY SCHOOL YARBESSE (G/HAKIMI YARBESSE 'A')",
                    "DISPENSARY YARBESSE (YARBESSE UNG. MAGAJI )",
                    "ZUGUN TANE OPEN SPACE (ZUGUTARE G/HAKIMI)",
                    "DISPENSARY YARBESSE (YARBESSE U/MAGAJI) 2"
                ]
            ],
            
        ]
    ];
    }
}