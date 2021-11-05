<?php

namespace App\services\State;

trait Bunza{
    public function registerBunzaWardsAndTheirPollingUnits($lga,$wardCode)
    {
        foreach ($this->bunzaWards()['wards'] as $ward) {
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
public function bunzaWards()
    {
    return [
        'name'=>'Bunza',
        'wards'=>[
            [
            'name'=>'BUNZA MAFARA',
            'units'=>[
                    "BAJIFA BAJIFA",
                    "LOWCOST/MUNGOLO LOWCOST",
                    "BALU BALU",
                    "JUGANBIR",
                    "GOLGOLORE/FAWA GOLGOLORE RIJIYA",
                    "GERU I AND II GERU",
                    "S/GARIN JIKA S/GARIN JIKA",
                    "ETISALAT MARS STATION,SABON GARI",
                    "POST OFFICE",
                    "SAMBISA AREA TRANSFORMER ZOGIRMA ROAD",
                    "MARAFA MODEL PRIMARY SCHOOL",
                    "GIDAN RUWA MUNGOLO",
                    "G T C BUNZA",
                    "N Y S C NURSERY AND PRIMARY SCHOOL",
                    "BUNZA TOWN PRIMARY SCHOOL",
                    "NINZAMIYYA A PRIMARY SCHOOL",
                    "NINZAMIYYA B PRIMARY SCHOOL",
                    "M C HOSPITAL BUNZA",
                    "MICRO FINANCE BANK BUNZA",
                    "GERU ZARMAKWAI PRIMARY SCHOOL",
                    "BAKIN TRANSFORMER TSOLA VILLAGE"
                ]
            ],
            [
                'name'=>'BUNZA DANGALADIMA',
                'units'=>[
                    "WURO -YASI - WURO - YASI",
                    "BAJIFA/MAKERA - BAJIFA/MAKERA",
                    "BAJIFA/MAKERA BAJIFA/ MAKERA B",
                    "KATANGA KATANGA",
                    "GIDAN-JIRGI GIDAN JIRGI",
                    "SUNKURU SUNKURU",
                    "WABBAKU WABBAKU",
                    "S/FADA A AND B S/FADA A/B",
                    "T/RISKUWA/MARINA T/RISKUWA/MARINA",
                    "WURO YASI GIDAN RUWA A",
                    "WURO YASI GIDAN RUWA B",
                    "BAJIFA MAKERA A DISPENSARY",
                    "BAJIFA MAKERA A GARKUWA MUSA PRIMARY SCHOOL",
                    "BAJIFA MAKERA B ZONAL EDUCATION OFFICE",
                    "BAJIFA MAKERA B (L G E A)",
                    "KATANGA GIDAN RUWA RASHA",
                    "GIDAN JIRGI TSHOHUWAN KASUWA",
                    "GIDAN JIRGI GIDAN RUWA",
                    "SUNKURU PRIMARY SCHOOL",
                    "S FADA B"
                ]
            ],
            [
                'name'=>'GWADE',
                'units'=>[
                    "GWADA/S/NOMA GWADE/S/NOMA",
                    "GWADE /S/NOMA - GWADE S/NOMA",
                    "DAMANA DAMANA",
                    "BACHAKA BACHAKA",
                    "OWA OWA",
                    "BANGAYE BANGAYE",
                    "MALLAMAWA MALLAMAWA",
                    "DANKIRE DANKIRE",
                    "DALIJAN PRIMARY SCHOOL GWADE S/NOMA A",
                    "GURMARE PRYMARY SCHOOL (GWADE S/NOMA B",
                    "DAMANA ASIBITI",
                    "BIGA GIDA RUWA"
                ]
            ],
            [
                'name'=>'MAIDAHINI',
                'units'=>[
                        "MADAHINIS/FADA MAIDAHINI S/FADA",
                        "NOMARE NOMARE",
                        "GARADI YAMMA GARADI YAMMA",
                        "GARDAI GABAS GARADI GABAS",
                        "RUNTUIWA RUNTUIWA",
                        "T/BUDURINA T/BUDURINA",
                        "KUTUNARE KUTUNARE",
                        "TSOHUWAN ASIBITI SABONGARI",
                        "MAIDAHINI PRIMARY SCHOOL (NOMARE)",
                        "GIDAN RUWA GARADI GABAS",
                        "G D S S MAIDAHINI"
                ]
            ],
            [
                'name'=>'RAHA',
                'units'=>[
                    "RAHA/FADA RAHA/FADA",
                    "BUSARE A BUSARE",
                    "BUSARE B BUSARE",
                    "BILLARE BILLARE",
                    "SABE SABE",
                    "MATSERI MATSERI",
                    "GUMBIRE GUMBIRE",
                    "RAHA MODEL PRIMARY SCHOOL (FADA)",
                    "G D S S RAHA (BUSARE A)",
                    "OLD DISPENSARY (BUSARE B)",
                    "GIDAN RUWA SABONGARI (SABE B)",
                    "PRIMARY HEALH CENTER MATSERI",
                    "FANARU PRIMARY SCHOOL (MATSERI)",
                    "TUNGAN SAUNA PRIMARY SCHOOL (GUMBIRE)"
                ]
            ],
            [
                'name'=>'SABON BIRNI',
                'units'=>[
                    "SABON-BIRNI SABON-BIRNI",
                    "GARAFITA GARATIFA",
                    "BORO BORO",
                    "LOKO LOKO",
                    "T/BORE T/BORE",
                    "JDSS SABON BIRNI",
                    "LOKO PRIMARY B",
                    "SHIKADU PRIMARY SCHOOL"
                ]
            ],
            [
                'name'=>'SALWAI',
                'units'=>[
                        "SALWAI/FADA SALWAI/FADA",
                        "SALWAI/S/KENGERE SALWAI S/KENGERE",
                        "CHAKAWO CHAKAWO",
                        "BABANJORI BABAN-JORI",
                        "GEDE/KARAMA GEDE KARAMA",
                        "GEDE SAUNA GEDE SAUNA",
                        "BALA BALA",
                        "SALWAI PRIMARY HEALH CENTRE	",
                        "SALWAI PRIMARY SCHOOL (KENGERE)	",
                        "BABAN JORI PRIMARY SCHOOL B	",
                        "GIDAN RUWA GEDE SAUNA"
                ]
            ],
            [
                'name'=>'TALLI HILEMA',
                'units'=>[
                        "TILLIS/FADA TILLI S/FADA A",
                        "TILLI S/FADA TILLI S/FADA B",
                        "TILLI S/NOMA TILLI S/NOMA",
                        "TULLUMAWA TULLU-MAWA",
                        "HILEMA HILEMA",
                        "KANZANNA KANZANNA",
                        "YANGA TOZO YANGA TOZO",
                        "AFAJA/U/SAIDU AFAJA U/SAIDU",
                        "SABON GARIN -JIKA SABON GARIN-JIKA",
                        "GIDAN RUWAN SOLA TILLI S FAWA A",
                        "KASUWA ( TILLI S FADA A)",
                        "ASIBITI (S FADA B)",
                        "GARIN INGILISHI (TILLI S NOMA)",
                        "G D SS TILLI (TULLUMAWA)",
                        "OPEN SPACE NEAR TRANSFORMER UNGUWAN SULE( KANZANNA)",
                        "UNGUWAN SA'IDU OPEN SPACE(AFAJA)",
                        "AMANAGAWO"
                ]
            ],
            [
                'name'=>'TUNGA',
                'units'=>[
                        "MARINA MARINA",
                        "WURO-YASI WURO-YASI",
                        "GWADI GWADI",
                        "KAHIBILE KAHIBILE",
                        "YARAWAL YARAWAL",
                        "TUNGA S/LIMAN TUNGA S/LIMAN",
                        "TUNGA PRIMARY HEALH CARE",
                        "G D SS TUNGA",
                        "GWADI DISPENSARY",
                        "KHAHIBILE DISPENSARY",
                        "GERERE PRIMARY SCHOOL",
                        "YARAWAL PRIMARY SCHOOL",
                        "GIDAN RUWA SHIYAR LIMAN TUNGA"
                ]
            ],
            [
                'name'=>'ZOGIRMA',
                'units'=>[
                        "ZOGIRMA S/FADA ZOGIRMA S/FADA A",
                        "ZOGIRMA S/FADA ZOGIRMA S/FADA B",
                        "BAWADA BAWADA",
                        "GIDIGO GIDIGO",
                        "TSAMIYA TSAMIYA",
                        "DUKKI DUKKI",
                        "GUDDUL GUDDUL",
                        "MANUN KULU MANUN - KULU",
                        "GIDAN TAKI S/FADA A",
                        "S/ FADA B KASUWA",
                        "ZOGIRMA MODEL PRIMARY SCHOOL (BAWADA)",
                        "BAWADA OLD POLICE STATION",
                        "SHARI'A COURT ZOGIRMA (GIDIGO)",
                        "GAURI BANZA BABBA PRIMARY SCHOOL"
                ]
            ],
           
            
        ]
    ];
    }
}