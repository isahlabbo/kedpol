<?php

namespace App\services\State;

trait Bagudo{
    public function registerBagudoWardsAndTheirPollingUnits($lga,$wardCode)
    {
        foreach ($this->bagudoWards()['wards'] as $ward) {
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
public function bagudoWards()
    {
    return [
        'name'=>'Bagudo',
        'wards'=>[
            [
            'name'=>'BAGUDO/TUGA',
            'units'=>[
                    "SHIYAR ABDU BABBA",
                    "SHIYAR BELLO-DOGO (A)",
                    "SHIYAR BELLO-DOGO (B)",
                    "SHIYAR HANTSI-GIWA",
                    "SHIYAR MAKARANTA (A)",
                    "SHIYAR MAKARANTA (B)",
                    "SHIYAR SARAUNIYA",
                    "SHIYAR YADO",
                    "SHIYAR UMARU MAKERI",
                    "TUNGAR NAMATA ULU",
                    "TUNGAR BAUSHE",
                    "YUNA",
                    "MAI ZAGGA/SANABAI",
                    "SOSHIYA",
                    "TUGA",
                    "TUNGAR HIMO",
                    "TULLUWA",
                    "R/KURA",
                    "MARAKE",
                    "MAI LAFIYA",
                    "GARIN-GIDI FADA",
                    "SHIYAR ABDU BABA II PRIMARY SCHOOL",
                    "GARMANI L.G.E.A",
                    "UNGUWAR JAUGA RIMA BASIN",
                    "WURIN YAN HAKI BOREHOLE",
                    "LOW-COST/BAYAN TURAKU PRIMARY SCHOOL",
                    "GADAR BAGUDO GINDIN RINI",
                    "KUNKURU BABBA",
                    "YADO ISLAMIYA",
                    "YADO ASIBITIN MATA",
                    "SAKIJIKI BOREHOLE"
                ]
            ],
            [
                'name'=>'BAHINDI/BOKI-DOMA',
                'units'=>[
                    "BAHINDI",
                    "TUNGAN-ANGO",
                    "BOKKI-DOMA",
                    "BUDA",
                    "KALIEL I",
                    "KALIEL II",
                    "TUNGAN MARAFA",
                    "TUNGAN - ALHAJI",
                    "IDOWA",
                    "BAHINDI DISPENSARY",
                    "TUNGAR SULE",
                    "KALIEL PRIMARY SCHOOL",
                    "KADIBBO PRIMARY SCHOOL"
                ]
            ],
            [
                'name'=>'BANI/TSAMIYA',
                'units'=>[
                    "BANI I",
                    "BANI II",
                    "TUNGAN MALLAM MAISHANU",
                    "GIDAN - ZANA",
                    "TAFANNA",
                    "TUNGAN ALHAJI",
                    "SAMBE",
                    "SHANJI",
                    "KALI",
                    "TAKALAFIYA",
                    "TUNGAN - ARAWA",
                    "KANGIWA",
                    "TUNGAN GWANI",
                    "TSAMIYA",
                    "RUGGA TSAMIYA",
                    "MAHUTA",
                    "TUNGAN SAMAILA",
                    "TUNGAN GUBE",
                    "DARUSSALAM",
                    "BANI PRIMARY SCHL",
                    "TUNGAR YARIMA",
                    "KITAKU TSAMIYA",
                    "GDSS TSAMIYA"
                ]
            ],
            [
                'name'=>'ILLO/SABON GARI',
                'units'=>[
                        "DANAI ILLO",
                        "FADA ILLO",
                        "FEZU ILLO",
                        "KAWO-KIRAI",
                        "WANGARA ILLO",
                        "SABON GARI",
                        "YANTALA",
                        "KWALANGE",
                        "PHC FERU",
                     	"BULALANGU PRIMARY SCHL.",
                     	"TUNGAR LAYYO" 
                ]
            ],
            [
                'name'=>'KAOJE/GWAMBA',
                'units'=>[
                    "SHIYAR NOMA (A)",
                    "SHIYAR NOMA (B)",
                    "BAKUBE/BAITINGA (A)",
                    "BAKUBE/BAITINGA (B)",
                    "NUFARE",
                    "KWA",
                    "TUNGAN - GOGE",
                    "TUNGAN HASSAN",
                    "YAMUSA",
                    "KARALLAJE",
                    "ZUGU - JANNA",
                    "DARANNA",
                    "BAKIN - RUWA",
                    "RUGGA/BASSA",
                    "MAJE",
                    "KAUDU",
                    "SIRE-HERE",
                    "ORDA",
                    "T/WADA/YAMUSA",
                    "BUYA",
                    "T/KAWO",
                    "GENDANE",
                    "ZUGU",
                    "GWAMBA I",
                    "GWAMBA II",
                    "RAHAYA",
                    "BUSURA",
                    "SABONGARI GABAS",
                    "BUHARI MODEL",
                    "T/SHIYAR WASAR KARA",
                    "SARKIN BARGU",
                    "GOVT LODGE KAOJE",
                    "KARALLAJE MARKET",
                    "GESAYE PRIMARY SCHOOL",
                    "TUNGAR MU'AZU",
                    "MADINA",
                    "BUYA NOMADIC",
                    "BEGA PRIMARY SCHOOL"
                ]
            ],
            [
                'name'=>'KENDE/KURGU',
                'units'=>[
                    "SHIYAR MAKARANTA",
                    "SHIYAR GANDU (A)",
                    "SHIYAR GANDU (B)",
                    "TUNGAR AKODA",
                    "TILDEJI",
                    "SHIYAR MARAFA",
                    "TUNGA KIBIYA",
                    "RUWAN - DUTSI",
                    "SABON GARIN KENDE",
                    "TUNGAL BATA",
                    "TUNGAL ILLO",
                    "LANI BIRNI",
                    "RINAYE",
                    "KUMBOBO",
                    "TUNGAR ALU",
                    "YAKAMATA",
                    "KURGU",
                    "RINIYEL",
                    "TUNGAR YARI"
                ]
            ],
            [
                'name'=>'LAFAGU/GANTE',
                'units'=>[
                        "LAFAGU BIRNI I",
                        "LAFAGU BIRNI II",
                        "TUNGAN LAFAGU",
                        "TUNGAN MAJE",
                        "KAWATE",
                        "TUNGAN LAWAL",
                        "WAHANU KWARFA",
                        "GANTEN FADAMA",
                        "AREGO",
                        "GANTEN TUDU",
                        "JIPPARE",
                        "TAKALAFIYA",
                        "GUWARSU",
                        "G.D.S.S LAFAGU",
                        "GANTE PHC"
                ]
            ],
            [
                'name'=>'LOLO/GIRIS',
                'units'=>[
                        "LOLO SHIYAR FADA",
                        "TUNGAR MAIGODA",
                        "KYANGAI KURAI",
                        "KYANGAI KURAI",
                        "NASSARAWA",
                        "TUNGAR CHAMA",
                        "TUNGAR KUNJI",
                        "NAFA",
                        "TUNGAR KALGO",
                        "KASATI",
                        "TUNGAR SARKIN BIRKI",
                        "TONDI",
                        "SARHU",
                        "TUNGAR BAGE",
                        "TUNGAN YAMMA",
                        "GIRIS I",
                        "GIRIS II",
                        "TUNGAN GIRIS",
                        "GATAWANI",
                        "GESHARO",
                        "TUNGAN BARJE",
                        "KURU - KURU",
                        "ILLELA",
                        "LONZON PRIMARY",
                        "SARKIN ZABARMA",
                        "NASSARAWA II LOLO",
                        "KASATI SABONGIDA",
                        "GIRIS MASHAYA"
                ]
            ],
            [
                'name'=>'MATSINKAI/GEZA',
                'units'=>[
                        "MATSINKAI",
                        "FARDA",
                        "BARGAWA",
                        "ZUGUN - BAGUDU",
                        "ILLELA",
                        "TUNGAN JIBBO",
                        "BAHINDI",
                        "GEZA",
                        "ADAWA PRIMARY SCHOOL"
                ]
            ],
            [
                'name'=>'SHARABI/KWANGUWAI',
                'units'=>[
                        "SHARABI I",
                        "SHARABI II",
                        "S/GARIN ZAGGA",
                        "FANFARAU",
                        "TUNGAN SHANGA",
                        "KWANGUWAI",
                        "GARANDA",
                        "TUNGAN MAMMAN",
                        "TUNGAN GERO",
                        "MAITANBARI I",
                        "MAITANBARI II"
                ]
            ],
            [
                'name'=>'ZAGGA/KWASARA',
                'units'=>[
                        "ALIYU B. HAUWA",
                        "SHIYAR NOMA ZAGGA",
                        "AUTA HARIGA MAKAU",
                        "BUNMERI/FILIYA",
                        "S/DANDIRE",
                        "SABON-BIRNIN HAUSAWA",
                        "AUTA HARIGA DALLA",
                        "TUNGAR - DAKA",
                        "MAISOKOTO",
                        "MOLOKWAI",
                        "T/KAKA/JIBO",
                        "T/BAJI",
                        "T/GUMMAI/NAGUDALE",
                        "SHIYAR FULANI KWASARA",
                        "SHIYAR UBANDAWAKI KWASARA",
                        "T/WANZAM",
                        "T/MAITANDAI",
                        "T/SAUNA",
                        "RUGGA DIKKO",
                        "T/GUMMAI/HASSAN",
                        "T/WANZAM/TALHO",
                        "SHIYAR NOMA KWASARA",
                        "KUTURE BOREHOLE",
                        "NUFARE",
                        "GOVERNMENT DAY SEC SCH ZAGGA",
                        "GGSS ZAGGA",
                        "DANDIRE ICT",
                        "LUMEL KOBO"
                ]
            ],
            
        ]
    ];
    }
}