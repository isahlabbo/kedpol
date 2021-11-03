<?php

namespace App\services\State;

trait Augie{
    public function registerAugieWardsAndTheirPollingUnits($lga,$wardCode)
    {
        foreach ($this->augieWards()['wards'] as $ward) {
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
public function augieWards()
    {
    return [
        'name'=>'Augie',
        'wards'=>[
            [
            'name'=>'AUGIE NORTH',
            'units'=>[
                    "PRIMARY SCHOOL (TSOHON GARIN AUGIE)",
                    "MODEL PRIMIRY SCHOOL (SHIYAR AMADU)",
                    "MDGS SOLAR PUMP (SHIYAR TAJI 1)",
                    "SOLAR PUMP (SHIYAR TAJI II)",
                    "WATER BOARD (SHIYAR DAMANE)",
                    "MDGS SOLAR PUMP (ILLELAR AUGIE)",
                    "TUNGAR ZABARMAWA
                ]
            ],
            [
                'name'=>'AUGIE SOUTH',
                'units'=>[
                        KASUWAR AUGIE",
                        "GIDAN TAKI (SABON GARIN AUGIE )",
                        "TUNGAR NOMA PRI SCH (TUNGAR NOMA)",
                        "VILLAGE CENTRE (GIDAN DADE)",
                        "VILLAGE CENTRE (RUGGA)",
                        "SOLAR PUMP SABON GARI",
                        "SABON GARIN AUGIE",
                        "KWADDAGA BOREHOLE"
                ]
            ],
            [
                'name'=>'BAGAYE/MERA',
                'units'=>[
                    "BAGAYE PRIMARY SCHOOL",
                    "BAGAYE WATER BOAD (BAGAYE GARKAR NOMA)",
                    "BAGAYE DISPENSARY (BAGAYE GARKAR SANI)",
                    "MALLAMAWA VILLAGE CENTRE (MALLAMAWA)",
                    "MDGS SOLAR (TUNGAR YODO)",
                    "GIDAN JODI PRIMARY SCHOOL (GIDAN JODI)",
                    "VILLAGE CENTRE (RINI BABBA)",
                    "KURBABAN MODEL PRIMARY SHOOL (KURBABAN)",
                    "DARIYAWA VILLAGE CENTRE (DARIYAWA)",
                    "MERA VILLAGE CENTRE (MERA)",
                    "MERA VILLAGE CENTRE (MERA MARINA)",
                    "MERA VILLAGE CENTRE (MERA MARINA)",
                    "MERA DISPENSARY (MERA GARKAR ABDUWA)",
                    "MERA WATER BOAD (MERA GARKAR NOMA)",
                    "NEW BOREHOLE (TUDUN BAICHI)"
                ]
            ],
            [
                'name'=>'BAYAWA NORTH',
                'units'=>[
                        "BAYAWA POLICE STATION (BAYAWA GARKAR KYALA)",
                        "BAYAWA TOWN DISPENSARY (BAYAWA DA GAMAJE)",
                        "BAYAWA COURT (BAYAWA SHIYAR KASUWA)",
                        "BAYAWA COURT (BAYAWA SHIYAR KASUWA)",
                        "BAYAWA PRIMARY HEALTH CARE (TUNGAR KAJI)",
                        "VILLAGE CENTRE (ASARARA)",
                        "DAFASHI DISPENSARY (DAFASHI)",
                        "DAFASHI PRI SCHOOL (DAFASHI/GAZURA)",
                        "KWARKWARI PRI. SCHOOL (KWARKWARI)",
                        "SHIYAR DUTSI BOREHOLE"
                ]
            ],
            [
                'name'=>'BAYAWA SOUTH',
                'units'=>[
                        "JABAKA DISPENSARY (JABAKA KANWURI)",
                        "JABAKA PRI. SCHOOL (JABAKA DANFILI)",
                        "SABLAR MAIYAKI PRI SCH. (S/MAIYAKI)",
                        "VILLAGE CENTRE (FAKON SARKI)",
                        "ZABDO PRI. SCHOOL (ZABDO/LUTTUGAJE)",
                        "BORE PRIMARY SCHOOL (BORE)",
                        "YAKURUTU PRI. SCHOOL (YAKURUTU)",
                        "KAFARE DISPENASARY (KAFARE/T.DUMA)",
                        "TANKIN SHIYAR FAKO"
                ]
            ],
            [
                'name'=>'BIRNIN TUDU/GUDALE',
                'units'=>[
                        "FILIN SHIYAR N.A (BIRNIN TUDU S/NA)",
                        "FILIN KASUWA (BIRNIN TUDU SHIYAR MAIYAKI)",
                        "FILIN MAHAUTA (BIRNIN TUDU SHIYAR GANDU)",
                        "SABON GARI VILLAGE CENTRE (S/G BIRNIN TUDU)",
                        "BIRNIN TUDU PRI. SCHOOL (KIRGWANDA)",
                        "DUKKE FILLIN RIJIYA (DUKKE G/HAKIMI)",
                        "DANFILI MAKERA (DUKKE SHIYAR MAKERA)",
                        "DISPENSARY (DUKKE SHIYAR SHEHI)",
                        "GUDALE PRIMARY SCHOOL",
                        "PRIMARY HEALTH (GUDALE KANWURI)",
                        "DAN FILI BAKIN TITI (TUNGULAWA)",
                        "DISPENSARY (KAWARI)",
                        "DANKAL DISPENSARY (DANKAL KANWURI)",
                        "DANKAL PRIMARY SCHOOL",
                        "GIDAN KONI PRIMARY SCHOOL (GIDAN KONI)",
                        "ASAWWAKA (ASAWWAKA)",
                        "SHIYAR SARDAUNA BOREHOLE",
                        "SABON GARIN DANKAL DISPENSARY"
                ]
            ],
            [
                'name'=>'BUBUCE',
                'units'=>[
                        "BUBUCE POLICE STATION (B/G/ LAMNE)",
                        "BUBUCE PRI. SCH (B/G/SARKIN FAWA)",
                        "BUBUCE DISPENSARY (B/G/WANZAM)",
                        "BUBUCE DISPENSARY (BUBUCE GARKAR LIMAN )",
                        "BUBUCE DISPENSARY (BUBUCE GARKARAKWATA)",
                        "BUBUCE VILLAGE CENTRE (BANGARAWA GARKAR DOKA)",
                        "BUBUCE PRI. SCH (BANGARAWA GARKAR DOKA)",
                        "BANGARAWA PRI SCH. (BANGARAWA GARKAR LAMNE)",
                        "VILLAGE CENTRE (GIDAN KONI)",
                        "VILLAGE CENTRE (SABON GARIN DINKIRI)",
                        "SHIYAR MAISAMARI BOREHOLE",
                        "BUBUCHE PRI.SCH. BOREHOLE",
                        "BUBUCHE DAY SECONDARY SCHOOL"
                ]
            ],
            [
                'name'=>'DUNDAYE/KWAIDO/ZAGI/ILLELA',
                'units'=>[
                        "DUNDAYE PRI SCH (DUNDAYE GARKAR UMARU)",
                        "KASUWAR DUDAYE (DUNDAYE GARKAR MANI)",
                        "VILLAGE CENTRE (KUKAR KANNA)",
                        "KWAIDO PRIMARY SCHOOL",
                        "VILLAGE CENTRE KWAIDO (KWAIDO SHIYAR AREWA)",
                        "PRIMARY SCHOOL (SABON GARIN KWAIDO)",
                        "VILLAGE CENTRE (SATTAZAI)",
                        "KASUWA DANFILI (SATTAZAI DAN FILI)",
                        "ILLELA PRIMARY SCHOOL",
                        "KASUWAR ILLELA (ILLELA GARKAR MODE)",
                        "TUNGAR MAGAJI PRIMARY SCHOOL (TUNGAR MAGAJI)",
                        "ZAGGI PRIMARY SCHOOL (ZAGI SHIYAR ARAWA)",
                        "SOLAR PUMP ZAGGI (ZAGI TAMBALAWA)",
                        "TUNGAR RAFI PRIMARY SCHOOL (TUNGAR RAFI)",
                        "VILLAGE CENTRE (TUNGAR TUDU )",
                        "DUNDAYE DISPENSARY",
                        "DUNDAYE SHIYAR ZAWIYYA",
                        "KWAIDO DISPENSARY",
                        "ILLELA DISPENSARY"
                ]
            ],
            [
                'name'=>'TIGGI/AWADE',
                'units'=>[
                        "TIGGI DISPENSARY (TIGGI GARKAR MAIDAMMA)",
                        "TIGGI DISPENSARY (TIGGI GARKAR MAIDAMMA)",
                        "TIGGI SECONDARY SCHOOL (TIGGI KASUWA)",
                        "LUGGA PRIMARY SCHOOL (LUGGA)",
                        "VILLAGE CENTRE (TUNGAR MAIRUWA)",
                        "GADA WANDE PRIMARY SCHOOL (GADA WANDE)",
                        "GIDAN AGODA PRIMARY SCHOOL",
                        "GIDAN AGODA PRIMARY SCHOOL (GIDAN AGODA DANFILI)",
                        "FARIN DUTSI PRIMARY SCHOOL (FARIN DUTSI)",
                        "KWARARO PRIMARY SCHOOL (KWARARO)",
                        "VILLAGE CENTRE (TUNGAR DAN GWARI)",
                        "SHAFARMA PRIMARY SCHOOL (SHAFARMA )",
                        "YALEMA PRIMARY SCHOOL (YALEMA)",
                        "FADI SONKA PRIMARY SCHOOL (FADI SONKA)",
                        "AWADE PRIMARY SCHOOL",
                        "AWADE KASUWA PRIMARY SCHOOL (AWADE KASUWA)",
                        "BOREHOLE HANYAR FARIN DUTSI",
                        "SHAFARMA BOREHOLE TASHA",
                        "KWARARO DISPENSARY"
                ]
            ],
            [
                'name'=>'YABO',
                'units'=>[
                        "YOLA PRIMARY SCHOOL (YOLA GARKAR USAMATU)",
                        "YOLA PRIMARY SCHOOL",
                        "YOLA PRIMARY SCHOOL (SABON GARIN YOLA)",
                        "HAKIMI PRIMARY SCHOOL (SABON GARIN YOLA HAKIMI)",
                        "GOBIRAWA PRIMARY SCHOOL (YOLA GOBIRAWA)",
                        "TUNGAR LEMA PRIMARY SCHOOL (TUNGAR LEMA)",
                        "UNGUWAR MIDU PRIMARY SCHOOL (UNGUWAR MIDU)",
                        "GARU PRIMARY SCHOOL",
                        "GARU PRIMARY SCHOOL (GARU KASUWA)",
                        "TUWON TSORO PRIMARY SCHOOL (TUWON TSORO)",
                        "TUWON TSORO",
                        "BAGURA DISPENSARY (BAGURAR HAUSAWA)",
                        "PRIMARY HEALTH CARE (SHAFA ZANE)",
                        "RAYAU PRIMARY SCHOOL (RAYAU)",
                        "YOLA DISPENSARY",
                        "YOLA DAY SECONDARY SCHOOL",
                        "SABON GARIN RAYAU BOREHOLE",
                        "KWANYAS WATER PUMP",
                        "SHIYAR TUNGA",
                        "MARDAR ZABARMAWA",
                        "TUNGAR LEMA DISPENSARY",
                        "UNGUWAR LADAN PRIMARY SCHOOL",
                        "UNGUWAR MIDU/SHIYAR ALH. DAN AKWAI"
                ]
            ],
            
        ]
    ];
    }
}