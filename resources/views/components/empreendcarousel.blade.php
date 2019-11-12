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
                <a href="/empreendimentos/visualizar/{{$e->id}}">
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
                    </a>
                </div>
               
                @endforeach

            </div>

            <a href="#" class="btn btn-outline-secondary ">QUERO SABER MAIS</a>

        </div>
        <a href="#a"><img src="{{asset('img/arrowempdireita.png')}}" alt="" class="esqemp"></a>
        <a href="#b"><img src="{{asset('img/arrowempdireita.png')}}" alt="" class="diremp"></a>
    </section>
    <!--empreendimentos -->