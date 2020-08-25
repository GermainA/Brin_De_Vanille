<?php require('views/templates/head.php'); ?>
<?php require('views/templates/header.php'); ?>

<div class="container">

      <h1>Contact</h1>
      <img class="en-tete" src="<?php echo SITE_DIR ?>assets/img/fleur2.jpg" alt="Fleur">

</div>

<div class="container">
  <div class="row contact">
    <div class="col">
      <div class="titrecontact">
        <p>Pour nous contacter et suivre nos actualités sur les réseaux sociaux :</p>
      </div>
      <div class="liens">
        <p><i class="fas fa-phone"></i> Téléphone : 07 49 38 95 10 </p>
        <p><i class="fab fa-instagram"></i> Instagram : <a href="https://www.instagram.com/brin_de_vanille_patisserie/" target="_blank">brin_de_vanille_patisserie</a> </p>
        <p><i class="fab fa-facebook"></i> Facebook : <a href="https://www.facebook.com/brindevanillepatisserie" target="_blank">Brin de vanille</a></p>
        <p><i class="far fa-envelope"></i> Email : <a href="mailto:brindevanillepatisserie@gmail.com">brindevanillepatisserie@gmail.com</a></p>
      </div>
        <div class="titrecontact">
          <p>Nos horaires</p>
        </div>
        
        <div class="liens">
          <p>Du mardi au dimanche de 09h00 à 17h00</p>
        </div>

      </div>

      <div class="col">

        <div class="titrecontact">
          <p>Pour une commande, une demande particulière :</p>
        </div>

        <form>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="nom">Nom</label>
              <input type="text" class="form-control" id="nom" placeholder="" required>
            </div>
            <div class="form-group col-md-6">
              <label for="prenom">Prénom</label>
              <input type="text" class="form-control" id="prenom" placeholder="" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" placeholder="" required>
            </div>
            <div class="form-group col-md-6">
              <label for="number">Téléphone</label>
              <input type="text" class="form-control" id="number" placeholder="">
            </div>
          </div>

          <div class="form-group">
            <label for="exampleFormControlTextarea1">Message</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
          </div>
          <button type="submit" class="btn btn-light">Envoyez</button>
        </form>

      </div>
    </div>

  </div>
  <div class="map">
  
  </div>
  <script src="https://kit.fontawesome.com/be20f2a41d.js" crossorigin="anonymous"></script>

  <?php require('views/templates/footer.php'); ?>