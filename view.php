<?php $auth = 0;
include 'lib/includes.php';
include 'partials/header.php';

 if(!isset($_GET['id'])){
     header("HTTP/1.1 301 Moved Permanently");
     header('location:index.php');
     die();
     
 }         
 
$work_id = $db->quote($_GET['id']);
$select = $db->query("SELECT * FROM works WHERE id= $work_id");
$works = $select->fetch();
          
$select = $db->query("SELECT * FROM images WHERE work_id= $work_id");
$images = $select->fetchAll();
          
?>

          

<div class="container">
    <div class="col-md-8">
        <h1><?= $works['name'] ?></h1>
        
    </div>
    <div class="col-md-8">
        <?= $works['content'] ?>
        
    </div>
</div>

  


<?php include 'partials/footer.php'; ?>


