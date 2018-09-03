<?php

namespace App\Http\Controllers\Admin;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Bandeiras;

class BandeirasController extends Controller
{
    public function index()
    {
        $bandeiras = Bandeiras::all();
        return view('admin.bandeiras.index', compact('bandeiras'));
    }
    public function create()
    {
        return view('admin.bandeiras.create');
    }
    public function edit()
    {
        return view('admin.bandeiras.edit');
    }
    // INSERIR DADOS NO BANCO DE DADOS
    public function insert(Request $request)
    {
        Bandeiras::create($request->all());
    }
}
