<?php

class Patisserie {
    public function ajoutPatisserie ($bdd , $id_admin , $titre , $tarif , $image , $description) {
        $req = $bdd->prepare("INSERT INTO produit (id_admin, titre, tarif, image, description) VALUES(:id_admin, :titre, :tarif, :image, :description)");
        $req->execute(array(
            'id_admin' => $id_admin,
            'titre' => $titre,
            'tarif' => $tarif,
            'image' => $image,
            'description' => $description
        ));

    }

}

?>
