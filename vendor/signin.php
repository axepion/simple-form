<?php
    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $password = md5($_POST['password']);

    $search_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
    $result_search_user = mysqli_num_rows($search_user);


    //init session

    if (!$result_search_user){
        $_SESSION['message'] = 'Некорректный логин или пароль';
        header('Location: ../index.php');
    } else {
        $user_data = mysqli_fetch_assoc($search_user);

        $_SESSION['user'] = [
            'id' => $user_data['id'],
            'full_name' => $user_data['full_name'],
            'login' => $user_data['login'],
            'email' => $user_data['email'],
            'photo' => $user_data['photo'],

        ];
       header('Location: ../profile.php');
    }




?>
