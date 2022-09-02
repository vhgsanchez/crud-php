<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class LivrosController extends Controller
{
    public function create(){
        return view('livros.create');
    }
    public function store(Request $request){
        Livro::create([
            'nome' => $request->nome,
            'autor' => $request->autor,
            'valor' => $request->valor
        ]);
        return "Livro cadastrado.";
    }
    public function show(){
        $livros = Livro::all();
        return view('livros.todos',['livros' => $livros]);
    }
    public function destroy($id){
        $livro = Livro::findOrFail($id);
        $livro->delete();
        return "Livro excluido.";
    }
    public function edit($id){
        $livro = Livro::findOrFail($id);
        return view('livros.editar', ['livro' => $livro]);
    }
    public function update(Request $request, $id){
        $livro = Livro::findOrFail($id);
        $livro->update([
            'nome' => $request->nome,
            'autor' => $request->autor,
            'valor' => $request->valor
        ]);
        return "Livro atualizado.";
    }
}
