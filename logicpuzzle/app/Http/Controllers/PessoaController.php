<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;

class PessoaController extends Controller
{
    public function store (Request $request) {

        $pessoa = New Pessoa;

        $pessoa->nome = $request->nome;
        $pessoa->sobrenome = $request->sobrenome;
        $pessoa->professor = $request->professor;

        $pessoa->save();
        
        return view('crud-options');
    }

    public function find($id){

        $pessoa = Pessoa::find($id);

        return view('crud/read-id', ['pessoa' => $pessoa]);
    }

    public function delete($id){

        $pessoa = Pessoa::destroy($id);

        return view('crud/read');
    }

    public function update($id){

        
    }
}
