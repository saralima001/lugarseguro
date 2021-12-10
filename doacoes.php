<!DOCTYPE html>
<html lang="pt-BR">

    <head>
        <title>Doações</title>
        <?php $pag='doacoes'; include 'assets/include/head.php';?>
    </head>

    <body>
        <div class="wrapper" id="main">
            <!--Menu de Navegação-->
            <?php include 'assets/include/menu.php';?>

            <!--Título: Doações-->
            <div class="titulo">
                <div class="tituloTexto" data-aos="fade-down" data-aos-duration="1000">
                    <h1>Doações</h1>
                </div>
            </div>

            <div class="containerRecebidos center">
                <div class="nome paragrafo center" data-aos="fade-up" data-aos-duration="1000">
                    <h3>Doações Recebidas</h3>
                    <h2>R$: 13,08</h2>
                    <p>Atualizado diariamente.</p>
                </div>        
            </div>
            <br>

            <div class="center" data-aos="fade-up" data-aos-duration="1000">

                <!--R$: 05,00-->
                <div class="margemDoacaoEmCima botaoDoacao center">
                    <a href="_cinco.php" class="botao">R$: 05,00</a>
                </div>
                <br>

                <!--R$: 10,00-->
                <div class="botaoDoacao center">
                    <a href="_dez.php" class="botao">R$: 10,00</a>
                </div>
                <br>

                <!--R$: 20,00-->        
                <div class="botaoDoacao center">
                    <a href="_vinte.php" class="botao">R$: 20,00</a>
                </div>
                <br>

                <!--R$: 50,00-->
                <div class="botaoDoacao center">
                    <a href="_cinquenta.php" class="botao">R$: 50,00</a>
                </div>
                <br>

                <!--Outros Valores-->
                <div class="margemDoacaoEmBaixo botaoDoacao center">
                    <a href="_outrosvalores.php" class="botao">Outros Valores</a>
                </div>
                <br>

                <!--Conheça as Histórias-->
                <div class="banner">
                    <div class="bannerText" data-aos="fade-up" data-aos-duration="1000">
                        <h1>Essas são as histórias das pessoas que fazem parte da nossa ONG. </h1>

                        <div class="botaoHistorias center">
                            <a href="historias.php" class="botao">CONHEÇA NOSSAS HISTÓRIAS</a>
                        </div>
                    </div>            
                </div>
            </div> 

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