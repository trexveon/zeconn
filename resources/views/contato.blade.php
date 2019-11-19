@extends('layouts.principal')

@section('titulo','Zecon - Contato')





@section('conteudo')
@component('components.menu2')
@endcomponent
@if(isset($msg))
    <p class=" alert alert-success avisoemail">{{$msg}}
    </p>
    
@endif
@php
unset($msg)
@endphp
<div class="contato" id="head">

<h1 class="text-center">FALE CONOSCO</h1>
    
    <h2 class="text-center">Estamos prontos para
esclarecer suas dúvidas!</h2>
<p class="text-center">Preencha os campos abaixo e deixe a sua mensagem. <br>
Assim que possível, um dos nossos especialistas entrará em contato para te auxiliar.</p>

  
    <div class="formContato">
            <!-- formulario -->
            <section class="formulario" id="formulario">

                <div class="container">
                    <div class="row">
                        <form action="/email" method="POST">
                                @csrf

                            <div class="form-group">
                                <input type="text"  name="nome" class="nome nome1" />
                                <label for="input" class="control-label ">Nome</label><i class="bar"></i>
                                <div class="erroNome erro erroNome1"></div>
                            </div>

                            <div class="form-group">
                                <input type="text"  name="email" class="email email1" />
                                <label for="email" class="control-label ">Email</label><i class="bar"></i>
                                <div class="erroEmail erro erroEmail1"></div>
                            </div>

                            <div class="form-group">
                                <input type="text"  name="whatsapp" class="whatsapp whatsapp1" />
                                <label for="whatsapp" class="control-label ">WhatsApp</label><i class="bar"></i>
                                <div class="errowpp errowpp1 erro"></div>
                            </div>

                            
                            <div class="form-group">
                                <h3>Você pretende comprar imóvel quando?</h3>
                                <select name="imovel" id="imovel" >
                                    <option value="">Selecione</option>
                                    <option value="Imediatamente">Imediatamente</option>
                                    <option value="Próximos 30 dias">Próximos 30 dias</option>
                                    <option value="Em até 3 meses">Em até 3 meses</option>
                                    <option value="Em até 6 meses">Em até 6 meses</option>
                                    <option value="Estou só pesquisando">Estou só pesquisando</option>
                                </select>
                               
                                <div class="erroselect erroselect1 erro"></div>
                            </div>
                           

                            <div class="form-group">
                                <input type="text"  name="Mensagem" class="Mensagem Mensagem1" />
                                <label for="Mensagem" class="control-label ">Mensagem</label><i class="bar"></i>
                                <div class="erromensagem  erromensagem1 erro"></div>
                            </div>

                            <div class="cem">
                                <input type="submit" value="ENVIAR" class="btn btn-outline-dark enviar enviarrrr" name="enviar" title="enviar formulario" alt="enviar formulario" >
                            </div>

                        </form>
                    </div>
                </div>
            </section>
        </div>


</div>

<div class="aviso alert">

    </div>


@component('components.redessociais')
@endcomponent

<div id="fb-root"></div>
<script >
  let enviar = document.querySelector('.enviarrrr');
  let erroNome= document.querySelector('.erroNome1');
  let erroEmail= document.querySelector('.erroEmail1');
  let errowpp= document.querySelector('.errowpp1');
  let erroCompra= document.querySelector('.erroselect1');
  let erroMensagem= document.querySelector('.erromensagem1');
  let nome= document.querySelector('.nome1');
  let email= document.querySelector('.email1');
  let whatsapp= document.querySelector('.whatsapp1');
  let compra= document.querySelector('#imovel');
  let mensagem = document.querySelector('.Mensagem1');
  


    function validade(){
      let val = true;
      if(nome.value == ''){
        erroNome.innerHTML = 'Por favor preencha o campo de nome';
        nome.style.borderBottomColor = 'red';
        val = false;
      }else{
        erroNome.innerHTML = '';
        nome.style.borderBottomColor = '#999999';
    }

    var filtro = 	
          /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
    if(!filtro.test(email.value)){
      erroEmail.innerHTML = 'Por favor preencha com um email válido';
      email.style.borderBottomColor = 'red';
      val = false;
    }else{
      erroEmail.innerHTML = '';
      email.style.borderBottomColor = '#999999';

    }
    if(whatsapp.value.length!='15'){
      errowpp.innerHTML = 'Por favor preencha com um número valido (DDD + número)';
      whatsapp.style.borderBottomColor = 'red';
      val = false;
    }else{
      errowpp.innerHTML = '';
      whatsapp.style.borderBottomColor = '#999999';

    }
    if(compra.value==''){
      erroCompra.innerHTML = 'Por favor selecione um item ';
      compra.style.bordeColor = 'red';
      val = false;
    }else{
      erroCompra.innerHTML = '';
      compra.style.borderColor = '#999999';

    }
    if(mensagem.value==''){
      erroMensagem.innerHTML = 'Por favor não envie um campo vazio';
      mensagem.style.borderBottomColor = 'red';
      val = false;
    }else{
      erroMensagem.innerHTML = '';
      mensagem.style.borderBottomColor = '#999999';

    }
    return val;
    }
 
  enviar.addEventListener('click',function(e){
    valid = validade();
    if(valid==false){
      e.preventDefault();
    }else{
      e.submit();
    }
  });


</script>

@endsection
 

