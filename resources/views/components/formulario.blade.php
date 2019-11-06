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