<?php
    session_start();
    if (!$_SESSION['user']){
        header("Location: /index.php");
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="assets/style.css" rel="stylesheet" type="text/css">
    <title>Your Profile</title>
</head>
<body>
    <div class="profile-block">
        <div class="profile-block__avatar">
            <img src="<?=$_SESSION['user']['photo']?>">
        </div>
        <div class="profile-block__info">
            <h2>ФИО: <?=$_SESSION['user']['full_name']?></h2>
            <p>EMAIL: <?=$_SESSION['user']['email']?></p>
            <p>LOGIN: <?=$_SESSION['user']['login']?></p>
            <p>ID: <?=$_SESSION['user']['id']?></p>
        </div>
        <a href="vendor/logout.php">Выйти</a>
    </div>

</body>
</html>