<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Empreendimento;

use Illuminate\Support\Facades\Route;

class empreendimentosController extends Controller
{

    public function index()
    {
        $empreendimentos = Empreendimento::orderBy('created_at', 'desc')->paginate(9);
        return view('empreendimentos',compact('empreendimentos'));
    }


    public function create()
    {
        
    }


    public function store(Request $request)
    {
        
    }


    public function show($id)
    {
        
    }


    public function edit($id)
    {
        
    }


    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
        
    }
}
