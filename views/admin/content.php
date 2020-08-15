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
                                <th scope="col">#</th>
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
                                <tr>
                                <td>1</td>
                                <td>Macarons</td>
                                <td>Petits plaisirs</td>
                                <td>Macarons.png</td>
                                <td>10 à 30 €</td>
                                <td>......</td>
                                <td> <button class="btn" title="Modifier"><i class="fas fa-edit"></i></button> </td>
                                <td> <button class="btn" title="Supprimer"><i class="fas fa-trash-alt"></i></button> </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </main> 
    
        <script src="https://kit.fontawesome.com/be20f2a41d.js" crossorigin="anonymous"></script>
</html>

<?php require('views/templates/footer.php');?>