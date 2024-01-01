<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login Form</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="stylelogin.css">
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
        <div class="page">
           
            <div class="container-login">
                <div class="left">
                    <div class="login">Sign In</div>
                    <div class="eula">Welcome back! Please login to access the content.</div>
                </div>

                <div class="right">
                    <form class="form" action="login.php" method="post">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="pass">
                        <button type="submit" id="submit" value="Submit">SUBMIT</button>
                    </form>
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
        include('fonction.php');
        connexion();
        $reponse=$bdd->query('SELECT * FROM util');
        $authentification=false;
        while($donee=$reponse->fetch()){
            $login=$donee['email'];
            $pass=$donee['password'];
            if($_POST['email']==$login AND $_POST['pass']==$pass){
                $authentification=true;
                header("Location: reserver.php");
            }
            if($authentification==false){
                echo("incorrect!!!!!!!!!");
            }
        }

        
        ?>
    </body>
</html>