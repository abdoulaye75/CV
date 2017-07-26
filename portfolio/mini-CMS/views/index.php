<?php

  include 'database/database.php';
  session_start();

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Accueil</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../CSS/accueil.css">
  <link rel="icon" type="image/jpg" href="../../../img/abdoulaye.jpg">
  <link rel="icon" type="image/x-icon" href="../../../img/favicon.ico">
  </head>
  <body>

  <?php include 'nav.php'; ?>

    <section>
      <h1 class="text-center"> Recettes de cuisine </h1>
      <p class="text-center"> Vous pouvez consulter la liste des articles, en ajouter, en modifier et en supprimer si vous êtes inscrit ou connecté. </p>
    </section>    
  </body>
</html>
