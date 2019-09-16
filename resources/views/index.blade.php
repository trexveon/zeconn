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
    <link rel="stylesheet" href="{{asset('css/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/slick/slick-theme.css')}}">
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
                                <a href="#construtora">A ZECON</a>
                           </li>
                            <li>
                                <a href="#empreendimentos">EMPREENDIMENTOS</a>
                            </li>
                            <li>
                                <a href="#noticias">NOTÍCIAS</a>
                            </li>
                        <li>
                            <a href="#"  class="btn btn-outline-light ">FALE CONOSCO</a>
                        </li>
                        </ul>
                    </div>
            </div>

            <div class="centro">

            </div>

            <div class="seta">
                <p>CONHEÇA A ZECON</p>
                <a href="#construtora"><img src="{{asset('img/arrow.png')}}" alt="Conheça a zecon"></a>
           </div>

        </div>


        <a href="#" class="anterior"><img src="{{asset('img/arrow-ant.png')}}" alt="anterior"></a>
        <a href="#" class="proximo"><img src="{{asset('img/arrow-pro.png')}}" alt="proximo"></a>

        <!-- slider -->
        <div class="slidestop">

            <div class="a">
                <img src="{{asset('img/polaris.png')}}" alt="polaris">
            </div>

            <div class="b">

            </div>

            <div class="c">

            </div>

        </div>
         <!-- slider -->
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




            <div class="empreendimentos anuncioss">

                    <div>

                       <div class="fotoresidencial"
                       style="background-image:url({{asset('img/Externa_Sol.png')}});">
                            <div class="statusresidencial" style="color:blue;">
                                LANÇAMENTO
                            </div>
                       </div>
                         <div class="descricaoresidencial">
                            <h3>Residêncial <br> Polaris</h3>
                            <p>Mais espaço no lugar certo</p>
                            <hr>
                            <ul>
                                <li><a href="#">CLASS CURSUS</a></li>
                                <li><a href="#">METUS ALIQUET</a></li>
                                <li><a href="#">INNISI PHARETRA</a></li>
                            </ul>
                        </div>

                   </div>

                   <div>

                       <div class="fotoresidencial"
                       style="background-image:url({{asset('img/tulipa.jpg')}});">
                            <div class="statusresidencial" style="color:bgray;">
                                EM OBRAS
                            </div>
                       </div>
                         <div class="descricaoresidencial">
                            <h3>Residêncial <br> Tulipa</h3>
                            <p>Mais espaço no lugar certo</p>
                            <hr>
                            <ul>
                                <li><a href="#">CLASS CURSUS</a></li>
                                <li><a href="#">METUS ALIQUET</a></li>
                                <li><a href="#">INNISI PHARETRA</a></li>
                            </ul>
                        </div>

                   </div>

                   <div>

                       <div class="fotoresidencial"
                       style="background-image:url({{asset('img/jasmim.jpg')}});">
                            <div class="statusresidencial" style="color:green;">
                                ENTREGUE
                            </div>
                       </div>
                         <div class="descricaoresidencial">
                            <h3>Residêncial <br> Jasmim</h3>
                            <p>Mais espaço no lugar certo </p>
                            <hr>
                            <ul>
                                <li><a href="#">CLASS CURSUS</a></li>
                                <li><a href="#">METUS ALIQUET</a></li>
                                <li><a href="#">INNISI PHARETRA</a></li>
                            </ul>

                    </div>

                   </div>

                   <div>

                       <div class="fotoresidencial"
                       style="background-image:url({{asset('img/Externa_Sol.png')}});">
                            <div class="statusresidencial" style="color:green;">
                                c
                            </div>
                       </div>
                         <div class="descricaoresidencial">
                            <h3>Residêncial <br> Polaris</h3>
                            <p>Mais espaço no lugar certo</p>
                            <hr>
                            <ul>
                                <li><a href="#">CLASS CURSUS</a></li>
                                <li><a href="#">METUS ALIQUET</a></li>
                                <li><a href="#">INNISI PHARETRA</a></li>
                            </ul>

                        </div>

                   </div>

                   <div>

                       <div class="fotoresidencial"
                       style="background-image:url({{asset('img/Externa_Sol.png')}});">
                            <div class="statusresidencial" style="color:green;">
                                d
                            </div>
                       </div>
                         <div class="descricaoresidencial">
                            <h3>Residêncial <br> Polaris</h3>
                            <p>Mais espaço no lugar certo</p>
                            <hr>
                            <ul>
                                <li><a href="#">CLASS CURSUS</a></li>
                                <li><a href="#">METUS ALIQUET</a></li>
                                <li><a href="#">INNISI PHARETRA</a></li>
                            </ul>
                        </div>

                   </div>

                   <div>

                       <div class="fotoresidencial"
                       style="background-image:url({{asset('img/Externa_Sol.png')}});">
                            <div class="statusresidencial" style="color:green;">
                                e
                            </div>
                       </div>
                         <div class="descricaoresidencial">
                            <h3>Residêncial <br> Polaris</h3>
                            <p>Mais espaço no lugar certo</p>
                            <hr>
                            <ul>
                                <li><a href="#">CLASS CURSUS</a></li>
                                <li><a href="#">METUS ALIQUET</a></li>
                                <li><a href="#">INNISI PHARETRA</a></li>
                            </ul>

                        </div>

                   </div>

            </div>





            <a href="#"  class="btn btn-outline-secondary ">QUERO SABER MAIS</a>

        </div>
        <a href="#a"><img src="{{asset('img/arrowempdireita.png')}}" alt="" class="esqemp"></a>
        <a href="#b"><img src="{{asset('img/arrowempdireita.png')}}" alt="" class="diremp"></a>
    </section >
    <!-- empreendimentos -->

    <section id="parallax">

        <div class="filtro1"></div>

        <div class="filtro2"></div>

        <div class="filtro3"></div>

            <h1>CURTA A ZECON <br> NAS REDES SOCIAIS</h1>

            <p>e saiba tudo sobre nossos empreendimentos!</p>

            <div><a href="#" target="_blank"><img src="{{asset('img/face.png')}}" alt="facebook"></a>
                <a href="#" target="_blank" class="last"><img src="{{asset('img/insta.png')}}" alt="instagram"></a>
            </div>

    </section> 
