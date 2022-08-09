<?php include('config.php');?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width ,initial-scale=1">
    <script src="https://kit.fontawesome.com/7c9e86ad48.js" crossorigin="anonymous"></script>  
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body> 
    <?php include("navbar.php")?>

    <div class="banner"></div>

    <main>
        <div id="form-rect">
            <div class="login">
                <form action="loginSistema.php" method="post" class="loginform">
                    <label for="email">Email </label><br>
                    <input type="email" name="email" id="email" placeholder="Informe o seu e-mail">
                    <br>
                    <label for="password">Senha </label><br>
                    <input type="password" name="password" id="password" placeholder="Informe a sua senha">
                    <br>
                    <button class="submit-btn" type="submit">Acessar</button>
                </form>
                <a href="createAccount.php"><button class="submit-btn">Criar conta</button></a>
            </div>
    </main>

<?php include('footer.php') ?></body>
</html>