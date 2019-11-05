<!-- menu mobile-------------------------------------------- -->
<nav class="menuprincipal">
        <ul class="nave">
            <li class="
                @if (\Request::is('zecon'))  
                    underline
                @endif
            "
            ><a href="/zecon">A ZECON</a></li>
            <li class="
                @if (\Request::is('empreendimentos'))  
                    underline
                @endif
            "><a href="/empreendimentos">EMPREENDIMENTOS</a></li>
            <li class="
                @if (\Request::is('noticias'))  
                    underline
                @endif
            "><a href="/noticias">NOTICIAS</a></li>    
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
                <a href="/"><img src="{{asset('img/ZECON.png')}}" alt="zecon construtora" title="Zecon Construtora" class="iconz"></a>
            </div>

            <div class="direita">
                <ul>
                    <li>
                        <a href="/zecon " title="A zecon" class="itens @if(route::has('zecon')) traco @endif">A ZECON</a>
                    </li>
                    <li>
                        <a href="/empreendimentos" title="empreendimentos" class="itens @if(route::has('empreendimentos')) traco @endif" >EMPREENDIMENTOS</a>
                    </li>
                    <li>
                        <a href="/noticias" title="noticias" class="itens @if(route::has('noticias')) traco @endif">NOTÍCIAS</a>
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


    <div class="aviso alert">

    </div>