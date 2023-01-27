<?php
include './connection2.php';

if (isset($_POST['update'])) {
    $id = filter_input(INPUT_POST,'id');
    $nom = filter_input(INPUT_POST,'nom');
    $console = filter_input(INPUT_POST,'console');
    $statement = $pdo->prepare("UPDATE `mes_jeux` SET nom = :n, console = :c WHERE id = :i");
    $statement->bindParam(':i', $id, PDO::PARAM_INT);
    $statement->bindParam(':n', $nom, PDO::PARAM_STR);
    $statement->bindParam(':c', $console, PDO::PARAM_STR);
    $result = $statement->execute();

    if ($result) {
        echo "Le jeu a été mis à jour avec succès";
    } else {
        echo "Une erreur s'est produite lors de la mise à jour";
    }
} else {
    echo "Aucune mise à jour n'a été effectuée";
}
?>
<br>
<a href="./index2.php">Retour à la liste des jeux</a>