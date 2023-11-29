<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PessoaController extends Controller
{
    
    public function index(){
        return view ('crud-opcoes');
    }

    public function create(){
        return view ('pessoas.create');
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
