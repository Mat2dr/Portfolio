<?php 
$auth = 0;
include 'lib/includes.php';

//Formulaire de connexion (Traitement)

if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = sha1($_POST['password']);
    $st = $db->prepare("SELECT * FROM users WHERE username=:username AND password=:password");
    $st->bindValue('username', $username, PDO::PARAM_STR);
    $st->bindValue('password', $password, PDO::PARAM_STR);
    $st->execute();
    $myUser = $st->fetch();
    if($myUser !== false){
        $_SESSION['Auth'] = $myUser;
        setFlash('Vous êtes maintenant connecté');
        header('location:admin/index.php');
        die();
    }
}

//inclusion du header
include 'partials/header.php'; ?>

 <body class=" container text-center cover heading">
    <form action="#" method="post">
      <img class="mb-4" src="images/login.png" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-strong">LOGIN</h1>
        <div class="form-group">
       <label for="username" class="sr-only">Nom d'Utilisateur</label>
        <?= input('username'); ?>
        
    </div>
    <div class="form-group">
       <label for="password" class="sr-only">Password</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>

        
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Se souvenir de moi
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>
    </form>
</body>



<style>
    body {
        padding-top: 200px;
    }
    
    
    footer{
    position: fixed !important;
    left: 0px;
    right: 0px;
    bottom: 0px !important;
    left: 0px;
    right: 0px;
    }

</style>


<?php include 'partials/footer.php'; ?>