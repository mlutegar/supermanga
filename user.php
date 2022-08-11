<?php 

include('config.php');
require_once('repository/LoginRepository.php');

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
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
    <fieldset>
                <div class="card col-4 offset-4 text-center">
                    <img src="<?= $user->foto ?>" id="avatarId" class="rounded">
                </div>
                      <div class="mb-3 form-group">
                    <label for="fotoId" class="form-label">Foto</label>
                    <input type="file" name="foto" id="fotoId" class="form-control">
                    <div id="helperFoto" class="form-text">Importe a sua foto de perfil</div>
                </div>
                <br>
                <div class="mb-3 form-group">
                    <label for="userId" class="form-label">User</label>
                    <input type="text" name="user" id="userId" class="form-control" value="<?= $user->user ?>">
                </div>
                <br>
                <div class="mb-3 form-group">
                    <label for="ageId" class="form-label">Idade</label>
                    <input type="text" name="age" id="ageId" class="form-control" value="<?= $user->age ?>">
                </div>
                <div id="notify" class="form-text text-capitalize fs-4"><?= isset($_COOKIE['notify']) ? $_COOKIE['notify'] : '' ?></div>
        </fieldset>
    </div>

<?php include('footer.php') ?></body>
</html>