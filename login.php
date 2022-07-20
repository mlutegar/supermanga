<?php include('config.php');?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width ,initial-scale=1">

        <link rel="stylesheet" type="text/css" href="css/mainnav.css">
        <link rel="stylesheet" type="text/css" href="css/login.css">
        <script src="https://kit.fontawesome.com/7c9e86ad48.js" crossorigin="anonymous"></script>    </head>

    <body>
        <?php include("mainnav.php")?>
        <form action="loginSistema.php" method="post" class="loginform">
            <label for="email">Email: </label>
            <input type="email" name="email" id="email">

            <label for="password">Senha: </label>
            <input type="password" name="password" id="password">

            <button type="submit">Enviar</button>
        </form>
    </body>
</html>