<?php

namespace App\services\State;

trait Sakaba{
    public function registerSakabaWardsAndTheirPollingUnits($lga,$wardCode)
    {
        foreach ($this->sakabaWards()['wards'] as $ward) {
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
public function sakabaWards()
    {
    return [
        'name'=>'Sakaba',
        'wards'=>[
            [
            'name'=>'ADAI',
            'units'=>[
                "TSOHON BIRNIN PRIMARY SCHOOL (UNGUWAR MAGANDA)",
                "MAGANDA PRIMARY SCHOOL (GARKAR MAGANDA)",
                "MAE'E PRIMARY SCHOOL (MAEE)",
                "TUNGAR GWAMNA PRIMARY SCHOOL (TUNGAR GWAMNA)",
                "KURMIN HODO PRIMARY SCHOOL (KURMIN HODO MAHUTA)",
                "PAMPAMA PRIMARY SCHOOL (PAMPAMA KWAGWANI)",
                "MARANDO OPEN SPACE (MARANDO)",
                "MAGA PRIMARY SCHOOL (MAGA/ABAGAI)",
                "MAHUTA PRIMARY SCHOOL (MAHUTA)",
                "MAGANDA DISPENSARY (MAGANDA)"
                ]
            ],
            [
                'name'=>'DANKOLO',
                'units'=>[
                    "DANKOLO PRIMARY SCHOOL ?A (DANKOLO PRIMARY SCHOOL )",
                    "UNG. OPEN SPACE (UNG. WADE)",
                    "UNGUWAR CHITAU OPEN SPACE (UNGUWAR CHITAU)",
                    "DAURA PRIMARY SCHOOL (DAURA)",
                    "JANDAMO PRIMARY SCHOOL (GARKAR JANDAMO)",
                    "AGALE PRIMARY SCHOOL (AGALE)",
                    "G.MESA OPEN SPACE (GARKAR MESA)",
                    "DULUMBO PRIMARY SCHOOL (DULUMBO)",
                    "POLICE POST",
                    "MA'AUNA"
                ]
            ],
            [
                'name'=>'DOKA / BERE',
                'units'=>[
                    "DOKA PRIMARY SCHOOL (DOKA)",
                    "UNG. MANGA PRIMARY SCHOOL (UNG. MANGA)",
                    "RUKUKUJI PRIMARY SCHOOL (RUKURKUJI)",
                    "MARI PRIMARY SCHOOL (GARKAR MARI)",
                    "OPEN SPACE (GARKAR GUJIYA)",
                    "TUNGAN BERE BINDI (TUNGAN BERE DINDI)",
                    "BERE PRIMARY SCHOOL (BERE)",
                    "P.H.C DOKA"
                ]
            ],
            [
                'name'=>'GELWASA',
                'units'=>[
                    "GELWASA PRIMARY SCHOOL (GELWASA)",
                    "UNG.AJIYA PRIMARY SCHOOL (UNG, AJIYA)",
                    "DUTSEN BIRI PRIMARY SCHOOL (DUTSEN BIRI)",
                    "UNGUWAR NABITE (UNGUWAR NABIJE)",
                    "UNG. YAMMA",
                    "TUDUN WADA (TUDUN WABA)",
                    "SAMI YUMU PRIMARY SCHOOL"
                ]
            ],
            [
                'name'=>'JAN BIRNI',
                'units'=>[
                    "JANBIRNI PRIMARY SCHOOL (JANBIRNI)",
                    "LARABA PRIMARY SCHOOL (LARABA)",
                    "KWAGWANO PRIMARY SCHOOL (KWAGWANO)",
                    "GWANJA PRIMARY SCHOOL (GWANJA)",
                    "UNG. GISHIRI PRIMARY SCHOOL (UNG. GISHIRI)",
                    "SANGANGAN PRIMARY SCHOOL (SANGANGA)",
                    "WANGACHI PRIMARY SCHOOL (WANGACHI)",
                    "UNGUWAR WADE",
                    "SABON GARIN ISAH PRIMARY SCHOOL",
                    "KANGO PRIMARY SCHOOL",
                    "UNGUWAN KURE DISPENSARY"
                ]
            ],
            [
                'name'=>'MAZA/MAZA',
                'units'=>[
                    "SIKOKA PRIMARY SCHOOL (SIKOKA)",
                    "MAZA MAZA PRIMARY SCHOOL (MAZA MAZA)",
                    "UNG. BAYO DISPENSARY (UNG. BAYO)",
                    "UNG. WANAHE PRIMARY SCHOOL (UNG. WANAHE)",
                    "DUNHU BAIDU PRIMARY SCHOOL (DUNHU BAIDU)",
                    "JONGA PRIMARY SCHOOL (JONGA)",
                    "KAGETA PRIMARY SCHOOL"
                ]
            ],
            [
                'name'=>'MAKUKU',
                'units'=>[
                    "MAKUKU PRIMARY SCHOOL (MAKUKU)",
                    "IKOBI/BONDO PRIMARY SCHOOL (IKOBI/BONDO)",
                    "DOKAN KAMBARI PRIMARY SCHOOL (DOKAN KAMBARI)",
                    "JAN DUTSE PRIMARY SCHOOL (JAN DUTSE)",
                    "BABURA PRIMARY SCHOOL (BABURA)",
                    "USARA (USALA)",
                    "OPEN SPACE (SHADADI)",
                    "MALOLO PRIMARY SCHOOL (MALOLO)",
                    "MA'AUNA MAKUKU"
                ]
            ],
            [
                'name'=>'SAKABA',
                'units'=>[
                    "SAKABA PRIMARY SCHOOL (MARARRABAN DANKOLO)",
                    "MAZARKO PRIMARY SCHOOL (MAZALKO)",
                    "KADANHO PRIMARY SCHOOL (KADANHO)",
                    "TIKAWA PRIMARY SCHOOL (TIKAWA)",
                    "OPEN SPACE (KATUNTUN)",
                    "UNG. DISPENSARY (UNG. ZAMA)",
                    "BAZAMA PRIMARY SCHOOL (BAZAMA)",
                    "OPEN SPACE (UNG. MADI)",
                    "P.H.C SAKABA"
                ]
            ],
            [
                'name'=>'TUDUN / KUKA',
                'units'=>[
                    "NASHIYA PRIMARY SCHOOL (NASHIYA)",
                    "OPEN SPACE (TUDUN KUKA)",
                    "OPEN SPACE (UNG.MAIDAMMA)",
                    "LINZAMIYYA PRIMARY SCHOOL (DAN MAJE)",
                    "OPEN SPACE (UNG. FADA)",
                    "OPEN SPACE (UNG. SARI)",
                    "ISLAMIYYA PRIMARY SCHOOL (UNG. NAMADINA)",
                    "NASHIYA PRIMARY SCHOOL (GARKAR LIMAN)",
                    "OPEN SPACE (YANTURMI)",
                    "NASHIYA MATERNITY HOME",
                    "FANFON MANU GWALLE",
                    "ALIYU JABO ASAS PRIMARY SCHOOL",
                    "FANFON ALKALI SANI"
                ]
            ],
            [
                'name'=>'FADA',
                'units'=>[
                    "AYUBA DANBAUCHI PRIMSRY SCHOOL (UNG. TATTA)",
                    "OPEN SPACE (GARKAR ALH. DANTATA)",
                    "L.G SECRETARIAT (SAFIYO)",
                    "ANEME PRIMARY SCHOOL (ANEME)",
                    "OPEN SPACE (UNG.SALIHU BURODO)",
                    "OPEN SPACE (UNG. MAGAWATA)",
                    "OPEN SPACE (UNG. DANTARO)",
                    "OPEN SPACE (UNG. MALLAM BELLO)",
                    "FANFON TANA",
                    "FANFON KUYAMA",
                    "G.R.A DIRI",
                    "FANFON KASUWAR GARI",
                    "P.H.C FADA",
                    "FANFON ALH. MALAM"
                ]
            ],
            
        ]
    ];
    }
}