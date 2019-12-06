<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UsuariosController extends Controller
{
    public function index()
    {
        return view('adm.usuarios');
    }

    public function pesquisar(Request $request)
    {
        if (empty($request)) {
            $usuarios = User::all();
            return view('adm.usuarios', $usuarios);
        } else {
            $nome = $request->input('name');
            // $nivelAcesso = $request->input('nivel_acesso');

            $usuarios = User::where("name", "LIKE", "%$nome%")->get();
            if(count($usuarios) <= 0){
                $usuarios = User::where("name", "LIKE", "%$nome%")->get();
            }
            return view('adm.usuarios')->with('usuarios', $usuarios);
        }
    }

    // public function editar($id)
    // {
    //     $usuario = User::find($id);
    //     return view('adm.usuarios.editar')->with('usuario', $usuario);
    // }

    // public function atualizar(Request $request, $id)
    // {
    //     $usuario = User::find($id);

    //     $usuario->name = $request->input('name');
    //     $usuario->email = $request->input('email');
    //     $usuario->password = $request->input('password');
    //     $usuario->id_ong = $request->input('id_ong');
    //     $usuario->id_contratante = $request->input('id_contratante');
    //     $usuario->nivel_acesso = $request->input('nivel_acesso');

    //     $usuario->save();

    //     return redirect('/adm/usuarios');
    // }

    public function excluir($id)
    {
        $usuario = User::find($id);
        $usuario->delete();

        return redirect()->route('adm.usuarios.index')->with('alert-sucess', 'Usuario excluido com sucesso');
    }
}
