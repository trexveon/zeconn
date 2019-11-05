
    <div class="row noticia">
        @foreach($noticias as $n)

        <div class="col-lg-4 col-xl-4 col-md-12 col-sm-12 noticia">
            <a href="#" target="_blank" title="noticia">
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

