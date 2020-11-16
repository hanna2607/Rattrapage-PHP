

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>LaboCovid</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/logo.png" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">LaboCovid</a></h1>
      </div>

      <!-- .nav-menu -->
      <nav class="nav-menu">
        <ul>
          <li class="active"><a href="#hero"><i class="bx bx-home"></i> <span>Accueil</span></a></li>
          <li><a href="#services"><i class="bx bx-calendar-alt"></i>Agenda</a></li> 
          <li><a href="Deconnecter.php"><i class="bx bx-power-off"></i>Deconnexion</a></li>
        </ul>
      </nav>

      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Accueil Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Espace Administrateur</h1>
      <p><span class="typed" data-typed-items="Tester, Alerter, Proteger"></span></p>
    </div>
  </section>
  <!-- End Accueil -->

  <main id="main">

    <!-- ======= Agenda Section ======= -->
   
    <section id="services" class="services">
      <div class="container">
        <div class="section-title">
          <h2>Agenda</h2>
          <table class="table bg-white rounded"  style="opacity: 0.8;margin-left:auto;margin-right:auto;">
            <thead>
              <tr>
                <th style="text-align: center; " scope="col">Date</th>
                <th style="text-align: center; "scope="col">Nom</th>
                <th style="text-align: center; " scope="col">Prenom</th>
                <th style="text-align: center; " scope="col">Heure</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $i = 0;
               if (!isset($leRdv)) {
      echo "Aucun Rdv pour l'instant";
    } else {
              while($i < count($leRdv))
              {
              ?>
              <tr>
                <td style="text-align: center;"><br/><?php echo $leRdv[$i]["date"]?></td>
                <td style="text-align: center;"><br/><?php echo $leRdv[$i]["nom"]?></td>
                <td style="text-align: center;"><br/><?php echo $leRdv[$i]["prenom"]?></td>
                <td style="text-align: center;"><br/><?php echo $leRdv[$i]["heure"]?></td>
              </tr>
              <?php
              $i = $i + 1;
            }
          }
            ?> 
          </tbody>
        </table>
      </div>

        </div>

      </div>
    </section> 
    <!-- End Services Section -->

 



  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
       <!--  &copy; Copyright <strong><span>iPortfolio</span></strong> -->
      </div>
      <div class="credits">
       
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>