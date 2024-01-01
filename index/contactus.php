<html>
    <head>
        <title>Contact us</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="stylesite.css">
        <script language="JavaScript">
            function verifier(){
                if(document.getElementById("name").value==""){
                    alert("veuiller taper votre nom svp!!");
                    return false;
                }
                if(document.getElementById("email").value==""){
                    alert("veuiller taper votre email svp!!");
                    return false;
                }
                if(document.getElementById("email").value.indexOf('@')==-1){
                    alert("Adresse mail est incorrect!!!");
                    return false;
                }
            }

        </script>
    </head>
    <body class="contact-body">
        
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

        <div class="contact-form">
            <h1>Contact Us</h1>
            <div class="container-contact">
                <div class="main">
                    <div class="content">
                        <h2>Contact Us</h2>
                        <form action="contactus.php" method="post" onsubmit="verifier()">
                            <input type="text" name="name" placeholder=" Enter Your Name" id="name">
                            <input type="email" name="email" placeholder=" Enter Your Email" id="email">
                            <textarea name="message" placeholder="Your message"></textarea>
                            <button type="submit" name="ok" class="btn">Send</button>
                        </form>
                    </div>
                        
                    <div class="form-img">
                            <img src="/images/télécharger (13).jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="footer">
            <h1>MH Book Store</h1>
            <p>Follow us</p>
            <img src="/images/facebook.png" alt="">
            <img src="/images/twitter.png" alt="">

        </div>
        </footer>
        <?php
  include('fonctions.php');
  if(isset($_POST['ok'])){
  if(isset($_POST['name']) and isset($_POST['email']) and isset($_POST['message']))
  {
      if(!empty($_POST['name']) and !empty($_POST['email']) and !empty($_POST['message']))
      {
      connexion1();
              $sql2="insert into contact (nom, email, message) values('".$_POST['name']."','".$_POST['email']."','".$_POST['message']."')";
              $bdd->exec($sql2);
              var_dump($bdd);
              //deconnexion();
          echo "<center>Merci ".$_POST['name']." pour votr message</center>";
          header("Location: index.php");
        
      }
      else
      echo "<center>Attention !! Remplir tous les champs avec des valeur non nulles</center>"; 
  } 
}

?>

    </body>
</html>