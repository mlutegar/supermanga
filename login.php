<?php include('config.php');?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width ,initial-scale=1">
    <script src="https://kit.fontawesome.com/7c9e86ad48.js" crossorigin="anonymous"></script>    
    <title>Login</title>
</head>

<body> <?php include("navbar.php")?>

    <div class="banner"></div>

    <div class="rect">
        <div>
            <h2>LOGIN</h2>
        </div>

        <div>
            <form action="loginSistema.php" method="post" class="loginform">
                <label for="email">Email: </label>
                <input type="email" name="email" id="email">
        
                <label for="password">Senha: </label>
                <input type="password" name="password" id="password">
        
                <button type="submit">Enviar</button>
            </form>
        </div>
    </div>


<?php include('footer.php') ?></body>
</html>