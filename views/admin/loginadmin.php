<?php require('views/admin/templates/header.php');?>   
<main class="admin">
  <div class="h2">
    <p>Connexion</p>
  </div>
    <div class="container d-flex form-connexion">
      <section class="row login ">
		    <div class="block-content centered">
          <form method="post">
            
            <div class="form_row">
              <label for="txt_mail">Adresse Email :</label>
              <input type="mail" name="txt_mail" id="txt_mail" placeholder="*****@*****.**" required />
            </div>

            <div class="form_row">
              <label for="txt_pass">Mot de passe :</label>
              <input type="password" name="txt_pass" id="txt_pass" placeholder="" required />
            </div>

            <div class="form_row_centered">
              <input class="button" type="submit" value="Se Connecter" name="adminconnect"/>
            </div>

          </form>
        </div>
      </section>
    </div>
</main>
<?php require('views/admin/templates/footer.php');?>