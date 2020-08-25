<?php

spl_autoload_register(function ($class) {
    include 'models/' . $class . '.php';
});

function indexAction () {

    $Bdd = new Bdd();
    $connection = $Bdd->getConnection();
    $Patisserie = new Patisserie();
    $Categorie = new Categorie ();
    $petitsplaisirs = 'Petits plaisirs' ;
    $petitsplaisirs = $Categorie -> selectIdCategorie ($connection, $petitsplaisirs);
    $petitsplaisirs = $petitsplaisirs -> fetch();
    $id_produit1 = $Categorie -> selectIdProduit ($connection, $petitsplaisirs ['id']);
    $tartes = 'Tartes' ;
    $tartes = $Categorie -> selectIdCategorie ($connection, $tartes);
    $tartes = $tartes -> fetch();
    $id_produit2 = $Categorie -> selectIdProduit ($connection, $tartes ['id']);
    $entremets = 'Entremets' ;
    $entremets = $Categorie -> selectIdCategorie ($connection, $entremets);
    $entremets = $entremets -> fetch();
    $id_produit3 = $Categorie -> selectIdProduit ($connection, $entremets ['id']);

    
    require('views/realisations/realisations.php');
}

function articleAction () {
    require('views/realisations/article.php');
}