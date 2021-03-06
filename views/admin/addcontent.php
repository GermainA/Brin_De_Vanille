<?php require('views/admin/templates/headback.php');?>
<?php require('views/admin/templates/header.php');?> 

<html>
        <main class="admin">

            <div class="h2">
                <p>Ajout d'une nouvelle pâtisserie</p>
            </div>
    <?php if (!isset ($reussite)) { ?>
            <div class="container d-flex">
                <section class="row ajout">
                    <div class="block-content centered">

                        <form method="post" action="" enctype="multipart/form-data">

                            <div class="form-row">
                                <label for="titre">Titre</label>
                                <input name="titre" type="text" class="titre" id="titre" required>
                            </div>

                            <div class="form-row">
                                <label for="categorie">Catégorie</label>
                                <select name="categorie" class="topic" id="categorie" required>
                                <option selected disabled hidden>Catégorie</option>
                                <?php while ($row = $selectionCategorie->fetch(PDO::FETCH_BOTH)) { ?>
                                    <option value='<?php echo $row ['nom'] ;?>'><?php echo $row ['nom'] ; ?></option>
                                <?php }?>   
                                </select>
                            </div>
                        
                            <div class="form-row">
                                <label for="exampleFormControlFile1">Ajoutez une image</label>
                                <input type="file" class="form-control-file" id="doc" name="doc" required>
                            </div>
                           
                            <div class="form-row">
                                <label for="tarif">Tarif</label>
                                <input name="tarif" type="text" class="titre" id="tarif" required>
                            </div>

                            <div class="form-row">
                                <label for="content">Description</label>
                                <textarea name="content"class="form-control" id="content" rows="5"maxlength="3000" required></textarea>
                            </div>

                            <div class="form-row">
                                <input class="button" type="submit" value="Ajouter" name="addcontent"id='addcontent'/>
                            </div>

                        </form>
                    </div>
                </section>
            </div>
                                <?php } else if (isset ($reussite)) { ?> 
                                <div class="messageadd">
                                        <?php echo $reussite ?>
                                </div> <?php } ?>
        </main>
</html>