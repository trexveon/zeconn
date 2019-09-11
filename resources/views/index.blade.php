<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        {{-- {{ config('app.name', 'Laravel') }} --}}
        Zecon - Polaris
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
                {{-- <img src="{{asset('img/polaris.png')}}" alt="Residencial Polaris">
                <a href="#"  class="btn btn-outline-light">VER MAIS</a> --}}
            </div>

            <div class="seta">
                <p>CONHEÇA A ZECON</p>
                <a href="#"><img src="{{asset('img/arrow.png')}}" alt="Conheça a zecon"></a>
            
            </div>
        </div>
        
        <div class="slider">
            <ul>
                <li>
                    <div class="slide1">
                         <img src="{{asset('img/polaris.png')}}" alt="Residencial Polaris">
                        <a href="#"  class="btn btn-outline-light">VER MAIS</a>
                    </div>
                    <div class="filter"></div>
                    <div class="filter"></div>
                </li>
            </ul>
        </div>
    </header>













    <script src="{{ mix('js/app.js') }}"></script>
</body>