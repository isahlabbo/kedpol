<?php

namespace App\services\State;

trait BirninKebbi{
    public function registerBirninKebbiWardsAndTheirPollingUnits($lga,$wardCode)
    {
        foreach ($this->birninKebbiWards()['wards'] as $ward) {
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
public function birninKebbiWards()
    {
    return [
        'name'=>'Birnin Kebbi',
        'wards'=>[
            [
            'name'=>'NASSARAWA I',
            'units'=>[
                    "SHIYAR FADA COUNCIL CHAMBERS",
                    "ABDULLAHI FODIO ISLAMIC CENTRE(SHIYAR FADA MIYATTI ALLAH)",
                    "GOVERNMENT DAY SECONDARY SCHOOL JUNJU (SHIYAR FADA G/UMARU JUNJU)",
                    "WAZIRI UMARU M.P.S (SHIYAR ZABARMAWA G/MAMMAN NASS.)",
                    "WAZIRI UMARU NIZZAMIYYA M.P.S (SHIYAR ZABARMAWA G/NATSAFE)",
                    "WAZIRI UMARU NIZZAMIYYA M.P.S (SHIYAR ZABARAMAWA G/SARKI ZABARMAWA)",
                    "JODA INTERNATIONAL SCHOOL G.R.A(GRA G/DR. GULMA)",
                    "JODA PRIMARY SCHOOL(GRA G/KINDI ZAURO)",
                    "BAYAN TASHA G/UMARU SABON GARI",
                    "ABDULLAHI FODIO ISLAMIC CENTRE(KASUWA G/ SARKIN FAWA)",
                    "BELLO WAY G/ABDU HAFIZI",
                    "MINISTRY FOR LOCAL GOVERNMENT (BELLO WAY G/WAZIRI)",
                    "WAZIRI UMARU NIZZAMIYYA PRIMARY SCHOOL (BELLO WAY G/HARUNA MAIGISHIRI)",
                    "GOVERNMENT DAY SECONDARY SCHOOL GWADANGAJI QUARTERS (MASALLACIN GWADANGAJI)",
                    "ZANNAN GWANDU M.P.S GESSE PHASE I (PERM SITE GESSE QUARTERS)",
                    "CONVOCATION GROUND WAZIRI UMARU POLYTECHNIC PERM SITE(GARKAR SUNDAY A. Z.)",
                    "GWANDU EMIRATE JUNIOR SECODARY SCHOOL BULASA (BULASA GARKAR DIKKO)",
                    "EMIRATE GUEST HOUSE FILIN MARIYA (NURSING QUARTERS GARKAR GARBA KOKO)",
                    "CYBER CAFE COLLEGE OF NURSING SCIENCES BIRNIN KEBBI",
                    "OFFICE OF THE SECRETARY COUNCIL OF CHIEFS",
                    "BAYAN GIDAN SARKI G/LABA",
                    "ABDULLAHI FODIO ISLAMIC CENTER AUDITORIUM HALL",
                    "ISLAMIC CENTER LIBRARY",
                    "MAGAJIN RAFI BELLO MODEL PRIMARY SCHOOL JUNJU",
                    "GOVERNMENT DAY SECONDARY SCHOOL JUNJU",
                    "WAZIRI UMARU NIZZAMIYA (A) NASSARAWA",
                    "BOREHOLE BAYAN GIDAN MAGAJIN RAFI",
                    "FILIN NASSARAWA, NASSARAWA",
                    "WAZIRI UMARU MPS NASSARAWA",
                    "NIZZAMIYA OVER HEAD TANK NASSARAWA",
                    "OVER HEAD TANK GRA BAUCHI ROAD",
                    "RIMA QUARTERS G.R.A",
                    "NIPOST TERRITORIAL HEAD QUARTERS GESSE PHASE 1",
                    "JODA INTERNATIONAL SCHOOL BAUCHI ROAD GRA",
                    "OVERHEAD TANK KWANAR MALAM MAIDAHINI BAYAN TASHA",
                    "BAYAN JAMA'A PURE WATER G/SHEHU UP BAYAN TASHA",
                    "BARR BELLO MOHAMMED RILISCO MPS BAYAN TASHA",
                    "DALBEJIYAR KWANAR MASALLACIN MAI GISHIRI BAYAN FILING SUKUWA",
                    "TITIN YAN TARIKITA YAR KAIWA WURIN BA'ARE BAYAN KARA",
                    "OPPOSITE MASALLACIN TSOHUWA HANYAR UNGUWAR NARBA BAYAN KARA",
                    "NEW PRIME ACADEMY GOTAR ALIERO BAYAN KARA",
                    "TSOHUWAR KASUWA WATER TANK",
                    "ALHUSNAH COMPREHENSIVE SCIENCE ACADEMY TSOHUWAR KASUWA",
                    "CHINDO TEXTILE AHMADU BELLO WAY",
                    "ALBARKA GUEST INN BAYAN GIDAN ALHAJI. INWA",
                    "N.O.A OFFICE",
                    "MINISTRY FOR LOCAL GOVERNMENT AND CHIEFTAINCY AFFAIRS",
                    "ADMINISTRATIVE BLOCK MIN FOR LOCAL GOVERNMENT",
                    "MTN MAST WAZIRI UMARU MPS",
                    "WAZIRI UMARU NIZZAMIYA WATER TANK",
                    "SHIYAR NASSARAWA G/SHANTALI",
                    "ADMINISTRATIVE BLOCK NIZZAMIYA NASSARAWA",
                    "GOVERNMENT DAY SECONDARY SCHOOL GWADANGAJI QUARTERS",
                    "EASTERN BYPASS MPS BAYAN OANDO",
                    "MOBIL KWANAR YAN TIFA",
                    "GESSE BAYERO MPS RUGGAR FULANI",
                    "FEDERAL STAFF SCHOOL GESSE PHASE 2.",
                    "ZANNAN GWANDU MPS GESSE PHASE 1",
                    "REACH FOR THE STARS ACADEMY GESSE PHASE 1",
                    "RAHAMA SUYA SPOT GESSE PHASE 1",
                    "WAZIRI UMARU CONVOCATION GROUND ENGINEERING",
                    "GEDA ACADEMY BULASA",
                    "SHIYAR FADA G/NA GAMBO",
                    "GIDAN BAKI FILIN MARIYA"
                ]
            ],
            [
                'name'=>'NASSARAWA II',
                'units'=>[
                        "HAJIYA KUBURA M.P.S (MAKERAR GANDU PRISON QUARTERS)",
                        "SHIYAR SARAKUNA GARKAR MAIKURATA",
                        "ATIKU BAGUDU M.P.S (MAKERAR GANDU G/MAAJI MANU)",
                        "FOMWAN MODEL PRIMARY SCHOOL (MAKERAR GANDU GIDAN DAN IRO)",
                        "MAKERAR GANDU W.T.C.",
                        "MAKERAR GANDU G/MAI ALELU",
                        "NAGARI SCIENCE COLLEGE MAKERAR GANDU",
                        "MAKERAR GANDU BUHARI MODEL PRI.SCH.",
                        "GWANDU EMIRATE MODEL PRIMARY SCHOOL (SHIYAR SARAKUNA G/MAJIDADI)",
                        "SHIYAR SARAKUNA G/WALI",
                        "UNG. DAMBO PRIMARY SCHOOL UNG. DAMBO",
                        "KUDANCIN NASSARAWA G/NOMA MAIHATSI",
                        "KUDANCIN NASSARAWA H.A.T.C. SECRETARIAT",
                        "STAFF QUARTERS H.A.T.C (KUDANCIN NASS G/BALA SANI KANGIWA)",
                        "NASSARAWA TSAKIYA GARKAR ISA KWAIFA",
                        "SADDAU PLAZA OPEN SPACE (RAFIN ATIKU G/HALIRU ABUBAKAR)",
                        "GOVERNMENT DAY SECONDARY SCHOOL MAKERAR GANDU(RAFIN ATIKU G/MARIGAYI SHEHU AUDITOR)",
                        "OLD PUBLIC COMPLAINT COMMISSION RAFIN ATIKU NEAR YAHAYA MAKERA (RAFIN ATIKU G/SARDAUNAN NASS)",
                        "ILLELAR YARI MPS",
                        "HAJIYA KUBURA JUNIOR SECONDARY SCHOOL",
                        "GANDUN KAYA BEHIND NAGARI SCIENCE COLLEGE",
                        "KWANAR DAWAKI SHIYAR SARAKUNA",
                        "KANTIN DAN ABASHE SHIYAR SARAKUNA",
                        "ATIKU BAGUDU JUNIOR SECONDARY SCHOOL",
                        "ATIKU BAGUDU MODEL SCIENCE PRIMARY SCHOOL MAKERAR GANDU",
                        "FOMWAN MAKERAR GANDU",
                        "STAFF QUARTERS W.T.C BIRNIN KEBBI",
                        "NAMS WATER SOLUTIONS UNITY GIRLS COLLEGE",
                        "R.E.B WORK SHOP MAKERAR GANDU",
                        "FEDERAL HIGH COURT ABDULLAHI FODIO ROAD",
                        "TOWN HALL SKILLS AQUISITION CENTRE BEHIND CST",
                        "WAZIRI UMARU FEDERAL POLYTECHNIC CST BIRNIN KEBBI",
                        "STAFF QUARTERS NAGARI COLLEGE",
                        "AUDITORIUM HALL NAGARI COLLEGE",
                        "FRECH LEARNING CENTRE MAKERAR GANDU",
                        "KAURAN GWANDU MPS",
                        "ADAMU GULMA MPS",
                        "GWANDU EMIRATE MPS",
                        "UNGUWAR DAMBO MODEL PRIMARY SCHOOL",
                        "G/HASSAN USMAN SHIYAR SARAKUN",
                        "ARMY DAY BOYS SECONDARY SCHOOL",
                        "KEBBI STATE FIRE SERVICE H.A.TC",
                        "ENVIRONMENTAL PROTECTION AGENCY H.A. T.C",
                        "MINISTRY OF WORKS H.A.T.C",
                        "UMARU ILALU MPS",
                        "MINISTRY FOR HIGHER EDUCATION H.A.T.C BIRNIN KEBBI",
                        "ARMY DAY SEC. SCH. GIRLS",
                        "UMARUN BARGA NASSARAWA II",
                        "UMARU SHINKAFI MEDICAID",
                        "SADDAU PLAZA RAFIN ATIKU",
                        "SALAMATU HUSSAINI GIRL SECONDARY SCHOOL",
                        "ICT CENTRE SALAMATU HUSSAINI GIRLS SECONDRY SCHOOL BIRNIN KEBBI",
                        "GOVERNMENT DAY SECONDARY SCHOOL MAKERAR GANDU",
                        "NIMC MAKERAR GANDU",
                        "PUBLIC COMPLAINTS COMMISSION RAFIN ATIKU"
                ]
            ],
            [
                'name'=>'BIRNIN KEBBI MAFARA',
                'units'=>[
                        "MAJEMA G/ SARKIN KARMA",
                        "TAKALAU M.P.S I (MAJEMA G/H/UMARU LORI)",
                        "BAITI M.P.S TUDUN WADA (TUDUN WADA G/LIMAN SARKI)",
                        "MINISTRY OF WORKS ZONAL OFFICE TUDUN WADA (BAITI LIMANCI G/LADAN NA MUSA)",
                        "BAITI G/UBAN DOMA",
                        "TUDUN WADA M.P.S I (S/LABBO MAIJIRGI G/LABBO MAIJIRGI)",
                        "MAJEMA G/SHEHU GAGA",
                        "TUDUN WADA MODEL PRIMARY SCHOOL II (TUDUN WADA G/MAGATARKARDA)",
                        "TAKALAU M.P.S II (TAKALAU G/HAKIMI)",
                        "TUDUN WADA G/GAGO",
                        "TAKALAU M.P.S III (TAKALAU G/ BOYI MAIRAKE)",
                        "TUDUN WADA M.P.S III (TUDUN WADA G/IYAN B/KEBBI)",
                        "BEHIND PRESIDENTIAL LODGE MPS",
                        "GANGAREN AMA WATER TANK",
                        "GOVERNMENT DAY SECONDARY SCHOOL GRA NEPA",
                        "JUSTICE IBRAHIM UMAR MPS",
                        "BAITI MPS TUDUN WADA",
                        "TUDUN WADA G/AUDU KAFINTA BYE WATER TANK",
                        "MAGAJIN GARI MPS TUDUN WADA",
                        "SANUSI ZAKI HOUSE (JIMCY) TUDUN WADA MPS",
                        "MINISTRY OF WORKS AND TRANSPORT TUDUN WADA",
                        "WORK SCHOOL TUDUN WADA",
                        "MINISTRY OF LABOUR AND EMPLOYMENT TUDUN WADA",
                        "TAKALAU PRIMARY HEALTH CENTRE",
                        "DR YAHAYA SHANTALI MPS TAKALAU",
                        "SABONGIDA WATER TANK TAKALAU",
                        "MAJEMA FILIN DARE",
                        "FILIN SARKI BOREHOLE NEAR MALAM BUWAI SCHOOL",
                        "MAKERAR DAN GAIDA BAITI",
                        "RANGON KADI",
                        "OVERHEAD TANK OPPOSITE RANGON KADI TUDUN WADA",
                        "GANGAREN MAJEMA FILIN MUTTAKA DAN GADO.",
                        "HISBAH OFFICE YAR YARA"
                ]
            ],
            [
                'name'=>'BIRNIN KEBBI DANGALADIMA',
                'units'=>[
                    "MOHAMMED LAYYA M.P.S I (SHIYAR MALA G/MAIAJI SA'IDU)",
                    "MOHAMMED LAYYA NIZZAMIYYA M.P.S II(ZORAMAWA G/YARI NATA'ALA)",
                    "ZORAMAWA G/DANGALADIMA BELLO",
                    "MOHAMMED LAYYA M.P.S III(ZORAMAWA G/SHEHU ZALAKA)",
                    "ILLELAR YARI G/ARZIKA AZBIN",
                    "KOFAR DINDI G/ARZIKA NA ZAURO",
                    "SABON BIRNI G/GWAGGO GIMBA (YAR GADA)",
                    "DUTSIN IDI G/DANDARE BAGE",
                    "GAMAGIRA DISPENSARY(GAMAGIRA G/ALH. JAFARU)",
                    "YAR YARA G/SANDA BUNZA",
                    "KOFAR DINDI G/DANKALA",
                    "WATER TANK OPPOSITE GIDAN NAGODI GORIBBU",
                    "MOHAMMED LAYYA NIZZAMIYA MPS",
                    "KOFAR KOLA WATER TANK OPPOSITE GIDAN AUDUN GILU",
                    "YAR YARA TOWN MPS",
                    "ZORAMAWA BAKIN MURNA",
                    "ILLELAR YARI DISPENSARY",
                    "GANGAREN DAJI G/ ALHAJI BANDI MAI SAKAI",
                    "MALALA WATER TANK NEAR G/JABBO GWAMNA",
                    "YAR GADA, LOKON MAGAJI RIJIYAR DAN AYA",
                    "GARKAR KWACCIYA G/MALAM ALIYU TSOHO",
                    "DUTSIN IDI WATER TANK G/MALAM ALIYU DAN MALAM",
                    "LOKON AREWA G/HAKIMI HOMA",
                    "KOFAR KOLA G/MAGAJIN GARI"
                ]
            ],
            [
                'name'=>'KOLA/TARASA',
                'units'=>[
                        "TARASA M.P.S I (TARASA G/LIMAN TARASA)",
                        "TARASA M.P.S II (TARASA G/UMARU LIMAN)",
                        "TARASA M.P.S III(TARASA G/UMARU)",
                        "ILOLA G/M/TEUNIT",
                        "ILOLA TVC ILOLA GWARGWABE","ILOLA G/M/FARI",
                        "BADARIYA BYE POLICE OUT FORCE (BADARIYA FILIN MASALLACI)",
                        "BADARIYA G/UMARU SAJE","WURO MALIKI G/AMIRU","UNG. KAYI G/HAKIMI","UNG. GERO G/HAKIMI",
                        "DUKKUWO G/ HAKIMI DUKKUWO","TARASA DISPENSARY TARASA","KOLA MPS",
                        "BAYAN KATANGA G/ABUBAKAR KOLA","WATER TANK KOFAR YAMMA KOLA","G.D.SS KOLA",
                        "WURO NORU NOMADIC M.P.S BADARIYA","GREATER HIGH SCHOOL KWANAR U.S M.T.N MAST",
                        "ABUBAKAR NADANIYA M.P.S BADARIYA","G.D.S.S NADANIYA BADARIYA","PRIMARY HEALTH CENTRE",
                        "OPPOSITE MOPOL TRANSFORMER BADARIYA","KWANAR YAN TILLI","ABI SEC. SCHOOL BADARIYA",
                        "KWANAR GIDAN RUWA DIGGI BADARIYA","ROYAL LIVESTOCK TRAINING CENTRE KWANAR ALI BAGUDO",
                        "KWANAR MASALLACIN KHALIFA NAYALWA","WATER TANK KWANAR YAN JAKKAI",
                        "KWANAR MALAM NA GUJIYA BADARIYA","DISPENSARY WURO MALIKI"
                ]
            ],
            [
                'name'=>'MAKERA',
                'units'=>[
                        "TARASA M.P.S I (TARASA G/LIMAN TARASA)",
                        "TARASA M.P.S II (TARASA G/UMARU LIMAN)","TARASA M.P.S III(TARASA G/UMARU)","ILOLA G/M/TEUNIT","ILOLA TVC ILOLA GWARGWABE","ILOLA G/M/FARI","BADARIYA BYE POLICE OUT FORCE (BADARIYA FILIN MASALLACI)","BADARIYA G/UMARU SAJE","WURO MALIKI G/AMIRU","UNG. KAYI G/HAKIMI","UNG. GERO G/HAKIMI","DUKKUWO G/ HAKIMI DUKKUWO","TARASA DISPENSARY TARASA","KOLA MPS","BAYAN KATANGA G/ABUBAKAR KOLA","WATER TANK KOFAR YAMMA KOLA","G.D.SS KOLA","WURO NORU NOMADIC M.P.S BADARIYA","GREATER HIGH SCHOOL KWANAR U.S M.T.N MAST","ABUBAKAR NADANIYA M.P.S BADARIYA","G.D.S.S NADANIYA BADARIYA","PRIMARY HEALTH CENTRE","OPPOSITE MOPOL TRANSFORMER BADARIYA","KWANAR YAN TILLI","ABI SEC. SCHOOL BADARIYA","KWANAR GIDAN RUWA DIGGI BADARIYA","ROYAL LIVESTOCK TRAINING CENTRE KWANAR ALI BAGUDO","KWANAR MASALLACIN KHALIFA NAYALWA","WATER TANK KWANAR YAN JAKKAI","KWANAR MALAM NA GUJIYA BADARIYA","DISPENSARY WURO MALIKI"
                ]
            ],
            [
                'name'=>'MAURIDA/KARYO/UNG. MIJIN NANA',
                'units'=>[
                    "TARASA M.P.S I (TARASA G/LIMAN TARASA)",
                    "TARASA M.P.S II (TARASA G/UMARU LIMAN)",
                    "TARASA M.P.S III(TARASA G/UMARU)",
                    "ILOLA G/M/TEUNIT",
                    "ILOLA TVC ILOLA GWARGWABE",
                    "ILOLA G/M/FARI",
                    "BADARIYA BYE POLICE OUT FORCE (BADARIYA FILIN MASALLACI)",
                    "BADARIYA G/UMARU SAJE",
                    "WURO MALIKI G/AMIRU",
                    "UNG. KAYI G/HAKIMI",
                    "UNG. GERO G/HAKIMI",
                    "DUKKUWO G/ HAKIMI DUKKUWO",
                    "TARASA DISPENSARY TARASA",
                    "KOLA MPS",
                    "BAYAN KATANGA G/ABUBAKAR KOLA",
                    "WATER TANK KOFAR YAMMA KOLA",
                    "G.D.SS KOLA",
                    "WURO NORU NOMADIC M.P.S BADARIYA",
                    "GREATER HIGH SCHOOL KWANAR U.S M.T.N MAST",
                    "ABUBAKAR NADANIYA M.P.S BADARIYA",
                    "G.D.S.S NADANIYA BADARIYA",
                    "PRIMARY HEALTH CENTRE",
                    "OPPOSITE MOPOL TRANSFORMER BADARIYA",
                    "KWANAR YAN TILLI",
                    "ABI SEC. SCHOOL BADARIYA",
                    "KWANAR GIDAN RUWA DIGGI BADARIYA",
                    "ROYAL LIVESTOCK TRAINING CENTRE KWANAR ALI BAGUDO",
                    "KWANAR MASALLACIN KHALIFA NAYALWA",
                    "WATER TANK KWANAR YAN JAKKAI",
                    "KWANAR MALAM NA GUJIYA BADARIYA",
                    "DISPENSARY WURO MALIKI"
                ]
            ],
            [
                'name'=>'GWADANGWAJE',
                'units'=>[
                        
                ]
            ],
            [
                'name'=>'ZAURO',
                'units'=>[
                        
                ]
            ],
            [
                'name'=>'GAWASU',
                'units'=>[
                        
                ]
            ],
            [
                'name'=>'KARDI YAMMA',
                'units'=>[
                        
                ]
            ],

            [
                'name'=>'LAGGA',
                'units'=>[
                        
                ]
            ],

            [
                'name'=>'GULUMBE',
                'units'=>[
                        
                ]
            ],
            
            [
                'name'=>'AMBURSA',
                'units'=>[
                        
                ]
            ],

            [
                'name'=>'UJARIYO',
                'units'=>[
                        
                ]
            ],
        ]
    ];
    }
}