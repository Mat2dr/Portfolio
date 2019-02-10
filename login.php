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


 ?>

<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!---Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">


    
    <title>Connexion</title>
  </head>
  <body>

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