@extends('layouts.principal')

@section('titulo','Zecon - Residencial Jasmim')
@section('color','#ce5a2a')
   
@section('conteudo')
@component('components.menu')
@endcomponent

@php
use App\Empreendimento;
$empreendimentoprev = Empreendimento::find($empreendimento->id-1);
$empreendimentoprox = Empreendimento::find($empreendimento->id+1);

@endphp

<section class="essencial d-flex justify-content-center align-items-center flex-column" style="background-image:url('{{Voyager::image( $empreendimento->empreendimentosDado->bg_imagem )}}');">

<h2>RESIDENCIAL</h2>
<h1>{{$empreendimento->empreendimentosDado->residencial_nome}}</h1>
<h3>{{$empreendimento->empreendimentosDado->frase_inicio}}</h3>
<!-- <h3>CHEGOU!</h3> -->
<button class="btn btn-outline-light">TENHO INTERESSE</button>



<div class="filtro1"></div>
<div class="filtro1"></div>



@if($empreendimentoprev)
<a href="{{$empreendimento->id - 1}}" class="prevv d-none d-sm-none d-md-block d-lg-block d-xl-block">
<p class="text-uppercase">{{$empreendimentoprev->residencial}}</p>
    <img src="{{asset('img/arrow-ant.png')}}" alt="">
    
</a>
@endif
@if($empreendimentoprox)
<a href="{{$empreendimento->id + 1}}" class="proxx d-none d-sm-none d-md-block d-lg-block d-xl-block">
<p class="text-uppercase"> {{$empreendimentoprox->residencial}}</p>
    <img src="{{asset('img/arrow-ant.png')}}" alt="">
    
</a>
@endif

<div class="conheca d-flex align-items-center justify-content-center flex-row">
    <a href="#apres" class="text-uppercase">
        CONHECA O {{$empreendimento->empreendimentosDado->residencial_nome}} <br>
        <img src="{{asset('img/arrow-ant.png')}}" alt="">    
    </a>
</div>
</section>

<section class="apres" id="#apres">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 d-flex align-items-center justify-content-center flex-row">
                <img src="{{Voyager::image($empreendimento->empreendimentosDado->simbolo_imagem)}}" alt="">
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 text-left">
                <h4 class="text-uppercase">sobre</h4>
                <h3>{{$empreendimento->empreendimentosDado->apresentacao_titulo}}</h3>
                {!!$empreendimento->empreendimentosDado->apresentacao_conteudo!!}
            </div>
        </div>
    </div>
</section>

<section class="slides">
    <h4 class="text-uppercase text-center">galeria de imagens</h4>
    <div class="container">
        <div class="slid">
            @foreach($empreendimento->Slide as $slide)
            <div class="item" style="background-image:url('{{Voyager::image($slide->imagem)}}');">
                
            </div>
            @endforeach     
        </div>
       
    </div>
    
    <a href="#" class="prev d-none d-sm-none d-md-block d-lg-block d-xl-block"><img src="{{asset('img/arrow-rr.png')}}" alt=""></a>
    <a href="#" class="prox d-none d-sm-none d-md-block d-lg-block d-xl-block"><img src="{{asset('img/arrow-rr.png')}}" alt=""></a>
</section>

<section class="plantas">
    <h4 class="text-uppercase text-center">São {{$empreendimento->Planta->count()}} opções de plantas</h4>
    @php
        $valor = 0;
    @endphp

    @foreach($empreendimento->Planta as $planta)
        @if($valor%2 == 0)
        <div class="row m-0">
        <img src="{{Voyager::image($planta->planta_imagem)}}" alt="" class="planta1" >
        <ul>
            <li><div class="numero d-inline">{{$planta->dormitorios}}</div><div class="msg ">dormitórios, com <br>
            {{$planta->garagem}} vaga de garagem</div></li>
            <li class="item text-uppercase">
            Apto. tipo
            </li>
            <li class="descricao ">
            {{$planta->apto_tipo}}
            </li>
            <li class="item text-uppercase">
            área privativa
            </li>
            <li class="descricao">
            {{$planta->privativa}}
            </li>
            <li class="item text-uppercase">
            área total
            </li>
            <li class="descricao">
            {{$planta->total}}
            </li>
        </ul>
        </div>
        @else
        <div class="row  m-0">
        <ul class="d-xl-block d-lg-none d-md-none d-sm-none d-none">
            <li><div class="numero d-inline">{{$planta->dormitorios}}</div><div class="msg ">dormitórios, com <br>
            {{$planta->garagem}} vaga de garagem</div></li>
            <li class="item text-uppercase">
            Apto. tipo
            </li>
            <li class="descricao">
            {{$planta->apto_tipo}}
            </li>
            <li class="item text-uppercase">
            área privativa
            </li>
            <li class="descricao">
            {{$planta->privativa}}
            </li>
            <li class="item text-uppercase">
            área total
            </li>
            <li class="descricao">
            {{$planta->total}}
            </li>
        </ul>


        <img src="{{Voyager::image($planta->planta_imagem)}}" alt="" class="planta1 secundaria" >




        <ul class=" d-xl-none d-lg-block d-md-block d-sm-block d-block">
            <li><div class="numero d-inline">3</div><div class="msg ">dormitórios, com <br>
            2 vaga de garagem</div></li>
            <li class="item text-uppercase">
            Apto. tipo
            </li>
            <li class="descricao">
            Final 01. 04. 05. 08
            </li>
            <li class="item text-uppercase">
            área privativa
            </li>
            <li class="descricao">
            100.11m²
            </li>
            <li class="item text-uppercase">
            área total
            </li>
            <li class="descricao">
            124.11m²
            </li>
        </ul>
    </div>
        @endif


    @php
        $valor++;
    @endphp

    @endforeach




    
    <div class="link text-center"><a href="{{asset('catalogo/catalogo.png')}}" download class="text-center btn btn-outline-light">BAIXAR CATÁLOGO</a></div>
</section>





<section class="localizacao">
    <div class="row px-md-0 mx-md-0">
    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 mapa " style="background-image:url('{{Voyager::image($empreendimento->empreendimentosDado->local_imagem)}}');">

</div>
<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12  ende">
    <h4>LOCALIZAÇÃO</h4>
    <h3>{{$empreendimento->empreendimentosDado->localizacao_titulo}}
    </h3>
    {!!$empreendimento->empreendimentosDado->localizacao_descricao!!}
    <h5>ENDEREÇO</h5>
    <div class="end">
        <img src="{{asset('img/position.png')}}" alt="">
    </div>
    <div class="end" style="max-width:270px">
    {{$empreendimento->empreendimentosDado->localizacao_dados}} 
    </div>
    <div class="end">
        <a href="{{$empreendimento->empreendimentosDado->google}}" alt="" target="_blank"><img src="{{asset('img/arrows.png')}}" alt=""></a>
    </div>
</div>
    </div>
</section>

<section class="espaco d-flex align-items-center justify-content-center flex-row" style="background-image:url('{{asset('img/PRLLX.jpg')}}');">
<div class="filter1"></div>
<div class="filter1"></div>
<div class="filter2"></div> 
<div class="container">
    <h2>
        CURTA A ZECON <br>
        NAS REDES SOCIAIS
    </h2>
    <h3>
        e saiba tudo sobre nossos empreendimentos!
    </h3>
    <ul>
        <li><a href="https://www.facebook.com/zeconengenharia" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
        <li><a href="https://www.instagram.com/zeconengenharia/" target="_blank"><i class="fab fa-instagram"></i></a></li>
    </ul>
</div>
</section>


@component('components.empreendcarousel')
@endcomponent
@endsection