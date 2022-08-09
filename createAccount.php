<?php 

include('config.php');
require_once('repository/loginrepository.php');

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width ,initial-scale=1">
    <script src="https://kit.fontawesome.com/7c9e86ad48.js" crossorigin="anonymous"></script>  
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body> 
    <?php include("navbar.php")?>

    <div class="banner"></div>

    <main>
        <div id="form-rect">
            <div class="create_acc">
            <legend>Cadastro de usuário</legend>
            <form action="cadastraUser.php" method="post" class="form">
                <div class="mb-3 form-group">
                    <label for="emailId" class="form-label">E-mail</label>
                    <input type="email" name="email" id="emailId" class="form-control" placeholder="Informe o e-mail">
                    <div id="helperEmail" class="form-text">Informe o e-mail</div>
                </div>
                <div class="mb-3 form-group">
                    <label for="senhaId" class="form-label">Usuário</label>
                    <input type="text" name="user" id="userId" class="form-control" placeholder="Informe o seu nome de usúario">
                    <div id="helperUser" class="form-text">Informe o seu nome de usuário</div>
                </div>
                <div class="mb-3 form-group">
                    <label for="ageId" class="form-label">Idade</label>
                    <input type="text" name="age" id="ageId" class="form-control" placeholder="Informe a sua idade">
                    <div id="helperAge" class="form-text">Informe a sua idade</div>
                </div>
                <div class="mb-3 form-group">
                    <label for="senhaId" class="form-label">Senha</label>
                    <input type="password" name="senha" id="senhaId" class="form-control" placeholder="Informe a senha">
                </div>
 
                <div class="d-grid gap-2 d-md-block">
                  <button type="submit" class="btn btn-dark">Enviar</button>
                  <a href="login.php"> <button> Já tem conta?</a> </button>
                </div>
                <div id="notify" class="form-text text-capitalize fs-4"><?= isset($_COOKIE['notify']) ? $_COOKIE['notify'] : '' ?></div>
            </form>

        </div>
    </main>

<?php include('footer.php') ?></body>
</html>