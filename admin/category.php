<?php
include '../lib/includes.php';
include '../partials/admin_header.php';



/**
SUPPRESSION
**/
if(isset($_GET['delete'])){
    checkCsrf();
    $id = $db->quote($_GET['delete']);
    $db->query("DELETE FROM categories WHERE id=$id");
    setFlash('La catégorie a bien été supprimée');
    header('location:category.php');
    die();
}

/**
CATEGORIES
**/
$select = $db->query('SELECT id, name, slug FROM categories');
$categories = $select->fetchAll();


?>

<div class="container">
<h1>Les catégories</h1>
    
<div class="container">
<p><a href="category_edit.php" class="btn btn-success">Ajouter une catégories</a></p>
</div>


<div class="container center" > 
<table class="tablet table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Actions</th>
        </tr> 
    </thead>
    <tbody>
        <?php foreach($categories as $category): ?>
        <tr>
            <td><?= $category['id']; ?></td>
            <td><?= $category['name']; ?></td>
            <td>
                <a href="category_edit.php?id=<?= $category['id']; ?>" class="btn tn-default"> Editer</a>
                <a href="?delete=<?= $category['id']; ?>&<?= csrf(); ?>" class="btn btn-error" onclick="return confirm('Sur de sur ?');">Supprimer</a>
            </td> 
        </tr>
        
        <?php endforeach; ?>
    
    </tbody>

</table>
</div>

</div>
<?php include '../partials/footer.php'; ?>