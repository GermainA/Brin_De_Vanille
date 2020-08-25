<?php

class Categorie {
    public function selectionCategorie ($bdd) {

    $reqcategorie = $bdd->prepare("SELECT * FROM categorie" );
    $reqcategorie->execute();

        return $reqcategorie;
    }

    public function selectIdCategorie ($bdd, $nom) {

        $reqcategorie = $bdd->prepare("SELECT * FROM categorie WHERE nom = ?" );
        $reqcategorie->execute(array($nom));
    
            return $reqcategorie;
        }

    public function ajoutCategorie ($bdd, $id_categorie, $id_patisserie) {

        $req = $bdd->prepare("INSERT INTO categorie_produit (id_categorie, id_produit) VALUES(:id_categorie, :id_produit)");
        $req->execute(array(
            'id_categorie' => $id_categorie,
            'id_produit' => $id_patisserie
            
        ));

    }

    public function selectNomCategorie ($bdd, $id) {

        $reqcategorie = $bdd->prepare("SELECT * FROM categorie WHERE id = ?" );
        $reqcategorie->execute(array($id));
    
            return $reqcategorie;
        }
    
    public function selectIdCategorie2 ($bdd, $id_produit) {

        $reqcategorie = $bdd->prepare("SELECT * FROM categorie_produit WHERE id_produit = ?" );
        $reqcategorie->execute(array($id_produit));
        
            return $reqcategorie;
        }

    public function selectIdProduit ($bdd, $id_categorie) {

        $reqcategorie = $bdd->prepare("SELECT * FROM categorie_produit WHERE id_categorie = ?" );
        $reqcategorie->execute(array($id_categorie));
        
            return $reqcategorie;
    }

    public function updateCategorie ($bdd, $id, $categorie) {

        $req = $bdd->prepare("UPDATE categorie_produit SET   id_categorie = :id_categorie WHERE id_produit = $id ");
            $req->execute(array(
                'id_categorie' => $categorie
               
            ));
        }
}



