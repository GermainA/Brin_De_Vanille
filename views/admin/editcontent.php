<?php require('views/admin/templates/headback.php');?>
<?php require('views/admin/templates/header.php');?> 

<html>
        <main class="admin">

            <div class="h2">
                <p>Modification d'une pâtisserie</p>
            </div>

            <div class="container d-flex">
                <section class="row ajout">
                    <div class="block-content centered">

                        <form method="post" action="" enctype="multipart/form-data">

                            <div class="form-row">
                                <label for="titre">Titre</label>
                                <input name="titre" type="text" class="titre" id="titre" value="<?php echo $infoPatisserie ['titre'] ?>">
                            </div>

                            <div class="form-row">
                                <label for="categorie">Catégorie</label>
                                <select name="categorie" class="topic" id="categorie">
                                <option selected disabled hidden>Catégorie</option> 
                                <option>Petits plaisirs</option>
                                <option>Tartes</option>
                                <option>Entremets</option> 
                                </select>
                                <div>La catégorie actuelle est : <?php echo $infoCategorie ['nom'] ?></div>
                            </div>
                        
                            <div class="form-row">
                                <label for="exampleFormControlFile1">Ajoutez une image</label>
                                <input type="file" class="form-control-file" id="doc" name="doc">
                                <div>L'image actuelle est : <?php echo $infoPatisserie ['image'] ?></div>
                            </div>
                           
                            <div class="form-row">
                                <label for="tarif">Tarif</label>
                                <input name="tarif" type="text" class="titre" id="tarif" value="<?php echo $infoPatisserie ['tarif'] ?>">
                            </div>

                            <div class="form-row">
                                <label for="content">Description</label>
                                <textarea name="content"class="form-control" id="content" rows="5"maxlength="3000" ><?php echo $infoPatisserie ['description'] ?></textarea>
                            </div>

                            <div class="form-row">
                                <input class="button" type="submit" value="Ajouter" name="updatecontent"id='updatecontent'/>
                            </div>

                        </form>
                    </div>
                </section>
            </div>
        </main>
</html>