 <div class="nav">
    <div class="logo">
        <pre><h4>L U G A R   S E G U R O </h4></pre>
    </div>
    <div class="links">      
        <span class="hamburguer" onclick="openNav()">&#9776;</span>
    </div>

    <div id="mySidenav" class="sidenav">
        <!-- Botão X --><a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a class="<?php if($pag=='inicio'){echo 'mainlink';}?>" href="index.php">Início</a>
        <a class="<?php if($pag=='historias'){echo 'mainlink';}?>" href="historias.php">Histórias</a>
        <a class="<?php if($pag=='doacoes'){echo 'mainlink';}?>" href="doacoes.php">Doações</a>
        <a class="<?php if($pag=='sobre'){echo 'mainlink';}?>" href="sobre.php">Sobre</a>
        <a class="<?php if($pag=='resgates'){echo 'mainlink';}?>" href="resgates.php">Resgates</a>
        <a class="<?php if($pag=='acoes'){echo 'mainlink';}?>" href="acoes.php">Ações</a>
        <a class="<?php if($pag=='adocoes'){echo 'mainlink';}?>" href="adocoes.php">Adoções</a>
        <a class="<?php if($pag=='loja'){echo 'mainlink';}?>" href="loja.php">Loja</a>
    </div>
</div>