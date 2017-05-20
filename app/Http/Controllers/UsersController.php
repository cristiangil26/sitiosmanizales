<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UsersController extends Controller
{
    public function create(){
        return view('Usuario.crear');
    }
    public function store(Request $request){

        $user= new User($request->all());
         $user->save();
         Flash('Se ha registrado el Usuario Existosamente');
     return redirect('/admin/user');
    }
    public function index(){
        $users= User::orderBy('id','ASC')->paginate(5);
        return view('usuario.index')->with('user',$users);
    }
    public function show(Request $request ,$id){
    $user = User::findOrFail($id);

    return view('user.show')->withUser($user);
    }
    public function edit(Request $request,$id){
        $user=User::findOrFail($id);
        return view('Usuario.edit')->with('user',$user);

    }
    public function update(Request $request, $id){
        $user= User::find($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->type=$request->type;
        $user->save();
        flash( "El Usuario ha sido actualizado correctamente");
         return redirect()->route('user.index');
    }
}
