<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        {{-- {{ config('app.name', 'Laravel') }} --}}
        Zecon
    </title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    
</head>
<body>
    <header>
        <div class="container">
            <div class="topHeader">

                    <div class="esquerda">
                        <img src="{{asset('img/ZECON.png')}}" alt="zecon construtora">
                    </div>

                    <div class="direita">
                        <ul>
                            <li>
                                <a href="#">A ZECON</a>   
                           </li>
                            <li>
                                <a href="#">EMPREENDIMENTOS</a>
                            </li>
                            <li>
                                <a href="#">NOTÍCIAS</a>
                            </li>
                        <li>
                            <a href="#"  class="btn btn-outline-light ">FALE CONOSCO</a>
                        </li>
                        </ul>
                    </div>
            </div>
            
            <div class="centro">
                <img src="{{asset('img/polaris.png')}}" alt="Residencial Polaris">
                <a href="#"  class="btn btn-outline-light">VER MAIS</a>
            </div>

            <div class="seta">
                <p>CONHEÇA A ZECON</p>
                <a href="#construtora"><img src="{{asset('img/arrow.png')}}" alt="Conheça a zecon"></a>
            
            </div>
        </div>
        
        {{-- <div class="slider">
            <ul>
                <li>
                    <div class="slide1">
                         <img src="{{asset('img/polaris.png')}}" alt="Residencial Polaris">
                        <a href="#"  class="btn btn-outline-light">VER MAIS</a>
                    </div>
                    {{-- <div class="filter"></div>
                    <div class="filter"></div> --}}
                {{-- </li>
            </ul> 
        </div> --}}
        <a href="#" class="anterior"><img src="{{asset('img/arrow-ant.png')}}" alt="anterior"></a>
        <a href="#" class="proximo"><img src="{{asset('img/arrow-pro.png')}}" alt="proximo"></a>
    </header>

    <section id="construtora">
        <div class="container">
            <h2>ZECON CONSTRUTORA</h2> <br>    
            <h3>O elemento essencial!</h3>
            <div class="elemento row">
                
                <div class="conteudodireita col-lg-6 col-xl-6 col-md-12 col-sm-12">
                    <p>Fundada em 1999, a ZECON engenharia iniciou suas atividades 
                        atuando nos mais diversos
                        segmentos da construção cívil, obras públicas, privadas e comerciais. 
                        <br>A cada ano, a construtora vem aprimorando os seus padrões 
                        desenvolvendo novas linhas de produtos,
                    </p>
                </div>
                <div class="conteudoesquerda col-lg-6 col-xl-6 col-md-12 col-sm-12">
                    <p>
                        atendendo as necessidades de diversos públicos. <br> Nos últimos 8 anos, a ZECON entregou
                        mais de 1660 unidades habitacionais entre apartamentos do programa
                        Minha Casa Minha Vida e empreendimentos de alto padrão.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="empreendimentos">
        <div class="container">
            <h3>Empreendimentos</h3>
            <h2>Conheça nossas obras realizadas, o que <br>estamos entregando e muito mais.</h2>
            <div class="empreendimentos row">
               <div>
                   <div class="col-lg-12 col-xl-12 col-md-4 col-sm-4"">
                       <div class="fotoresidencial" style="background-image:url({{asset('img/Externa_Sol.png')}});">
                            <div class="statusresidencial">

                            </div>
                       </div>
                   </div>
                   <div class="descricaoresidencial">

                   </div>
               </div>
            </div>
        </div>
    </section >

    <section id="parallax">
        <div class="filtro1"></div>
        <div class="filtro2"></div>
        <div class="filtro3"></div>
            <h1>CURTA A ZECON <br> NAS REDES SOCIAIS</h1>
            <p>e saiba tudo sobre nossos empreendimentos!</p>
            <div><a href="#" target="_blank"><img src="{{asset('img/face.png')}}" alt="facebook"></a>
                <a href="#" target="_blank" class="last"><img src="{{asset('img/isnta.png')}}" alt="instagram"></a>
            </div>
            
    </section>

    <section id="noticias">
        
        <div class="container">
            <h1>Notícias</h1>
            <div class="row">

                <div class="col-lg-12 col-xl-12 col-md-4 col-sm-4"">
                    <div class="imagemnoticia">

                    </div>
                    <div class="titulonoticia">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </div>
                    <div class="conteudonoticia">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni quas recusandae facilis facere, doloremque doloribus fugit perferendis animi obcaecati dicta! Odit et sunt nihil
                    </div>
                </div>

            </div>
        </div>
        <a href="#"  class="btn btn-outline-light ">IR PARA O BLOG</a>
    </section>
    <script src="{{ mix('js/app.js') }}"></script>
</body>