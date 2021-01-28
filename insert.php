<?php
    $bdd = new PDO('mysql:host=localhost;dbname=crud;charset=utf8', 'Root', 'Simplon974', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $reponse = $bdd->query('SELECT * FROM info');
    if (isset($_POST['nom'])) {
        $requete = 'INSERT INTO info VALUES(NULL, "' . $_POST['nom'] . '","' . $_POST['prenom'] . '","' . $_POST['tel'] . '")';
        $resultat = $bdd->query($requete);
    }
    ?>