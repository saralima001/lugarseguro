<?php if (isset($_POST) && !empty($_POST)) {
   $error = 1;
   $message = '';
   
   /* Dados */
   if ($_POST['nome'] = '') {
       $error = 0;
   }
   
   $mail = $_POST['email'];
   if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
   }
   
   if ($_POST['telefone'] == ' ') {
       $error = 0;
   }
   
   if ($_POST['endereco'] == ' ') {
       $error = 0;
   }
   
   if ($_POST['complemento'] == ' ') {
       $error = 0;
   }
   
   if ($_POST['bairro'] == ' ') {
       $error = 0;
   }
   
   if ($_POST['cidade'] == ' ') {
       $error = 0;
   }
   
   if ($_POST['idade'] == ' ') {
       $error = 0;
   }
   
   if ($_POST['p1'] == ' ') {
       $error = 0;
   }
   
   if ($_POST['p2'] == ' ') {
       $error = 0;
   }
   
   if ($_POST['p3'] == ' ') {
       $error = 0;
   }
   
   if ($_POST['p4'] == ' ') {
       $error = 0;
   }
   
   if ($_POST['p5'] == ' ') {
       $error = 0;
   }
   
   if ($_POST['p6'] == ' ') {
       $error = 0;
   }
   
   if ($_POST['p7'] == ' ') {
       $error = 0;
   }
   
   if ($_POST['p8'] == ' ') {
       $error = 0;
   }
   
   if ($_POST['p9'] == ' ') {
       $error = 0;
   }
   
   if ($_POST['p10'] == ' ') {
       $error = 0;
   }
   
   if ($_POST['p11'] == ' ') {
       $error = 0;
   }
   
   if ($_POST['p12'] == ' ') {
       $error = 0;
   }
   
   if ($_POST['p13'] == ' ') {
       $error = 0;
   }
   
   if ($_POST['p14'] == ' ') {
       $error = 0;
   }
   
   if ($_POST['p15'] == ' ') {
       $error = 0;
   }
   
   if ($_POST['p16'] == ' ') {
       $error = 0;
   }
   
   if ($_POST['p17'] == ' ') {
       $error = 0;
   }
   
   if ($_POST['p18'] == ' ') {
       $error = 0;
   }
   
   /* Fim (Dados) */
   
   if ($error == 1) {
       
          /* Dados */
          $nomePet = $_POST['nomePet'];
          $nome = $_POST['_nome'];
          $email = $_POST['email'];
          $telefone = $_POST['telefone'];
          $endereco = $_POST['endereco'];
          $complemento = $_POST['complemento'];
          $bairro = $_POST['bairro'];
          $cidade = $_POST['cidade'];
          $idade = $_POST['idade'];
          $p1 = $_POST['p1'];
          $p2 = $_POST['p2'];
          $p3 = $_POST['p3'];
          $p4 = $_POST['p4'];
          $p5 = $_POST['p5'];
          $p6 = $_POST['p6'];
          $p7 = $_POST['p7'];
          $p8 = $_POST['p8'];
          $p9 = $_POST['p9'];
          $p10 = $_POST['p10'];
          $p11 = $_POST['p11'];
          $p12 = $_POST['p12'];
          $p13 = $_POST['p13'];
          $p14 = $_POST['p14'];
          $p15 = $_POST['p15'];
          $p16 = $_POST['p16'];
          $p17 = $_POST['p17'];
          $p18 = $_POST['p18'];
          /* Fim (Dados) */
       
          /* E-mail */
          $to = "contato@lugarsegurong.org";
          $subject = "Formul??rio de Ado????o";
          
          $message = "
          <html>
             <head>
                <title>Formul??rio de Ado????o</title>
                <style>
                   @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
                   * {
                      text-decoration: none;
                      font-family: 'Montserrat', sans-serif;
                      margin: 0;
                      padding: 0;
                   }
                   .container {
                      display: flex;
                      padding: 25px 50px;
                      border-radius: 30px;
                      margin: 15px 40px;
                      box-shadow: 0 19px 20px rgba(0,0,0,0.10);
                      background-image: linear-gradient(to right,  #FFB496 0%, #F6ABC2 25%, #98D5EA 50%, #F8F493 100%);
                   }
                   .centro {
                      display: flex;
                      align-content: center;
                      align-items: center;
                      justify-content: center;
                   }
                   table {
                      display: flex;
                      margin: 0 auto;
                   }
                   td, th {
                      text-align: left;
                      width:50%;
                      padding: 9px;
                   }
                </style>
             </head>
             <body>
                <div>
          
                   <div class='cabecalho'>
                      <div class='centro'>
                         <img src='https://lugarsegurong.org/assets/imagens/logo.png' width='150px' height='150px'>
                      </div>
          
                      <div class='centro'>
                         <h2>Formul??rio de Ado????o</h2>
                      </div>
                   </div>
          
                   <table class='container'>
                      <tr>
                         <td>EU QUERO ADOTAR</td>
                         <td>$nomePet</td>
                      </tr>
                   
                      <tr>
                         <td>NOME COMPLETO</td>
                         <td>$nome</td>
                      </tr>
          
                      <tr>
                         <td>E-MAIL</td>
                         <td>$email</td>
                      </tr>
          
                      <tr>
                         <td>TELEFONE</td>
                         <td>$telefone</td>
                      </tr>
          
                      <tr>
                         <td>ENDERE??O</td>
                         <td>$endereco</td>
                      </tr>
          
                      <tr>
                         <td>COMPLEMENTO</td>
                         <td>$complemento</td>
                      </tr>
          
                      <tr>
                         <td>BAIRRO</td>
                         <td>$bairro</td>
                      </tr>
          
                      <tr>
                         <td>CIDADE</td>
                         <td>$cidade</td>
                      </tr>
          
                      <tr>
                         <td>IDADE</td>
                         <td>$idade</td>
                      </tr>
          
                      <tr>
                         <td>PORQUE QUER ADOTAR UM PET?</td>
                         <td>$p1</td>
                      </tr>
          
                      <tr>
                         <td>COMO CONHECEU A LUGAR SEGURO?</td>
                         <td>$p2</td>
                      </tr>
          
                      <tr>
                         <td>VOC?? MORA EM CASA OU APARTAMENTO?</td>
                         <td>$p3</td>
                      </tr>
                      
                      <tr>
                         <td>EXISTEM ROTAS DE FUGA?</td>
                         <td>$p4</td>
                      </tr>
          
                      <tr>
                         <td>QUAIS MOTIVOS TE LEVARIAM A N??O PODER MAIS CUIDAR DELE? O QUE FARIA COM O PET?</td>
                         <td>$p5</td>
                      </tr>
          
                      <tr>
                         <td>TEM OUTROS ANIMAIS NA CASA? QUAIS?</td>
                         <td>$p6</td>
                      </tr>
          
                      <tr>
                         <td>J?? TEVE PETS?</td>
                         <td>$p7</td>
                      </tr>
          
                      <tr>
                         <td>J?? TEVE ALGUM ANIMAL QUE FALECEU? POR QUE MOTIVO?</td>
                         <td>$p8</td>
                      </tr>
          
                      <tr>
                         <td>ALGUNS M??DICOS ORIENTAM QUE EM CASO DE GRAVIDEZ A M??E N??O DEVE PERMANECER COM OS PET NA CASA. O QUE PENSA ?? RESPEITO?</td>
                         <td>$p9</td>
                      </tr>
          
                      <tr>
                         <td>TEM ALGU??M EM CASA COM PROBLEMAS RESPIRAT??RIOS E AL??RGICOS?</td>
                         <td>$p10</td>
                      </tr>
          
                      <tr>
                         <td>E SE ALGUM MEMBRO DA FAM??LIA APRESENTAR ALGUM DESSES PROBLEMAS AP??S A CHEGADA DO PET?</td>
                         <td>$p11</td>
                      </tr>
          
                      <tr>
                         <td>O QUE FAR?? SE O PET FICAR DOENTE?</td>
                         <td>$p12</td>
                      </tr>
          
                      <tr>
                         <td>VOC?? SABE QUE AO ADOTAR UM PET DE ABRIGO, ELE PODE TER TIDO CONTATO COM ALGUNS V??RUS COMUNS EM ABRIGOS DE ANIMAIS, COMO RINOTRAQUE??TE E GIARDIA/ISOSPORA E SE RESPONSABILIZA PELOS CUIDADOS P??S-ADO????O, SE NECESS??RIO?</td>
                         <td>$p13</td>
                      </tr>
          
                      <tr>
                         <td>VOC?? TEM CONDI????ES DE GASTAR COM ALIMENTA????O DE BOA QUALIDADE, VACINAS, VERM??FUGOS E ATENDIMENTO VETERIN??RIO?</td>
                         <td>$p14</td>
                      </tr>
          
                      <tr>
                         <td>VOC?? J?? ADOTOU ALGUM ANIMAL E DEPOIS - POR FOR??AS DAS CIRCUNST??NCIAS PRECISOU DO??-LO OU ENCAMINH??-LO PARA UM ABRIGO / CCZ / ONG OU O DEIXOU NA RUA?</td>
                         <td>$p15</td>
                      </tr>
          
                      <tr>
                         <td>CASO PRECISE MUDAR DE RESID??NCIA, CIDADE OU PA??S, O QUE FAR?? COM O PET?</td>
                         <td>$p16</td>
                      </tr>
                      
                      <tr>
                         <td>PETS PODEM VIVER 15 ANOS OU MAIS, VOC?? EST?? PREPARADO PARA ESTE COMPROMISSO?</td>
                         <td>$p17</td>
                      </tr>
          
                      <tr>
                         <td>OBSERVA????ES ADICIONAIS</td>
                         <td>$p18</td>
                      </tr>
                     </table>
                  </div>
              </body>
          </html>
          ";
          
          $headers = "MIME-Version: 1.0" . "\r\n";
          $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
          
          $headers .= 'From: <srv535.main-hosting.eu>' . "\r\n"; 
          $headers .= 'Cc: contato@lugarsegurong.org' . "\r\n";
          
          if (mail($to,$subject,$message,$headers)) {
           echo '<meta http-equiv="refresh" content="0;url=enviado.php">';
           die();
       }
       /* Fim (E-mail) */
       
   }
   } ?>