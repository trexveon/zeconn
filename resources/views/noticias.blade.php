@extends('layouts.principal')

@section('titulo','Zecon - Noticias')

@section('conteudo')
@component('components.menu')
@endcomponent
<header class="cabecanoticias d-flex justify-content-center align-items-center flex-row">
    <h1>Noticias</h1>
    <div class="filtro1"></div>
    <div class="filtro2"></div>
    <div class="filtro3"></div>
</header>
<section id="noticias">

      
    <div>

        <div class="row noticia">
            @foreach($noticias as $n)

            <div class="col-lg-4 col-xl-4 col-md-12 col-sm-12 noticia">
                <a href="/noticias/visualizar/{{$n->id}}"  title="noticia">
                    <div class="imagemnoticia" style="background-image: url('{{Voyager::image( $n->foto )}}');">

                    </div>

                    <div class="titulonoticia">
                        {{$n->titulo}}
                    </div>

                    <div class="conteudonoticia">
                    {!!$n->conteudo!!}
                    </div>
                </a>
            </div>

            @endforeach
            
        </div>
        <div class="paginador d-flex align-items-center justify-content-center flex-row">
            {{$noticias->onEachSide(3)->links()}}
        </div>
    </div>

</section> 






@component('components.redessociais')
@endcomponent


@endsection    