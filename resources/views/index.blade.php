@extends('layouts.principal')

@section('titulo','Zecon - Inicio')
   
@section('conteudo')
    <header id="head">
   
        <div class="container">

            <div class="centro">

            </div>

        </div>

        <div class="seta">
            <p id="conhecazecon">CONHEÇA A ZECON</p>
            <a href="#conhecazecon" title="conheça a zecon"><img src="{{asset('img/arrow.png')}}" alt="Conheça a zecon"></a>
        </div>

        <a href="#" class="anterior" title="slide anterior"><img src="{{asset('img/arrow-ant.png')}}" alt="anterior"></a>
        <a href="#" class="proximo" title="próximo slide"><img src="{{asset('img/arrow-pro.png')}}" alt="proximo"></a> 

        <!-- slider -->
        <div class="slidestop">

            <div class="a">

                <img src="{{asset('img/polaris.png')}}" alt="polaris">

                <div>
                    <a href="#" class="btn btn-outline-light" title="ver mais sobre o Polaris">VER MAIS</a>
                </div>

            </div>

            <div class="b">

            </div>

            <div class="c">

            </div>

        </div>

    </header>
    <!-- slider -->

    <section id="construtora">

        <div class="container">
            <h2>ZECON CONSTRUTORA</h2>
            <br>
            <h3>O elemento essencial!</h3>
            <div class="elemento row">

                <div class="conteudodireita col-lg-6 col-xl-6 col-md-12 col-sm-12">
                    <p>Fundada em 1999, a ZECON engenharia iniciou suas atividades atuando nos mais diversos 
                        segmentos da construção cívil, obras públicas, privadas e comerciais.
                        <br>A cada ano, a construtora vem aprimorando os seus padrões desenvolvendo novas linhas de produtos,
                        <hr id="conhecaempreendimentos" style=" background-color:transparent; color:transparent; border-color:transparent;">  
                    </p>
                    
                </div>
                <div class="conteudoesquerda col-lg-6 col-xl-6 col-md-12 col-sm-12">
                    <p>
                        atendendo as necessidades de diversos públicos.
                        <br> Nos últimos 8 anos, a ZECON entregou mais de 1660 unidades 
                        habitacionais entre apartamentos do programa Minha Casa Minha Vida e empreendimentos de alto padrão.
                    </p>
                </div>
                
            </div>
            
           
        </div>

    </section>

    <section id="empreendimentos">

        <div class="container">

            <h3>Empreendimentos</h3>

            <h2>Conheça nossas obras realizadas, o que <br>estamos entregando e muito mais.</h2>

            <div class="empreendimentos anuncioss">
                @foreach($empreendimentos as $e)
                <!-- modelo principal -->
                <div>
                    <div class="fotoresidencial" style="background-image:url('{{Voyager::image( $e->foto )}}');" alt="Polaris">
                        <div class="statusresidencial" style="color:{{$e->color}};">
                            {{$e->status}}
                        </div>
                    </div>
                    <div class="descricaoresidencial">
                        <h3>{{$e->residencial}}</h3>
                        <p>{{$e->descricao}}</p>
                        <ul>
                            <li><a href="#" title="CLASS CURSUS">CLASS CURSUS</a></li>
                            <li><a href="#" title="METUS ALIQUET">METUS ALIQUET</a></li>
                            <li><a href="#" title="INNISI PHARETRA">INNISI PHARETRA</a></li>
                        </ul>
                    </div>

                </div>
                <!-- modelo principal -->
                @endforeach

            </div>

            <a href="#" class="btn btn-outline-secondary ">QUERO SABER MAIS</a>

        </div>
        <a href="#a"><img src="{{asset('img/arrowempdireita.png')}}" alt="" class="esqemp"></a>
        <a href="#b"><img src="{{asset('img/arrowempdireita.png')}}" alt="" class="diremp"></a>
    </section>
    <!--empreendimentos -->

    @component('components.redessociais')
    @endcomponent

    <section id="noticias">

        <h1>Notícias</h1>

        <div>

            <div class="row noticia">
                @foreach($noticias as $n)
                <!-- modelo principal -->
                <div class="col-lg-4 col-xl-4 col-md-12 col-sm-12 noticia">
                    <a href="#" target="_blank" title="noticia">
                        <div class="imagemnoticia" style="background-image: url('{{Voyager::image( $n->foto )}}');">

                        </div>

                        <div class="titulonoticia">
                            {{$n->titulo}}
                        </div>

                        <div class="conteudonoticia">
                        {{$n->conteudo}}
                        </div>
                    </a>
                </div>
                <!-- modelo principal -->
                @endforeach

            </div>

        </div>
        <a href="#" class="btn btn-outline-secondary " title="ir para o blog">IR PARA O BLOG</a>
    </section> 
    @endsection 