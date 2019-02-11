<?php
include '../lib/includes.php';


if (isset($_POST['name']) && isset($_POST['slug'])) {
	checkCsrf();
	$slug = $_POST['slug'];
	if(preg_match('/^[a-z\0-9]+$/', $slug)){
		$name = $db->quote($_POST['name']);
		$slug = $db->quote($_POST['slug']);
        $category_id = $db->quote($_POST['category_id']);
        $content = $db->quote($_POST['content']);
        
        
        /**
        *SAUVEGARDE DE LA RÉALISATION
        **/
        
        
        if(isset($_GET['id'])) {
			$id = $db->quote($_GET['id']);
			$db->query("UPDATE works SET name=$name, slug=$slug, content=$content, category_id=$category_id WHERE id=$id");	
		}else{
			$db->query("INSERT INTO works SET name=$name, slug=$slug, content=$content, category_id=$category_id");
			$_GET['id'] = $db->lastInsertId();		
		}
		setFlash('La réalisation a bien été ajoutée.');
        
        
        /**
        ENVOIS DES IMAGES
        **/
        $work_id = $db->quote($_GET['id']);
		$files = $_FILES['images'];
		$images = array();

        $work_id = $db->quote($_GET['id']);
        $image = $_FILES['images'];
        $extension = pathinfo($image['name'], PATHINFO_EXTENSION);
        if(in_array($extension, array('jpg','png'))){
            $db->query("INSERT INTO images SET work_id=$work_id, name=$name");
            $image_id = $db->lastInsertId();
            $image_name = $image_id . '.' . $extension;
            move_uploaded_file($image['tmp_name'], IMAGES . '/works/' . $image_name);
            $image_name = $db ->quote($image_name);
            $db->query("UPDATE images SET name=$image_name WHERE id=$image_id");
            
        } 
        
        
		header('Location:work.php');
	}else{
		setFlash('Le slug n\'est pas valide.', 'danger');
	}

}


 // une réalisation
if(isset($_GET['id'])){
	$id = $db->quote($_GET['id']);
	$select = $db->query("SELECT * FROM works WHERE id=$id");
	if ($select->rowCount() == 0) {
		setFlash("Il n'y a pas de réalisation avec cet ID", 'danger');
		header('Location:work.php');
		die();
	}
	$_POST = $select->fetch();
}

// liste des catégories
$select = $db->query('SELECT id, name FROM categories ORDER BY name ASC');
$categories = $select->fetchAll();
$categories_list = array();
foreach($categories as $category){
    $categories_list[$category['id']] = $category['name']; 
}

var_dump($categories_list);

include '../partials/admin_header.php';
?>




<div class="container">
    
<h1>Editer une réalisation</h1>
    
<form action="#" method="post" enctype="multipart/form-data">
    <div class="form-group">
       <label for="name">Nom de la réalisation</label>
        <?= input('name'); ?>    
    </div>
    <div class="form-group">
       <label for="slug">URL de la réalisation</label>
        <?= input('slug'); ?>
    </div>
     <div class="form-group">
       <label for="content">Contenu de la réalisation</label>
        <?= textarea('content'); ?>
    </div>
         <div class="form-group">
       <label for="category_id">Catégorie</label>
        <?= select('category_id', $categories_list); ?>
    </div>
        <?= csrfInput(); ?>
    <div class="form-group">
        <input type="file" name="images">
    </div>
    
    <button type="submit" class="btn btn-default">Enregistrer</button>
</form>
  
</div>

    
    
<?php include '../partials/footer.php'; ?>