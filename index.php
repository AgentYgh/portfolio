<!doctype html>
<html lang="fr" class="h-100">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/index.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/sticky-footer/">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Portfolio Grp-2</title>
  </head>
  <body class="d-flex flex-column h-100">
    
    <header id="header">

      
    
        <nav class="navbar navbar-expand-md navbar-dark bg-dark" >
          <div class="div_logo_gp2" >
            <a id="lien_logo" href="index.php"><img id="logo_gp2" src="images/logo_gp2.png" alt="logo_gp"></a>
    
          </div>
          <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class=" div_bar collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                  <li class="nav-item active">
                      <a class="nav-link sous_navbar" href="index.php">ACCUEIL <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link sous_navbar" href="projets.php">PROJETS</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link sous_navbar" href="about.php">À PROPOS</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link sous_navbar" href="#">CONTACT</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link sous_navbar" href="#">INSCRIPTION À LA NEWSLETTER</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link sous_navbar" href="login.php">LOGIN <img src="images/logo_login.ico" alt="logo_login"> </a>
                  </li>
              </ul>
          </div>
      </nav>
    
    </header>

    <main>
      <!--Div  pour l'animation Bird , Fleche bas -->
      <div class="container">
  
        
        
        <div class="bird-container bird-container--one">
          <div class="bird bird--one"></div>
        </div>       
        <div class="bird-container bird-container--two">
          <div class="bird bird--two"></div>
        </div>
        
        <div class="bird-container bird-container--three">
          <div class="bird bird--three"></div>
        </div>        
        <div class="bird-container bird-container--four">
          <div class="bird bird--four"></div>
        </div>        
      </div>

      <div id="div_fleche">
        <a id="lien_fleche" href="#page_present">
          <img id="fleche_bas" src="images/fleche_bas.png" alt="fleche_bas">
        </a>
      </div>
      

      <div id="page_present">
        
        <div class="album ">
          <h1 id="titre_proj">Quelques Projets :</h1>
          <div class="container">
      
            <div class="Main_div_proj row">


              <div class="div_proj col-md-4">
                <div class="card mb-4 shadow-sm">
                  <img class="img_proj" src="images/cv.png" alt="image cv">
                  <div class="div_text_bas_image_proj card-body">
                    <p class="card-text">Projet : Cv  php/CSS</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <a class="lien_projet" href="https://kh-oumar.github.io/Cv/">Lien GitHub</a> 
                        <a class="lien_projet" href="https://github.com/kh-oumar/Cv.git">Code source</a>
                        
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="div_proj col-md-4">
                <div class="card mb-4 shadow-sm">
                  <img class="img_proj" src="images/calculatrice.png" alt="image calculatrice">
                  <div class="div_text_bas_image_proj card-body">
                    <p class="card-text">Projet : Calculatrice</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <a class="lien_projet" href="https://kh-oumar.github.io/Calculatrice/">Lien GitHub</a> 
                        <a class="lien_projet" href="https://github.com/kh-oumar/Calculatrice.git">Code source</a>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="div_proj col-md-4">
                <div class="card mb-4 shadow-sm">
                  <img class="img_proj" src="images/yeux.png" alt="image yeux">
                  <div class="div_text_bas_image_proj card-body">
                    <p class="card-text">Projet : yeux qui suivent</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <a class="lien_projet" href="https://kh-oumar.github.io/Yeux/">Lien GitHub</a> 
                        <a class="lien_projet" href="https://github.com/kh-oumar/Yeux.git">Code source</a>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>



      



            </div>
          </div>
        </div>


      </div>

    </main>
    
    <div id="scroll-up">
        <a href="#header">
            <img src="images/fleche_haut.png" alt="fleche_haut"/>
        </a>
    </div>
    



    <footer class="footer mt-auto py-3 footer-basic bg-dark">
              <div class="social">
                <a href="https://www.instagram.com/" target="_blank"> <img src="images/reseau/instagram.svg" alt="logo instagram"> </a>
                <a href="https://www.youtube.com/" target="_blank"> <img src="images/reseau/youtube.svg" alt="logo youtube"></a>
                <a href="https://twitter.com/" target="_blank"> <img src="images/reseau/twitter.svg" alt="logo twitter"></a>
                <a href="https://www.facebook.com/" target="_blank"> <img src="images/reseau/facebook.svg" alt="logo facebook"></a>
              </div>
              <ul class="list-inline">
                  <li class="list-inline-item"><a href="index.php">Accueil</a></li>
                  <li class="list-inline-item"><a href="projets.php">Projets</a></li>
                  <li class="list-inline-item"><a href="about.php">À Propos</a></li>
                  <li class="list-inline-item"><a href="#">Contact</a></li>
                  <li class="list-inline-item"><a href="#">Newsletter</a></li>
              </ul>
              <p class="copyright">Portfolio Groupe 2 © 2021</p>
    </footer>
   
    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/script_index.js">

    </script>
  </body>
</html>