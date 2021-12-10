<!DOCTYPE html>
<html lang="pt-BR">

    <head>
        <title>Início</title>
        <?php $pag='inicio'; include 'assets/include/head.php';?>
    </head>
    <body>
        <div class="wrapper" id="main">
            <!--Menu de Navegação-->
            <?php include 'assets/include/menu.php';?>

            <!--Doe-->
            <div class="landing">
                <div class="landingText" data-aos="fade-up" data-aos-duration="1000">
                    <h1>Você deseja<span> doar?</span></h1>
                    <h3>Você pode fazer uma boa ação, ajudando a melhorar a vida de animais abandonados, doando para seus cuidadores.</h3>
                        
                    <div class="botaoDoe">
                        <a href="doacoes.php" class="botao">DOE $</a>
                    </div>                
                </div>

                <div class="landingImage" data-aos="fade-down" data-aos-duration="2000">
                    <img src="assets/imagens/logo.png">
                </div>
            </div>

            <!--Conheça as Histórias-->
            <div class="banner">
                <div class="bannerText" data-aos="fade-up" data-aos-duration="1000">
                    <h1>Essas são as histórias das pessoas que fazem parte da nossa ONG. </h1>

                    <div class="botaoHistorias center">
                        <a href="historias.php" class="botao">CONHEÇA NOSSAS HISTÓRIAS</a>
                    </div>
                </div>            
            </div>

            <!--Patrocinadores-->
            <div class="patrocinadores">
                <div>
                    <h1>Patrocinadores</h1>

                    <div class="center">
                        <a href="https://xn--studiodesignsoluoes-lyb.com/"><img class="bordaRedondaMaior" src="assets/imagens/patrocinador01.png"></a>
                        <img class="bordaRedondaMaior" src="assets/imagens/patrocinador02.jpg">
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