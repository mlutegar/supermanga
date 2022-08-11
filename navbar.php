<link rel="stylesheet" href="css/navbar.css">
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">

<header>

    <div class="nav" id="navlogo">
        <a class="logo" href="index.php"><img src="img/logo.png" alt="logo"> </a>
    </div>

    <nav class="nav" id="navmenu">
        <ul class="nav__links">
            <li><a href="vitrine.php">Mangás</a></li>
            <li><a href="#">Categorias</a></li>
            <li><a href="fale_conosco.php">Fale conosco</a></li>
        </ul>
    </nav>

    <div class="nav" id="navsearch">
        
        <div id="search-box" class="search-box">
            <form id="formSearchTitulo" role="search" method="post" action="localiza-manga.php">
                <input id="searchTitulo" class="search-txt" type="search" name="titulo" placeholder="Faça sua pesquisa" aria-label="Search">
            </form>
            <a class="search-btn" href="#">
                <img src="img/lupa.png" alt="" width="25" height="25">
            </a>
        </div>  
    </div>

    <div id="nav-account">

        <?php if(!array_key_exists('login', $_SESSION) || empty(isset($_SESSION['login']))) : ?>
            <a class="cta" href="login.php">Login</a>
        <?php else: ?>
            <div class="dropdown">
                <a href="#"><img class="iconlogin" src="img/login.png" alt="" width="30" height="30"></a>

                <div class="dropdown-content">
                    <ul>
                        <li><a class="logout" href="logout.php">Logout</a></li>
                        <li><a class="logout" href="formulario-cadastro-manga.php">Cadastrar manga</a></li>   
                        <li><a class="logout" href="user.php?id=<?= $user->id?>">Páginar usuario</a></li>
                        <?php if($_SESSION['login']->id == 1 && isset($_SESSION['login'])) echo  "<li><a class='logout' href='logout.php'>Administrador</a></li>" ?>                                              
                    </ul>
                </div>
            </div>
        <?php endif ?>
    </div>

    <!--<p class="menu cta">Menu</p>-->

</header>

