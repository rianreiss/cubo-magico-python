<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function create()
    {
        return view('pessoas.create');
    }

    public function store(Request $request)
    {
        $pessoa = new Pessoa();
        $pessoa->nome = $request->input('nome');
        $pessoa->sobrenome = $request->input('sobrenome');
        $pessoa->professor = $request->input('professor');
        $pessoa->save();

        return view('welcome');
    }

    public function read(Request $request)
    {
        $id = $request->input('id');
        $pessoa = Pessoa::find($id);

        return view('pessoas.readed', ['pessoa' => $pessoa]);
    }

    public function edit(Request $request)
    {
        $id = $request->input('id');
        $pessoa = Pessoa::find($id);

        return view('pessoas.update', ['pessoa' => $pessoa]);
    }

    public function update(Request $request, $id)
    {
        $pessoa = Pessoa::find($id);
        $pessoa->nome = $request->input('nome');
        $pessoa->sobrenome = $request->input('sobrenome');
        $pessoa->professor = $request->input('professor');
        $pessoa->save();

        return view('welcome');
    }

    public function delete(Request $request)
    {
        $id = $request->input('id');
        $pessoa = Pessoa::find($id);
        $pessoa->delete();

        return view('welcome');
    }
}
