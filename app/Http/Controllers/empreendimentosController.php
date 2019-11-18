<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Empreendimento;
use App\EmpreendimentosDado;
use App\Slide;
use App\Planta;

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
        
        $empreendimento = Empreendimento::with(['EmpreendimentosDado'],['Slide'],['Planta'])->find($id);

        return view('essencial',compact('empreendimento'));
        
    }

}
