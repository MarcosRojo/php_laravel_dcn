<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MunicipiosTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('municipios')->delete();

        \DB::table('municipios')->insert(array (
            0 =>
            array (
                'id' => 1,
                'municipio' => 'Alto Orinoco',
                'estado_id' => 1
            ),
            1 =>
            array (
                'id' => 2,
                'municipio' => 'Atabapo',
                'estado_id' => 1
            ),
            2 =>
            array (
                'id' => 3,
                'municipio' => 'Atures',
                'estado_id' => 1
            ),
            3 =>
            array (
                'id' => 4,
                'municipio' => 'Autana',
                'estado_id' => 1
            ),
            4 =>
            array (
                'id' => 5,
                'municipio' => 'Manapiare',
                'estado_id' => 1
            ),
            5 =>
            array (
                'id' => 6,
                'municipio' => 'Maroa',
                'estado_id' => 1
            ),
            6 =>
            array (
                'id' => 7,
                'municipio' => 'Río Negro',
                'estado_id' => 1
            ),
            7 =>
            array (
                'id' => 8,
                'municipio' => 'Anaco',
                'estado_id' => 2
            ),
            8 =>
            array (
                'id' => 9,
                'municipio' => 'Aragua',
                'estado_id' => 2
            ),
            9 =>
            array (
                'id' => 10,
                'municipio' => 'Manuel Ezequiel Bruzual',
                'estado_id' => 2
            ),
            10 =>
            array (
                'id' => 11,
                'municipio' => 'Diego Bautista Urbaneja',
                'estado_id' => 2
            ),
            11 =>
            array (
                'id' => 12,
                'municipio' => 'Fernando Peñalver',
                'estado_id' => 2
            ),
            12 =>
            array (
                'id' => 13,
                'municipio' => 'Francisco Del Carmen Carvajal',
                'estado_id' => 2
            ),
            13 =>
            array (
                'id' => 14,
                'municipio' => 'General Sir Arthur McGregor',
                'estado_id' => 2
            ),
            14 =>
            array (
                'id' => 15,
                'municipio' => 'Guanta',
                'estado_id' => 2
            ),
            15 =>
            array (
                'id' => 16,
                'municipio' => 'Independencia',
                'estado_id' => 2
            ),
            16 =>
            array (
                'id' => 17,
                'municipio' => 'José Gregorio Monagas',
                'estado_id' => 2
            ),
            17 =>
            array (
                'id' => 18,
                'municipio' => 'Juan Antonio Sotillo',
                'estado_id' => 2
            ),
            18 =>
            array (
                'id' => 19,
                'municipio' => 'Juan Manuel Cajigal',
                'estado_id' => 2
            ),
            19 =>
            array (
                'id' => 20,
                'municipio' => 'Libertad',
                'estado_id' => 2
            ),
            20 =>
            array (
                'id' => 21,
                'municipio' => 'Francisco de Miranda',
                'estado_id' => 2
            ),
            21 =>
            array (
                'id' => 22,
                'municipio' => 'Pedro María Freites',
                'estado_id' => 2
            ),
            22 =>
            array (
                'id' => 23,
                'municipio' => 'Píritu',
                'estado_id' => 2
            ),
            23 =>
            array (
                'id' => 24,
                'municipio' => 'San José de Guanipa',
                'estado_id' => 2
            ),
            24 =>
            array (
                'id' => 25,
                'municipio' => 'San Juan de Capistrano',
                'estado_id' => 2
            ),
            25 =>
            array (
                'id' => 26,
                'municipio' => 'Santa Ana',
                'estado_id' => 2
            ),
            26 =>
            array (
                'id' => 27,
                'municipio' => 'Simón Bolívar',
                'estado_id' => 2
            ),
            27 =>
            array (
                'id' => 28,
                'municipio' => 'Simón Rodríguez',
                'estado_id' => 2
            ),
            28 =>
            array (
                'id' => 29,
                'municipio' => 'Achaguas',
                'estado_id' => 3
            ),
            29 =>
            array (
                'id' => 30,
                'municipio' => 'Biruaca',
                'estado_id' => 3
            ),
            30 =>
            array (
                'id' => 31,
                'municipio' => 'Muñóz',
                'estado_id' => 3
            ),
            31 =>
            array (
                'id' => 32,
                'municipio' => 'Páez',
                'estado_id' => 3
            ),
            32 =>
            array (
                'id' => 33,
                'municipio' => 'Pedro Camejo',
                'estado_id' => 3
            ),
            33 =>
            array (
                'id' => 34,
                'municipio' => 'Rómulo Gallegos',
                'estado_id' => 3
            ),
            34 =>
            array (
                'id' => 35,
                'municipio' => 'San Fernando',
                'estado_id' => 3
            ),
            35 =>
            array (
                'id' => 36,
                'municipio' => 'Atanasio Girardot',
                'estado_id' => 4
            ),
            36 =>
            array (
                'id' => 37,
                'municipio' => 'Bolívar',
                'estado_id' => 4
            ),
            37 =>
            array (
                'id' => 38,
                'municipio' => 'Camatagua',
                'estado_id' => 4
            ),
            38 =>
            array (
                'id' => 39,
                'municipio' => 'Francisco Linares Alcántara',
                'estado_id' => 4
            ),
            39 =>
            array (
                'id' => 40,
                'municipio' => 'José Ángel Lamas',
                'estado_id' => 4
            ),
            40 =>
            array (
                'id' => 41,
                'municipio' => 'José Félix Ribas',
                'estado_id' => 4
            ),
            41 =>
            array (
                'id' => 42,
                'municipio' => 'José Rafael Revenga',
                'estado_id' => 4
            ),
            42 =>
            array (
                'id' => 43,
                'municipio' => 'Libertador',
                'estado_id' => 4
            ),
            43 =>
            array (
                'id' => 44,
                'municipio' => 'Mario Briceño Iragorry',
                'estado_id' => 4
            ),
            44 =>
            array (
                'id' => 45,
                'municipio' => 'Ocumare de la Costa de Oro',
                'estado_id' => 4
            ),
            45 =>
            array (
                'id' => 46,
                'municipio' => 'San Casimiro',
                'estado_id' => 4
            ),
            46 =>
            array (
                'id' => 47,
                'municipio' => 'San Sebastián',
                'estado_id' => 4
            ),
            47 =>
            array (
                'id' => 48,
                'municipio' => 'Santiago Mariño',
                'estado_id' => 4
            ),
            48 =>
            array (
                'id' => 49,
                'municipio' => 'Santos Michelena',
                'estado_id' => 4
            ),
            49 =>
            array (
                'id' => 50,
                'municipio' => 'Sucre',
                'estado_id' => 4
            ),
            50 =>
            array (
                'id' => 51,
                'municipio' => 'Tovar',
                'estado_id' => 4
            ),
            51 =>
            array (
                'id' => 52,
                'municipio' => 'Urdaneta',
                'estado_id' => 4
            ),
            52 =>
            array (
                'id' => 53,
                'municipio' => 'Zamora',
                'estado_id' => 4
            ),
            53 =>
            array (
                'id' => 54,
                'municipio' => 'Alberto Arvelo Torrealba',
                'estado_id' => 5
            ),
            54 =>
            array (
                'id' => 55,
                'municipio' => 'Andrés Eloy Blanco',
                'estado_id' => 5
            ),
            55 =>
            array (
                'id' => 56,
                'municipio' => 'Antonio José de Sucre',
                'estado_id' => 5
            ),
            56 =>
            array (
                'id' => 57,
                'municipio' => 'Arismendi',
                'estado_id' => 5
            ),
            57 =>
            array (
                'id' => 58,
                'municipio' => 'Barinas',
                'estado_id' => 5
            ),
            58 =>
            array (
                'id' => 59,
                'municipio' => 'Bolívar',
                'estado_id' => 5
            ),
            59 =>
            array (
                'id' => 60,
                'municipio' => 'Cruz Paredes',
                'estado_id' => 5
            ),
            60 =>
            array (
                'id' => 61,
                'municipio' => 'Ezequiel Zamora',
                'estado_id' => 5
            ),
            61 =>
            array (
                'id' => 62,
                'municipio' => 'Obispos',
                'estado_id' => 5
            ),
            62 =>
            array (
                'id' => 63,
                'municipio' => 'Pedraza',
                'estado_id' => 5
            ),
            63 =>
            array (
                'id' => 64,
                'municipio' => 'Rojas',
                'estado_id' => 5
            ),
            64 =>
            array (
                'id' => 65,
                'municipio' => 'Sosa',
                'estado_id' => 5
            ),
            65 =>
            array (
                'id' => 66,
                'municipio' => 'Caroní',
                'estado_id' => 6
            ),
            66 =>
            array (
                'id' => 67,
                'municipio' => 'Cedeño',
                'estado_id' => 6
            ),
            67 =>
            array (
                'id' => 68,
                'municipio' => 'El Callao',
                'estado_id' => 6
            ),
            68 =>
            array (
                'id' => 69,
                'municipio' => 'Gran Sabana',
                'estado_id' => 6
            ),
            69 =>
            array (
                'id' => 70,
                'municipio' => 'Heres',
                'estado_id' => 6
            ),
            70 =>
            array (
                'id' => 71,
                'municipio' => 'Piar',
                'estado_id' => 6
            ),
            71 =>
            array (
                'id' => 72,
            'municipio' => 'Angostura (Raúl Leoni)',
                'estado_id' => 6
            ),
            72 =>
            array (
                'id' => 73,
                'municipio' => 'Roscio',
                'estado_id' => 6
            ),
            73 =>
            array (
                'id' => 74,
                'municipio' => 'Sifontes',
                'estado_id' => 6
            ),
            74 =>
            array (
                'id' => 75,
                'municipio' => 'Sucre',
                'estado_id' => 6
            ),
            75 =>
            array (
                'id' => 76,
                'municipio' => 'Padre Pedro Chien',
                'estado_id' => 6
            ),
            76 =>
            array (
                'id' => 77,
                'municipio' => 'Bejuma',
                'estado_id' => 7
            ),
            77 =>
            array (
                'id' => 78,
                'municipio' => 'Carlos Arvelo',
                'estado_id' => 7
            ),
            78 =>
            array (
                'id' => 79,
                'municipio' => 'Diego Ibarra',
                'estado_id' => 7
            ),
            79 =>
            array (
                'id' => 80,
                'municipio' => 'Guacara',
                'estado_id' => 7
            ),
            80 =>
            array (
                'id' => 81,
                'municipio' => 'Juan José Mora',
                'estado_id' => 7
            ),
            81 =>
            array (
                'id' => 82,
                'municipio' => 'Libertador',
                'estado_id' => 7
            ),
            82 =>
            array (
                'id' => 83,
                'municipio' => 'Los Guayos',
                'estado_id' => 7
            ),
            83 =>
            array (
                'id' => 84,
                'municipio' => 'Miranda',
                'estado_id' => 7
            ),
            84 =>
            array (
                'id' => 85,
                'municipio' => 'Montalbán',
                'estado_id' => 7
            ),
            85 =>
            array (
                'id' => 86,
                'municipio' => 'Naguanagua',
                'estado_id' => 7
            ),
            86 =>
            array (
                'id' => 87,
                'municipio' => 'Puerto Cabello',
                'estado_id' => 7
            ),
            87 =>
            array (
                'id' => 88,
                'municipio' => 'San Diego',
                'estado_id' => 7
            ),
            88 =>
            array (
                'id' => 89,
                'municipio' => 'San Joaquín',
                'estado_id' => 7
            ),
            89 =>
            array (
                'id' => 90,
                'municipio' => 'Valencia',
                'estado_id' => 7
            ),
            90 =>
            array (
                'id' => 91,
                'municipio' => 'Anzoátegui',
                'estado_id' => 8
            ),
            91 =>
            array (
                'id' => 92,
                'municipio' => 'Tinaquillo',
                'estado_id' => 8
            ),
            92 =>
            array (
                'id' => 93,
                'municipio' => 'Girardot',
                'estado_id' => 8
            ),
            93 =>
            array (
                'id' => 94,
                'municipio' => 'Lima Blanco',
                'estado_id' => 8
            ),
            94 =>
            array (
                'id' => 95,
                'municipio' => 'Pao de San Juan Bautista',
                'estado_id' => 8
            ),
            95 =>
            array (
                'id' => 96,
                'municipio' => 'Ricaurte',
                'estado_id' => 8
            ),
            96 =>
            array (
                'id' => 97,
                'municipio' => 'Rómulo Gallegos',
                'estado_id' => 8
            ),
            97 =>
            array (
                'id' => 98,
                'municipio' => 'San Carlos',
                'estado_id' => 8
            ),
            98 =>
            array (
                'id' => 99,
                'municipio' => 'Tinaco',
                'estado_id' => 8
            ),
            99 =>
            array (
                'id' => 100,
                'municipio' => 'Antonio Díaz',
                'estado_id' => 9
            ),
            100 =>
            array (
                'id' => 101,
                'municipio' => 'Casacoima',
                'estado_id' => 9
            ),
            101 =>
            array (
                'id' => 102,
                'municipio' => 'Pedernales',
                'estado_id' => 9
            ),
            102 =>
            array (
                'id' => 103,
                'municipio' => 'Tucupita',
                'estado_id' => 9
            ),
            103 =>
            array (
                'id' => 104,
                'municipio' => 'Acosta',
                'estado_id' => 10
            ),
            104 =>
            array (
                'id' => 105,
                'municipio' => 'Bolívar',
                'estado_id' => 10
            ),
            105 =>
            array (
                'id' => 106,
                'municipio' => 'Buchivacoa',
                'estado_id' => 10
            ),
            106 =>
            array (
                'id' => 107,
                'municipio' => 'Cacique Manaure',
                'estado_id' => 10
            ),
            107 =>
            array (
                'id' => 108,
                'municipio' => 'Carirubana',
                'estado_id' => 10
            ),
            108 =>
            array (
                'id' => 109,
                'municipio' => 'Colina',
                'estado_id' => 10
            ),
            109 =>
            array (
                'id' => 110,
                'municipio' => 'Dabajuro',
                'estado_id' => 10
            ),
            110 =>
            array (
                'id' => 111,
                'municipio' => 'Democracia',
                'estado_id' => 10
            ),
            111 =>
            array (
                'id' => 112,
                'municipio' => 'Falcón',
                'estado_id' => 10
            ),
            112 =>
            array (
                'id' => 113,
                'municipio' => 'Federación',
                'estado_id' => 10
            ),
            113 =>
            array (
                'id' => 114,
                'municipio' => 'Jacura',
                'estado_id' => 10
            ),
            114 =>
            array (
                'id' => 115,
                'municipio' => 'José Laurencio Silva',
                'estado_id' => 10
            ),
            115 =>
            array (
                'id' => 116,
                'municipio' => 'Los Taques',
                'estado_id' => 10
            ),
            116 =>
            array (
                'id' => 117,
                'municipio' => 'Mauroa',
                'estado_id' => 10
            ),
            117 =>
            array (
                'id' => 118,
                'municipio' => 'Miranda',
                'estado_id' => 10
            ),
            118 =>
            array (
                'id' => 119,
                'municipio' => 'Monseñor Iturriza',
                'estado_id' => 10
            ),
            119 =>
            array (
                'id' => 120,
                'municipio' => 'Palmasola',
                'estado_id' => 10
            ),
            120 =>
            array (
                'id' => 121,
                'municipio' => 'Petit',
                'estado_id' => 10
            ),
            121 =>
            array (
                'id' => 122,
                'municipio' => 'Píritu',
                'estado_id' => 10
            ),
            122 =>
            array (
                'id' => 123,
                'municipio' => 'San Francisco',
                'estado_id' => 10
            ),
            123 =>
            array (
                'id' => 124,
                'municipio' => 'Sucre',
                'estado_id' => 10
            ),
            124 =>
            array (
                'id' => 125,
                'municipio' => 'Tocópero',
                'estado_id' => 10
            ),
            125 =>
            array (
                'id' => 126,
                'municipio' => 'Unión',
                'estado_id' => 10
            ),
            126 =>
            array (
                'id' => 127,
                'municipio' => 'Urumaco',
                'estado_id' => 10
            ),
            127 =>
            array (
                'id' => 128,
                'municipio' => 'Zamora',
                'estado_id' => 10
            ),
            128 =>
            array (
                'id' => 129,
                'municipio' => 'Camaguán',
                'estado_id' => 11
            ),
            129 =>
            array (
                'id' => 130,
                'municipio' => 'Chaguaramas',
                'estado_id' => 11
            ),
            130 =>
            array (
                'id' => 131,
                'municipio' => 'El Socorro',
                'estado_id' => 11
            ),
            131 =>
            array (
                'id' => 132,
                'municipio' => 'José Félix Ribas',
                'estado_id' => 11
            ),
            132 =>
            array (
                'id' => 133,
                'municipio' => 'José Tadeo Monagas',
                'estado_id' => 11
            ),
            133 =>
            array (
                'id' => 134,
                'municipio' => 'Juan Germán Roscio',
                'estado_id' => 11
            ),
            134 =>
            array (
                'id' => 135,
                'municipio' => 'Julián Mellado',
                'estado_id' => 11
            ),
            135 =>
            array (
                'id' => 136,
                'municipio' => 'Las Mercedes',
                'estado_id' => 11
            ),
            136 =>
            array (
                'id' => 137,
                'municipio' => 'Leonardo Infante',
                'estado_id' => 11
            ),
            137 =>
            array (
                'id' => 138,
                'municipio' => 'Pedro Zaraza',
                'estado_id' => 11
            ),
            138 =>
            array (
                'id' => 139,
                'municipio' => 'Ortíz',
                'estado_id' => 11
            ),
            139 =>
            array (
                'id' => 140,
                'municipio' => 'San Gerónimo de Guayabal',
                'estado_id' => 11
            ),
            140 =>
            array (
                'id' => 141,
                'municipio' => 'San José de Guaribe',
                'estado_id' => 11
            ),
            141 =>
            array (
                'id' => 142,
                'municipio' => 'Santa María de Ipire',
                'estado_id' => 11
            ),
            142 =>
            array (
                'id' => 143,
                'municipio' => 'Sebastián Francisco de Miranda',
                'estado_id' => 11
            ),
            143 =>
            array (
                'id' => 144,
                'municipio' => 'Andrés Eloy Blanco',
                'estado_id' => 12
            ),
            144 =>
            array (
                'id' => 145,
                'municipio' => 'Crespo',
                'estado_id' => 12
            ),
            145 =>
            array (
                'id' => 146,
                'municipio' => 'Iribarren',
                'estado_id' => 12
            ),
            146 =>
            array (
                'id' => 147,
                'municipio' => 'Jiménez',
                'estado_id' => 12
            ),
            147 =>
            array (
                'id' => 148,
                'municipio' => 'Morán',
                'estado_id' => 12
            ),
            148 =>
            array (
                'id' => 149,
                'municipio' => 'Palavecino',
                'estado_id' => 12
            ),
            149 =>
            array (
                'id' => 150,
                'municipio' => 'Simón Planas',
                'estado_id' => 12
            ),
            150 =>
            array (
                'id' => 151,
                'municipio' => 'Torres',
                'estado_id' => 12
            ),
            151 =>
            array (
                'id' => 152,
                'municipio' => 'Urdaneta',
                'estado_id' => 12
            ),
            152 =>
            array (
                'id' => 179,
                'municipio' => 'Alberto Adriani',
                'estado_id' => 13
            ),
            153 =>
            array (
                'id' => 180,
                'municipio' => 'Andrés Bello',
                'estado_id' => 13
            ),
            154 =>
            array (
                'id' => 181,
                'municipio' => 'Antonio Pinto Salinas',
                'estado_id' => 13
            ),
            155 =>
            array (
                'id' => 182,
                'municipio' => 'Aricagua',
                'estado_id' => 13
            ),
            156 =>
            array (
                'id' => 183,
                'municipio' => 'Arzobispo Chacón',
                'estado_id' => 13
            ),
            157 =>
            array (
                'id' => 184,
                'municipio' => 'Campo Elías',
                'estado_id' => 13
            ),
            158 =>
            array (
                'id' => 185,
                'municipio' => 'Caracciolo Parra Olmedo',
                'estado_id' => 13
            ),
            159 =>
            array (
                'id' => 186,
                'municipio' => 'Cardenal Quintero',
                'estado_id' => 13
            ),
            160 =>
            array (
                'id' => 187,
                'municipio' => 'Guaraque',
                'estado_id' => 13
            ),
            161 =>
            array (
                'id' => 188,
                'municipio' => 'Julio César Salas',
                'estado_id' => 13
            ),
            162 =>
            array (
                'id' => 189,
                'municipio' => 'Justo Briceño',
                'estado_id' => 13
            ),
            163 =>
            array (
                'id' => 190,
                'municipio' => 'Libertador',
                'estado_id' => 13
            ),
            164 =>
            array (
                'id' => 191,
                'municipio' => 'Miranda',
                'estado_id' => 13
            ),
            165 =>
            array (
                'id' => 192,
                'municipio' => 'Obispo Ramos de Lora',
                'estado_id' => 13
            ),
            166 =>
            array (
                'id' => 193,
                'municipio' => 'Padre Noguera',
                'estado_id' => 13
            ),
            167 =>
            array (
                'id' => 194,
                'municipio' => 'Pueblo Llano',
                'estado_id' => 13
            ),
            168 =>
            array (
                'id' => 195,
                'municipio' => 'Rangel',
                'estado_id' => 13
            ),
            169 =>
            array (
                'id' => 196,
                'municipio' => 'Rivas Dávila',
                'estado_id' => 13
            ),
            170 =>
            array (
                'id' => 197,
                'municipio' => 'Santos Marquina',
                'estado_id' => 13
            ),
            171 =>
            array (
                'id' => 198,
                'municipio' => 'Sucre',
                'estado_id' => 13
            ),
            172 =>
            array (
                'id' => 199,
                'municipio' => 'Tovar',
                'estado_id' => 13
            ),
            173 =>
            array (
                'id' => 200,
                'municipio' => 'Tulio Febres Cordero',
                'estado_id' => 13
            ),
            174 =>
            array (
                'id' => 201,
                'municipio' => 'Zea',
                'estado_id' => 13
            ),
            175 =>
            array (
                'id' => 223,
                'municipio' => 'Acevedo',
                'estado_id' => 14
            ),
            176 =>
            array (
                'id' => 224,
                'municipio' => 'Andrés Bello',
                'estado_id' => 14
            ),
            177 =>
            array (
                'id' => 225,
                'municipio' => 'Baruta',
                'estado_id' => 14
            ),
            178 =>
            array (
                'id' => 226,
                'municipio' => 'Brión',
                'estado_id' => 14
            ),
            179 =>
            array (
                'id' => 227,
                'municipio' => 'Buroz',
                'estado_id' => 14
            ),
            180 =>
            array (
                'id' => 228,
                'municipio' => 'Carrizal',
                'estado_id' => 14
            ),
            181 =>
            array (
                'id' => 229,
                'municipio' => 'Chacao',
                'estado_id' => 14
            ),
            182 =>
            array (
                'id' => 230,
                'municipio' => 'Cristóbal Rojas',
                'estado_id' => 14
            ),
            183 =>
            array (
                'id' => 231,
                'municipio' => 'El Hatillo',
                'estado_id' => 14
            ),
            184 =>
            array (
                'id' => 232,
                'municipio' => 'Guaicaipuro',
                'estado_id' => 14
            ),
            185 =>
            array (
                'id' => 233,
                'municipio' => 'Independencia',
                'estado_id' => 14
            ),
            186 =>
            array (
                'id' => 234,
                'municipio' => 'Lander',
                'estado_id' => 14
            ),
            187 =>
            array (
                'id' => 235,
                'municipio' => 'Los Salias',
                'estado_id' => 14
            ),
            188 =>
            array (
                'id' => 236,
                'municipio' => 'Páez',
                'estado_id' => 14
            ),
            189 =>
            array (
                'id' => 237,
                'municipio' => 'Paz Castillo',
                'estado_id' => 14
            ),
            190 =>
            array (
                'id' => 238,
                'municipio' => 'Pedro Gual',
                'estado_id' => 14
            ),
            191 =>
            array (
                'id' => 239,
                'municipio' => 'Plaza',
                'estado_id' => 14
            ),
            192 =>
            array (
                'id' => 240,
                'municipio' => 'Simón Bolívar',
                'estado_id' => 14
            ),
            193 =>
            array (
                'id' => 241,
                'municipio' => 'Sucre',
                'estado_id' => 14
            ),
            194 =>
            array (
                'id' => 242,
                'municipio' => 'Urdaneta',
                'estado_id' => 14
            ),
            195 =>
            array (
                'id' => 243,
                'municipio' => 'Zamora',
                'estado_id' => 14
            ),
            196 =>
            array (
                'id' => 258,
                'municipio' => 'Acosta',
                'estado_id' => 15
            ),
            197 =>
            array (
                'id' => 259,
                'municipio' => 'Aguasay',
                'estado_id' => 15
            ),
            198 =>
            array (
                'id' => 260,
                'municipio' => 'Bolívar',
                'estado_id' => 15
            ),
            199 =>
            array (
                'id' => 261,
                'municipio' => 'Caripe',
                'estado_id' => 15
            ),
            200 =>
            array (
                'id' => 262,
                'municipio' => 'Cedeño',
                'estado_id' => 15
            ),
            201 =>
            array (
                'id' => 263,
                'municipio' => 'Ezequiel Zamora',
                'estado_id' => 15
            ),
            202 =>
            array (
                'id' => 264,
                'municipio' => 'Libertador',
                'estado_id' => 15
            ),
            203 =>
            array (
                'id' => 265,
                'municipio' => 'Maturín',
                'estado_id' => 15
            ),
            204 =>
            array (
                'id' => 266,
                'municipio' => 'Piar',
                'estado_id' => 15
            ),
            205 =>
            array (
                'id' => 267,
                'municipio' => 'Punceres',
                'estado_id' => 15
            ),
            206 =>
            array (
                'id' => 268,
                'municipio' => 'Santa Bárbara',
                'estado_id' => 15
            ),
            207 =>
            array (
                'id' => 269,
                'municipio' => 'Sotillo',
                'estado_id' => 15
            ),
            208 =>
            array (
                'id' => 270,
                'municipio' => 'Uracoa',
                'estado_id' => 15
            ),
            209 =>
            array (
                'id' => 271,
                'municipio' => 'Antolín del Campo',
                'estado_id' => 16
            ),
            210 =>
            array (
                'id' => 272,
                'municipio' => 'Arismendi',
                'estado_id' => 16
            ),
            211 =>
            array (
                'id' => 273,
                'municipio' => 'García',
                'estado_id' => 16
            ),
            212 =>
            array (
                'id' => 274,
                'municipio' => 'Gómez',
                'estado_id' => 16
            ),
            213 =>
            array (
                'id' => 275,
                'municipio' => 'Maneiro',
                'estado_id' => 16
            ),
            214 =>
            array (
                'id' => 276,
                'municipio' => 'Marcano',
                'estado_id' => 16
            ),
            215 =>
            array (
                'id' => 277,
                'municipio' => 'Mariño',
                'estado_id' => 16
            ),
            216 =>
            array (
                'id' => 278,
                'municipio' => 'Península de Macanao',
                'estado_id' => 16
            ),
            217 =>
            array (
                'id' => 279,
                'municipio' => 'Tubores',
                'estado_id' => 16
            ),
            218 =>
            array (
                'id' => 280,
                'municipio' => 'Villalba',
                'estado_id' => 16
            ),
            219 =>
            array (
                'id' => 281,
                'municipio' => 'Díaz',
                'estado_id' => 16
            ),
            220 =>
            array (
                'id' => 282,
                'municipio' => 'Agua Blanca',
                'estado_id' => 17
            ),
            221 =>
            array (
                'id' => 283,
                'municipio' => 'Araure',
                'estado_id' => 17
            ),
            222 =>
            array (
                'id' => 284,
                'municipio' => 'Esteller',
                'estado_id' => 17
            ),
            223 =>
            array (
                'id' => 285,
                'municipio' => 'Guanare',
                'estado_id' => 17
            ),
            224 =>
            array (
                'id' => 286,
                'municipio' => 'Guanarito',
                'estado_id' => 17
            ),
            225 =>
            array (
                'id' => 287,
                'municipio' => 'Monseñor José Vicente de Unda',
                'estado_id' => 17
            ),
            226 =>
            array (
                'id' => 288,
                'municipio' => 'Ospino',
                'estado_id' => 17
            ),
            227 =>
            array (
                'id' => 289,
                'municipio' => 'Páez',
                'estado_id' => 17
            ),
            228 =>
            array (
                'id' => 290,
                'municipio' => 'Papelón',
                'estado_id' => 17
            ),
            229 =>
            array (
                'id' => 291,
                'municipio' => 'San Genaro de Boconoíto',
                'estado_id' => 17
            ),
            230 =>
            array (
                'id' => 292,
                'municipio' => 'San Rafael de Onoto',
                'estado_id' => 17
            ),
            231 =>
            array (
                'id' => 293,
                'municipio' => 'Santa Rosalía',
                'estado_id' => 17
            ),
            232 =>
            array (
                'id' => 294,
                'municipio' => 'Sucre',
                'estado_id' => 17
            ),
            233 =>
            array (
                'id' => 295,
                'municipio' => 'Turén',
                'estado_id' => 17
            ),
            234 =>
            array (
                'id' => 296,
                'municipio' => 'Andrés Eloy Blanco',
                'estado_id' => 18
            ),
            235 =>
            array (
                'id' => 297,
                'municipio' => 'Andrés Mata',
                'estado_id' => 18
            ),
            236 =>
            array (
                'id' => 298,
                'municipio' => 'Arismendi',
                'estado_id' => 18
            ),
            237 =>
            array (
                'id' => 299,
                'municipio' => 'Benítez',
                'estado_id' => 18
            ),
            238 =>
            array (
                'id' => 300,
                'municipio' => 'Bermúdez',
                'estado_id' => 18
            ),
            239 =>
            array (
                'id' => 301,
                'municipio' => 'Bolívar',
                'estado_id' => 18
            ),
            240 =>
            array (
                'id' => 302,
                'municipio' => 'Cajigal',
                'estado_id' => 18
            ),
            241 =>
            array (
                'id' => 303,
                'municipio' => 'Cruz Salmerón Acosta',
                'estado_id' => 18
            ),
            242 =>
            array (
                'id' => 304,
                'municipio' => 'Libertador',
                'estado_id' => 18
            ),
            243 =>
            array (
                'id' => 305,
                'municipio' => 'Mariño',
                'estado_id' => 18
            ),
            244 =>
            array (
                'id' => 306,
                'municipio' => 'Mejía',
                'estado_id' => 18
            ),
            245 =>
            array (
                'id' => 307,
                'municipio' => 'Montes',
                'estado_id' => 18
            ),
            246 =>
            array (
                'id' => 308,
                'municipio' => 'Ribero',
                'estado_id' => 18
            ),
            247 =>
            array (
                'id' => 309,
                'municipio' => 'Sucre',
                'estado_id' => 18
            ),
            248 =>
            array (
                'id' => 310,
                'municipio' => 'Valdéz',
                'estado_id' => 18
            ),
            249 =>
            array (
                'id' => 341,
                'municipio' => 'Andrés Bello',
                'estado_id' => 19
            ),
            250 =>
            array (
                'id' => 342,
                'municipio' => 'Antonio Rómulo Costa',
                'estado_id' => 19
            ),
            251 =>
            array (
                'id' => 343,
                'municipio' => 'Ayacucho',
                'estado_id' => 19
            ),
            252 =>
            array (
                'id' => 344,
                'municipio' => 'Bolívar',
                'estado_id' => 19
            ),
            253 =>
            array (
                'id' => 345,
                'municipio' => 'Cárdenas',
                'estado_id' => 19
            ),
            254 =>
            array (
                'id' => 346,
                'municipio' => 'Córdoba',
                'estado_id' => 19
            ),
            255 =>
            array (
                'id' => 347,
                'municipio' => 'Fernández Feo',
                'estado_id' => 19
            ),
            256 =>
            array (
                'id' => 348,
                'municipio' => 'Francisco de Miranda',
                'estado_id' => 19
            ),
            257 =>
            array (
                'id' => 349,
                'municipio' => 'García de Hevia',
                'estado_id' => 19
            ),
            258 =>
            array (
                'id' => 350,
                'municipio' => 'Guásimos',
                'estado_id' => 19
            ),
            259 =>
            array (
                'id' => 351,
                'municipio' => 'Independencia',
                'estado_id' => 19
            ),
            260 =>
            array (
                'id' => 352,
                'municipio' => 'Jáuregui',
                'estado_id' => 19
            ),
            261 =>
            array (
                'id' => 353,
                'municipio' => 'José María Vargas',
                'estado_id' => 19
            ),
            262 =>
            array (
                'id' => 354,
                'municipio' => 'Junín',
                'estado_id' => 19
            ),
            263 =>
            array (
                'id' => 355,
                'municipio' => 'Libertad',
                'estado_id' => 19
            ),
            264 =>
            array (
                'id' => 356,
                'municipio' => 'Libertador',
                'estado_id' => 19
            ),
            265 =>
            array (
                'id' => 357,
                'municipio' => 'Lobatera',
                'estado_id' => 19
            ),
            266 =>
            array (
                'id' => 358,
                'municipio' => 'Michelena',
                'estado_id' => 19
            ),
            267 =>
            array (
                'id' => 359,
                'municipio' => 'Panamericano',
                'estado_id' => 19
            ),
            268 =>
            array (
                'id' => 360,
                'municipio' => 'Pedro María Ureña',
                'estado_id' => 19
            ),
            269 =>
            array (
                'id' => 361,
                'municipio' => 'Rafael Urdaneta',
                'estado_id' => 19
            ),
            270 =>
            array (
                'id' => 362,
                'municipio' => 'Samuel Darío Maldonado',
                'estado_id' => 19
            ),
            271 =>
            array (
                'id' => 363,
                'municipio' => 'San Cristóbal',
                'estado_id' => 19
            ),
            272 =>
            array (
                'id' => 364,
                'municipio' => 'Seboruco',
                'estado_id' => 19
            ),
            273 =>
            array (
                'id' => 365,
                'municipio' => 'Simón Rodríguez',
                'estado_id' => 19
            ),
            274 =>
            array (
                'id' => 366,
                'municipio' => 'Sucre',
                'estado_id' => 19
            ),
            275 =>
            array (
                'id' => 367,
                'municipio' => 'Torbes',
                'estado_id' => 19
            ),
            276 =>
            array (
                'id' => 368,
                'municipio' => 'Uribante',
                'estado_id' => 19
            ),
            277 =>
            array (
                'id' => 369,
                'municipio' => 'San Judas Tadeo',
                'estado_id' => 19
            ),
            278 =>
            array (
                'id' => 370,
                'municipio' => 'Andrés Bello',
                'estado_id' => 20
            ),
            279 =>
            array (
                'id' => 371,
                'municipio' => 'Boconó',
                'estado_id' => 20
            ),
            280 =>
            array (
                'id' => 372,
                'municipio' => 'Bolívar',
                'estado_id' => 20
            ),
            281 =>
            array (
                'id' => 373,
                'municipio' => 'Candelaria',
                'estado_id' => 20
            ),
            282 =>
            array (
                'id' => 374,
                'municipio' => 'Carache',
                'estado_id' => 20
            ),
            283 =>
            array (
                'id' => 375,
                'municipio' => 'Escuque',
                'estado_id' => 20
            ),
            284 =>
            array (
                'id' => 376,
                'municipio' => 'José Felipe Márquez Cañizalez',
                'estado_id' => 20
            ),
            285 =>
            array (
                'id' => 377,
                'municipio' => 'Juan Vicente Campos Elías',
                'estado_id' => 20
            ),
            286 =>
            array (
                'id' => 378,
                'municipio' => 'La Ceiba',
                'estado_id' => 20
            ),
            287 =>
            array (
                'id' => 379,
                'municipio' => 'Miranda',
                'estado_id' => 20
            ),
            288 =>
            array (
                'id' => 380,
                'municipio' => 'Monte Carmelo',
                'estado_id' => 20
            ),
            289 =>
            array (
                'id' => 381,
                'municipio' => 'Motatán',
                'estado_id' => 20
            ),
            290 =>
            array (
                'id' => 382,
                'municipio' => 'Pampán',
                'estado_id' => 20
            ),
            291 =>
            array (
                'id' => 383,
                'municipio' => 'Pampanito',
                'estado_id' => 20
            ),
            292 =>
            array (
                'id' => 384,
                'municipio' => 'Rafael Rangel',
                'estado_id' => 20
            ),
            293 =>
            array (
                'id' => 385,
                'municipio' => 'San Rafael de Carvajal',
                'estado_id' => 20
            ),
            294 =>
            array (
                'id' => 386,
                'municipio' => 'Sucre',
                'estado_id' => 20
            ),
            295 =>
            array (
                'id' => 387,
                'municipio' => 'Trujillo',
                'estado_id' => 20
            ),
            296 =>
            array (
                'id' => 388,
                'municipio' => 'Urdaneta',
                'estado_id' => 20
            ),
            297 =>
            array (
                'id' => 389,
                'municipio' => 'Valera',
                'estado_id' => 20
            ),
            298 =>
            array (
                'id' => 390,
                'municipio' => 'Vargas',
                'estado_id' => 21
            ),
            299 =>
            array (
                'id' => 391,
                'municipio' => 'Arístides Bastidas',
                'estado_id' => 22
            ),
            300 =>
            array (
                'id' => 392,
                'municipio' => 'Bolívar',
                'estado_id' => 22
            ),
            301 =>
            array (
                'id' => 407,
                'municipio' => 'Bruzual',
                'estado_id' => 22
            ),
            302 =>
            array (
                'id' => 408,
                'municipio' => 'Cocorote',
                'estado_id' => 22
            ),
            303 =>
            array (
                'id' => 409,
                'municipio' => 'Independencia',
                'estado_id' => 22
            ),
            304 =>
            array (
                'id' => 410,
                'municipio' => 'José Antonio Páez',
                'estado_id' => 22
            ),
            305 =>
            array (
                'id' => 411,
                'municipio' => 'La Trinidad',
                'estado_id' => 22
            ),
            306 =>
            array (
                'id' => 412,
                'municipio' => 'Manuel Monge',
                'estado_id' => 22
            ),
            307 =>
            array (
                'id' => 413,
                'municipio' => 'Nirgua',
                'estado_id' => 22
            ),
            308 =>
            array (
                'id' => 414,
                'municipio' => 'Peña',
                'estado_id' => 22
            ),
            309 =>
            array (
                'id' => 415,
                'municipio' => 'San Felipe',
                'estado_id' => 22
            ),
            310 =>
            array (
                'id' => 416,
                'municipio' => 'Sucre',
                'estado_id' => 22
            ),
            311 =>
            array (
                'id' => 417,
                'municipio' => 'Urachiche',
                'estado_id' => 22
            ),
            312 =>
            array (
                'id' => 418,
                'municipio' => 'José Joaquín Veroes',
                'estado_id' => 22
            ),
            313 =>
            array (
                'id' => 441,
                'municipio' => 'Almirante Padilla',
                'estado_id' => 23
            ),
            314 =>
            array (
                'id' => 442,
                'municipio' => 'Baralt',
                'estado_id' => 23
            ),
            315 =>
            array (
                'id' => 443,
                'municipio' => 'Cabimas',
                'estado_id' => 23
            ),
            316 =>
            array (
                'id' => 444,
                'municipio' => 'Catatumbo',
                'estado_id' => 23
            ),
            317 =>
            array (
                'id' => 445,
                'municipio' => 'Colón',
                'estado_id' => 23
            ),
            318 =>
            array (
                'id' => 446,
                'municipio' => 'Francisco Javier Pulgar',
                'estado_id' => 23
            ),
            319 =>
            array (
                'id' => 447,
                'municipio' => 'Páez',
                'estado_id' => 23
            ),
            320 =>
            array (
                'id' => 448,
                'municipio' => 'Jesús Enrique Losada',
                'estado_id' => 23
            ),
            321 =>
            array (
                'id' => 449,
                'municipio' => 'Jesús María Semprún',
                'estado_id' => 23
            ),
            322 =>
            array (
                'id' => 450,
                'municipio' => 'La Cañada de Urdaneta',
                'estado_id' => 23
            ),
            323 =>
            array (
                'id' => 451,
                'municipio' => 'Lagunillas',
                'estado_id' => 23
            ),
            324 =>
            array (
                'id' => 452,
                'municipio' => 'Machiques de Perijá',
                'estado_id' => 23
            ),
            325 =>
            array (
                'id' => 453,
                'municipio' => 'Mara',
                'estado_id' => 23
            ),
            326 =>
            array (
                'id' => 454,
                'municipio' => 'Maracaibo',
                'estado_id' => 23
            ),
            327 =>
            array (
                'id' => 455,
                'municipio' => 'Miranda',
                'estado_id' => 23
            ),
            328 =>
            array (
                'id' => 456,
                'municipio' => 'Rosario de Perijá',
                'estado_id' => 23
            ),
            329 =>
            array (
                'id' => 457,
                'municipio' => 'San Francisco',
                'estado_id' => 23
            ),
            330 =>
            array (
                'id' => 458,
                'municipio' => 'Santa Rita',
                'estado_id' => 23
            ),
            331 =>
            array (
                'id' => 459,
                'municipio' => 'Simón Bolívar',
                'estado_id' => 23
            ),
            332 =>
            array (
                'id' => 460,
                'municipio' => 'Sucre',
                'estado_id' => 23
            ),
            333 =>
            array (
                'id' => 461,
                'municipio' => 'Valmore Rodríguez',
                'estado_id' => 23
            ),
            334 =>
            array (
                'id' => 462,
                'municipio' => 'Libertador',
                'estado_id' => 24
            ),
        ));


    }
}
