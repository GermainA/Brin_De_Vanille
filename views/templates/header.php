<!DOCTYPE html>
<html lang="fr">
  <head>
    <!-- Ici se trouvent les métadonnées pour le navigateur -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    

    <!-- Ici se trouvent les métadonnées pour le moteur de recherche (et le navigateur) -->
    <title><?php if(!empty($pageTitle)) echo $pageTitle.' - '; ?>Brin De Vanille</title>
    <meta
        name="description"
        content="Ce petit paragraphe sera affiché dans les SERP, juste sous le titre des pages."
    />

    <!-- Ici se trouvent les liens vers les fichiers favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo SITE_DIR;?>apple-touch-icon.png"/>
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo SITE_DIR;?>favicon-32x32.png"/>
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo SITE_DIR;?>favicon-16x16.png"/>
    <link rel="manifest" href="<?php echo SITE_DIR;?>site.webmanifest"/>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta name="msapplication-TileColor" content="#da532c"/>
    <meta name="theme-color" content="#ffffff"/>

    <!-- Ici se trouvent les liens vers les feuilles de styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu"/>
    <link rel="stylesheet" href="<?php echo SITE_DIR;?>assets/css/styles.min.css" />
  </head>

  <body> 
    <img src="assets/img/logo1.png" alt="Brin de vanille">
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
   