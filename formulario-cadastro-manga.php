<?php include('configAdmin.php');?>

<!doctype html>
<html lang="pt_BR">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulário Cadastro de Manga</title>
  </head>

  <body><?php include("navbar.php");?>
    <div>
        <div>
            <form action="registraManga.php" method="post" enctype="multipart/form-data">
              <div>

                <svg width="100%" height="360" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Capa" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Capa</text>
                </svg>

                <div>
                  <div>
                    <label for="capaId">Capa</label>
                    <input type="file" name="capa" id="capaId" required>
                  </div>
        
                  <div>
                    <label>Conteudo</label>
                    <input type="file" name="conteudo" id="conteudoId" required>
                  </div>
                </div>
      
                <div>
                  <div>
                    <div style="width: 95%;">
                      <label>Anime</label>
                      <input type="text" name="anime" id="animeId" required>
                    </div>
                  </div>
        
                  <div>
                    <label>Volume</label>
                    <input type="number" name="volume" id="volumeId" required>  
                  </div>
                </div>
      
                <div>
                  <div>
                    <div style="width: 95%;">
                      <label>Autor</label>
                      <input type="text" name="autor" id="autorId">            
                    </div>
                  </div>
        
                  <div>
                    <label>Categoria</label>
                    <input type="text" name="categoria" id="editoraId">
                  </div>
                </div>
      
                <div>
                  <label>Sumario</label>
                  <textarea name="sumario" rows="8" id="sumarioId"></textarea>
                </div>

                <div>
                  <button type="submit">Enviar</button>
                  <div id="notify"><?= isset($_COOKIE['notify']) ? $_COOKIE['notify'] : '' ?></div>
                </div>
              </div>
          </form>
        </div>
    </div>
  
  <?php include("footer.php");?>
  <script src="js/base64.js"></script></body>
</html>