<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cores;

class CoresController extends Controller
{
    public function index()
    {
        $cores = Cores::all();
        return view('admin.cores.index', compact('cores'));
    }
    public function create()
    {
        return view('admin.cores.create');
    }
   
    // [PAGINA] EDITA UM PRODUTO
    public function edit(Request $request, $id)
    {
        $cor = Cores::find($id);
        return view('admin.cores.edit', compact('cor'));
    }    
    
    // [FUNÇÃO] INSERE DADOS DO PRODUTO NO BANCO DE DADOS
    public function insert(Request $request)
    {
        $cor = Cores::create($request->all());
        return redirect()->route('admin.cores.edit', $cor->id)->with('message','Cor Cadastrada com Sucesso');
    }
    
    //  [FUNÇÃO] ATUALIZA DADOS DO PRODUTO NO BANCO DE DADOS
    public function update(Request $request, $id)
    {
        $cor = Cores::find($id);
        $cor->fill($request->all());
        $cor->save() ;
        return view('admin.cores.edit', compact('cor'));
    }
    
}