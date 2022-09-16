<?php

namespace App\Http\Controllers;
use App\Models\modelo;
use Illuminate\Http\Request;

class ModelosController extends Controller
{
    public function modelos($marca_id)
    {
        $modelo = modelo::where([['marca_id', $marca_id],['status', true]])->get();
        return $modelo;
    }
}
