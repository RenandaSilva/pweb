<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $cliente = \App\Cliente::get();
        
        return view('cliente.index', compact('cliente'));
    }
    public function create()
    {
        return view('cliente.create');
    }

    public function store(Request $request)
    {
        $cliente = new \App\Cliente();
        $cliente->nomecli = $request->get('nomecli');
        $cliente->save();
        
        return redirect('/cliente')->with('msg','CLIENTE CADASTRADO COM SUCESSO!');
    }
    
    //public function show($id)
    //{
      //  
    //}
    public function edit($codcli)
    {
        $cliente = \App\Cliente::find($codcli);
        return view('cliente.edit', compact('cliente'));
    }
    
    public function update(Request $request, $codcli)
    {
        $cliente = \App\Cliente::find($codcli);
        $cliente->nomecli = $request->get('nomecli');
        $cliente->save();
        
        return redirect('/cliente')->with('msg', 'CLIENTE ALTERADO COM SUCESSO!');
    }

    public function destroy($codcli)
    {
        $cliente = \App\Cliente::find($codcli);
        $cliente->delete();
        
        return redirect('/cliente')->with('cliEliminado','Cliente eliminado');
    }
}
