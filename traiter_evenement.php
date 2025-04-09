<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $titre = $_POST['titre'];
    $date = $_POST['date'];
    $description = $_POST['description'];

    // Sauvegarde dans un fichier texte (option simple)
    $fichier = fopen("evenements.txt", "a");
    fwrite($fichier, "$titre | $date | $description\n");
    fclose($fichier);

    // Redirection après ajout
    header("Location: evenements.php");
    exit();
}
?>
