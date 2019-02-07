<?php
include '../lib/includes.php';
include '../partials/admin_header.php';

$select = $db->query('SELECT id, name, slug FROM categories');
$categories = $select->fetchAll();

?>

<div class="containers">
<h1>Les catégories</h1>

<?php echo var_dump($categories); ?>

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
                <a href="?delete=<?= $category['id']; ?>" class="btn btn-error" onclick="return confirm('Sur de sur ?');">Supprimer</a>
            </td> 
        </tr>
        
        <?php endforeach; ?>
    
    </tbody>

</table>

</div>
<?php include '../partials/footer.php'; ?>