<?php

include("database.php");

$req = $bdd->prepare("SELECT login, mdp FROM users WHERE login = :login AND mdp = :mdp");

// si l'utilisateur remplit le formulaire et le valide
if (isset($_POST['username'], $_POST['password'], $_POST['button'])) {
    $login = htmlspecialchars($_POST['username']);
    $mdp = htmlspecialchars($_POST['password']);
    $_SESSION['login'] = $login;
    $_SESSION['mdp'] = $mdp;
    $req->execute(array('login' => $login, 'mdp' => $mdp));

    $connecteduser = $req->fetch();

    // si les identifiants de l'utilisateur ne figurent pas dans la base de données, on empêche la connexion et on le propose de s'inscrire
    if (!$connecteduser) {
      echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert">&times;</button>Utilisateur inconnu ! Vérifiez bien votre identifiant et votre mot de passe ! <a href="signup.php" class="alert-link"> S\'inscrire </a></div>';
    }
    else { // sinon, la session peut démarrer et l'utilisateur peut accéder à sa page membre personnelle
      session_start();
      $_SESSION['login'] = $connecteduser['login'];
      $_SESSION['mdp'] = $connecteduser['mdp'];
      header("Location: page_membre.php");
    }
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="icon" type="image/jpg" href="../../img/abdoulaye.jpg">
    <link rel="icon" type="image/x-icon" href="../../img/favicon.ico">
  </head>
  <body>
    <a href="index.php" class="btn btn-primary" style="margin-top: 25px; display: table; margin-left: 15px;"> Retour à l'accueil </a>

    <form action="" method="post" class="col-md-6" style="margin-top: 50px;">
      <div class="form-group">
        <label for="username">Identifiant</label>
        <input type="text" name="username" required class="form-control">
      </div>

      <div class="form-group">
        <label for="password">Mot de passe </label>
        <input type="password" name="password" required class="form-control">
      </div>

        <button type="submit" name="button" class="btn btn-primary">Se connecter</button>
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>