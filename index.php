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
    <form action="vendor/signin.php" method="post">
        <label>Логин</label>
        <input type="text" name="login">
        <label>Пароль</label>
        <input type="password" name="password">
        <button type="submit">Войти</button>
        <p>
            Нет аккаунта? <a href="register.php">Зарегистрируйтесь!</a>
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