<!DOCTYPE html>
<html lang="pt-BR">

    <head>
        <title>Loja</title>
        <?php $pag='loja'; include 'assets/include/head.php';?>
    </head>

    <body>
        <div class="wrapper" id="main">
            <!--Menu de Navegação-->
            <?php include 'assets/include/menu.php';?>

            <!--Título: Loja-->
            <div class="titulo">
                <div class="tituloTexto" data-aos="fade-down" data-aos-duration="1000">
                    <h1>Loja</h1>
                </div>
            </div>

            <!--Loja-->
            <div class="container loja-container" data-aos="fade-up" data-aos-duration="1000">
                <div class="loja-item-esqueda">
                    <img src="assets/imagens/patrocinador01.png">
                </div>

                <div
                 class="loja-item-esqueda" data-aos="fade-up" data-aos-duration="1000">
                    <p> LINHA DE MÓVEIS PARA GATOS CRIADA EM PARCERIA COM A STUDIO DESIGN SOLUÇÕES </p>
                </div>      
            </div>
            <br/>

            <div class="frete-banner" data-aos="fade-up" data-aos-duration="1000">
                <div>
                    <p> FRETE GRÁTIS PARA SÃO PAULO </p>
                </div>
            </div>    

            <div class="produto-catalogo">
                <div class="produto-linha">
                 <div class="servicos-coluna-um">
                  <table>
                    <tbody>
                    <tr>
                    <td><img src="assets/imagens/produto-01-gatolette-lateral.jpg"></td>
                    </tr>
                    <tr>
                    <td><p>GATOLETTE COM HALL</p></td>
                    </tr>
                    <tr>
                    <td><p>a partir de R$: 899,00</p></td>
                    </tr>
                    <tr>
                    <td><button class="loja-botao"><a href="produto.php">VISUALIZAR</a></button> </td>
                    </tr>
                    </tbody>
                  </table>
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