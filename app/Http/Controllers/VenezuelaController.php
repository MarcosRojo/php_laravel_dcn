<?php

namespace App\Http\Controllers;

use App\Repositories\VenezuelaRepositories;
use Illuminate\Http\Request;

class VenezuelaController extends Controller
{
    public function estados(){
        $estados = VenezuelaRepositories::Estados();
        return $estados;

    }

    public function municipios($estado_id)
    {
        $municipios = VenezuelaRepositories::Municipios($estado_id);
        return $municipios;
    }

    public function parroquias($parroquia_id)
    {
        $parroquias = VenezuelaRepositories::Parroquias($parroquia_id);
        return $parroquias;
    }
}
