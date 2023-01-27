<?php
include './connection2.php';

// $id = $_GET['id'];
$id = filter_input(INPUT_GET,'id');
$query = "SELECT * FROM `mes_jeux` WHERE id = :id";
$statement = $pdo->prepare($query);
$statement->bindParam(':id', $id, PDO::PARAM_INT);
$statement->execute();
$result = $statement->fetch(PDO::FETCH_ASSOC);

if (!$result) {
    echo "Aucun jeu trouvé avec cet ID, veuillez entrer un ID existant";
    exit();
}

?>

<form method="POST" action="./update2.php" class="container">
    <div class="card-panel">
        <h4 class="center-align">Modification de jeu</h4>
        <input type="hidden" name="id" value="<?= $result['id'] ?>">
        <div class="input-field">
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom" value="<?= $result['nom'] ?>">
        </div>
        <div class="input-field">
            <label for="console">Console</label>
            <input type="text" id="console" name="console" value="<?= $result['console'] ?>">
        </div>
        <div class="center-align">
            <input type="submit" name="update" value="Modifier" class="btn">
            <a href="./index2.php" class="btn">Retour à la liste des jeux</a>
        </div>
    </div>
</form>

