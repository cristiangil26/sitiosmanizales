<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comentario;
use App\Sitio;
class ComentarioController extends Controller
{
    public function Create(){
        return view('Comentario.crear');
    }
     public function store(Request $request,$id){

        $comentario= new Comentario($request->all());
         $comentario->save();
         Flash('Se ha registrado el Comentario Existosamente');
         dd(comentario);
        // return redirect('/admin/comentario');
    }
     public function index(){
        $comentario= Comentario::orderBy('id','ASC')->paginate(5);
        return view('comentario.index')->with('comentario',$comentario);
    }
    public function edit(Request $request,$id){
        $sitio=Sitio::findOrFail($id);
        return view('comentario.edit')->with('sitio',$sitio);
    }
    public function update(Request $request, $id){
        $sitio= Sitio::find($id);
        $comentario= new Comentario($request->all());
        $comentario->descripcion=$request->descripcion;
        $comentario->user=$request->user;
        $comentario->sitio_id=$request->sitio_id;
        $comentario->sitio_nombre=$request->sitio_nombre;
        $comentario->save();
        flash( "El Sitio ha sido actualizado correctamente");
         return redirect()->route('comentario.index');
    }
  public function destroy(Request $request,$id){
        try
  {
    $comentario = Comentario::findOrFail($id);

    $comentario->delete();

    flash( 'Comentario Borrado!');

    return redirect()->route('comentario.index');
  }
  catch(ModelNotFoundException $e)
  {
    flash( "El comentario $id no pudo ser borrado!");

    return redirect()->back();
  }
    }
}
