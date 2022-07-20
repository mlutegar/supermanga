<nav class="mainnav" id="mainnav">
    <input type="checkbox" id="check">
    <label for="check" class="check_btn">
        <i class="fas fa-bars"></i>
    </label>
    <label class="logo"><a href="home.php"><img src="img/logo.png" width="300px"></a></label>
    <table>
        <tr id="options">
            <?php if(!(!array_key_exists('login', $_SESSION) || empty(isset($_SESSION['login'])))) : ?>
                <th>LOGADO</th>    
                <th><a href="logout.php">DESLOGAR</a></th> 
            <?php endif ?>  
            <th><a href="#">Mangás</a></th>
            <th><a href="#">Categorias</a></th>
            <th><a href="#">Grupos</a></th>
            <div class="right_elements">
                <input type="checkbox" id="search">
                <label for="search" class="search_btn">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </label>
                <input type="checkbox" id="user">
                <label for="user" class="user_btn">
                    <a href="login.php"><i class="fa-solid fa-user"></i></a>
                </label>
            </div>
        </tr>
    </table>
</nav>
<form class="user" id="login_form">
    <fieldset>
        <legend>Login</legend>
    </fieldset>
</form>


