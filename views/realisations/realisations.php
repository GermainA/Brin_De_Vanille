<?php require('views/templates/head.php'); ?>
<?php require('views/templates/header.php'); ?>

<div class="container">

    <h1>Pâtisseries</h1>
    <img class="en-tete" src="<?php echo SITE_DIR ?>assets/img/fleur1.jpg" alt="Fleur">

</div>
<main class=" container realisations">
    <div class="row">
        <div class="col-sm">

            <img class="card-img-top" src="<?php echo SITE_DIR ?>assets/img/petitsplaisirs.png" alt="Card image cap">
            <div class="card-body">
                <p><button onclick="myScrollTo('a');" type="button" class="btn btn-light" class="card-link"><i class="fas fa-chevron-down fa-3x"></i></button></p>
            </div>

        </div>
        <div class="col-sm">

            <img class="card-img-top" src="<?php echo SITE_DIR ?>assets/img/tartes.png" alt="Card image cap">
            <div class="card-body">
                <p><button onclick="myScrollTo('b');" type="button" class="btn btn-light" class="card-link"><i class="fas fa-chevron-down fa-3x"></i></button></p>
            </div>

        </div>
        <div class="col-sm">

            <img class="card-img-top" src="<?php echo SITE_DIR ?>assets/img/entremets.png" alt="Card image cap">
            <div class="card-body">
                <p><button onclick="myScrollTo('c');" type="button" class="btn btn-light" class="card-link"><i class="fas fa-chevron-down fa-3x"></i></button></p>
            </div>

        </div>
    </div>
</main>

<div class="container" id="a">

    <h1>Petits plaisirs</h1>
    <img class="en-tete" src="<?php echo SITE_DIR ?>assets/img/fleur1.jpg" alt="Fleur">

</div>

<main class="realisations1">
    <div class="row ">
        <?php


        while ($row = $id_produit1->fetch(PDO::FETCH_BOTH)) {


            $produit = $Patisserie->recupPatisserie2($connection, $row['id_produit']);
            $produit = $produit->fetch();
            $row['image'] = $produit['image'];
            $row['titre'] = $produit['titre'];
            $row['tarif'] = $produit['tarif'];
            $row['id'] = $produit['id']; ?>

            <div class="col-sm-3">
                <div class="card">
                    <img class="card-img-top" src="<?php echo SITE_DIR . $row['image'] ?>" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-title"><?php echo $row['titre']; ?></p>
                        <p class="card-text">
                            <Table><?php echo $row['tarif']; ?></Table>
                        </p>
                        <a href="#" class="card-link"><i class="fas fa-angle-right"></i>Plus de détails</a>
                    </div>
                </div>
            </div> <?php } ?>


    </div>

    <div class="container" id="b">

        <h1>Tartes</h1>
        <img class="en-tete" src="<?php echo SITE_DIR ?>assets/img/fleur1.jpg" alt="Fleur">

    </div>

    <div class="row">
        <?php


        while ($row = $id_produit2->fetch(PDO::FETCH_BOTH)) {


            $produit = $Patisserie->recupPatisserie2($connection, $row['id_produit']);
            $produit = $produit->fetch();
            $row['image'] = $produit['image'];
            $row['titre'] = $produit['titre'];
            $row['tarif'] = $produit['tarif'];
            $row['id'] = $produit['id']; ?>

            <div class="col-sm-3">
                <div class="card">
                    <img class="card-img-top" src="<?php echo SITE_DIR . $row['image'] ?>" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-title"><?php echo $row['titre']; ?></p>
                        <p class="card-text">
                            <Table><?php echo $row['tarif']; ?></Table>
                        </p>
                        <a href="#" class="card-link"><i class="fas fa-angle-right"></i>Plus de détails</a>
                    </div>
                </div>
            </div> <?php } ?>
    </div>

    <div class="container" id="c">
        <h1>Entremets</h1>
        <img class="en-tete" src="<?php echo SITE_DIR ?>assets/img/fleur1.jpg" alt="Fleur">

    </div>

    <div class="row">
        <?php


        while ($row = $id_produit3->fetch(PDO::FETCH_BOTH)) {


            $produit = $Patisserie->recupPatisserie2($connection, $row['id_produit']);
            $produit = $produit->fetch();
            $row['image'] = $produit['image'];
            $row['titre'] = $produit['titre'];
            $row['tarif'] = $produit['tarif'];
            $row['id'] = $produit['id']; ?>

            <div class="col-sm-3">
                <div class="card">
                    <img class="card-img-top" src="<?php echo SITE_DIR . $row['image'] ?>" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-title"><?php echo $row['titre']; ?></p>
                        <p class="card-text">
                            <Table><?php echo $row['tarif']; ?></Table>
                        </p>
                        <a href="#" class="card-link"><i class="fas fa-angle-right"></i>Plus de détails</a>
                    </div>
                </div>
            </div> <?php } ?>
    </div>



</main>

<script src="<?php echo SITE_DIR ?>assets/js/scroll.js"></script>
<script src="https://kit.fontawesome.com/be20f2a41d.js" crossorigin="anonymous"></script>


<?php require('views/templates/footer.php'); ?>