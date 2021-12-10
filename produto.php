<!DOCTYPE html>
<html lang="pt-BR">
   <head>
      <title>Loja</title>
      <?php $pag='produto'; include 'assets/include/head.php';?>
   </head>
   <body>
      <div class="wrapper" id="main">
         <!--Menu de Navegação-->
         <?php include 'assets/include/menu.php';?>
      </div>
      <div class="produto-container">
         <div class="produto-item-esquerda">
            <div class="prod-container">
               <div class="mySlides">
                  <div class="numbertext">.</div>
                  <img src="assets/imagens/produto-01-gatolette-chamada.jpg" class="ImgThumbnail" style="width:100%">
               </div>
               <div class="mySlides">
                  <div class="numbertext">.</div>
                  <img src="assets/imagens/produto-01-gatolette-lateral.jpg" class="ImgThumbnail" style="width:100%">
               </div>
               <div class="mySlides">
                  <div class="numbertext">.</div>
                  <img src="assets/imagens/produto-01-gatolette-interno.jpg" class="ImgThumbnail" style="width:100%">
               </div>

               <div class="row">
                  <div class="column">
                     <img class="demo cursor" src="assets/imagens/produto-01-gatolette-chamada.jpg" style="width:100%" onclick="currentSlide(1)">
                  </div>
                  <div class="column">
                     <img class="demo cursor" src="assets/imagens/produto-01-gatolette-lateral.jpg" style="width:100%" onclick="currentSlide(2)">
                  </div>
                  <div class="column">
                     <img class="demo cursor" src="assets/imagens/produto-01-gatolette-interno.jpg" style="width:100%" onclick="currentSlide(3)">
                  </div>
               </div>

               <div class="modal">
                    <div class="container-modal"> 
                        <div><span class="closeImage"> × </span></div>
                        <div><img class="modalImage" id="img01"/></div>                    
                    </div>
               </div>

            </div>
         </div>
         <div class="produto-item-direita">
            <h1>GATOLETTE COM HALL</h1>
            <h2>a partir de R$: 899,00</h2>
            <p>Pensando no conforto do bichano aliado à praticidade da limpeza, desenvolvemos o Gatolette com hall, um armário cheio de charme, que comporta a bandeja de areia (liteira) dentro. Não é o máximo? Seu gatinho pode fazer suas necessidades tranquilamente e a areia não se espalha pela casa... um verdadeiro Toilette para gatos.</p>
            <p>Desse jeito, dá até para adotar mais alguns, não é?</p>
            <p>O móvel é confeccionado com madeira de qualidade, e é dividido em duas partes: uma onde fica a caixa de areia e um hall onde seu bichano vai limpar as patinhas antes de sair. Por isso, o Gatolette conta com duas tocas, que ainda poderão divertir seus gatinhos, já que eles adoram passar por essas fendas e se esconder em caixas. Conta, ainda, com um gancho na parte interna da porta para pendurar a pá de limpeza.</p>
            <p>Isso tudo com o charme de um móvel que pode ser colocado em qualquer lugar de sua casa.</p>
                        
            <button class="loja-botao"><a href="https://github.com/saralima001">COMPRAR COM A STRIPE</a></button>
            <br>
            <button class="loja-botao"><a href="https://github.com/saralima001">COMPRAR COM A CARTX</a></button>
            <br>
            <button class="loja-botao"><a href="https://github.com/saralima001">COMPRAR NA OLX</a></button>
         </div>
      </div>

      <div class="produto-container-descricao">
        <div class="produto-item-tudo">
            <h2>DESCRIÇÃO</h2>
            <p><b>Produção e entrega:</b> 35 dias após confirmação de pagamento.</p>
            <p><b>Recomendação:</b> Não deixar em locais que recebem chuva diretamente.</p>
            <p><b>Material:</b> MDF</p>
            <p><b>Garantia:</b> 12 meses</p>
            <p>O produto <b>não vai montado</b> e acompanha <b>manual de instruções</b>.</p>
            <br>
            <h2>Medidas</h2>
            <p><b>Altura:</b> 40 cm</p>
            <p><b>Largura:</b> 90 cm</p>
            <p><b>Profundidade:</b> 41 cm</p> 
        </div>
      </div>

      <div class="produto-container-descricao">
        <div class="produto-item-esquerda-descricao">
            <img src="assets/imagens/produto-01-gatolette-tirinha.jpg">
        </div>
        <div class="produto-item-centro-descricao">
            <p>Aqui na Lugar Seguro, os bichanos continuam sendo venerados como deuses, mas até nós ficamos desanimados cada vez que a areia deles fica espalhada pela casa. É uma dificuldade real manter a casa limpa! Ainda que existam algumas liteiras fechadas, nem todo gato se adapta a elas.</p>
            <p>A venda de todos os Gatolettes irá ajudar os protetores da Lugar Seguro a salvarem mais gatinhos como a Fofinha e o Galego, que foram resgatados ontem(25/07/21), já fizeram exames de FIV e FELV (deu negativo! Ufa!) e foram castrados. Agora, eles esperam que você compre o Gatolette, para que possamos continuar cuidando deles e de outros gatinhos.</p>
        </div>
        <div class="produto-item-direita-descricao">
            <img src="assets/imagens/resgates-lugar.jpg">
        </div>
      </div>
      
      <div class="produto-container-descricao">
        <div class="produto-item-tudo">
            <h2>PRODUTOS RELACIONADOS</h2>
        </div>

        <div class="produto-item-esquerda-descricao">
            <div class="produto-catalogo-recomendados">
                <div class="produto-linha-recomendados">
                 <div class="servicos-coluna-um">
                  <table>
                    <tbody>
                    <tr>
                    <td><img src="assets/imagens/produto-01-gatolette-lateral.jpg"></td>
                    </tr>
                    <tr>
                    <td><p>GATOLETTE COM HALL II  </p></td>
                    </tr>
                    <tr>
                    <td><p>a partir de R$: 999,00</p></td>
                    </tr>
                    <tr>
                    <td><button class="loja-botao"><a href="produto.php">VISUALIZAR</a></button> </td>
                    </tr>
                    </tbody>
                  </table>
                 </div>
            </div>  
        </div>
        </div>
        <div class="produto-item-centro-descricao">
            <div class="produto-catalogo-recomendados">
                <div class="produto-linha-recomendados">
                 <div class="servicos-coluna-um">
                  <table>
                    <tbody>
                    <tr>
                    <td><img src="assets/imagens/produto-01-gatolette-lateral.jpg"></td>
                    </tr>
                    <tr>
                    <td><p>GATOLETTE COM HALL III</p></td>
                    </tr>
                    <tr>
                    <td><p>a partir de R$: 1999,00</p></td>
                    </tr>
                    <tr>
                    <td><button class="loja-botao"><a href="produto.php">VISUALIZAR</a></button> </td>
                    </tr>
                    </tbody>
                  </table>
                 </div>
            </div>  
        </div>
        </div>
        <div class="produto-item-direita-descricao">
            <div class="produto-catalogo-recomendados">
                <div class="produto-linha-recomendados">
                 <div class="servicos-coluna-um">
                  <table>
                    <tbody>
                    <tr>
                    <td><img src="assets/imagens/produto-01-gatolette-lateral.jpg"></td>
                    </tr>
                    <tr>
                    <td><p>GATOLETTE COM HALL IV</p></td>
                    </tr>
                    <tr>
                    <td><p>a partir de R$: 2000,00</p></td>
                    </tr>
                    <tr>
                    <td><button class="loja-botao"><a href="produto.php">VISUALIZAR</a></button> </td>
                    </tr>
                    </tbody>
                  </table>
                 </div>
            </div>  
        </div>
        </div>
      </div>

      <!--Rodapé-->
      <?php include 'assets/include/rodape.php';?>
      <!--Animações-->
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script>
         AOS.init();
      </script>
      <script>
        var modalEle = document.querySelector(".modal");
        var modalImage = document.querySelector(".modalImage");
        Array.from(document.querySelectorAll(".ImgThumbnail")).forEach(item => {
           item.addEventListener("click", event => {
              modalEle.style.display = "block";
              modalImage.src = event.target.src;
           });
        });
        document.querySelector(".closeImage").addEventListener("click", () => {
           modalEle.style.display = "none";
        });

         var slideIndex = 1;
         showSlides(slideIndex);
         
         function plusSlides(n) {
           showSlides(slideIndex += n);
         }
         
         function currentSlide(n) {
           showSlides(slideIndex = n);
         }
         
         function showSlides(n) {
           var i;
           var slides = document.getElementsByClassName("mySlides");
           var dots = document.getElementsByClassName("demo");
           if (n > slides.length) {slideIndex = 1}
           if (n < 1) {slideIndex = slides.length}
           for (i = 0; i < slides.length; i++) {
               slides[i].style.display = "none";
           }
           for (i = 0; i < dots.length; i++) {
               dots[i].className = dots[i].className.replace(" active", "");
           }
           slides[slideIndex-1].style.display = "block";
           dots[slideIndex-1].className += " active";
         }
      </script>
   </body>
</html>