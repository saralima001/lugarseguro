<!DOCTYPE html>
<html lang="pt-BR">

    <head>
        <title>Enviado</title>
        <?php $pag='historias'; include 'assets/include/head.php';?>
    </head>

    <body>
        <div class="wrapper" id="main">
            <!--Menu de Navegação-->
            <?php include 'assets/include/menu.php';?>

            <!--Título: Enviado-->
            <div class="titulo">
                <div class="tituloTexto" data-aos="fade-down" data-aos-duration="1000">
                    <h1>Enviado</h1>
                </div>
            </div>

            <!--Enviado-->
            <div class="container">
                <div class="nome paragrafo" data-aos="fade-up" data-aos-duration="1000">
                    <div class="bordaRedonda" data-aos="fade-down" data-aos-duration="2000">
                        <img src="assets/imagens/enviado.png">
                    </div>

                    <h3>Seu formulário foi enviado.</h3>
                    <p>Obrigada pelo interesse em adotar um (ou vários rsrs) de nossos bichinhos 😏!</p>
                    <br>
                    
                    <div>
                        <a href="index.php" class="botaoPreto">INÍCIO</a>
                    </div>
                    <br>
                </div> 
                
            </div>
            <br>

            <!--Rodapé-->
            <?php include 'assets/include/rodape.php';?>
        </div>

        <!--Animações-->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
                AOS.init();
        </script>
    </body>
</html>