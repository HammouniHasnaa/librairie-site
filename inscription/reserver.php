<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleres.css">
</head>
<body>
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
    <h1>Reservation</h1>
    <form action="reserver.php" method="post">
        <div class="form-div">

            <fieldset>
                <legend>Details du Client</legend>
    
                <label for="name">Nom de l'utilisateur</label>
                <input type="text" name="nom" id="name" placeholder="Username" required>
    
                <label for="mdp">Numero de mobile</label>
                <input type="number" name="mobile" id="mdp" placeholder="Votre Numero" required>
    
               
    
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="examples@email.com" required>
            
            </fieldset>
    
            <fieldset>
                <legend>Details Reservation</legend>
    
                <label for="site">Date :</label>
                <input type="date" name="date" id="date" value="01/01/2023" placeholder="https://www.example.com" required>
    
                <label for="age">Age</label>
                <input type="number" name="age" id="age" placeholder="Age" required>
    
            
    
                <label for="dsc">Description :</label>
                <textarea name="dsc" id="dsc" cols="30" rows="10" placeholder="Vous pouvez décrire vos besoins ici"></textarea>
            </fieldset>
        </div>
        <div class="DFbottom">
            <fieldset class="bottom_F">
                <button type="submit" name="ok">Reserver</button>
            </fieldset>
        </div>
    </form>
    <?php
include("fonction.php");
if(isset($_POST['ok'])){
if(isset($_POST['nom']) and isset($_POST['mobile']) and isset($_POST['email']) and isset($_POST['date']) and isset($_POST['age']) and isset($_POST['dsc']) )
{
    if(!empty($_POST['nom']) and !empty($_POST['mobile']) and !empty($_POST['email']) and !empty($_POST['date'])and !empty($_POST['age']))
    {
        connexion();
        $sql1="insert into reservation (nom,mobile,email,date,age,description) values ('".$_POST['nom']."','".$_POST['mobile']."','".$_POST['email']."','".$_POST['date']."','".$_POST['age']."','".$_POST['dsc']."')";
        $bdd->exec($sql1);
      
        echo"<center> Soyez le bienvenue chez nous !!</cemter>";
    }
    else 
    echo "<center>Attention !! Remplir tous les champs avec des valeur non nulles</center>"; 
}
}
    ?>
</body>
</html>