<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sitio;
use App\Comentario;
use App\Mapa;
use App\Http\Requests\LugarRequest;
class SitioController extends Controller
{
   public function Create(){
        return view('Sitio.crear');
    }
     public function store(LugarRequest $request){

        $sitio= new Sitio($request->all());
         $sitio->save();
         Flash('Se ha registrado el Lugar Existosamente');
         return redirect('/admin/sitio');
    }

    public function index(){
        $sitio= Sitio::orderBy('nombre','ASC')->paginate(5);
        return view('sitio.index')->with('sitio',$sitio);
    }
    public function destroy(Request $request,$nombre){
        try
  {
    $sitio = Sitio::findOrFail($nombre);

    $sitio->delete();

    flash( 'Sitio Borrado!');

    return redirect()->route('sitio.index');
  }
  catch(ModelNotFoundException $e)
  {
    flash( "El sitio $nombre no pudo ser borrado!");

    return redirect()->back();
  }
    }

    public function show(Request $request ,$nombre){
    $sitio = Sitio::findOrFail($nombre);

    return view('sitio.show')->withSitio($Sitio);
    }
    public function edit(Request $request,$nombre){
        $sitio=Sitio::findOrFail($nombre);
        return view('sitio.edit')->with('sitio',$sitio);

    }
    public function update(Request $request, $nombre){
        $sitio= Sitio::find($nombre);
        $sitio->nombre=$request->nombre;
        $sitio->direccion=$request->direccion;
        $sitio->latitud=$request->latitud;
        $sitio->longitud=$request->longitud;
        $sitio->telefono=$request->telefono;
        $sitio->correo=$request->correo;
        $sitio->paginaweb=$request->paginaweb;
        $sitio->tipo=$request->tipo;
        $sitio->save();
        flash( "El Sitio ha sido actualizado correctamente");
         return redirect()->route('sitio.index');
    }

}
