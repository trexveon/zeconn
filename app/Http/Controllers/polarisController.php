<?php

namespace App\Http\Controllers;
use Mail;
use App\User;

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

    public function sendEmail(Request $request)
    {
        $nome = $request->get("nome");
	    $email = $request->get("email");
        $mensagem = $request->get("mensagem");
        
        Mail::send('email.email',['mensagem' => $mensagem,'email' => $email],function($message) use ($nome,$email){
            $message->from($email, $nome);
            $message->to('zecon.polaris@gmail.com');
            $message->subject('Polaris - Tenho Interesse');
        });


        return 'Mensagem enviada com sucesso!';  
    }

    public function email(Request $request)
    {
        $nome = $request->input('nome');
        $email = $request->input('email');
        $whatsapp = $request->input('whatsapp');
        $mensagem = $request->input('Mensagem');
        $compra = $request->input('imovel');
        
        Mail::send('email.email',['mensagem' => $mensagem,'email' => $email, 'whatsapp' => $whatsapp, 'compra' => $compra, 'nome' => $nome],function($message) use ($nome,$email,$whatsapp,$compra,$mensagem){
            $message->from($email, $nome);
            $message->to('zecon.polaris@gmail.com');
            $message->subject('Polaris - Tenho Interesse');
        });

        $msg = 'Mensagem enviada com sucesso';
        return view('contato',compact('msg'));  
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
