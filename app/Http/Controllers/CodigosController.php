<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\codigos_postales;

class CodigosController extends Controller
{
    public function index()
    {
        $datoscodigo = codigos_postales::where('codigo','55635')->get();
        return response()->json($datoscodigo);
    }
    public function verCodigos($id){
        $datoscodigo = codigos_postales::where('codigo',$id)->get();
        return response()->json($datoscodigo);

    }
    public function estado()
    {
        $datoscodigo = codigos_postales::where('codigo','20000')->get('estado');
        return response()->json($datoscodigo);
    }
    public function tipo_asenta()
    {
        $tipo_asenta = codigos_postales::where('codigo','20000')->get('tipo_asenta');
        return response()->json($tipo_asenta);
    }
}


