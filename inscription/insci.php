<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <title>Gestion de form avec js</title>
    <link rel="stylesheet" href="awesome/css/all.min.css">
    <link rel="stylesheet" href="styleinscri.css">
    <script src="" async></script>
</head>
<body>
 
    <div class="contain">
    <header id="header">
            <div class="header">
                <img src="">
                <h1 id="titre">MH STORE</h1>
                <div class="navbar">
                    <nav class="">
                    <a href="/index/index.html">Accuil</a>
                    <a href="/inscription/insci.php">inscription</a>
                    <a href="/index/aboutus.html">About us</a>
                    <a href="/index/contactus.php">Contact us</a>
                    </nav>
                </div>
            </div>
            </header>
    <div class="body">
    <div class="container">
        <div class="header2">
            <h2>Créer un compte</h2>
        </div>
        
        <form class="form" id="form" action="insci.php" method="POST">
            <div class="form-control ">
                <label for="">Nom d'utilisateur</label>
                <input type="text" id="username" placeholder="nom" name="nom">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation"></i>
                <small>Message d'erreur</small>
            </div>
            <div class="form-control ">
                <label for="">Email</label>
                <input type="email" id="email" placeholder="email@gmail.com" name="email">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation"></i>
                <small>Message d'erreur</small>
            </div>
            <div class="form-control">
                <label for="">Mot de passe</label>
                <input type="password" id="password" placeholder="password" name="mdp">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation"></i>
                <small>Message d'erreur</small>
            </div>
            <div class="form-control">
                <label for="">Confirmation du mot de passe</label>
                <input type="password" id="password2" placeholder="password" name="confirmer">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation"></i>
                <small>Message d'erreur</small>
            </div>
            <button type="submit" value="s'inscrire" name="ok"> <i class="fas fa-user-plus"></i> S'inscrire</button>
        </form>
    </div>
</div>
<?php
  include('fonction.php');
  if(isset($_POST['ok'])){
  if(isset($_POST['nom']) and isset($_POST['email']) and isset($_POST['mdp']) and isset($_POST['confirmer']))
  {
      if(!empty($_POST['nom']) and !empty($_POST['email']) and !empty($_POST['mdp']) and !empty($_POST['confirmer']))
      {
      connexion();
      $sql1="select * from util where email='".$_POST['email']."'";
      $reponse = $bdd->query($sql1);
      $donnees = $reponse->fetch();
  
          if(empty($donnees))
          {   
              $sql2="insert into util(nom, email, password) values('".$_POST['nom']."','".$_POST['email']."','".$_POST['mdp']."')";
              $bdd->exec($sql2);
              var_dump($bdd);
              //deconnexion();
          echo "<center>Bienvenue ".$_POST['nom']." avec nous</center>";
          header("Location: login.php");
          }
          else
          echo "<center>Le compte existe déja !!!</center>";
       
      }
      else
      echo "<center>Attention !! Remplir tous les champs avec des valeur non nulles</center>"; 
  } 
}


?>
<footer class="footer">
    <div class="footer">
    <h1>MH Book Store</h1>
    <p>Follow us</p>
    <img src="/images/facebook.png" alt="">
    <img src="/images/twitter.png" alt="">

</div>
</footer>


</body>
</html>