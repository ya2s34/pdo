<!DOCTYPE html>
<html>
<head>
    <style>
        .card {
            width: 50%;
            margin: 0 auto;
            text-align: center;
            padding: 20px;
            border-radius: 10px;
        }
        .btn {
            background-color: #FFBD40;
        }
    </style>
</head>
<body>
    <div class="card">
        <?php
        include './connection2.php';
            if (isset($_GET['id'])) {
                // $id = $_GET['id'];
                $id =filter_input(INPUT_GET,'id');
            $statement = $pdo->prepare("DELETE FROM `mes_jeux` WHERE id = :i");
            $statement->bindParam(':i', $id, PDO::PARAM_INT);
            $result = $statement->execute();

            if ($result) {
                echo "<h5>Le jeu a été supprimé avec succès</h5>";
            } else {
                echo "<h5>Une erreur s'est produite lors de la suppression</h5>";
            }
        } else {
            echo "<h5>Aucun id n'a été fourni</h5>";
        }
    ?>
    <br>
    <a class="btn waves-effect waves-light" href="./index2.php">Retour à la liste des jeux</a>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>