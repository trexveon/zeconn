<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Noticia;

use Illuminate\Support\Facades\Route;

class noticiasController extends Controller
{
    public function index()
    {
        $route =  Route::currentRouteName();
        $noticias = Noticia::orderBy('created_at', 'desc')->paginate(9);
        return view('noticias',compact('noticias','route'));
    }

    public function show($id)
    {
        $noticias = noticia::orderBy('created_at', 'desc')->take(3)->get();
        $noticia = Noticia::find($id);
        return view('visualizarnoticia',compact('noticia','noticias'));
    }

    public function contato()
    {
        return view('contato');
    }


    public function store(Request $request)
    {
        //
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
