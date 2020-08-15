<?php require('views/templates/head.php'); ?>

<?php require('views/templates/header.php'); ?>

<div class="container">

  <h1>Accueil</h1>
  <img class="en-tete" src="<?php echo SITE_DIR ?>assets/img/fleur2.jpg" alt="Fleur">

</div>

<div class="container accueil">
  <p>Brin de Vanille vous propose de délicieux produits frais, entièrement faits maison. </br>Moins sucrés et sans conservateur, pour vous offrir une dégustation de haute qualité et un vrai moment de gourmandise. </br> &Aacute; consommer sans modération !</p>
</div>

<div class="container acceuil-carousel">
  <div id="carousel">
    <div class="item">
      <div class="item-img">
        <img src="<?php echo SITE_DIR ?>assets/img/logo2.png">
      </div>
    </div>

    <div class="item">
      <div class="item-img">
        <img src="<?php echo SITE_DIR ?>assets/img/logo2.png">
      </div>
    </div>

    <div class="item">
      <div class="item-img">
        <img src="<?php echo SITE_DIR ?>assets/img/logo2.png">
      </div>
    </div>

    <div class="item">
      <div class="item-img">
        <img src="<?php echo SITE_DIR ?>assets/img/logo2.png">
      </div>
    </div>

    <div class="item">
      <div class="item-img">
        <img src="<?php echo SITE_DIR ?>assets/img/logo2.png">
      </div>
    </div>
  </div>
</div>

<script src="assets/js/carousel.js"></script>


<?php require('views/templates/footer.php'); ?>