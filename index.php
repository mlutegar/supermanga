<?php 
    include('config.php');
    require_once('repository/MangaRepository.php');
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/index.css">
    <title>Página principal</title>
</head>
<body> <?php include("navbar.php")?>

    <div class="banner"></div>

    <div class="vitrine-acesso">

        <div class="title-vitrine">
            <div class="title">
                <p>Mais acessados</p>
            </div>
        </div>

        <div class="sub-vitrine" id="maisacessados">
            <div class="mangas-vitrine">
                <?php foreach(fnListMangas() as $manga): ?>
                    <div class="caixa-manga5">
                        <div class="capa-manga">
                            <img class="cropped" src="<?=$manga->capa?>">
                        </div>
                        <div class="item-manga"><?= $manga->titulo?></div>
                        <div class="item-manga">
                            <a href="<?= $manga->conteudo?>">BAIXE AQUI</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div class="vitrine-lancamento">
        <div class="title-vitrine">
            <div class="title">
                <p>Lançamentos</p>
            </div>
        </div>
        
        <div class="sub-vitrine" id="maisacessados">
            <br><br><br><br><br>
            <?php for ($i=0; $i < 2; $i++) { ?>
                <div class="mangas-vitrine">
                    <?php  $qnt = 0; foreach(fnListMangas() as $manga): ?>
                        <div class="caixa-manga4">
                            <div class="capa-manga">
                                <img class="cropped" src="<?=$manga->capa?>">
                            </div>
                            <div class="item-manga"><?= $manga->titulo?></div>
                            <div class="item-manga"><?= $manga->titulo?></div>
                        </div>
                    <?php 
                        $qnt++; 
                        if ($qnt == 4) {
                            break;
                        }
                        endforeach; 
                    ?>
                </div>
            <?php } ?>
        </div>  
    </div>

<?php include('footer.php')?></body>
</html>
