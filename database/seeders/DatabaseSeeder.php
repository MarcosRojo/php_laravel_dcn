<?php

namespace Database\Seeders;
use Database\Seeders\EstadosTableSeeder;
Use Database\Seeders\MunicipiosTableSeeder;
use Database\Seeders\ParroquiasTableSeeder;
use Database\Seeders\CiudadesTableSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            EstadosTableSeeder::class,
            MunicipiosTableSeeder::class,
            ParroquiasTableSeeder::class,
            CiudadesTableSeeder::class,
            MarcasTableSeeder::class,
            ModelosTableSeeder::class,
            AreasTableSeeder::class,
        ]);
    }
}
