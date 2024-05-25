<?php

    session_start();
    require_once 'db_connect.php';

    $full_name = $_POST['full_name'];
    $login = $_POST['login'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $telegram = $_POST['telegram'];
    $group = $_POST['group'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm']; 
    $name = $_POST['name'];

    if ($password === $password_confirm) {

        $password = md5($password);

        mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `name`,`user_group`, `login`, `phone`,`telegram`, `email`, `password`, `status`) VALUES (NULL, '$full_name', '$name', '$group', '$login', '$phone','$telegram', '$email', '$password', -1);");

        $_SESSION['message'] = 'Регистрация прошла успешно!';
        header('Location: ../index.php');


    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../register.php');
    }

?>
