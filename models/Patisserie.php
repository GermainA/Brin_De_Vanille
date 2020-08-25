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

    public function recupIdPatisserie ($bdd, $titre, $description) {

        $reqid = $bdd->prepare("SELECT * FROM produit WHERE titre = ? AND description = ?" );
        $reqid->execute(array ($titre, $description));
    
            return $reqid;

        
    }

    public function recupPatisserie ($bdd) {

        $reqid = $bdd->prepare("SELECT * FROM produit");
        $reqid->execute();
    
            return $reqid;
    }

    public function deletePatisserie ($bdd, $id) {

        $req = $bdd->prepare("DELETE FROM produit  WHERE id= $id ");
        $req->execute();

    }

    public function recupPatisserie2 ($bdd, $id_produit) {

        $reqid = $bdd->prepare("SELECT * FROM produit WHERE id = $id_produit");
        $reqid->execute();
    
            return $reqid;
    }

    public function updatepatisserie ($bdd, $id, $titre, $tarif, $description) {

    $req = $bdd->prepare("UPDATE produit SET  titre = :titre , tarif = :tarif , description = :description  WHERE id= $id ");
        $req->execute(array(
            'titre' => $titre,
            'tarif' => $tarif,
            'description' => $description
        ));
    }

    public function updateimage ($bdd, $id, $image) {

        $req = $bdd->prepare("UPDATE produit SET   image = :image WHERE id= $id ");
            $req->execute(array(
                'image' => $image
               
            ));
        }
}

?>
