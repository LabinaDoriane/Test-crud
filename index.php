





<?php
    $bdd = new PDO('mysql:host=localhost;dbname=crud;charset=utf8', 'Root', 'Simplon974', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $reponse = $bdd->query('SELECT * FROM info');
    while ($donnees = $reponse->fetch()) {
        echo '<form method="post">';
        echo '<input type="hidden" name="projet_id" value="' . $donnees['id'] . '">';
        echo '<input   type="text" name="md_nom_projet" value="' . $donnees['nom'] . '">';
        echo '<input   type="text" name="md_prenom_projet" value="' . $donnees['prenom'] . '">';
        echo '<input   type="text" name="md_tel_projet" value="' . $donnees['tel'] . '">';
        echo '<button class="mdl-button mdl-js-button mdl-button--icon type="submit" name="modifier">';
        echo '<i class="material-icons">edit</i>
        </button>';

        echo '<button class="mdl-button mdl-js-button mdl-button--icon type="submit" name="supprimer"">
        <i class="material-icons">delete_forever</i>
      </button> ' . '<br/>';
        echo '</form>';
        //SUPPRIMER DES DONNES
        if (isset($_POST['supprimer'])) {
            $requete = 'DELETE FROM info WHERE id="' . $_POST['projet_id'] . '"';
            $resultat = $bdd->query($requete);
        }
        //MODIFIER DES DONNES
        if (isset($_POST['modifier'])) {
            $requete = 'UPDATE info SET nom_projet="' . $_POST['md_nom_projet'] . '" WHERE ID="' . $_POST['projet_id'] . '"';
            $resultat = $bdd->query($requete);
        }
    }
    ?>	