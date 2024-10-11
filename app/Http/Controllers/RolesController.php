<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Roles;
use App\Http\Requests\RoleRequest;

class RolesController extends Controller
{
    public function index (){
        //sentencia Eloquent para traer todos los datos del modelo
        $roles = Roles::all();
        return view('roles', compact('roles'));

    }
    public function add(){
        return view('crear-rol');
    }
    public function create(RoleRequest $request){
        //sentencia eloquent para guardar datos al modelo-BD
        $rol = new Roles;
        $rol->name =$request->nombre;
        $rol->save();
        return redirect('roles')->with('message','Rol creado correctamente.');

    }
    public function edit($id){
        $rol = Roles::find($id);
        return view('editar-rol',compact('rol'));

    }
    public function update(RoleRequest $request, $id){
        //sentencia eloquent para actualizar datos al modelo-BD
        $rol = Roles::find($id);
        $rol ->name = $request->nombre;
        $rol->save();
        return redirect('roles')->with('message','Rol actualizado correctamente.');
    }
    public function delete($id){
        //sentencia eloquent
               //Roles::where('id','==',1)->delete();
        $rol = Roles::find($id)->delete();
        return redirect('roles')->with('message','Rol eliminado.');

    }
}
