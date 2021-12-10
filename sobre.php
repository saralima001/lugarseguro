<!DOCTYPE html>
<html lang="pt-BR">

    <head>
        <title>Sobre Nós</title>
        <?php $pag='sobre'; include 'assets/include/head.php';?>
    </head>

    <body>
        <div class="wrapper" id="main">
            <!--Menu de Navegação-->
            <?php include 'assets/include/menu.php';?>

            <!--Título: Sobre-->
            <div class="titulo">
                <div class="tituloTexto" data-aos="fade-down" data-aos-duration="1000">
                    <h1>Sobre Nós</h1>
                </div>
            </div>

            <!--Sobre-->
            <div class="container">
                <div class="paragrafo" data-aos="fade-up" data-aos-duration="1000">
                    <p>No Brasil, estima-se que existam mais de 139 milhões de animais de estimação
                    abrigados em um lar. No entanto, há cerca de 30 milhões de cães e gatos
                    abandonados. Isso quer dizer que, para cada 7 brasileiros, um bichinho está na rua.</p>
                    <p>A pandemia da COVID-19 veio para agravar esse quadro. Ainda não existem números
                    oficiais, mas instituições que trabalham com resgate de animais tem registros que
                    apontam para um aumento de até seis vezes no número de abandonos.</p>
                    <p>Para tentar amenizar esse quadro, existem cerca de 370 organizações e instituições
                    não governamentais que trabalham com a conscientização da população, com o
                    resgate, assistência e amparo a esses mais de 30 milhões de bichinhos.</p>
                    <p>Para além das estruturas de ONGs, existe o trabalho invisível de muitos protetores
                    animais que tem uma atuação fundamental. Eles tecem uma teia invisível de ajuda a
                    bichinhos que precisam de alimento, castração, cuidados veterinários e até mesmo de
                    um lar e o fazem com o dinheiro do próprio bolso. Em sua grande maioria, os
                    protetores não são amparados por instituições e sequer sabemos quantos desses seres
                    de luz atuam no Brasil. Quem não conhece aquela senhora que, do próprio bolso,
                    alimenta um monte de animais de rua? Ou aquele homem que, ao saber que tem um
                    bicho abandonado, faz uma vaquinha entre os amigos, para levantar um dinheiro para
                    resgatar, castrar e cuidar desse animal?</p>
                    <p>São pessoas assim que o Lugar Seguro quer ajudar, porque são fundamentais para que
                    nossos mais de 30 milhões de pets abandonados tenham um destino melhor que a
                    fome, a doença e o abandono.</p>
                    <p>Mas a invisibilidade dessas pessoas dificulta sua atuação e soma-se a isso a falta de
                    recursos, de estrutura e os altos custos referentes a cuidados veterinários.</p>
                    <p>A proposta do Lugar Seguro é garantir ajuda a essas pessoas, por meio de uma
                    contribuição mensal de dois salários mínimos, além de buscar a visibilidade de suas
                    histórias, para garantir que o número de protetores animais possa se multiplicar até
                    que não existam mais animais em situação de rua e de abandono no Brasil.</p>
                    <p>Conheça um pouco mais sobre os personagens que deram vida ao Lugar Seguro.</p>

                    <div class="botaoHistorias center borda">
                        <a href="historias.php" class="botao">CONHEÇA NOSSAS HISTÓRIAS</a>
                    </div>
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