<!--     {{-- parallax --}} -->

    <section id="noticias">

        <h1>Notícias</h1>

        <div >

            <div class="row noticia">

                <div class="col-lg-4 col-xl-4 col-md-12 col-sm-12 noticia">
                    <a href="#" target="_blank">
                        <div class="imagemnoticia">

                        </div>

                        <div class="titulonoticia">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </div>

                        <div class="conteudonoticia">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni quas recusandae facilis facere, doloremque doloribus fugit perferendis animi obcaecati dicta! Odit et sunt nihil
                        </div>
                    </a>
                </div>


                <div class="col-lg-4 col-xl-4 col-md-12 col-sm-12 noticia">
                    <a href="">
                        <div class="imagemnoticia">

                        </div>

                        <div class="titulonoticia">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </div>

                        <div class="conteudonoticia">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni quas recusandae facilis facere, doloremque doloribus fugit perferendis animi obcaecati dicta! Odit et sunt nihil
                        </div>
                    </a>
                </div>



                <div class="col-lg-4 col-xl-4 col-md-12 col-sm-12 noticia">
                    <a href="">
                        <div class="imagemnoticia">

                        </div>

                        <div class="titulonoticia">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </div>

                        <div class="conteudonoticia">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni quas recusandae facilis facere, doloremque doloribus fugit perferendis animi obcaecati dicta! Odit et sunt nihil
                        </div>
                    </a>
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
            <div class="copyright">
                <p>Copyright &copy ZECON - LECHLINSKI
                    ENGENHARIA E CONSTRUÇÃO.
                    <span>todos os direitos reservados</span>
                </p>
            </div>
        </div>

    </footer>



    <script src="{{ asset('js/jQuery-3.4.1.js') }}"></script>
    <!-- <script src="{{ asset('js/bootstrap.js') }}"></script> -->
    <script src="{{ asset('js/slick/slick.min.js') }}"></script>
    <script src="{{ mix('js/app.js') }}"></script>
</body>