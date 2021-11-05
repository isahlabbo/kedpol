<?php

namespace App\services\State;

trait Ngaski{
    public function registerNgaskiWardsAndTheirPollingUnits($lga,$wardCode)
    {
        foreach ($this->ngaskiWards()['wards'] as $ward) {
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
public function ngaskiWards()
    {
    return [
        'name'=>'Ngaski',
        'wards'=>[
            [
            'name'=>'BIRNIN YAURI',
            'units'=>[
                "OPEN SPACE NEAR BOREHOLE BAMBIRI (BAMBIRI)",
                "MODEL PRI. SCH .( BIRNI YAURI A)",
                "AREA COURT PREMISES ( BIRNIN YAURI B)",
                "BIRNIN YAURI 'C' / F / JIRGI",
                "KIMO",
                "KARAGASHI",
                "DISPENSARY (KAMFANIN WAYA)",
                "KWANANO PRIMARY SCH. (KWANANO)",
                "LAKA PRIMARY SCH. (LAKA)",
                "TUNGAR GAZAU",
                "SHARIFAI PRIMARY SCH. (UNG. SHARIFAI)",
                "BIRNIN YAURI MARKET",
                "TUDUN BARIKI",
                "DANKITA PRI. SCH",
                "PHC KIMO",
                "NIZAMIYYA PRI SCHKAMFANIN WAYA",
                "OVERHEAD TANK (OPEN SPACE) BESIDE GIDAN MAL. YAKUBU SHARIFAI"
                ]
            ],
            [
                'name'=>'GAFARA MACHUPA',
                'units'=>[
                    "BAKIN RUWA PRIMARY SCH. (BAKIN RUWA)",
                    "WAWU DANTAMUNGADI PRI. SCH. (WAWU D/MUNGADI)",
                    "GAFARA PRI. SCH. (GAFARA 'A')",
                    "OPEN SPACE NEAR DURUMI (GAFARA 'B')",
                    "OPEN SPACE NEAR GIDAN KWANO (GIDAN KWANO)",
                    "OPEN SPACE NEAR TSOHON RIJIYA (KYANDAWA)",
                    "DISPENSARY, KYANDAWA (WAWUN JAJI)",
                    "LOPA PRI. SCH. (LOPA)",
                    "MASAMALE PRI. SCH. (MASAMALE)",
                    "NTADE PRI. SCH. (NTADE)",
                    "RAISHE PRI. SCH. (RAISHE)",
                    "DISPENSARY WAWUDANTAMUNGADI",
                    "GAFARA DISPENSARY",
                    "GIDAN KWANO PRI. SCH.",
                    "OUTSIDE DISPENSARY GIDAN KWANO (OPEN SPACE)"
                ]
            ],
            [
                'name'=>'GARIN BAKA/ MAKARIN',
                'units'=>[
                    "MAKIRIN PRI. SCH. (MAKIRIN A)",
                    "GWARZO PRI. SCH. (GWARZO)",
                    "GARIN BAKA PRI. SCH. (GARIN BAKA)",
                    "DISPENSARY ( MAKIRIN B)",
                    "RIKOFE PRI. SCH. (RIKOFE)",
                    "OPEN SPACE NEAR FILIN MANGORO (UNG. BOKA)",
                    "FOOTBALL FIELD, OPP. DC'S RESIDENCE MAKIRIN (OPEN SPACE)",
                    "GARIN BAKA OLDDISPENSARY",
                    "SABUWAR HANYA PRI. SCH. MAKARIN"
                ]
            ],
            [
                'name'=>'KWAKWARAN',
                'units'=>[
                    "CHUPAMINI 'A'",
                    "BAKARI",
                    "GUNGUNTAGWAYE",
                    "LANGWAN",
                    "OPEN SPACE FILIN MANGORO (RAI SHE)",
                    "TUNGAR MAIKWALANSHE PRI. SCH. (T/MALANKWASHE)",
                    "CHUPAMINI SHARI'ACOURT",
                    "P.H.C. CHUPAMINI",
                    "CHUPAMINI MARKET",
                    "DISPENSARY GUNGUNTAGWAYE"
                ]
            ],
            [
                'name'=>'LIBATA/KWANGIA',
                'units'=>[
                    "KABIRBA",
                    "KOCHORO",
                    "KWANGA PRIMARY SCHOOL OPEN SPACE",
                    "LIBATA PRIMARY SCHOOL 'A' OPEN SPACE",
                    "LIBATA PRI. SCH. 'B' OPEN SPACE",
                    "NIZZAMIYYA PRI. SCH. (UNG. GALADIMA 'A)'",
                    "OPEN SPACE NEAR TSOHUWAR RIJIYA (UNG. GALADIMA 'B')",
                    "YALAWA",
                    "TUNGAR IDI",
                    "LOKON UBA",
                    "UNG. SON ROM, OPP. ALH. ILLIYASU DARE'S RESIDENCE KWANGA (OPEN SPACE)",
                    "FOOTBALL FIELD, OPP. YUSUF MOHD UMAR (NOA) RESIDENCE LIBATA (OPEN SPACE)",
                    "UNG. MARIGAYI HUSSAINI DOCTOR, NEAR BOREHOLE LIBATA (OPEN SPACE)",
                    "UNG. TSOHON SARKINEAR BOREHOLE LIBATA (OPEN SPACE)"
                ]
            ],
            [
                'name'=>'KANBUWA/DAN MARAYA',
                'units'=>[
                    "DAMMARAYA",
                    "OPEN SPACE NEAR BOREHOLE GIDAN KAZUWO (GIDAN KAZUWA)",
                    "KUMBUWA",
                    "KWALIYO",
                    "SAKABA",
                    "SHAGIYA",
                    "TUNGAR BATURE",
                    "TUNGAR KOLO",
                    "TUNGAR UWAR YARA",
                    "KAMBUWA P.H.C",
                    "DISPENSARY BESIDE PRI. SCH. KWALIYO",
                    "KWAKWARAN BESIDE PRI. SCH. SHAGIYA"
                ]
            ],
            [
                'name'=>'MAKAWA ULEIRA',
                'units'=>[
                    "GUGUWA PRI. SCH. (GUGUWA)",
                    "OPEN SPACE NEAR KUKA (GUNGUN MASU)",
                    "GUNGUWA PRI. SCH. (UNG. GUNGUWA)",
                    "NEW PRI. SCH.1 (UNG. HAKIMI)",
                    "NEW PRI. SCH. II (MAKARANTA)",
                    "OPEN SPACE NEAR TSAMIYA (UNG. MAKWASHI)",
                    "OPEN SPACE NEAR MANGORORI (UNG. ALH. MONDE)"
                ]
            ],
            [
                'name'=>'NGASKI',
                'units'=>[
                    "DISPENSARY (GIDAN DAYA)",
                    "KINKYA PRI. SCH. (KINKYA)",
                    "MAKURDI PRI. SCH. (MAKURDI)",
                    "OPEN SPACE KANWURI (NGASKI GARKAR HAKIMI)",
                    "NGASKI MAKARANTA",
                    "OPEN SPACE NEAR MOTOR PACK (NGASKI SABON GARI)",
                    "NGASKI SABON GARI",
                    "ATLACHERE PRI SCH. GIDAN DAYA",
                    "P.H.C MAKURDIKETARE",
                    "NGASKI II MODEL PRI SCHOOL NGASKI",
                    "TSOHUWAR ASIBITI, BESIDE GOVT DAY SEC. SCH. NGASKINGASKI",
                    "SABUWAR KASUWA NGASKI"
                ]
            ],
            [
                'name'=>'UTONO / HOGE',
                'units'=>[
                    "OPEN SPACE SABUWAR HANYA (HOGE)",
                    "DISPENSARY, GIDAN NDA (GIDAN NDA)",
                    "TUNGAR LEDA PRI. SCH. (TUNGAR LEDA)",
                    "OPEN SPACE NEAR KAIWA (GIDAN SALAI)",
                    "UTUNO MAKARANTA",
                    "OPEN SPACE NEAR FILIN WATA (GIDAN AGUYA WATA)",
                    "OPP. MASALLACIN JUMA'A HOGE",
                    "KASUWAR UTONO"
                ]
            ],
            [
                'name'=>'WARA',
                'units'=>[
                    "WARRA II PRI. SCH. (UNG. SARKIN ALARU)",
                    "NIZZAMIYYA PRI. SCH. (UNG. SARKIN MAKADA)",
                    "UNG. MALAM HASSAN 'A' /'B'",
                    "OPEN SPACE IN MOTOR PARK (UNG. ALKALI HARUNA)",
                    "TUNGAR MAI RUWA",
                    "WARA MODEL PRIMARY SCHOOL 'A'",
                    "WARA MODEL PRIMARY SCHOOL 'B'",
                    "OPEN SPACE NEAR BOREHOLE (UNG. SARKIN WARA)",
                    "UNG. SARKAWA",
                    "YADI MODEL PRIMARY SCHOOL",
                    "GOVT. GIRLS DAY SECONDARY SCHOOL WARRA",
                    "GOVT. SEC SCH WARRA",
                    "WARRA TOWN HALL",
                    "KABATA STADIUM WARRA OPEN SPACE",
                    "NYSC SECRETARIAT WARRA",
                    "OPP. NURTW OFFICE WARRA OPEN SPACE",
                    "MAGISTRATE COURTWARRA",
                    "FOOTBALL FIELD (OPEN SPACE) BEHIND LGEA OFFICE WARRA",
                    "VOLLEYBALL PITCH (OPEN SPACE) BEHIND HEADMASTERS OFFICE LGEA WARRA",
                    "BOREHOLE (OPEN SPACE) ADJACENT TO ADO MAI -ENGINE NIKA OPP. MODEL PRI. SCH. WARRA",
                    "UNG NUHU MAYE NEAR BOREHOLE (OPEN SPACE) WARRA",
                    "KWAKWARAN OPP.DANLAMI ZANAIDU HOUSE (OPEN SPACE)",
                    "TSOHON GIDAN RUWABEHIND SARKIN YAKI D/GONGOLA HOUSE WARRA",
                    "M.C.H YADI WARRA"
                ]
            ],
            
        ]
    ];
    }
}