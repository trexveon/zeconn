@php
use App\Empreendimento;
$empreendimentos = empreendimento::all();
@endphp

<section id="empreendimentos">


        <div class="container">

            <h3 style="color:@yield('color');">Empreendimentos</h3>

            <h2>Conheça nossas obras realizadas, o que <br>estamos entregando e muito mais.</h2>

            <div class="empreendimentos anuncioss">
                @foreach($empreendimentos as $e)
                
                <div>
                <a href="/empreendimentos/visualizar/{{$e->id}}" title="{{$e->residencial}}">
                    <div class="fotoresidencial" style="background-image:url('{{Voyager::image( $e->foto )}}');" alt="{{$e->residencial}}">
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
                    </a>
                </div>
               
                @endforeach

            </div>

            <a href="/empreendimentos" class="btn btn-outline-secondary ">QUERO SABER MAIS</a>

        </div>
        <a href="#a" alt="empreendimento prévio"><img src="{{asset('img/arrowempdireita.png')}}"  class="esqemp"></a>
        <a href="#b" alt="próximo empreendimento"><img src="{{asset('img/arrowempdireita.png')}}"  class="diremp"></a>
    </section>
    <!--empreendimentos -->