@extends('layouts.principal')

@section('titulo','Zecon - '.$noticia->titulo)

@section('titulonoticia',$noticia->titulo)
@section('imagemnoticia',Voyager::image( $noticia->foto ))
@section('descricaonoticia',$noticia->conteudo)
@section('dt',\Carbon\Carbon::parse($noticia->created_at)->format('d/m/Y')) 



@section('conteudo')
@component('components.menu2')
@endcomponent

<section  id="#visualizarnoticias" class="visualisarnoticia">
    <div class="voltar float-left">
        <a href="{{ url()->previous() }}"><img src="{{asset('img/arrowempdireitadeactivate.png')}}" title="voltar">VOLTAR</a>
    </div>
    
    <h1 class="text-left">
        {{$noticia->titulo}}
    </h1>
    
    <hr>
    <h3 class="float-left">
        {{ \Carbon\Carbon::parse($noticia->created_at)->format('d.m.Y')}}  /  por {{$noticia->usuario}}
    </h3>
    <div class="dados float-right">
        <ul class="d-flex align-items-center justify-content-center flex-row">
            <li><i class="fas fa-eye"></i> 118  </li>
            <li><i class="fas fa-comment-dots"></i> 8  </li>  
            <li class="ultimo"><i class="fas fa-share-alt"></i> 15</li>
        </ul>
    </div>
    
    <div class="imagemnoticia" style="background-image: url('{{Voyager::image( $noticia->foto )}}');">

    </div>
   
<div class="conteudo">{!!$noticia->conteudo_extenso!!}</div>
<hr class="compartilhar">
    <div class="compartilhe"> 
        <h4>Compartilhe</h4>
        <ul>
            <li class="first"><a href="https://www.facebook.com/sharer.php?u={{Request::url()}}" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
            <li><a href=""><i class="fab fa-instagram"></i></a></li>
            <li><a href="whatsapp://send?text={{Request::url()}}" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
            
        </ul>
    </div>
</section>
<section id="noticias" style="background-color:#fafafa" class="listag">

    <h1>Leia também</h1>

    <div>

        <div class="row noticia">
            @foreach($noticias as $n)

            <div class="col-lg-4 col-xl-4 col-md-12 col-sm-12 noticia">
           
                    <div class="imagemnoticia" style="background-image: url('{{Voyager::image( $n->foto )}}');" alt="{{$n->titulo}}" title="{{$n->titulo}}">

                    </div>

                    <div class="titulonoticia">
                        {{$n->titulo}}
                    </div>

                    <div class="conteudonoticia">
                    {!! $n->conteudo !!}
                    </div>
                    <a href="/noticias/visualizar/{{$n->id}}" class="btn btn-outline-secondary midd" title="ir para o blog">SAIBA MAIS</a>
            </div>

            @endforeach

        </div>

    </div>
    
</section>






@component('components.redessociais')
@endcomponent

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v5.0"></script> 
@endsection
 

