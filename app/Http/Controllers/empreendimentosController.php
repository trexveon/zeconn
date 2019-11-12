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

    public function show($id)
    {
        $empreendimento = Empreendimento::find($id);

        if ($empreendimento['tipo_id']=='1'){
            return view('elemental',compact('empreendimento'));
        }else{
            return view('essencial',compact('empreendimento'));
        }
    }


    public function create()
    {
        
    }


    public function store(Request $request)
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
