<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    public function index()
    {
        $pessoas = Pessoa::all();
        return view('welcome');
    }

    public function create()
    {
        return view('pessoas.create');
    }

    public function store(Request $request)
    {
        $pessoa = new Pessoa();
        $pessoa->title = $request->input('title');
        $pessoa->content = $request->input('content');
        $pessoa->save();

        return redirect()->route('pessoas.index');
    }

    public function show($id)
    {
        $pessoa = Pessoa::find($id);
        return view('pessoa.show', compact('pessoa'));
    }

    public function edit($id)
    {
        $pessoa = Pessoa::find($id);
        return view('pessoas.edit', compact('pessoa'));
    }

    public function update(Request $request, $id)
    {
        $pessoa = Pessoa::find($id);
        $pessoa->title = $request->input('title');
        $pessoa->content = $request->input('content');
        $pessoa->save();

        return redirect()->route('pessoa.index');
    }

    public function destroy($id)
    {
        $pessoa = Pessoa::find($id);
        $pessoa->delete();

        return redirect()->route('pessoa.index');
    }
}
