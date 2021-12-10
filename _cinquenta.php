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
                <div class="tituloTexto">
                    <h1>Doações</h1>
                    <h2 class="center">R$: 50,00</h2>
                </div>
            </div>

            <div class="linha-horizontal"></div>

            <h3 class="center margemDoacaoEmCima">PayPal</h3>

            <div class="center">
                <div class="margemDoacaoEmCima botaoDoacao center">
                    <form>
                        <input type="image" src="https://www.paypalobjects.com/pt_BR/BR/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Faça doações com o botão do PayPal"/>
                    </form>
                </div>
            </div>

            <div class="bordaQuadrada center margemDoacaoEmCima">
                <img src="assets/imagens/qrcode_cinquenta.png">
            </div>

        </div> 
        <br><br>

        <!--Rodapé-->
        <?php include 'assets/include/rodape.php';?>

        <!--Animações-->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
                AOS.init();
        </script>
    </body>
</html>