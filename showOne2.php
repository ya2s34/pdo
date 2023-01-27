<?php
include './connection2.php';

if(isset($_GET['id'])) {
    // $id = $_GET['id'];
    $id = filter_input(INPUT_GET,'id');
    $query = "SELECT * FROM `mes_jeux` WHERE id = :id";
    $statement = $pdo->prepare($query);
    $statement->bindParam(':id', $id, PDO::PARAM_INT);
    $statement->execute();
    $result = $statement->fetch(PDO::FETCH_ASSOC);

    if($result) {
        echo "Mon jeu numéro : " . $result['id']. "<br>";
        echo "Nom : " . $result['nom']. "<br>";
        echo "Sur console : " . $result['console']. "<br>";
    } else {
        echo "Aucun jeu correspondant à cet ID, veuillez entrer un ID existant";
    }
} else {
    echo "Aucun ID n'a été fourni";
}
?>
<br>
<a href="./index2.php">Retour à la liste des jeux</a>