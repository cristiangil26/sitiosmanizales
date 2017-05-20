<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sitio;
use App\Mapa;



class MapaController extends Controller
{
    public function edit(Request $request,$id){
        $sitio=Sitio::findOrFail($id);
        return view('mapa.mapa')->with('sitio',$sitio);
    }
}
