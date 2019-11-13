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

<section class="espaco-empreendimento">
    <div class="container">
    <h4 class="text-center text-uppercase">mais espaço no lugar certo</h4>
    <div class="row">
        <div class="col-6 direita">
             <!-- col-xl-offset-1 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 "> -->
            <h3 class="text-left">Um lugar para viver hoje...</h3>
            <ul>
                <li><div class="numero d-inline">24</div><div class="msg ">unidades de 2 dormitórios, <br> com 1 vaga de garagem</div></li>
                <li><div class="numero d-inline">24</div><div class="msg ">unidades de 3 dormitórios, <br> com 2 vaga de garagem</div></li>
                <li><div class="numero d-inline">6</div><div class="msg ">andares com 8 apartamentos, <br> 4 de cada tipo</div></li>
            </ul>
            <span class="c1 text-uppercase">data de entrega</span> <br>
            <span class="c2">Outubro de 2021</span>

        </div>
        <div class="col-6 esquerda">
            <h3 class="text-left">E mais espaço para  crescer amanhã!</h3>
            <p>
            A vida pede mais espaço para ver a família crescer. Mais momentos para compartilhar cada pedacinho do seu lar com quem você gosta. Este espaço traz consigo mais conforto e ainda mais possibilidades. 
            </p>
            <p>
            Investir no futuro é fazer do hoje o amanhã. É criar melhores condições para, futuramente, desfrutar deste conforto ao lado dos amigos e familiares.Tenha mais espaço no lugar certo! Conheça o Residencial Polaris. 
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
            <div class="item" style="background-image:url('{{asset('img/Interna_Living 01.jpg')}}');">
                
            </div>
            <div class="item" style="background-image:url('{{asset('img/Interna_Living 01.jpg')}}');">
                
            </div>
        </div>
       
    </div>
    
    <a href="#" class="prev"><img src="{{asset('img/arrowempdireita.png')}}" alt=""></a>
    <a href="#" class="prox"><img src="{{asset('img/arrowempdireita.png')}}" alt=""></a>
</section>



<section class="espaco d-flex align-items-center justify-content-center flex-row" style="background-image:url('{{asset('img/PRLLX-02.png')}}');">
<div class="filter1"></div>
<div class="filter1"></div>
<div class="filter2"></div>
<h1>Tenha mais espaço <br>no lugar certo </h1>
<button class="btn btn-warning">TENHO INTERESSE</button>
</section> 

<section class="plantas">
    <h4 class="text-uppercase text-center">São 2 opções de plantas</h4>
    <div class="row">
        <img src="{{asset('img/2DORMs.png')}}" alt="" class="planta1" >
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
    <div class="row">
    <ul>
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
        <img src="{{asset('img/3DORMs.png')}}" alt="" class="planta1 secundaria" >
    </div>
    <div class="link text-center"><a href="{{asset('catalogo/catalogo.png')}}" download class="text-center btn btn-outline-light">BAIXAR CATÁLOGO</a></div>
</section>

<section class="localizacao">
    <div class="row">
    <div class="col-6 mapa" style="background-image:url('{{asset('img/CDRN-maps.png')}}');">

</div>
<div class="col-6 ende">
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
        <a href="https://www.google.com.br/maps/place/ZECON+Zechlinski+Engenharia/@-31.743369,-52.3467026,17z/data=!3m1!4b1!4m5!3m4!1s0x9511b56bf37c0a1d:0x355ab5556c19e2ba!8m2!3d-31.743369!4d-52.3445139" target="_blank"><img src="{{asset('img/arrows.png')}}" alt=""></a>
    </div>
</div>
    </div>
</section>

<section id="tempo">
        <a href="#" class="prevtempo" ><img src="{{asset('img/arrow-r.png')}}" alt=""></a>
        <a href="#" class="proxtempo"><img src="{{asset('img/arrow-r.png')}}" alt=""></a>

        <div class="container">
            <div class="row itenss">
                <div class="item">
                    <div class="imagem text-center"><img src="{{asset('img/Forma 2.png')}}" alt=""></div>
                    <div class="tempo text-center">7 MIN.</div>
                    <div class="bairro text-center" id="bairro">Centro Histórico</div>
                </div>

                <div class="item">
                    <div class="imagem text-center"><img src="{{asset('img/Forma 3.png')}}" alt=""></div>
                    <div class="tempo text-center">6 MIN.</div>
                    <div class="bairro text-center">Museo da Baronesa</div>
                </div>

                <div class="item">
                    <div class="imagem text-center"><img src="{{asset('img/Forma 4.png')}}" alt=""></div>
                    <div class="tempo text-center">16 MIN.</div>
                    <div class="bairro text-center">Laranjal</div>
                </div>

                <div class="item">
                    <div class="imagem text-center"><img src="{{asset('img/Forma 3c.png')}}" alt=""></div>
                    <div class="tempo text-center">3 MIN.</div>
                    <div class="bairro text-center">Parque Urbano</div>
                </div>

                <div class="item">
                    <div class="imagem text-center"><img src="{{asset('img/Forma 3c.png')}}" alt=""></div>
                    <div class="tempo text-center">4 MIN.</div>
                    <div class="bairro text-center">Praça Palestina</div>
                </div>

                <div class="item">
                    <div class="imagem text-center"><img src="{{asset('img/Forma 3c.png')}}" alt=""></div>
                    <div class="tempo text-center">8 MIN.</div>
                    <div class="bairro text-center">Parque UNA</div>
                </div>

                <div class="item">
                    <div class="imagem text-center"><img src="{{asset('img/Forma 7.png')}}" alt=""></div>
                    <div class="tempo text-center">5 MIN.</div>
                    <div class="bairro text-center">Shopping</div>
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

@endsection