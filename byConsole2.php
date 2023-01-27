<!DOCTYPE html>
<html>
<head>
    <title>Jeux par console</title>
    <!-- Ajout de Materialize CSS -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->
</head>
<body>

<?php
include './connection2.php';

// $console = $_GET['console'];
$console =filter_input(INPUT_GET,'console');
$query = "SELECT * FROM `mes_jeux` WHERE console = '$console' ORDER BY nom";
$statement = $pdo->query($query);
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="container">
    <h1 class="center-align">Jeux sur la console <?= $console ?></h1>

    <div class="row">
        <?php
        foreach ($result as $row) {
            echo '<div class="col s12 m6">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">' . $row['nom'] . '</span>
                        <p>' . $row['console'] . '</p>
                    </div>
                    <div class="card-action">
                        <a href="./showOne2.php?id=' . $row['id'] . '">Voir ce jeu en détail</a>
                        <a href="./form_update2.php?id=' . $row['id'] . '">Modifier</a>
                        <a href="./delete2.php?id=' . $row['id'] . '">Supprimer</a>
                    </div>
                </div>
            </div>';
        }
        ?>
    </div>

    <div class="center-align">
        <a href="./index2.php">Retour à la liste des jeux</a>
    </div>
</div>

<!-- Ajout de Materialize JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
