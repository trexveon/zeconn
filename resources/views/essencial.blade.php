@extends('layouts.principal')

@section('titulo','Zecon - Residencial Jasmim')
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

<a href="" class="prev d-none d-sm-none d-md-block d-lg-block d-xl-block">
<p>VIOLETA RESIDENCIAL</p>
    <img src="{{asset('img/arrow-ant.png')}}" alt="">
    
</a>
<a href="" class="prox d-none d-sm-none d-md-block d-lg-block d-xl-block">
<p> RESIDENCIAL TULIPA</p>
    <img src="{{asset('img/arrow-ant.png')}}" alt="">
    
</a>
<div class="conheca d-flex align-items-center justify-content-center flex-row">
    <a href="#apres">
        CONHECA O JASMIM <br>
        <img src="{{asset('img/arrow-ant.png')}}" alt="">    
    </a>
</div>
</section>

<section class="apres" id="#apres">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 d-flex align-items-center justify-content-center flex-row">
                <img src="{{asset('img/Jasmim.png')}}" alt="">
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 text-left">
                <h4 class="text-uppercase">sobre</h4>
                <h3>Garanta o futuro <br>
                    de sua família!</h3>
                <p>Cubilia quis sapien est phasellus platea 
                mus velit vel eget id blandit pulvinar a ad 
                vestibulum vestibulum netus. Sit et consectetur 
                amet dignissim nullam tempus at a scelerisque 
                a bibendum adipiscing commodo.</p>
                <p>
                Scelerisque pharetra vestibulum quis euismod 
                ac mattis condimentum eros vestibulum urna scelerisque 
                amet cras duis consectetur in tempus himenaeos 
                suspendisse dui lacus eleifend inceptos nunc adipiscing 
                porttitor phasellus.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="slides">
    <h4 class="text-uppercase text-center">galeria de imagens</h4>
    <div class="container">
        <div class="slid">
            <div class="item" style="background-image:url('{{asset('img/Interna_Living 01.jpg')}}');">

            </div>
            <div class="item" style="background-image:url('{{asset('img/JASMIM_INTERNA_APTO 3D_02.09.2016_02.09.2016.png')}}');">
                
            </div>
            <div class="item" style="background-image:url('{{asset('img/Interna_Living 01.jpg')}}');">
                
            </div>
        </div>
       
    </div>
    
    <a href="#" class="prev d-none d-sm-none d-md-block d-lg-block d-xl-block"><img src="{{asset('img/arrow-rr.png')}}" alt=""></a>
    <a href="#" class="prox d-none d-sm-none d-md-block d-lg-block d-xl-block"><img src="{{asset('img/arrow-rr.png')}}" alt=""></a>
</section>

<section class="plantas">
    <h4 class="text-uppercase text-center">São 2 opções de plantas</h4>
    <div class="row m-0">
        <img src="{{asset('img/legendas.png')}}" alt="" class="planta1" >
        <ul>
            <li><div class="numero d-inline">2</div><div class="msg ">dormitórios, com <br>
            1 vaga de garagem</div></li>
            <li class="item text-uppercase">
            Apto. tipo
            </li>
            <li class="descricao ">
            Final 02. 03. 06. 07
            </li>
            <li class="item text-uppercase">
            área privativa
            </li>
            <li class="descricao">
            83.09m²
            </li>
            <li class="item text-uppercase">
            área total
            </li>
            <li class="descricao">
            95.95m²
            </li>
        </ul>
    </div>



    <div class="row  m-0">
    <ul class="d-xl-block d-lg-none d-md-none d-sm-none d-none">
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


        <img src="{{asset('img/legendas2.png')}}" alt="" class="planta1 secundaria" >




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
    <div class="link text-center"><a href="{{asset('catalogo/catalogo.png')}}" download class="text-center btn btn-outline-light">BAIXAR CATÁLOGO</a></div>
</section>





<section class="localizacao">
    <div class="row px-md-0 mx-md-0">
    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 mapa " style="background-image:url('{{asset('img/Gmaps.png')}}');">

</div>
<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12  ende">
    <h4>LOCALIZAÇÃO</h4>
    <h3>Quando tudo está mais
    próximo, o tempo corre
    a seu favor.
    </h3>
    <p>Localizado próximo ao Novo Centro - um espaço que apresenta 
        novas vias de acesso, ciclo faixa, Parque Urbano - 
        e ao Centro Histórico, com diversas opções 
        de comércio, serviços e 
        lazer.
    </p>
    <h5>ENDEREÇO</h5>
    <div class="end">
        <img src="{{asset('img/position.png')}}" alt="">
    </div>
    <div class="end">
    Marcílio Dias, 3329 - Centro <br>
Pelotas - RS - CEP 96.020-480 
    </div>
    <div class="end">
        <a href="https://www.google.com.br/maps/place/Residencial+Tulipa/@-31.7350267,-52.3146493,17z/data=!4m5!3m4!1s0x9511b51d4f964c33:0x5eeb651637f2e2fe!8m2!3d-31.7351225!4d-52.3124123?hl=pt-BR')}}" alt="" target="_blank"><img src="{{asset('img/arrows.png')}}" alt=""></a>
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