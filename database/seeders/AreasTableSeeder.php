<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AreasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('areas')->delete();

        \DB::table('areas')->insert(array (
            0 =>
            array (
                'descripcion' => 'antena',
            ),
            1 =>
            array (
                'descripcion' => 'fibra',
            ),
        ));


    }
}
