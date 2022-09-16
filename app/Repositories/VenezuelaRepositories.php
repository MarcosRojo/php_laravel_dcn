<?php

namespace App\Repositories;
use App\Models\Estado;
use App\Models\Municipio;
use App\Models\Parroquia;

class VenezuelaRepositories
{

    /**
     * Logica para recuperar  Los estados, municipios y parroquias de venezuela
     *
     * @param array|null $data Datos del formulario del producto.
     * @return array Contiene todo los datos de los productos en formato data table.
     */
    public static function Estados()
    {
        $estados = Estado::all();
        return $estados;

    }

    public static function Municipios($estado_id)
    {

        $municipios = Municipio::where("municipios.estado_id", $estado_id)->get();

        return $municipios;

    }

    public static function Parroquias($municipios_id)
    {
        $parroquia = Parroquia::where("parroquias.municipio_id", $municipios_id)->get();
        return $parroquia;
    }
}
