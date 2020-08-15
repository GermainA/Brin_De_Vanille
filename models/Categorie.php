<?php

class Categorie {
    public function selectionCategorie ($bdd) {

    $reqcategorie = $bdd->prepare("SELECT * FROM categorie" );
    $reqcategorie->execute();

        return $reqcategorie;
    }
}