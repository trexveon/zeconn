<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        @yield('titulo')
    </title>
    <link rel="shortcut icon" href={{asset( 'img/favicon.ico')}} type="image/x-icon" />
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/slick/slick-theme.css')}}">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="https://use.fontawesome.com/d5d3d68e10.js"></script> 
    <script src="https://kit.fontawesome.com/514916f486.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- modal----------------------------------------------------------------------------------------------- -->
    <div class="modalll">
        <div class="formContato">
            <div class="close">X</div>
            <!-- formulario -->
            <section class="formulario" id="formulario">

                <div class="container">
                    <div class="row">
                        <form action="email.php" method="POST">
                            <h1>FALE CONOSCO</h1>
                            <hr>

                            <div class="form-group">
                                <input type="text" required="required" name="nome" class="nome" />
                                <label for="input" class="control-label ">Nome</label><i class="bar"></i>
                                <div class="erroNome erro"></div>
                            </div>

                            <div class="form-group">
                                <input type="text" required="required" name="email" class="email" />
                                <label for="email" class="control-label ">Email</label><i class="bar"></i>
                                <div class="erroEmail erro"></div>
                            </div>

                            <div class="form-group">
                                <input type="text" required="required" name="Mensagem" class="Mensagem" />
                                <label for="Mensagem" class="control-label ">Mensagem</label><i class="bar"></i>

                            </div>

                            <div class="cem">
                                <input type="submit" value="ENVIAR" class="btn btn-outline-dark enviar" name="enviar" title="enviar formulario" alt="enviar formulario">
                            </div>

                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- menu mobile-------------------------------------------- -->
    <nav class="menuprincipal">
        <ul class="nave">
            <li><a href="/zecon">A ZECON</a></li>
            <li><a href="/empreendimentos">EMPREENDIMENTOS</a></li>
            <li><a href="/noticias">NOTICIAS</a></li>    
        </ul>
        <a href="" class="faleconosco falle">FALE CONOSCO</a>
        <ul class="redessociais">
            <li><a href="https://www.facebook.com/zeconengenharia" target="_blank"><i class="fab fa-facebook-square" ></i></a></li>
            <li><a href="https://www.instagram.com/zeconengenharia/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                           
        </ul>
       
    </nav>
    <!-- menu mobile-------------------------------------------- -->

    <div class="aviso alert">

    </div>


    <!-- menu top--------------------------------------------------------------- -->
    <div class="topHeader">
    
        <div class="container">
            <div class="esquerda">
                <a href="#"><img src="{{asset('img/ZECON.png')}}" alt="zecon construtora" title="Zecon Construtora" class="iconz"></a>
            </div>

            <div class="direita">
                <ul>
                    <li>
                        <a href="/zecon " title="A zecon" class="itens">A ZECON</a>
                    </li>
                    <li>
                        <a href="/empreendimentos" title="empreendimentos" class="itens">EMPREENDIMENTOS</a>
                    </li>
                    <li>
                        <a href="/noticias" title="noticias" class="itens">NOTÍCIAS</a>
                    </li>
                    <li>
                        <a href="#" class="btn btn-outline-light bott" title="fale conosco">FALE CONOSCO</a>
                    </li>
                    
                </ul>
                <div class="hamburguer">
                    <input type="checkbox" id="inputhamburguer">
                    <label for="inputhamburguer"><span class="hamburguerr"></span></label>
                    
                </div>
                
            </div>
        </div>
    </div>
        <!-- menu top--------------------------------------------------------------- -->




    @yield('conteudo')




    <!-- link---------------------------------------------------------------------------------------------------------------- -->

    <section class="links">
        <a href="#head" class="idatopo"><img src="{{asset('img/topo-btn.png')}}" alt="topo"> </a>
        <div class="container">

            <div class="row">

                <div class="col-lg-3 col-xl-3 col-md-3 col-sm-12 row1">
                    <img src="{{asset('img/ESS.png')}}" alt="Zecon Essencial">
                </div>

                <div class="col-lg-3 col-xl-3 col-md-3 col-sm-12 row2">
                    <hr>
                    <ul>
                        <li><a href="" title="">item 1</a></li>
                        <li><a href="" title="">item 2</a></li>
                        <li><a href="" title="">item 3</a></li>
                        <li><a href="" title="">item 4</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-xl-3 col-md-3 col-sm-12 row3">
                    <img src="{{asset('img/ELL.png')}}" alt="Zecon Elemental">
                </div>

                <div class="col-lg-3 col-xl-3 col-md-3 col-sm-12 row4">
                    <hr>
                    <ul>
                        <li><a href="" title="">item 1</a></li>
                        <li><a href="" title="">item 2</a></li>
                        <li><a href="" title="">item 3</a></li>
                    </ul>
                </div>

            </div>

        </div>

    </section>



    <!-- footer------------------------------------------------------------------------------------------------------------------------------------- -->
    <footer>
        <div class="container">
            <div class="end">

                <div class="row">

                    <div class="icone col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <div><img src="{{asset('img/ZECONrodape.png')}}" alt="Rodapé Zecon"></div>
                    </div>

                    <div class="endereco col-sm-11 col-md-11 col-lg-5 col-xl-5">
                        <ul>
                            <li>Marcilio Dias, 3329 - centro
                                <br> Pelotas-RS - CEP 96.020-480
                            </li>
                            <li>(53)32223-2566 / 3025-7270</li>
                            <li>zecon@zecon.eng.br</li>
                        </ul>
                    </div>

                    <div class="redes  col-sm-1 col-md-1 col-lg-1 col-xl-1">
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/zeconengenharia" title="link do facebook da zecon" target="_blank"><i class="fab fa-facebook-square"></i></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/zeconengenharia/" title="link do instagram da zecon" target="_blank"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>

                </div>

                <div class="copyright">
                    <div class="row">

                        <div class="col-sm-11 col-md-11 col-lg-11 col-xl-11">
                            Copyright &copy ZECON - ZECHLINSKI ENGENHARIA E CONSTRUÇÃO.
                            <span>todos os direitos reservados</span>
                        </div>

                        <div class="col-sm-1 col-md-1 col-lg-1 col-xl-1">
                            <a href="http://www.human2be.com.br/" target="_blank" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" id="human2be" viewBox="0 0 500 500">
                                    <switch>
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <path class="h2be_b" d="M278.1 321.3h-66.5c1.2-11.5 15.8-31.3 29.6-44.6 20.3-19.6 44.4-38.7 44.4-71.6 0-29.8-16.9-45.7-47.9-45.7-32.1 0-47.8 17.6-47.8 44.8 0 5.2 4.3 9.5 9.5 9.5s9.5-4.3 9.5-9.5c0-17.2 10.1-26.4 28.9-26.4 18.7 0 29 9.6 29 25.5 0 28-15.9 37.9-35.5 56.6-18.4 17.6-41.3 43.5-41.3 70.8 0 7.5 5.4 9.9 8.3 9.9h79.9c5.4 0 9.8-4.3 9.8-9.7-.1-5.4-4.5-9.6-9.9-9.6z"></path>
                                                    </g>
                                                    <path class="h2be_2" d="M356.4 216.6c-14.1 0-25.2 6.3-31.7 12.9v-60.4c0-5.5-4.3-9.7-9.7-9.7-5.5 0-9.7 4.3-9.7 9.7v121.3c0 31.5 18.7 50.4 50.1 50.4 33.8 0 52.3-22.4 52.3-63.2.1-40.5-17.2-61-51.3-61zm-1 105.8c-11.5 0-30.7-4.2-30.7-32v-35.6c1.3-2.7 10.3-20.2 30.7-20.2 21.8 0 32.9 14.5 32.9 43 0 29.7-11 44.8-32.9 44.8z"></path>
                                                    <path class="h2be_h" d="M206.6 261.2c0-28-18.2-44.7-48.8-44.7-11.8 0-21.7 2.5-29.5 7.1v-19.7c0-16.2 10.4-25.9 27.9-25.9.1 0 5.4 0 6.9-.2 5-.6 8.5-4.5 8.5-9.4s-3.5-8.5-8.7-9.1c-.7-.1-2.5-.1-7.5-.1-28.6.3-46.4 17.4-46.4 44.7v126.8c0 5.3 4.3 9.7 9.7 9.7 5.3 0 9.7-4.3 9.7-9.7v-69.4c0-16.1 10.7-25.4 29.4-25.4s29.4 9.3 29.4 25.4V294c4.8-8.8 11.2-17.8 19.3-27.1v-5.6c.1 0 .1-.1.1-.1z"></path>
                                                </g>
                                                <g>
                                                    <circle class="h2be_dot" cx="475.3" cy="325.6" r="9.7"></circle>
                                                    <path class="h2be_circle" d="M460.5 384.9c.1-.1.2-.2.3-.4 2.9-4.5 1.6-10.5-2.9-13.4s-10.5-1.6-13.4 2.9c-.1.2-.3.5-.4.7-44.2 68.6-123.6 111.6-210.7 105.2-127-9.3-222.4-119.8-213.1-246.7C29.6 106.2 140.1 10.8 267 20.1c126.7 9.3 222 119.5 213 246.3-.4 5.4 3.6 10 9 10.4 5.4.4 10-3.6 10.4-9 9.8-137.5-93.6-257-231.1-267.1C130.5-9.4 10.7 94.1.7 231.8-9.4 369.5 94.1 489.3 231.8 499.3c94.6 6.9 180.8-39.8 228.7-114.4z"></path>
                                                </g>
                                            </g>
                                        </g>
                                    </switch>
                                </svg>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

    </footer>

    <script src="{{ asset('js/jQuery-3.4.1.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/slick/slick.min.js') }}"></script>
    <script src="{{ mix('js/app.js') }}"></script>
</body>