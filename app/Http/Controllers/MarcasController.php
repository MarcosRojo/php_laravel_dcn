<?php

namespace App\Http\Controllers;

use App\Models\marca;
use Illuminate\Http\Request;
use App\Services\MarcasService;

class MarcasController extends Controller
{
    public function index ()
    {
        return view('pages.private.user.marcas');
    }
    public function show () {
        $marcas = marca::all();
        return  datatables()->of($marcas)->toJson(true);

    }

    public function create (Request $request) {

        return response()
            ->json(
                MarcasService::guardarMarca($request->all())
        );
        
    }

}
