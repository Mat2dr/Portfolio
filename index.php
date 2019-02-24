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
                <span class="text-justify">S.Web Developer</span>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 desc">
     
            <h3>D.Mathias</h3>
                <p>
                    Je suis actuellement diplômé d'un BTS SIO (Services Informatiques aux Organisations) en spécialité SLAM (Solutions Logicielles et Applications Métiers) effectué au sein du lycée Paul Claudel localisée à Laon (02).<br>

                    Intéressé par le Web et le Design, je souhaiterais effectuer une formation afin de me spécialiser dans ce domaine ! 
                J'ai mis en place ce site afin de vous exposer mon parcours
                </p>
                
                <a class="btn btn-primary" type="button" value="Télécharger" href="documents/CV-mathias-dragovic.pdf"><i class="fa fa-download"> </i> Download</a>
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
              <div class="col-sm-4">
                  <ul>
                    <?php $categorie = $db->query('SELECT slug, name FROM categories')->fetchAll(); ?>
                      <?php foreach ($categories as $category): ?>
                        <li>
                            <a href="<?= WEBROOT; ?>categorie/<?= $category['slug']; ?>">
                                <?= $category['name'] ?>
                            </a>
                        </li>
                      <?php endforeach ?>
                      <li></li>
                  </ul>
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


<?php include 'partials/footer.php'; ?>


