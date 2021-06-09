<?php
     function getIp(){
        if(!empty($_SERVER['HTTP_CLIENT_IP'])){
          $ip = $_SERVER['HTTP_CLIENT_IP'];
        }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
          $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }else{
          $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
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
    <?php
        echo 'USER AGENT => '.$_SERVER['HTTP_USER_AGENT'].'<br>';
        echo 'IP => '.getIp();
        echo '<br> SERVEUR => '.$_SERVER['SERVER_NAME'].'<br>';
    ?>
</body>
</html>