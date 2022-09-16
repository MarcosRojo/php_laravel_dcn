<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ParroquiasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('parroquias')->delete();

        \DB::table('parroquias')->insert(array (
            0 =>
            array (
                'id' => 1,
                'parroquia' => 'Alto Orinoco',
                'municipio_id' => 1
            ),
            1 =>
            array (
                'id' => 2,
                'parroquia' => 'Huachamacare Acanaña',
                'municipio_id' => 1
            ),
            2 =>
            array (
                'id' => 3,
                'parroquia' => 'Marawaka Toky Shamanaña',
                'municipio_id' => 1
            ),
            3 =>
            array (
                'id' => 4,
                'parroquia' => 'Mavaka Mavaka',
                'municipio_id' => 1
            ),
            4 =>
            array (
                'id' => 5,
                'parroquia' => 'Sierra Parima Parimabé',
                'municipio_id' => 1
            ),
            5 =>
            array (
                'id' => 6,
                'parroquia' => 'Ucata Laja Lisa',
                'municipio_id' => 2
            ),
            6 =>
            array (
                'id' => 7,
                'parroquia' => 'Yapacana Macuruco',
                'municipio_id' => 2
            ),
            7 =>
            array (
                'id' => 8,
                'parroquia' => 'Caname Guarinuma',
                'municipio_id' => 2
            ),
            8 =>
            array (
                'id' => 9,
                'parroquia' => 'Fernando Girón Tovar',
                'municipio_id' => 3
            ),
            9 =>
            array (
                'id' => 10,
                'parroquia' => 'Luis Alberto Gómez',
                'municipio_id' => 3
            ),
            10 =>
            array (
                'id' => 11,
                'parroquia' => 'Pahueña Limón de Parhueña',
                'municipio_id' => 3
            ),
            11 =>
            array (
                'id' => 12,
                'parroquia' => 'Platanillal Platanillal',
                'municipio_id' => 3
            ),
            12 =>
            array (
                'id' => 13,
                'parroquia' => 'Samariapo',
                'municipio_id' => 4
            ),
            13 =>
            array (
                'id' => 14,
                'parroquia' => 'Sipapo',
                'municipio_id' => 4
            ),
            14 =>
            array (
                'id' => 15,
                'parroquia' => 'Munduapo',
                'municipio_id' => 4
            ),
            15 =>
            array (
                'id' => 16,
                'parroquia' => 'Guayapo',
                'municipio_id' => 4
            ),
            16 =>
            array (
                'id' => 17,
                'parroquia' => 'Alto Ventuari',
                'municipio_id' => 5
            ),
            17 =>
            array (
                'id' => 18,
                'parroquia' => 'Medio Ventuari',
                'municipio_id' => 5
            ),
            18 =>
            array (
                'id' => 19,
                'parroquia' => 'Bajo Ventuari',
                'municipio_id' => 5
            ),
            19 =>
            array (
                'id' => 20,
                'parroquia' => 'Victorino',
                'municipio_id' => 6
            ),
            20 =>
            array (
                'id' => 21,
                'parroquia' => 'Comunidad',
                'municipio_id' => 6
            ),
            21 =>
            array (
                'id' => 22,
                'parroquia' => 'Casiquiare',
                'municipio_id' => 7
            ),
            22 =>
            array (
                'id' => 23,
                'parroquia' => 'Cocuy',
                'municipio_id' => 7
            ),
            23 =>
            array (
                'id' => 24,
                'parroquia' => 'San Carlos de Río Negro',
                'municipio_id' => 7
            ),
            24 =>
            array (
                'id' => 25,
                'parroquia' => 'Solano',
                'municipio_id' => 7
            ),
            25 =>
            array (
                'id' => 26,
                'parroquia' => 'Anaco',
                'municipio_id' => 8
            ),
            26 =>
            array (
                'id' => 27,
                'parroquia' => 'San Joaquín',
                'municipio_id' => 8
            ),
            27 =>
            array (
                'id' => 28,
                'parroquia' => 'Cachipo',
                'municipio_id' => 9
            ),
            28 =>
            array (
                'id' => 29,
                'parroquia' => 'Aragua de Barcelona',
                'municipio_id' => 9
            ),
            29 =>
            array (
                'id' => 30,
                'parroquia' => 'Lechería',
                'municipio_id' => 11
            ),
            30 =>
            array (
                'id' => 31,
                'parroquia' => 'El Morro',
                'municipio_id' => 11
            ),
            31 =>
            array (
                'id' => 32,
                'parroquia' => 'Puerto Píritu',
                'municipio_id' => 12
            ),
            32 =>
            array (
                'id' => 33,
                'parroquia' => 'San Miguel',
                'municipio_id' => 12
            ),
            33 =>
            array (
                'id' => 34,
                'parroquia' => 'Sucre',
                'municipio_id' => 12
            ),
            34 =>
            array (
                'id' => 35,
                'parroquia' => 'Valle de Guanape',
                'municipio_id' => 13
            ),
            35 =>
            array (
                'id' => 36,
                'parroquia' => 'Santa Bárbara',
                'municipio_id' => 13
            ),
            36 =>
            array (
                'id' => 37,
                'parroquia' => 'El Chaparro',
                'municipio_id' => 14
            ),
            37 =>
            array (
                'id' => 38,
                'parroquia' => 'Tomás Alfaro',
                'municipio_id' => 14
            ),
            38 =>
            array (
                'id' => 39,
                'parroquia' => 'Calatrava',
                'municipio_id' => 14
            ),
            39 =>
            array (
                'id' => 40,
                'parroquia' => 'Guanta',
                'municipio_id' => 15
            ),
            40 =>
            array (
                'id' => 41,
                'parroquia' => 'Chorrerón',
                'municipio_id' => 15
            ),
            41 =>
            array (
                'id' => 42,
                'parroquia' => 'Mamo',
                'municipio_id' => 16
            ),
            42 =>
            array (
                'id' => 43,
                'parroquia' => 'Soledad',
                'municipio_id' => 16
            ),
            43 =>
            array (
                'id' => 44,
                'parroquia' => 'Mapire',
                'municipio_id' => 17
            ),
            44 =>
            array (
                'id' => 45,
                'parroquia' => 'Piar',
                'municipio_id' => 17
            ),
            45 =>
            array (
                'id' => 46,
                'parroquia' => 'Santa Clara',
                'municipio_id' => 17
            ),
            46 =>
            array (
                'id' => 47,
                'parroquia' => 'San Diego de Cabrutica',
                'municipio_id' => 17
            ),
            47 =>
            array (
                'id' => 48,
                'parroquia' => 'Uverito',
                'municipio_id' => 17
            ),
            48 =>
            array (
                'id' => 49,
                'parroquia' => 'Zuata',
                'municipio_id' => 17
            ),
            49 =>
            array (
                'id' => 50,
                'parroquia' => 'Puerto La Cruz',
                'municipio_id' => 18
            ),
            50 =>
            array (
                'id' => 51,
                'parroquia' => 'Pozuelos',
                'municipio_id' => 18
            ),
            51 =>
            array (
                'id' => 52,
                'parroquia' => 'Onoto',
                'municipio_id' => 19
            ),
            52 =>
            array (
                'id' => 53,
                'parroquia' => 'San Pablo',
                'municipio_id' => 19
            ),
            53 =>
            array (
                'id' => 54,
                'parroquia' => 'San Mateo',
                'municipio_id' => 20
            ),
            54 =>
            array (
                'id' => 55,
                'parroquia' => 'El Carito',
                'municipio_id' => 20
            ),
            55 =>
            array (
                'id' => 56,
                'parroquia' => 'Santa Inés',
                'municipio_id' => 20
            ),
            56 =>
            array (
                'id' => 57,
                'parroquia' => 'La Romereña',
                'municipio_id' => 20
            ),
            57 =>
            array (
                'id' => 58,
                'parroquia' => 'Atapirire',
                'municipio_id' => 21
            ),
            58 =>
            array (
                'id' => 59,
                'parroquia' => 'Boca del Pao',
                'municipio_id' => 21
            ),
            59 =>
            array (
                'id' => 60,
                'parroquia' => 'El Pao',
                'municipio_id' => 21
            ),
            60 =>
            array (
                'id' => 61,
                'parroquia' => 'Pariaguán',
                'municipio_id' => 21
            ),
            61 =>
            array (
                'id' => 62,
                'parroquia' => 'Cantaura',
                'municipio_id' => 22
            ),
            62 =>
            array (
                'id' => 63,
                'parroquia' => 'Libertador',
                'municipio_id' => 22
            ),
            63 =>
            array (
                'id' => 64,
                'parroquia' => 'Santa Rosa',
                'municipio_id' => 22
            ),
            64 =>
            array (
                'id' => 65,
                'parroquia' => 'Urica',
                'municipio_id' => 22
            ),
            65 =>
            array (
                'id' => 66,
                'parroquia' => 'Píritu',
                'municipio_id' => 23
            ),
            66 =>
            array (
                'id' => 67,
                'parroquia' => 'San Francisco',
                'municipio_id' => 23
            ),
            67 =>
            array (
                'id' => 68,
                'parroquia' => 'San José de Guanipa',
                'municipio_id' => 24
            ),
            68 =>
            array (
                'id' => 69,
                'parroquia' => 'Boca de Uchire',
                'municipio_id' => 25
            ),
            69 =>
            array (
                'id' => 70,
                'parroquia' => 'Boca de Chávez',
                'municipio_id' => 25
            ),
            70 =>
            array (
                'id' => 71,
                'parroquia' => 'Pueblo Nuevo',
                'municipio_id' => 26
            ),
            71 =>
            array (
                'id' => 72,
                'parroquia' => 'Santa Ana',
                'municipio_id' => 26
            ),
            72 =>
            array (
                'id' => 73,
                'parroquia' => 'Bergantín',
                'municipio_id' => 27
            ),
            73 =>
            array (
                'id' => 74,
                'parroquia' => 'Caigua',
                'municipio_id' => 27
            ),
            74 =>
            array (
                'id' => 75,
                'parroquia' => 'El Carmen',
                'municipio_id' => 27
            ),
            75 =>
            array (
                'id' => 76,
                'parroquia' => 'El Pilar',
                'municipio_id' => 27
            ),
            76 =>
            array (
                'id' => 77,
                'parroquia' => 'Naricual',
                'municipio_id' => 27
            ),
            77 =>
            array (
                'id' => 78,
                'parroquia' => 'San Crsitóbal',
                'municipio_id' => 27
            ),
            78 =>
            array (
                'id' => 79,
                'parroquia' => 'Edmundo Barrios',
                'municipio_id' => 28
            ),
            79 =>
            array (
                'id' => 80,
                'parroquia' => 'Miguel Otero Silva',
                'municipio_id' => 28
            ),
            80 =>
            array (
                'id' => 81,
                'parroquia' => 'Achaguas',
                'municipio_id' => 29
            ),
            81 =>
            array (
                'id' => 82,
                'parroquia' => 'Apurito',
                'municipio_id' => 29
            ),
            82 =>
            array (
                'id' => 83,
                'parroquia' => 'El Yagual',
                'municipio_id' => 29
            ),
            83 =>
            array (
                'id' => 84,
                'parroquia' => 'Guachara',
                'municipio_id' => 29
            ),
            84 =>
            array (
                'id' => 85,
                'parroquia' => 'Mucuritas',
                'municipio_id' => 29
            ),
            85 =>
            array (
                'id' => 86,
                'parroquia' => 'Queseras del medio',
                'municipio_id' => 29
            ),
            86 =>
            array (
                'id' => 87,
                'parroquia' => 'Biruaca',
                'municipio_id' => 30
            ),
            87 =>
            array (
                'id' => 88,
                'parroquia' => 'Bruzual',
                'municipio_id' => 31
            ),
            88 =>
            array (
                'id' => 89,
                'parroquia' => 'Mantecal',
                'municipio_id' => 31
            ),
            89 =>
            array (
                'id' => 90,
                'parroquia' => 'Quintero',
                'municipio_id' => 31
            ),
            90 =>
            array (
                'id' => 91,
                'parroquia' => 'Rincón Hondo',
                'municipio_id' => 31
            ),
            91 =>
            array (
                'id' => 92,
                'parroquia' => 'San Vicente',
                'municipio_id' => 31
            ),
            92 =>
            array (
                'id' => 93,
                'parroquia' => 'Guasdualito',
                'municipio_id' => 32
            ),
            93 =>
            array (
                'id' => 94,
                'parroquia' => 'Aramendi',
                'municipio_id' => 32
            ),
            94 =>
            array (
                'id' => 95,
                'parroquia' => 'El Amparo',
                'municipio_id' => 32
            ),
            95 =>
            array (
                'id' => 96,
                'parroquia' => 'San Camilo',
                'municipio_id' => 32
            ),
            96 =>
            array (
                'id' => 97,
                'parroquia' => 'Urdaneta',
                'municipio_id' => 32
            ),
            97 =>
            array (
                'id' => 98,
                'parroquia' => 'San Juan de Payara',
                'municipio_id' => 33
            ),
            98 =>
            array (
                'id' => 99,
                'parroquia' => 'Codazzi',
                'municipio_id' => 33
            ),
            99 =>
            array (
                'id' => 100,
                'parroquia' => 'Cunaviche',
                'municipio_id' => 33
            ),
            100 =>
            array (
                'id' => 101,
                'parroquia' => 'Elorza',
                'municipio_id' => 34
            ),
            101 =>
            array (
                'id' => 102,
                'parroquia' => 'La Trinidad',
                'municipio_id' => 34
            ),
            102 =>
            array (
                'id' => 103,
                'parroquia' => 'San Fernando',
                'municipio_id' => 35
            ),
            103 =>
            array (
                'id' => 104,
                'parroquia' => 'El Recreo',
                'municipio_id' => 35
            ),
            104 =>
            array (
                'id' => 105,
                'parroquia' => 'Peñalver',
                'municipio_id' => 35
            ),
            105 =>
            array (
                'id' => 106,
                'parroquia' => 'San Rafael de Atamaica',
                'municipio_id' => 35
            ),
            106 =>
            array (
                'id' => 107,
                'parroquia' => 'Pedro José Ovalles',
                'municipio_id' => 36
            ),
            107 =>
            array (
                'id' => 108,
                'parroquia' => 'Joaquín Crespo',
                'municipio_id' => 36
            ),
            108 =>
            array (
                'id' => 109,
                'parroquia' => 'José Casanova Godoy',
                'municipio_id' => 36
            ),
            109 =>
            array (
                'id' => 110,
                'parroquia' => 'Madre María de San José',
                'municipio_id' => 36
            ),
            110 =>
            array (
                'id' => 111,
                'parroquia' => 'Andrés Eloy Blanco',
                'municipio_id' => 36
            ),
            111 =>
            array (
                'id' => 112,
                'parroquia' => 'Los Tacarigua',
                'municipio_id' => 36
            ),
            112 =>
            array (
                'id' => 113,
                'parroquia' => 'Las Delicias',
                'municipio_id' => 36
            ),
            113 =>
            array (
                'id' => 114,
                'parroquia' => 'Choroní',
                'municipio_id' => 36
            ),
            114 =>
            array (
                'id' => 115,
                'parroquia' => 'Bolívar',
                'municipio_id' => 37
            ),
            115 =>
            array (
                'id' => 116,
                'parroquia' => 'Camatagua',
                'municipio_id' => 38
            ),
            116 =>
            array (
                'id' => 117,
                'parroquia' => 'Carmen de Cura',
                'municipio_id' => 38
            ),
            117 =>
            array (
                'id' => 118,
                'parroquia' => 'Santa Rita',
                'municipio_id' => 39
            ),
            118 =>
            array (
                'id' => 119,
                'parroquia' => 'Francisco de Miranda',
                'municipio_id' => 39
            ),
            119 =>
            array (
                'id' => 120,
                'parroquia' => 'Moseñor Feliciano González',
                'municipio_id' => 39
            ),
            120 =>
            array (
                'id' => 121,
                'parroquia' => 'Santa Cruz',
                'municipio_id' => 40
            ),
            121 =>
            array (
                'id' => 122,
                'parroquia' => 'José Félix Ribas',
                'municipio_id' => 41
            ),
            122 =>
            array (
                'id' => 123,
                'parroquia' => 'Castor Nieves Ríos',
                'municipio_id' => 41
            ),
            123 =>
            array (
                'id' => 124,
                'parroquia' => 'Las Guacamayas',
                'municipio_id' => 41
            ),
            124 =>
            array (
                'id' => 125,
                'parroquia' => 'Pao de Zárate',
                'municipio_id' => 41
            ),
            125 =>
            array (
                'id' => 126,
                'parroquia' => 'Zuata',
                'municipio_id' => 41
            ),
            126 =>
            array (
                'id' => 127,
                'parroquia' => 'José Rafael Revenga',
                'municipio_id' => 42
            ),
            127 =>
            array (
                'id' => 128,
                'parroquia' => 'Palo Negro',
                'municipio_id' => 43
            ),
            128 =>
            array (
                'id' => 129,
                'parroquia' => 'San Martín de Porres',
                'municipio_id' => 43
            ),
            129 =>
            array (
                'id' => 130,
                'parroquia' => 'El Limón',
                'municipio_id' => 44
            ),
            130 =>
            array (
                'id' => 131,
                'parroquia' => 'Caña de Azúcar',
                'municipio_id' => 44
            ),
            131 =>
            array (
                'id' => 132,
                'parroquia' => 'Ocumare de la Costa',
                'municipio_id' => 45
            ),
            132 =>
            array (
                'id' => 133,
                'parroquia' => 'San Casimiro',
                'municipio_id' => 46
            ),
            133 =>
            array (
                'id' => 134,
                'parroquia' => 'Güiripa',
                'municipio_id' => 46
            ),
            134 =>
            array (
                'id' => 135,
                'parroquia' => 'Ollas de Caramacate',
                'municipio_id' => 46
            ),
            135 =>
            array (
                'id' => 136,
                'parroquia' => 'Valle Morín',
                'municipio_id' => 46
            ),
            136 =>
            array (
                'id' => 137,
                'parroquia' => 'San Sebastían',
                'municipio_id' => 47
            ),
            137 =>
            array (
                'id' => 138,
                'parroquia' => 'Turmero',
                'municipio_id' => 48
            ),
            138 =>
            array (
                'id' => 139,
                'parroquia' => 'Arevalo Aponte',
                'municipio_id' => 48
            ),
            139 =>
            array (
                'id' => 140,
                'parroquia' => 'Chuao',
                'municipio_id' => 48
            ),
            140 =>
            array (
                'id' => 141,
                'parroquia' => 'Samán de Güere',
                'municipio_id' => 48
            ),
            141 =>
            array (
                'id' => 142,
                'parroquia' => 'Alfredo Pacheco Miranda',
                'municipio_id' => 48
            ),
            142 =>
            array (
                'id' => 143,
                'parroquia' => 'Santos Michelena',
                'municipio_id' => 49
            ),
            143 =>
            array (
                'id' => 144,
                'parroquia' => 'Tiara',
                'municipio_id' => 49
            ),
            144 =>
            array (
                'id' => 145,
                'parroquia' => 'Cagua',
                'municipio_id' => 50
            ),
            145 =>
            array (
                'id' => 146,
                'parroquia' => 'Bella Vista',
                'municipio_id' => 50
            ),
            146 =>
            array (
                'id' => 147,
                'parroquia' => 'Tovar',
                'municipio_id' => 51
            ),
            147 =>
            array (
                'id' => 148,
                'parroquia' => 'Urdaneta',
                'municipio_id' => 52
            ),
            148 =>
            array (
                'id' => 149,
                'parroquia' => 'Las Peñitas',
                'municipio_id' => 52
            ),
            149 =>
            array (
                'id' => 150,
                'parroquia' => 'San Francisco de Cara',
                'municipio_id' => 52
            ),
            150 =>
            array (
                'id' => 151,
                'parroquia' => 'Taguay',
                'municipio_id' => 52
            ),
            151 =>
            array (
                'id' => 152,
                'parroquia' => 'Zamora',
                'municipio_id' => 53
            ),
            152 =>
            array (
                'id' => 153,
                'parroquia' => 'Magdaleno',
                'municipio_id' => 53
            ),
            153 =>
            array (
                'id' => 154,
                'parroquia' => 'San Francisco de Asís',
                'municipio_id' => 53
            ),
            154 =>
            array (
                'id' => 155,
                'parroquia' => 'Valles de Tucutunemo',
                'municipio_id' => 53
            ),
            155 =>
            array (
                'id' => 156,
                'parroquia' => 'Augusto Mijares',
                'municipio_id' => 53
            ),
            156 =>
            array (
                'id' => 157,
                'parroquia' => 'Sabaneta',
                'municipio_id' => 54
            ),
            157 =>
            array (
                'id' => 158,
                'parroquia' => 'Juan Antonio Rodríguez Domínguez',
                'municipio_id' => 54
            ),
            158 =>
            array (
                'id' => 159,
                'parroquia' => 'El Cantón',
                'municipio_id' => 55
            ),
            159 =>
            array (
                'id' => 160,
                'parroquia' => 'Santa Cruz de Guacas',
                'municipio_id' => 55
            ),
            160 =>
            array (
                'id' => 161,
                'parroquia' => 'Puerto Vivas',
                'municipio_id' => 55
            ),
            161 =>
            array (
                'id' => 162,
                'parroquia' => 'Ticoporo',
                'municipio_id' => 56
            ),
            162 =>
            array (
                'id' => 163,
                'parroquia' => 'Nicolás Pulido',
                'municipio_id' => 56
            ),
            163 =>
            array (
                'id' => 164,
                'parroquia' => 'Andrés Bello',
                'municipio_id' => 56
            ),
            164 =>
            array (
                'id' => 165,
                'parroquia' => 'Arismendi',
                'municipio_id' => 57
            ),
            165 =>
            array (
                'id' => 166,
                'parroquia' => 'Guadarrama',
                'municipio_id' => 57
            ),
            166 =>
            array (
                'id' => 167,
                'parroquia' => 'La Unión',
                'municipio_id' => 57
            ),
            167 =>
            array (
                'id' => 168,
                'parroquia' => 'San Antonio',
                'municipio_id' => 57
            ),
            168 =>
            array (
                'id' => 169,
                'parroquia' => 'Barinas',
                'municipio_id' => 58
            ),
            169 =>
            array (
                'id' => 170,
                'parroquia' => 'Alberto Arvelo Larriva',
                'municipio_id' => 58
            ),
            170 =>
            array (
                'id' => 171,
                'parroquia' => 'San Silvestre',
                'municipio_id' => 58
            ),
            171 =>
            array (
                'id' => 172,
                'parroquia' => 'Santa Inés',
                'municipio_id' => 58
            ),
            172 =>
            array (
                'id' => 173,
                'parroquia' => 'Santa Lucía',
                'municipio_id' => 58
            ),
            173 =>
            array (
                'id' => 174,
                'parroquia' => 'Torumos',
                'municipio_id' => 58
            ),
            174 =>
            array (
                'id' => 175,
                'parroquia' => 'El Carmen',
                'municipio_id' => 58
            ),
            175 =>
            array (
                'id' => 176,
                'parroquia' => 'Rómulo Betancourt',
                'municipio_id' => 58
            ),
            176 =>
            array (
                'id' => 177,
                'parroquia' => 'Corazón de Jesús',
                'municipio_id' => 58
            ),
            177 =>
            array (
                'id' => 178,
                'parroquia' => 'Ramón Ignacio Méndez',
                'municipio_id' => 58
            ),
            178 =>
            array (
                'id' => 179,
                'parroquia' => 'Alto Barinas',
                'municipio_id' => 58
            ),
            179 =>
            array (
                'id' => 180,
                'parroquia' => 'Manuel Palacio Fajardo',
                'municipio_id' => 58
            ),
            180 =>
            array (
                'id' => 181,
                'parroquia' => 'Juan Antonio Rodríguez Domínguez',
                'municipio_id' => 58
            ),
            181 =>
            array (
                'id' => 182,
                'parroquia' => 'Dominga Ortiz de Páez',
                'municipio_id' => 58
            ),
            182 =>
            array (
                'id' => 183,
                'parroquia' => 'Barinitas',
                'municipio_id' => 59
            ),
            183 =>
            array (
                'id' => 184,
                'parroquia' => 'Altamira de Cáceres',
                'municipio_id' => 59
            ),
            184 =>
            array (
                'id' => 185,
                'parroquia' => 'Calderas',
                'municipio_id' => 59
            ),
            185 =>
            array (
                'id' => 186,
                'parroquia' => 'Barrancas',
                'municipio_id' => 60
            ),
            186 =>
            array (
                'id' => 187,
                'parroquia' => 'El Socorro',
                'municipio_id' => 60
            ),
            187 =>
            array (
                'id' => 188,
                'parroquia' => 'Mazparrito',
                'municipio_id' => 60
            ),
            188 =>
            array (
                'id' => 189,
                'parroquia' => 'Santa Bárbara',
                'municipio_id' => 61
            ),
            189 =>
            array (
                'id' => 190,
                'parroquia' => 'Pedro Briceño Méndez',
                'municipio_id' => 61
            ),
            190 =>
            array (
                'id' => 191,
                'parroquia' => 'Ramón Ignacio Méndez',
                'municipio_id' => 61
            ),
            191 =>
            array (
                'id' => 192,
                'parroquia' => 'José Ignacio del Pumar',
                'municipio_id' => 61
            ),
            192 =>
            array (
                'id' => 193,
                'parroquia' => 'Obispos',
                'municipio_id' => 62
            ),
            193 =>
            array (
                'id' => 194,
                'parroquia' => 'Guasimitos',
                'municipio_id' => 62
            ),
            194 =>
            array (
                'id' => 195,
                'parroquia' => 'El Real',
                'municipio_id' => 62
            ),
            195 =>
            array (
                'id' => 196,
                'parroquia' => 'La Luz',
                'municipio_id' => 62
            ),
            196 =>
            array (
                'id' => 197,
                'parroquia' => 'Ciudad Bolívia',
                'municipio_id' => 63
            ),
            197 =>
            array (
                'id' => 198,
                'parroquia' => 'José Ignacio Briceño',
                'municipio_id' => 63
            ),
            198 =>
            array (
                'id' => 199,
                'parroquia' => 'José Félix Ribas',
                'municipio_id' => 63
            ),
            199 =>
            array (
                'id' => 200,
                'parroquia' => 'Páez',
                'municipio_id' => 63
            ),
            200 =>
            array (
                'id' => 201,
                'parroquia' => 'Libertad',
                'municipio_id' => 64
            ),
            201 =>
            array (
                'id' => 202,
                'parroquia' => 'Dolores',
                'municipio_id' => 64
            ),
            202 =>
            array (
                'id' => 203,
                'parroquia' => 'Santa Rosa',
                'municipio_id' => 64
            ),
            203 =>
            array (
                'id' => 204,
                'parroquia' => 'Palacio Fajardo',
                'municipio_id' => 64
            ),
            204 =>
            array (
                'id' => 205,
                'parroquia' => 'Ciudad de Nutrias',
                'municipio_id' => 65
            ),
            205 =>
            array (
                'id' => 206,
                'parroquia' => 'El Regalo',
                'municipio_id' => 65
            ),
            206 =>
            array (
                'id' => 207,
                'parroquia' => 'Puerto Nutrias',
                'municipio_id' => 65
            ),
            207 =>
            array (
                'id' => 208,
                'parroquia' => 'Santa Catalina',
                'municipio_id' => 65
            ),
            208 =>
            array (
                'id' => 209,
                'parroquia' => 'Cachamay',
                'municipio_id' => 66
            ),
            209 =>
            array (
                'id' => 210,
                'parroquia' => 'Chirica',
                'municipio_id' => 66
            ),
            210 =>
            array (
                'id' => 211,
                'parroquia' => 'Dalla Costa',
                'municipio_id' => 66
            ),
            211 =>
            array (
                'id' => 212,
                'parroquia' => 'Once de Abril',
                'municipio_id' => 66
            ),
            212 =>
            array (
                'id' => 213,
                'parroquia' => 'Simón Bolívar',
                'municipio_id' => 66
            ),
            213 =>
            array (
                'id' => 214,
                'parroquia' => 'Unare',
                'municipio_id' => 66
            ),
            214 =>
            array (
                'id' => 215,
                'parroquia' => 'Universidad',
                'municipio_id' => 66
            ),
            215 =>
            array (
                'id' => 216,
                'parroquia' => 'Vista al Sol',
                'municipio_id' => 66
            ),
            216 =>
            array (
                'id' => 217,
                'parroquia' => 'Pozo Verde',
                'municipio_id' => 66
            ),
            217 =>
            array (
                'id' => 218,
                'parroquia' => 'Yocoima',
                'municipio_id' => 66
            ),
            218 =>
            array (
                'id' => 219,
                'parroquia' => '5 de Julio',
                'municipio_id' => 66
            ),
            219 =>
            array (
                'id' => 220,
                'parroquia' => 'Cedeño',
                'municipio_id' => 67
            ),
            220 =>
            array (
                'id' => 221,
                'parroquia' => 'Altagracia',
                'municipio_id' => 67
            ),
            221 =>
            array (
                'id' => 222,
                'parroquia' => 'Ascensión Farreras',
                'municipio_id' => 67
            ),
            222 =>
            array (
                'id' => 223,
                'parroquia' => 'Guaniamo',
                'municipio_id' => 67
            ),
            223 =>
            array (
                'id' => 224,
                'parroquia' => 'La Urbana',
                'municipio_id' => 67
            ),
            224 =>
            array (
                'id' => 225,
                'parroquia' => 'Pijiguaos',
                'municipio_id' => 67
            ),
            225 =>
            array (
                'id' => 226,
                'parroquia' => 'El Callao',
                'municipio_id' => 68
            ),
            226 =>
            array (
                'id' => 227,
                'parroquia' => 'Gran Sabana',
                'municipio_id' => 69
            ),
            227 =>
            array (
                'id' => 228,
                'parroquia' => 'Ikabarú',
                'municipio_id' => 69
            ),
            228 =>
            array (
                'id' => 229,
                'parroquia' => 'Catedral',
                'municipio_id' => 70
            ),
            229 =>
            array (
                'id' => 230,
                'parroquia' => 'Zea',
                'municipio_id' => 70
            ),
            230 =>
            array (
                'id' => 231,
                'parroquia' => 'Orinoco',
                'municipio_id' => 70
            ),
            231 =>
            array (
                'id' => 232,
                'parroquia' => 'José Antonio Páez',
                'municipio_id' => 70
            ),
            232 =>
            array (
                'id' => 233,
                'parroquia' => 'Marhuanta',
                'municipio_id' => 70
            ),
            233 =>
            array (
                'id' => 234,
                'parroquia' => 'Agua Salada',
                'municipio_id' => 70
            ),
            234 =>
            array (
                'id' => 235,
                'parroquia' => 'Vista Hermosa',
                'municipio_id' => 70
            ),
            235 =>
            array (
                'id' => 236,
                'parroquia' => 'La Sabanita',
                'municipio_id' => 70
            ),
            236 =>
            array (
                'id' => 237,
                'parroquia' => 'Panapana',
                'municipio_id' => 70
            ),
            237 =>
            array (
                'id' => 238,
                'parroquia' => 'Andrés Eloy Blanco',
                'municipio_id' => 71
            ),
            238 =>
            array (
                'id' => 239,
                'parroquia' => 'Pedro Cova',
                'municipio_id' => 71
            ),
            239 =>
            array (
                'id' => 240,
                'parroquia' => 'Raúl Leoni',
                'municipio_id' => 72
            ),
            240 =>
            array (
                'id' => 241,
                'parroquia' => 'Barceloneta',
                'municipio_id' => 72
            ),
            241 =>
            array (
                'id' => 242,
                'parroquia' => 'Santa Bárbara',
                'municipio_id' => 72
            ),
            242 =>
            array (
                'id' => 243,
                'parroquia' => 'San Francisco',
                'municipio_id' => 72
            ),
            243 =>
            array (
                'id' => 244,
                'parroquia' => 'Roscio',
                'municipio_id' => 73
            ),
            244 =>
            array (
                'id' => 245,
                'parroquia' => 'Salóm',
                'municipio_id' => 73
            ),
            245 =>
            array (
                'id' => 246,
                'parroquia' => 'Sifontes',
                'municipio_id' => 74
            ),
            246 =>
            array (
                'id' => 247,
                'parroquia' => 'Dalla Costa',
                'municipio_id' => 74
            ),
            247 =>
            array (
                'id' => 248,
                'parroquia' => 'San Isidro',
                'municipio_id' => 74
            ),
            248 =>
            array (
                'id' => 249,
                'parroquia' => 'Sucre',
                'municipio_id' => 75
            ),
            249 =>
            array (
                'id' => 250,
                'parroquia' => 'Aripao',
                'municipio_id' => 75
            ),
            250 =>
            array (
                'id' => 251,
                'parroquia' => 'Guarataro',
                'municipio_id' => 75
            ),
            251 =>
            array (
                'id' => 252,
                'parroquia' => 'Las Majadas',
                'municipio_id' => 75
            ),
            252 =>
            array (
                'id' => 253,
                'parroquia' => 'Moitaco',
                'municipio_id' => 75
            ),
            253 =>
            array (
                'id' => 254,
                'parroquia' => 'Padre Pedro Chien',
                'municipio_id' => 76
            ),
            254 =>
            array (
                'id' => 255,
                'parroquia' => 'Río Grande',
                'municipio_id' => 76
            ),
            255 =>
            array (
                'id' => 256,
                'parroquia' => 'Bejuma',
                'municipio_id' => 77
            ),
            256 =>
            array (
                'id' => 257,
                'parroquia' => 'Canoabo',
                'municipio_id' => 77
            ),
            257 =>
            array (
                'id' => 258,
                'parroquia' => 'Simón Bolívar',
                'municipio_id' => 77
            ),
            258 =>
            array (
                'id' => 259,
                'parroquia' => 'Güigüe',
                'municipio_id' => 78
            ),
            259 =>
            array (
                'id' => 260,
                'parroquia' => 'Carabobo',
                'municipio_id' => 78
            ),
            260 =>
            array (
                'id' => 261,
                'parroquia' => 'Tacarigua',
                'municipio_id' => 78
            ),
            261 =>
            array (
                'id' => 262,
                'parroquia' => 'Mariara',
                'municipio_id' => 79
            ),
            262 =>
            array (
                'id' => 263,
                'parroquia' => 'Aguas Calientes',
                'municipio_id' => 79
            ),
            263 =>
            array (
                'id' => 264,
                'parroquia' => 'Ciudad Alianza',
                'municipio_id' => 80
            ),
            264 =>
            array (
                'id' => 265,
                'parroquia' => 'Guacara',
                'municipio_id' => 80
            ),
            265 =>
            array (
                'id' => 266,
                'parroquia' => 'Yagua',
                'municipio_id' => 80
            ),
            266 =>
            array (
                'id' => 267,
                'parroquia' => 'Morón',
                'municipio_id' => 81
            ),
            267 =>
            array (
                'id' => 268,
                'parroquia' => 'Yagua',
                'municipio_id' => 81
            ),
            268 =>
            array (
                'id' => 269,
                'parroquia' => 'Tocuyito',
                'municipio_id' => 82
            ),
            269 =>
            array (
                'id' => 270,
                'parroquia' => 'Independencia',
                'municipio_id' => 82
            ),
            270 =>
            array (
                'id' => 271,
                'parroquia' => 'Los Guayos',
                'municipio_id' => 83
            ),
            271 =>
            array (
                'id' => 272,
                'parroquia' => 'Miranda',
                'municipio_id' => 84
            ),
            272 =>
            array (
                'id' => 273,
                'parroquia' => 'Montalbán',
                'municipio_id' => 85
            ),
            273 =>
            array (
                'id' => 274,
                'parroquia' => 'Naguanagua',
                'municipio_id' => 86
            ),
            274 =>
            array (
                'id' => 275,
                'parroquia' => 'Bartolomé Salóm',
                'municipio_id' => 87
            ),
            275 =>
            array (
                'id' => 276,
                'parroquia' => 'Democracia',
                'municipio_id' => 87
            ),
            276 =>
            array (
                'id' => 277,
                'parroquia' => 'Fraternidad',
                'municipio_id' => 87
            ),
            277 =>
            array (
                'id' => 278,
                'parroquia' => 'Goaigoaza',
                'municipio_id' => 87
            ),
            278 =>
            array (
                'id' => 279,
                'parroquia' => 'Juan José Flores',
                'municipio_id' => 87
            ),
            279 =>
            array (
                'id' => 280,
                'parroquia' => 'Unión',
                'municipio_id' => 87
            ),
            280 =>
            array (
                'id' => 281,
                'parroquia' => 'Borburata',
                'municipio_id' => 87
            ),
            281 =>
            array (
                'id' => 282,
                'parroquia' => 'Patanemo',
                'municipio_id' => 87
            ),
            282 =>
            array (
                'id' => 283,
                'parroquia' => 'San Diego',
                'municipio_id' => 88
            ),
            283 =>
            array (
                'id' => 284,
                'parroquia' => 'San Joaquín',
                'municipio_id' => 89
            ),
            284 =>
            array (
                'id' => 285,
                'parroquia' => 'Candelaria',
                'municipio_id' => 90
            ),
            285 =>
            array (
                'id' => 286,
                'parroquia' => 'Catedral',
                'municipio_id' => 90
            ),
            286 =>
            array (
                'id' => 287,
                'parroquia' => 'El Socorro',
                'municipio_id' => 90
            ),
            287 =>
            array (
                'id' => 288,
                'parroquia' => 'Miguel Peña',
                'municipio_id' => 90
            ),
            288 =>
            array (
                'id' => 289,
                'parroquia' => 'Rafael Urdaneta',
                'municipio_id' => 90
            ),
            289 =>
            array (
                'id' => 290,
                'parroquia' => 'San Blas',
                'municipio_id' => 90
            ),
            290 =>
            array (
                'id' => 291,
                'parroquia' => 'San José',
                'municipio_id' => 90
            ),
            291 =>
            array (
                'id' => 292,
                'parroquia' => 'Santa Rosa',
                'municipio_id' => 90
            ),
            292 =>
            array (
                'id' => 293,
                'parroquia' => 'Negro Primero',
                'municipio_id' => 90
            ),
            293 =>
            array (
                'id' => 294,
                'parroquia' => 'Cojedes',
                'municipio_id' => 91
            ),
            294 =>
            array (
                'id' => 295,
                'parroquia' => 'Juan de Mata Suárez',
                'municipio_id' => 91
            ),
            295 =>
            array (
                'id' => 296,
                'parroquia' => 'Tinaquillo',
                'municipio_id' => 92
            ),
            296 =>
            array (
                'id' => 297,
                'parroquia' => 'El Baúl',
                'municipio_id' => 93
            ),
            297 =>
            array (
                'id' => 298,
                'parroquia' => 'Sucre',
                'municipio_id' => 93
            ),
            298 =>
            array (
                'id' => 299,
                'parroquia' => 'La Aguadita',
                'municipio_id' => 94
            ),
            299 =>
            array (
                'id' => 300,
                'parroquia' => 'Macapo',
                'municipio_id' => 94
            ),
            300 =>
            array (
                'id' => 301,
                'parroquia' => 'El Pao',
                'municipio_id' => 95
            ),
            301 =>
            array (
                'id' => 302,
                'parroquia' => 'El Amparo',
                'municipio_id' => 96
            ),
            302 =>
            array (
                'id' => 303,
                'parroquia' => 'Libertad de Cojedes',
                'municipio_id' => 96
            ),
            303 =>
            array (
                'id' => 304,
                'parroquia' => 'Rómulo Gallegos',
                'municipio_id' => 97
            ),
            304 =>
            array (
                'id' => 305,
                'parroquia' => 'San Carlos de Austria',
                'municipio_id' => 98
            ),
            305 =>
            array (
                'id' => 306,
                'parroquia' => 'Juan Ángel Bravo',
                'municipio_id' => 98
            ),
            306 =>
            array (
                'id' => 307,
                'parroquia' => 'Manuel Manrique',
                'municipio_id' => 98
            ),
            307 =>
            array (
                'id' => 308,
                'parroquia' => 'General en Jefe José Laurencio Silva',
                'municipio_id' => 99
            ),
            308 =>
            array (
                'id' => 309,
                'parroquia' => 'Curiapo',
                'municipio_id' => 100
            ),
            309 =>
            array (
                'id' => 310,
                'parroquia' => 'Almirante Luis Brión',
                'municipio_id' => 100
            ),
            310 =>
            array (
                'id' => 311,
                'parroquia' => 'Francisco Aniceto Lugo',
                'municipio_id' => 100
            ),
            311 =>
            array (
                'id' => 312,
                'parroquia' => 'Manuel Renaud',
                'municipio_id' => 100
            ),
            312 =>
            array (
                'id' => 313,
                'parroquia' => 'Padre Barral',
                'municipio_id' => 100
            ),
            313 =>
            array (
                'id' => 314,
                'parroquia' => 'Santos de Abelgas',
                'municipio_id' => 100
            ),
            314 =>
            array (
                'id' => 315,
                'parroquia' => 'Imataca',
                'municipio_id' => 101
            ),
            315 =>
            array (
                'id' => 316,
                'parroquia' => 'Cinco de Julio',
                'municipio_id' => 101
            ),
            316 =>
            array (
                'id' => 317,
                'parroquia' => 'Juan Bautista Arismendi',
                'municipio_id' => 101
            ),
            317 =>
            array (
                'id' => 318,
                'parroquia' => 'Manuel Piar',
                'municipio_id' => 101
            ),
            318 =>
            array (
                'id' => 319,
                'parroquia' => 'Rómulo Gallegos',
                'municipio_id' => 101
            ),
            319 =>
            array (
                'id' => 320,
                'parroquia' => 'Pedernales',
                'municipio_id' => 102
            ),
            320 =>
            array (
                'id' => 321,
                'parroquia' => 'Luis Beltrán Prieto Figueroa',
                'municipio_id' => 102
            ),
            321 =>
            array (
                'id' => 322,
            'parroquia' => 'San José (Delta Amacuro)',
                'municipio_id' => 103
            ),
            322 =>
            array (
                'id' => 323,
                'parroquia' => 'José Vidal Marcano',
                'municipio_id' => 103
            ),
            323 =>
            array (
                'id' => 324,
                'parroquia' => 'Juan Millán',
                'municipio_id' => 103
            ),
            324 =>
            array (
                'id' => 325,
                'parroquia' => 'Leonardo Ruíz Pineda',
                'municipio_id' => 103
            ),
            325 =>
            array (
                'id' => 326,
                'parroquia' => 'Mariscal Antonio José de Sucre',
                'municipio_id' => 103
            ),
            326 =>
            array (
                'id' => 327,
                'parroquia' => 'Monseñor Argimiro García',
                'municipio_id' => 103
            ),
            327 =>
            array (
                'id' => 328,
            'parroquia' => 'San Rafael (Delta Amacuro)',
                'municipio_id' => 103
            ),
            328 =>
            array (
                'id' => 329,
                'parroquia' => 'Virgen del Valle',
                'municipio_id' => 103
            ),
            329 =>
            array (
                'id' => 330,
                'parroquia' => 'Clarines',
                'municipio_id' => 10
            ),
            330 =>
            array (
                'id' => 331,
                'parroquia' => 'Guanape',
                'municipio_id' => 10
            ),
            331 =>
            array (
                'id' => 332,
                'parroquia' => 'Sabana de Uchire',
                'municipio_id' => 10
            ),
            332 =>
            array (
                'id' => 333,
                'parroquia' => 'Capadare',
                'municipio_id' => 104
            ),
            333 =>
            array (
                'id' => 334,
                'parroquia' => 'La Pastora',
                'municipio_id' => 104
            ),
            334 =>
            array (
                'id' => 335,
                'parroquia' => 'Libertador',
                'municipio_id' => 104
            ),
            335 =>
            array (
                'id' => 336,
                'parroquia' => 'San Juan de los Cayos',
                'municipio_id' => 104
            ),
            336 =>
            array (
                'id' => 337,
                'parroquia' => 'Aracua',
                'municipio_id' => 105
            ),
            337 =>
            array (
                'id' => 338,
                'parroquia' => 'La Peña',
                'municipio_id' => 105
            ),
            338 =>
            array (
                'id' => 339,
                'parroquia' => 'San Luis',
                'municipio_id' => 105
            ),
            339 =>
            array (
                'id' => 340,
                'parroquia' => 'Bariro',
                'municipio_id' => 106
            ),
            340 =>
            array (
                'id' => 341,
                'parroquia' => 'Borojó',
                'municipio_id' => 106
            ),
            341 =>
            array (
                'id' => 342,
                'parroquia' => 'Capatárida',
                'municipio_id' => 106
            ),
            342 =>
            array (
                'id' => 343,
                'parroquia' => 'Guajiro',
                'municipio_id' => 106
            ),
            343 =>
            array (
                'id' => 344,
                'parroquia' => 'Seque',
                'municipio_id' => 106
            ),
            344 =>
            array (
                'id' => 345,
                'parroquia' => 'Zazárida',
                'municipio_id' => 106
            ),
            345 =>
            array (
                'id' => 346,
                'parroquia' => 'Valle de Eroa',
                'municipio_id' => 106
            ),
            346 =>
            array (
                'id' => 347,
                'parroquia' => 'Cacique Manaure',
                'municipio_id' => 107
            ),
            347 =>
            array (
                'id' => 348,
                'parroquia' => 'Norte',
                'municipio_id' => 108
            ),
            348 =>
            array (
                'id' => 349,
                'parroquia' => 'Carirubana',
                'municipio_id' => 108
            ),
            349 =>
            array (
                'id' => 350,
                'parroquia' => 'Santa Ana',
                'municipio_id' => 108
            ),
            350 =>
            array (
                'id' => 351,
                'parroquia' => 'Urbana Punta Cardón',
                'municipio_id' => 108
            ),
            351 =>
            array (
                'id' => 352,
                'parroquia' => 'La Vela de Coro',
                'municipio_id' => 109
            ),
            352 =>
            array (
                'id' => 353,
                'parroquia' => 'Acurigua',
                'municipio_id' => 109
            ),
            353 =>
            array (
                'id' => 354,
                'parroquia' => 'Guaibacoa',
                'municipio_id' => 109
            ),
            354 =>
            array (
                'id' => 355,
                'parroquia' => 'Las Calderas',
                'municipio_id' => 109
            ),
            355 =>
            array (
                'id' => 356,
                'parroquia' => 'Macoruca',
                'municipio_id' => 109
            ),
            356 =>
            array (
                'id' => 357,
                'parroquia' => 'Dabajuro',
                'municipio_id' => 110
            ),
            357 =>
            array (
                'id' => 358,
                'parroquia' => 'Agua Clara',
                'municipio_id' => 111
            ),
            358 =>
            array (
                'id' => 359,
                'parroquia' => 'Avaria',
                'municipio_id' => 111
            ),
            359 =>
            array (
                'id' => 360,
                'parroquia' => 'Pedregal',
                'municipio_id' => 111
            ),
            360 =>
            array (
                'id' => 361,
                'parroquia' => 'Piedra Grande',
                'municipio_id' => 111
            ),
            361 =>
            array (
                'id' => 362,
                'parroquia' => 'Purureche',
                'municipio_id' => 111
            ),
            362 =>
            array (
                'id' => 363,
                'parroquia' => 'Adaure',
                'municipio_id' => 112
            ),
            363 =>
            array (
                'id' => 364,
                'parroquia' => 'Adícora',
                'municipio_id' => 112
            ),
            364 =>
            array (
                'id' => 365,
                'parroquia' => 'Baraived',
                'municipio_id' => 112
            ),
            365 =>
            array (
                'id' => 366,
                'parroquia' => 'Buena Vista',
                'municipio_id' => 112
            ),
            366 =>
            array (
                'id' => 367,
                'parroquia' => 'Jadacaquiva',
                'municipio_id' => 112
            ),
            367 =>
            array (
                'id' => 368,
                'parroquia' => 'El Vínculo',
                'municipio_id' => 112
            ),
            368 =>
            array (
                'id' => 369,
                'parroquia' => 'El Hato',
                'municipio_id' => 112
            ),
            369 =>
            array (
                'id' => 370,
                'parroquia' => 'Moruy',
                'municipio_id' => 112
            ),
            370 =>
            array (
                'id' => 371,
                'parroquia' => 'Pueblo Nuevo',
                'municipio_id' => 112
            ),
            371 =>
            array (
                'id' => 372,
                'parroquia' => 'Agua Larga',
                'municipio_id' => 113
            ),
            372 =>
            array (
                'id' => 373,
                'parroquia' => 'El Paují',
                'municipio_id' => 113
            ),
            373 =>
            array (
                'id' => 374,
                'parroquia' => 'Independencia',
                'municipio_id' => 113
            ),
            374 =>
            array (
                'id' => 375,
                'parroquia' => 'Mapararí',
                'municipio_id' => 113
            ),
            375 =>
            array (
                'id' => 376,
                'parroquia' => 'Agua Linda',
                'municipio_id' => 114
            ),
            376 =>
            array (
                'id' => 377,
                'parroquia' => 'Araurima',
                'municipio_id' => 114
            ),
            377 =>
            array (
                'id' => 378,
                'parroquia' => 'Jacura',
                'municipio_id' => 114
            ),
            378 =>
            array (
                'id' => 379,
                'parroquia' => 'Tucacas',
                'municipio_id' => 115
            ),
            379 =>
            array (
                'id' => 380,
                'parroquia' => 'Boca de Aroa',
                'municipio_id' => 115
            ),
            380 =>
            array (
                'id' => 381,
                'parroquia' => 'Los Taques',
                'municipio_id' => 116
            ),
            381 =>
            array (
                'id' => 382,
                'parroquia' => 'Judibana',
                'municipio_id' => 116
            ),
            382 =>
            array (
                'id' => 383,
                'parroquia' => 'Mene de Mauroa',
                'municipio_id' => 117
            ),
            383 =>
            array (
                'id' => 384,
                'parroquia' => 'San Félix',
                'municipio_id' => 117
            ),
            384 =>
            array (
                'id' => 385,
                'parroquia' => 'Casigua',
                'municipio_id' => 117
            ),
            385 =>
            array (
                'id' => 386,
                'parroquia' => 'Guzmán Guillermo',
                'municipio_id' => 118
            ),
            386 =>
            array (
                'id' => 387,
                'parroquia' => 'Mitare',
                'municipio_id' => 118
            ),
            387 =>
            array (
                'id' => 388,
                'parroquia' => 'Río Seco',
                'municipio_id' => 118
            ),
            388 =>
            array (
                'id' => 389,
                'parroquia' => 'Sabaneta',
                'municipio_id' => 118
            ),
            389 =>
            array (
                'id' => 390,
                'parroquia' => 'San Antonio',
                'municipio_id' => 118
            ),
            390 =>
            array (
                'id' => 391,
                'parroquia' => 'San Gabriel',
                'municipio_id' => 118
            ),
            391 =>
            array (
                'id' => 392,
                'parroquia' => 'Santa Ana',
                'municipio_id' => 118
            ),
            392 =>
            array (
                'id' => 393,
                'parroquia' => 'Boca del Tocuyo',
                'municipio_id' => 119
            ),
            393 =>
            array (
                'id' => 394,
                'parroquia' => 'Chichiriviche',
                'municipio_id' => 119
            ),
            394 =>
            array (
                'id' => 395,
                'parroquia' => 'Tocuyo de la Costa',
                'municipio_id' => 119
            ),
            395 =>
            array (
                'id' => 396,
                'parroquia' => 'Palmasola',
                'municipio_id' => 120
            ),
            396 =>
            array (
                'id' => 397,
                'parroquia' => 'Cabure',
                'municipio_id' => 121
            ),
            397 =>
            array (
                'id' => 398,
                'parroquia' => 'Colina',
                'municipio_id' => 121
            ),
            398 =>
            array (
                'id' => 399,
                'parroquia' => 'Curimagua',
                'municipio_id' => 121
            ),
            399 =>
            array (
                'id' => 400,
                'parroquia' => 'San José de la Costa',
                'municipio_id' => 122
            ),
            400 =>
            array (
                'id' => 401,
                'parroquia' => 'Píritu',
                'municipio_id' => 122
            ),
            401 =>
            array (
                'id' => 402,
                'parroquia' => 'San Francisco',
                'municipio_id' => 123
            ),
            402 =>
            array (
                'id' => 403,
                'parroquia' => 'Sucre',
                'municipio_id' => 124
            ),
            403 =>
            array (
                'id' => 404,
                'parroquia' => 'Pecaya',
                'municipio_id' => 124
            ),
            404 =>
            array (
                'id' => 405,
                'parroquia' => 'Tocópero',
                'municipio_id' => 125
            ),
            405 =>
            array (
                'id' => 406,
                'parroquia' => 'El Charal',
                'municipio_id' => 126
            ),
            406 =>
            array (
                'id' => 407,
                'parroquia' => 'Las Vegas del Tuy',
                'municipio_id' => 126
            ),
            407 =>
            array (
                'id' => 408,
                'parroquia' => 'Santa Cruz de Bucaral',
                'municipio_id' => 126
            ),
            408 =>
            array (
                'id' => 409,
                'parroquia' => 'Bruzual',
                'municipio_id' => 127
            ),
            409 =>
            array (
                'id' => 410,
                'parroquia' => 'Urumaco',
                'municipio_id' => 127
            ),
            410 =>
            array (
                'id' => 411,
                'parroquia' => 'Puerto Cumarebo',
                'municipio_id' => 128
            ),
            411 =>
            array (
                'id' => 412,
                'parroquia' => 'La Ciénaga',
                'municipio_id' => 128
            ),
            412 =>
            array (
                'id' => 413,
                'parroquia' => 'La Soledad',
                'municipio_id' => 128
            ),
            413 =>
            array (
                'id' => 414,
                'parroquia' => 'Pueblo Cumarebo',
                'municipio_id' => 128
            ),
            414 =>
            array (
                'id' => 415,
                'parroquia' => 'Zazárida',
                'municipio_id' => 128
            ),
            415 =>
            array (
                'id' => 416,
                'parroquia' => 'Churuguara',
                'municipio_id' => 113
            ),
            416 =>
            array (
                'id' => 417,
                'parroquia' => 'Camaguán',
                'municipio_id' => 129
            ),
            417 =>
            array (
                'id' => 418,
                'parroquia' => 'Puerto Miranda',
                'municipio_id' => 129
            ),
            418 =>
            array (
                'id' => 419,
                'parroquia' => 'Uverito',
                'municipio_id' => 129
            ),
            419 =>
            array (
                'id' => 420,
                'parroquia' => 'Chaguaramas',
                'municipio_id' => 130
            ),
            420 =>
            array (
                'id' => 421,
                'parroquia' => 'El Socorro',
                'municipio_id' => 131
            ),
            421 =>
            array (
                'id' => 422,
                'parroquia' => 'Tucupido',
                'municipio_id' => 132
            ),
            422 =>
            array (
                'id' => 423,
                'parroquia' => 'San Rafael de Laya',
                'municipio_id' => 132
            ),
            423 =>
            array (
                'id' => 424,
                'parroquia' => 'Altagracia de Orituco',
                'municipio_id' => 133
            ),
            424 =>
            array (
                'id' => 425,
                'parroquia' => 'San Rafael de Orituco',
                'municipio_id' => 133
            ),
            425 =>
            array (
                'id' => 426,
                'parroquia' => 'San Francisco Javier de Lezama',
                'municipio_id' => 133
            ),
            426 =>
            array (
                'id' => 427,
                'parroquia' => 'Paso Real de Macaira',
                'municipio_id' => 133
            ),
            427 =>
            array (
                'id' => 428,
                'parroquia' => 'Carlos Soublette',
                'municipio_id' => 133
            ),
            428 =>
            array (
                'id' => 429,
                'parroquia' => 'San Francisco de Macaira',
                'municipio_id' => 133
            ),
            429 =>
            array (
                'id' => 430,
                'parroquia' => 'Libertad de Orituco',
                'municipio_id' => 133
            ),
            430 =>
            array (
                'id' => 431,
                'parroquia' => 'Cantaclaro',
                'municipio_id' => 134
            ),
            431 =>
            array (
                'id' => 432,
                'parroquia' => 'San Juan de los Morros',
                'municipio_id' => 134
            ),
            432 =>
            array (
                'id' => 433,
                'parroquia' => 'Parapara',
                'municipio_id' => 134
            ),
            433 =>
            array (
                'id' => 434,
                'parroquia' => 'El Sombrero',
                'municipio_id' => 135
            ),
            434 =>
            array (
                'id' => 435,
                'parroquia' => 'Sosa',
                'municipio_id' => 135
            ),
            435 =>
            array (
                'id' => 436,
                'parroquia' => 'Las Mercedes',
                'municipio_id' => 136
            ),
            436 =>
            array (
                'id' => 437,
                'parroquia' => 'Cabruta',
                'municipio_id' => 136
            ),
            437 =>
            array (
                'id' => 438,
                'parroquia' => 'Santa Rita de Manapire',
                'municipio_id' => 136
            ),
            438 =>
            array (
                'id' => 439,
                'parroquia' => 'Valle de la Pascua',
                'municipio_id' => 137
            ),
            439 =>
            array (
                'id' => 440,
                'parroquia' => 'Espino',
                'municipio_id' => 137
            ),
            440 =>
            array (
                'id' => 441,
                'parroquia' => 'San José de Unare',
                'municipio_id' => 138
            ),
            441 =>
            array (
                'id' => 442,
                'parroquia' => 'Zaraza',
                'municipio_id' => 138
            ),
            442 =>
            array (
                'id' => 443,
                'parroquia' => 'San José de Tiznados',
                'municipio_id' => 139
            ),
            443 =>
            array (
                'id' => 444,
                'parroquia' => 'San Francisco de Tiznados',
                'municipio_id' => 139
            ),
            444 =>
            array (
                'id' => 445,
                'parroquia' => 'San Lorenzo de Tiznados',
                'municipio_id' => 139
            ),
            445 =>
            array (
                'id' => 446,
                'parroquia' => 'Ortiz',
                'municipio_id' => 139
            ),
            446 =>
            array (
                'id' => 447,
                'parroquia' => 'Guayabal',
                'municipio_id' => 140
            ),
            447 =>
            array (
                'id' => 448,
                'parroquia' => 'Cazorla',
                'municipio_id' => 140
            ),
            448 =>
            array (
                'id' => 449,
                'parroquia' => 'San José de Guaribe',
                'municipio_id' => 141
            ),
            449 =>
            array (
                'id' => 450,
                'parroquia' => 'Uveral',
                'municipio_id' => 141
            ),
            450 =>
            array (
                'id' => 451,
                'parroquia' => 'Santa María de Ipire',
                'municipio_id' => 142
            ),
            451 =>
            array (
                'id' => 452,
                'parroquia' => 'Altamira',
                'municipio_id' => 142
            ),
            452 =>
            array (
                'id' => 453,
                'parroquia' => 'El Calvario',
                'municipio_id' => 143
            ),
            453 =>
            array (
                'id' => 454,
                'parroquia' => 'El Rastro',
                'municipio_id' => 143
            ),
            454 =>
            array (
                'id' => 455,
                'parroquia' => 'Guardatinajas',
                'municipio_id' => 143
            ),
            455 =>
            array (
                'id' => 456,
                'parroquia' => 'Capital Urbana Calabozo',
                'municipio_id' => 143
            ),
            456 =>
            array (
                'id' => 457,
                'parroquia' => 'Quebrada Honda de Guache',
                'municipio_id' => 144
            ),
            457 =>
            array (
                'id' => 458,
                'parroquia' => 'Pío Tamayo',
                'municipio_id' => 144
            ),
            458 =>
            array (
                'id' => 459,
                'parroquia' => 'Yacambú',
                'municipio_id' => 144
            ),
            459 =>
            array (
                'id' => 460,
                'parroquia' => 'Fréitez',
                'municipio_id' => 145
            ),
            460 =>
            array (
                'id' => 461,
                'parroquia' => 'José María Blanco',
                'municipio_id' => 145
            ),
            461 =>
            array (
                'id' => 462,
                'parroquia' => 'Catedral',
                'municipio_id' => 146
            ),
            462 =>
            array (
                'id' => 463,
                'parroquia' => 'Concepción',
                'municipio_id' => 146
            ),
            463 =>
            array (
                'id' => 464,
                'parroquia' => 'El Cují',
                'municipio_id' => 146
            ),
            464 =>
            array (
                'id' => 465,
                'parroquia' => 'Juan de Villegas',
                'municipio_id' => 146
            ),
            465 =>
            array (
                'id' => 466,
                'parroquia' => 'Santa Rosa',
                'municipio_id' => 146
            ),
            466 =>
            array (
                'id' => 467,
                'parroquia' => 'Tamaca',
                'municipio_id' => 146
            ),
            467 =>
            array (
                'id' => 468,
                'parroquia' => 'Unión',
                'municipio_id' => 146
            ),
            468 =>
            array (
                'id' => 469,
                'parroquia' => 'Aguedo Felipe Alvarado',
                'municipio_id' => 146
            ),
            469 =>
            array (
                'id' => 470,
                'parroquia' => 'Buena Vista',
                'municipio_id' => 146
            ),
            470 =>
            array (
                'id' => 471,
                'parroquia' => 'Juárez',
                'municipio_id' => 146
            ),
            471 =>
            array (
                'id' => 472,
                'parroquia' => 'Juan Bautista Rodríguez',
                'municipio_id' => 147
            ),
            472 =>
            array (
                'id' => 473,
                'parroquia' => 'Cuara',
                'municipio_id' => 147
            ),
            473 =>
            array (
                'id' => 474,
                'parroquia' => 'Diego de Lozada',
                'municipio_id' => 147
            ),
            474 =>
            array (
                'id' => 475,
                'parroquia' => 'Paraíso de San José',
                'municipio_id' => 147
            ),
            475 =>
            array (
                'id' => 476,
                'parroquia' => 'San Miguel',
                'municipio_id' => 147
            ),
            476 =>
            array (
                'id' => 477,
                'parroquia' => 'Tintorero',
                'municipio_id' => 147
            ),
            477 =>
            array (
                'id' => 478,
                'parroquia' => 'José Bernardo Dorante',
                'municipio_id' => 147
            ),
            478 =>
            array (
                'id' => 479,
                'parroquia' => 'Coronel Mariano Peraza ',
                'municipio_id' => 147
            ),
            479 =>
            array (
                'id' => 480,
                'parroquia' => 'Bolívar',
                'municipio_id' => 148
            ),
            480 =>
            array (
                'id' => 481,
                'parroquia' => 'Anzoátegui',
                'municipio_id' => 148
            ),
            481 =>
            array (
                'id' => 482,
                'parroquia' => 'Guarico',
                'municipio_id' => 148
            ),
            482 =>
            array (
                'id' => 483,
                'parroquia' => 'Hilario Luna y Luna',
                'municipio_id' => 148
            ),
            483 =>
            array (
                'id' => 484,
                'parroquia' => 'Humocaro Alto',
                'municipio_id' => 148
            ),
            484 =>
            array (
                'id' => 485,
                'parroquia' => 'Humocaro Bajo',
                'municipio_id' => 148
            ),
            485 =>
            array (
                'id' => 486,
                'parroquia' => 'La Candelaria',
                'municipio_id' => 148
            ),
            486 =>
            array (
                'id' => 487,
                'parroquia' => 'Morán',
                'municipio_id' => 148
            ),
            487 =>
            array (
                'id' => 488,
                'parroquia' => 'Cabudare',
                'municipio_id' => 149
            ),
            488 =>
            array (
                'id' => 489,
                'parroquia' => 'José Gregorio Bastidas',
                'municipio_id' => 149
            ),
            489 =>
            array (
                'id' => 490,
                'parroquia' => 'Agua Viva',
                'municipio_id' => 149
            ),
            490 =>
            array (
                'id' => 491,
                'parroquia' => 'Sarare',
                'municipio_id' => 150
            ),
            491 =>
            array (
                'id' => 492,
                'parroquia' => 'Buría',
                'municipio_id' => 150
            ),
            492 =>
            array (
                'id' => 493,
                'parroquia' => 'Gustavo Vegas León',
                'municipio_id' => 150
            ),
            493 =>
            array (
                'id' => 494,
                'parroquia' => 'Trinidad Samuel',
                'municipio_id' => 151
            ),
            494 =>
            array (
                'id' => 495,
                'parroquia' => 'Antonio Díaz',
                'municipio_id' => 151
            ),
            495 =>
            array (
                'id' => 496,
                'parroquia' => 'Camacaro',
                'municipio_id' => 151
            ),
            496 =>
            array (
                'id' => 497,
                'parroquia' => 'Castañeda',
                'municipio_id' => 151
            ),
            497 =>
            array (
                'id' => 498,
                'parroquia' => 'Cecilio Zubillaga',
                'municipio_id' => 151
            ),
            498 =>
            array (
                'id' => 499,
                'parroquia' => 'Chiquinquirá',
                'municipio_id' => 151
            ),
            499 =>
            array (
                'id' => 500,
                'parroquia' => 'El Blanco',
                'municipio_id' => 151
            ),
        ));
        \DB::table('parroquias')->insert(array (
            0 =>
            array (
                'id' => 501,
                'parroquia' => 'Espinoza de los Monteros',
                'municipio_id' => 151
            ),
            1 =>
            array (
                'id' => 502,
                'parroquia' => 'Lara',
                'municipio_id' => 151
            ),
            2 =>
            array (
                'id' => 503,
                'parroquia' => 'Las Mercedes',
                'municipio_id' => 151
            ),
            3 =>
            array (
                'id' => 504,
                'parroquia' => 'Manuel Morillo',
                'municipio_id' => 151
            ),
            4 =>
            array (
                'id' => 505,
                'parroquia' => 'Montaña Verde',
                'municipio_id' => 151
            ),
            5 =>
            array (
                'id' => 506,
                'parroquia' => 'Montes de Oca',
                'municipio_id' => 151
            ),
            6 =>
            array (
                'id' => 507,
                'parroquia' => 'Torres',
                'municipio_id' => 151
            ),
            7 =>
            array (
                'id' => 508,
                'parroquia' => 'Heriberto Arroyo',
                'municipio_id' => 151
            ),
            8 =>
            array (
                'id' => 509,
                'parroquia' => 'Reyes Vargas',
                'municipio_id' => 151
            ),
            9 =>
            array (
                'id' => 510,
                'parroquia' => 'Altagracia',
                'municipio_id' => 151
            ),
            10 =>
            array (
                'id' => 511,
                'parroquia' => 'Siquisique',
                'municipio_id' => 152
            ),
            11 =>
            array (
                'id' => 512,
                'parroquia' => 'Moroturo',
                'municipio_id' => 152
            ),
            12 =>
            array (
                'id' => 513,
                'parroquia' => 'San Miguel',
                'municipio_id' => 152
            ),
            13 =>
            array (
                'id' => 514,
                'parroquia' => 'Xaguas',
                'municipio_id' => 152
            ),
            14 =>
            array (
                'id' => 515,
                'parroquia' => 'Presidente Betancourt',
                'municipio_id' => 179
            ),
            15 =>
            array (
                'id' => 516,
                'parroquia' => 'Presidente Páez',
                'municipio_id' => 179
            ),
            16 =>
            array (
                'id' => 517,
                'parroquia' => 'Presidente Rómulo Gallegos',
                'municipio_id' => 179
            ),
            17 =>
            array (
                'id' => 518,
                'parroquia' => 'Gabriel Picón González',
                'municipio_id' => 179
            ),
            18 =>
            array (
                'id' => 519,
                'parroquia' => 'Héctor Amable Mora',
                'municipio_id' => 179
            ),
            19 =>
            array (
                'id' => 520,
                'parroquia' => 'José Nucete Sardi',
                'municipio_id' => 179
            ),
            20 =>
            array (
                'id' => 521,
                'parroquia' => 'Pulido Méndez',
                'municipio_id' => 179
            ),
            21 =>
            array (
                'id' => 522,
                'parroquia' => 'La Azulita',
                'municipio_id' => 180
            ),
            22 =>
            array (
                'id' => 523,
                'parroquia' => 'Santa Cruz de Mora',
                'municipio_id' => 181
            ),
            23 =>
            array (
                'id' => 524,
                'parroquia' => 'Mesa Bolívar',
                'municipio_id' => 181
            ),
            24 =>
            array (
                'id' => 525,
                'parroquia' => 'Mesa de Las Palmas',
                'municipio_id' => 181
            ),
            25 =>
            array (
                'id' => 526,
                'parroquia' => 'Aricagua',
                'municipio_id' => 182
            ),
            26 =>
            array (
                'id' => 527,
                'parroquia' => 'San Antonio',
                'municipio_id' => 182
            ),
            27 =>
            array (
                'id' => 528,
                'parroquia' => 'Canagua',
                'municipio_id' => 183
            ),
            28 =>
            array (
                'id' => 529,
                'parroquia' => 'Capurí',
                'municipio_id' => 183
            ),
            29 =>
            array (
                'id' => 530,
                'parroquia' => 'Chacantá',
                'municipio_id' => 183
            ),
            30 =>
            array (
                'id' => 531,
                'parroquia' => 'El Molino',
                'municipio_id' => 183
            ),
            31 =>
            array (
                'id' => 532,
                'parroquia' => 'Guaimaral',
                'municipio_id' => 183
            ),
            32 =>
            array (
                'id' => 533,
                'parroquia' => 'Mucutuy',
                'municipio_id' => 183
            ),
            33 =>
            array (
                'id' => 534,
                'parroquia' => 'Mucuchachí',
                'municipio_id' => 183
            ),
            34 =>
            array (
                'id' => 535,
                'parroquia' => 'Fernández Peña',
                'municipio_id' => 184
            ),
            35 =>
            array (
                'id' => 536,
                'parroquia' => 'Matriz',
                'municipio_id' => 184
            ),
            36 =>
            array (
                'id' => 537,
                'parroquia' => 'Montalbán',
                'municipio_id' => 184
            ),
            37 =>
            array (
                'id' => 538,
                'parroquia' => 'Acequias',
                'municipio_id' => 184
            ),
            38 =>
            array (
                'id' => 539,
                'parroquia' => 'Jají',
                'municipio_id' => 184
            ),
            39 =>
            array (
                'id' => 540,
                'parroquia' => 'La Mesa',
                'municipio_id' => 184
            ),
            40 =>
            array (
                'id' => 541,
                'parroquia' => 'San José del Sur',
                'municipio_id' => 184
            ),
            41 =>
            array (
                'id' => 542,
                'parroquia' => 'Tucaní',
                'municipio_id' => 185
            ),
            42 =>
            array (
                'id' => 543,
                'parroquia' => 'Florencio Ramírez',
                'municipio_id' => 185
            ),
            43 =>
            array (
                'id' => 544,
                'parroquia' => 'Santo Domingo',
                'municipio_id' => 186
            ),
            44 =>
            array (
                'id' => 545,
                'parroquia' => 'Las Piedras',
                'municipio_id' => 186
            ),
            45 =>
            array (
                'id' => 546,
                'parroquia' => 'Guaraque',
                'municipio_id' => 187
            ),
            46 =>
            array (
                'id' => 547,
                'parroquia' => 'Mesa de Quintero',
                'municipio_id' => 187
            ),
            47 =>
            array (
                'id' => 548,
                'parroquia' => 'Río Negro',
                'municipio_id' => 187
            ),
            48 =>
            array (
                'id' => 549,
                'parroquia' => 'Arapuey',
                'municipio_id' => 188
            ),
            49 =>
            array (
                'id' => 550,
                'parroquia' => 'Palmira',
                'municipio_id' => 188
            ),
            50 =>
            array (
                'id' => 551,
                'parroquia' => 'San Cristóbal de Torondoy',
                'municipio_id' => 189
            ),
            51 =>
            array (
                'id' => 552,
                'parroquia' => 'Torondoy',
                'municipio_id' => 189
            ),
            52 =>
            array (
                'id' => 553,
                'parroquia' => 'Antonio Spinetti Dini',
                'municipio_id' => 190
            ),
            53 =>
            array (
                'id' => 554,
                'parroquia' => 'Arias',
                'municipio_id' => 190
            ),
            54 =>
            array (
                'id' => 555,
                'parroquia' => 'Caracciolo Parra Pérez',
                'municipio_id' => 190
            ),
            55 =>
            array (
                'id' => 556,
                'parroquia' => 'Domingo Peña',
                'municipio_id' => 190
            ),
            56 =>
            array (
                'id' => 557,
                'parroquia' => 'El Llano',
                'municipio_id' => 190
            ),
            57 =>
            array (
                'id' => 558,
                'parroquia' => 'Gonzalo Picón Febres',
                'municipio_id' => 190
            ),
            58 =>
            array (
                'id' => 559,
                'parroquia' => 'Jacinto Plaza',
                'municipio_id' => 190
            ),
            59 =>
            array (
                'id' => 560,
                'parroquia' => 'Juan Rodríguez Suárez',
                'municipio_id' => 190
            ),
            60 =>
            array (
                'id' => 561,
                'parroquia' => 'Lasso de la Vega',
                'municipio_id' => 190
            ),
            61 =>
            array (
                'id' => 562,
                'parroquia' => 'Mariano Picón Salas',
                'municipio_id' => 190
            ),
            62 =>
            array (
                'id' => 563,
                'parroquia' => 'Milla',
                'municipio_id' => 190
            ),
            63 =>
            array (
                'id' => 564,
                'parroquia' => 'Osuna Rodríguez',
                'municipio_id' => 190
            ),
            64 =>
            array (
                'id' => 565,
                'parroquia' => 'Sagrario',
                'municipio_id' => 190
            ),
            65 =>
            array (
                'id' => 566,
                'parroquia' => 'El Morro',
                'municipio_id' => 190
            ),
            66 =>
            array (
                'id' => 567,
                'parroquia' => 'Los Nevados',
                'municipio_id' => 190
            ),
            67 =>
            array (
                'id' => 568,
                'parroquia' => 'Andrés Eloy Blanco',
                'municipio_id' => 191
            ),
            68 =>
            array (
                'id' => 569,
                'parroquia' => 'La Venta',
                'municipio_id' => 191
            ),
            69 =>
            array (
                'id' => 570,
                'parroquia' => 'Piñango',
                'municipio_id' => 191
            ),
            70 =>
            array (
                'id' => 571,
                'parroquia' => 'Timotes',
                'municipio_id' => 191
            ),
            71 =>
            array (
                'id' => 572,
                'parroquia' => 'Eloy Paredes',
                'municipio_id' => 192
            ),
            72 =>
            array (
                'id' => 573,
                'parroquia' => 'San Rafael de Alcázar',
                'municipio_id' => 192
            ),
            73 =>
            array (
                'id' => 574,
                'parroquia' => 'Santa Elena de Arenales',
                'municipio_id' => 192
            ),
            74 =>
            array (
                'id' => 575,
                'parroquia' => 'Santa María de Caparo',
                'municipio_id' => 193
            ),
            75 =>
            array (
                'id' => 576,
                'parroquia' => 'Pueblo Llano',
                'municipio_id' => 194
            ),
            76 =>
            array (
                'id' => 577,
                'parroquia' => 'Cacute',
                'municipio_id' => 195
            ),
            77 =>
            array (
                'id' => 578,
                'parroquia' => 'La Toma',
                'municipio_id' => 195
            ),
            78 =>
            array (
                'id' => 579,
                'parroquia' => 'Mucuchíes',
                'municipio_id' => 195
            ),
            79 =>
            array (
                'id' => 580,
                'parroquia' => 'Mucurubá',
                'municipio_id' => 195
            ),
            80 =>
            array (
                'id' => 581,
                'parroquia' => 'San Rafael',
                'municipio_id' => 195
            ),
            81 =>
            array (
                'id' => 582,
                'parroquia' => 'Gerónimo Maldonado',
                'municipio_id' => 196
            ),
            82 =>
            array (
                'id' => 583,
                'parroquia' => 'Bailadores',
                'municipio_id' => 196
            ),
            83 =>
            array (
                'id' => 584,
                'parroquia' => 'Tabay',
                'municipio_id' => 197
            ),
            84 =>
            array (
                'id' => 585,
                'parroquia' => 'Chiguará',
                'municipio_id' => 198
            ),
            85 =>
            array (
                'id' => 586,
                'parroquia' => 'Estánquez',
                'municipio_id' => 198
            ),
            86 =>
            array (
                'id' => 587,
                'parroquia' => 'Lagunillas',
                'municipio_id' => 198
            ),
            87 =>
            array (
                'id' => 588,
                'parroquia' => 'La Trampa',
                'municipio_id' => 198
            ),
            88 =>
            array (
                'id' => 589,
                'parroquia' => 'Pueblo Nuevo del Sur',
                'municipio_id' => 198
            ),
            89 =>
            array (
                'id' => 590,
                'parroquia' => 'San Juan',
                'municipio_id' => 198
            ),
            90 =>
            array (
                'id' => 591,
                'parroquia' => 'El Amparo',
                'municipio_id' => 199
            ),
            91 =>
            array (
                'id' => 592,
                'parroquia' => 'El Llano',
                'municipio_id' => 199
            ),
            92 =>
            array (
                'id' => 593,
                'parroquia' => 'San Francisco',
                'municipio_id' => 199
            ),
            93 =>
            array (
                'id' => 594,
                'parroquia' => 'Tovar',
                'municipio_id' => 199
            ),
            94 =>
            array (
                'id' => 595,
                'parroquia' => 'Independencia',
                'municipio_id' => 200
            ),
            95 =>
            array (
                'id' => 596,
                'parroquia' => 'María de la Concepción Palacios Blanco',
                'municipio_id' => 200
            ),
            96 =>
            array (
                'id' => 597,
                'parroquia' => 'Nueva Bolivia',
                'municipio_id' => 200
            ),
            97 =>
            array (
                'id' => 598,
                'parroquia' => 'Santa Apolonia',
                'municipio_id' => 200
            ),
            98 =>
            array (
                'id' => 599,
                'parroquia' => 'Caño El Tigre',
                'municipio_id' => 201
            ),
            99 =>
            array (
                'id' => 600,
                'parroquia' => 'Zea',
                'municipio_id' => 201
            ),
            100 =>
            array (
                'id' => 601,
                'parroquia' => 'Aragüita',
                'municipio_id' => 223
            ),
            101 =>
            array (
                'id' => 602,
                'parroquia' => 'Arévalo González',
                'municipio_id' => 223
            ),
            102 =>
            array (
                'id' => 603,
                'parroquia' => 'Capaya',
                'municipio_id' => 223
            ),
            103 =>
            array (
                'id' => 604,
                'parroquia' => 'Caucagua',
                'municipio_id' => 223
            ),
            104 =>
            array (
                'id' => 605,
                'parroquia' => 'Panaquire',
                'municipio_id' => 223
            ),
            105 =>
            array (
                'id' => 606,
                'parroquia' => 'Ribas',
                'municipio_id' => 223
            ),
            106 =>
            array (
                'id' => 607,
                'parroquia' => 'El Café',
                'municipio_id' => 223
            ),
            107 =>
            array (
                'id' => 608,
                'parroquia' => 'Marizapa',
                'municipio_id' => 223
            ),
            108 =>
            array (
                'id' => 609,
                'parroquia' => 'Cumbo',
                'municipio_id' => 224
            ),
            109 =>
            array (
                'id' => 610,
                'parroquia' => 'San José de Barlovento',
                'municipio_id' => 224
            ),
            110 =>
            array (
                'id' => 611,
                'parroquia' => 'El Cafetal',
                'municipio_id' => 225
            ),
            111 =>
            array (
                'id' => 612,
                'parroquia' => 'Las Minas',
                'municipio_id' => 225
            ),
            112 =>
            array (
                'id' => 613,
                'parroquia' => 'Nuestra Señora del Rosario',
                'municipio_id' => 225
            ),
            113 =>
            array (
                'id' => 614,
                'parroquia' => 'Higuerote',
                'municipio_id' => 226
            ),
            114 =>
            array (
                'id' => 615,
                'parroquia' => 'Curiepe',
                'municipio_id' => 226
            ),
            115 =>
            array (
                'id' => 616,
                'parroquia' => 'Tacarigua de Brión',
                'municipio_id' => 226
            ),
            116 =>
            array (
                'id' => 617,
                'parroquia' => 'Mamporal',
                'municipio_id' => 227
            ),
            117 =>
            array (
                'id' => 618,
                'parroquia' => 'Carrizal',
                'municipio_id' => 228
            ),
            118 =>
            array (
                'id' => 619,
                'parroquia' => 'Chacao',
                'municipio_id' => 229
            ),
            119 =>
            array (
                'id' => 620,
                'parroquia' => 'Charallave',
                'municipio_id' => 230
            ),
            120 =>
            array (
                'id' => 621,
                'parroquia' => 'Las Brisas',
                'municipio_id' => 230
            ),
            121 =>
            array (
                'id' => 622,
                'parroquia' => 'El Hatillo',
                'municipio_id' => 231
            ),
            122 =>
            array (
                'id' => 623,
                'parroquia' => 'Altagracia de la Montaña',
                'municipio_id' => 232
            ),
            123 =>
            array (
                'id' => 624,
                'parroquia' => 'Cecilio Acosta',
                'municipio_id' => 232
            ),
            124 =>
            array (
                'id' => 625,
                'parroquia' => 'Los Teques',
                'municipio_id' => 232
            ),
            125 =>
            array (
                'id' => 626,
                'parroquia' => 'El Jarillo',
                'municipio_id' => 232
            ),
            126 =>
            array (
                'id' => 627,
                'parroquia' => 'San Pedro',
                'municipio_id' => 232
            ),
            127 =>
            array (
                'id' => 628,
                'parroquia' => 'Tácata',
                'municipio_id' => 232
            ),
            128 =>
            array (
                'id' => 629,
                'parroquia' => 'Paracotos',
                'municipio_id' => 232
            ),
            129 =>
            array (
                'id' => 630,
                'parroquia' => 'Cartanal',
                'municipio_id' => 233
            ),
            130 =>
            array (
                'id' => 631,
                'parroquia' => 'Santa Teresa del Tuy',
                'municipio_id' => 233
            ),
            131 =>
            array (
                'id' => 632,
                'parroquia' => 'La Democracia',
                'municipio_id' => 234
            ),
            132 =>
            array (
                'id' => 633,
                'parroquia' => 'Ocumare del Tuy',
                'municipio_id' => 234
            ),
            133 =>
            array (
                'id' => 634,
                'parroquia' => 'Santa Bárbara',
                'municipio_id' => 234
            ),
            134 =>
            array (
                'id' => 635,
                'parroquia' => 'San Antonio de los Altos',
                'municipio_id' => 235
            ),
            135 =>
            array (
                'id' => 636,
                'parroquia' => 'Río Chico',
                'municipio_id' => 236
            ),
            136 =>
            array (
                'id' => 637,
                'parroquia' => 'El Guapo',
                'municipio_id' => 236
            ),
            137 =>
            array (
                'id' => 638,
                'parroquia' => 'Tacarigua de la Laguna',
                'municipio_id' => 236
            ),
            138 =>
            array (
                'id' => 639,
                'parroquia' => 'Paparo',
                'municipio_id' => 236
            ),
            139 =>
            array (
                'id' => 640,
                'parroquia' => 'San Fernando del Guapo',
                'municipio_id' => 236
            ),
            140 =>
            array (
                'id' => 641,
                'parroquia' => 'Santa Lucía del Tuy',
                'municipio_id' => 237
            ),
            141 =>
            array (
                'id' => 642,
                'parroquia' => 'Cúpira',
                'municipio_id' => 238
            ),
            142 =>
            array (
                'id' => 643,
                'parroquia' => 'Machurucuto',
                'municipio_id' => 238
            ),
            143 =>
            array (
                'id' => 644,
                'parroquia' => 'Guarenas',
                'municipio_id' => 239
            ),
            144 =>
            array (
                'id' => 645,
                'parroquia' => 'San Antonio de Yare',
                'municipio_id' => 240
            ),
            145 =>
            array (
                'id' => 646,
                'parroquia' => 'San Francisco de Yare',
                'municipio_id' => 240
            ),
            146 =>
            array (
                'id' => 647,
                'parroquia' => 'Leoncio Martínez',
                'municipio_id' => 241
            ),
            147 =>
            array (
                'id' => 648,
                'parroquia' => 'Petare',
                'municipio_id' => 241
            ),
            148 =>
            array (
                'id' => 649,
                'parroquia' => 'Caucagüita',
                'municipio_id' => 241
            ),
            149 =>
            array (
                'id' => 650,
                'parroquia' => 'Filas de Mariche',
                'municipio_id' => 241
            ),
            150 =>
            array (
                'id' => 651,
                'parroquia' => 'La Dolorita',
                'municipio_id' => 241
            ),
            151 =>
            array (
                'id' => 652,
                'parroquia' => 'Cúa',
                'municipio_id' => 242
            ),
            152 =>
            array (
                'id' => 653,
                'parroquia' => 'Nueva Cúa',
                'municipio_id' => 242
            ),
            153 =>
            array (
                'id' => 654,
                'parroquia' => 'Guatire',
                'municipio_id' => 243
            ),
            154 =>
            array (
                'id' => 655,
                'parroquia' => 'Bolívar',
                'municipio_id' => 243
            ),
            155 =>
            array (
                'id' => 656,
                'parroquia' => 'San Antonio de Maturín',
                'municipio_id' => 258
            ),
            156 =>
            array (
                'id' => 657,
                'parroquia' => 'San Francisco de Maturín',
                'municipio_id' => 258
            ),
            157 =>
            array (
                'id' => 658,
                'parroquia' => 'Aguasay',
                'municipio_id' => 259
            ),
            158 =>
            array (
                'id' => 659,
                'parroquia' => 'Caripito',
                'municipio_id' => 260
            ),
            159 =>
            array (
                'id' => 660,
                'parroquia' => 'El Guácharo',
                'municipio_id' => 261
            ),
            160 =>
            array (
                'id' => 661,
                'parroquia' => 'La Guanota',
                'municipio_id' => 261
            ),
            161 =>
            array (
                'id' => 662,
                'parroquia' => 'Sabana de Piedra',
                'municipio_id' => 261
            ),
            162 =>
            array (
                'id' => 663,
                'parroquia' => 'San Agustín',
                'municipio_id' => 261
            ),
            163 =>
            array (
                'id' => 664,
                'parroquia' => 'Teresen',
                'municipio_id' => 261
            ),
            164 =>
            array (
                'id' => 665,
                'parroquia' => 'Caripe',
                'municipio_id' => 261
            ),
            165 =>
            array (
                'id' => 666,
                'parroquia' => 'Areo',
                'municipio_id' => 262
            ),
            166 =>
            array (
                'id' => 667,
                'parroquia' => 'Capital Cedeño',
                'municipio_id' => 262
            ),
            167 =>
            array (
                'id' => 668,
                'parroquia' => 'San Félix de Cantalicio',
                'municipio_id' => 262
            ),
            168 =>
            array (
                'id' => 669,
                'parroquia' => 'Viento Fresco',
                'municipio_id' => 262
            ),
            169 =>
            array (
                'id' => 670,
                'parroquia' => 'El Tejero',
                'municipio_id' => 263
            ),
            170 =>
            array (
                'id' => 671,
                'parroquia' => 'Punta de Mata',
                'municipio_id' => 263
            ),
            171 =>
            array (
                'id' => 672,
                'parroquia' => 'Chaguaramas',
                'municipio_id' => 264
            ),
            172 =>
            array (
                'id' => 673,
                'parroquia' => 'Las Alhuacas',
                'municipio_id' => 264
            ),
            173 =>
            array (
                'id' => 674,
                'parroquia' => 'Tabasca',
                'municipio_id' => 264
            ),
            174 =>
            array (
                'id' => 675,
                'parroquia' => 'Temblador',
                'municipio_id' => 264
            ),
            175 =>
            array (
                'id' => 676,
                'parroquia' => 'Alto de los Godos',
                'municipio_id' => 265
            ),
            176 =>
            array (
                'id' => 677,
                'parroquia' => 'Boquerón',
                'municipio_id' => 265
            ),
            177 =>
            array (
                'id' => 678,
                'parroquia' => 'Las Cocuizas',
                'municipio_id' => 265
            ),
            178 =>
            array (
                'id' => 679,
                'parroquia' => 'La Cruz',
                'municipio_id' => 265
            ),
            179 =>
            array (
                'id' => 680,
                'parroquia' => 'San Simón',
                'municipio_id' => 265
            ),
            180 =>
            array (
                'id' => 681,
                'parroquia' => 'El Corozo',
                'municipio_id' => 265
            ),
            181 =>
            array (
                'id' => 682,
                'parroquia' => 'El Furrial',
                'municipio_id' => 265
            ),
            182 =>
            array (
                'id' => 683,
                'parroquia' => 'Jusepín',
                'municipio_id' => 265
            ),
            183 =>
            array (
                'id' => 684,
                'parroquia' => 'La Pica',
                'municipio_id' => 265
            ),
            184 =>
            array (
                'id' => 685,
                'parroquia' => 'San Vicente',
                'municipio_id' => 265
            ),
            185 =>
            array (
                'id' => 686,
                'parroquia' => 'Aparicio',
                'municipio_id' => 266
            ),
            186 =>
            array (
                'id' => 687,
                'parroquia' => 'Aragua de Maturín',
                'municipio_id' => 266
            ),
            187 =>
            array (
                'id' => 688,
                'parroquia' => 'Chaguamal',
                'municipio_id' => 266
            ),
            188 =>
            array (
                'id' => 689,
                'parroquia' => 'El Pinto',
                'municipio_id' => 266
            ),
            189 =>
            array (
                'id' => 690,
                'parroquia' => 'Guanaguana',
                'municipio_id' => 266
            ),
            190 =>
            array (
                'id' => 691,
                'parroquia' => 'La Toscana',
                'municipio_id' => 266
            ),
            191 =>
            array (
                'id' => 692,
                'parroquia' => 'Taguaya',
                'municipio_id' => 266
            ),
            192 =>
            array (
                'id' => 693,
                'parroquia' => 'Cachipo',
                'municipio_id' => 267
            ),
            193 =>
            array (
                'id' => 694,
                'parroquia' => 'Quiriquire',
                'municipio_id' => 267
            ),
            194 =>
            array (
                'id' => 695,
                'parroquia' => 'Santa Bárbara',
                'municipio_id' => 268
            ),
            195 =>
            array (
                'id' => 696,
                'parroquia' => 'Barrancas',
                'municipio_id' => 269
            ),
            196 =>
            array (
                'id' => 697,
                'parroquia' => 'Los Barrancos de Fajardo',
                'municipio_id' => 269
            ),
            197 =>
            array (
                'id' => 698,
                'parroquia' => 'Uracoa',
                'municipio_id' => 270
            ),
            198 =>
            array (
                'id' => 699,
                'parroquia' => 'Antolín del Campo',
                'municipio_id' => 271
            ),
            199 =>
            array (
                'id' => 700,
                'parroquia' => 'Arismendi',
                'municipio_id' => 272
            ),
            200 =>
            array (
                'id' => 701,
                'parroquia' => 'García',
                'municipio_id' => 273
            ),
            201 =>
            array (
                'id' => 702,
                'parroquia' => 'Francisco Fajardo',
                'municipio_id' => 273
            ),
            202 =>
            array (
                'id' => 703,
                'parroquia' => 'Bolívar',
                'municipio_id' => 274
            ),
            203 =>
            array (
                'id' => 704,
                'parroquia' => 'Guevara',
                'municipio_id' => 274
            ),
            204 =>
            array (
                'id' => 705,
                'parroquia' => 'Matasiete',
                'municipio_id' => 274
            ),
            205 =>
            array (
                'id' => 706,
                'parroquia' => 'Santa Ana',
                'municipio_id' => 274
            ),
            206 =>
            array (
                'id' => 707,
                'parroquia' => 'Sucre',
                'municipio_id' => 274
            ),
            207 =>
            array (
                'id' => 708,
                'parroquia' => 'Aguirre',
                'municipio_id' => 275
            ),
            208 =>
            array (
                'id' => 709,
                'parroquia' => 'Maneiro',
                'municipio_id' => 275
            ),
            209 =>
            array (
                'id' => 710,
                'parroquia' => 'Adrián',
                'municipio_id' => 276
            ),
            210 =>
            array (
                'id' => 711,
                'parroquia' => 'Juan Griego',
                'municipio_id' => 276
            ),
            211 =>
            array (
                'id' => 712,
                'parroquia' => 'Yaguaraparo',
                'municipio_id' => 276
            ),
            212 =>
            array (
                'id' => 713,
                'parroquia' => 'Porlamar',
                'municipio_id' => 277
            ),
            213 =>
            array (
                'id' => 714,
                'parroquia' => 'San Francisco de Macanao',
                'municipio_id' => 278
            ),
            214 =>
            array (
                'id' => 715,
                'parroquia' => 'Boca de Río',
                'municipio_id' => 278
            ),
            215 =>
            array (
                'id' => 716,
                'parroquia' => 'Tubores',
                'municipio_id' => 279
            ),
            216 =>
            array (
                'id' => 717,
                'parroquia' => 'Los Baleales',
                'municipio_id' => 279
            ),
            217 =>
            array (
                'id' => 718,
                'parroquia' => 'Vicente Fuentes',
                'municipio_id' => 280
            ),
            218 =>
            array (
                'id' => 719,
                'parroquia' => 'Villalba',
                'municipio_id' => 280
            ),
            219 =>
            array (
                'id' => 720,
                'parroquia' => 'San Juan Bautista',
                'municipio_id' => 281
            ),
            220 =>
            array (
                'id' => 721,
                'parroquia' => 'Zabala',
                'municipio_id' => 281
            ),
            221 =>
            array (
                'id' => 722,
                'parroquia' => 'Capital Araure',
                'municipio_id' => 283
            ),
            222 =>
            array (
                'id' => 723,
                'parroquia' => 'Río Acarigua',
                'municipio_id' => 283
            ),
            223 =>
            array (
                'id' => 724,
                'parroquia' => 'Capital Esteller',
                'municipio_id' => 284
            ),
            224 =>
            array (
                'id' => 725,
                'parroquia' => 'Uveral',
                'municipio_id' => 284
            ),
            225 =>
            array (
                'id' => 726,
                'parroquia' => 'Guanare',
                'municipio_id' => 285
            ),
            226 =>
            array (
                'id' => 727,
                'parroquia' => 'Córdoba',
                'municipio_id' => 285
            ),
            227 =>
            array (
                'id' => 728,
                'parroquia' => 'San José de la Montaña',
                'municipio_id' => 285
            ),
            228 =>
            array (
                'id' => 729,
                'parroquia' => 'San Juan de Guanaguanare',
                'municipio_id' => 285
            ),
            229 =>
            array (
                'id' => 730,
                'parroquia' => 'Virgen de la Coromoto',
                'municipio_id' => 285
            ),
            230 =>
            array (
                'id' => 731,
                'parroquia' => 'Guanarito',
                'municipio_id' => 286
            ),
            231 =>
            array (
                'id' => 732,
                'parroquia' => 'Trinidad de la Capilla',
                'municipio_id' => 286
            ),
            232 =>
            array (
                'id' => 733,
                'parroquia' => 'Divina Pastora',
                'municipio_id' => 286
            ),
            233 =>
            array (
                'id' => 734,
                'parroquia' => 'Monseñor José Vicente de Unda',
                'municipio_id' => 287
            ),
            234 =>
            array (
                'id' => 735,
                'parroquia' => 'Peña Blanca',
                'municipio_id' => 287
            ),
            235 =>
            array (
                'id' => 736,
                'parroquia' => 'Capital Ospino',
                'municipio_id' => 288
            ),
            236 =>
            array (
                'id' => 737,
                'parroquia' => 'Aparición',
                'municipio_id' => 288
            ),
            237 =>
            array (
                'id' => 738,
                'parroquia' => 'La Estación',
                'municipio_id' => 288
            ),
            238 =>
            array (
                'id' => 739,
                'parroquia' => 'Páez',
                'municipio_id' => 289
            ),
            239 =>
            array (
                'id' => 740,
                'parroquia' => 'Payara',
                'municipio_id' => 289
            ),
            240 =>
            array (
                'id' => 741,
                'parroquia' => 'Pimpinela',
                'municipio_id' => 289
            ),
            241 =>
            array (
                'id' => 742,
                'parroquia' => 'Ramón Peraza',
                'municipio_id' => 289
            ),
            242 =>
            array (
                'id' => 743,
                'parroquia' => 'Papelón',
                'municipio_id' => 290
            ),
            243 =>
            array (
                'id' => 744,
                'parroquia' => 'Caño Delgadito',
                'municipio_id' => 290
            ),
            244 =>
            array (
                'id' => 745,
                'parroquia' => 'San Genaro de Boconoito',
                'municipio_id' => 291
            ),
            245 =>
            array (
                'id' => 746,
                'parroquia' => 'Antolín Tovar',
                'municipio_id' => 291
            ),
            246 =>
            array (
                'id' => 747,
                'parroquia' => 'San Rafael de Onoto',
                'municipio_id' => 292
            ),
            247 =>
            array (
                'id' => 748,
                'parroquia' => 'Santa Fe',
                'municipio_id' => 292
            ),
            248 =>
            array (
                'id' => 749,
                'parroquia' => 'Thermo Morles',
                'municipio_id' => 292
            ),
            249 =>
            array (
                'id' => 750,
                'parroquia' => 'Santa Rosalía',
                'municipio_id' => 293
            ),
            250 =>
            array (
                'id' => 751,
                'parroquia' => 'Florida',
                'municipio_id' => 293
            ),
            251 =>
            array (
                'id' => 752,
                'parroquia' => 'Sucre',
                'municipio_id' => 294
            ),
            252 =>
            array (
                'id' => 753,
                'parroquia' => 'Concepción',
                'municipio_id' => 294
            ),
            253 =>
            array (
                'id' => 754,
                'parroquia' => 'San Rafael de Palo Alzado',
                'municipio_id' => 294
            ),
            254 =>
            array (
                'id' => 755,
                'parroquia' => 'Uvencio Antonio Velásquez',
                'municipio_id' => 294
            ),
            255 =>
            array (
                'id' => 756,
                'parroquia' => 'San José de Saguaz',
                'municipio_id' => 294
            ),
            256 =>
            array (
                'id' => 757,
                'parroquia' => 'Villa Rosa',
                'municipio_id' => 294
            ),
            257 =>
            array (
                'id' => 758,
                'parroquia' => 'Turén',
                'municipio_id' => 295
            ),
            258 =>
            array (
                'id' => 759,
                'parroquia' => 'Canelones',
                'municipio_id' => 295
            ),
            259 =>
            array (
                'id' => 760,
                'parroquia' => 'Santa Cruz',
                'municipio_id' => 295
            ),
            260 =>
            array (
                'id' => 761,
                'parroquia' => 'San Isidro Labrador',
                'municipio_id' => 295
            ),
            261 =>
            array (
                'id' => 762,
                'parroquia' => 'Mariño',
                'municipio_id' => 296
            ),
            262 =>
            array (
                'id' => 763,
                'parroquia' => 'Rómulo Gallegos',
                'municipio_id' => 296
            ),
            263 =>
            array (
                'id' => 764,
                'parroquia' => 'San José de Aerocuar',
                'municipio_id' => 297
            ),
            264 =>
            array (
                'id' => 765,
                'parroquia' => 'Tavera Acosta',
                'municipio_id' => 297
            ),
            265 =>
            array (
                'id' => 766,
                'parroquia' => 'Río Caribe',
                'municipio_id' => 298
            ),
            266 =>
            array (
                'id' => 767,
                'parroquia' => 'Antonio José de Sucre',
                'municipio_id' => 298
            ),
            267 =>
            array (
                'id' => 768,
                'parroquia' => 'El Morro de Puerto Santo',
                'municipio_id' => 298
            ),
            268 =>
            array (
                'id' => 769,
                'parroquia' => 'Puerto Santo',
                'municipio_id' => 298
            ),
            269 =>
            array (
                'id' => 770,
                'parroquia' => 'San Juan de las Galdonas',
                'municipio_id' => 298
            ),
            270 =>
            array (
                'id' => 771,
                'parroquia' => 'El Pilar',
                'municipio_id' => 299
            ),
            271 =>
            array (
                'id' => 772,
                'parroquia' => 'El Rincón',
                'municipio_id' => 299
            ),
            272 =>
            array (
                'id' => 773,
                'parroquia' => 'General Francisco Antonio Váquez',
                'municipio_id' => 299
            ),
            273 =>
            array (
                'id' => 774,
                'parroquia' => 'Guaraúnos',
                'municipio_id' => 299
            ),
            274 =>
            array (
                'id' => 775,
                'parroquia' => 'Tunapuicito',
                'municipio_id' => 299
            ),
            275 =>
            array (
                'id' => 776,
                'parroquia' => 'Unión',
                'municipio_id' => 299
            ),
            276 =>
            array (
                'id' => 777,
                'parroquia' => 'Santa Catalina',
                'municipio_id' => 300
            ),
            277 =>
            array (
                'id' => 778,
                'parroquia' => 'Santa Rosa',
                'municipio_id' => 300
            ),
            278 =>
            array (
                'id' => 779,
                'parroquia' => 'Santa Teresa',
                'municipio_id' => 300
            ),
            279 =>
            array (
                'id' => 780,
                'parroquia' => 'Bolívar',
                'municipio_id' => 300
            ),
            280 =>
            array (
                'id' => 781,
                'parroquia' => 'Maracapana',
                'municipio_id' => 300
            ),
            281 =>
            array (
                'id' => 782,
                'parroquia' => 'Libertad',
                'municipio_id' => 302
            ),
            282 =>
            array (
                'id' => 783,
                'parroquia' => 'El Paujil',
                'municipio_id' => 302
            ),
            283 =>
            array (
                'id' => 784,
                'parroquia' => 'Yaguaraparo',
                'municipio_id' => 302
            ),
            284 =>
            array (
                'id' => 785,
                'parroquia' => 'Cruz Salmerón Acosta',
                'municipio_id' => 303
            ),
            285 =>
            array (
                'id' => 786,
                'parroquia' => 'Chacopata',
                'municipio_id' => 303
            ),
            286 =>
            array (
                'id' => 787,
                'parroquia' => 'Manicuare',
                'municipio_id' => 303
            ),
            287 =>
            array (
                'id' => 788,
                'parroquia' => 'Tunapuy',
                'municipio_id' => 304
            ),
            288 =>
            array (
                'id' => 789,
                'parroquia' => 'Campo Elías',
                'municipio_id' => 304
            ),
            289 =>
            array (
                'id' => 790,
                'parroquia' => 'Irapa',
                'municipio_id' => 305
            ),
            290 =>
            array (
                'id' => 791,
                'parroquia' => 'Campo Claro',
                'municipio_id' => 305
            ),
            291 =>
            array (
                'id' => 792,
                'parroquia' => 'Maraval',
                'municipio_id' => 305
            ),
            292 =>
            array (
                'id' => 793,
                'parroquia' => 'San Antonio de Irapa',
                'municipio_id' => 305
            ),
            293 =>
            array (
                'id' => 794,
                'parroquia' => 'Soro',
                'municipio_id' => 305
            ),
            294 =>
            array (
                'id' => 795,
                'parroquia' => 'Mejía',
                'municipio_id' => 306
            ),
            295 =>
            array (
                'id' => 796,
                'parroquia' => 'Cumanacoa',
                'municipio_id' => 307
            ),
            296 =>
            array (
                'id' => 797,
                'parroquia' => 'Arenas',
                'municipio_id' => 307
            ),
            297 =>
            array (
                'id' => 798,
                'parroquia' => 'Aricagua',
                'municipio_id' => 307
            ),
            298 =>
            array (
                'id' => 799,
                'parroquia' => 'Cogollar',
                'municipio_id' => 307
            ),
            299 =>
            array (
                'id' => 800,
                'parroquia' => 'San Fernando',
                'municipio_id' => 307
            ),
            300 =>
            array (
                'id' => 801,
                'parroquia' => 'San Lorenzo',
                'municipio_id' => 307
            ),
            301 =>
            array (
                'id' => 802,
            'parroquia' => 'Villa Frontado (Muelle de Cariaco)',
                'municipio_id' => 308
            ),
            302 =>
            array (
                'id' => 803,
                'parroquia' => 'Catuaro',
                'municipio_id' => 308
            ),
            303 =>
            array (
                'id' => 804,
                'parroquia' => 'Rendón',
                'municipio_id' => 308
            ),
            304 =>
            array (
                'id' => 805,
                'parroquia' => 'San Cruz',
                'municipio_id' => 308
            ),
            305 =>
            array (
                'id' => 806,
                'parroquia' => 'Santa María',
                'municipio_id' => 308
            ),
            306 =>
            array (
                'id' => 807,
                'parroquia' => 'Altagracia',
                'municipio_id' => 309
            ),
            307 =>
            array (
                'id' => 808,
                'parroquia' => 'Santa Inés',
                'municipio_id' => 309
            ),
            308 =>
            array (
                'id' => 809,
                'parroquia' => 'Valentín Valiente',
                'municipio_id' => 309
            ),
            309 =>
            array (
                'id' => 810,
                'parroquia' => 'Ayacucho',
                'municipio_id' => 309
            ),
            310 =>
            array (
                'id' => 811,
                'parroquia' => 'San Juan',
                'municipio_id' => 309
            ),
            311 =>
            array (
                'id' => 812,
                'parroquia' => 'Raúl Leoni',
                'municipio_id' => 309
            ),
            312 =>
            array (
                'id' => 813,
                'parroquia' => 'Gran Mariscal',
                'municipio_id' => 309
            ),
            313 =>
            array (
                'id' => 814,
                'parroquia' => 'Cristóbal Colón',
                'municipio_id' => 310
            ),
            314 =>
            array (
                'id' => 815,
                'parroquia' => 'Bideau',
                'municipio_id' => 310
            ),
            315 =>
            array (
                'id' => 816,
                'parroquia' => 'Punta de Piedras',
                'municipio_id' => 310
            ),
            316 =>
            array (
                'id' => 817,
                'parroquia' => 'Güiria',
                'municipio_id' => 310
            ),
            317 =>
            array (
                'id' => 818,
                'parroquia' => 'Andrés Bello',
                'municipio_id' => 341
            ),
            318 =>
            array (
                'id' => 819,
                'parroquia' => 'Antonio Rómulo Costa',
                'municipio_id' => 342
            ),
            319 =>
            array (
                'id' => 820,
                'parroquia' => 'Ayacucho',
                'municipio_id' => 343
            ),
            320 =>
            array (
                'id' => 821,
                'parroquia' => 'Rivas Berti',
                'municipio_id' => 343
            ),
            321 =>
            array (
                'id' => 822,
                'parroquia' => 'San Pedro del Río',
                'municipio_id' => 343
            ),
            322 =>
            array (
                'id' => 823,
                'parroquia' => 'Bolívar',
                'municipio_id' => 344
            ),
            323 =>
            array (
                'id' => 824,
                'parroquia' => 'Palotal',
                'municipio_id' => 344
            ),
            324 =>
            array (
                'id' => 825,
                'parroquia' => 'General Juan Vicente Gómez',
                'municipio_id' => 344
            ),
            325 =>
            array (
                'id' => 826,
                'parroquia' => 'Isaías Medina Angarita',
                'municipio_id' => 344
            ),
            326 =>
            array (
                'id' => 827,
                'parroquia' => 'Cárdenas',
                'municipio_id' => 345
            ),
            327 =>
            array (
                'id' => 828,
                'parroquia' => 'Amenodoro Ángel Lamus',
                'municipio_id' => 345
            ),
            328 =>
            array (
                'id' => 829,
                'parroquia' => 'La Florida',
                'municipio_id' => 345
            ),
            329 =>
            array (
                'id' => 830,
                'parroquia' => 'Córdoba',
                'municipio_id' => 346
            ),
            330 =>
            array (
                'id' => 831,
                'parroquia' => 'Fernández Feo',
                'municipio_id' => 347
            ),
            331 =>
            array (
                'id' => 832,
                'parroquia' => 'Alberto Adriani',
                'municipio_id' => 347
            ),
            332 =>
            array (
                'id' => 833,
                'parroquia' => 'Santo Domingo',
                'municipio_id' => 347
            ),
            333 =>
            array (
                'id' => 834,
                'parroquia' => 'Francisco de Miranda',
                'municipio_id' => 348
            ),
            334 =>
            array (
                'id' => 835,
                'parroquia' => 'García de Hevia',
                'municipio_id' => 349
            ),
            335 =>
            array (
                'id' => 836,
                'parroquia' => 'Boca de Grita',
                'municipio_id' => 349
            ),
            336 =>
            array (
                'id' => 837,
                'parroquia' => 'José Antonio Páez',
                'municipio_id' => 349
            ),
            337 =>
            array (
                'id' => 838,
                'parroquia' => 'Guásimos',
                'municipio_id' => 350
            ),
            338 =>
            array (
                'id' => 839,
                'parroquia' => 'Independencia',
                'municipio_id' => 351
            ),
            339 =>
            array (
                'id' => 840,
                'parroquia' => 'Juan Germán Roscio',
                'municipio_id' => 351
            ),
            340 =>
            array (
                'id' => 841,
                'parroquia' => 'Román Cárdenas',
                'municipio_id' => 351
            ),
            341 =>
            array (
                'id' => 842,
                'parroquia' => 'Jáuregui',
                'municipio_id' => 352
            ),
            342 =>
            array (
                'id' => 843,
                'parroquia' => 'Emilio Constantino Guerrero',
                'municipio_id' => 352
            ),
            343 =>
            array (
                'id' => 844,
                'parroquia' => 'Monseñor Miguel Antonio Salas',
                'municipio_id' => 352
            ),
            344 =>
            array (
                'id' => 845,
                'parroquia' => 'José María Vargas',
                'municipio_id' => 353
            ),
            345 =>
            array (
                'id' => 846,
                'parroquia' => 'Junín',
                'municipio_id' => 354
            ),
            346 =>
            array (
                'id' => 847,
                'parroquia' => 'La Petrólea',
                'municipio_id' => 354
            ),
            347 =>
            array (
                'id' => 848,
                'parroquia' => 'Quinimarí',
                'municipio_id' => 354
            ),
            348 =>
            array (
                'id' => 849,
                'parroquia' => 'Bramón',
                'municipio_id' => 354
            ),
            349 =>
            array (
                'id' => 850,
                'parroquia' => 'Libertad',
                'municipio_id' => 355
            ),
            350 =>
            array (
                'id' => 851,
                'parroquia' => 'Cipriano Castro',
                'municipio_id' => 355
            ),
            351 =>
            array (
                'id' => 852,
                'parroquia' => 'Manuel Felipe Rugeles',
                'municipio_id' => 355
            ),
            352 =>
            array (
                'id' => 853,
                'parroquia' => 'Libertador',
                'municipio_id' => 356
            ),
            353 =>
            array (
                'id' => 854,
                'parroquia' => 'Doradas',
                'municipio_id' => 356
            ),
            354 =>
            array (
                'id' => 855,
                'parroquia' => 'Emeterio Ochoa',
                'municipio_id' => 356
            ),
            355 =>
            array (
                'id' => 856,
                'parroquia' => 'San Joaquín de Navay',
                'municipio_id' => 356
            ),
            356 =>
            array (
                'id' => 857,
                'parroquia' => 'Lobatera',
                'municipio_id' => 357
            ),
            357 =>
            array (
                'id' => 858,
                'parroquia' => 'Constitución',
                'municipio_id' => 357
            ),
            358 =>
            array (
                'id' => 859,
                'parroquia' => 'Michelena',
                'municipio_id' => 358
            ),
            359 =>
            array (
                'id' => 860,
                'parroquia' => 'Panamericano',
                'municipio_id' => 359
            ),
            360 =>
            array (
                'id' => 861,
                'parroquia' => 'La Palmita',
                'municipio_id' => 359
            ),
            361 =>
            array (
                'id' => 862,
                'parroquia' => 'Pedro María Ureña',
                'municipio_id' => 360
            ),
            362 =>
            array (
                'id' => 863,
                'parroquia' => 'Nueva Arcadia',
                'municipio_id' => 360
            ),
            363 =>
            array (
                'id' => 864,
                'parroquia' => 'Delicias',
                'municipio_id' => 361
            ),
            364 =>
            array (
                'id' => 865,
                'parroquia' => 'Pecaya',
                'municipio_id' => 361
            ),
            365 =>
            array (
                'id' => 866,
                'parroquia' => 'Samuel Darío Maldonado',
                'municipio_id' => 362
            ),
            366 =>
            array (
                'id' => 867,
                'parroquia' => 'Boconó',
                'municipio_id' => 362
            ),
            367 =>
            array (
                'id' => 868,
                'parroquia' => 'Hernández',
                'municipio_id' => 362
            ),
            368 =>
            array (
                'id' => 869,
                'parroquia' => 'La Concordia',
                'municipio_id' => 363
            ),
            369 =>
            array (
                'id' => 870,
                'parroquia' => 'San Juan Bautista',
                'municipio_id' => 363
            ),
            370 =>
            array (
                'id' => 871,
                'parroquia' => 'Pedro María Morantes',
                'municipio_id' => 363
            ),
            371 =>
            array (
                'id' => 872,
                'parroquia' => 'San Sebastián',
                'municipio_id' => 363
            ),
            372 =>
            array (
                'id' => 873,
                'parroquia' => 'Dr. Francisco Romero Lobo',
                'municipio_id' => 363
            ),
            373 =>
            array (
                'id' => 874,
                'parroquia' => 'Seboruco',
                'municipio_id' => 364
            ),
            374 =>
            array (
                'id' => 875,
                'parroquia' => 'Simón Rodríguez',
                'municipio_id' => 365
            ),
            375 =>
            array (
                'id' => 876,
                'parroquia' => 'Sucre',
                'municipio_id' => 366
            ),
            376 =>
            array (
                'id' => 877,
                'parroquia' => 'Eleazar López Contreras',
                'municipio_id' => 366
            ),
            377 =>
            array (
                'id' => 878,
                'parroquia' => 'San Pablo',
                'municipio_id' => 366
            ),
            378 =>
            array (
                'id' => 879,
                'parroquia' => 'Torbes',
                'municipio_id' => 367
            ),
            379 =>
            array (
                'id' => 880,
                'parroquia' => 'Uribante',
                'municipio_id' => 368
            ),
            380 =>
            array (
                'id' => 881,
                'parroquia' => 'Cárdenas',
                'municipio_id' => 368
            ),
            381 =>
            array (
                'id' => 882,
                'parroquia' => 'Juan Pablo Peñalosa',
                'municipio_id' => 368
            ),
            382 =>
            array (
                'id' => 883,
                'parroquia' => 'Potosí',
                'municipio_id' => 368
            ),
            383 =>
            array (
                'id' => 884,
                'parroquia' => 'San Judas Tadeo',
                'municipio_id' => 369
            ),
            384 =>
            array (
                'id' => 885,
                'parroquia' => 'Araguaney',
                'municipio_id' => 370
            ),
            385 =>
            array (
                'id' => 886,
                'parroquia' => 'El Jaguito',
                'municipio_id' => 370
            ),
            386 =>
            array (
                'id' => 887,
                'parroquia' => 'La Esperanza',
                'municipio_id' => 370
            ),
            387 =>
            array (
                'id' => 888,
                'parroquia' => 'Santa Isabel',
                'municipio_id' => 370
            ),
            388 =>
            array (
                'id' => 889,
                'parroquia' => 'Boconó',
                'municipio_id' => 371
            ),
            389 =>
            array (
                'id' => 890,
                'parroquia' => 'El Carmen',
                'municipio_id' => 371
            ),
            390 =>
            array (
                'id' => 891,
                'parroquia' => 'Mosquey',
                'municipio_id' => 371
            ),
            391 =>
            array (
                'id' => 892,
                'parroquia' => 'Ayacucho',
                'municipio_id' => 371
            ),
            392 =>
            array (
                'id' => 893,
                'parroquia' => 'Burbusay',
                'municipio_id' => 371
            ),
            393 =>
            array (
                'id' => 894,
                'parroquia' => 'General Ribas',
                'municipio_id' => 371
            ),
            394 =>
            array (
                'id' => 895,
                'parroquia' => 'Guaramacal',
                'municipio_id' => 371
            ),
            395 =>
            array (
                'id' => 896,
                'parroquia' => 'Vega de Guaramacal',
                'municipio_id' => 371
            ),
            396 =>
            array (
                'id' => 897,
                'parroquia' => 'Monseñor Jáuregui',
                'municipio_id' => 371
            ),
            397 =>
            array (
                'id' => 898,
                'parroquia' => 'Rafael Rangel',
                'municipio_id' => 371
            ),
            398 =>
            array (
                'id' => 899,
                'parroquia' => 'San Miguel',
                'municipio_id' => 371
            ),
            399 =>
            array (
                'id' => 900,
                'parroquia' => 'San José',
                'municipio_id' => 371
            ),
            400 =>
            array (
                'id' => 901,
                'parroquia' => 'Sabana Grande',
                'municipio_id' => 372
            ),
            401 =>
            array (
                'id' => 902,
                'parroquia' => 'Cheregüé',
                'municipio_id' => 372
            ),
            402 =>
            array (
                'id' => 903,
                'parroquia' => 'Granados',
                'municipio_id' => 372
            ),
            403 =>
            array (
                'id' => 904,
                'parroquia' => 'Arnoldo Gabaldón',
                'municipio_id' => 373
            ),
            404 =>
            array (
                'id' => 905,
                'parroquia' => 'Bolivia',
                'municipio_id' => 373
            ),
            405 =>
            array (
                'id' => 906,
                'parroquia' => 'Carrillo',
                'municipio_id' => 373
            ),
            406 =>
            array (
                'id' => 907,
                'parroquia' => 'Cegarra',
                'municipio_id' => 373
            ),
            407 =>
            array (
                'id' => 908,
                'parroquia' => 'Chejendé',
                'municipio_id' => 373
            ),
            408 =>
            array (
                'id' => 909,
                'parroquia' => 'Manuel Salvador Ulloa',
                'municipio_id' => 373
            ),
            409 =>
            array (
                'id' => 910,
                'parroquia' => 'San José',
                'municipio_id' => 373
            ),
            410 =>
            array (
                'id' => 911,
                'parroquia' => 'Carache',
                'municipio_id' => 374
            ),
            411 =>
            array (
                'id' => 912,
                'parroquia' => 'La Concepción',
                'municipio_id' => 374
            ),
            412 =>
            array (
                'id' => 913,
                'parroquia' => 'Cuicas',
                'municipio_id' => 374
            ),
            413 =>
            array (
                'id' => 914,
                'parroquia' => 'Panamericana',
                'municipio_id' => 374
            ),
            414 =>
            array (
                'id' => 915,
                'parroquia' => 'Santa Cruz',
                'municipio_id' => 374
            ),
            415 =>
            array (
                'id' => 916,
                'parroquia' => 'Escuque',
                'municipio_id' => 375
            ),
            416 =>
            array (
                'id' => 917,
                'parroquia' => 'La Unión',
                'municipio_id' => 375
            ),
            417 =>
            array (
                'id' => 918,
                'parroquia' => 'Santa Rita',
                'municipio_id' => 375
            ),
            418 =>
            array (
                'id' => 919,
                'parroquia' => 'Sabana Libre',
                'municipio_id' => 375
            ),
            419 =>
            array (
                'id' => 920,
                'parroquia' => 'El Socorro',
                'municipio_id' => 376
            ),
            420 =>
            array (
                'id' => 921,
                'parroquia' => 'Los Caprichos',
                'municipio_id' => 376
            ),
            421 =>
            array (
                'id' => 922,
                'parroquia' => 'Antonio José de Sucre',
                'municipio_id' => 376
            ),
            422 =>
            array (
                'id' => 923,
                'parroquia' => 'Campo Elías',
                'municipio_id' => 377
            ),
            423 =>
            array (
                'id' => 924,
                'parroquia' => 'Arnoldo Gabaldón',
                'municipio_id' => 377
            ),
            424 =>
            array (
                'id' => 925,
                'parroquia' => 'Santa Apolonia',
                'municipio_id' => 378
            ),
            425 =>
            array (
                'id' => 926,
                'parroquia' => 'El Progreso',
                'municipio_id' => 378
            ),
            426 =>
            array (
                'id' => 927,
                'parroquia' => 'La Ceiba',
                'municipio_id' => 378
            ),
            427 =>
            array (
                'id' => 928,
                'parroquia' => 'Tres de Febrero',
                'municipio_id' => 378
            ),
            428 =>
            array (
                'id' => 929,
                'parroquia' => 'El Dividive',
                'municipio_id' => 379
            ),
            429 =>
            array (
                'id' => 930,
                'parroquia' => 'Agua Santa',
                'municipio_id' => 379
            ),
            430 =>
            array (
                'id' => 931,
                'parroquia' => 'Agua Caliente',
                'municipio_id' => 379
            ),
            431 =>
            array (
                'id' => 932,
                'parroquia' => 'El Cenizo',
                'municipio_id' => 379
            ),
            432 =>
            array (
                'id' => 933,
                'parroquia' => 'Valerita',
                'municipio_id' => 379
            ),
            433 =>
            array (
                'id' => 934,
                'parroquia' => 'Monte Carmelo',
                'municipio_id' => 380
            ),
            434 =>
            array (
                'id' => 935,
                'parroquia' => 'Buena Vista',
                'municipio_id' => 380
            ),
            435 =>
            array (
                'id' => 936,
                'parroquia' => 'Santa María del Horcón',
                'municipio_id' => 380
            ),
            436 =>
            array (
                'id' => 937,
                'parroquia' => 'Motatán',
                'municipio_id' => 381
            ),
            437 =>
            array (
                'id' => 938,
                'parroquia' => 'El Baño',
                'municipio_id' => 381
            ),
            438 =>
            array (
                'id' => 939,
                'parroquia' => 'Jalisco',
                'municipio_id' => 381
            ),
            439 =>
            array (
                'id' => 940,
                'parroquia' => 'Pampán',
                'municipio_id' => 382
            ),
            440 =>
            array (
                'id' => 941,
                'parroquia' => 'Flor de Patria',
                'municipio_id' => 382
            ),
            441 =>
            array (
                'id' => 942,
                'parroquia' => 'La Paz',
                'municipio_id' => 382
            ),
            442 =>
            array (
                'id' => 943,
                'parroquia' => 'Santa Ana',
                'municipio_id' => 382
            ),
            443 =>
            array (
                'id' => 944,
                'parroquia' => 'Pampanito',
                'municipio_id' => 383
            ),
            444 =>
            array (
                'id' => 945,
                'parroquia' => 'La Concepción',
                'municipio_id' => 383
            ),
            445 =>
            array (
                'id' => 946,
                'parroquia' => 'Pampanito II',
                'municipio_id' => 383
            ),
            446 =>
            array (
                'id' => 947,
                'parroquia' => 'Betijoque',
                'municipio_id' => 384
            ),
            447 =>
            array (
                'id' => 948,
                'parroquia' => 'José Gregorio Hernández',
                'municipio_id' => 384
            ),
            448 =>
            array (
                'id' => 949,
                'parroquia' => 'La Pueblita',
                'municipio_id' => 384
            ),
            449 =>
            array (
                'id' => 950,
                'parroquia' => 'Los Cedros',
                'municipio_id' => 384
            ),
            450 =>
            array (
                'id' => 951,
                'parroquia' => 'Carvajal',
                'municipio_id' => 385
            ),
            451 =>
            array (
                'id' => 952,
                'parroquia' => 'Campo Alegre',
                'municipio_id' => 385
            ),
            452 =>
            array (
                'id' => 953,
                'parroquia' => 'Antonio Nicolás Briceño',
                'municipio_id' => 385
            ),
            453 =>
            array (
                'id' => 954,
                'parroquia' => 'José Leonardo Suárez',
                'municipio_id' => 385
            ),
            454 =>
            array (
                'id' => 955,
                'parroquia' => 'Sabana de Mendoza',
                'municipio_id' => 386
            ),
            455 =>
            array (
                'id' => 956,
                'parroquia' => 'Junín',
                'municipio_id' => 386
            ),
            456 =>
            array (
                'id' => 957,
                'parroquia' => 'Valmore Rodríguez',
                'municipio_id' => 386
            ),
            457 =>
            array (
                'id' => 958,
                'parroquia' => 'El Paraíso',
                'municipio_id' => 386
            ),
            458 =>
            array (
                'id' => 959,
                'parroquia' => 'Andrés Linares',
                'municipio_id' => 387
            ),
            459 =>
            array (
                'id' => 960,
                'parroquia' => 'Chiquinquirá',
                'municipio_id' => 387
            ),
            460 =>
            array (
                'id' => 961,
                'parroquia' => 'Cristóbal Mendoza',
                'municipio_id' => 387
            ),
            461 =>
            array (
                'id' => 962,
                'parroquia' => 'Cruz Carrillo',
                'municipio_id' => 387
            ),
            462 =>
            array (
                'id' => 963,
                'parroquia' => 'Matriz',
                'municipio_id' => 387
            ),
            463 =>
            array (
                'id' => 964,
                'parroquia' => 'Monseñor Carrillo',
                'municipio_id' => 387
            ),
            464 =>
            array (
                'id' => 965,
                'parroquia' => 'Tres Esquinas',
                'municipio_id' => 387
            ),
            465 =>
            array (
                'id' => 966,
                'parroquia' => 'Cabimbú',
                'municipio_id' => 388
            ),
            466 =>
            array (
                'id' => 967,
                'parroquia' => 'Jajó',
                'municipio_id' => 388
            ),
            467 =>
            array (
                'id' => 968,
                'parroquia' => 'La Mesa de Esnujaque',
                'municipio_id' => 388
            ),
            468 =>
            array (
                'id' => 969,
                'parroquia' => 'Santiago',
                'municipio_id' => 388
            ),
            469 =>
            array (
                'id' => 970,
                'parroquia' => 'Tuñame',
                'municipio_id' => 388
            ),
            470 =>
            array (
                'id' => 971,
                'parroquia' => 'La Quebrada',
                'municipio_id' => 388
            ),
            471 =>
            array (
                'id' => 972,
                'parroquia' => 'Juan Ignacio Montilla',
                'municipio_id' => 389
            ),
            472 =>
            array (
                'id' => 973,
                'parroquia' => 'La Beatriz',
                'municipio_id' => 389
            ),
            473 =>
            array (
                'id' => 974,
                'parroquia' => 'La Puerta',
                'municipio_id' => 389
            ),
            474 =>
            array (
                'id' => 975,
                'parroquia' => 'Mendoza del Valle de Momboy',
                'municipio_id' => 389
            ),
            475 =>
            array (
                'id' => 976,
                'parroquia' => 'Mercedes Díaz',
                'municipio_id' => 389
            ),
            476 =>
            array (
                'id' => 977,
                'parroquia' => 'San Luis',
                'municipio_id' => 389
            ),
            477 =>
            array (
                'id' => 978,
                'parroquia' => 'Caraballeda',
                'municipio_id' => 390
            ),
            478 =>
            array (
                'id' => 979,
                'parroquia' => 'Carayaca',
                'municipio_id' => 390
            ),
            479 =>
            array (
                'id' => 980,
                'parroquia' => 'Carlos Soublette',
                'municipio_id' => 390
            ),
            480 =>
            array (
                'id' => 981,
                'parroquia' => 'Caruao Chuspa',
                'municipio_id' => 390
            ),
            481 =>
            array (
                'id' => 982,
                'parroquia' => 'Catia La Mar',
                'municipio_id' => 390
            ),
            482 =>
            array (
                'id' => 983,
                'parroquia' => 'El Junko',
                'municipio_id' => 390
            ),
            483 =>
            array (
                'id' => 984,
                'parroquia' => 'La Guaira',
                'municipio_id' => 390
            ),
            484 =>
            array (
                'id' => 985,
                'parroquia' => 'Macuto',
                'municipio_id' => 390
            ),
            485 =>
            array (
                'id' => 986,
                'parroquia' => 'Maiquetía',
                'municipio_id' => 390
            ),
            486 =>
            array (
                'id' => 987,
                'parroquia' => 'Naiguatá',
                'municipio_id' => 390
            ),
            487 =>
            array (
                'id' => 988,
                'parroquia' => 'Urimare',
                'municipio_id' => 390
            ),
            488 =>
            array (
                'id' => 989,
                'parroquia' => 'Arístides Bastidas',
                'municipio_id' => 391
            ),
            489 =>
            array (
                'id' => 990,
                'parroquia' => 'Bolívar',
                'municipio_id' => 392
            ),
            490 =>
            array (
                'id' => 991,
                'parroquia' => 'Chivacoa',
                'municipio_id' => 407
            ),
            491 =>
            array (
                'id' => 992,
                'parroquia' => 'Campo Elías',
                'municipio_id' => 407
            ),
            492 =>
            array (
                'id' => 993,
                'parroquia' => 'Cocorote',
                'municipio_id' => 408
            ),
            493 =>
            array (
                'id' => 994,
                'parroquia' => 'Independencia',
                'municipio_id' => 409
            ),
            494 =>
            array (
                'id' => 995,
                'parroquia' => 'José Antonio Páez',
                'municipio_id' => 410
            ),
            495 =>
            array (
                'id' => 996,
                'parroquia' => 'La Trinidad',
                'municipio_id' => 411
            ),
            496 =>
            array (
                'id' => 997,
                'parroquia' => 'Manuel Monge',
                'municipio_id' => 412
            ),
            497 =>
            array (
                'id' => 998,
                'parroquia' => 'Salóm',
                'municipio_id' => 413
            ),
            498 =>
            array (
                'id' => 999,
                'parroquia' => 'Temerla',
                'municipio_id' => 413
            ),
            499 =>
            array (
                'id' => 1000,
                'parroquia' => 'Nirgua',
                'municipio_id' => 413
            ),
        ));
        \DB::table('parroquias')->insert(array (
            0 =>
            array (
                'id' => 1001,
                'parroquia' => 'San Andrés',
                'municipio_id' => 414
            ),
            1 =>
            array (
                'id' => 1002,
                'parroquia' => 'Yaritagua',
                'municipio_id' => 414
            ),
            2 =>
            array (
                'id' => 1003,
                'parroquia' => 'San Javier',
                'municipio_id' => 415
            ),
            3 =>
            array (
                'id' => 1004,
                'parroquia' => 'Albarico',
                'municipio_id' => 415
            ),
            4 =>
            array (
                'id' => 1005,
                'parroquia' => 'San Felipe',
                'municipio_id' => 415
            ),
            5 =>
            array (
                'id' => 1006,
                'parroquia' => 'Sucre',
                'municipio_id' => 416
            ),
            6 =>
            array (
                'id' => 1007,
                'parroquia' => 'Urachiche',
                'municipio_id' => 417
            ),
            7 =>
            array (
                'id' => 1008,
                'parroquia' => 'El Guayabo',
                'municipio_id' => 418
            ),
            8 =>
            array (
                'id' => 1009,
                'parroquia' => 'Farriar',
                'municipio_id' => 418
            ),
            9 =>
            array (
                'id' => 1010,
                'parroquia' => 'Isla de Toas',
                'municipio_id' => 441
            ),
            10 =>
            array (
                'id' => 1011,
                'parroquia' => 'Monagas',
                'municipio_id' => 441
            ),
            11 =>
            array (
                'id' => 1012,
                'parroquia' => 'San Timoteo',
                'municipio_id' => 442
            ),
            12 =>
            array (
                'id' => 1013,
                'parroquia' => 'General Urdaneta',
                'municipio_id' => 442
            ),
            13 =>
            array (
                'id' => 1014,
                'parroquia' => 'Libertador',
                'municipio_id' => 442
            ),
            14 =>
            array (
                'id' => 1015,
                'parroquia' => 'Marcelino Briceño',
                'municipio_id' => 442
            ),
            15 =>
            array (
                'id' => 1016,
                'parroquia' => 'Pueblo Nuevo',
                'municipio_id' => 442
            ),
            16 =>
            array (
                'id' => 1017,
                'parroquia' => 'Manuel Guanipa Matos',
                'municipio_id' => 442
            ),
            17 =>
            array (
                'id' => 1018,
                'parroquia' => 'Ambrosio',
                'municipio_id' => 443
            ),
            18 =>
            array (
                'id' => 1019,
                'parroquia' => 'Carmen Herrera',
                'municipio_id' => 443
            ),
            19 =>
            array (
                'id' => 1020,
                'parroquia' => 'La Rosa',
                'municipio_id' => 443
            ),
            20 =>
            array (
                'id' => 1021,
                'parroquia' => 'Germán Ríos Linares',
                'municipio_id' => 443
            ),
            21 =>
            array (
                'id' => 1022,
                'parroquia' => 'San Benito',
                'municipio_id' => 443
            ),
            22 =>
            array (
                'id' => 1023,
                'parroquia' => 'Rómulo Betancourt',
                'municipio_id' => 443
            ),
            23 =>
            array (
                'id' => 1024,
                'parroquia' => 'Jorge Hernández',
                'municipio_id' => 443
            ),
            24 =>
            array (
                'id' => 1025,
                'parroquia' => 'Punta Gorda',
                'municipio_id' => 443
            ),
            25 =>
            array (
                'id' => 1026,
                'parroquia' => 'Arístides Calvani',
                'municipio_id' => 443
            ),
            26 =>
            array (
                'id' => 1027,
                'parroquia' => 'Encontrados',
                'municipio_id' => 444
            ),
            27 =>
            array (
                'id' => 1028,
                'parroquia' => 'Udón Pérez',
                'municipio_id' => 444
            ),
            28 =>
            array (
                'id' => 1029,
                'parroquia' => 'Moralito',
                'municipio_id' => 445
            ),
            29 =>
            array (
                'id' => 1030,
                'parroquia' => 'San Carlos del Zulia',
                'municipio_id' => 445
            ),
            30 =>
            array (
                'id' => 1031,
                'parroquia' => 'Santa Cruz del Zulia',
                'municipio_id' => 445
            ),
            31 =>
            array (
                'id' => 1032,
                'parroquia' => 'Santa Bárbara',
                'municipio_id' => 445
            ),
            32 =>
            array (
                'id' => 1033,
                'parroquia' => 'Urribarrí',
                'municipio_id' => 445
            ),
            33 =>
            array (
                'id' => 1034,
                'parroquia' => 'Carlos Quevedo',
                'municipio_id' => 446
            ),
            34 =>
            array (
                'id' => 1035,
                'parroquia' => 'Francisco Javier Pulgar',
                'municipio_id' => 446
            ),
            35 =>
            array (
                'id' => 1036,
                'parroquia' => 'Simón Rodríguez',
                'municipio_id' => 446
            ),
            36 =>
            array (
                'id' => 1037,
                'parroquia' => 'Guamo-Gavilanes',
                'municipio_id' => 446
            ),
            37 =>
            array (
                'id' => 1038,
                'parroquia' => 'La Concepción',
                'municipio_id' => 448
            ),
            38 =>
            array (
                'id' => 1039,
                'parroquia' => 'San José',
                'municipio_id' => 448
            ),
            39 =>
            array (
                'id' => 1040,
                'parroquia' => 'Mariano Parra León',
                'municipio_id' => 448
            ),
            40 =>
            array (
                'id' => 1041,
                'parroquia' => 'José Ramón Yépez',
                'municipio_id' => 448
            ),
            41 =>
            array (
                'id' => 1042,
                'parroquia' => 'Jesús María Semprún',
                'municipio_id' => 449
            ),
            42 =>
            array (
                'id' => 1043,
                'parroquia' => 'Barí',
                'municipio_id' => 449
            ),
            43 =>
            array (
                'id' => 1044,
                'parroquia' => 'Concepción',
                'municipio_id' => 450
            ),
            44 =>
            array (
                'id' => 1045,
                'parroquia' => 'Andrés Bello',
                'municipio_id' => 450
            ),
            45 =>
            array (
                'id' => 1046,
                'parroquia' => 'Chiquinquirá',
                'municipio_id' => 450
            ),
            46 =>
            array (
                'id' => 1047,
                'parroquia' => 'El Carmelo',
                'municipio_id' => 450
            ),
            47 =>
            array (
                'id' => 1048,
                'parroquia' => 'Potreritos',
                'municipio_id' => 450
            ),
            48 =>
            array (
                'id' => 1049,
                'parroquia' => 'Libertad',
                'municipio_id' => 451
            ),
            49 =>
            array (
                'id' => 1050,
                'parroquia' => 'Alonso de Ojeda',
                'municipio_id' => 451
            ),
            50 =>
            array (
                'id' => 1051,
                'parroquia' => 'Venezuela',
                'municipio_id' => 451
            ),
            51 =>
            array (
                'id' => 1052,
                'parroquia' => 'Eleazar López Contreras',
                'municipio_id' => 451
            ),
            52 =>
            array (
                'id' => 1053,
                'parroquia' => 'Campo Lara',
                'municipio_id' => 451
            ),
            53 =>
            array (
                'id' => 1054,
                'parroquia' => 'Bartolomé de las Casas',
                'municipio_id' => 452
            ),
            54 =>
            array (
                'id' => 1055,
                'parroquia' => 'Libertad',
                'municipio_id' => 452
            ),
            55 =>
            array (
                'id' => 1056,
                'parroquia' => 'Río Negro',
                'municipio_id' => 452
            ),
            56 =>
            array (
                'id' => 1057,
                'parroquia' => 'San José de Perijá',
                'municipio_id' => 452
            ),
            57 =>
            array (
                'id' => 1058,
                'parroquia' => 'San Rafael',
                'municipio_id' => 453
            ),
            58 =>
            array (
                'id' => 1059,
                'parroquia' => 'La Sierrita',
                'municipio_id' => 453
            ),
            59 =>
            array (
                'id' => 1060,
                'parroquia' => 'Las Parcelas',
                'municipio_id' => 453
            ),
            60 =>
            array (
                'id' => 1061,
                'parroquia' => 'Luis de Vicente',
                'municipio_id' => 453
            ),
            61 =>
            array (
                'id' => 1062,
                'parroquia' => 'Monseñor Marcos Sergio Godoy',
                'municipio_id' => 453
            ),
            62 =>
            array (
                'id' => 1063,
                'parroquia' => 'Ricaurte',
                'municipio_id' => 453
            ),
            63 =>
            array (
                'id' => 1064,
                'parroquia' => 'Tamare',
                'municipio_id' => 453
            ),
            64 =>
            array (
                'id' => 1065,
                'parroquia' => 'Antonio Borjas Romero',
                'municipio_id' => 454
            ),
            65 =>
            array (
                'id' => 1066,
                'parroquia' => 'Bolívar',
                'municipio_id' => 454
            ),
            66 =>
            array (
                'id' => 1067,
                'parroquia' => 'Cacique Mara',
                'municipio_id' => 454
            ),
            67 =>
            array (
                'id' => 1068,
                'parroquia' => 'Carracciolo Parra Pérez',
                'municipio_id' => 454
            ),
            68 =>
            array (
                'id' => 1069,
                'parroquia' => 'Cecilio Acosta',
                'municipio_id' => 454
            ),
            69 =>
            array (
                'id' => 1070,
                'parroquia' => 'Cristo de Aranza',
                'municipio_id' => 454
            ),
            70 =>
            array (
                'id' => 1071,
                'parroquia' => 'Coquivacoa',
                'municipio_id' => 454
            ),
            71 =>
            array (
                'id' => 1072,
                'parroquia' => 'Chiquinquirá',
                'municipio_id' => 454
            ),
            72 =>
            array (
                'id' => 1073,
                'parroquia' => 'Francisco Eugenio Bustamante',
                'municipio_id' => 454
            ),
            73 =>
            array (
                'id' => 1074,
                'parroquia' => 'Idelfonzo Vásquez',
                'municipio_id' => 454
            ),
            74 =>
            array (
                'id' => 1075,
                'parroquia' => 'Juana de Ávila',
                'municipio_id' => 454
            ),
            75 =>
            array (
                'id' => 1076,
                'parroquia' => 'Luis Hurtado Higuera',
                'municipio_id' => 454
            ),
            76 =>
            array (
                'id' => 1077,
                'parroquia' => 'Manuel Dagnino',
                'municipio_id' => 454
            ),
            77 =>
            array (
                'id' => 1078,
                'parroquia' => 'Olegario Villalobos',
                'municipio_id' => 454
            ),
            78 =>
            array (
                'id' => 1079,
                'parroquia' => 'Raúl Leoni',
                'municipio_id' => 454
            ),
            79 =>
            array (
                'id' => 1080,
                'parroquia' => 'Santa Lucía',
                'municipio_id' => 454
            ),
            80 =>
            array (
                'id' => 1081,
                'parroquia' => 'Venancio Pulgar',
                'municipio_id' => 454
            ),
            81 =>
            array (
                'id' => 1082,
                'parroquia' => 'San Isidro',
                'municipio_id' => 454
            ),
            82 =>
            array (
                'id' => 1083,
                'parroquia' => 'Altagracia',
                'municipio_id' => 455
            ),
            83 =>
            array (
                'id' => 1084,
                'parroquia' => 'Faría',
                'municipio_id' => 455
            ),
            84 =>
            array (
                'id' => 1085,
                'parroquia' => 'Ana María Campos',
                'municipio_id' => 455
            ),
            85 =>
            array (
                'id' => 1086,
                'parroquia' => 'San Antonio',
                'municipio_id' => 455
            ),
            86 =>
            array (
                'id' => 1087,
                'parroquia' => 'San José',
                'municipio_id' => 455
            ),
            87 =>
            array (
                'id' => 1088,
                'parroquia' => 'Donaldo García',
                'municipio_id' => 456
            ),
            88 =>
            array (
                'id' => 1089,
                'parroquia' => 'El Rosario',
                'municipio_id' => 456
            ),
            89 =>
            array (
                'id' => 1090,
                'parroquia' => 'Sixto Zambrano',
                'municipio_id' => 456
            ),
            90 =>
            array (
                'id' => 1091,
                'parroquia' => 'San Francisco',
                'municipio_id' => 457
            ),
            91 =>
            array (
                'id' => 1092,
                'parroquia' => 'El Bajo',
                'municipio_id' => 457
            ),
            92 =>
            array (
                'id' => 1093,
                'parroquia' => 'Domitila Flores',
                'municipio_id' => 457
            ),
            93 =>
            array (
                'id' => 1094,
                'parroquia' => 'Francisco Ochoa',
                'municipio_id' => 457
            ),
            94 =>
            array (
                'id' => 1095,
                'parroquia' => 'Los Cortijos',
                'municipio_id' => 457
            ),
            95 =>
            array (
                'id' => 1096,
                'parroquia' => 'Marcial Hernández',
                'municipio_id' => 457
            ),
            96 =>
            array (
                'id' => 1097,
                'parroquia' => 'Santa Rita',
                'municipio_id' => 458
            ),
            97 =>
            array (
                'id' => 1098,
                'parroquia' => 'El Mene',
                'municipio_id' => 458
            ),
            98 =>
            array (
                'id' => 1099,
                'parroquia' => 'Pedro Lucas Urribarrí',
                'municipio_id' => 458
            ),
            99 =>
            array (
                'id' => 1100,
                'parroquia' => 'José Cenobio Urribarrí',
                'municipio_id' => 458
            ),
            100 =>
            array (
                'id' => 1101,
                'parroquia' => 'Rafael Maria Baralt',
                'municipio_id' => 459
            ),
            101 =>
            array (
                'id' => 1102,
                'parroquia' => 'Manuel Manrique',
                'municipio_id' => 459
            ),
            102 =>
            array (
                'id' => 1103,
                'parroquia' => 'Rafael Urdaneta',
                'municipio_id' => 459
            ),
            103 =>
            array (
                'id' => 1104,
                'parroquia' => 'Bobures',
                'municipio_id' => 460
            ),
            104 =>
            array (
                'id' => 1105,
                'parroquia' => 'Gibraltar',
                'municipio_id' => 460
            ),
            105 =>
            array (
                'id' => 1106,
                'parroquia' => 'Heras',
                'municipio_id' => 460
            ),
            106 =>
            array (
                'id' => 1107,
                'parroquia' => 'Monseñor Arturo Álvarez',
                'municipio_id' => 460
            ),
            107 =>
            array (
                'id' => 1108,
                'parroquia' => 'Rómulo Gallegos',
                'municipio_id' => 460
            ),
            108 =>
            array (
                'id' => 1109,
                'parroquia' => 'El Batey',
                'municipio_id' => 460
            ),
            109 =>
            array (
                'id' => 1110,
                'parroquia' => 'Rafael Urdaneta',
                'municipio_id' => 461
            ),
            110 =>
            array (
                'id' => 1111,
                'parroquia' => 'La Victoria',
                'municipio_id' => 461
            ),
            111 =>
            array (
                'id' => 1112,
                'parroquia' => 'Raúl Cuenca',
                'municipio_id' => 461
            ),
            112 =>
            array (
                'id' => 1113,
                'parroquia' => 'Sinamaica',
                'municipio_id' => 447
            ),
            113 =>
            array (
                'id' => 1114,
                'parroquia' => 'Alta Guajira',
                'municipio_id' => 447
            ),
            114 =>
            array (
                'id' => 1115,
                'parroquia' => 'Elías Sánchez Rubio',
                'municipio_id' => 447
            ),
            115 =>
            array (
                'id' => 1116,
                'parroquia' => 'Guajira',
                'municipio_id' => 447
            ),
            116 =>
            array (
                'id' => 1117,
                'parroquia' => 'Altagracia',
                'municipio_id' => 462
            ),
            117 =>
            array (
                'id' => 1118,
                'parroquia' => 'Antímano',
                'municipio_id' => 462
            ),
            118 =>
            array (
                'id' => 1119,
                'parroquia' => 'Caricuao',
                'municipio_id' => 462
            ),
            119 =>
            array (
                'id' => 1120,
                'parroquia' => 'Catedral',
                'municipio_id' => 462
            ),
            120 =>
            array (
                'id' => 1121,
                'parroquia' => 'Coche',
                'municipio_id' => 462
            ),
            121 =>
            array (
                'id' => 1122,
                'parroquia' => 'El Junquito',
                'municipio_id' => 462
            ),
            122 =>
            array (
                'id' => 1123,
                'parroquia' => 'El Paraíso',
                'municipio_id' => 462
            ),
            123 =>
            array (
                'id' => 1124,
                'parroquia' => 'El Recreo',
                'municipio_id' => 462
            ),
            124 =>
            array (
                'id' => 1125,
                'parroquia' => 'El Valle',
                'municipio_id' => 462
            ),
            125 =>
            array (
                'id' => 1126,
                'parroquia' => 'La Candelaria',
                'municipio_id' => 462
            ),
            126 =>
            array (
                'id' => 1127,
                'parroquia' => 'La Pastora',
                'municipio_id' => 462
            ),
            127 =>
            array (
                'id' => 1128,
                'parroquia' => 'La Vega',
                'municipio_id' => 462
            ),
            128 =>
            array (
                'id' => 1129,
                'parroquia' => 'Macarao',
                'municipio_id' => 462
            ),
            129 =>
            array (
                'id' => 1130,
                'parroquia' => 'San Agustín',
                'municipio_id' => 462
            ),
            130 =>
            array (
                'id' => 1131,
                'parroquia' => 'San Bernardino',
                'municipio_id' => 462
            ),
            131 =>
            array (
                'id' => 1132,
                'parroquia' => 'San José',
                'municipio_id' => 462
            ),
            132 =>
            array (
                'id' => 1133,
                'parroquia' => 'San Juan',
                'municipio_id' => 462
            ),
            133 =>
            array (
                'id' => 1134,
                'parroquia' => 'San Pedro',
                'municipio_id' => 462
            ),
            134 =>
            array (
                'id' => 1135,
                'parroquia' => 'Santa Rosalía',
                'municipio_id' => 462
            ),
            135 =>
            array (
                'id' => 1136,
                'parroquia' => 'Santa Teresa',
                'municipio_id' => 462
            ),
            136 =>
            array (
                'id' => 1137,
            'parroquia' => 'Sucre (Catia)',
                'municipio_id' => 462
            ),
            137 =>
            array (
                'id' => 1138,
                'parroquia' => '23 de enero',
                'municipio_id' => 462
            ),
        ));


    }
}
