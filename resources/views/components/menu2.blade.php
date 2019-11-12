<!-- menu mobile-------------------------------------------- -->
<nav class="menuprincipal2">
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


    <!-- menu top--------------------------------------------------------------- -->
    <div class="topHeader2">
    
        <div class="container">
            <div class="esquerda">
                <a href="/"><img src="{{asset('img/ZECONOriginal.png')}}" alt="zecon construtora" title="Zecon Construtora" class="iconz"></a>
            </div>

            <div class="direita">
                <ul>
                    <li>
                        <a href="/zecon " title="A zecon" class="itens 
                        @if(isset(explode('/',Request::url())[3]) ) 
                            @if(explode('/',Request::url())[3] == 'zecon')
                                traco
                            @endif
                        @endif
                        ">A ZECON</a>
                    </li>
                    <li>
                        <a href="/empreendimentos " title="A zecon" class="itens 
                        @if(isset(explode('/',Request::url())[3]) ) 
                            @if(explode('/',Request::url())[3] == 'empreendimentos')
                                traco
                            @endif
                        @endif
                        ">EMPREENDIMENTOS</a>
                    </li>
                    <li>
                        <a href="/noticias " title="A zecon" class="itens 
                        @if(isset(explode('/',Request::url())[3]) ) 
                            @if(explode('/',Request::url())[3] == 'noticias')
                                traco
                            @endif
                        @endif
                        ">NOTICIAS</a>
                    </li>
                    <li>
                        <a href="/contato" class="btn btn-outline-light bott" title="fale conosco">FALE CONOSCO</a>
                    </li>
                    
                </ul>
                <div class="hamburguer">
                    <input type="checkbox" id="inputhamburguer">
                    <label for="inputhamburguer"><span class="hamburguerrr"></span></label>
                    
                </div>
                
            </div>
        </div>
    </div>
        <!-- menu top--------------------------------------------------------------- -->



         