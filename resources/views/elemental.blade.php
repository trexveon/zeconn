@extends('layouts.principal')

@section('titulo','Zecon - Empreendimentos')

   
@section('conteudo')
@component('components.menu')
@endcomponent
<section class="elemental d-flex justify-content-center align-items-center flex-column" style="background-image:url('{{asset('img/img POLARIS.png')}}');">

<div class="filtro1"></div>
<div class="filtro1"></div>

<img src="{{asset('img/polaris.png')}}" alt="">
<button class="btn btn-outline-light">TENHO INTERESSE</button>
<div class="conheca d-flex align-items-center justify-content-center flex-row">
    <a href="#conheca">
        CONHECA O POLARIS <br>
        <img src="{{asset('img/arrow-ant.png')}}" alt=""> 
           
    </a>
</div>

</section>
<section class="espaco d-flex align-items-center justify-content-center flex-row" style="background-image:url('{{asset('img/PRLLX-02.png')}}');">
<div class="filter1"></div>
<div class="filter1"></div>
<div class="filter2"></div>
<h1>Tenha mais espaço <br>no lugar certo </h1>
<button class="btn btn-warning">TENHO INTERESSE</button>
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

@endsection