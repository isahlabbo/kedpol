<?php

namespace App\services\State;

trait Jega{
    public function registerJegaWardsAndTheirPollingUnits($lga,$wardCode)
    {
        foreach ($this->jegaWards()['wards'] as $ward) {
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
public function jegaWards()
    {
    return [
        'name'=>'Jega',
        'wards'=>[
            [
            'name'=>'ALELU/GEHURU',
            'units'=>[
                    "GUYAWA, ALELU MAKARANTA",
                    "KASUWA, ALELU",
                    "SARKAWA, ALELU FILIN SARKAWA",
                    "ATTAGARA, DAN FILI",
                    "BAWANKA, MAKARANTA",
                    "DUKKUNA/RAFI FILIN CEDIYA",
                    "FADA, GEHURU",
                    "SARKAWA, GEHURU MAKARANTA",
                    "JADADI, MAKARANTA",
                    "JADADI/ASARARA, FILIN KASUWA JADADI",
                    "TANZA, MAKARANTA",
                    "GUYAWA FILIN KOKANI",
                    "FILIN GWANNO",
                    "RUNTU PRIMARY SCHOOL",
                    "TSOHUWAR ASIBITI",
                    "KANBAZAWA",
                    "ATTAGARAWA MAKARANTA",
                    "NASSARAWA GEHORU",
                    "FADA JADADI",
                    "RUNJI GEHERU"
                ]
            ],
            [
                'name'=>'DANGAMAJI',
                'units'=>[
                    "ALKALAWA 'A' / B, MAKARANTA",
                    "BAMUNGABE, DAN FILI",
                    "BABBAN DUTSE, DAN FILI",
                    "BIRNIN - MADI, MAKARANTA",
                    "KOFAR MARAFA, DANGAMAJI",
                    "DANFILI KASUWA, DANGAMAJI",
                    "SHIYAR KAURA, DANGAMAJI",
                    "DANTAWAYE, MAKARANTA",
                    "DUDDUKE, MAKARANTA",
                    "UNG. YALAUDU LUGU, DAN FILI",
                    "UNG. MADI 'A / B, DAN FILI",
                    "UNG. HALI, DAN FILI",
                    "UNG. ALU BUKARI, DAN FILI",
                    "DARBEJIYA AKALAWA",
                    "DAN FILI KOFA PRIMARY SCHOOL",
                    "DAN FILI FADA BIRNIN MADI",
                    "TSOHUWAR ASIBITI DAN GAMAJI",
                    "DUDEKU KAURA",
                    "UNGUWAR MADI ASIBITI",
                    "PRIMARY SCHOOL UNGUWAR MADI",
                    "BADARIYA ABARMA DAN FILI"
                ]
            ],
            [
                'name'=>'DUNBEGU/BASAURA',
                'units'=>[
                        "DUNBEGU B/GIDA, DAN FILI",
                        "DUNBEGU/JALLAWA, MAKARANTA",
                        "MAZA - GOMA, DAN FILI",
                        "BASAURA BABBAN GIDA, GARKAR DANJUMA",
                        "BASAURA IGALAWA, MAKARANTA",
                        "LANGIDO, DAN FILI",
                        "BARA, DAN FILI",
                        "BAKABE, DAN FILI",
                        "TSIRARRAI, DAN FILI",
                        "UNG. MANU, DAN FILI",
                        "UNG. GARJI, MAKARANTA",
                        "UNG. DANMAIMUNA, MAKARANTA",
                        "DUNBEGU ASIBITI",
                        "DUBEGU JALAWA DAN FILI",
                        "ASIBITI BASAURA",
                        "GOVERNMENT DAY SEC. SCH. BASAURA",
                        "BASAURA IGALAWA DAN FILI",
                        "UNGUWAR NA GINDI"	
                ]
            ],
            [
                'name'=>'GINDI/NASARA/KYARMI/ GALBI',
                'units'=>[
                    "DANFILI GALBI",
                    "MARINA GINDI",
                    "KURNA GINDI",
                    "GARKAR HALI GRA",
                    "DANFILI, ILLELA",
                    "SHIYAR BIRNI KYARMI, GIDAN T.V",
                    "DANFILI KYARMI",
                    "DANFILI MASSALACIN ZARYA",
                    "FADA, NASSARAWA",
                    "NASSARAWA PRIMARY SCHOOL",
                    "GINDI DISPENSARY",
                    "GINDI PRAMARY SCHOOL",
                    "GRA SPECIAL PRIMARY SCHOOL",
                    "GRA SPECIAL PRIMARY SCHOOL GATE",
                    "GRA SPECIAL PRIMARY BLOCK",
                    "KYARMI PRIMARY SCHOOL",
                    "KYARMI DISPENSRY",
                    "NASSARAWA DESPENSRY"
                ]
            ],
            [
                'name'=>'JANDUTSI/BIRNIN MALAM',
                'units'=>[
                    
                    "AGWADA RIJIYAR D/BABARKA",
                    "AGWAOBA KASUWA",
                    "BIRNIN MALAM FADA A",
                    "BIRNIN MALAM MAGAJI B, MAKARANTA",
                    "HELENDE, DAN FILI",
                    "INGARJE, DAN FILI",
                    "JANDUTSE FADA / KASUWA",
                    "JANDUTSE KAURA, GARKA DAN SANI",
                    "MACIRI, GARKA ALU MACIRI",
                    "TANZA, MANGWARO",
                    "TABKIN KADA, KASUWA",
                    "ASIBITI A GWADA",
                    "INGARJE PRIMARY SCHOOL",
                    "TRANSFORMER FADA",
                    "MAGINA AYYA JAN DUTSI",
                    "GANDU AREA JAN DUTSI",
                    "MASAKA JAN DUTSI",
                    "NASSARAWA JAN DUTSI"
                ]
            ],
            [
                'name'=>'JEGA FIRCHIN',
                'units'=>[
                    "FIRCINAWA 'A', GIDAN SHAWARA",
                    "FIRCINAWA 'B', TSOHON BANKI",
                    "NUFAWA A / B, KARA KANTIN D/LADI",
                    "GOBIRAWA 'A' / 'B', GARKAR ALH. GYENDANE",
                    "KOLAN - KOJI,DAN FILI",
                    "MAI - JIRGI A / B, JEGA GARKAR MAIJIRGI",
                    "SABON GARI A / B, JEGA MODEL PR. SCHOOL",
                    "UNG. FIRCIN, DAN FILI",
                    "ZABARMAWA 'A' / 'B', BAKIN GULBI PR. SCHOOL",
                    "FIRCINAWA, GARKAR MAMMAN KARASHA",
                    "MAKARANTA MALAM TSOHO GATE",
                    "GIDAN SHAWARA ASIBITI",
                    "MARKA ZIYA MAKARANTA",
                    "GARKAR YABI MASALLACI",
                    "MARJA'U SUNNAH GOBIRAWA",
                    "KWAKWARE GIDAN ALH. ALMAJIRI",
                    "NEPA DODORU AREA",
                    "GOVERNMENT DAY SEC. SCH. JEGA",
                    "GARBA MAI SANKO BAYAN POLICE STATION",
                    "TUNGAR ZABARMAWA ALHASSAN COMPUTER",
                    "TUNGAR ZABARMAWA ASIBITI",
                    "TITIN ALU COSTOMER"
                ]
            ],
            [
                'name'=>'JEGA KOKANI',
                'units'=>[
                    "FADA COURT YARD",
                    "FADA GIDAN KOKANI",
                    "GINGA GIDAN ADAMU WAZAM",
                    "FADA GORIBA",
                    "GINGA GIDAN ALHAJI MASHAYABO",
                    "MARINAR WAJE GIDAN HALILU GURMU",
                    "MARINAR WAJE GIDAN ALH. GARBA",
                    "MARINA KOFA, GARKAR AMADU ORGANIZER",
                    "RAZAI, GARKAR MAGAWATA",
                    "SADAM GIDAN SARKI",
                    "UNG. DODO, DAN FILI",
                    "UNG. RASIKU DANFILI",
                    "YARGA DANFILI",
                    "FADA DAN FILI",
                    "OKE PRIMARY SCHOOL KOKANI",
                    "MAKARANTA MALAM RABIU GINGA",
                    "FADA",
                    "MARINA PRIMARY HEALTH CARE",
                    "DAN FILI SKY SCIENCE ACADEMY",
                    "TAKALMAWA KWANAR YAN WANKI",
                    "FILIN MARINA WAJE"
                ]
            ],
            [
                'name'=>'JEGA MAGAJI "B"',
                'units'=>[
                    "GAMU GAKU, DAN FILI",
                    "GOMOZON JEGAWA, DAN FILI",
                    "GOMOZON YARI, MAKARANTA",
                    "SABON GARI, GIDAN DANKONTAGORA",
                    "SABON GARI (NIIMA GIDAN TAKI)",
                    "SABON GARI (NIIMA GARGAR SARDAUNA)",
                    "SABON GARI, GARGAR AMADU TEACHER",
                    "SABON GARI, GARGAR DUMBUJI",
                    "SABON GARI, GARKAR MUSA KAFINTA",
                    "SABON GARI, ZONAL LAND OFFICE",
                    "DAN WURIN BUZAYE PRIMARY SCHOOL",
                    "SABON GARIN JUNAIDU ROAD",
                    "ALKHALI BELLO COURT",
                    "SABON GARI GIDAN RUWA",
                    "NI'IMA MASALLACI JUMA'AT GATE",
                    "NI'IMA MASALLACI",
                    "NI'IMA RIJIYAR DAN BARO",
                    "NYSC PRIMARY SCHOOL",
                    "NI'IMA BUHARI HALIDU",
                    "NI'IMA HAJIYA HAUWA MAKARANTA",
                    "UNITY SCHOOL",
                    "ZAWUYYA MAKARANTA",
                    "ISAH WASHE FILIN SABON GARI",
                    "SABON GARI B. MOBLE MAX",
                    "LABARAN GURMU GAWO",
                    "SABON GARIN RAIRAN MALAM HAMZA",
                    "SABON GARI KWANAR ADABULET",
                    "SOLAR KWANAR FILIN GASKO",
                    "COMPREHENSIVE PRIMARY SCHOOL",
                    "FILIN TSAKUWA ASIBITI",
                    "CHIKA NEPA DAN FILI TUDUN WADA",
                    "KWANAR ALHAJI LAWALI MAI SHIYA TUDUN WADA",
                    "RAUDATU SUNNAH",
                    "FILIN TSAKUWA DARBEJIYA ABBAS",
                    "SDP DUTSIN ZAKI AREA"
                ]
            ],
            [
                'name'=>'JEGA MAGAJI "A"',
                'units'=>[
                    "BIRNIN YARI PRIMARY SCHOOL ' A'",
                    "FILIN BAJI 'A' / B, GARKAR ABUBAKAR MIJINYAWA",
                    "BIRNIN YARI 'A', GARKAR BALA BATURE",
                    "BIRNIN YARI 'B', GARKAR ALH. YUSUF BIYARI",
                    "KAURAR ROGO A / B, GARKAR MAJIDADI",
                    "TAKALIMAWA A / B, GARKAR ALH. ARJIKA SODA",
                    "KAURAR LAILAI, GARKAR ALH. ABDU KAURA",
                    "MALLAMAWA, GARKAR ALH. SAHABI",
                    "KASURWAR RINI, KASUWAR RINI",
                    "ADUWAR YAR MAYALO A / B",
                    "TABUDA, GADAR TABUDA",
                    "SABON GARI A / B, GADAR ABBA MAIBURODI",
                    "SABON GARI, GARKAR S/KABI",
                    "NIZAIMYYA PRIMARY SCHOOL 'A' / 'B'",
                    "ABUBAKAR SADIQ INSTUTUTE",
                    "KOFAR ALEIRO",
                    "ABE MAI GORO",
                    "BOREHOLE ALHAJI BARAYA",
                    "BABBAN GIDA",
                    "ASIBITI BIRNIN YARI",
                    "ASIBITI KOFAR LAKA",
                    "YAN TELOLI",
                    "DAN TSOHO",
                    "KAURA MALAN HALI",
                    "BOREHOLE KAURA MAI DAJI",
                    "MAKERAR BURKA",
                    "BOREHOLE SALIHU MAI TURARE",
                    "YAR YARIYA ADUWAR YAR MAYALO",
                    "KASUWAR MANI",
                    "MAI KABI TABUDA",
                    "JIKANI SABON GARI",
                    "UNGUWA ZAKIRAI",
                    "KABIRU ALAILU SABON GARI",
                    "DAN FODIYO ISLMAIC CENTER",
                    "GATE NIZAMIYYA"
                ]
            ],
            [
                'name'=>'KATANGA/FAGADA',
                'units'=>[
                    "KATANGA AKALAWA, DAN FILI",
                    "KATANGA KAURA, MAKARANTA",
                    "KATANGA GUMBIN-DARI, DAN FILI",
                    "KATANGA KANBARAWA 'A' / 'B', FAGADA KARAMA",
                    "FAGADA UBANDAWAKI S/HALI",
                    "FAGADA UBANDAWAKI SHIYAR KAURA",
                    "KATANGA KAURA DAN FILI",
                    "MAKARANTA MALAM ALI",
                    "KANBARAWA MARINA"
                ]
            ],
            [
                'name'=>'KIMBA',
                'units'=>[
                    "AKALAWA, KIMBA MAKARANTA",
                    "KIMBA FADA, GARKA MUZA",
                    "KIMBA FAKKU, FAKKU DANKO D/FILI",
                    "KIMBA GEZA, GEZA MAKARANTA",
                    "KANKARAWAI A/B, GARKAR MAIGARI",
                    "KAURA A / B, KIMBA GARKAR M. YAHYA",
                    "KUITANE, MAKARANTA",
                    "KUITANE, KASUWA",
                    "SANAGI, DAN FILI",
                    "TULLAYE, DAN FILI",
                    "KIMBA AKALAWA COURT",
                    "GEZA ASIBITI",
                    "AREA DEVELOPMENT",
                    "KWAITANI ASIBITI",
                    "KWAITANI MURNA"
                ]
            ],
            
        ]
    ];
    }
}