<?php

namespace App\Http\Controllers;

use App\Repositories\DisponibilidadExistenciaRepositories;
use Illuminate\Http\Request;

class DisponibilidadesExistenciasController extends Controller
{

    public function index()
    {
        return  view('pages.private.user.disponibilidadesExistencias');
    }

    public function show(){
      $items =  DisponibilidadExistenciaRepositories::items();
      return $items;
    }

}
