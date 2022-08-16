<?php 
    include('config.php');
    require_once('repository/MangaRepository.php');

    $animesList = [];
    $CategoriaList = [];

    foreach(fnListMangas() as $manga):             
        array_push($animesList, $manga->anime);
        array_push($CategoriaList, $manga->categoria);
    endforeach;

    $animesList = array_unique($animesList);
    $CategoriaList = array_unique($CategoriaList);
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
<body><?php include("navbar.php")?>

    <div class="banner"></div>

    <div style="padding: 75px; margin: auto; width: 80%; color: white;">
        <h3>Animes</h3>
            <ul>
                <?php foreach($animesList as $manga): ?>
                    <li><a href="anime_detail.php?anime=<?=$manga?>"><?=$manga?></a></li>
                <?php endforeach;?>
            </ul>

        <br><br>

        <h3>Tipo de anime</h3>
            <ul>
                <?php foreach($CategoriaList as $manga): ?>
                    <li><a href="categoria_detail.php?categoria=<?=$manga?>"><?=$manga?></a></li>
                <?php endforeach;?>
            </ul>
    </div>

<?php include('footer.php')?></body>
</html>

