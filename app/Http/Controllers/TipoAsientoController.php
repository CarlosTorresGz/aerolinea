<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TipoAsiento;


class TipoAsientoController extends Controller
{
    //
    public function home(){
        return view('inicio');
    }

    public function editar(){
        $asientos = TipoAsiento::where('estado', 'A')->get();
        //echo $asientos;
        return view('tiposAsientos', compact('asientos'));;
    }

    public function crear(){
        return view('AgregarTipoAsiento');
    }
}
