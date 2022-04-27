<?php
    session_start();
    if ($_SESSION['user']){
        header('Location: profile.php');
    }
?>

<!DOCTYPE>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link href="assets/style.css" rel="stylesheet" type="text/css">
  <title>Авторизация</title>
 </head>
 <body>
    <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
        <label for="">ФИО</label>
        <input type="text" name="full_name">
        <label for="">Логин</label>
        <input type="text" name="login" id="">
        <label for="">Фото профиля</label>
        <input type="file" name="photo">
        <label for="">Почта</label>
        <input type="email" name="email">
        <label for="">Пароль</label>
        <input type="password" name="password">
        <label for="">Повторите пароль</label>
        <input type="password" name="password_confirm">
        <button type="submit">Отправить</button>
        <p>
            Есть аккаунт? <a href="index.php">Войдите!</a>
        </p>

            <?php
                if ($_SESSION['message']){
                    echo '<p class="msg">' . $_SESSION['message'] . '</p>';
                }
                unset($_SESSION['message']);
            ?>

    </form>
 </body>
</html>