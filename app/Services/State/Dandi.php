<?php

namespace App\services\State;

trait Dandi{
    public function registerDandiWardsAndTheirPollingUnits($lga,$wardCode)
    {
        foreach ($this->dandiWards()['wards'] as $ward) {
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
public function dandiWards()
    {
    return [
        'name'=>'Dandi',
        'wards'=>[
            [
            'name'=>'BANI ZUMBU',
            'units'=>[
                    "GARKAR MAGAJI/GARKAR MAGAJI",
                    "GWASADI GWASADI",
                    "MASAMA MASAMA",
                    "YALAWA YALAWA",
                    "KOFO KOFO",
                    "WASALE WASALE",
                    "TUNGAL KEKE/TKEKE MAIGARI",
                    "TUNGAR MAI GARI",
                    "LALEBU LALEBU",
                    "TUNGAR BANKANI /TBANKONI",
                    "TUNGAR NANKONI / T/NOMAU",
                    "MAIDAJI MAIDAJI",
                    "ASIBITI BANIZUMBU",
                    "PRI SCH BANIZUMBU"
                ]
            ],
            [
                'name'=>'BUMA',
                'units'=>[
                        "TUNGAR RAFI TUNGAR RAFI 'A'",
                        "TUNGAR RAFI B",
                        "GAMANA GAMANA",
                        "ALFARMA ALFARMA",
                        "BULLUNGAI BULLUNGAI",
                        "TUNGAR TAHIRU TUNGAR TAHIRU",
                        "GILLARE GILLARE",
                        "TUNDUN SANI TUNDUN SANI",
                        "TUNGAR KWANDO TUNGAR KWANDO",
                        "MUHU MUHU",
                        "BUMA MAKARANTA BUMA MAKARANTA",
                        "GUNGUN KUKA GUNGUN KUKA",
                        "TUNGAR HIMMA TUNGAR HIMMA",
                        "TUNGAR MAJE TUNGAR MAJE",
                        "BUKKI BUKKI",
                        "BUMA MAKARANTA B",
                        "ASIBITI KARAMA",
                        "BUMA ASIBITI BABBA"
                ]
            ],
            [
                'name'=>'DOLE KAINA',
                'units'=>[
                    "GARKAR MAGAJI GARKAR MAGAJI",
                    "GARKAR MAGAJI",
                    "TUNGAR NOMANADA TUNGAR NOMA",
                    "DOLEKAINA PRIMARY SCHOOL",
                    "OPEN SPACE BABBAN FILI (DOLEKAINA BABBA)",
                    "PRIMARY SCH. (TUNGAR SULE )",
                    "LEKYANGU LEKYANGU",
                    "GARKAR MARAFA TUDUN WADA",
                    "SHARIA COURT",
                    "DOLE KAINA POLICE DIVISION",
                    "DOLE KAINA VETERINARY",
                    "CUSTOM BARRACK",
                    "OPEN SPACE YAN SHINKAFA DOLE KAINA",
                    "ASIBITI TUNGAR SULE"
                ]
            ],
            [
                'name'=>'FANA',
                'units'=>[
                    "FANA MAKARANTA DAJI 'A'",
                    "FANA MAKARANTA DAJI 'B'",
                    "TUNGAR MAIDAJI TUNGAR MAIDAJI",
                    "TUNGAR KAKA T/KAKA",
                    "ISAH KAINA DOGO",
                    "TABKIN SANSANI",
                    "SABON GIDA",
                    "UNG. BAKOSHI",
                    "TUNGAR ZAGI TUNGAR ZAGI",
                    "TUNGAR WUNDI TUNGAR WUNDI",
                    "TUNGAR M. JABBO",
                    "TUNGAR NOMA",
                    "KURYA KURYA",
                    "JSS GIRLS FANA(FANA MAKARANTA GARI A)",
                    "MODEL PRI. SCH.(FANA MAKARANTA GARI 'B')",
                    "SHAWA PRI SCH FANA",
                    "MAKARANTAR DAJI B ANNEX",
                    "FANA MAKARANTA GARI B ANNEX",
                    "FANA PRI HEALTH CARE",
                    "GOV. SEC. SCH FANA",
                    "ASIBITI MAIDAJI"
                ]
            ],
            [
                'name'=>'MAI HAUSAWA',
                'units'=>[
                    "TELA PRIMARY SCHOOL",
                   "MUDI MODEL PRIMARY SCHOOL",
                   "OPEN SPACE GARKAR IRO TELA G/IRO TELA",	
                   " GARKAR ABBA SHUWA (/G/ABBA SHUWA)	",
                    "OPEN SPACE RIJIYAR TELA (GARKAR ALASAN GWAMNA)",
                    "PRIMARY SCH. (T/MAIZUMA G/MAIZUMA)",
                    "LGEA SECRETARIAT DOGON RINI",
                    "OPEN SPACE GIDAN RUWA MAIHAUSAWA (G/BAWA MAIBORODI)",
                    "MUDI DAY SEC. SCH. A",
                    "MUDI DAY SEC. SCH.",
                    "MUDI MODEL PRI SCH B",
                    "MUDI MODEL PRI SCH C",
                    "MUDI MODEL PRI SCH D",
                    "DOGON RINI MUDI MODEL A",
                    "DOGON RINI MODEL B",
                    "OPEN SPACE IBRO TELA B NEAR TRANSFOMER",
                    "OPEN SPACE FILIN MASHAYABONEAR TRANSFORMER",
                    "OPEN SPACE DOGON YARO NEAR TELA PRI SCH",
                    "TELA PILOT",
                    "TUNGAR MAIZUMA PRI SCH",
                    "OPEN SPACE YAN GWANGWANI NEAR TRANSFORMER TASHAR DOLE KAINA"
                ]
            ],
            [
                'name'=>'KYANGAKWAI',
                'units'=>[
                    "MARINA / MARINA",
                    "UNG. HASSAN U/HASSAN",
                    "MAKARANTA (GORUN YAMMA)",
                    "GORUN BARMU G/BARMU",
                    "SABON GARI S/GARI",
                    "KYANGAKWAI 'A' KYANGAKWAI PRI. SCH.",
                    "KYANGAKWAI 'B' KYANGAKWAI PRI. SCH.",
                    "MODEL PRI. SCH. S/GARI FINGILLA)",
                    "GARKAR SHARU, GARKAR SHARU",
                    "TUNGAR NOMA,TUNGAR NOMA",
                    "TUNGAR BAUMA, TUNGAR BAUMA",
                    "MALLAM YARO, MALLAM YARO",
                    "TUNGAR MUZA, TUNGAR MUZA",
                    "ASIBITI UNGUWAR HASSAN",
                    "GORUN YAMMA PRI SCH",
                    "GIDAN RUWA AWALA",
                    "OPEN SPACE NEAR POLICE OUTPOST",
                    "OPEN SPACE GIDAN RUWA",
                    "MAKARANTA FINGILLAH",
                    "OPEN SPACE SABON GARI NASARAWA"
                ]
            ],
            [
                'name'=>'GEZA',
                'units'=>[
                    "GEZA MODEL PRI. SCH. 1 (GARKAR SAKO FADA 'A')",
                    "GEZA MODEL PRI. SCH. (GARKAR SAKO FADI 'B')",
                    "DUKUSHI MAKARANTA",
                    "BABBAN TABKI BABBAN TABKI",
                    "BALU MAKARANTA BALU MAKARANTA",
                    "BELIN MAIKAMA BELIN MAIKAMA",
                    "BELIN ZUMBAI BELIN ZUMBAI",
                    "UNG. SANYI UNG. SANYI",
                    "TUNGAR KADE",
                    "GEZA MAKARANTA GEZA PRIMARY SCHOOL",
                    "YAWURYA YAWURYA",
                    "BELIN NASSARAWA B/NASSARAWA",
                    "DOGON DAJI",
                    "TUNGAR BAIDO TUNGAR BAIDO",
                    "OPEN SAPCE DUKUSHI RUGGA NEAR RIMA RIVER BASIN",
                	"GEZA P.H.C",
                	"OPEN SPACE GIDAN RUWA IFAD GEZA"
                ]
            ],
            [
                'name'=>'KAMBA',
                'units'=>[
                    "OPEN SPACE TSOHUWAR KASUWA (GARKAR TURAWA)",
                    "BAGUMA KWARA",
                    "OPEN SPACE MICRO FINANCE BANK( GARKAR GALADIMA)",
                    "OPEN SPACE GIDAN RUWA KAMBA KAMBA( G/RUWA ZANGO)",
                    "OPEN SPACE OLD VETINARARY (KAMBA KARA 'A')",
                    "PRIMARY SCH.MALLAMAWA( KAMBA KARA B)",
                    "MALAM YARO",
                    "TUKURWA TUKURWA",
                    "ZANGO PRIMARY SCHOOL",
                    "OPEN SPACE GARKAR ( D/KWALA )",
                    "GORUN D/GWALLO GORUN D/GWALLO",
                    "BARIKI WAJEN WASA",
                    "CIVIC CENTRE( BARIKI WAJEN WASA B)",
                    "OPEN SPACE TSOHUWAR KASUWA (G/ UMARU MAIKANTI)",
                    "NANA ASMAU GIRLS SEC SCH",
                    "VETERINARY",
                    "MALLAMAWA PRI SCH A",
                    "MALLMAWA B",
                    "NEW IMMIGRATION OFFICE",
                    "NASSARAWA SABON GARI (IMMIGRATION BASE)",
                    "BARIKI WAJEN WASA CIVIC CENTER",
                    "MAGISTRATE COURT A",
                    "MAGISTRATE COURT B",
                    "KOTU KARA A",
                    "BIDI WANI RIJIYA LADAN",
                    "GARKA GALDIMA POLICE STATION",
                    "BIRNI AREA NEAR TRANSFORMER",
                    "ZANGO A",
                    "ZANGO B",
                    "ZANGO C",
                    "ZANGO NEPA OFFICE",
                    "ZANGO LODGE",
                    "OPEN SPACE WELA ETISALATMASK",
                    "OPEN SAPCE ILLELA NEAR",
                    "OPEN SPACE DAN MAHUTA",
                    "OPEN SAPCE RIJIYAR DAN KAULA",
                    "GORON BAJIDA PRI SCH",
                    "DAITAGI GARIN KANTA PRI SCH",
                    "DAN SIFAWA GIDAN RUWA OPEN SPACE",
                    "U.K LODGE GIDAN RUWA"  
                ]
            ],
            [
                'name'=>'KWAKKWABA',
                'units'=>[
                    "KWAKWABA PRIMARY SCHOOL",
                    "UNG. ZAKARU",
                    "TUNGAR YANKORI",
                    "WAYEKAI",
                    "SABON GARIN SARHU",
                    "TSIKA",
                    "ASIBITI KWAKWABA",
                    "FAGEN MATA PRI SCH"
                ]
            ],
            [
                'name'=>'MAIGWAZA',
                'units'=>[
                    "MAIGWAZA MAKARANTA FULANI",
                    "SABON GARI",
                    "GIDAKAI GIODAKAI",
                    "RUDUN BISA",
                    "GIDAN DOBI GIDAN DOBI",
                    "MAIGWAZA P.H.C",
                    "OPEN SPACE ASARARA/TUNGA R ROGO PRI SCH"
                ]
            ],
            [
                'name'=>'SHIKO',
                'units'=>[
                    "ONA",
                    "SHIYAR NOMA PRI. SCH. (GARKAR NOMA)",
                    "GORUN MALLAM",
                    "SHIKO MAKARANTA",
                    "RIJIYAR MAIKABI",
                    "NAYADIYA NAYADIYA",
                    "TUNGAR NOMA DUTSE T/NOMA DUTSE",
                    "RIJIYAR MAI KABI PRI HEALTH CARE",
                    "SHIYAR NOMA PRI SCH (GARKA NOMA)",
                    "SHIKO MAKARANTA B"
                ]
            ],
            
            
        ]
    ];
    }
}