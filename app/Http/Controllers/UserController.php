<?php

namespace App\Http\Controllers;
use App\Usuario;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function list(){
        $data['users']=Usuario::paginate(3);
        return view('usuarios.list', $data);
    }
    public function userform(){
        return view('usuarios.userform');
    }
    public function save(Request $request){
        $validator=$this->validate($request,[
            'nombre'=>'required|string|max:255',
            'email' =>'required|string|max:255|email|unique:usuarios',
        ]);
        $userdata=request()->except('_token');
        Usuario::insert($userdata);
        return back()->with('usuarioGuardado','Usuario guardado');
    }
    public function delete($id){
        Usuario::destroy($id);
        return back()->with('usuarioEliminado','Usuario Eliminado.');
    }
}
