<?php require('views/admin/templates/headback.php');?>
<?php require('views/admin/templates/header.php');?> 

<html>
        <main class="admin">

            
            <div class="h2">
                <p>PÂTISSERIES</p>
            </div>
            <div class="h3">
                <p><a href="<?php echo SITE_DIR . "admin021995/addcontent"?>">Ajouter une nouvelle pâtisserie</a></p>
            </div>

            <div class="container">
                <section class="row">
                    <div class="table-responsive">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                
                                <th scope="col">Titre</th>
                                <th scope="col">Catégorie</th>
                                <th scope="col">Image</th>
                                <th scope="col">Tarif</th>
                                <th scope="col">Description</th>
                                <th scope="col">Modifier</th>
                                <th scope="col">Supprimer</th>
                                </tr>
                             </thead>

                            <tbody>
                                <?php while ($row = $patisseries->fetch(PDO::FETCH_BOTH)) {
                                    $nomcategorie = $Categorie -> selectIdCategorie2 ($connection, $row ['id']);
                                    $nomcategorie = $nomcategorie -> fetch();
                                    $nomcategorie = $Categorie -> selectNomCategorie ($connection, $nomcategorie ['id_categorie']); 
                                    $nomcategorie = $nomcategorie -> fetch(); ?>
                                <tr>
                                
                                <td><?php echo $row['titre']; ?></td>
                                <td><?php echo $nomcategorie['nom']; ?></td>
                                <td><?php echo $row['image']; ?></td>
                                <td><?php echo $row['tarif']; ?></td>
                                <td><?php echo $row['description']; ?></td>
                                <td> <a href="<?php echo SITE_DIR . "admin021995/editcontent/" . $row ['id']?>"><button class="btn" title="Modifier"><i class="fas fa-edit"></i></button></a> </td>
                                <td> <a href="<?php echo SITE_DIR . "admin021995/delete/" . $row ['id']?>"><button class="btn" title="Supprimer"><i class="fas fa-trash-alt"></i></button></a> </td>
                                </tr> 
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </main> 
    
        <script src="https://kit.fontawesome.com/be20f2a41d.js" crossorigin="anonymous"></script>
</html>

<?php require('views/templates/footer.php');?>