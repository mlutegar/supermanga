<?php 
    include('config.php');
    require_once('repository/MangaRepository.php');
    $notificacao = filter_input(INPUT_GET, 'notify', FILTER_SANITIZE_SPECIAL_CHARS);
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $manga = fnLocalizaMangaPorId($id);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mangaDetalhe.css">
    <title>Document</title>
</head>
<body><?php include('navbar.php'); ?>

    <div class="space">
        <div class="vitrine_linha">
            <div class="div2">
                <div style="margin-left: 35%;">
                    <img class="cropped-detail" src="<?= $manga->capa ?>">
                </div>
            </div>

            <div class="div2 detail_info" style="text-align: left;">
                <p><strong>Nome do Manga:</strong><?= $manga->titulo ?></p><br><hr><br>
                <p><strong>Anime:</strong> <?= $manga->anime ?></p><br><hr><br>
                <p><strong>Volume:</strong> <?= $manga->volume ?></p><br><hr><br>
                <p><strong>Categoria:</strong> <?= $manga->categoria ?></p><br><hr><br>
                <p><strong>Sumario:</strong>  <?= $manga->sumario ?></p><br><hr><br>

                <div class="btt">
            <a href="<?=$manga->conteudo?>">
            <button>
                BAIXE AQUI
            </button>
        </a>
        </div>
            </div>
            
        </div>


    </div>
    
</body><?php include("footer.php"); ?>
</html>