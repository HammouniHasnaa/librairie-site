<?php
// Fonction pour la connexion au serveur et à la base de données
function connexion1() {
    try {
        global $bdd;
        $bdd = new PDO("mysql:host=localhost;dbname=papetrie;charset=utf8", 'root', '');
    
    } catch (Exception $e) {
        print "Erreur : " . $e->getMessage();
        die;
    }
}

// Appel de la fonction pour tester la connexion