<?php

namespace App\Http\Controllers;
use App\Services\ProductosService;
use App\Repositories\ProductosRepositories;
use App\Models\marca;
use App\Models\area;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index(){
        $datos_vista = [];
        $datos_vista["marcas"] = marca::where('status', true)->get();
        $datos_vista["areas"] = area::where('status', true)->get();
        return view('pages.private.user.productos')->with('datos_vista', $datos_vista);
    }

    public function show()
    {
        $producto = ProductosRepositories::productos();
        return  datatables()->of($producto)->toJson(true);


    }

    public function create(Request $request){
        return response()
            ->json(
                ProductosService::guardarProdcuto($request->all())
        );
    }

    public function store($producto_id)
    {
        return ProductosRepositories::producto($producto_id);

    }

    public function update(Request $request)
    {
        return response()
            ->json(
                ProductosService::updateProducto($request->all())
        );

    }
}

