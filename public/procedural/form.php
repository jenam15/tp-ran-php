<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $prenom = htmlspecialchars($_POST['prenom'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');

    if ($prenom && $email) {
        $_SESSION['prenom'] = $prenom;
        $_SESSION['email'] = $email;
        echo "Bonjour $prenom, vous êtes enregistré.<br>";
        echo "<a href='exo-1.php'>Voir l'exercice PHP</a>";
        print_r($_SESSION);
        exit;
    } else {
        echo "Tous les champs sont requis.<br>";
    }
}
?>

<h1>Formulaire d'inscription</h1>
<form method="POST">
    <label>Prénom : <input type="text" name="prenom" required></label><br>
    <label>Email : <input type="email" name="email" required></label><br>
    <button type="submit">Envoyer</button>
</form>