<?php include('configAdmin.php');?>

<!doctype html>
<html lang="pt_BR">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulário Cadastro de Manga</title>
    <<link rel="stylesheet" href="css/login.css">
  </head>

  <body><?php include("navbar.php");?>
    <div>
        <div id="form-rect">
            <form id="create-manga" action="createManga.php" method="post" enctype="multipart/form-data">
            <h1>Cadastrar manga</h1>
              <div style="width: 100%;">
                <img src="img/img1.png" id="manga-cover">
              </div>

                    <label>Capa <input class="upload-btn" type="file" name="capa" id="capaId" required></label>
                   <label>Manga<input class="upload-btn" type="file" name="conteudo" id="conteudoId" required></label>

      


                      <label>Anime</label>
                      <input type="text" name="anime" id="animeId" required>



                    <label>Volume</label>
                    <input type="number" name="volume" id="volumeId" required>  

                      <label>Autor</label>
                      <input type="text" name="autor" id="autorId">            

        
                    <label>Categoria</label>
                    <input type="text" name="categoria" id="editoraId">

                  <label>Sumário <textarea style="height: 300px;" name="sumario" rows="8" id="sumarioId"></textarea></label>

                  <input class="submit-btn" type="submit" value="Enviar">
                  <div id="notify"><?= isset($_COOKIE['notify']) ? $_COOKIE['notify'] : '' ?></div>
          </form>
        </div>
    </div>
  
  <?php include("footer.php");?>
  <script src="js/base64.js"></script></body>
</html>