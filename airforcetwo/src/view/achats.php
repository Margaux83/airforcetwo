<!doctype html>
<html lang="en">
    <head>
        <title>Espace achats</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="icon" href="../../assets/img/favicon.png" type="image/x-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i%7CMerriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

        <!-- Bootstrap Stylesheet -->
        <link rel="stylesheet" href="../../css/bootstrap.min.css">

        <!-- Font Awesome Stylesheet -->
        <link rel="stylesheet" href="../../css/font-awesome.min.css">

        <!-- Custom Stylesheets -->
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="stylesheet" id="cpswitch" href="../../css/orange.css">
        <link rel="stylesheet" href="../../css/responsive.css">
    </head>


    <body>

        <!--====== LOADER =====-->
        <div class="loader"></div>

        <!--======== END LOADER =========-->

        <?php
        session_start();
        if(isset($_SESSION['message'])) { ?>
            <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <strong><center><?php echo $_SESSION['message']; ?></center></strong>
            </div>
            <?php
            unset($_SESSION['message']);
        }
        ?>

        

          <!--================ PAGE-COVER =================-->
          <section class="page-cover" id="cover-login">
              <div class="container">
                  <div class="row">
                      <div class="col-sm-12">
                      	<h1 class="page-title">Mes achats</h1>
                          <ul class="breadcrumb">
                              <li><a href="/airforcetwo/index.php">Home</a></li>
                              <li class="active">Mes achats</li>
                          </ul>
                      </div><!-- end columns -->
                  </div><!-- end row -->
              </div><!-- end container -->
          </section><!-- end page-cover -->


        <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
        	<div id="dashboard" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="dashboard-wrapper">
                            	<div class="row">

                                <div class="col-xs-12 col-sm-2 col-md-2 dashboard-nav">
                                  <ul class="nav nav-tabs nav-stacked text-center">
                                        <li><a href="user-profile.php"><span><i class="fa fa-user"></i></span>Profil</a></li>
                                          <li class="active"><a href="booking.php"><span><i class="fa fa-briefcase"></i></span>Mes réservations</a></li>
                                            <li class="active"><a href="achats.php"></span>Mes achats</a></li>
                                      </ul>
                                  </div><!-- end columns -->

                                    <div class="col-xs-12 col-sm-10 col-md-10 dashboard-content booking-trips">
                                		<h2 class="dash-content-title">Mes achats</h2>

                                        <div class="dashboard-listing booking-listing">
                                        	<div class="dash-listing-heading"></div>

                                            <div class="table-responsive">
                                              <?php
                                              // Inclusion de la classe "achat_manager.php" et "achat_manager"
                                              include "../model/achat.php";
                                              include "../model/achat_manager.php";

                                                // Creation d'un nouvel objet "achat" de type "achat_manager"
                                              $achat= new achat_manager();
                                              // Execution de la fonction "achat"
                                              $result=$achat->listAchat();


                                              ?>
                                                <table class="table table-hover">

                                                  <?php  foreach ($result as $m){

                                                    ?>
                                                    <tbody>
                                                        <tr>
                                                            <td class="dash-list-icon booking-list-date"><img src="../../assets/img/<?php echo $m['img'];?>" class="img-responsive" alt="flight-img" /></td>
                                                            <td class="dash-list-text booking-list-detail">
                                                                <h3><?php echo $m['ville_dep'];?>-<?php echo $m['ville_arr']; ?></h3>
                                                                <ul class="list-unstyled booking-info">

                                                                  <li><span>Nom:</span> <?php echo $m['nom'];?></li>
                                                                  <li><span>Prenom:</span> <?php echo $m['prenom']; ?></li>
                                                                  <li><span>Téléphone:</span> <?php echo $m['phone']; ?></li>
                                                                  <li><span>Adresse:</span> <?php echo $m['adresse']; ?></li>
                                                                  <li><span>Pays:</span> <?php echo $m['pays']; ?></li>
                                                                  <li><span>Mail:</span> <?php echo $m['email']; ?></li>
                                                                  <li><span>Nom de l'avion:</span> <?php echo $m['nomav']; ?></li>
                                                                  <li><span>Numéro de vol:</span> <?php echo $m['numav']; ?></li>
                                                                	<li><span>Date de réservation:</span> Du <?php echo $m['date_dep']; ?> au <?php echo $m['date_arr'];?></li>
                                                                  <li><span>Heure de départ:</span> <?php echo $m['h_dep']; ?></li>
                                                                  <li><span>Heure d'arrivée:</span> <?php echo $m['h_arr']; ?></li>
                                                                  <li><span>Prix:</span> <?php echo $m['prix']; ?>€</li>
                                                                </ul>

                                                            </td>
                                                          </tr>
                                                    </tbody>
                                                  <?php } ?>
                                                </table>
                                            </div><!-- end table-responsive -->
                                        </div><!-- end booking-listings -->


                                    </div><!-- end columns -->

                                </div><!-- end row -->
                            </div><!-- end dashboard-wrapper -->
                        </div><!-- end columns -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end dashboard -->
        </section><!-- end innerpage-wrapper -->


        <!--============= NEWSLETTER============-->
        <section id="newsletter-2" class="newsletter">
            <div class="container">
                <div class="row">
                 <?php include "../include/newsletter.php"?>
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end newsletter-2 -->
        <!--============= END NEWSLETTER============-->




                   <!--======================= FOOTER TOP =======================-->
    <section id="footer" class="ftr-heading-o ftr-heading-mgn-1">
        <div id="footer-top" class="banner-padding ftr-top-grey ftr-text-white">
            <div class="container">
                <div class="row">
                 <?php include "../include/footer-top.php"?>
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end footer-top -->
    <!--======================= END FOOTER TOP =======================-->

         <!--======================= FOOTER BOTTOM =======================-->
        <div id="footer-bottom" class="ftr-bot-black">
            <div class="container">
                <div class="row">
                 <?php include "../include/footer-bottom.php"?>
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end footer-bottom -->
        <!--======================= END FOOTER BOTTOM =======================-->

    </section><!-- end footer -->


        <!-- Page Scripts Starts -->
        <script src="../../assets/bootstrap/js/jquery.min.js"></script>
        <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="../../assets/bootstrap/js/custom-navigation.js"></script>
        <!-- Page Scripts Ends -->
    </body>
</html>
