<?php
include 'connection2.php';

// Récupération des données du formulaire
$nom=filter_input(INPUT_POST,'nom');
$console=filter_input(INPUT_POST,'console');

// Préparation de la requête d'insertion
$statement = $pdo->prepare("INSERT INTO mes_jeux (nom, console) VALUES (:nom, :console)");

// Liaison des valeurs
$statement->bindParam(':nom', $nom, PDO::PARAM_STR);
$statement->bindParam(':console', $console, PDO::PARAM_STR);

// Exécution de la requête
$result = $statement->execute();

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Ajout d'un jeu</title>
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->
    </head>
    <body>
        <div class="container center-align">
            <?php
            if ($result) {
                echo "<h4>Le jeu " . $nom . " a été créé avec succès.</h4>";
                echo "<a href='index2.php' class='waves-effect waves-light btn'>Retour à la liste des jeux</a>";
            } else {
                echo "<h4>Une erreur est survenue lors de la création du jeu</h4>";
            }
            ?>
        </div>
    </body>
</html>