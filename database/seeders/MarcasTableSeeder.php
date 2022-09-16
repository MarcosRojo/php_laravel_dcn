<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MarcasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('marcas')->delete();

        \DB::table('marcas')->insert(array (
            0 =>
            array (
                'descripcion' => 'UBNT',
                'status' => true
            ),
            1 =>
            array (
                'descripcion' => 'MIMOSA',
                'status' => true
            ),
            2 =>
            array (
                'descripcion' => 'MICROTIK',
                'status' => true
            ),
            3 =>
            array (
                'descripcion' => 'TP-LINK',
                'status' => true
            ),
            4 =>
            array (
                'descripcion' => 'MAXIFIBER',
                'status' => true
            ),
        ));


    }
}
