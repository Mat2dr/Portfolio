<?php $auth = 0; ?>
<?php include 'partials/header.php'; ?>
<?php include 'lib/includes.php'; ?>





 
    <main role="main">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="images/BG2.jpg">
            <div class="container">
              <div class="carousel-caption">
                <h1>DRAGOVIC MATHIAS</h1>
                <p>Bienvenue sur mon Portfolio</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">En savoir plus</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>


      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing" id="propos">

        <div class="row">
            
            <div class="col-lg-4 col-md-4 col-sm-12">
                <img src="images/mathias.jpg" class="img-fluid rounded-circle">
                <span class="text-justify">Etudiant</span>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 desc">
     
            <h3>D.Mathias</h3>
                <p>
                    Je suis actuellement diplômé d'un BTS SIO (Services Informatiques aux Organisations) en spécialité SLAM (Solutions Logicielles et Applications Métiers) effectué au sein du lycée Paul Claudel localisée à Laon (02).<br>
                </p>
                
                <a class="btn btn-primary" type="button" value="Télécharger" href="documents/CV-mathias-dragovic.pdf"><i class="fa fa-download"> </i> CV</a>
                <a class="btn btn-primary" type="button" value="Télécharger" href="documents/tableau.xls"><i class="fa fa-download"> </i> Tableau de compétences</a>
            </div>
            
            <div class="container">
                <h3>Le portfolio est sur github:</h3>
                <a href="https://github.com/Mat2dr/Portfolio"><i class="fab fa-github 5x "></i></a>
            
            
            </div>
        </div>
          
          
                  <hr class="featurette-divider" id="projets">
          
          
        <!--MES PROJETS-->

      <div class="album py-5 bg-light">
          <div class="text-center">
          <h2>Mes Projets</h2>
          </div>
        <div class="container">

          <div class="row">
            <div class="col-sm-8">
              <div class="card mb-4 box-shadow">     
                  <?php 
            $select = $db->query("SELECT * FROM works");
            $works = $select->fetchAll();
          
          ?>
          
              <?php foreach ($works as $k => $work): ?>
                    <a href="view.php?id=<?= $work['id']; ?>">
                        <h2><?= $work['name']; ?></h2>
                        
                    </a>
              
              <?php endforeach ?>

              </div>
            
          </div>
        </div>
      </div>
          
    </div>
          
                  <hr class="featurette-divider" id="veille">
          
          
        <!-- VEILLE TECHNOLOGIQUE -->
          
          <div class="container center" style="padding:50px;">
              <div class="row">
                  <div class="col-lg-12 text-center">
                <iframe src="//www.pearltrees.com/mat2dr/veille-technologique/id23988593?embed=2&d=201902101234" width="853" height="604" style="border:0px;" allowtransparency="true"></iframe><span style=" padding-top:50px; color:#818181; font-size:13px;"></span>
                      </div>
              </div>
          </div>


          


      </div><!-- /.container -->
        
          <!--Section: Contact v.2-->
<section class="container mb-4">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Me contacter</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5"></p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class="">Nom</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class="">Prenom</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" class="form-control">
                            <label for="subject" class="">objet</label>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            <label for="message">Message</label>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>

            <div class="text-center text-md-left">
                <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Envoyer</a>
            </div>
            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>Laon, France</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>0780084257</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>dragovic.mathias@gmail.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

</section>
<!--Section: Contact v.2-->


<?php include 'partials/footer.php'; ?>


