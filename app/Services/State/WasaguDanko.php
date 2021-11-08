<?php

namespace App\services\State;

trait WasaguDanko{
    public function registerWasaguDankoWardsAndTheirPollingUnits($lga,$wardCode)
    {
        foreach ($this->wasaguDankoWards()['wards'] as $ward) {
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
public function wasaguDankoWards()
    {
    return [
        'name'=>'Wasagu Danko',
        'wards'=>[
            [
            'name'=>'AYU',
            'units'=>[
                "UNG. ALHAJI SANI",
                "KORAMAR ZAMA PRIMARY SCHOOL (KORAMAR ZAMA)",
                "AYU UNG. SARKI",
                "SAKAWA PRIMARY SCHOOL (SAKAWA)",
                "MALEKACHI PRIMARY SCHOOL (MALEKACHI)",
                "UNG. HAUSAWA PRIMARY SCHOOL (UNG. HAUSAWA)",
                "KIBIYA PRIMARY SCHOOL (UNG. KIBIYA)",
                "SAWADE PRIMARY SCHOOL (SAWADE)",
                "BAKIN GULBI PRIMARY SCH.",
                "SAULAWA",
                "KIBIYA DISPENSARY"
                ]
            ],
            [
                'name'=>'BENA',
                'units'=>[
                    "UNGUWAR MARAFA",
                    "TUDUN WADA",
                    "MODEL PRIMARY SCHOOL (GANGARE)",
                    "SABON GARI BENA",
                    "RAWAIYA OPEN SPACE (RAWAIYA)",
                    "BAKIN KASUWA",
                    "K/DAN SALLAU OPEN SPACE(K/ DAN SALLAU) (K/DAN SALLAH OPEN SPACE (K/ DAN SALLAU))",
                    "FADA",
                    "DAN AYI",
                    "MALEKACHI",
                    "DANRIMI",
                    "TOWN DISPENSARY (SABON GARI 'A')",
                    "SABON GARI 'B'",
                    "TSIRINDA MARKET",
                    "UNGUWAR MAI SAMARI MARIMAYE",
                    "MAN SADA",
                    "UNGUWAR DAN TALATU",
                    "UNGUWAR YAN YAWA",
                    "UNGUWAR DOSA",
                    "UNGUWAR SARKI DAKARKARI",
                    "RUWAYE",
                    "CEDIYA BIYU",
                    "UNGUWAR YAN LUGGA",
                    "JAMBALI PRIMARY SCH.",
                    "JAN, RUWA MANGORON KAKA",
                    "UNGUWAR BALA DAN UMARU"
                ]
            ],
            [
                'name'=>'DAN UMARU /MAI RAI-RAI',
                'units'=>[
                    "UNGUWAR KOLO",
                    "TUMBURKU",
                    "DANUMARU YAMMA",
                    "MARAHEN KASA",
                    "PRIMARY SCHOOL (DAN MAKARWA) (PRIMARY SCHOOL (DAN MAKWARWA))",
                    "MUSURU",
                    "TUNBURKU GANGIRE",
                    "D/UMARU NA SHIGIFA",
                    "SHADADI",
                    "ASIBIT DANMUTARI (DANMUTARI)",
                    "YAR MAITABA",
                    "TOWN DISPENSARY MAIRAIRAI (MAIRAIRAI)",
                    "RAMUNA",
                    "UNGUWAR NABO DISPENSARY",
                    "AIKI RESIDENT AREA",
                    "DISPENSARY MAI RAIRAI",
                    "MAKERT SQURE SABON TUNGA"
                ]
            ],
            [
                'name'=>'DANKO/MAGA',
                'units'=>[
                    "TARO GARI",
                    "GIDAN DANGUNTU",
                    "UNG. MAGAJI 'A'",
                    "UNG. MAGAJI 'B'",
                    "ISGEN",
                    "MASAMA",
                    "MUNI PRIMARY SCHOOL (DANKO YAMMA)",
                    "MAGA FADA",
                    "ZAIMA",
                    "GARIN HAUSAWA",
                    "DANKO FADA A.",
                    "DANKO FADA 'B' PRIMARY SCHOOL (DANKO FADA 'B')",
                    "ILBO",
                    "RIJIYAR RAFI",
                    "VETERINARY CLINIC MAGA",
                    "TSOHUWAR MA`AUNA KASUWAR DANKO",
                    "KOKUNAWA"
                ]
            ],
            [
                'name'=>'KANYA',
                'units'=>[
                    "PRIMARY SCHOOL (KUMDUMKU) (PRIMARY SCHOOL (KUNDURKU))",
                    "RAMBO PRIMARY SCHOOL (RANBO)",
                    "RADE PRIMARY SCHOOL (RADE)",
                    "TUDUN WADA RADE",
                    "D. KWALA",
                    "GWAZAWA PRIMARY SCHOOL (GWAZAWA)",
                    "GAU",
                    "MESA DAKARE",
                    "BIKI PRIMARY SCHOOL (BIKI)",
                    "GONAR KANYA",
                    "PRIMARY SCHOOL UNG. SULE FADA (CHEDIYA)",
                    "OPEN SPACE KORO (KORO)",
                    "KANGO PRIMARY SCHOOL (KANGO)",
                    "D' GOGA",
                    "UDECHI",
                    "ZUTTUN WATANA PRIMARY SCHOOL (ZUTTUN WATANA)",
                    "KANYA A.",
                    "KANYA B",
                    "D'PINDU PRIMARY SCHOOL (D'PINDI)",
                    "KATUNA GALADIMA",
                    "DLOMBO RIMARY SCHOOL",
                    "BAKIN KASUWA MAGAMA",
                    "UNGUWAR DAN BAUCHI BIKI",
                    "GORA PRIMARY SCHOOL",
                    "UNGUWAR HARI",
                    "MAI INUWA PRIMARY SCHOOL",
                    "UNGUWAR DOMSO",
                    "SARDAUNA AREA KANYA",
                    "RAFIN GORA PRIMARY SCHOOL"
                ]
            ],
            [
                'name'=>'KYABU/KANDU',
                'units'=>[
                    "GIDIN ICCEN MANGORO OPEN SPACE(RUNTUWA HURANGA) (GIDIN ICCEN MANGORO OPEN SPACE (RUNTOWA HURANGA))",
                    "PRIMARY SCHOOL SAME (SAME)",
                    "TUNGAN BANRE",
                    "MAKARANTA G. GOMO",
                    "ASIBITI D'KENKE (D'KENKE)",
                    "MASHIGI",
                    "MADATTAI",
                    "PRIMARY SCHOOL KANDU KARKARA (KANDU KARKARA)",
                    "K/ZARBU",
                    "GIDAN ICCEN BAURE OPEN SPACE (GIDAN MAI IDO) (GIDIN ICCEN BAURE OPEN SPACE (TUNGAR MAI DO))",
                    "ASIBITI KUNTOMO (KUNTOMO)",
                    "J.S.S KYABU",
                    "TANKIN MAGAJI WALELE",
                    "SHIKAUWA KYABU PRIMARY SCHOOL"
                ]
            ],
            [
                'name'=>'RIBAH/MACHIKA',
                'units'=>[
                    "UNG. WELE",
                    "PRIMARY SCHOOL (DUNGU) (PRIMARY SCHOOL (WUNGU))",
                    "MAKARANTA RIBAH A",
                    "MAKARANTA RIBAH B",
                    "CIVIL DEFENCE OFFICE KASUWA AWALA POMPO (KASUWA AWALA POMPO)",
                    "YAR ALI",
                    "AWALA ASIBITI 'A'",
                    "AWALA ASIBITI 'B'",
                    "ERGA PRIMARY SCHOOL (ERGA)",
                    "PRIMARY SCHOOL MASALLACHI VILLAGE (MASALLACHI VILLAGE)",
                    "OPEN SPACE DUHU (DUHU)",
                    "SABON GARI",
                    "TUNGAR DORAWA",
                    "OPEN SPACE MANGA (MANGA)",
                    "MACHIKA PRIMARY SCHOOL (MACHIKA)",
                    "MAKWAFA",
                    "KAWON BAGA",
                    "RIBA FADA",
                    "MANGORORI OPEN SPACE (WASTANGE) (MANGORORI OPEN SPACE(WASE TANGE))",
                    "G.D.S.S RIBAH",
                    "BESIDE GABI`S RESIDENCE",
                    "HAYIN AWALA PRIMARY SCHOOL",
                    "RIBAH KARA AWALA",
                    "TSOHON FILIN IDI",
                    "AL-MASFALAH PHARMACY",
                    "GLO MAST AREA",
                    "NIPOST RIBAH",
                    "MARARRABAN RAMBO PRIM. SCHOOL",
                    "G.D.S.S MACHIKA",
                    "DUTSEN KWANA PRIMARY SCHOOL",
                    "KASUWAR GARI AREA",
                    "KANDO AREA"
                ]
            ],
            [
                'name'=>'WAJE',
                'units'=>[
                    "DOKAR KWAYA PRIMARY SCHOOL (KASUWA OPEN SPACE DOKAR KWAYA)",
                    "K' DABO GALADIMA",
                    "TUNGAR YABABA",
                    "PRIMARY SCHOOL (D?GWENGWE) (PRIMARY SCHOOL (DEGWENGWE))",
                    "SENIOR SECONDARY SCHOOL SHENGEL (SHENGEL 'A')",
                    "SHENGEL 'B'",
                    "RAGAM",
                    "YARBUGA",
                    "WARKATA",
                    "TUNGAN GAYA PRIMARY SCHOOL (TUNGAN GAYA)",
                    "ZAGAMI",
                    "PRIMARY SCHOOL (SAKI) (PRIMARY SCHOOL (TSAKI))",
                    "DURUN KURUNGU",
                    "TURAMEN KYADO",
                    "DANKADE",
                    "OPEN SPACE T'BAKAYA MORAI (T'BAKAYA MORAI)",
                    "KURKU",
                    "WADAKO",
                    "ZUTTUN KOLO PRIMARY SCHOOL (ZUTTUN KOLO)",
                    "UNASHI I",
                    "UNASHI",
                    "YAR KNKA",
                    "NIZAMIYYA PRIMARY SCHOOL WAJE (WAJE)",
                    "GAYA 1",
                    "SILABI DISPENSARY",
                    "PRIMARY SCHOOL GIMIN BAJIDDA",
                    "UNGUWAR YAMMA",
                    "KANDAMO",
                    "TUNGAN DUMU PRIMARY SCHOOL",
                    "CHONOKO DAY SECONDARY SCHOOL",
                    "MAWESA PRIMARY SCHOOL",
                    "ZUTTUN KWAYA"
                ]
            ],
            [
                'name'=>'WASAGU',
                'units'=>[
                    "TUDUN BICHI 'A'",
                    "TUDUN BICHI 'B'",
                    "FADA",
                    "UNG. LIMAN SIRAJO",
                    "MADAMI A",
                    "SABON GARI YAMMA",
                    "UNITY BANK UPPER COURT AUDU SARKIN KUDI (AUDU SARKIN KUDI 'A')",
                    "OPEN SPACE SABUWAR TUNGA (SABUWAR TUNGA)",
                    "SABON GARIN GABAS",
                    "UNG. UMMARUJE A",
                    "UNG. UMMARUJE B",
                    "KURMACHI PRIMARY SCHOOL (KURMACHI)",
                    "GANDU DAN-GOGGO",
                    "AUDU PRIMARY SCHOOL",
                    "TSINTSINA PRIMARY SCHOOL",
                    "BEHIND WASAGU PALACE",
                    "GIDAN GURYA",
                    "DADINKOWA PRIMARY SCHOOL",
                    "UNGUWAR NASARAWA",
                    "UNGUWAR SA'IDU PRIMARY SCHOOL",
                    "MOEL PRIMARY SCHOOL WASAGU",
                    "UNGUWAR KIGO",
                    "TOWN DISPENSARY WASAGU",
                    "WASAGU JIBO PRIMARY SCHOOL",
                    "KUKA PRIMARY SCHOOL",
                    "TANGARAM PRIMARY SCHOOL",
                    "KASUWAR GANDU DANGOGO"
                ]
            ],
            [
                'name'=>'YALMO/SHINDA',
                'units'=>[
                    "GIDAN YALMO",
                    "GANGAREN SHINDI",
                    "GIDAN WARI",
                    "DAN BANGANE",
                    "OPEN SPACE KAMPANI GAWO (KAMPANI GAWO)",
                    "DONKA",
                    "RIJIYAR FROMA",
                    "GIDAN SHINDI",
                    "GANGAREN YALMO PRIMARY SCHOOL",
                    "HELGE MELO",
                    "UNGUWAR ROGO",
                    "KUGDA DANWERE PRIMARY SCHOOL",
                    "NOMAN WADE TAFKI"
                ]
            ],
            [
                'name'=>'GWANFI/KELE',
                'units'=>[
                    "GIDAN RANE",
                    "ILLABRE",
                    "KAPSAPI",
                    "GIDAN SUYA",
                    "GANGAREN YELE",
                    "ISRANGE PRIMARY SCHOOL (ISRANGI)",
                    "BERBERU PRIMARY SCHOOL (BERBERU)",
                    "TUNGAN BIZO I",
                    "TUNGAN BIZO II",
                    "UKUHU",
                    "TUNGAN MAJE PRIMARY SCHOOL"
                ]
            ],
            
        ]
    ];
    }
}