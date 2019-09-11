<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index() {
        
        $categorias = \App\Categoria::get();
        
        return view('categoria.index', compact('categorias'));
    }
    
    public function create() {
        return view('categoria.create');
    }
    
    public function store(Request $request) {
        
        $categoria = new \App\Categoria();
        $categoria->nomcat = $request->get('nomcat');
        $categoria->save();
        
        return redirect('/categoria')->with('msg','CATEGORIA CADASTRADA COM SUCESSO!');
           
    }
    
    public function destroy($codcat) {
        $categoria = \App\Categoria::find($codcat);
        $categoria->delete();
        
        return redirect('/categoria')->with('catEliminada','Categoria eliminada');
    }
    
    public function edit($codcat){
        $categoria = \App\Categoria::find($codcat);
        return view('categoria.edit', compact('categoria'));
    }
    
    public function update(Request $request, $codcat) {
        
        $categoria = \App\Categoria::find($codcat);
        $categoria->nomcat = $request->get('nomcat');
        $categoria->save();
        
        return redirect('/categoria')->with('msg', 'CATEGORIA ALTERADA COM SUCESSO!');
        
    }
}
