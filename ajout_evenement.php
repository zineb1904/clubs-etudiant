<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un événement</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; }
        form { max-width: 400px; margin: auto; background: #f4f4f4; padding: 20px; border-radius: 10px; }
        input, textarea { width: 100%; padding: 8px; margin: 5px 0; }
        button { background: blue; color: white; padding: 10px; border: none; cursor: pointer; }
    </style>
</head>
<body>

    <h2>Ajouter un événement</h2>
    
    <form action="traiter_evenement.php" method="post">
        <label for="titre">Titre de l'événement :</label>
        <input type="text" id="titre" name="titre" required>

        <label for="date">Date :</label>
        <input type="date" id="date" name="date" required>

        <label for="description">Description :</label>
        <textarea id="description" name="description" required></textarea>

        <button type="submit">Ajouter</button>
    </form>

</body>
</html>
