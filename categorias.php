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
<body><?php include("navbar.php")?>

    <div class="banner"></div>

    <div style="padding: 75px; margin: auto; width: 80%; color: white;">
        <h3>Animes</h3>
            <ul>
                <li><a href="anime.php">Naruto</a></li>
                <li><a href="anime.php">One Piece</a></li>
            </ul>
        <h3>Tipo de anime</h3>
            <ul>
                <li><a href="anime_type">Seinen</a></li>
                <li><a href="anime_type">Esporte</a></li>
                <li><a href="anime_type">Sounen</a></li>
            </ul>
    </div>

<?php include('footer.php')?></body>
</html>
