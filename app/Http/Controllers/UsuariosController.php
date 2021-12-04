<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index(){
        $usuarios = Usuario::all()->sortBy("id");
        // dd($usuarios);
        return view('usuarios.index', ['usuarios' => $usuarios]);
    }

    public function create(){
        return view('usuarios.create');
    }

    public function store(Request $request){
        $request->validate([
            'nome' => 'required',
            'cpf' => ['required', 'regex:/^([0-9\s\-\+\(\)]*)$/', 'unique:usuarios,cpf'],
            'senha' => 'required',
            'telefone' => ['required', 'regex:/^([0-9\s\-\+\(\)]*)$/', 'unique:usuarios,telefone'],
            'cargo' => 'required'
        ]);

        Usuario::create($request->all());
        return redirect()->route('usuarios-index');
    }

    public function edit($id){
        $usuarios = Usuario::where('id', $id)->first();
        return view('usuarios.edit', ['usuarios' => $usuarios]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'nome' => 'required',
            'cpf' => ['required', 'regex:/^([0-9\s\-\+\(\)]*)$/', 'unique:usuarios,cpf,'.$id],
            'senha' => 'required',
            'telefone' => ['required', 'regex:/^([0-9\s\-\+\(\)]*)$/', 'unique:usuarios,telefone,'.$id],
            'cargo' => 'required'
        ]);

        $data = [
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'senha' => $request->senha,
            'telefone' => $request->telefone,
            'cargo' => $request->cargo,
        ];
        Usuario::where('id', $id)->update($data);
        return redirect()->route('usuarios-index');
    }

    public function destroy($id){
        Usuario::where('id', $id)->delete();
        return redirect()->route('usuarios-index');
    }
}
