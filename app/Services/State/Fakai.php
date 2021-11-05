<?php

namespace App\services\State;

trait Fakai{
    public function registerFakaiWardsAndTheirPollingUnits($lga,$wardCode)
    {
        foreach ($this->fakaiWards()['wards'] as $ward) {
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
public function fakaiWards()
    {
    return [
        'name'=>'Fakai',
        'wards'=>[
            [
            'name'=>'BAJIDA',
            'units'=>[
                    "PRI SCH BAJIDA (PRIMARY SCHOOL BAJIDA)",
                    "GOVT SEC SCH BAJIDA (S MUSA RES)",
                    "TURBA GELE PRI SCH (HASSAN TUDU GELE RES)",
                    "PRI SCH G.DANTANI (ISAH MUSA DANTANI RES)",
                    "PRI SCH CHIDAWA (MAGAJI SALISU BATURE RES)",
                    "PRI SCH KUKUM AUDA (WAZIRI HAKIMI RES)",
                    "MANYA PRI SCH (DANJUMMA GALADIMA RES)",
                    "PRI SCH KUKUM MAIGORO (PRIMARY SCHOOL KUKUM MAIGORO)",
                    "PRI SCH BOKO (HASSAN HAKIMI RES)",
                    "PRI SCH RUTUWA MAGAJI (HAMISU RUTUWA RES)",
                    "PRI SCH MAIKABI (TUDUN WADA MAIKABI RES)",
                    "UNGUWAR MANKE"
                ]
            ],
            [
                'name'=>'BANGU / GARINISA',
                'units'=>[
                        "PRIMARY SCHOOL BANGU (PRI SCH. BANGU)",
                        "PRIMARY SCHOOL NOMA KAWO (HASSAN KASIM RES)",
                        "OPEN SPACE (S/KUDU MAIDANGA RES)",
                        "OPEN SPACE (DANDODO MATSERI RES)",
                        "PRIMARY SCHOOL MAIGARAYA (HUSSAINI MAIGARAYA RES)",
                        "PRIMARY SCHOOL GARIN ISAH (MAMUDA RES)",
                        "PRIMARY SCHOOL G/TUDU (MALAM GARBA RES)",
                        "OPEN SPACE (HAKIMI TUKUR RES)",
                        "OPEN SPACE (UMAR BAKO MODA RES)"
                ]
            ],
            [
                'name'=>'BIRNIN TUDU',
                'units'=>[
                        "LEA OFFICE (LEA OFFICE)",
                        "PRI SCH. MATSERI (PRI SCH. MATSERI)",
                        "PRI SCH. T YAWO (PRI SCH. T YAWO)",
                        "PRI SCH. UCHIRI (PRI SCH. UCHIRI)",
                        "PRI SCH. RIJIYAR KAZA (BANI KAZA RES)",
                        "URGUN PRI SCH (S. FAWA MAGAJI RESIDENCE)",
                        "PRI SCH. AZANGALI (PRI SCH. AZANGALI)",
                        "PRI. SCH. CHITTE (PRI. SCH. CHITTE)",
                        "OPEN SPACE (HAKIMI HASSAN DUTSE RES)",
                        "DAY SECONDARY SCHOOL MATSERI",
                        "BAKIN KASUWA TUNGAR YAWO",
                        "LONDON"
                ]
            ],
            [
                'name'=>'MAHUTA',
                'units'=>[
                    "U.B.E PRI. SCH. (U.B.E PRI. SCH. MAHUTA)",
                    "MODEL PRI. SCH. MAHUTA (MODEL PRI. SCH. MAHUTA)",
                    "OPEN SPACE (HAJIYA TANI RESIDENCE)",
                    "PRI. SCH. UNWALA (USMAN BALA)",
                    "PRI. SCH. T/GOMO (PRI. SCH. T/GOMO)",
                    "DURUMBU T/HALL MAHUTA (OPP.MOSQUE UNDER A TREE)",
                    "PRI. SCH. AHURI (ADJ. MOH'D HAKIMI RESIDENCE)",
                    "PRI. SCH. T/DORO (PRI. SCH. T/DORO)",
                    "MCH. HOSPITAL MAHUTA (MCH HOSPITAL MAHUTA)",
                    "G.G.S.S MAHUTA (G.G.S.S MAHUTA)",
                    "OPEN SPACE (ABDULLAHI S/FAWA RES)",
                    "NIZZAMIYYA PRI. SCH. LOWCOST",
                    "UNGUWAR MARINA",
                    "BARDANDO PRI. SCH.",
                    "TOWN HALL G/MAN JARMA",
                    "TUNGAR TANKI ISLAMIYYA SCHOOL",
                    "TUNGA ASKE"
                ]
            ],
            [
                'name'=>'GULBIN KUKA/ MAIJARHULA',
                'units'=>[
                    "PRI SCH G KUKA (PRI SCH G/KUKA)",
                    "PRI SCH KAWO (BALARABE KAWO RES)",
                    "PRI SCH BARBADA (GARBA AHMAD BARBADA RES)",
                    "TOWN DISP. AUDU IRI (HASHIMU RES)",
                    "PRI SCH MAIJARHULLA (IDRIS MAIJARHULLA RES)",
                    "PRI SCH S. GARI (HARUNA MONDE S. GARI RES)",
                    "PRI SCH. BULE (ABUBAKAR BULE RES)",
                    "OPEN SPACE (HAKIMI HASSAN RES)"
                ]
            ],
            [
                'name'=>'INGA(BULU) MAIKENDE',
                'units'=>[
                        "PRI SCH MAIKENDE (PRI SCH. MAIKENDE)",
                        "PRI SCH BA'ARE (PRI SCH. BA'ARE)",
                        "KAMTU PRI SCH (OPP. MOH'D JARI KAMTU RES)",
                        "OPEN SPACE (HAKIMIN GEJI RES)",
                        "OPEN SPACE (HAKIMIN GARBA GADO RES)",
                        "PRI SCH (HAKIMI LABBO ACHUKU RES)",
                        "PRI SCH (ABUBAKAR BULU RES)",
                        "CHAZGU PRI SCH (HASSAN DAMA RES)",
                        "KIRI PRI SCH (HASSAN MOH'D KIRI RES)",
                        "GARIN AWAL PRI SCH (MAMMAN HAKIMI RES)"
                ]
            ],
            [
                'name'=>'KANGI',
                'units'=>[
                    "PRI SCH KANGI (S/DADA SANI RES)",
                    "PRI SCH JAGALA (AUDU JEGADA RES )",
                    "DISPENSARY GOBIRAJE (ABU AWAL RES)",
                    "PRI SCH ASARARA (ABDUL ASARARA RES)",
                    "OPEN SPACE (H/DAMANA DAJI RES)",
                    "OPEN SPACE (G/M. SALEH RES)",
                    "OPEN SPACE (G/LIMAN RES)",
                    "OPEN SPACE (S/BAURE RES)"
                ]
            ],
            [
                'name'=>'FAKAI /ZUSSUN',
                'units'=>[
                    "LEA PRI SCH (LEA PRI SCH)",
                    "PRI SCH JINGA (M. HAKIMI JINGA RES)",
                    "PRI SCH T/DAJI (H. SALISU ADAMU RES)",
                    "PRI SCH GBALA (ISAH BALA RES)",
                    "LEA PRI SCH KUKA (LEA PRI SCH KUKA)",
                    "JSS KUKA (LEA PRI SCH KUKA)",
                    "PRI SCH NAMATA (K.GALADIMA RES)",
                    "PRI SCH T. ZAMA (S.D RES)",
                    "PRI SCH MAIDAMISA (S.DAJI RES)",
                    "OPEN SPACE (BASO RES)",
                    "PRI SCH MORI KULUH (K.GURA-GURI RES)",
                    "OPEN SPACE (M.I BADARIYA RES)",
                    "ISLAMIYYA FAKAI KANGO"
                ]
            ],
            [
                'name'=>'MARAFA',
                'units'=>[
                    "LEA PRI SCH (UBANKASA RES)",
                    "J.S.S MARAFA (WAZIRI RES)",
                    "LEA PRI SCH GUNABI (M. GUNABI RES)",
                    "LEA PRI SCH MAIDANGWAMI (U. ADAMU RES)",
                    "LEA PRI SCH RUMFA (S/UMARU RES)",
                    "LEA PRI SCH AMIRU (ADAMU AMIRU RES)",
                    "DISPENSARY KIRGI (HAKIMI ALIYU RES)",
                    "LEA PRI SCH (ALH ATTAHIRU RES)",
                    "OPEN SPACE (HAKIMI HASHIMU RES)",
                    "OPEN SPACE (HAKIMI SIFAWA RES)"
                ]
            ],
            [
                'name'=>'PENIN AMANA / PENIN GABA',
                'units'=>[
                    "YOKO",
                    "TUNGAR ANNAI",
                    "UBIDU",
                    "UKWORI",
                    "FARIN RUWA",
                    "JIKA FADA",
                    "SHANTALI",
                    "SOSE",
                    "GARKUWA",	
                    "KIGOGO DISPENSARY"
                ]
            ],
              
        ]
    ];
    }
}