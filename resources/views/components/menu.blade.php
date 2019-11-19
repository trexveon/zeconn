<!-- menu mobile-------------------------------------------- -->
<nav class="menuprincipal">
        <ul class="nave">
            <li class="
                @if (\Request::is('zecon'))  
                    underline
                @endif
            "
            ><a href="/" title="A zecon">A ZECON</a></li>
            <li class="
                @if (\Request::is('empreendimentos'))  
                    underline
                @endif
            "><a href="/empreendimentos" title="empreendimentos">EMPREENDIMENTOS</a></li>
            <li class="
                @if (\Request::is('noticias'))  
                    underline
                @endif
            "><a href="/noticias" title="noticias">NOTICIAS</a></li>    
        </ul>
        <a href="" class="faleconosco falle">FALE CONOSCO</a>
        <ul class="redessociais">
            <li><a href="https://www.facebook.com/zeconengenharia" target="_blank"><i class="fab fa-facebook-square" ></i></a></li>
            <li><a href="https://www.instagram.com/zeconengenharia/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                           
        </ul>
       
    </nav>
    <!-- menu mobile-------------------------------------------- -->


    <!-- menu top--------------------------------------------------------------- -->
    <div class="topHeader">
    
        <div class="container">
            <div class="esquerda">
                <a href="#head"><img src="{{asset('img/ZECON.png')}}" alt="zecon construtora" title="Zecon Construtora" class="iconz"></a>
            </div>

            <div class="direita">
                <ul>
                    <li>
                        <a href="/ " title="A zecon" class="itens 
                        @if(!isset(explode('/',Request::url())[3]) ) 
                            
                                traco
                            
                        @endif
                        ">A ZECON</a>
                    </li>

                    <li>
                        <a href="/empreendimentos" title="empreendimentos" class="itens 
                        @if(isset(explode('/',Request::url())[3]) ) 
                            @if(explode('/',Request::url())[3] == 'empreendimentos')
                                traco
                            @endif
                        @endif
                        ">EMPREENDIMENTOS</a>
                    </li>
                    <li>
                        <a href="/noticias" title="noticias" class="itens 
                        @if(isset(explode('/',Request::url())[3]) ) 
                            @if(explode('/',Request::url())[3] == 'noticias')
                                traco
                            @endif
                        @endif
                        ">NOTÍCIAS</a>
                    </li>
                    <li>
                        <a href="/contato" class="btn btn-outline-light bott" title="fale conosco">FALE CONOSCO</a>
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



   