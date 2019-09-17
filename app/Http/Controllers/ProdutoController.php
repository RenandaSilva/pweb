<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
        public function index() {
        
        $produto = \App\Produto::get();
        
        return view('produto.index', compact('produto'));
    }
    
    public function create() {
        return view('produto.create');
    }
    
    public function store(Request $request) {
        
        $produto = new \App\Produto();
        $produto->nompro = $request->get('nompro');
        $produto->despro = $request->get('despro');
        $produto->vlrpro = $request->get('vlrpro');
        $produto->codcat = $request->get('codcat');
        $produto->save();
        
        return redirect('/produto')->with('msg','PRODUTO CADASTRADO COM SUCESSO!');
           
    }
    
    public function destroy($codpro) {
        $produto = \App\Produto::find($codpro);
        $produto->delete();
        
        return redirect('/produto')->with('proEliminada','Produto eliminado');
    }
    
    public function edit($codpro){
        $produto = \App\Produto::find($codpro);
        return view('produto.edit', compact('produto'));
    }
    
    public function update(Request $request, $codpro) {
        
        $produto = \App\Produto::find($codpro);
        $produto->nompro = $request->get('nompro');
        $produto->despro = $request->get('despro');
        $produto->vlrpro = $request->get('vlrpro');
        $produto->codcat = $request->get('codcat');
        $produto->save();
        
        return redirect('/produto')->with('msg', 'PRODUTO ALTERADO COM SUCESSO!');
        
    }
}
