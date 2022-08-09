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
            <div class="create_acc">
                <form action="" method="post" class="loginform">
                    <label>Nome <br><input type="text" placeholder="Informe o seu nome" required></label>
                    <br>
                    <label>Idade <br><input type="number" placeholder="Informe a sua idade" required></label>
                    <br>
                    <svg id="image" width="200" height="200">
                    <rect width="200" height="200" style="fill:rgba(100,100,100, 40);stroke-width: 3;stroke:rgb(0, 0, 0);" />
                    </svg>
                    <br>
                    <label>Foto <input id="create-photo" type="file" required></label>
                    <br>
                    <label for="email">Email </label>
                    <input type="email" name="email" id="create-email" placeholder="Informe o seu e-mail" required>
                    <br>
                    <label for="password">Senha </label>
                    <input type="password" name="password" id="create-password" placeholder="Informe a sua senha" required>
                    <br>                
                    <button class="submit-btn" type="submit">Criar uma conta</button>
                </form>
                <a href="login.php"><button class="submit-btn">Já tenho conta</button>
            </div>
        </div>
    </main>

<?php include('footer.php') ?></body>
</html>