<?php

spl_autoload_register(function ($class) {
    include 'models/' . $class . '.php';
});
function isConnected()
{
    session_start();
    if (!isset($_SESSION['mail'])) {
        header('Location:' . SITE_DIR . 'admin021995/');
    }
}

function indexAction()
{
    if (isset($_POST['adminconnect'])) {
        $mail = htmlspecialchars($_POST['txt_mail']);
        $motdepasse = htmlspecialchars($_POST['txt_pass']);
        $Bdd = new Bdd();
        $connection = $Bdd->getConnection();
        $Admin = new Admin();
        $adminexist = $Admin->verifMail($connection, $mail);
        $adminexist = $adminexist->fetch();
        if ($adminexist && password_verify($motdepasse, $adminexist['motdepasse'])) {
            session_start();
            $_SESSION['id'] = $adminexist['id'];
            $_SESSION['mail'] = $adminexist['mail'];
            header('Location:' . SITE_DIR . 'admin021995/content');
        } else {
            $erreur = 'Mauvais mots de passe';
        }
    }

    require('views/admin/loginadmin.php');
}

function inscriptionAction()
{
    if (isset($_POST['adminconnect'])) {
        $mail = htmlspecialchars($_POST['txt_mail']);
        $motdepasse = htmlspecialchars($_POST['txt_pass']);
        $hashedpass = password_hash($motdepasse, PASSWORD_DEFAULT);
        $Bdd = new Bdd();
        $connection = $Bdd->getConnection();
        $Admin = new Admin();
        $Admin->inscription($connection, $mail, $hashedpass);
    }

    require('views/admin/loginadmin.php');
}

function contentAction()
{
    isConnected();
    require('views/admin/content.php');
}

function addcontentAction()
{
    isConnected();
    $Bdd = new Bdd();
    $connection = $Bdd->getConnection();
    $Categorie = new Categorie();
    $selectionCategorie = $Categorie->selectionCategorie($connection);
    if (isset($_POST['addcontent'])) {
        $titre = htmlspecialchars($_POST['titre']);
        $categorie = htmlspecialchars($_POST['categorie']);
        $description = htmlspecialchars($_POST['content']);
        $tarif = htmlspecialchars($_POST['tarif']);
        $target_dir = "assets/imgclient/";
        $target_file = $target_dir . basename($_FILES['doc']["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        if ($imageFileType == "jpg" or $imageFileType == "png" or $imageFileType == "jpeg" and $_FILES["photoplat"]["size"] > 1000000) {
            $Patisserie = new Patisserie();
            $Patisserie -> ajoutPatisserie($connection , $_SESSION['id'] , $titre , $tarif , $target_file , $description);
            move_uploaded_file($_FILES["doc"]["tmp_name"], $target_file);
        }
    }
    require('views/admin/addcontent.php');
}

function editcontentAction()
{
    isConnected();
    require('views/admin/editcontent.php');
}
