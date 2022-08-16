<?php 

include('config.php');
require_once('repository/LoginRepository.php');

$id = $_SESSION['login']->id;
$user = fnLocalizaUserPorId($id);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width ,initial-scale=1">
    <script src="https://kit.fontawesome.com/7c9e86ad48.js" crossorigin="anonymous"></script>    
    <title>Usuário</title>
</head>

<body> <?php include("navbar.php")?>

    <div class="rect">
        <div id="user-photo">
            <img src="<?=$_SESSION['login']->foto ?>">
        </div>

        <div id="information-rect">     
            <p>Nome: <?=$_SESSION['login']->user?></p>  
            <p>Idade: <?=$_SESSION['login']->age?></p> 
            <p>Cadastrado desde: <?=$_SESSION['login']->created_at?></p> 
            <input class="submit-btn" type="button" onclick="window.location='edit_user.php'" value="Editar informações">
        </div>
    </div>

    <div id="notify" class="form-text text-capitalize fs-4"><?= isset($_COOKIE['notify']) ? $_COOKIE['notify'] : '' ?></div>

<?php include('footer.php') ?></body>
</html>