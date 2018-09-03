<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Produtos;

class ProdutosController extends Controller
{
    
    // [PAGINA] LISTAGEM DOS PRODUTOS
    public function index()
    {
        $produtos = Produtos::all();
        return view('admin.produtos.index', compact('produtos'));
    }
    
    // [PAGINA] PARA CADASTRO DE PRODUTO NO BANCO
    public function create()
    {
        return view('admin.produtos.create');
    }
    
    // [PAGINA] EXIBE AS INFORMAÇÕES DE UM PRODUTO
    public function view($id)
    {
        $produto = Produtos::where('cod', $id)->first();
        return view('admin.produtos.view', compact('produto'));
    }
     
    // [PAGINA] EDITA UM PRODUTO
    public function edit(Request $request, $id)
    {
        $produto = Produtos::find($id);
        return view('admin.produtos.edit', compact('produto'));
    }    
    
    // [FUNÇÃO] INSERE DADOS DO PRODUTO NO BANCO DE DADOS
    public function insert(Request $request)
    {
        $produto = Produtos::create($request->all());
        return redirect()->route('admin.produtos.edit', $produto->id)->with('message','Ficha Técnica Cadastrada com Sucesso');
    }
    
    //  [FUNÇÃO] ATUALIZA DADOS DO PRODUTO NO BANCO DE DADOS
    public function update(Request $request, $id)
    {
        $produto = Produtos::find($id);
        $produto->fill($request->all());
        $produto->save() ;
        return view('admin.produtos.edit', compact('produto'));
    }
    
}
