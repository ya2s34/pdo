<?php

// Connexion à la base de données
include './connection2.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title>Créer un nouveau jeu</title>
</head>
<body>
    <h1 class="center-align">Créer un nouveau jeu</h1>
    <div class="container">
        <form action="insert2.php" method="POST" class="row">
            <div class="input-field col s12">
                <label for="nom">Nom :</label>
                <input type="text" name="nom" id="nom" required>
            </div>
            <div class="input-field col s12">
                <label for="console">Console :</label>
                <input type="text" name="console" id="console" required>
            </div>
            <div class="col s12 center-align">
                <input type="submit" value="Créer" class="btn">
            </div>
        </form>
    </div>
    <!-- Importation de Materialize JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
