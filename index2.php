<!DOCTYPE html>
<html>

<head>
    <title>Ma collection de jeux</title>
    <style>
        .card {
            width: 70%;
            margin: auto;
            margin-bottom: 2%;
        }

        .center-align {
            text-align: center;
            margin: 20px 0;
        }

        .center-align a {
            display: inline-block;
            margin: 10px;
            padding: 10px 20px;

        }

        .center-align a:hover {
            background-color: #FFBD40;
            /* Couleur de fond lorsque la souris est sur le lien */
        }
    </style>
</head>

<body>
    <h1 class="center-align">Ma collection de jeux</h1>
    <div class="container">
        <?php
        include './connection2.php';

        $query = "SELECT * FROM `mes_jeux` ORDER BY nom";
        $statement = $pdo->query($query);
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        foreach ($result as $row) {
        ?>
            <div class="card">
                <div class="card-content">
                    <p><?= $row['nom'] ?> sur la console <?= $row['console'] ?></p>
                </div>
                <div class="card-action">
                    <a href="./showOne2.php?id=<?= $row['id'] ?>">Voir ce jeu en détail</a>
                    <a href="./form_update2.php?id=<?= $row['id'] ?>">Modifier</a>
                    <a href="./delete2.php?id=<?= $row['id'] ?>">Supprimer</a>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
    <div class="center-align">
        <a href="./byConsole2.php?console=ps4">Voir tous les jeux PS4</a>
        <br>
        <a href="./byConsole2.php?console=switch">Voir tous les jeux Switch</a>
        <br>
        <a href="./byConsole2.php?console=xbox">Voir tous les jeux Xbox</a>
        <br>
        <a href="./form_insert2.php">Ajouter un jeu</a>
    </div>
</body>

</html>