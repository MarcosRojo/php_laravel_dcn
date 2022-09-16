<?php

namespace App\Http\Controllers;

use App\Repositories\ProductosRepositories;
use App\Repositories\VenezuelaRepositories;
use Illuminate\Http\Request;

class RegistroDisponibilidadExistenciaController extends Controller
{
    public function index()
    {
        $datos_vista =[];
        $datos_vista["productos"] = ProductosRepositories::productos();
        $datos_vista["estados_venezuela"]= VenezuelaRepositories::Estados();
        return view('pages.private.user.registroDisponibilidadExistencia')->with('datos_vista', $datos_vista);
    }
}
