<!DOCTYPE html>
<html lang="pt-BR">
   <head>
      <title>Adoções</title>
      <?php $pag='adocoes'; include 'assets/include/head.php';?>
   </head>
   <body>
      <div class="wrapper" id="main">
         <!--Menu de Navegação-->
         <?php include 'assets/include/menu.php';?>
         <!--Título: Sobre-->
         <div class="titulo">
            <div class="tituloTexto" data-aos="fade-down" data-aos-duration="1000">
               <h1>Adoções</h1>
            </div>
         </div>

         <div class="container">
            <div class="paragrafo center" data-aos="fade-up" data-aos-duration="1000">
              <p><b>GABRIEL</b></p>

              <div class="containerAdocao">

                  <div class="containerAdocaoflex-item-left"> 
                      <div class="bordaQuadradaMaior center">
                        <img src="assets/imagens/adocaoGabriel.jpg">
                      </div>
                  </div>

                  <div class="containerAdocaoflex-item-right"> 
                    <p>Oi tios e tias, tudo bem?</p>

                    <p>Uma protetora do Lugar Seguro me resgatou das ruas quando eu estava muito machucado, sangrando e sofrendo. Me levaram na tia de jaleco branco, que cuidou de mim, deu remédio e agora já estou bem. Mas me disseram que estou num Lar Temporário e que eu mereço um lar definitivo com muito amor e carinho.</p> 

                    <p>Sou muito carinhoso, manso, educado (faço as necessidades no lugar certo) e adoro crianças. Tenho porte médio e não vou crescer mais.</p>

                    <p>Me ajudem a não voltar para as ruas?</p>

                    <p>Lambeijos.</p>

                    <div>
                     <form action="formulario.php" method="POST">
                      <input type="hidden" name="especie" value="1"/>
                      <input type="hidden" name="nomePet" value="Gabriel" />
                      <input type="submit" value="ADOTAR" class="botaoPreto botaoAdotar"/>
                     </form>
                    </div>
                  </div>
               </div>
               <br>
            </div>
         </div>
         <br>
         
         <div class="container">
            <div class="paragrafo center" data-aos="fade-up" data-aos-duration="1000">
              <p><b>TITI</b></p>

              <div class="containerAdocao">

                  <div class="containerAdocaoflex-item-left"> 
                      <div class="bordaQuadradaMaior center">
                        <img src="assets/imagens/adocaoTiti.jpg">
                      </div>
                  </div>

                  <div class="containerAdocaoflex-item-right"> 
                    <p>Oi tios e tias, tudo bem?</p>
                    
                    <p>Essa pretinha na foto sou eu, a Titi. Tenho aproximadamente 4 aninhos, sou castrada e uma gatinha que se acostumou a morar nas ruas.</p>
                    
                    <p>Mas a tia da Lugar Seguro me disse que a expectativa de vida de bichinhos na rua reduz drasticamente e está procurando uma pessoa com casa ou apartamento telados para cuidar de mim.</p> 
                    
                    <p>Dizem por aí que todo mundo merece ter um pretinho básico e eu tenho certeza que se referem a gatinhos.</p> 
                    
                    <p>Deixa eu ser sua pretinha?</p>

                    <div>
                     <form action="formulario.php" method="POST">
                      <input type="hidden" name="especie" value="2"/>
                      <input type="hidden" name="nomePet" value="Titi" />
                      <input type="submit" value="ADOTAR" class="botaoPreto botaoAdotar"/>
                     </form>
                    </div>
                  </div>
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