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
}
