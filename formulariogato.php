      <label>
         <p>Obrigada pelo interesse em adotar um (ou vários rsrs) de nossos pets!</p>
         <p>Ficamos muito felizes quando eles conseguem encontrar uma família 😏.</p>
         <p>Com certeza você encontrará um para lhe fazer companhia por muitos anos!</p>
         <p>Nossos pets são entregues castrados sem qualquer custo para o adotante, exigimos apenas que cuidem deles tão bem (ou melhor) que a gente, rsrsrsrs ❤️.</p>
         <p>Temos alguns critérios para adoção na Lugar Seguro. Priorizamos sempre a guarda responsável e a segurança de nosso resgatinho doando apenas para apartamento totalmente telado ou casa segura, na qual o pet não terá nenhum
            acesso à rua e também gostaríamos de te conhecer melhor antes, tudo bem?
         </p>
         <p>Por favor, nos envie o formulário a seguir preenchido:</p>
         <br>
      </label>
      
         <form method="post" action="formulariogatoenviar.php">  
         <div class="flex-container">
            <?php
               if (isset($_POST['nomePet'])) {
                        $nomePet = $_POST['nomePet'];
                        
                        if ($nomePet == 'Titi') {
                            echo '<input type="hidden" name="nomePet" id="nomePet" value="Titi"/>';
                            echo '<div class="flex-item-left-right"> 
                              <div class="bordaQuadradaMaior center">
                                 <img src="assets/imagens/adocaoTiti.jpg">
                               </div>

                            </div>';
                        }
                    }
                    
                    else {
                        echo 'Animal não identificado, tente novamente, por favor.';
                    }


               if (isset($_POST['nomePet'])){
                   $nomePet = $_POST['nomePet'];
                   echo '<div class="flex-item-left"> Eu quero adotar o(a):  </div>';
                   echo '<div class="flex-item-right"> ' . $_POST['nomePet'] . ' </div>';
               }
               ?>

            <br><br><br>
            <div class="flex-item-left"> <label for="nome-compelto">Nome Completo</label> </div>
            <div class="flex-item-right"> <input type="text" name="_nome" id="nome" required/> </div>

            <div class="flex-item-left"> <label for="e-mail">E-mail</label> </div>
            <div class="flex-item-right"> <input type="email" name="email" id="email" required/> </div>

            <div class="flex-item-left"> <label for="telefone">Telefone</label> </div>
            <div class="flex-item-right"> <input type="number" name="telefone" id="telefone" value="11" maxlength="11" required/> </div>

            <div class="flex-item-left"> <label for="endereco">Endereço</label> </div>
            <div class="flex-item-right"> <input type="text" name="endereco" id="endereco" required/> </div>

            <div class="flex-item-left"> <label for="complemento">Complemento</label> </div>
            <div class="flex-item-right"> <input type="text" name="complemento" id="complemento" required/> </div>

            <div class="flex-item-left"> <label for="bairro">Bairro</label> </div>
            <div class="flex-item-right"> <input type="text" name="bairro" id="bairro" required/> </div>

            <div class="flex-item-left"> <label for="cidade">Cidade</label> </div>
            <div class="flex-item-right"> <input type="text" name="cidade" id="cidade" required/> </div>

            <div class="flex-item-left"> <label for="idade">Idade</label> </div>
            <div class="flex-item-right"> <input type="number" name="idade" id="idade" min="18" max="99"required/> </div>

            <div class="flex-item-left"> <label for="p1">Porque quer adotar um pet?</label> </div>
            <div class="flex-item-right"> <textarea rows="2" name="p1" id="p1" required></textarea> </div>

            <div class="flex-item-left"> <label for="p2">Como conheceu a Lugar Seguro?</label> </div>
            <div class="flex-item-right"> <textarea rows="2" name="p2" id="p2" required></textarea> </div>

            <div class="flex-item-left"> <label for="p3">Você mora em casa ou apartamento?</label> </div>
            <div class="flex-item-right"> <textarea rows="2" name="p3" id="p3" required></textarea> </div>

            <div class="flex-item-left"> <label for="p4">A sua residência tem telas de proteção?</label> </div>
            <div class="flex-item-right"> <textarea rows="2" name="p4" id="p4" required></textarea> </div>
            
            <div class="flex-item-left"> <label for="p5">Existem rotas de fuga?</label> </div>
            <div class="flex-item-right"> <textarea rows="2" name="p5" id="p5" required></textarea> </div>

            <div class="flex-item-left"> <label for="p6">Tem outros animais na casa? Quais?</label> </div>
            <div class="flex-item-right"> <textarea rows="2" name="p6" id="p6" required></textarea> </div>

            <div class="flex-item-left"> <label for="p7">Já teve pet?</label> </div>
            <div class="flex-item-right"> <textarea rows="2" name="p7" id="p7" required></textarea> </div>

            <div class="flex-item-left"> <label for="p8">Já teve algum animal que faleceu? Por que motivo?</label> </div>
            <div class="flex-item-right"> <textarea rows="2" name="p8" id="p8" required></textarea> </div>

            <div class="flex-item-left"> <label for="p9">Alguns médicos orientam que em caso de gravidez a mãe não deve permanecer com os pets na casa. O que pensa à respeito?</label> </div>
            <div class="flex-item-right"> <textarea rows="2" name="p9" id="p9" required></textarea> </div>

            <div class="flex-item-left"> <label for="p10">Tem alguém em casa com problemas respiratórios e alérgicos?</label> </div>
            <div class="flex-item-right"> <textarea rows="2" name="p10" id="p10" required></textarea> </div>

            <div class="flex-item-left"> <label for="p11">E se algum membro da família apresentar algum desses problemas após a chegada do pet?</label> </div>
            <div class="flex-item-right"> <textarea rows="2" name="p11" id="p11" required></textarea> </div>

            <div class="flex-item-left"> <label for="p12">O que fará se o pet ficar doente?</label> </div>
            <div class="flex-item-right"> <textarea rows="2" name="p12" id="p12" required></textarea> </div>

            <div class="flex-item-left"> <label for="p13">Você sabe que ao adotar um pet de abrigo, ele pode ter tido contato com alguns vírus comuns em abrigos de animais, como rinotraqueíte e giardia/isospora e se responsabiliza pelos cuidados pós-adoção, se necessário?</label> </div>
            <div class="flex-item-right"> <textarea rows="2" name="p13" id="p13" required></textarea> </div>

            <div class="flex-item-left"> <label for="p14">Você tem condições de gastar com alimentação de boa qualidade, vacinas, vermífugos e atendimento veterinário?</label> </div>
            <div class="flex-item-right"> <textarea rows="2" name="p14" id="p14" required></textarea> </div>

            <div class="flex-item-left"> <label for="p15">Você já adotou algum animal e depois - por forças das circunstâncias precisou doá-lo ou encaminhá-lo para um abrigo / CCZ / ONG ou o deixou na rua?</label> </div>
            <div class="flex-item-right"> <textarea rows="2" name="p15" id="p15" required></textarea> </div>

            <div class="flex-item-left"> <label for="p16">Caso precise mudar de residência, cidade ou país, o que fará com o pet?</label> </div>
            <div class="flex-item-right"> <textarea rows="2" name="p16" id="p16" required></textarea> </div>
            
            <div class="flex-item-left"> <label for="p17">Quais motivos te levariam a não poder mais cuidar dele? O que faria com o pet?</label> </div>
            <div class="flex-item-right"> <textarea rows="2" name="p17" id="p17" required></textarea> </div>

            <div class="flex-item-left"> <label for="p18">Pets podem viver 15 anos ou mais, você está preparado para este compromisso?</label> </div>
            <div class="flex-item-right"> <textarea rows="2" name="p18" id="p18" required></textarea> </div>

            <div class="flex-item-left"> <label for="p19">Observações Adicionais</label> </div>
            <div class="flex-item-right"> <textarea rows="2" name="p19" id="p19"></textarea> </div>

            <div class="flex-item-left"> <button id="myBtn" type="button">LEIA A POLÍTICA DE PRIVACIDADE</button> </div>
            <div class="flex-item-right"> <button type="submit">Enviar</button> </div>
