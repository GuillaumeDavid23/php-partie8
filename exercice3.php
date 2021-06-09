<?php
    if(isset($_POST['user'])) // Si le formulaire a été envoyé...
    {
        setcookie('username', $_POST['user'], time() + 3600); // On créé le cookie, c'est IMPORTANT !
        header("Location: exercice3.php"); // Et on actualise la page pour que ce script marche à 100% !!!
    }
    if(isset($_POST['user'])) // Si le formulaire a été envoyé...
    {
        setcookie('password', $_POST['pass'], time() + 3600); // On créé le cookie, c'est IMPORTANT !
        header("Location: exercice3.php"); // Et on actualise la page pour que ce script marche à 100% !!!
    }   
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP partie 8</title>
</head>
<body>
    <form action="#" method="post">
        <label for="user">Username</label>
        <input type="text" name="user" id="user">
        <label for="pass">password</label>
        <input type="password" name="pass" id="pass">
        <button type="submit">Envoyer</button>
    </form>
    <a href="exercice4.php">Voir le résultat</a>
</body>
</html>