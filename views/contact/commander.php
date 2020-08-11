<?php require('views/templates/header.php');?>

<main class= "commander">
    
    <form>
    <div class="form-row">
        <div class="form-group col-md-2">
            <label for="inputEmail4">Type de pâtisserie</label>
             <select class="form-control" id="exampleFormControlSelect1">
                <option>Petits plaisirs</option>
             <option>Tartes</option>
                 <option>Entremets</option>
            </select>
         </div>
        <div class="form-group col-md-1">
            <label for="inputPassword4">Nb de parts</label>
             <select class="form-control" id="exampleFormControlSelect1">
                <option>6</option>
                <option>8</option>
                <option>12</option>
                 <option>+ de 12</option>
            </select>
         </div>

        <div class="form-group col-md-2">
            <label for="inputAddress">Date souhaitée</label>
            <input class="form-control" type="date" value="" id="date">
         </div>
    </div>
  
    <div class="form-row">
        <div class="form-group col-md-5">
             <label for="exampleFormControlTextarea1">Message / Détails de la commande</label>
             <textarea class="form-control" id="message" rows="5"></textarea>    
        </div>  
     </div>

    <div class="form-row">
        <div class="form-group col-md-2">
            <label for="inputCity">Nom</label>
            <input type="text" class="form-control" id="nom" required>
        </div>

        <div class="form-group col-md-2">
            <label for="inputState">Téléphone</label>
            <input type="text" class="form-control" id="telephone">
        </div>
     </div>

    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputZip">Email</label>
            <input type="email" class="form-control" id="email" placeholder="name@example.com">
        </div>
    </div>
    </form>
</main>

<div class="container">
    <section class="row">
		<div class="block-content large-block color-sky centered">
            <form method="post">
                <div class="form_row">
                    <input type="mail" name="txt_mail" id="txt_mail" placeholder="***@***.**" required />
                    <label for="txt_mail">Adresse Email :</label>
                </div>
                <div class="form_row">
                    <input type="password" name="txt_pass" id="txt_pass" placeholder="VotreMotDePasse" required />
                    <label for="txt_pass">Mot de passe :</label>
                </div>
                <div class="form_row_centered">
                    <input class="button margeless" type="submit" value="Se Connecter" name="adminconnect"/>
                </div>
            </form>
        </div>
    </section>
</div>

<?php require('views/templates/footer.php');?>