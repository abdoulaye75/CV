<?php
include '../database/database.php';

	$req = $bdd->prepare("SELECT name, password FROM users WHERE name = :name AND password = :password");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Se connecter</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../CSS/signup.css">
</head>
<body>

    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="index.php"> Accueil</a></li>
            <li><a href="articles.php"> Liste des articles </a></li>
            <li><a href="recettes.php"> Fiches recette </a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="signup.php"> S'inscrire </a></li>
            <li><a href="signin.php"> Se connecter </a></li>
          </ul>
        </div>
      </div>
    </nav>

<?php
      $Username = htmlspecialchars($_POST['Username']);
       $Password = htmlspecialchars($_POST['Password']);
       $submit = $_POST['button'];

       if ((isset($Username)) && (isset($Password)) && (isset($submit))){
            // Si l'utilisateur remplit le formulaire et le valide
            
         // $_SESSION['name'] = $Username;
         // $_SESSION['password'] = $Password;
         $req->execute(array('name' => $Username,'password' => $Password));

         $connecteduser = $req->fetch();
        //si les identifiants de l'utilisateur ne figurent pas dans la base de données, on empêche la connexion et on le propose de s'inscrire
        if (!$connecteduser) {
          echo '<div class="alert alert-danger alert-dismissable"> <button type="button" class="close" data-dismiss="alert">&times;</button>
           <strong> Utilisateur inconnu ! Vérifiez bien votre identifiant et votre mot de passe !
            Sinon vous pouvez vous inscrire <a href="signup.php" class="alert-link"> ici </a> </strong> </div>';
        }
        else { // sinon, la session peut démarrer et l'utilisateur peut accéder à sa page membre personnelle
          session_start();
          $_SESSION['name'] = $connecteduser['name'];
          $_SESSION['password'] = $connecteduser['password'];
          header("Location: http://localhost/mini-CMS/views/page_membre.php");
        }
      }
    ?>

    <div class="conteneur">
      <h1 class="text-center">Connexion </h1> 
      <form class="mesonglet" method="post" action="">
        <div class="form-group">
          <label for="name"> Identifiant : </label>
          <input class="form-control" class="D"  placeholder="Identifiant" id="name" type="text" name="Username" required>
        </div>
        <div class="form-group">
          <label for="password"> Mot de passe : </label>
          <input class="form-control"  placeholder="Mot de passe" id="password" type="password" name="Password" required>
        </div>
        <button type="submit" name="button">Connexion</button>
        <a href="signup.php">S'inscrire ?</a>
        <a href="#">Mot de passe oublié ?</a>
      </form>
    </div>

</body>
</html>
