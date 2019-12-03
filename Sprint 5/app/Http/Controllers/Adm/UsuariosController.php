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
            $usuario = User::all();
            return view('adm.usuarios', $usuario);
            // retornar mensagem de usuario não encontrado
        } else {
            $usuario = $request->input('nome');
            $usuario = $request->input('nivel_acesso');

            $id_usuario = User::where("nome", "like", "%$usuario%")->get();

            return view('adm.usuarios', $id_usuario);
        }
    }

    public function editar($id)
    {
        $usuario = User::find($id);
        return view('adm.usuarios.editar')->with('usuario', $usuario);
    }

    public function atualizarUsuario(Request $request, $id)
    {
        $usuario = User::find($id);

        $usuario->name = $request->input('name');
        $usuario->email = $request->input('email');
        $usuario->password = $request->input('password');
        $usuario->id_ong = $request->input('id_ong');
        $usuario->id_contratante = $request->input('id_contratante');
        $usuario->nivel_acesso = $request->input('nivel_acesso');

        $usuario->save();

        return view('adm.usuarios');
    }

    public function excluirUsuario($id)
    {
        $usuario = User::find($id);
        $usuario->delete();

        return view('adm.usuarios');
    }
}
