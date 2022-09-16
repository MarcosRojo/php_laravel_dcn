<?php

namespace App\Repositories;
use App\Models\disponibilidad;

class DisponibilidadExistenciaRepositories
{

    /**
     * Logica para recuperar todos los productos creados.
     *
     * @param array|null $data Datos que contienen la disponibilidad o existencia de un producto.
     * @return array Contiene todo los datos de los productos en formato data table.
     */
    public static function items()
    {
        $items = disponibilidad::where('disponibilidades.status', true)
        ->join("seriales", "seriales.disponibilidad_id", "=" , "disponibilidades.id")
        ->join("precios", "disponibilidades.id", "=" , "precios.disponibilidad_id")
        ->join("productos", "productos.id", "=" , "disponibilidades.producto_id")
        ->join('modelos', 'modelos.id', '=', 'productos.modelo_id')
        ->join("marcas", "marcas.id", "=", "modelos.marca_id")
        ->join("areas", "areas.id", "=", "productos.area_id")
        ->get();

    }

    public static function item(int $item_id)
    {

    }
}
