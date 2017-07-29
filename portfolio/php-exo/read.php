<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Randonnées</title>
    <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="icon" type="image/jpg" href="../../img/abdoulaye.jpg">
    <link rel="icon" type="image/x-icon" href="../../img/favicon.ico">
  </head>
  <body>
    <h1 style="margin-left: 15px;margin-bottom: 15px;">Liste des randonnées</h1>
    <a href="create.php" class="btn btn-primary" style="margin-left: 15px;margin-bottom: 15px;"> Ajouter une nouvelle randonnée </a> 
    <?php

      include("database.php");

      if (isset($_SESSION['login'], $_SESSION['mdp'])) {
        echo '<a href="logout.php" class="btn btn-danger" style="margin-left: 15px; margin-top: 20px;"> Se déconnecter </a>';
      }

      $randonnees = $bdd->query('SELECT * FROM hiking');

      $req = $bdd->prepare("INSERT INTO hiking (name, difficulty, distance, duration, height_difference, available) VALUES (?, ?, ?, ?, ?, ?)");
      $req->execute(array($_POST['name'], $_POST['difficulty'], $_POST['distance'], $_POST['duration'], $_POST['height_difference'], $_POST['available']));

      
      ?>
        
      
    <table class="table table-bordered table-striped table-responsive">
      <!-- Afficher la liste des randonnées -->
      <tr>
        <th> name </th>
        <th> difficulty </th>
        <th> distance (in km) </th>
        <th> duration </th>
        <th> height_difference (in m) </th>
        <th> available </th>
      </tr>

      <?php while ($donnees = $randonnees->fetch()) { ?>
      <tr>
        <td> <?php echo $donnees['name']; ?>  </td>
        <td> <?php echo $donnees['difficulty']; ?> </td>
        <td> <?php echo $donnees['distance']; ?> </td>
        <td> <?php echo $donnees['duration']; ?> </td>
        <td> <?php echo $donnees['height_difference']; ?> </td>
        <td> <?php echo $donnees['available']; ?> </td>
        <td> <?php $modifiedhikings = array($donnees);
        foreach ($modifiedhikings as $modifiedhiking) {
          echo '<a href="update.php?id='.$donnees['id'].'"> Modifier la randonnée </a>';
        } ?>
         </td>

        <td> <?php $marches = array($donnees);

        foreach ($marches as $marche) {
           echo '<a href="delete.php?id='.$donnees['id'].'"> Supprimer la randonnée </a>';
         } ?>
           
        </td>
      </tr>
      <?php
      }

      $randonnees->closeCursor();
    ?>
    </table>
    

  </body>
</html>
