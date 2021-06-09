<?php
    if(isset($_POST['pass'])) // Si le formulaire a été envoyé...
    {
        setcookie('password', $_POST['pass']); // On créé le cookie, c'est IMPORTANT !
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
        <label for="pass">Modifier votre mot de passe : </label>
        <input type="password" name="pass" id="pass">
        <button type="submit">Envoyer</button>
    </form>
    <?php
        print_r($_COOKIE);
        echo '<br>Cookie => '.$_COOKIE['password'];

    ?>
</body>
</html>