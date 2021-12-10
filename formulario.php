<!DOCTYPE html>
<html lang="pt-BR">
   <head>
      <title>Formulário de Adoção</title>
      <?php $pag='adocoes'; include 'assets/include/head.php';?>
        <style>

    .modal {
      display: none; 
      position: fixed; 
      z-index: 1; 
      padding-top: 100px; 
      left: 0;
      top: 0;
      width: 100%; 
      height: 100%; 
      overflow: auto; 
      background-color: rgb(0,0,0); 
      background-color: rgba(0,0,0,0.4); 
    }

    .modal-content {
      position: relative;
      background-color: #fefefe;
      margin: auto;
      padding: 0;
      border: 1px solid #888;
      width: 80%;
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
      -webkit-animation-name: animatetop;
      -webkit-animation-duration: 0.4s;
      animation-name: animatetop;
      animation-duration: 0.4s;
    }

    @-webkit-keyframes animatetop {
      from {top:-300px; opacity:0} 
      to {top:0; opacity:1}
    }

    @keyframes animatetop {
      from {top:-300px; opacity:0}
      to {top:0; opacity:1}
    }

    .close {
      color: white;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: #000;
      text-decoration: none;
      cursor: pointer;
    }

    .modal-header {
      padding: 2px 16px;
      color: white;
      background: linear-gradient(to right, #FFB496 0%, #F6ABC2 50%, #98D5EA 100%);
    }

    .modal-body {padding: 2px 16px;}

    .modal-footer {
      padding: 2px 16px;
      color: white;
      background: linear-gradient(to right, #FFB496 0%, #F6ABC2 50%, #98D5EA 100%);
    }
    
    @media only screen and (max-width: 600px){
        .modal-header {
            font-size: 10px;
            padding: 15px;
            padding-top: 50px;
        }
    }
    
  </style>
   </head>
   <body>

      <div class="wrapper">
   <!--Menu de Navegação-->
   <?php include 'assets/include/menu.php';?>
   <!--Título: Sobre-->
   <div class="titulo">
      <div class="tituloTexto" data-aos="fade-down" data-aos-duration="1000">
         <h1>Formulário de Adoção</h1>
      </div>
   </div>
   <div class="containerForm flex-container">

    <?php
    if (isset($_POST['especie'])) {
        $especie = $_POST['especie'];
        
        if ($especie == 1) {
            include 'formulariocachorro.php';
        }
        
        if ($especie == 2) {
            include 'formulariogato.php';
        }
    }
    
    else {
        include 'formulariovazio.php';
    }
    ?>

<div id="myModal" class="modal">
               <!-- Modal content -->
               <div class="modal-content">
                  <div class="modal-header">
                     <span class="close">&times;</span>
                     <h2>LEIA A POLÍTICA DE PRIVACIDADE</h2>
                  </div>
                  <div class="modal-body">
                     <p>A Lugar Seguro respeita seu direito à privacidade. Quando você nos informa seus dados pessoais, assumimos o compromisso de proteger os dados e somente utilizá-los para os fins descritos abaixo:</p>
                     <h2>1. COLETA DE INFORMAÇÃO</h2>
                     <p>A Lugar Seguro coleta informações pessoais e estatísticas relativas ao uso do site. As informações são recolhidas por meio do rastreamento do fluxo de cliques e do uso de arquivos automáticos de log quando você navega no nosso site.</p>
                     <p>Suas informações pessoais são coletadas por meio do preenchimento de formulários, rastreamento de cliques e relatórios de acesso. Elas incluem o endereço de IP do seu computador, o tipo de navegador e o sistema operacional que você utiliza, o tempo da sua visita, as páginas visualizadas e as consultas de pesquisa no nosso site.</p>
                     <p>Toda informação é obtida voluntariamente por meio de formulários html e é registrada no nosso sistema. Os dados coletados incluem nome, endereço postal, e-mail, CPF e dados bancários, se você nos apoia financeiramente.</p>
                     <p>Nosso site utiliza cookies. Um cookie é um pequeno arquivo de texto que o servidor web envia para o disco rígido para agir como um identificador. Os cookies nos permitem rastrear padrões de uso e oferecem conteúdo customizado para os visitantes do site. Os cookies possuem data de validade e reúnem informações que identificam o usuário.</p>
                     <h2>2. USO DA INFORMAÇÃO</h2>
                     <p>Os dados coletados pela Lugar Seguro serão usados com o objetivo de informar sobre nossos eventos, campanhas e condições de saúde e bem estar dos gatos abrigados, bem como responder dúvidas. A Lugar Seguro se compromete a não vender ou compartilhar suas informações pessoais para terceiros.</p>
                     <h2>3. ARMAZENAMENTO DE DADOS</h2>
                     <p>Seus dados serão mantidos pela Lugar Seguro enquanto você tiver uma relação ativa com a gente. Se você deixar de ter uma relação ativa conosco ou pedir para não receber mais contato, podemos reter algumas informações básicas, a fim de evitar o envio de materiais indesejados no futuro e garantir que não existam informações duplicadas. No caso de ter concluído uma adoção, manteremos os dados como maneira de entrar em contato caso haja necessidade de falarmos sobre o animal em questão.  Você pode nos contactar para corrigir imprecisões nos dados que temos sobre você e optar por não receber mais informações e mensagens da Lugar Seguro entrando em contato através do e-mail contato@lugarsegurong.org.</p>
                     <h2>4. SEGURANÇA</h2>
                     <p>A Lugar Seguro se compromete em proteger seus dados por meio de servidores seguros, SSL encriptados e armazenamento das informações. Qualquer informação pessoal transferida entre locais será criptografado e protegida por senha.</p>
                  </div>
                  <div class="modal-footer">
                     <h3 class="close">.</h3>
                     <br><br><br><br>
                  </div>
               </div>
            </div>
         </div>
      </form>
   </div>
   <br><br>
   <script>
      var modal = document.getElementById("myModal");
      
      var btn = document.getElementById("myBtn");
      
      var span = document.getElementsByClassName("close")[0];
      
      btn.onclick = function() {
        modal.style.display = "block";
      }
      
      span.onclick = function() {
        modal.style.display = "none";
      }
      
      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      }
   </script>
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