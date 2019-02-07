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



<form action="#" method="post">
    <div class="form-group">
       <label for="username">Nom d'Utilisateur</label>
        <?= input('username'); ?>
        
    </div>
    <div class="form-group">
       <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <button type="submit" class="btn btn-default">Se connecter</button>
</form>

<style>
    
    .footer{
    position: fixed !important;
    left: 0px;
    right: 0px;
    bottom: 0px !important;
    left: 0px;
    right: 0px;
    }

</style>


<?php include 'partials/footer.php'; ?>