<?php

namespace App\services\State;

trait Argungu{
    public function registerArgunguWardsAndTheirPollingUnits($lga,$wardCode)
    {
        foreach ($this->argunguWards()['wards'] as $ward) {
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
    public function argunguWards()
    {
    return [
        'name'=>'Argungu',
        'wards'=>[
            [
            'name'=>'ALWASA/GOTOMO',
            'units'=>[
                    "ALWASA MODEL PRIMARY SCHOOL",
                    "U / ZUMARI",
                    "UNGUWAR MAIFATU",
                    "TUNGAR MARINA",
                    "TUNGAR RAFI",
                    "UMMARA MAMUDA",
                    "GOTOMO MAKWASHE",
                    "GOTOMO MODEL PRIMARY SCHOOL",
                    "INDIRE",
                    "GWABARE",
                    "DABIRE",
                    "ALWASA YAMMA",
                    "TUNGAR JATAU",
                    "UNGUWAR GUJIYA",
                    "JELANI UNASARA",
                    "SABON GARIN T.TUDUN MARINA",
                    "BERE BOREHOLE",
                    "TUNGAN RAFI DISPENSARY",
                    "KWAMAS",
                    "GWALGWARE",
                    "GOTOMO SHEHU",
                    "UNGUWAR BARE BARI",
                    "J.S.S. GOTOMO",
                    "SABON GARIN INDIRE",
                    "RAWUYYA BOREHOLE",
                    "SABON GARIN MAI JIRAGE",
                ]
            ],
            [
                'name'=>'DIKKO',
                'units'=>[
                        "MODEL PRIMARY SCHOOL DANKOJI I",
                        "MODEL PRIMARY SCHOOL DANKOJI II",
                        "GARKAR BARAYA",
                        "KITARAWA",
                        "GARKAR S/GOBIR",
                        "MALLAMAWA",
                        "GARKAR - DANKUMAJI",
                        "GIDAN HOMA",
                        "SABON GARI PRIMARY SCHOOL",
                        "GARKAR SAGWARE",
                        "DAN-MANGWARO",
                        "KOFAR MAI-CHIBI",
                        "KASUWAR- YAR-MAHAUTA",
                        "GARKAR MALAN MAI GATARIN BAKI",
                        "GARKAR MATUMBULI",
                        "K/ MACHIBI /E O IBRAHIM",
                        "KITARAWA /YAR'ADUA",
                        "GIDAN DORAWA",
                        "GARKAR JATAU 2 /HARUNA KWALE",
                        "GARKAR MAISHIYA/GIDAN HOMA",
                        "KOLAWA/DANKOJI",
                        "GARKAR MOTA MAKERI",
                        "DAGELAWA",
                        "KABINO",
                        "KARA/VETINARARY",
                        "UNGUWAR MALAMAI /TSANGAYA"
                ]
            ],
            [
                'name'=>'FELANDE',
                'units'=>[
                    "FELANDE I",
                    "FELANDE II",
                    "SABON GARIN KADUBA",
                    "DANKIRYA",
                    "BORAYE",
                    "JADA I AND II",
                    "SABON GARIN BACHAKA",
                    "FAKON SARKI",
                    "TUNGAR NOMA	
                    TUNGAR KWALAMA",
                    "KUKOKI",
                    "KADUBBA HASSAN",
                    "BELA",
                    "UNGUWAR MALI",
                    "TUNGAR MAIDAWA",
                    "BACHAKA 1 BOREHOLE",
                    "TASUNBULE",
                    "FELANDE JSS",
                    "UNGUWAR FURI OPEN SPACE",	
                    "SABON GARI TUNGA MAIDAWA",
                    "UNWARA",
                    "BADARIYA M.P.S"
                ]
            ],
            [
                'name'=>'GALADIMA',
                'units'=>[
                        "OLD POST OFFICE",
                        "BARIKIN GARI",
                        "KABANCHI DISPLAY AREA",
                        "MARINAR KAURA",
                        "KOFAR TUDU",
                        "FORESTRY I AREA",
                        "BARIKIN GARI/ YAN LEMU",
                        "MERAWA/RIJIYAR KUNGIYA",
                        "MERAWA WURIYA",
                        "YARI BAGAYA",
                        "KOFAR TUDU / MERAWA",
                        "MARINAR KAURA/ BAKIN RUWA",
                        "BAKIN GARI 2/ GARKAR SARAKI",
                        "KABANCHI/DAN DURUMI",
                        "KANTA MUSEUM"
                ]
            ],
            [
                'name'=>'GULMA',
                'units'=>[
                        "GULMA S.P.S. GULMA",
                        "GARKAR SARKI GULMA",
                        "MODACI",
                        "DUTSI",
                        "FANFO",
                        "DAN RINI",
                        "GARKAR KURNA",
                        "GARKAR ADAMU",
                        "SABON GARI PRIMARY SCHOOL",
                        "SHIYAR ILLELA",
                        "GARKAR AJIYA",
                        "GARKAR BORE.",
                        "GALGAWA.",
                        "GORU.",
                        "MODACHI RIJIYA",
                        "ZAWIYYA.",
                        "DAUSA.",
                        "KATSINAWA.",
                        "SABON GARIN NOMA.",
                        "UNGWAR SARKI BOREHOLE.",
                        "NASARAWA EKOKI",
                        "ASARARA P.S.",
                        "S.IRO. MAI RAKUMI."
                ]
            ],
            [
                'name'=>'GWAZANGE/KISAWA/U GYAGA',
                'units'=>[
                        "UNGUWAR GYAGA",
                        "GWAZANGE I",
                        "POLICE STATION GATE",
                        "KISAWA",
                        "TUNGAR ALKASIN",
                        "TUNGAR KARANGIYA",
                        "KAMFANI SANI",
                        "WALI",
                        "GONAR ZARUMAI GWAZANGE",
                    	"SABUWAR GWAZANGE",
                    	"GWAZANGE KUDU"
                ]
            ],
            [
                'name'=>'KOKANI NORTH',
                'units'=>[
                        "SARKI SANI MODEL PRI. SCHOOL",
                        "OLD PRISON",
                        "DOGO KAFI MARI AREA",
                        "LOCAL GOVERNMENT IST GATE",
                        "MOH'D MERA MODEL PRIMARY SCHOOL",
                        "BAYA TA HAIFU (AREA)",
                        "MATAN FADA AREA",
                        "GARKAR S/SHANU B/ KASUWA",
                        "RIJYAR BARGA (AREA)",
                        "SABON GARIN GOBIRAWA",
                        "GARKAR MAKAMA",
                        "BAYAN GIDAN RUWA",
                        "SLAMIYA ASSALAMU ALAIKUM",
                        "DAN SHAFARMA GIDAN TANKI",
                        "G KYABUDU RIJIYA",
                        "LUNGUN ZABARMAWA",
                        "MAGAJIN MATAN FADA",
                        "RIJIYAN ALHAJI YUSUF",
                        "SABON GARIN KANTA MPS.",
                        "UNWALA TANKI",
                        "LUNGUN MALLAMAI",
                        "GANGAREN MATAN FADA MTN",
                        "TASHAR BAYAWA",
                        "MAMMAN DAN KAFINTA",
                        "GAMDI BAKIN RUWA",
                        "BAKIN GIDAN ALKALI G.R.A",
                        "BAYAN J.N.I"
                ]
            ],
            [
                'name'=>'KOKANI SOUTH',
                'units'=>[
                        "SAMA SEC. SCHOOL ARUGUNGU",
                        "RURAL HEALTH CENTRE",
                        "SHEHU KANGIWA MODEL PRI. SCHOOL",
                        "SHEHU KANGIWA MODEL PRIMARY SCHOOL II",
                        "GARKAR SARKI AREA",
                        "GARKAR JUSTICE AREA I",
                        "GARKAR JUSTICE AREA II",
                        "C.O.E. GATE I-II",
                        "OLD MOTOR PARK AREA",
                        "YAR-DOLE G/MAIGANDU AREA",
                        "LOWCOST HOUSES AREA",
                        "FILLIN IDI/ TRANSFORMER",
                        "GARKAR MAI RIGA DOGARI",
                        "MILLIONAIRES QUARTERS BOREHOLE",
                        "DUTSIN MARIYA",
                        "DUGAJIN KABBI",
                        "NRC.",
                        "FARIN TANKI",
                        "NA GIDA",
                        "DAWAKIN SARKI",
                        "GARKAR LAYYA",
                        "FAKKAI ISLAMYIYA",
                        "UBAIDA MERA",
                        "DAN ICHE HABSATSANZA",
                        "DAN ICHE",
                        "GIDAN RIJIYA",
                        "AUGIE QUARTERS.",
                        "SHAGARI QUARTERS. P.S.",
                        "MAGAJIN RAFI. MPS.",
                        "SABON GARIN BARKI"
                ]
            ],
            [
                'name'=>'LAILABA',
                'units'=>[
                        "LAILABA MODEL PRIMARY SCHOOL",
                        "BAGUNI MODEL PRIMARY SCHOOL",
                        "DANI FANDU",
                        "DAMBA",
                        "SHIYAR GALADIMA",
                        "NATSINI GADA",
                        "KATANGA AREWA",
                        "BANI DAI",
                        "DAGIMUN",
                        "KATANGAR ZABARMA",
                        "TUNGAR DAN MAGAJI",
                        "SABON GARI LAILABA",
                        "FADA NEPA OFFICE",
                        "TUBA KAINA",
                        "BAGUNI MAMUDA",
                        "TUNGAR ALLE",
                        "TSAMIYAR DAMBA",
                        "ADARAWA LAILABA",
                        "NATSINI KUFAI",
                        "GIRBANI",
                        "LAINI PS.",
                        "TUNGAR BANI ZUMBU",
                        "GALBIN DAN MARAKI",
                        "RUGGAR JULI"
                ]
            ],
            [
                'name'=>'SAUWA KAURAR SANI',
                'units'=>[
                        "SAUWA PRIMARY SCHOOL",
                        "ADULT EDUCATION CLASS",
                        "B/MASALLACIN JUMU'A",
                        "BAKIN MASALLACI",
                        "TUNGAR RAI-RAI - PRIMARY SCHOOL",
                        "KAURA SANI PRIMARY SCHOOL",
                        "BANGOLA PRIMARY SCHOOL",
                        "BIRNIN LAFIYA PRIMARY SCHOOL",
                        "KUKADU PRIMARY SCHOOL",
                        "DALATU PRIMARY SCHOOL",
                        "BIACHIN MAGAJI",
                        "RIJIYAR MAI SHIYA",
                        "SHIYAR YAU BINDINGA",
                        "TUNGAR BAWA",
                        "KABAWA RAIRAYI",
                        "RAFIN BARE BARI",
                        "BANGOLA GANGARE",
                        "TUNGAR AMADU BOREHOLE",
                        "SABON GARI GIDAN MALAMAI",
                        "GWALIMA",
                        "SHIYAR HALIRU DISPENSARY"
                ]
            ],
            [
                'name'=>'TUNGAR ZAZZAGAWA/RUMBUKI/SARKAWA',
                'units'=>[
                        "TUNGAR ZAZZAGAWA MODEL PRIMARY SCHOOL",
                        "ILLELA",
                        "TUNGAR BATAI",
                        "ZAZZAGAWA",
                        "RAYA DAMTSE",
                        "TUNGAR MAI-SAMARI",
                        "SARKAWA",
                        "TUNGAR YARI",
                        "DAN KANAWA",
                        "RAMBUKI",
                        "HURA GIRKE G. GAMJI",
                        "TUDAWA",
                        "BABBAR GARKA.",
                        "TUNGULAWA PRIMARY SCHOOL",
                        "DUTSI",
                        "RAYA KURFAYAWA",
                        "UNGUWAR SHAYYAU PRIMARY SCHOOL",
                        "KWAKWASHEY PRIMARY SCHOOL",
                        "FAKKAI PRIMARY SCHOOL",
                        "GARKAR TILI",
                        "YAMAMA PRIMARY SCHOOL"
                ]
            ],
        ]
    ];
    }
}