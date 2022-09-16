<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ModelosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('modelos')->delete();

        \DB::table('modelos')->insert(array (
            0 =>
            array (
                'descripcion' => 'switch 8 puertos',
                'marca_id' => 1),
            1 =>
            array (
                'descripcion' => 'switch 32 puertos',
                'marca_id' => 1
            ),
            2 =>
            array (
                'descripcion' => 'switch 5 puertos',
                'marca_id' => 1
            ),
            3 =>
            array (
                'descripcion' => 'Unifi Wifi6 U6-lite',
                'marca_id' => 1
            ),
            4 =>
            array (
                'descripcion' => 'Router Hap Rb941-2nd-tc 32mb Balanceador',
                'marca_id' => 3
            ),
            5 =>
            array (
                'descripcion' => 'Router Hex Rb750gr3 256mb 850mhz Balanceador',
                'marca_id' => 3),
            6 =>
            array (
                'descripcion' => 'Router Hap Rb941-2nd-tc 32mb Balanceador',
                'marca_id' => 3
            ),
            7 =>
            array (
                'descripcion' => 'Radio C5x 5ghz 700mbps',
                'marca_id' => 2
            ),
            8 =>
            array (
                'descripcion' => 'Radio B5c 1.5 Gbps Sectorial Omnidireccional Ptp',
                'marca_id' => 2
            ),
            9 =>
            array (
                'descripcion' => 'Sectorial A5x',
                'marca_id' => 2
            ),
            10 =>
            array (
                'descripcion' => 'Balanceador De Carga Gigabit Wan Y Vpn Router Tp-link Er605',
                'marca_id' => 4
            ),
            11 =>
            array (
                'descripcion' => 'Access Point Uap-ac-m-pro Mesh 2.4 - 5 Ghz 1750 Mb',
                'marca_id' => 1
            ),
            12 =>
            array (
                'descripcion' => 'Router Tp-link Tl-r480t Balanceador',
                'marca_id' => 4
            ),
            13 =>
            array (
                'descripcion' => 'Switch LS1005 5 Puertos',
                'marca_id' => 4
            ),
            14 =>
            array (
                'descripcion' => 'Nanostation M5 Nsm5 16dbi',
                'marca_id' => 1
            ),
            15 =>
            array (
                'descripcion' => 'Fibra 1 hilo con ayudante',
                'marca_id' => 5
            ),
        ));


    }
}
