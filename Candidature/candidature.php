<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Candidature</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="../bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css2/bootstrap.min.css">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="./css2/font-awesome.css">
    <!-- ElegantFonts CSS -->
    <link rel="stylesheet" href="../css2/elegant-fonts.css">
    <!-- themify-icons CSS -->
    <link rel="stylesheet" href="../css2/themify-icons.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="../css2/swiper.min.css">
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body class="course">
    <!-- Header start -->
    <header class="header">
    <nav class="navbar">
        <a href="http://127.1.1.97/" class="site-title"><!--class="navbar__logo"-->
         <span> Centre de BTS <br> Mohammed VI </span>
        </a>
        <ul class="navbar__list" id="navbar__list">
          <li class="navbar__item">
            <i class="fa fa-times" onclick="hideMenu()"></i>
          </li>
          <li class="navbar__item navbar__item--active">
            <a href="http://127.1.1.98/candidature.php" class="navbar__link">Candidature</a>
          </li>
          <li class="navbar__item">
            <a href="#" class="navbar__link">Admission</a>
          </li>
          <li class="navbar__item">
            <a href="http://127.1.1.100/contact.php" class="navbar__link">Contact</a>
          </li>
        </ul>
        <i class="fa fa-bars" onclick="showMenu()"></i>
      </nav>

      <div class="hero-text">
        <h2 class="heading-2 heading-2--white mb-md">Candidature</h2>
      </div>
    </header>
    <!-- Header end -->
    <!-- Courses start -->
    <section class="courses">
      <div class="container">
        <form id="myForm">
          <div class="form-group mb-3 col-md-6 text-center centered">
            <label for="codeInput" class="form-label text-primary text-center">Code Massar</label>
            <input type="text" class="form-control rounded-3" id="codeInput" name="codeInput" placeholder="G123456789" required>
          </div>
          <div class="form-group mb-3 col-md-6 text-center centered">
            <label for="nameInput" class="form-label text-primary text-center">Nom et Prénom:</label>
            <input type="text" class="form-control rounded-3" id="nameInput" name="nameInput" readonly>
          </div>
          <div class="form-group mb-3 col-md-6 text-center centered">
            <label for="emailInput" class="form-label text-primary text-center">Email:</label>
            <input type="email" class="form-control rounded-3" id="emailInput" name="emailInput" placeholder="name@example.com" readonly>
          </div>
          <div class="form-group mb-3 col-md-6 text-center centered">
            <label for="typebacInput" class="form-label text-primary text-center">Type de Bac :</label>
            <input type="email" class="form-control rounded-3" id="typebacInput" name="typebacInput" placeholder="Type de bac" readonly>
          </div>
          <div class="form-group col-md-6 text-center centered">
            <label for="moyenInput" class="form-label text-primary text-center">Moyenne general:</label>
            <input type="number" class="form-control rounded-3" id="moyenInput" name="moyenInput" placeholder="10,00" readonly>
          </div>
          <div class="form-group col-md-6 text-center centered">
            <label for="telInput" class="form-label text-primary text-center">Phone number:</label>
            <input type="tel" class="form-control rounded-3" id="telInput" name="telInput" placeholder="06 66 66 66 66" readonly>
          </div>
          <p class="text-primary text-center mb-3">Filière demandée - 1ere Choix</p>
          <div class="form-check text-left col-6">  
            <input class="form-check-input" type="radio" name="mcw1" id="mcw1" value="1" required>
            <label class="form-check-label" for="mcw1">
              MCW(Multimédia et Conception Web)
            </label>
          </div>
          <div class="form-check text-left col-6">
            <input class="form-check-input" type="radio" name="cg1" id="cg1" value="1" required checked>
            <label class="form-check-label" for="cg1">
              CG(Comptabilité et Gestion)  
            </label>
          </div>
          <div class="form-check text-left col-6">  
            <input class="form-check-input" type="radio" name="se1" id="se1" value="1" required>
            <label class="form-check-label" for="se1">
              SE(Système Electronique)
            </label>
          </div>
          <div class="form-check text-left col-6">
            <input class="form-check-input" type="radio" name="prod1" id="prod1" value="1" required checked>
            <label class="form-check-label" for="prod1">
              PROD(Productique) 
            </label>
          </div>
          <p class="text-primary text-center mb-3">Filière demandée - 2eme Choix</p>
          <div class="form-check text-left col-6">  
            <input class="form-check-input" type="radio" name="mcw2" id="mcw2" value="2" required>
            <label class="form-check-label" for="mcw2">
              MCW(Multimédia et Conception Web)
            </label>
          </div>
          <div class="form-check text-left col-6">
            <input class="form-check-input" type="radio" name="cg2" id="cg2" value="2" required checked>
            <label class="form-check-label" for="cg2">
              CG(Comptabilité et Gestion)  
            </label>
          </div>
          <div class="form-check text-left col-6">  
            <input class="form-check-input" type="radio" name="" id="1" value="2" required>
            <label class="form-check-label" for="1">
              SE(Système Electronique)
            </label>
          </div>
          <div class="form-check text-left col-6">
            <input class="form-check-input" type="radio" name="" id="2" value="2" required checked>
            <label class="form-check-label" for="2">
              PROD(Productique) 
            </label>
          </div>
          <p class="text-primary text-center mb-3">Filière demandée - 3eme Choix</p>
          <div class="form-check text-left col-6">  
            <input class="form-check-input" type="radio" name="" id="1" value="2" required>
            <label class="form-check-label" for="1">
              MCW(Multimédia et Conception Web)
            </label>
          </div>
          <div class="form-check text-left col-6">
            <input class="form-check-input" type="radio" name="" id="2" value="2" required checked>
            <label class="form-check-label" for="2">
              CG(Comptabilité et Gestion)  
            </label>
          </div>
          <div class="form-check text-left col-6">  
            <input class="form-check-input" type="radio" name="" id="1" value="2" required>
            <label class="form-check-label" for="1">
              SE(Système Electronique)
            </label>
          </div>
          <div class="form-check text-left col-6">
            <input class="form-check-input" type="radio" name="" id="2" value="2" required checked>
            <label class="form-check-label" for="2">
              PROD(Productique) 
            </label>
          </div>
          <p class="text-primary text-center mb-3">Filière demandée - 4eme Choix</p>
          <div class="form-check text-left col-6">  
            <input class="form-check-input" type="radio" name="" id="1" value="2" required>
            <label class="form-check-label" for="1">
              MCW(Multimédia et Conception Web)
            </label>
          </div>
          <div class="form-check text-left col-6">
            <input class="form-check-input" type="radio" name="" id="2" value="2" required checked>
            <label class="form-check-label" for="2">
              CG(Comptabilité et Gestion)  
            </label>
          </div>
          <div class="form-check text-left col-6">  
            <input class="form-check-input" type="radio" name="" id="1" value="2" required>
            <label class="form-check-label" for="1">
              SE(Système Electronique)
            </label>
          </div>
          <div class="form-check text-left col-6">
            <input class="form-check-input" type="radio" name="" id="2" value="2" required checked>
            <label class="form-check-label" for="2">
              PROD(Productique) 
            </label>
          </div>
          <div class="mb-3 col-md-6 text-center centered">
            <label for="telInput" class="form-label text-primary text-center">Téléphone</label>
            <input type="tel" class="form-control rounded-3" id="telInput" name="telInput" placeholder="06 66 66 66 66">
          </div>
          <p class="text-primary text-center mb-3">Copie de Bac <br> Copie (légalisés) du Baccalauréat.Fichier au format pdf ou jpg ne dépassant pas 1 Mo et lisible </p>
          <div class="mb-3 col-md-6 centered">
            <label for="formFile" class="form-label"></label>
            <input class="form-control" type="file" id="formFile">
          </div>
          <p class="text-primary text-center mb-3">Copie de Relevé de notes <br> Copie (légalisés) du Baccalauréat.Fichier au format pdf ou jpg ne dépassant pas 1 Mo et lisible </p>
          <div class="mb-3 col-md-6 centered">
            <label for="formFile" class="form-label"></label>
            <input class="form-control" type="file" id="formFile">
          </div>
          <p class="text-primary text-center mb-3">Copie de CIN <br> Copie (légalisés) du Baccalauréat.Fichier au format pdf ou jpg ne dépassant pas 1 Mo et lisible </p>
          <div class="mb-3 col-md-6 centered">
            <label for="formFile" class="form-label"></label>
            <input class="form-control" type="file" id="formFile">
          </div>
          <p class="text-primary text-center mb-3">Copie Fiche de Candidature <br> Copie (légalisés) du Baccalauréat.Fichier au format pdf ou jpg ne dépassant pas 1 Mo et lisible </p>
          <div class="mb-3 col-md-6 centered">
            <label for="formFile" class="form-label"></label>
            <input class="form-control" type="file" id="formFile">
          </div>
          <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
          <!-- Submit Button-->
          <input type="submit" class="btn" value="Valider">
        </form>
      </div>   
    </section>
    <!-- Footer end -->
    <script>
      const nav = document.getElementById('navbar__list');
      function showMenu() {
        nav.style.right = '0px';
      }
      function hideMenu() {
        nav.style.right = '-60rem';
      }
    </script>
    <script type='text/javascript' src='js/jquery.js'></script>
    <script src="importData.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>
  </body>
</html>
