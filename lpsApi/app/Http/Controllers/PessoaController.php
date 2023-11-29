<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Lps;

class PessoaController extends Controller
{
    
    public function index(){

        $events = Lps::all();

        return view ('crud-opcoes', ['events' => $events]);
    }

    public function create(){
        return view ('pessoas.create');
    }

    public function store(Request $request){

        $event = new Lps;

        $event->nome = $request->nome;
        $event->sobrenome = $request->sobrenome;
        $event->nascimento = $request->nascimento;
        $event->genero = $request->genero;
        $event->professor = $request->professor;
        $event->serie = $request->serie;
        $event->descricao = $request->descricao;
        
        $event->save();


        return redirect('/');
    }

    public function read(){
        return view ('pessoas.read');
    }

    public function update(){
        return view ('pessoas.update');
    }

    public function delete(){
        return view ('pessoas.delete');
    }
}
