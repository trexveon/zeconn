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
    <link rel="shortcut icon" href={{asset('img/favicon.ico')}} type="image/x-icon" />
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    
</head>
<body>
    <header id="head">
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

                       <div class="fotoresidencial" 
                       style="background-image:url({{asset('img/Externa_Sol.png')}});">
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
    {{-- parallax --}}

    <section id="noticias">
        
        <h1>Notícias</h1>

        <div class="container">
            
            <div class="row">

                <div class="col-lg-4 col-xl-4 col-md-12 col-sm-12 noticia">

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
        <a href="#"  class="btn btn-outline-secondary ">IR PARA O BLOG</a>
    </section>
    {{-- noticias --}}

    <section class="links">
    <a href="#head" class="idatopo"><img src="{{asset('img/topo-btn.png')}}" alt="topo"> </a>
        <div class="container">

            <div class="row">

                <div class="col-lg-3 col-xl-3 col-md-12 col-sm-12 row1">
                    <img src="{{asset('img/ESS.png')}}" alt="Zecon Essencial">
                </div>

                <div class="col-lg-3 col-xl-3 col-md-12 col-sm-12 row2">
                    <hr>
                        <ul>
                            <li>item 1</li>
                            <li>item 2</li>
                            <li>item 3</li>
                            <li>item 4</li>
                        </ul>
                </div>

                <div class="col-lg-3 col-xl-3 col-md-12 col-sm-12 row3">
                    <img src="{{asset('img/ELL.png')}}" alt="Zecon Essencial">
                </div>
    
                <div class="col-lg-3 col-xl-3 col-md-12 col-sm-12 row4">
                    <hr>
                        <ul>
                            <li>item 1</li>
                            <li>item 2</li>
                            <li>item 3</li>
                            
                        </ul>
                </div>

            </div>
            
        </div>

    </section>
    {{-- link --}}
    <footer>
        <div class="container">
            <div class="end">
                   <div class="row">
                        <div class="icone col-lg-6 col-xl-6 col-md-12 col-sm-12">
                            <div><img src="{{asset('img/ZECONrodape.png')}}" alt="Rodapé Zecon"></div>
                        </div>

                        <div class="endereco col-lg-5 col-xl-5 col-md-12 col-sm-12">
                            <ul>
                                <li>Marcilio Dias, 3329 - centro <br>
                                    Pelotas-RS - CEP 96.020-480 
                                </li>
                                <li>(53)32223-2566 / 3025-7270</li> 
                                <li>zecon@zecon.eng.br</li>
                            </ul>
                        </div>

                        <div class="redes col-lg-1 col-xl-1 col-md-1 col-sm-1">
                            <a href="#"><img src="{{asset('img/face.png')}}" alt="link facebook"></a>  <br>  
                            <a href="#"><img src="{{asset('img/insta.png')}}" alt="link instagram"></a>            
                        </div>
                    </div> 
            </div>
            <div class="copyright">
                <p>Copyright &copy ZECON - LECHLINSKI 
                    ENGENHARIA E CONSTRUÇÃO.
                    <span>todos os direitos reservados</span>
                </p>    
            </div>
        </div>
    </footer>

    <script src="{{ mix('js/app.js') }}"></script>
</body>