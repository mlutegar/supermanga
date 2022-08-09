<?php include('config.php');?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width ,initial-scale=1">
    <script src="https://kit.fontawesome.com/7c9e86ad48.js" crossorigin="anonymous"></script>  
    <title>Mangás</title>
    <link rel="stylesheet" href="css/mangas.css">
</head>

<body> 


    <div class="banner"></div>

    <main>
        <div id="search-bar">
            <form method="post" action="">
                <input id="search-text" type="text" placeholder="Procure pelo nome do mangá">
                <button id="search-btn"><img src="img/lupa.png" width="20px" height="20px" alt=""></button>
            </form>
        </div>

        <div id="mangas">
            <!--LOOP AQUI-->
            <div id="card-manga">
                <div style="background-image: url('./img/img1.png')" id="manga-cover"></div>
                <div id="manga-information-section">
                    <div id="manga-information">
                        <h1>Título</h1>
                        <div id="additional-info"><p id="nota">Nota</p><p id="genero">Gênero</p></div>
                    </div>
                    <p id="sinopse">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean odio sapien, maximus ut 
                        interdum ac, placerat ut risus. Sed eget risus fringilla, molestie sapien in, tempor ipsum.
                        Ut venenatis dolor quam, varius aliquam tellus malesuada vitae. Sed imperdiet ante sed facilisis 
                        dignissim. Nulla tempor lectus ac neque vestibulum vehicula. Duis dictum maximus orci et gravida.
                        Vivamus porttitor nec mi sed pharetra. Ut non gravida lorem. Praesent maximus orci ac ante volutpat, 
                        eu interdum mauris gravida. Suspendisse purus purus, fringilla non vehicula eu, auctor et libero. 
                        Etiam nec justo ut nisi ultricies vestibulum. Cras efficitur et urna sit amet pellentesque. Nam mauris
                        ante, egestas vitae sollicitudin eget, rutrum vitae ligula.
                        Nam non suscipit quam, pretium euismod magna. Donec vitae imperdiet nibh, sit amet imperdiet risus.
                        Nullam quis porttitor est, et imperdiet erat. Fusce nec mattis odio. Integer id scelerisque libero, 
                        vel ultrices tortor. In at efficitur lacus. Aenean auctor fringilla sodales. Donec non orci ullamcorper, 
                        accumsan tellus ac, finibus quam. Aenean ullamcorper, dui eget pulvinar pretium, tellus mi auctor dui, ut 
                        vehicula nisi tellus scelerisque nisl. Duis interdum dui nisl, rutrum condimentum quam lobortis vitae. Cras
                        elit massa, sodales vel sollicitudin at, aliquet in augue. Nam mattis sollicitudin elit, sed interdum dolor 
                          
                        luctus ac. Fusce aliquam dolor vel ex blandit, sed molestie urna interdum. Phasellus vestibulum ante et 
                        porttitor convallis. Nullam rhoncus aliquam imperdiet. Vestibulum eget risus eu diam iaculis condimentum tincidunt nec lacus. 
                    </p>
                </div>
                <!--FIM DO LOOP-->
            </div>
        </div>
    </div>
    </main>

</html>