<?php
    session_start();
    require_once 'connect.php';

    $full_name = $_POST['full_name'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $password_confirm = md5($_POST['password_confirm']);
    $path_img = "uploads/" . time() . $_FILES['photo']['name'];

    if ($password === $password_confirm){

        move_uploaded_file($_FILES['photo']['tmp_name'], "../" . $path_img);
        mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `photo`) VALUES (NULL, '$full_name', '$login', '$email', '$password', '$path_img')");

        $_SESSION['message'] = "Регистрация прошла успешно. Войдите в аккаунт";
        header('Location: ../index.php');

    } else {

        $_SESSION['message'] = "Пароли не совпадают";
        header('Location: ../register.php');
    }


?>
