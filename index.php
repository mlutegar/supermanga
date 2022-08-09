<?php include('config.php');?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <title>Página principal</title>
</head>
<body> <?php include("navbar.php")?>

    <div class="banner"></div>

    <div id="maisacessados">
        <style>
            .container1{
                list-style: none;
                display: flex;
                justify-content: space-around;
            }
        </style>
        <div class="container1"></div>
            <div class="box-maisacessados">
                <a class="maisacessados" href="#">Mais Acessados</a>
            </div>
        <style>
            ul.imagens{
                list-style: none;
                display: flex;
                justify-content: space-around;
            }
        </style>
        <ul class="imagens">
            <li>
                <img src="img/img1.png" alt="" width="150" height="250">
            </li>
            <li>
                <img src="img/img2.jpg" alt="" width="150" height="250">
            </li>
            <li>
                <img src="img/img3.jpg" alt="" width="150" height="250">
            </li>
            <li>
                <img src="img/img4.jpg" alt="" width="150" height="250">
            </li>
            <li>
                <img src="img/img5.jpg" alt="" width="150" height="250">
            </li>
            <li>
                <img src="img/img6.png" alt="" width="150" height="250">
            </li>
            <li>
                <img src="img/img7.jpg" alt="" width="150" height="250">
            </li>
        </ul>
            <style>
                ul.titulos{
                    list-style: none;
                    display: flex;
                    justify-content: space-around;
                }
            </style>
            <div class="box-titulos">   
                    <ul class="titulos">
                        <li>
                            <a class="img1" href="#">Boku no Hero Academia</a>
                        </li>
                        <li>
                            <a class="img2" href="#">The Beginning After The End</a>
                        </li>
                        <li>
                            <a class="img3" href="#">Jujutsu Kaisen</a>
                        </li>
                        <li>
                            <a class="img4"  href="#">Shuumatsu no Walküre</a>
                        </li>
                        <li>
                            <a class="img5"  href="#">Tokyo Revengers</a>
                        </li>
                        <li>
                            <a class="img6"  href="#">Chainsaw Man</a>
                        </li>
                        <li>
                            <a class="img7"  href="#">Tales Of Gods And Demons</a>
                        </li>
                    </ul>
        </div>
    </div>

    <div id="lancamentos">
        <div class="container">
            <div class="box"></div>
                <div class="box-lancamentos">
                    <div class="lancamentos">
                        <p>Lançamentos</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="conteudo">
            <div class="imagem">
                <img src="img/lançamento1.jpg" width="200" height="280">
            </div>
            <div class="texto">
                <a class="hover1"href="#"><strong>Minecraft - Anime Edition (Doujinshi)</strong></a>
            </div>
        </div>
        <div class="conteudo">
            <div class="imagem">
                <img src="img/lançamento2.jpg" width="200" height="280">
            </div>
            <div class="texto">
                <a class="hover2"href="#"><strong>Try Crying Prettier</strong></a>
            </div>
        </div>
        <div class="conteudo2">
            <div class="imagem2">
                <img src="img/lancamento3.jpg" width="200" height="280">
            </div>
            <div class="texto2">
                <a class="hover3"href="#"><br><strong>I Became the Tyrant's Translator</strong></a>
            </div>
        </div>
        <div class="conteudo3">
            <div class="imagem3">
                <img src="img/lançamento4.jpg" width="200" height="280">
            </div>
            <div class="texto3">
                <a class="hover4" href="#"><br><strong>In the Name of Your Death</strong></a>
            </div>
        </div>
    </div>
      
<?php include('footer.php')?></body>
</html>
