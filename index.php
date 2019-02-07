<?php $auth = 0; ?>
<?php include 'partials/header.php'; ?>
<?php include 'lib/includes.php'; ?>





    <!--Header-->
      
    <div id="header" class="header">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6">
              <h1>Portfolio</h1>
                <p>Dragovic Mathias </p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at magna eleifend, vestibulum justo sed,</p>
              <button class="btn btn-lg btn-primary">A propos</button>
              <button class="btn btn-lg btn-success">Mes projets</button> 
            </div>
            <div class="col-lg-6 col-md-6"></div>
              
          </div>
        </div>
      </div>
      
<!--End Header-->

<?= flash(); ?>

<!--Services-->     
      
      <div id"services" class="services">
          <div class="container">
              <h2>Services</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at magna eleifend, vestibulum justo sed,</p>
              <div class="row">
                  <div class="col-lg-3 col-md-3">
                      <i class="fab fa-dev"></i>
                      <h4>Dev</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at magna eleifend, vestibulu m justo sed</p>
                  </div>
                  
                  <div class="col-lg-3 col-md-3">
                       <i class="fab fa-dev"></i>
                      <h4>Dev</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at magna eleifend, vestibulum justo sed</p>
                  </div>
                  
                  <div class="col-lg-3 col-md-3">
                       <i class="fab fa-dev"></i>
                      <h4>Dev</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at magna eleifend, vestibulum justo sed</p>
                  </div>
                  
                  <div class="col-lg-3 col-md-3">
                       <i class="fab fa-dev"></i>
                      <h4>Dev</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at magna eleifend, vestibulum justo sed</p>
                  </div>
                  
              </div>
          </div>
        </div>
      
  <!--End Services-->      
      

  <!--Pricing--> 

<!--<div id="pricing" class="pricing">
    <div class="container">
        <div class="row">
            <h2>Princing</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at magna eleifend, vestibulum justo sed</p>
            <div class="col-lg-3 col-md-3 ">
                <div class="packages">
                    <h4>dev</h4>
                    <h1>9.99</h1>
                    <b>monthly</b>
                    <p>>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <hr>
                    <li>100 users</li>
                    <li>100 users</li>
                    <li>100 users</li>
                    <li>100 users</li>
                    <li>100 users</li>
                    <li>100 users</li>
                    <li>100 users</li>
                    <li>100 users</li>
                    <button class="btn btn-success">Get Started</button>
                </div>
            </div>
                <div class="col-lg-3 col-md-3">
                <div class="packages">
                    <h4>dev</h4>
                    <h1>9.99</h1>
                    <b>monthly</b>
                    <p>>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <hr>
                    <li>100 users</li>
                    <li>100 users</li>
                    <li>100 users</li>
                    <li>100 users</li>
                    <li>100 users</li>
                    <li>100 users</li>
                    <li>100 users</li>
                    <li>100 users</li>
                    <button class="btn btn-success">Get Started</button>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="packages">
                    <h4>DEV</h4>
                    <h1>9.99</h1>
                    <b>monthly</b>
                    <p>>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <hr>
                    <li>100 users</li>
                    <li>100 users</li>
                    <li>100 users</li>
                    <li>100 users</li>
                    <li>100 users</li>
                    <li>100 users</li>
                    <li>100 users</li>
                    <li>100 users</li>
                    <button class="btn btn-success">Get Started</button>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="packages">
                    <h4>dev</h4>
                    <h1>9.99</h1>
                    <b>monthly</b>
                    <p>>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <hr>
                    <li>100 users</li>
                    <li>100 users</li>
                    <li>100 users</li>
                    <li>100 users</li>
                    <li>100 users</li>
                    <li>100 users</li>
                    <li>100 users</li>
                    <li>100 users</li>
                    <button class="btn btn-success">Get Started</button>
                </div>
            </div>
            </div>
        </div>
    
</div> -->



  <!--End Pricing-->

  <!--About me-->

<div id="team" class="team ">
    <div class="container">
        <div class="row">
            <h2>A propos de moi</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <div class="mx-auto animated fadeInLeft">
                <img src="images/mathias.jpg" class="img-circle" alt="">
                <h4>DRAGOVIC Mathias</h4>
                <b>Etudiant BTS SIO</b>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>



<!-- End About me-->

<!--Contact-->

<div id="contact " class="contact">
    <div class="container">
        <div class="row">
            <H2>CONTACT</H2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <div class="col-lg-6 col-md-6">
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" id="sizing-addon1" ><i class="fas fa-user"></i></span>
                    <input type="text" class="form-control" aria-describedby="sizing-addon1" placeholder="Full Name">
                </div>  
                
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" id="sizing-addon1"><i class="fas fa-envelope"></i></span>
                    <input type="text" class="form-control" aria-describedby="sizing-addon1" placeholder="Email Address">
                </div> 
                    
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" id="sizing-addon1"><i class="fas fa-phone"></i></span>
                    <input type="text" class="form-control" aria-describedby="sizing-addon1" placeholder="Phone number">
                </div>    
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="input-group">
                    <textarea name="" id="" cols="80" rows="6" class="form-control"></textarea>
                </div>
                <button class="btn btn-lg">Submit your message</button>
            
            </div>
        </div>   
    </div>
</div>



<!-- End Contact-->



<?php include 'partials/footer.php'; ?>


