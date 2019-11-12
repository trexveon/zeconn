@extends('layouts.principal')

@section('titulo','Zecon - Empreendimentos')
@section('color','#ce5a2a')
   
@section('conteudo')
@component('components.menu')
@endcomponent
<section class="essencial d-flex justify-content-center align-items-center flex-column" style="background-image:url('{{asset('img/img JASMIM.png')}}');">

<h2>RESIDENCIAL</h2>
<h1>JASMIM</h1>
<h3>A sua grande chance</h3>
<h3>CHEGOU!</h3>
<button class="btn btn-outline-light">TENHO INTERESSE</button>



<div class="filtro1"></div>
<div class="filtro1"></div>

<a href="" class="prev">
<p>VIOLETA RESIDENCIAL</p>
    <img src="{{asset('img/arrow-ant.png')}}" alt="">
    
</a>
<a href="" class="prox">
<p> RESIDENCIAL TULIPA</p>
    <img src="{{asset('img/arrow-ant.png')}}" alt="">
    
</a>
<div class="conheca d-flex align-items-center justify-content-center flex-row">
    <a href="#conheca">
        CONHECA O JASMIM <br>
        <img src="{{asset('img/arrow-ant.png')}}" alt="">    
    </a>
</div>



</section>
@component('components.redessociais')
@endcomponent
@component('components.empreendcarousel')
@endcomponent
@endsection