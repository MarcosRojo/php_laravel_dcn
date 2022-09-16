<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CiudadesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('ciudades')->delete();

        \DB::table('ciudades')->insert(array (
            0 =>
            array (
                'id' => 1,
                'ciudad' => 'Maroa',
                'parroquia_id' => 1,
                'capital' => 0,
            ),
            1 =>
            array (
                'id' => 2,
                'ciudad' => 'Puerto Ayacucho',
                'parroquia_id' => 1,
                'capital' => 1,
            ),
            2 =>
            array (
                'id' => 3,
                'ciudad' => 'San Fernando de Atabapo',
                'parroquia_id' => 1,
                'capital' => 0,
            ),
            3 =>
            array (
                'id' => 4,
                'ciudad' => 'Anaco',
                'parroquia_id' => 2,
                'capital' => 0,
            ),
            4 =>
            array (
                'id' => 5,
                'ciudad' => 'Aragua de Barcelona',
                'parroquia_id' => 2,
                'capital' => 0,
            ),
            5 =>
            array (
                'id' => 6,
                'ciudad' => 'Barcelona',
                'parroquia_id' => 2,
                'capital' => 1,
            ),
            6 =>
            array (
                'id' => 7,
                'ciudad' => 'Boca de Uchire',
                'parroquia_id' => 2,
                'capital' => 0,
            ),
            7 =>
            array (
                'id' => 8,
                'ciudad' => 'Cantaura',
                'parroquia_id' => 2,
                'capital' => 0,
            ),
            8 =>
            array (
                'id' => 9,
                'ciudad' => 'Clarines',
                'parroquia_id' => 2,
                'capital' => 0,
            ),
            9 =>
            array (
                'id' => 10,
                'ciudad' => 'El Chaparro',
                'parroquia_id' => 2,
                'capital' => 0,
            ),
            10 =>
            array (
                'id' => 11,
                'ciudad' => 'El Pao Anzoátegui',
                'parroquia_id' => 2,
                'capital' => 0,
            ),
            11 =>
            array (
                'id' => 12,
                'ciudad' => 'El Tigre',
                'parroquia_id' => 2,
                'capital' => 0,
            ),
            12 =>
            array (
                'id' => 13,
                'ciudad' => 'El Tigrito',
                'parroquia_id' => 2,
                'capital' => 0,
            ),
            13 =>
            array (
                'id' => 14,
                'ciudad' => 'Guanape',
                'parroquia_id' => 2,
                'capital' => 0,
            ),
            14 =>
            array (
                'id' => 15,
                'ciudad' => 'Guanta',
                'parroquia_id' => 2,
                'capital' => 0,
            ),
            15 =>
            array (
                'id' => 16,
                'ciudad' => 'Lechería',
                'parroquia_id' => 2,
                'capital' => 0,
            ),
            16 =>
            array (
                'id' => 17,
                'ciudad' => 'Onoto',
                'parroquia_id' => 2,
                'capital' => 0,
            ),
            17 =>
            array (
                'id' => 18,
                'ciudad' => 'Pariaguán',
                'parroquia_id' => 2,
                'capital' => 0,
            ),
            18 =>
            array (
                'id' => 19,
                'ciudad' => 'Píritu',
                'parroquia_id' => 2,
                'capital' => 0,
            ),
            19 =>
            array (
                'id' => 20,
                'ciudad' => 'Puerto La Cruz',
                'parroquia_id' => 2,
                'capital' => 0,
            ),
            20 =>
            array (
                'id' => 21,
                'ciudad' => 'Puerto Píritu',
                'parroquia_id' => 2,
                'capital' => 0,
            ),
            21 =>
            array (
                'id' => 22,
                'ciudad' => 'Sabana de Uchire',
                'parroquia_id' => 2,
                'capital' => 0,
            ),
            22 =>
            array (
                'id' => 23,
                'ciudad' => 'San Mateo Anzoátegui',
                'parroquia_id' => 2,
                'capital' => 0,
            ),
            23 =>
            array (
                'id' => 24,
                'ciudad' => 'San Pablo Anzoátegui',
                'parroquia_id' => 2,
                'capital' => 0,
            ),
            24 =>
            array (
                'id' => 25,
                'ciudad' => 'San Tomé',
                'parroquia_id' => 2,
                'capital' => 0,
            ),
            25 =>
            array (
                'id' => 26,
                'ciudad' => 'Santa Ana de Anzoátegui',
                'parroquia_id' => 2,
                'capital' => 0,
            ),
            26 =>
            array (
                'id' => 27,
                'ciudad' => 'Santa Fe Anzoátegui',
                'parroquia_id' => 2,
                'capital' => 0,
            ),
            27 =>
            array (
                'id' => 28,
                'ciudad' => 'Santa Rosa',
                'parroquia_id' => 2,
                'capital' => 0,
            ),
            28 =>
            array (
                'id' => 29,
                'ciudad' => 'Soledad',
                'parroquia_id' => 2,
                'capital' => 0,
            ),
            29 =>
            array (
                'id' => 30,
                'ciudad' => 'Urica',
                'parroquia_id' => 2,
                'capital' => 0,
            ),
            30 =>
            array (
                'id' => 31,
                'ciudad' => 'Valle de Guanape',
                'parroquia_id' => 2,
                'capital' => 0,
            ),
            31 =>
            array (
                'id' => 43,
                'ciudad' => 'Achaguas',
                'parroquia_id' => 3,
                'capital' => 0,
            ),
            32 =>
            array (
                'id' => 44,
                'ciudad' => 'Biruaca',
                'parroquia_id' => 3,
                'capital' => 0,
            ),
            33 =>
            array (
                'id' => 45,
                'ciudad' => 'Bruzual',
                'parroquia_id' => 3,
                'capital' => 0,
            ),
            34 =>
            array (
                'id' => 46,
                'ciudad' => 'El Amparo',
                'parroquia_id' => 3,
                'capital' => 0,
            ),
            35 =>
            array (
                'id' => 47,
                'ciudad' => 'El Nula',
                'parroquia_id' => 3,
                'capital' => 0,
            ),
            36 =>
            array (
                'id' => 48,
                'ciudad' => 'Elorza',
                'parroquia_id' => 3,
                'capital' => 0,
            ),
            37 =>
            array (
                'id' => 49,
                'ciudad' => 'Guasdualito',
                'parroquia_id' => 3,
                'capital' => 0,
            ),
            38 =>
            array (
                'id' => 50,
                'ciudad' => 'Mantecal',
                'parroquia_id' => 3,
                'capital' => 0,
            ),
            39 =>
            array (
                'id' => 51,
                'ciudad' => 'Puerto Páez',
                'parroquia_id' => 3,
                'capital' => 0,
            ),
            40 =>
            array (
                'id' => 52,
                'ciudad' => 'San Fernando de Apure',
                'parroquia_id' => 3,
                'capital' => 1,
            ),
            41 =>
            array (
                'id' => 53,
                'ciudad' => 'San Juan de Payara',
                'parroquia_id' => 3,
                'capital' => 0,
            ),
            42 =>
            array (
                'id' => 54,
                'ciudad' => 'Barbacoas',
                'parroquia_id' => 4,
                'capital' => 0,
            ),
            43 =>
            array (
                'id' => 55,
                'ciudad' => 'Cagua',
                'parroquia_id' => 4,
                'capital' => 0,
            ),
            44 =>
            array (
                'id' => 56,
                'ciudad' => 'Camatagua',
                'parroquia_id' => 4,
                'capital' => 0,
            ),
            45 =>
            array (
                'id' => 58,
                'ciudad' => 'Choroní',
                'parroquia_id' => 4,
                'capital' => 0,
            ),
            46 =>
            array (
                'id' => 59,
                'ciudad' => 'Colonia Tovar',
                'parroquia_id' => 4,
                'capital' => 0,
            ),
            47 =>
            array (
                'id' => 60,
                'ciudad' => 'El Consejo',
                'parroquia_id' => 4,
                'capital' => 0,
            ),
            48 =>
            array (
                'id' => 61,
                'ciudad' => 'La Victoria',
                'parroquia_id' => 4,
                'capital' => 0,
            ),
            49 =>
            array (
                'id' => 62,
                'ciudad' => 'Las Tejerías',
                'parroquia_id' => 4,
                'capital' => 0,
            ),
            50 =>
            array (
                'id' => 63,
                'ciudad' => 'Magdaleno',
                'parroquia_id' => 4,
                'capital' => 0,
            ),
            51 =>
            array (
                'id' => 64,
                'ciudad' => 'Maracay',
                'parroquia_id' => 4,
                'capital' => 1,
            ),
            52 =>
            array (
                'id' => 65,
                'ciudad' => 'Ocumare de La Costa',
                'parroquia_id' => 4,
                'capital' => 0,
            ),
            53 =>
            array (
                'id' => 66,
                'ciudad' => 'Palo Negro',
                'parroquia_id' => 4,
                'capital' => 0,
            ),
            54 =>
            array (
                'id' => 67,
                'ciudad' => 'San Casimiro',
                'parroquia_id' => 4,
                'capital' => 0,
            ),
            55 =>
            array (
                'id' => 68,
                'ciudad' => 'San Mateo',
                'parroquia_id' => 4,
                'capital' => 0,
            ),
            56 =>
            array (
                'id' => 69,
                'ciudad' => 'San Sebastián',
                'parroquia_id' => 4,
                'capital' => 0,
            ),
            57 =>
            array (
                'id' => 70,
                'ciudad' => 'Santa Cruz de Aragua',
                'parroquia_id' => 4,
                'capital' => 0,
            ),
            58 =>
            array (
                'id' => 71,
                'ciudad' => 'Tocorón',
                'parroquia_id' => 4,
                'capital' => 0,
            ),
            59 =>
            array (
                'id' => 72,
                'ciudad' => 'Turmero',
                'parroquia_id' => 4,
                'capital' => 0,
            ),
            60 =>
            array (
                'id' => 73,
                'ciudad' => 'Villa de Cura',
                'parroquia_id' => 4,
                'capital' => 0,
            ),
            61 =>
            array (
                'id' => 74,
                'ciudad' => 'Zuata',
                'parroquia_id' => 4,
                'capital' => 0,
            ),
            62 =>
            array (
                'id' => 75,
                'ciudad' => 'Barinas',
                'parroquia_id' => 5,
                'capital' => 1,
            ),
            63 =>
            array (
                'id' => 76,
                'ciudad' => 'Barinitas',
                'parroquia_id' => 5,
                'capital' => 0,
            ),
            64 =>
            array (
                'id' => 77,
                'ciudad' => 'Barrancas',
                'parroquia_id' => 5,
                'capital' => 0,
            ),
            65 =>
            array (
                'id' => 78,
                'ciudad' => 'Calderas',
                'parroquia_id' => 5,
                'capital' => 0,
            ),
            66 =>
            array (
                'id' => 79,
                'ciudad' => 'Capitanejo',
                'parroquia_id' => 5,
                'capital' => 0,
            ),
            67 =>
            array (
                'id' => 80,
                'ciudad' => 'Ciudad Bolivia',
                'parroquia_id' => 5,
                'capital' => 0,
            ),
            68 =>
            array (
                'id' => 81,
                'ciudad' => 'El Cantón',
                'parroquia_id' => 5,
                'capital' => 0,
            ),
            69 =>
            array (
                'id' => 82,
                'ciudad' => 'Las Veguitas',
                'parroquia_id' => 5,
                'capital' => 0,
            ),
            70 =>
            array (
                'id' => 83,
                'ciudad' => 'Libertad de Barinas',
                'parroquia_id' => 5,
                'capital' => 0,
            ),
            71 =>
            array (
                'id' => 84,
                'ciudad' => 'Sabaneta',
                'parroquia_id' => 5,
                'capital' => 0,
            ),
            72 =>
            array (
                'id' => 85,
                'ciudad' => 'Santa Bárbara de Barinas',
                'parroquia_id' => 5,
                'capital' => 0,
            ),
            73 =>
            array (
                'id' => 86,
                'ciudad' => 'Socopó',
                'parroquia_id' => 5,
                'capital' => 0,
            ),
            74 =>
            array (
                'id' => 87,
                'ciudad' => 'Caicara del Orinoco',
                'parroquia_id' => 6,
                'capital' => 0,
            ),
            75 =>
            array (
                'id' => 88,
                'ciudad' => 'Canaima',
                'parroquia_id' => 6,
                'capital' => 0,
            ),
            76 =>
            array (
                'id' => 89,
                'ciudad' => 'Ciudad Bolívar',
                'parroquia_id' => 6,
                'capital' => 1,
            ),
            77 =>
            array (
                'id' => 90,
                'ciudad' => 'Ciudad Piar',
                'parroquia_id' => 6,
                'capital' => 0,
            ),
            78 =>
            array (
                'id' => 91,
                'ciudad' => 'El Callao',
                'parroquia_id' => 6,
                'capital' => 0,
            ),
            79 =>
            array (
                'id' => 92,
                'ciudad' => 'El Dorado',
                'parroquia_id' => 6,
                'capital' => 0,
            ),
            80 =>
            array (
                'id' => 93,
                'ciudad' => 'El Manteco',
                'parroquia_id' => 6,
                'capital' => 0,
            ),
            81 =>
            array (
                'id' => 94,
                'ciudad' => 'El Palmar',
                'parroquia_id' => 6,
                'capital' => 0,
            ),
            82 =>
            array (
                'id' => 95,
                'ciudad' => 'El Pao',
                'parroquia_id' => 6,
                'capital' => 0,
            ),
            83 =>
            array (
                'id' => 96,
                'ciudad' => 'Guasipati',
                'parroquia_id' => 6,
                'capital' => 0,
            ),
            84 =>
            array (
                'id' => 97,
                'ciudad' => 'Guri',
                'parroquia_id' => 6,
                'capital' => 0,
            ),
            85 =>
            array (
                'id' => 98,
                'ciudad' => 'La Paragua',
                'parroquia_id' => 6,
                'capital' => 0,
            ),
            86 =>
            array (
                'id' => 99,
                'ciudad' => 'Matanzas',
                'parroquia_id' => 6,
                'capital' => 0,
            ),
            87 =>
            array (
                'id' => 100,
                'ciudad' => 'Puerto Ordaz',
                'parroquia_id' => 6,
                'capital' => 0,
            ),
            88 =>
            array (
                'id' => 101,
                'ciudad' => 'San Félix',
                'parroquia_id' => 6,
                'capital' => 0,
            ),
            89 =>
            array (
                'id' => 102,
                'ciudad' => 'Santa Elena de Uairén',
                'parroquia_id' => 6,
                'capital' => 0,
            ),
            90 =>
            array (
                'id' => 103,
                'ciudad' => 'Tumeremo',
                'parroquia_id' => 6,
                'capital' => 0,
            ),
            91 =>
            array (
                'id' => 104,
                'ciudad' => 'Unare',
                'parroquia_id' => 6,
                'capital' => 0,
            ),
            92 =>
            array (
                'id' => 105,
                'ciudad' => 'Upata',
                'parroquia_id' => 6,
                'capital' => 0,
            ),
            93 =>
            array (
                'id' => 106,
                'ciudad' => 'Bejuma',
                'parroquia_id' => 7,
                'capital' => 0,
            ),
            94 =>
            array (
                'id' => 107,
                'ciudad' => 'Belén',
                'parroquia_id' => 7,
                'capital' => 0,
            ),
            95 =>
            array (
                'id' => 108,
                'ciudad' => 'Campo de Carabobo',
                'parroquia_id' => 7,
                'capital' => 0,
            ),
            96 =>
            array (
                'id' => 109,
                'ciudad' => 'Canoabo',
                'parroquia_id' => 7,
                'capital' => 0,
            ),
            97 =>
            array (
                'id' => 110,
                'ciudad' => 'Central Tacarigua',
                'parroquia_id' => 7,
                'capital' => 0,
            ),
            98 =>
            array (
                'id' => 111,
                'ciudad' => 'Chirgua',
                'parroquia_id' => 7,
                'capital' => 0,
            ),
            99 =>
            array (
                'id' => 112,
                'ciudad' => 'Ciudad Alianza',
                'parroquia_id' => 7,
                'capital' => 0,
            ),
            100 =>
            array (
                'id' => 113,
                'ciudad' => 'El Palito',
                'parroquia_id' => 7,
                'capital' => 0,
            ),
            101 =>
            array (
                'id' => 114,
                'ciudad' => 'Guacara',
                'parroquia_id' => 7,
                'capital' => 0,
            ),
            102 =>
            array (
                'id' => 115,
                'ciudad' => 'Guigue',
                'parroquia_id' => 7,
                'capital' => 0,
            ),
            103 =>
            array (
                'id' => 116,
                'ciudad' => 'Las Trincheras',
                'parroquia_id' => 7,
                'capital' => 0,
            ),
            104 =>
            array (
                'id' => 117,
                'ciudad' => 'Los Guayos',
                'parroquia_id' => 7,
                'capital' => 0,
            ),
            105 =>
            array (
                'id' => 118,
                'ciudad' => 'Mariara',
                'parroquia_id' => 7,
                'capital' => 0,
            ),
            106 =>
            array (
                'id' => 119,
                'ciudad' => 'Miranda',
                'parroquia_id' => 7,
                'capital' => 0,
            ),
            107 =>
            array (
                'id' => 120,
                'ciudad' => 'Montalbán',
                'parroquia_id' => 7,
                'capital' => 0,
            ),
            108 =>
            array (
                'id' => 121,
                'ciudad' => 'Morón',
                'parroquia_id' => 7,
                'capital' => 0,
            ),
            109 =>
            array (
                'id' => 122,
                'ciudad' => 'Naguanagua',
                'parroquia_id' => 7,
                'capital' => 0,
            ),
            110 =>
            array (
                'id' => 123,
                'ciudad' => 'Puerto Cabello',
                'parroquia_id' => 7,
                'capital' => 0,
            ),
            111 =>
            array (
                'id' => 124,
                'ciudad' => 'San Joaquín',
                'parroquia_id' => 7,
                'capital' => 0,
            ),
            112 =>
            array (
                'id' => 125,
                'ciudad' => 'Tocuyito',
                'parroquia_id' => 7,
                'capital' => 0,
            ),
            113 =>
            array (
                'id' => 126,
                'ciudad' => 'Urama',
                'parroquia_id' => 7,
                'capital' => 0,
            ),
            114 =>
            array (
                'id' => 127,
                'ciudad' => 'Valencia',
                'parroquia_id' => 7,
                'capital' => 1,
            ),
            115 =>
            array (
                'id' => 128,
                'ciudad' => 'Vigirimita',
                'parroquia_id' => 7,
                'capital' => 0,
            ),
            116 =>
            array (
                'id' => 129,
                'ciudad' => 'Aguirre',
                'parroquia_id' => 8,
                'capital' => 0,
            ),
            117 =>
            array (
                'id' => 130,
                'ciudad' => 'Apartaderos Cojedes',
                'parroquia_id' => 8,
                'capital' => 0,
            ),
            118 =>
            array (
                'id' => 131,
                'ciudad' => 'Arismendi',
                'parroquia_id' => 8,
                'capital' => 0,
            ),
            119 =>
            array (
                'id' => 132,
                'ciudad' => 'Camuriquito',
                'parroquia_id' => 8,
                'capital' => 0,
            ),
            120 =>
            array (
                'id' => 133,
                'ciudad' => 'El Baúl',
                'parroquia_id' => 8,
                'capital' => 0,
            ),
            121 =>
            array (
                'id' => 134,
                'ciudad' => 'El Limón',
                'parroquia_id' => 8,
                'capital' => 0,
            ),
            122 =>
            array (
                'id' => 135,
                'ciudad' => 'El Pao Cojedes',
                'parroquia_id' => 8,
                'capital' => 0,
            ),
            123 =>
            array (
                'id' => 136,
                'ciudad' => 'El Socorro',
                'parroquia_id' => 8,
                'capital' => 0,
            ),
            124 =>
            array (
                'id' => 137,
                'ciudad' => 'La Aguadita',
                'parroquia_id' => 8,
                'capital' => 0,
            ),
            125 =>
            array (
                'id' => 138,
                'ciudad' => 'Las Vegas',
                'parroquia_id' => 8,
                'capital' => 0,
            ),
            126 =>
            array (
                'id' => 139,
                'ciudad' => 'Libertad de Cojedes',
                'parroquia_id' => 8,
                'capital' => 0,
            ),
            127 =>
            array (
                'id' => 140,
                'ciudad' => 'Mapuey',
                'parroquia_id' => 8,
                'capital' => 0,
            ),
            128 =>
            array (
                'id' => 141,
                'ciudad' => 'Piñedo',
                'parroquia_id' => 8,
                'capital' => 0,
            ),
            129 =>
            array (
                'id' => 142,
                'ciudad' => 'Samancito',
                'parroquia_id' => 8,
                'capital' => 0,
            ),
            130 =>
            array (
                'id' => 143,
                'ciudad' => 'San Carlos',
                'parroquia_id' => 8,
                'capital' => 1,
            ),
            131 =>
            array (
                'id' => 144,
                'ciudad' => 'Sucre',
                'parroquia_id' => 8,
                'capital' => 0,
            ),
            132 =>
            array (
                'id' => 145,
                'ciudad' => 'Tinaco',
                'parroquia_id' => 8,
                'capital' => 0,
            ),
            133 =>
            array (
                'id' => 146,
                'ciudad' => 'Tinaquillo',
                'parroquia_id' => 8,
                'capital' => 0,
            ),
            134 =>
            array (
                'id' => 147,
                'ciudad' => 'Vallecito',
                'parroquia_id' => 8,
                'capital' => 0,
            ),
            135 =>
            array (
                'id' => 148,
                'ciudad' => 'Tucupita',
                'parroquia_id' => 9,
                'capital' => 1,
            ),
            136 =>
            array (
                'id' => 149,
                'ciudad' => 'Caracas',
                'parroquia_id' => 24,
                'capital' => 1,
            ),
            137 =>
            array (
                'id' => 150,
                'ciudad' => 'El Junquito',
                'parroquia_id' => 24,
                'capital' => 0,
            ),
            138 =>
            array (
                'id' => 151,
                'ciudad' => 'Adícora',
                'parroquia_id' => 10,
                'capital' => 0,
            ),
            139 =>
            array (
                'id' => 152,
                'ciudad' => 'Boca de Aroa',
                'parroquia_id' => 10,
                'capital' => 0,
            ),
            140 =>
            array (
                'id' => 153,
                'ciudad' => 'Cabure',
                'parroquia_id' => 10,
                'capital' => 0,
            ),
            141 =>
            array (
                'id' => 154,
                'ciudad' => 'Capadare',
                'parroquia_id' => 10,
                'capital' => 0,
            ),
            142 =>
            array (
                'id' => 155,
                'ciudad' => 'Capatárida',
                'parroquia_id' => 10,
                'capital' => 0,
            ),
            143 =>
            array (
                'id' => 156,
                'ciudad' => 'Chichiriviche',
                'parroquia_id' => 10,
                'capital' => 0,
            ),
            144 =>
            array (
                'id' => 157,
                'ciudad' => 'Churuguara',
                'parroquia_id' => 10,
                'capital' => 0,
            ),
            145 =>
            array (
                'id' => 158,
                'ciudad' => 'Coro',
                'parroquia_id' => 10,
                'capital' => 1,
            ),
            146 =>
            array (
                'id' => 159,
                'ciudad' => 'Cumarebo',
                'parroquia_id' => 10,
                'capital' => 0,
            ),
            147 =>
            array (
                'id' => 160,
                'ciudad' => 'Dabajuro',
                'parroquia_id' => 10,
                'capital' => 0,
            ),
            148 =>
            array (
                'id' => 161,
                'ciudad' => 'Judibana',
                'parroquia_id' => 10,
                'capital' => 0,
            ),
            149 =>
            array (
                'id' => 162,
                'ciudad' => 'La Cruz de Taratara',
                'parroquia_id' => 10,
                'capital' => 0,
            ),
            150 =>
            array (
                'id' => 163,
                'ciudad' => 'La Vela de Coro',
                'parroquia_id' => 10,
                'capital' => 0,
            ),
            151 =>
            array (
                'id' => 164,
                'ciudad' => 'Los Taques',
                'parroquia_id' => 10,
                'capital' => 0,
            ),
            152 =>
            array (
                'id' => 165,
                'ciudad' => 'Maparari',
                'parroquia_id' => 10,
                'capital' => 0,
            ),
            153 =>
            array (
                'id' => 166,
                'ciudad' => 'Mene de Mauroa',
                'parroquia_id' => 10,
                'capital' => 0,
            ),
            154 =>
            array (
                'id' => 167,
                'ciudad' => 'Mirimire',
                'parroquia_id' => 10,
                'capital' => 0,
            ),
            155 =>
            array (
                'id' => 168,
                'ciudad' => 'Pedregal',
                'parroquia_id' => 10,
                'capital' => 0,
            ),
            156 =>
            array (
                'id' => 169,
                'ciudad' => 'Píritu Falcón',
                'parroquia_id' => 10,
                'capital' => 0,
            ),
            157 =>
            array (
                'id' => 170,
                'ciudad' => 'Pueblo Nuevo Falcón',
                'parroquia_id' => 10,
                'capital' => 0,
            ),
            158 =>
            array (
                'id' => 171,
                'ciudad' => 'Puerto Cumarebo',
                'parroquia_id' => 10,
                'capital' => 0,
            ),
            159 =>
            array (
                'id' => 172,
                'ciudad' => 'Punta Cardón',
                'parroquia_id' => 10,
                'capital' => 0,
            ),
            160 =>
            array (
                'id' => 173,
                'ciudad' => 'Punto Fijo',
                'parroquia_id' => 10,
                'capital' => 0,
            ),
            161 =>
            array (
                'id' => 174,
                'ciudad' => 'San Juan de Los Cayos',
                'parroquia_id' => 10,
                'capital' => 0,
            ),
            162 =>
            array (
                'id' => 175,
                'ciudad' => 'San Luis',
                'parroquia_id' => 10,
                'capital' => 0,
            ),
            163 =>
            array (
                'id' => 176,
                'ciudad' => 'Santa Ana Falcón',
                'parroquia_id' => 10,
                'capital' => 0,
            ),
            164 =>
            array (
                'id' => 177,
                'ciudad' => 'Santa Cruz De Bucaral',
                'parroquia_id' => 10,
                'capital' => 0,
            ),
            165 =>
            array (
                'id' => 178,
                'ciudad' => 'Tocopero',
                'parroquia_id' => 10,
                'capital' => 0,
            ),
            166 =>
            array (
                'id' => 179,
                'ciudad' => 'Tocuyo de La Costa',
                'parroquia_id' => 10,
                'capital' => 0,
            ),
            167 =>
            array (
                'id' => 180,
                'ciudad' => 'Tucacas',
                'parroquia_id' => 10,
                'capital' => 0,
            ),
            168 =>
            array (
                'id' => 181,
                'ciudad' => 'Yaracal',
                'parroquia_id' => 10,
                'capital' => 0,
            ),
            169 =>
            array (
                'id' => 182,
                'ciudad' => 'Altagracia de Orituco',
                'parroquia_id' => 11,
                'capital' => 0,
            ),
            170 =>
            array (
                'id' => 183,
                'ciudad' => 'Cabruta',
                'parroquia_id' => 11,
                'capital' => 0,
            ),
            171 =>
            array (
                'id' => 184,
                'ciudad' => 'Calabozo',
                'parroquia_id' => 11,
                'capital' => 0,
            ),
            172 =>
            array (
                'id' => 185,
                'ciudad' => 'Camaguán',
                'parroquia_id' => 11,
                'capital' => 0,
            ),
            173 =>
            array (
                'id' => 196,
                'ciudad' => 'Chaguaramas Guárico',
                'parroquia_id' => 11,
                'capital' => 0,
            ),
            174 =>
            array (
                'id' => 197,
                'ciudad' => 'El Socorro',
                'parroquia_id' => 11,
                'capital' => 0,
            ),
            175 =>
            array (
                'id' => 198,
                'ciudad' => 'El Sombrero',
                'parroquia_id' => 11,
                'capital' => 0,
            ),
            176 =>
            array (
                'id' => 199,
                'ciudad' => 'Las Mercedes de Los Llanos',
                'parroquia_id' => 11,
                'capital' => 0,
            ),
            177 =>
            array (
                'id' => 200,
                'ciudad' => 'Lezama',
                'parroquia_id' => 11,
                'capital' => 0,
            ),
            178 =>
            array (
                'id' => 201,
                'ciudad' => 'Onoto',
                'parroquia_id' => 11,
                'capital' => 0,
            ),
            179 =>
            array (
                'id' => 202,
                'ciudad' => 'Ortíz',
                'parroquia_id' => 11,
                'capital' => 0,
            ),
            180 =>
            array (
                'id' => 203,
                'ciudad' => 'San José de Guaribe',
                'parroquia_id' => 11,
                'capital' => 0,
            ),
            181 =>
            array (
                'id' => 204,
                'ciudad' => 'San Juan de Los Morros',
                'parroquia_id' => 11,
                'capital' => 1,
            ),
            182 =>
            array (
                'id' => 205,
                'ciudad' => 'San Rafael de Laya',
                'parroquia_id' => 11,
                'capital' => 0,
            ),
            183 =>
            array (
                'id' => 206,
                'ciudad' => 'Santa María de Ipire',
                'parroquia_id' => 11,
                'capital' => 0,
            ),
            184 =>
            array (
                'id' => 207,
                'ciudad' => 'Tucupido',
                'parroquia_id' => 11,
                'capital' => 0,
            ),
            185 =>
            array (
                'id' => 208,
                'ciudad' => 'Valle de La Pascua',
                'parroquia_id' => 11,
                'capital' => 0,
            ),
            186 =>
            array (
                'id' => 209,
                'ciudad' => 'Zaraza',
                'parroquia_id' => 11,
                'capital' => 0,
            ),
            187 =>
            array (
                'id' => 210,
                'ciudad' => 'Aguada Grande',
                'parroquia_id' => 12,
                'capital' => 0,
            ),
            188 =>
            array (
                'id' => 211,
                'ciudad' => 'Atarigua',
                'parroquia_id' => 12,
                'capital' => 0,
            ),
            189 =>
            array (
                'id' => 212,
                'ciudad' => 'Barquisimeto',
                'parroquia_id' => 12,
                'capital' => 1,
            ),
            190 =>
            array (
                'id' => 213,
                'ciudad' => 'Bobare',
                'parroquia_id' => 12,
                'capital' => 0,
            ),
            191 =>
            array (
                'id' => 214,
                'ciudad' => 'Cabudare',
                'parroquia_id' => 12,
                'capital' => 0,
            ),
            192 =>
            array (
                'id' => 215,
                'ciudad' => 'Carora',
                'parroquia_id' => 12,
                'capital' => 0,
            ),
            193 =>
            array (
                'id' => 216,
                'ciudad' => 'Cubiro',
                'parroquia_id' => 12,
                'capital' => 0,
            ),
            194 =>
            array (
                'id' => 217,
                'ciudad' => 'Cují',
                'parroquia_id' => 12,
                'capital' => 0,
            ),
            195 =>
            array (
                'id' => 218,
                'ciudad' => 'Duaca',
                'parroquia_id' => 12,
                'capital' => 0,
            ),
            196 =>
            array (
                'id' => 219,
                'ciudad' => 'El Manzano',
                'parroquia_id' => 12,
                'capital' => 0,
            ),
            197 =>
            array (
                'id' => 220,
                'ciudad' => 'El Tocuyo',
                'parroquia_id' => 12,
                'capital' => 0,
            ),
            198 =>
            array (
                'id' => 221,
                'ciudad' => 'Guaríco',
                'parroquia_id' => 12,
                'capital' => 0,
            ),
            199 =>
            array (
                'id' => 222,
                'ciudad' => 'Humocaro Alto',
                'parroquia_id' => 12,
                'capital' => 0,
            ),
            200 =>
            array (
                'id' => 223,
                'ciudad' => 'Humocaro Bajo',
                'parroquia_id' => 12,
                'capital' => 0,
            ),
            201 =>
            array (
                'id' => 224,
                'ciudad' => 'La Miel',
                'parroquia_id' => 12,
                'capital' => 0,
            ),
            202 =>
            array (
                'id' => 225,
                'ciudad' => 'Moroturo',
                'parroquia_id' => 12,
                'capital' => 0,
            ),
            203 =>
            array (
                'id' => 226,
                'ciudad' => 'Quíbor',
                'parroquia_id' => 12,
                'capital' => 0,
            ),
            204 =>
            array (
                'id' => 227,
                'ciudad' => 'Río Claro',
                'parroquia_id' => 12,
                'capital' => 0,
            ),
            205 =>
            array (
                'id' => 228,
                'ciudad' => 'Sanare',
                'parroquia_id' => 12,
                'capital' => 0,
            ),
            206 =>
            array (
                'id' => 229,
                'ciudad' => 'Santa Inés',
                'parroquia_id' => 12,
                'capital' => 0,
            ),
            207 =>
            array (
                'id' => 230,
                'ciudad' => 'Sarare',
                'parroquia_id' => 12,
                'capital' => 0,
            ),
            208 =>
            array (
                'id' => 231,
                'ciudad' => 'Siquisique',
                'parroquia_id' => 12,
                'capital' => 0,
            ),
            209 =>
            array (
                'id' => 232,
                'ciudad' => 'Tintorero',
                'parroquia_id' => 12,
                'capital' => 0,
            ),
            210 =>
            array (
                'id' => 233,
                'ciudad' => 'Apartaderos Mérida',
                'parroquia_id' => 13,
                'capital' => 0,
            ),
            211 =>
            array (
                'id' => 234,
                'ciudad' => 'Arapuey',
                'parroquia_id' => 13,
                'capital' => 0,
            ),
            212 =>
            array (
                'id' => 235,
                'ciudad' => 'Bailadores',
                'parroquia_id' => 13,
                'capital' => 0,
            ),
            213 =>
            array (
                'id' => 236,
                'ciudad' => 'Caja Seca',
                'parroquia_id' => 13,
                'capital' => 0,
            ),
            214 =>
            array (
                'id' => 237,
                'ciudad' => 'Canaguá',
                'parroquia_id' => 13,
                'capital' => 0,
            ),
            215 =>
            array (
                'id' => 238,
                'ciudad' => 'Chachopo',
                'parroquia_id' => 13,
                'capital' => 0,
            ),
            216 =>
            array (
                'id' => 239,
                'ciudad' => 'Chiguara',
                'parroquia_id' => 13,
                'capital' => 0,
            ),
            217 =>
            array (
                'id' => 240,
                'ciudad' => 'Ejido',
                'parroquia_id' => 13,
                'capital' => 0,
            ),
            218 =>
            array (
                'id' => 241,
                'ciudad' => 'El Vigía',
                'parroquia_id' => 13,
                'capital' => 0,
            ),
            219 =>
            array (
                'id' => 242,
                'ciudad' => 'La Azulita',
                'parroquia_id' => 13,
                'capital' => 0,
            ),
            220 =>
            array (
                'id' => 243,
                'ciudad' => 'La Playa',
                'parroquia_id' => 13,
                'capital' => 0,
            ),
            221 =>
            array (
                'id' => 244,
                'ciudad' => 'Lagunillas Mérida',
                'parroquia_id' => 13,
                'capital' => 0,
            ),
            222 =>
            array (
                'id' => 245,
                'ciudad' => 'Mérida',
                'parroquia_id' => 13,
                'capital' => 1,
            ),
            223 =>
            array (
                'id' => 246,
                'ciudad' => 'Mesa de Bolívar',
                'parroquia_id' => 13,
                'capital' => 0,
            ),
            224 =>
            array (
                'id' => 247,
                'ciudad' => 'Mucuchíes',
                'parroquia_id' => 13,
                'capital' => 0,
            ),
            225 =>
            array (
                'id' => 248,
                'ciudad' => 'Mucujepe',
                'parroquia_id' => 13,
                'capital' => 0,
            ),
            226 =>
            array (
                'id' => 249,
                'ciudad' => 'Mucuruba',
                'parroquia_id' => 13,
                'capital' => 0,
            ),
            227 =>
            array (
                'id' => 250,
                'ciudad' => 'Nueva Bolivia',
                'parroquia_id' => 13,
                'capital' => 0,
            ),
            228 =>
            array (
                'id' => 251,
                'ciudad' => 'Palmarito',
                'parroquia_id' => 13,
                'capital' => 0,
            ),
            229 =>
            array (
                'id' => 252,
                'ciudad' => 'Pueblo Llano',
                'parroquia_id' => 13,
                'capital' => 0,
            ),
            230 =>
            array (
                'id' => 253,
                'ciudad' => 'Santa Cruz de Mora',
                'parroquia_id' => 13,
                'capital' => 0,
            ),
            231 =>
            array (
                'id' => 254,
                'ciudad' => 'Santa Elena de Arenales',
                'parroquia_id' => 13,
                'capital' => 0,
            ),
            232 =>
            array (
                'id' => 255,
                'ciudad' => 'Santo Domingo',
                'parroquia_id' => 13,
                'capital' => 0,
            ),
            233 =>
            array (
                'id' => 256,
                'ciudad' => 'Tabáy',
                'parroquia_id' => 13,
                'capital' => 0,
            ),
            234 =>
            array (
                'id' => 257,
                'ciudad' => 'Timotes',
                'parroquia_id' => 13,
                'capital' => 0,
            ),
            235 =>
            array (
                'id' => 258,
                'ciudad' => 'Torondoy',
                'parroquia_id' => 13,
                'capital' => 0,
            ),
            236 =>
            array (
                'id' => 259,
                'ciudad' => 'Tovar',
                'parroquia_id' => 13,
                'capital' => 0,
            ),
            237 =>
            array (
                'id' => 260,
                'ciudad' => 'Tucani',
                'parroquia_id' => 13,
                'capital' => 0,
            ),
            238 =>
            array (
                'id' => 261,
                'ciudad' => 'Zea',
                'parroquia_id' => 13,
                'capital' => 0,
            ),
            239 =>
            array (
                'id' => 262,
                'ciudad' => 'Araguita',
                'parroquia_id' => 14,
                'capital' => 0,
            ),
            240 =>
            array (
                'id' => 263,
                'ciudad' => 'Carrizal',
                'parroquia_id' => 14,
                'capital' => 0,
            ),
            241 =>
            array (
                'id' => 264,
                'ciudad' => 'Caucagua',
                'parroquia_id' => 14,
                'capital' => 0,
            ),
            242 =>
            array (
                'id' => 265,
                'ciudad' => 'Chaguaramas Miranda',
                'parroquia_id' => 14,
                'capital' => 0,
            ),
            243 =>
            array (
                'id' => 266,
                'ciudad' => 'Charallave',
                'parroquia_id' => 14,
                'capital' => 0,
            ),
            244 =>
            array (
                'id' => 267,
                'ciudad' => 'Chirimena',
                'parroquia_id' => 14,
                'capital' => 0,
            ),
            245 =>
            array (
                'id' => 268,
                'ciudad' => 'Chuspa',
                'parroquia_id' => 14,
                'capital' => 0,
            ),
            246 =>
            array (
                'id' => 269,
                'ciudad' => 'Cúa',
                'parroquia_id' => 14,
                'capital' => 0,
            ),
            247 =>
            array (
                'id' => 270,
                'ciudad' => 'Cupira',
                'parroquia_id' => 14,
                'capital' => 0,
            ),
            248 =>
            array (
                'id' => 271,
                'ciudad' => 'Curiepe',
                'parroquia_id' => 14,
                'capital' => 0,
            ),
            249 =>
            array (
                'id' => 272,
                'ciudad' => 'El Guapo',
                'parroquia_id' => 14,
                'capital' => 0,
            ),
            250 =>
            array (
                'id' => 273,
                'ciudad' => 'El Jarillo',
                'parroquia_id' => 14,
                'capital' => 0,
            ),
            251 =>
            array (
                'id' => 274,
                'ciudad' => 'Filas de Mariche',
                'parroquia_id' => 14,
                'capital' => 0,
            ),
            252 =>
            array (
                'id' => 275,
                'ciudad' => 'Guarenas',
                'parroquia_id' => 14,
                'capital' => 0,
            ),
            253 =>
            array (
                'id' => 276,
                'ciudad' => 'Guatire',
                'parroquia_id' => 14,
                'capital' => 0,
            ),
            254 =>
            array (
                'id' => 277,
                'ciudad' => 'Higuerote',
                'parroquia_id' => 14,
                'capital' => 0,
            ),
            255 =>
            array (
                'id' => 278,
                'ciudad' => 'Los Anaucos',
                'parroquia_id' => 14,
                'capital' => 0,
            ),
            256 =>
            array (
                'id' => 279,
                'ciudad' => 'Los Teques',
                'parroquia_id' => 14,
                'capital' => 1,
            ),
            257 =>
            array (
                'id' => 280,
                'ciudad' => 'Ocumare del Tuy',
                'parroquia_id' => 14,
                'capital' => 0,
            ),
            258 =>
            array (
                'id' => 281,
                'ciudad' => 'Panaquire',
                'parroquia_id' => 14,
                'capital' => 0,
            ),
            259 =>
            array (
                'id' => 282,
                'ciudad' => 'Paracotos',
                'parroquia_id' => 14,
                'capital' => 0,
            ),
            260 =>
            array (
                'id' => 283,
                'ciudad' => 'Río Chico',
                'parroquia_id' => 14,
                'capital' => 0,
            ),
            261 =>
            array (
                'id' => 284,
                'ciudad' => 'San Antonio de Los Altos',
                'parroquia_id' => 14,
                'capital' => 0,
            ),
            262 =>
            array (
                'id' => 285,
                'ciudad' => 'San Diego de Los Altos',
                'parroquia_id' => 14,
                'capital' => 0,
            ),
            263 =>
            array (
                'id' => 286,
                'ciudad' => 'San Fernando del Guapo',
                'parroquia_id' => 14,
                'capital' => 0,
            ),
            264 =>
            array (
                'id' => 287,
                'ciudad' => 'San Francisco de Yare',
                'parroquia_id' => 14,
                'capital' => 0,
            ),
            265 =>
            array (
                'id' => 288,
                'ciudad' => 'San José de Los Altos',
                'parroquia_id' => 14,
                'capital' => 0,
            ),
            266 =>
            array (
                'id' => 289,
                'ciudad' => 'San José de Río Chico',
                'parroquia_id' => 14,
                'capital' => 0,
            ),
            267 =>
            array (
                'id' => 290,
                'ciudad' => 'San Pedro de Los Altos',
                'parroquia_id' => 14,
                'capital' => 0,
            ),
            268 =>
            array (
                'id' => 291,
                'ciudad' => 'Santa Lucía',
                'parroquia_id' => 14,
                'capital' => 0,
            ),
            269 =>
            array (
                'id' => 292,
                'ciudad' => 'Santa Teresa',
                'parroquia_id' => 14,
                'capital' => 0,
            ),
            270 =>
            array (
                'id' => 293,
                'ciudad' => 'Tacarigua de La Laguna',
                'parroquia_id' => 14,
                'capital' => 0,
            ),
            271 =>
            array (
                'id' => 294,
                'ciudad' => 'Tacarigua de Mamporal',
                'parroquia_id' => 14,
                'capital' => 0,
            ),
            272 =>
            array (
                'id' => 295,
                'ciudad' => 'Tácata',
                'parroquia_id' => 14,
                'capital' => 0,
            ),
            273 =>
            array (
                'id' => 296,
                'ciudad' => 'Turumo',
                'parroquia_id' => 14,
                'capital' => 0,
            ),
            274 =>
            array (
                'id' => 297,
                'ciudad' => 'Aguasay',
                'parroquia_id' => 15,
                'capital' => 0,
            ),
            275 =>
            array (
                'id' => 298,
                'ciudad' => 'Aragua de Maturín',
                'parroquia_id' => 15,
                'capital' => 0,
            ),
            276 =>
            array (
                'id' => 299,
                'ciudad' => 'Barrancas del Orinoco',
                'parroquia_id' => 15,
                'capital' => 0,
            ),
            277 =>
            array (
                'id' => 300,
                'ciudad' => 'Caicara de Maturín',
                'parroquia_id' => 15,
                'capital' => 0,
            ),
            278 =>
            array (
                'id' => 301,
                'ciudad' => 'Caripe',
                'parroquia_id' => 15,
                'capital' => 0,
            ),
            279 =>
            array (
                'id' => 302,
                'ciudad' => 'Caripito',
                'parroquia_id' => 15,
                'capital' => 0,
            ),
            280 =>
            array (
                'id' => 303,
                'ciudad' => 'Chaguaramal',
                'parroquia_id' => 15,
                'capital' => 0,
            ),
            281 =>
            array (
                'id' => 305,
                'ciudad' => 'Chaguaramas Monagas',
                'parroquia_id' => 15,
                'capital' => 0,
            ),
            282 =>
            array (
                'id' => 307,
                'ciudad' => 'El Furrial',
                'parroquia_id' => 15,
                'capital' => 0,
            ),
            283 =>
            array (
                'id' => 308,
                'ciudad' => 'El Tejero',
                'parroquia_id' => 15,
                'capital' => 0,
            ),
            284 =>
            array (
                'id' => 309,
                'ciudad' => 'Jusepín',
                'parroquia_id' => 15,
                'capital' => 0,
            ),
            285 =>
            array (
                'id' => 310,
                'ciudad' => 'La Toscana',
                'parroquia_id' => 15,
                'capital' => 0,
            ),
            286 =>
            array (
                'id' => 311,
                'ciudad' => 'Maturín',
                'parroquia_id' => 15,
                'capital' => 1,
            ),
            287 =>
            array (
                'id' => 312,
                'ciudad' => 'Miraflores',
                'parroquia_id' => 15,
                'capital' => 0,
            ),
            288 =>
            array (
                'id' => 313,
                'ciudad' => 'Punta de Mata',
                'parroquia_id' => 15,
                'capital' => 0,
            ),
            289 =>
            array (
                'id' => 314,
                'ciudad' => 'Quiriquire',
                'parroquia_id' => 15,
                'capital' => 0,
            ),
            290 =>
            array (
                'id' => 315,
                'ciudad' => 'San Antonio de Maturín',
                'parroquia_id' => 15,
                'capital' => 0,
            ),
            291 =>
            array (
                'id' => 316,
                'ciudad' => 'San Vicente Monagas',
                'parroquia_id' => 15,
                'capital' => 0,
            ),
            292 =>
            array (
                'id' => 317,
                'ciudad' => 'Santa Bárbara',
                'parroquia_id' => 15,
                'capital' => 0,
            ),
            293 =>
            array (
                'id' => 318,
                'ciudad' => 'Temblador',
                'parroquia_id' => 15,
                'capital' => 0,
            ),
            294 =>
            array (
                'id' => 319,
                'ciudad' => 'Teresen',
                'parroquia_id' => 15,
                'capital' => 0,
            ),
            295 =>
            array (
                'id' => 320,
                'ciudad' => 'Uracoa',
                'parroquia_id' => 15,
                'capital' => 0,
            ),
            296 =>
            array (
                'id' => 321,
                'ciudad' => 'Altagracia',
                'parroquia_id' => 16,
                'capital' => 0,
            ),
            297 =>
            array (
                'id' => 322,
                'ciudad' => 'Boca de Pozo',
                'parroquia_id' => 16,
                'capital' => 0,
            ),
            298 =>
            array (
                'id' => 323,
                'ciudad' => 'Boca de Río',
                'parroquia_id' => 16,
                'capital' => 0,
            ),
            299 =>
            array (
                'id' => 324,
                'ciudad' => 'El Espinal',
                'parroquia_id' => 16,
                'capital' => 0,
            ),
            300 =>
            array (
                'id' => 325,
                'ciudad' => 'El Valle del Espíritu Santo',
                'parroquia_id' => 16,
                'capital' => 0,
            ),
            301 =>
            array (
                'id' => 326,
                'ciudad' => 'El Yaque',
                'parroquia_id' => 16,
                'capital' => 0,
            ),
            302 =>
            array (
                'id' => 327,
                'ciudad' => 'Juangriego',
                'parroquia_id' => 16,
                'capital' => 0,
            ),
            303 =>
            array (
                'id' => 328,
                'ciudad' => 'La Asunción',
                'parroquia_id' => 16,
                'capital' => 1,
            ),
            304 =>
            array (
                'id' => 329,
                'ciudad' => 'La Guardia',
                'parroquia_id' => 16,
                'capital' => 0,
            ),
            305 =>
            array (
                'id' => 330,
                'ciudad' => 'Pampatar',
                'parroquia_id' => 16,
                'capital' => 0,
            ),
            306 =>
            array (
                'id' => 331,
                'ciudad' => 'Porlamar',
                'parroquia_id' => 16,
                'capital' => 0,
            ),
            307 =>
            array (
                'id' => 332,
                'ciudad' => 'Puerto Fermín',
                'parroquia_id' => 16,
                'capital' => 0,
            ),
            308 =>
            array (
                'id' => 333,
                'ciudad' => 'Punta de Piedras',
                'parroquia_id' => 16,
                'capital' => 0,
            ),
            309 =>
            array (
                'id' => 334,
                'ciudad' => 'San Francisco de Macanao',
                'parroquia_id' => 16,
                'capital' => 0,
            ),
            310 =>
            array (
                'id' => 335,
                'ciudad' => 'San Juan Bautista',
                'parroquia_id' => 16,
                'capital' => 0,
            ),
            311 =>
            array (
                'id' => 336,
                'ciudad' => 'San Pedro de Coche',
                'parroquia_id' => 16,
                'capital' => 0,
            ),
            312 =>
            array (
                'id' => 337,
                'ciudad' => 'Santa Ana de Nueva Esparta',
                'parroquia_id' => 16,
                'capital' => 0,
            ),
            313 =>
            array (
                'id' => 338,
                'ciudad' => 'Villa Rosa',
                'parroquia_id' => 16,
                'capital' => 0,
            ),
            314 =>
            array (
                'id' => 339,
                'ciudad' => 'Acarigua',
                'parroquia_id' => 17,
                'capital' => 0,
            ),
            315 =>
            array (
                'id' => 340,
                'ciudad' => 'Agua Blanca',
                'parroquia_id' => 17,
                'capital' => 0,
            ),
            316 =>
            array (
                'id' => 341,
                'ciudad' => 'Araure',
                'parroquia_id' => 17,
                'capital' => 0,
            ),
            317 =>
            array (
                'id' => 342,
                'ciudad' => 'Biscucuy',
                'parroquia_id' => 17,
                'capital' => 0,
            ),
            318 =>
            array (
                'id' => 343,
                'ciudad' => 'Boconoito',
                'parroquia_id' => 17,
                'capital' => 0,
            ),
            319 =>
            array (
                'id' => 344,
                'ciudad' => 'Campo Elías',
                'parroquia_id' => 17,
                'capital' => 0,
            ),
            320 =>
            array (
                'id' => 345,
                'ciudad' => 'Chabasquén',
                'parroquia_id' => 17,
                'capital' => 0,
            ),
            321 =>
            array (
                'id' => 346,
                'ciudad' => 'Guanare',
                'parroquia_id' => 17,
                'capital' => 1,
            ),
            322 =>
            array (
                'id' => 347,
                'ciudad' => 'Guanarito',
                'parroquia_id' => 17,
                'capital' => 0,
            ),
            323 =>
            array (
                'id' => 348,
                'ciudad' => 'La Aparición',
                'parroquia_id' => 17,
                'capital' => 0,
            ),
            324 =>
            array (
                'id' => 349,
                'ciudad' => 'La Misión',
                'parroquia_id' => 17,
                'capital' => 0,
            ),
            325 =>
            array (
                'id' => 350,
                'ciudad' => 'Mesa de Cavacas',
                'parroquia_id' => 17,
                'capital' => 0,
            ),
            326 =>
            array (
                'id' => 351,
                'ciudad' => 'Ospino',
                'parroquia_id' => 17,
                'capital' => 0,
            ),
            327 =>
            array (
                'id' => 352,
                'ciudad' => 'Papelón',
                'parroquia_id' => 17,
                'capital' => 0,
            ),
            328 =>
            array (
                'id' => 353,
                'ciudad' => 'Payara',
                'parroquia_id' => 17,
                'capital' => 0,
            ),
            329 =>
            array (
                'id' => 354,
                'ciudad' => 'Pimpinela',
                'parroquia_id' => 17,
                'capital' => 0,
            ),
            330 =>
            array (
                'id' => 355,
                'ciudad' => 'Píritu de Portuguesa',
                'parroquia_id' => 17,
                'capital' => 0,
            ),
            331 =>
            array (
                'id' => 356,
                'ciudad' => 'San Rafael de Onoto',
                'parroquia_id' => 17,
                'capital' => 0,
            ),
            332 =>
            array (
                'id' => 357,
                'ciudad' => 'Santa Rosalía',
                'parroquia_id' => 17,
                'capital' => 0,
            ),
            333 =>
            array (
                'id' => 358,
                'ciudad' => 'Turén',
                'parroquia_id' => 17,
                'capital' => 0,
            ),
            334 =>
            array (
                'id' => 359,
                'ciudad' => 'Altos de Sucre',
                'parroquia_id' => 18,
                'capital' => 0,
            ),
            335 =>
            array (
                'id' => 360,
                'ciudad' => 'Araya',
                'parroquia_id' => 18,
                'capital' => 0,
            ),
            336 =>
            array (
                'id' => 361,
                'ciudad' => 'Cariaco',
                'parroquia_id' => 18,
                'capital' => 0,
            ),
            337 =>
            array (
                'id' => 362,
                'ciudad' => 'Carúpano',
                'parroquia_id' => 18,
                'capital' => 0,
            ),
            338 =>
            array (
                'id' => 363,
                'ciudad' => 'Casanay',
                'parroquia_id' => 18,
                'capital' => 0,
            ),
            339 =>
            array (
                'id' => 364,
                'ciudad' => 'Cumaná',
                'parroquia_id' => 18,
                'capital' => 1,
            ),
            340 =>
            array (
                'id' => 365,
                'ciudad' => 'Cumanacoa',
                'parroquia_id' => 18,
                'capital' => 0,
            ),
            341 =>
            array (
                'id' => 366,
                'ciudad' => 'El Morro Puerto Santo',
                'parroquia_id' => 18,
                'capital' => 0,
            ),
            342 =>
            array (
                'id' => 367,
                'ciudad' => 'El Pilar',
                'parroquia_id' => 18,
                'capital' => 0,
            ),
            343 =>
            array (
                'id' => 368,
                'ciudad' => 'El Poblado',
                'parroquia_id' => 18,
                'capital' => 0,
            ),
            344 =>
            array (
                'id' => 369,
                'ciudad' => 'Guaca',
                'parroquia_id' => 18,
                'capital' => 0,
            ),
            345 =>
            array (
                'id' => 370,
                'ciudad' => 'Guiria',
                'parroquia_id' => 18,
                'capital' => 0,
            ),
            346 =>
            array (
                'id' => 371,
                'ciudad' => 'Irapa',
                'parroquia_id' => 18,
                'capital' => 0,
            ),
            347 =>
            array (
                'id' => 372,
                'ciudad' => 'Manicuare',
                'parroquia_id' => 18,
                'capital' => 0,
            ),
            348 =>
            array (
                'id' => 373,
                'ciudad' => 'Mariguitar',
                'parroquia_id' => 18,
                'capital' => 0,
            ),
            349 =>
            array (
                'id' => 374,
                'ciudad' => 'Río Caribe',
                'parroquia_id' => 18,
                'capital' => 0,
            ),
            350 =>
            array (
                'id' => 375,
                'ciudad' => 'San Antonio del Golfo',
                'parroquia_id' => 18,
                'capital' => 0,
            ),
            351 =>
            array (
                'id' => 376,
                'ciudad' => 'San José de Aerocuar',
                'parroquia_id' => 18,
                'capital' => 0,
            ),
            352 =>
            array (
                'id' => 377,
                'ciudad' => 'San Vicente de Sucre',
                'parroquia_id' => 18,
                'capital' => 0,
            ),
            353 =>
            array (
                'id' => 378,
                'ciudad' => 'Santa Fe de Sucre',
                'parroquia_id' => 18,
                'capital' => 0,
            ),
            354 =>
            array (
                'id' => 379,
                'ciudad' => 'Tunapuy',
                'parroquia_id' => 18,
                'capital' => 0,
            ),
            355 =>
            array (
                'id' => 380,
                'ciudad' => 'Yaguaraparo',
                'parroquia_id' => 18,
                'capital' => 0,
            ),
            356 =>
            array (
                'id' => 381,
                'ciudad' => 'Yoco',
                'parroquia_id' => 18,
                'capital' => 0,
            ),
            357 =>
            array (
                'id' => 382,
                'ciudad' => 'Abejales',
                'parroquia_id' => 19,
                'capital' => 0,
            ),
            358 =>
            array (
                'id' => 383,
                'ciudad' => 'Borota',
                'parroquia_id' => 19,
                'capital' => 0,
            ),
            359 =>
            array (
                'id' => 384,
                'ciudad' => 'Bramon',
                'parroquia_id' => 19,
                'capital' => 0,
            ),
            360 =>
            array (
                'id' => 385,
                'ciudad' => 'Capacho',
                'parroquia_id' => 19,
                'capital' => 0,
            ),
            361 =>
            array (
                'id' => 386,
                'ciudad' => 'Colón',
                'parroquia_id' => 19,
                'capital' => 0,
            ),
            362 =>
            array (
                'id' => 387,
                'ciudad' => 'Coloncito',
                'parroquia_id' => 19,
                'capital' => 0,
            ),
            363 =>
            array (
                'id' => 388,
                'ciudad' => 'Cordero',
                'parroquia_id' => 19,
                'capital' => 0,
            ),
            364 =>
            array (
                'id' => 389,
                'ciudad' => 'El Cobre',
                'parroquia_id' => 19,
                'capital' => 0,
            ),
            365 =>
            array (
                'id' => 390,
                'ciudad' => 'El Pinal',
                'parroquia_id' => 19,
                'capital' => 0,
            ),
            366 =>
            array (
                'id' => 391,
                'ciudad' => 'Independencia',
                'parroquia_id' => 19,
                'capital' => 0,
            ),
            367 =>
            array (
                'id' => 392,
                'ciudad' => 'La Fría',
                'parroquia_id' => 19,
                'capital' => 0,
            ),
            368 =>
            array (
                'id' => 393,
                'ciudad' => 'La Grita',
                'parroquia_id' => 19,
                'capital' => 0,
            ),
            369 =>
            array (
                'id' => 394,
                'ciudad' => 'La Pedrera',
                'parroquia_id' => 19,
                'capital' => 0,
            ),
            370 =>
            array (
                'id' => 395,
                'ciudad' => 'La Tendida',
                'parroquia_id' => 19,
                'capital' => 0,
            ),
            371 =>
            array (
                'id' => 396,
                'ciudad' => 'Las Delicias',
                'parroquia_id' => 19,
                'capital' => 0,
            ),
            372 =>
            array (
                'id' => 397,
                'ciudad' => 'Las Hernández',
                'parroquia_id' => 19,
                'capital' => 0,
            ),
            373 =>
            array (
                'id' => 398,
                'ciudad' => 'Lobatera',
                'parroquia_id' => 19,
                'capital' => 0,
            ),
            374 =>
            array (
                'id' => 399,
                'ciudad' => 'Michelena',
                'parroquia_id' => 19,
                'capital' => 0,
            ),
            375 =>
            array (
                'id' => 400,
                'ciudad' => 'Palmira',
                'parroquia_id' => 19,
                'capital' => 0,
            ),
            376 =>
            array (
                'id' => 401,
                'ciudad' => 'Pregonero',
                'parroquia_id' => 19,
                'capital' => 0,
            ),
            377 =>
            array (
                'id' => 402,
                'ciudad' => 'Queniquea',
                'parroquia_id' => 19,
                'capital' => 0,
            ),
            378 =>
            array (
                'id' => 403,
                'ciudad' => 'Rubio',
                'parroquia_id' => 19,
                'capital' => 0,
            ),
            379 =>
            array (
                'id' => 404,
                'ciudad' => 'San Antonio del Tachira',
                'parroquia_id' => 19,
                'capital' => 0,
            ),
            380 =>
            array (
                'id' => 405,
                'ciudad' => 'San Cristobal',
                'parroquia_id' => 19,
                'capital' => 1,
            ),
            381 =>
            array (
                'id' => 406,
                'ciudad' => 'San José de Bolívar',
                'parroquia_id' => 19,
                'capital' => 0,
            ),
            382 =>
            array (
                'id' => 407,
                'ciudad' => 'San Josecito',
                'parroquia_id' => 19,
                'capital' => 0,
            ),
            383 =>
            array (
                'id' => 408,
                'ciudad' => 'San Pedro del Río',
                'parroquia_id' => 19,
                'capital' => 0,
            ),
            384 =>
            array (
                'id' => 409,
                'ciudad' => 'Santa Ana Táchira',
                'parroquia_id' => 19,
                'capital' => 0,
            ),
            385 =>
            array (
                'id' => 410,
                'ciudad' => 'Seboruco',
                'parroquia_id' => 19,
                'capital' => 0,
            ),
            386 =>
            array (
                'id' => 411,
                'ciudad' => 'Táriba',
                'parroquia_id' => 19,
                'capital' => 0,
            ),
            387 =>
            array (
                'id' => 412,
                'ciudad' => 'Umuquena',
                'parroquia_id' => 19,
                'capital' => 0,
            ),
            388 =>
            array (
                'id' => 413,
                'ciudad' => 'Ureña',
                'parroquia_id' => 19,
                'capital' => 0,
            ),
            389 =>
            array (
                'id' => 414,
                'ciudad' => 'Batatal',
                'parroquia_id' => 20,
                'capital' => 0,
            ),
            390 =>
            array (
                'id' => 415,
                'ciudad' => 'Betijoque',
                'parroquia_id' => 20,
                'capital' => 0,
            ),
            391 =>
            array (
                'id' => 416,
                'ciudad' => 'Boconó',
                'parroquia_id' => 20,
                'capital' => 0,
            ),
            392 =>
            array (
                'id' => 417,
                'ciudad' => 'Carache',
                'parroquia_id' => 20,
                'capital' => 0,
            ),
            393 =>
            array (
                'id' => 418,
                'ciudad' => 'Chejende',
                'parroquia_id' => 20,
                'capital' => 0,
            ),
            394 =>
            array (
                'id' => 419,
                'ciudad' => 'Cuicas',
                'parroquia_id' => 20,
                'capital' => 0,
            ),
            395 =>
            array (
                'id' => 420,
                'ciudad' => 'El Dividive',
                'parroquia_id' => 20,
                'capital' => 0,
            ),
            396 =>
            array (
                'id' => 421,
                'ciudad' => 'El Jaguito',
                'parroquia_id' => 20,
                'capital' => 0,
            ),
            397 =>
            array (
                'id' => 422,
                'ciudad' => 'Escuque',
                'parroquia_id' => 20,
                'capital' => 0,
            ),
            398 =>
            array (
                'id' => 423,
                'ciudad' => 'Isnotú',
                'parroquia_id' => 20,
                'capital' => 0,
            ),
            399 =>
            array (
                'id' => 424,
                'ciudad' => 'Jajó',
                'parroquia_id' => 20,
                'capital' => 0,
            ),
            400 =>
            array (
                'id' => 425,
                'ciudad' => 'La Ceiba',
                'parroquia_id' => 20,
                'capital' => 0,
            ),
            401 =>
            array (
                'id' => 426,
                'ciudad' => 'La Concepción de Trujllo',
                'parroquia_id' => 20,
                'capital' => 0,
            ),
            402 =>
            array (
                'id' => 427,
                'ciudad' => 'La Mesa de Esnujaque',
                'parroquia_id' => 20,
                'capital' => 0,
            ),
            403 =>
            array (
                'id' => 428,
                'ciudad' => 'La Puerta',
                'parroquia_id' => 20,
                'capital' => 0,
            ),
            404 =>
            array (
                'id' => 429,
                'ciudad' => 'La Quebrada',
                'parroquia_id' => 20,
                'capital' => 0,
            ),
            405 =>
            array (
                'id' => 430,
                'ciudad' => 'Mendoza Fría',
                'parroquia_id' => 20,
                'capital' => 0,
            ),
            406 =>
            array (
                'id' => 431,
                'ciudad' => 'Meseta de Chimpire',
                'parroquia_id' => 20,
                'capital' => 0,
            ),
            407 =>
            array (
                'id' => 432,
                'ciudad' => 'Monay',
                'parroquia_id' => 20,
                'capital' => 0,
            ),
            408 =>
            array (
                'id' => 433,
                'ciudad' => 'Motatán',
                'parroquia_id' => 20,
                'capital' => 0,
            ),
            409 =>
            array (
                'id' => 434,
                'ciudad' => 'Pampán',
                'parroquia_id' => 20,
                'capital' => 0,
            ),
            410 =>
            array (
                'id' => 435,
                'ciudad' => 'Pampanito',
                'parroquia_id' => 20,
                'capital' => 0,
            ),
            411 =>
            array (
                'id' => 436,
                'ciudad' => 'Sabana de Mendoza',
                'parroquia_id' => 20,
                'capital' => 0,
            ),
            412 =>
            array (
                'id' => 437,
                'ciudad' => 'San Lázaro',
                'parroquia_id' => 20,
                'capital' => 0,
            ),
            413 =>
            array (
                'id' => 438,
                'ciudad' => 'Santa Ana de Trujillo',
                'parroquia_id' => 20,
                'capital' => 0,
            ),
            414 =>
            array (
                'id' => 439,
                'ciudad' => 'Tostós',
                'parroquia_id' => 20,
                'capital' => 0,
            ),
            415 =>
            array (
                'id' => 440,
                'ciudad' => 'Trujillo',
                'parroquia_id' => 20,
                'capital' => 1,
            ),
            416 =>
            array (
                'id' => 441,
                'ciudad' => 'Valera',
                'parroquia_id' => 20,
                'capital' => 0,
            ),
            417 =>
            array (
                'id' => 442,
                'ciudad' => 'Carayaca',
                'parroquia_id' => 21,
                'capital' => 0,
            ),
            418 =>
            array (
                'id' => 443,
                'ciudad' => 'Litoral',
                'parroquia_id' => 21,
                'capital' => 0,
            ),
            419 =>
            array (
                'id' => 444,
                'ciudad' => 'Archipiélago Los Roques',
                'parroquia_id' => 25,
                'capital' => 0,
            ),
            420 =>
            array (
                'id' => 445,
                'ciudad' => 'Aroa',
                'parroquia_id' => 22,
                'capital' => 0,
            ),
            421 =>
            array (
                'id' => 446,
                'ciudad' => 'Boraure',
                'parroquia_id' => 22,
                'capital' => 0,
            ),
            422 =>
            array (
                'id' => 447,
                'ciudad' => 'Campo Elías de Yaracuy',
                'parroquia_id' => 22,
                'capital' => 0,
            ),
            423 =>
            array (
                'id' => 448,
                'ciudad' => 'Chivacoa',
                'parroquia_id' => 22,
                'capital' => 0,
            ),
            424 =>
            array (
                'id' => 449,
                'ciudad' => 'Cocorote',
                'parroquia_id' => 22,
                'capital' => 0,
            ),
            425 =>
            array (
                'id' => 450,
                'ciudad' => 'Farriar',
                'parroquia_id' => 22,
                'capital' => 0,
            ),
            426 =>
            array (
                'id' => 451,
                'ciudad' => 'Guama',
                'parroquia_id' => 22,
                'capital' => 0,
            ),
            427 =>
            array (
                'id' => 452,
                'ciudad' => 'Marín',
                'parroquia_id' => 22,
                'capital' => 0,
            ),
            428 =>
            array (
                'id' => 453,
                'ciudad' => 'Nirgua',
                'parroquia_id' => 22,
                'capital' => 0,
            ),
            429 =>
            array (
                'id' => 454,
                'ciudad' => 'Sabana de Parra',
                'parroquia_id' => 22,
                'capital' => 0,
            ),
            430 =>
            array (
                'id' => 455,
                'ciudad' => 'Salom',
                'parroquia_id' => 22,
                'capital' => 0,
            ),
            431 =>
            array (
                'id' => 456,
                'ciudad' => 'San Felipe',
                'parroquia_id' => 22,
                'capital' => 1,
            ),
            432 =>
            array (
                'id' => 457,
                'ciudad' => 'San Pablo de Yaracuy',
                'parroquia_id' => 22,
                'capital' => 0,
            ),
            433 =>
            array (
                'id' => 458,
                'ciudad' => 'Urachiche',
                'parroquia_id' => 22,
                'capital' => 0,
            ),
            434 =>
            array (
                'id' => 459,
                'ciudad' => 'Yaritagua',
                'parroquia_id' => 22,
                'capital' => 0,
            ),
            435 =>
            array (
                'id' => 460,
                'ciudad' => 'Yumare',
                'parroquia_id' => 22,
                'capital' => 0,
            ),
            436 =>
            array (
                'id' => 461,
                'ciudad' => 'Bachaquero',
                'parroquia_id' => 23,
                'capital' => 0,
            ),
            437 =>
            array (
                'id' => 462,
                'ciudad' => 'Bobures',
                'parroquia_id' => 23,
                'capital' => 0,
            ),
            438 =>
            array (
                'id' => 463,
                'ciudad' => 'Cabimas',
                'parroquia_id' => 23,
                'capital' => 0,
            ),
            439 =>
            array (
                'id' => 464,
                'ciudad' => 'Campo Concepción',
                'parroquia_id' => 23,
                'capital' => 0,
            ),
            440 =>
            array (
                'id' => 465,
                'ciudad' => 'Campo Mara',
                'parroquia_id' => 23,
                'capital' => 0,
            ),
            441 =>
            array (
                'id' => 466,
                'ciudad' => 'Campo Rojo',
                'parroquia_id' => 23,
                'capital' => 0,
            ),
            442 =>
            array (
                'id' => 467,
                'ciudad' => 'Carrasquero',
                'parroquia_id' => 23,
                'capital' => 0,
            ),
            443 =>
            array (
                'id' => 468,
                'ciudad' => 'Casigua',
                'parroquia_id' => 23,
                'capital' => 0,
            ),
            444 =>
            array (
                'id' => 469,
                'ciudad' => 'Chiquinquirá',
                'parroquia_id' => 23,
                'capital' => 0,
            ),
            445 =>
            array (
                'id' => 470,
                'ciudad' => 'Ciudad Ojeda',
                'parroquia_id' => 23,
                'capital' => 0,
            ),
            446 =>
            array (
                'id' => 471,
                'ciudad' => 'El Batey',
                'parroquia_id' => 23,
                'capital' => 0,
            ),
            447 =>
            array (
                'id' => 472,
                'ciudad' => 'El Carmelo',
                'parroquia_id' => 23,
                'capital' => 0,
            ),
            448 =>
            array (
                'id' => 473,
                'ciudad' => 'El Chivo',
                'parroquia_id' => 23,
                'capital' => 0,
            ),
            449 =>
            array (
                'id' => 474,
                'ciudad' => 'El Guayabo',
                'parroquia_id' => 23,
                'capital' => 0,
            ),
            450 =>
            array (
                'id' => 475,
                'ciudad' => 'El Mene',
                'parroquia_id' => 23,
                'capital' => 0,
            ),
            451 =>
            array (
                'id' => 476,
                'ciudad' => 'El Venado',
                'parroquia_id' => 23,
                'capital' => 0,
            ),
            452 =>
            array (
                'id' => 477,
                'ciudad' => 'Encontrados',
                'parroquia_id' => 23,
                'capital' => 0,
            ),
            453 =>
            array (
                'id' => 478,
                'ciudad' => 'Gibraltar',
                'parroquia_id' => 23,
                'capital' => 0,
            ),
            454 =>
            array (
                'id' => 479,
                'ciudad' => 'Isla de Toas',
                'parroquia_id' => 23,
                'capital' => 0,
            ),
            455 =>
            array (
                'id' => 480,
                'ciudad' => 'La Concepción del Zulia',
                'parroquia_id' => 23,
                'capital' => 0,
            ),
            456 =>
            array (
                'id' => 481,
                'ciudad' => 'La Paz',
                'parroquia_id' => 23,
                'capital' => 0,
            ),
            457 =>
            array (
                'id' => 482,
                'ciudad' => 'La Sierrita',
                'parroquia_id' => 23,
                'capital' => 0,
            ),
            458 =>
            array (
                'id' => 483,
                'ciudad' => 'Lagunillas del Zulia',
                'parroquia_id' => 23,
                'capital' => 0,
            ),
            459 =>
            array (
                'id' => 484,
                'ciudad' => 'Las Piedras de Perijá',
                'parroquia_id' => 23,
                'capital' => 0,
            ),
            460 =>
            array (
                'id' => 485,
                'ciudad' => 'Los Cortijos',
                'parroquia_id' => 23,
                'capital' => 0,
            ),
            461 =>
            array (
                'id' => 486,
                'ciudad' => 'Machiques',
                'parroquia_id' => 23,
                'capital' => 0,
            ),
            462 =>
            array (
                'id' => 487,
                'ciudad' => 'Maracaibo',
                'parroquia_id' => 23,
                'capital' => 1,
            ),
            463 =>
            array (
                'id' => 488,
                'ciudad' => 'Mene Grande',
                'parroquia_id' => 23,
                'capital' => 0,
            ),
            464 =>
            array (
                'id' => 489,
                'ciudad' => 'Palmarejo',
                'parroquia_id' => 23,
                'capital' => 0,
            ),
            465 =>
            array (
                'id' => 490,
                'ciudad' => 'Paraguaipoa',
                'parroquia_id' => 23,
                'capital' => 0,
            ),
            466 =>
            array (
                'id' => 491,
                'ciudad' => 'Potrerito',
                'parroquia_id' => 23,
                'capital' => 0,
            ),
            467 =>
            array (
                'id' => 492,
                'ciudad' => 'Pueblo Nuevo del Zulia',
                'parroquia_id' => 23,
                'capital' => 0,
            ),
            468 =>
            array (
                'id' => 493,
                'ciudad' => 'Puertos de Altagracia',
                'parroquia_id' => 23,
                'capital' => 0,
            ),
            469 =>
            array (
                'id' => 494,
                'ciudad' => 'Punta Gorda',
                'parroquia_id' => 23,
                'capital' => 0,
            ),
            470 =>
            array (
                'id' => 495,
                'ciudad' => 'Sabaneta de Palma',
                'parroquia_id' => 23,
                'capital' => 0,
            ),
            471 =>
            array (
                'id' => 496,
                'ciudad' => 'San Francisco',
                'parroquia_id' => 23,
                'capital' => 0,
            ),
            472 =>
            array (
                'id' => 497,
                'ciudad' => 'San José de Perijá',
                'parroquia_id' => 23,
                'capital' => 0,
            ),
            473 =>
            array (
                'id' => 498,
                'ciudad' => 'San Rafael del Moján',
                'parroquia_id' => 23,
                'capital' => 0,
            ),
            474 =>
            array (
                'id' => 499,
                'ciudad' => 'San Timoteo',
                'parroquia_id' => 23,
                'capital' => 0,
            ),
            475 =>
            array (
                'id' => 500,
                'ciudad' => 'Santa Bárbara Del Zulia',
                'parroquia_id' => 23,
                'capital' => 0,
            ),
            476 =>
            array (
                'id' => 501,
                'ciudad' => 'Santa Cruz de Mara',
                'parroquia_id' => 23,
                'capital' => 0,
            ),
            477 =>
            array (
                'id' => 502,
                'ciudad' => 'Santa Cruz del Zulia',
                'parroquia_id' => 23,
                'capital' => 0,
            ),
            478 =>
            array (
                'id' => 503,
                'ciudad' => 'Santa Rita',
                'parroquia_id' => 23,
                'capital' => 0,
            ),
            479 =>
            array (
                'id' => 504,
                'ciudad' => 'Sinamaica',
                'parroquia_id' => 23,
                'capital' => 0,
            ),
            480 =>
            array (
                'id' => 505,
                'ciudad' => 'Tamare',
                'parroquia_id' => 23,
                'capital' => 0,
            ),
            481 =>
            array (
                'id' => 506,
                'ciudad' => 'Tía Juana',
                'parroquia_id' => 23,
                'capital' => 0,
            ),
            482 =>
            array (
                'id' => 507,
                'ciudad' => 'Villa del Rosario',
                'parroquia_id' => 23,
                'capital' => 0,
            ),
            483 =>
            array (
                'id' => 508,
                'ciudad' => 'La Guaira',
                'parroquia_id' => 21,
                'capital' => 1,
            ),
            484 =>
            array (
                'id' => 509,
                'ciudad' => 'Catia La Mar',
                'parroquia_id' => 21,
                'capital' => 0,
            ),
            485 =>
            array (
                'id' => 510,
                'ciudad' => 'Macuto',
                'parroquia_id' => 21,
                'capital' => 0,
            ),
            486 =>
            array (
                'id' => 511,
                'ciudad' => 'Naiguatá',
                'parroquia_id' => 21,
                'capital' => 0,
            ),
            487 =>
            array (
                'id' => 512,
                'ciudad' => 'Archipiélago Los Monjes',
                'parroquia_id' => 25,
                'capital' => 0,
            ),
            488 =>
            array (
                'id' => 513,
                'ciudad' => 'Isla La Tortuga y Cayos adyacentes',
                'parroquia_id' => 25,
                'capital' => 0,
            ),
            489 =>
            array (
                'id' => 514,
                'ciudad' => 'Isla La Sola',
                'parroquia_id' => 25,
                'capital' => 0,
            ),
            490 =>
            array (
                'id' => 515,
                'ciudad' => 'Islas Los Testigos',
                'parroquia_id' => 25,
                'capital' => 0,
            ),
            491 =>
            array (
                'id' => 516,
                'ciudad' => 'Islas Los Frailes',
                'parroquia_id' => 25,
                'capital' => 0,
            ),
            492 =>
            array (
                'id' => 517,
                'ciudad' => 'Isla La Orchila',
                'parroquia_id' => 25,
                'capital' => 0,
            ),
            493 =>
            array (
                'id' => 518,
                'ciudad' => 'Archipiélago Las Aves',
                'parroquia_id' => 25,
                'capital' => 0,
            ),
            494 =>
            array (
                'id' => 519,
                'ciudad' => 'Isla de Aves',
                'parroquia_id' => 25,
                'capital' => 0,
            ),
            495 =>
            array (
                'id' => 520,
                'ciudad' => 'Isla La Blanquilla',
                'parroquia_id' => 25,
                'capital' => 0,
            ),
            496 =>
            array (
                'id' => 521,
                'ciudad' => 'Isla de Patos',
                'parroquia_id' => 25,
                'capital' => 0,
            ),
            497 =>
            array (
                'id' => 522,
                'ciudad' => 'Islas Los Hermanos',
                'parroquia_id' => 25,
                'capital' => 0,
            ),
        ));


    }
}
