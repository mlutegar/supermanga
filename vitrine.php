<?php 
    include('config.php');
    require_once('repository/MangaRepository.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width ,initial-scale=1">
    <script src="https://kit.fontawesome.com/7c9e86ad48.js" crossorigin="anonymous"></script>  
    <title>Mangás</title>
    <link rel="stylesheet" href="css/vitrine.css">
</head>

<body> <?php include("navbar.php")?>

    <div id="search-bar">
        <form method="post" action="">
            <input id="search-text" type="text" placeholder="Procure pelo nome do mangá">
            <button id="search-btn"><img src="img/lupa.png" width="20px" height="20px" alt=""></button>
        </form>
    </div>

    <?php foreach(fnListMangas() as $manga): ?>
        <div id="mangas">
            
            <div id="card-manga">
                <div id="manga-cover">
                    <img class="cropped-vitrine" src="<?= $manga->capa?>" alt="">
                </div>
                <div id="manga-information-section">
                    <div id="manga-information">
                        <h1><?= $manga->titulo?></h1>
                        <div id="additional-info"><p id="nota">Nota</p><p id="genero"><?= $manga->categoria?></p></div>
                    </div>
                    <p id="sinopse">
                        <?= $manga->sumario?>
                    </p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    
<?php include('footer.php')?></body>

</html>