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
            $erreur = 'Mauvais mot de passe';
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
    $Bdd = new Bdd();
    $connection = $Bdd->getConnection();
    $Patisserie = new Patisserie();
    $patisseries = $Patisserie -> recupPatisserie ($connection);
    $Categorie = new Categorie ();
    

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
        if ($imageFileType == "jpg" or $imageFileType == "png" or $imageFileType == "jpeg" and $_FILES["doc"]["size"] > 1000000) {
            $Patisserie = new Patisserie();
            $Categorie = new Categorie();
            $Patisserie -> ajoutPatisserie($connection , $_SESSION['id'] , $titre , $tarif , $target_file , $description);
            move_uploaded_file($_FILES["doc"]["tmp_name"], $target_file);
            $infoPatisserie = $Patisserie -> recupIdPatisserie ($connection, $titre, $description);
            $infoPatisserie = $infoPatisserie -> fetch();
            $infoCategorie = $Categorie -> selectIdCategorie ($connection, $categorie);
            $infoCategorie = $infoCategorie -> fetch();
            $Categorie -> ajoutCategorie ($connection, $infoCategorie ['id'], $infoPatisserie ['id']);
            $reussite = 'Votre pâtisserie a bien été ajouté';
        }
    } 
      
    require('views/admin/addcontent.php');
}

function editcontentAction()
{
    isConnected();
    $requestUri    = str_replace(SITE_DIR, '', $_SERVER['REQUEST_URI']);
    $requestParams = explode('/', $requestUri);
    $patisserieid  = isset($requestParams[2]) ? $requestParams[2] : null;
    $Bdd = new Bdd();
    $connection = $Bdd->getConnection();
    $Patisserie = new Patisserie();
    $infoPatisserie = $Patisserie -> recupPatisserie2 ($connection, $patisserieid);
    $infoPatisserie = $infoPatisserie -> fetch();
    $Categorie = new Categorie();
    $infoCategorie = $Categorie -> selectIdCategorie2 ($connection, $patisserieid);
    $infoCategorie = $infoCategorie -> fetch();
    $infoCategorie = $Categorie -> selectNomCategorie ($connection, $infoCategorie ['id_categorie']);
    $infoCategorie = $infoCategorie -> fetch();

    if (isset ($_POST ['updatecontent'])) {
        
        if (!empty ($_POST ['titre']) and !empty ($_POST ['content']) and !empty ($_POST ['tarif']) ) {
 
        $titre = $_POST ['titre'];
        $tarif = $_POST ['tarif'];
        $description = $_POST ['content'];
        $Patisserie -> updatepatisserie ($connection, $patisserieid, $titre, $tarif, $description); 
        

        }

        if (!empty ($_POST ['categorie'])) {
           $idcategorie = $Categorie -> selectIdCategorie ($connection, $_POST ['categorie']);
           $idcategorie = $idcategorie -> fetch();
           $Categorie -> updateCategorie ($connection, $patisserieid, $idcategorie['id']);
           
        }
        
            if (!empty ($_FILES['doc']["name"])) {
                unlink($infoPatisserie ['image']);
                $target_dir = "assets/imgclient/";
                $target_file = $target_dir . basename($_FILES['doc']["name"]);
                $Patisserie -> updateimage ($connection, $patisserieid, $target_file);
                move_uploaded_file($_FILES["doc"]["tmp_name"], $target_file);
        }

        header('Location:' . SITE_DIR . 'admin021995/editcontent/' . $patisserieid);
    }


    require('views/admin/editcontent.php');
}

function deleteAction () {

    $requestUri    = str_replace(SITE_DIR, '', $_SERVER['REQUEST_URI']);
        $requestParams = explode('/', $requestUri);
        $patisserieid     = isset($requestParams[2]) ? $requestParams[2] : null;
    $Bdd = new Bdd();
    $connection = $Bdd->getConnection();
    $Patisserie = new Patisserie();
    $Patisserie -> deletePatisserie ($connection, $patisserieid);
    header('Location:' . SITE_DIR . 'admin021995/content');

}