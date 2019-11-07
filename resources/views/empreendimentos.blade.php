@extends('layouts.principal')

@section('titulo','Zecon - Empreendimentos')

@section('conteudo')
@component('components.menu')
@endcomponent
<header class="cabecaempreendimentos d-flex justify-content-center align-items-center flex-row">
    <h1>Empreendimentos</h1>
    <div class="filtro1"></div>
    <div class="filtro2"></div>
    <div class="filtro3"></div>
</header>
<section id="empreendimentos" class="vis">
    <div class="container margembot">
    <div class="empreendimentos row">
                @foreach($empreendimentos as $e)

                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 visual">
                    <div class="fotoresidencial fotoresidencial2" style="background-image:url('{{Voyager::image( $e->foto )}}');" alt="Polaris">
                        <div class="statusresidencial" style="color:{{$e->color}};">
                            {{$e->status}}
                        </div>
                    </div>
                    <div class="descricaoresidencial descricaoresidencial2">
                        <h3>{{$e->residencial}}</h3>
                        <p>{{$e->descricao}}</p>
                        <ul>
                            <li><a href="#" title="CLASS CURSUS">CLASS CURSUS</a></li>
                            <li><a href="#" title="METUS ALIQUET">METUS ALIQUET</a></li>
                            <li><a href="#" title="INNISI PHARETRA">INNISI PHARETRA</a></li>
                        </ul>
                    </div>

                </div>

                @endforeach

            </div>

    <div class="paginador d-flex align-items-center justify-content-center flex-row">
            {{$empreendimentos->links()}}
            
    </div>
        </div>

</section>






@component('components.redessociais')
@endcomponent


@endsection    