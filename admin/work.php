<?php
include '../lib/includes.php';
include '../partials/admin_header.php';



/**
SUPPRESSION
**/
if(isset($_GET['delete'])){
    checkCsrf();
    $id = $db->quote($_GET['delete']);
    $db->query("DELETE FROM works WHERE id=$id");
    setFlash('Le projet a bien été supprimée');
    header('location:work.php');
    die();
}

/**
LES WORKS
**/
$select = $db->query('SELECT id, name, slug FROM works');
$works = $select->fetchAll();


?>

<div class="container">
<h1>Mes réalisations</h1>
    
<div class="container">
<p><a href="work_edit.php" class="btn btn-success">Ajouter une réalisation</a></p>
</div>


<div class="col-md-12" > 
<table class="table table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Actions</th>
        </tr> 
    </thead>
    <tbody>
        <?php foreach($works as $category): ?>
        <tr>
            <td><?= $category['id']; ?></td>
            <td><?= $category['name']; ?></td>
            <td>
                <a href="work_edit.php?id=<?= $category['id']; ?>" class="btn btn-default"> Editer</a>
                <a href="?delete=<?= $category['id']; ?>&<?= csrf(); ?>" class="btn btn-error" onclick="return confirm('Veux-tu vraiment supprimer cette réalisation?');">Supprimer</a>
            </td> 
        </tr>
        
        <?php endforeach; ?>
    
    </tbody>

</table>
</div>

</div>
<?php include '../partials/footer.php'; ?>