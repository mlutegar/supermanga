<?php require_once('repository/LoginRepository.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width ,initial-scale=1">
    <script src="https://kit.fontawesome.com/7c9e86ad48.js" crossorigin="anonymous"></script>  
    <title>Recuperação de senha</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body> 
    <?php include("navbar.php")?>

    <div class="banner"></div>

    <main>
    <div class="col-6 offset-3">
    <fieldset>
            <legend>Recupera senha</legend>
            <form action="recupera-senha.php" method="post" class="form">
                <div class="mb-3 form-group">
                    <label for="emailId" class="form-label">E-mail</label>
                    <input type="email" name="email" id="emailId" class="form-control" placeholder="Informe o e-mail">
                    <div id="helperEmail" class="form-text">Informe o e-mail</div>
                </div>
                <div class="d-grid gap-2 d-md-block">
                  <button type="submit" class="btn btn-dark">Enviar</button>
                  <a href="login.php">Fazer login</a>
                </div>
                <?php if(isset($_COOKIE['notify'])) : ?>
                <div id="notify" class="form-text text-capitalize text-<?= $_COOKIE['status'] ?> fs-4"><?= $_COOKIE['notify'] ?></div>
                <?php endif; ?>
            </form>
        </fieldset>
    </div>
    </main>

<?php include('footer.php') ?></body>
</html>