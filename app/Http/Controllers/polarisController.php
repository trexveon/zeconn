<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\noticia;
use App\empreendimento;

class polarisController extends Controller
{

    public function index()
    {
        $empreendimentos = empreendimento::all();
        $noticias = noticia::orderBy('created_at', 'desc')->take(3)->get();

        return view('index',compact('empreendimentos','noticias'));
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
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
