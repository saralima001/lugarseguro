<!DOCTYPE html>
<html lang="pt-BR">
   <head>
      <title>Não Encontrado - Erro 404</title>
      <link rel="stylesheet" href="https://lugarsegurong.org/assets/css/estilo.css">
      <?php include 'assets/include/head.php';?>
   </head>
   <body>
      <div class="wrapper">
        <!--Menu de Navegação-->
         <?php include 'assets/include/menu.php';?>
         <br/>
         <!--Título: Sobre-->
         <div class="titulo">
            <div class="center tituloTexto" data-aos="fade-down" data-aos-duration="1000">
               <h1>Não Encontrado - Erro 404</h1>
            </div>
         </div>
         <div class="containerForm">
            <br/>
            Não foi possível encontrar a página que você tentou acessar. <br/>
            Por favor, retorne ao início. <br/><br/>
            <a href="index.php" class="botaoPreto">INÍCIO</a>
            <br/><br/>
         </div>
         <br/><br/>
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