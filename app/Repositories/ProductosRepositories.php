<?php

namespace App\Repositories;
use App\Models\producto;
use App\Models\servico;
use App\Models\area;

class ProductosRepositories
{

    /**
     * Logica para recuperar todos los productos creados.
     *
     * @param array|null $data Datos del formulario del producto.
     * @return array Contiene todo los datos de los productos en formato data table.
     */
    public static function productos()
    {
        $productos = producto::leftJoin('modelos', 'modelos.id', '=', 'productos.modelo_id')
        ->leftJoin("marcas", "marcas.id", "=", "modelos.marca_id")
        ->leftJoin("areas", "areas.id", "=", "productos.area_id")
        ->leftJoin("disponibilidades", "productos.id", "=", "disponibilidades.producto_id")
        ->select("productos.descripcion as producto_descripcion",
        "productos.id as producto_id",
        "marcas.descripcion as marcas_descripcion",
        "modelos.descripcion as modelo_descripcion",
        "areas.descripcion as area_descripcion",
        "disponibilidades.id as disponibilidad_id")->orderBy('producto_id', 'desc')
        ->get();
        return $productos;

    }

    public static function producto ( int $producto_id)
    {

        $productos = producto::where("productos.id", "=" , $producto_id)
        ->leftJoin('modelos', 'modelos.id', '=', 'productos.modelo_id')
        ->leftJoin("marcas", "marcas.id", "=", "modelos.marca_id")
        ->leftJoin("areas", "areas.id", "=", "productos.area_id")
        ->leftJoin("disponibilidades", "productos.id", "=", "disponibilidades.producto_id")
        ->select("productos.descripcion as producto_descripcion",
        "productos.id as producto_id",
        "marcas.descripcion as marca_descripcion",
        "marcas.id as marca_id",
        "modelos.descripcion as modelo_descripcion",
        "modelos.id as modelo_id",
        "areas.descripcion as area_descripcion",
        "areas.id as area_id",
        "disponibilidades.id as disponibilidad_id")->orderBy('producto_id', 'desc')
        ->get();
        return $productos;

    }
}
