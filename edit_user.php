<?php 

include('config.php');
require_once('repository/LoginRepository.php');

$id = $_SESSION['id'];
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

<div class="col-6 offset-3">
        <fieldset>
            <legend>Edição de Perfil de Usuário</legend>
            <form action="editUser.php" method="post" class="form" enctype="multipart/form-data">
                <div class="card col-4 offset-4 text-center">
                    <img src="<?= $user->foto ?>" id="avatarId" class="rounded" alt="foto da membro">
                </div>
                <div class="mb-3 form-group">
                    <label for="fotoId" class="form-label">Foto</label>
                    <input type="file" name="foto" id="fotoId" class="form-control">
                    <div id="helperFoto" class="form-text">Importe a foto</div>
                </div>
                <div>
                    <input type="hidden" name="idUser" id="membroId" value="<?= $user->id ?>">
                </div>
                <div class="mb-3 form-group">
                    <label for="userId" class="form-label">User</label>
                    <input type="text" name="user" id="userId" class="form-control" placeholder="Informe o novo user" value="<?= $user->user ?>">
                    <div id="helperUser" class="form-text">Informe o seu novo user</div>
                </div>
                <div class="mb-3 form-group">
                    <label for="ageId" class="form-label">Idade</label>
                    <input type="text" name="age" id="ageId" class="form-control" placeholder="Informe a sua idade" value="<?= $user->age ?>">
                    <div id="helperAge" class="form-text">Informe a sua idade</div>
                </div>
                </div>
                <button type="submit" class="btn btn-dark">Enviar</button>
                <div id="notify" class="form-text text-capitalize fs-4"><?= isset($_COOKIE['notify']) ? $_COOKIE['notify'] : '' ?></div>
            </form>
        </fieldset>
    </div>

<?php include('footer.php') ?></body>
</html>