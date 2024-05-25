<?php
    session_start();
    if ($_SESSION['user']) {
        header('Location: profile.php');
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

    <!-- Форма регистрации -->

    <form action="vendor/signup.php" method="post">
        <label>ФИО</label>
        <input type="text" name="full_name" placeholder="Введите свое полное имя">
        <label>ФИО сокращённо</label>
        <input type="text" name="name" placeholder="Введите свою фамилию и имя сокращённо">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Номер телефона</label>
        <input type="telephone" name="phone" placeholder="Введите номер телефона">
        <label>Почта</label>
        <input type="email" name="email" placeholder="Введите адрес своей почты">
        <label>Телеграмм</label>
        <input type="text" name="telegram" placeholder="Введите свой телеграам">
        <label>Ваша группа</label>
        <select name="group" id="city-select">
            <option value="">-- Выберите группу --</option>
            <option value="bebi">Беби</option>
            <option value="hbt_ml">ШБТ - младшие</option>
            <option value="hbt_sr">ШБТ - средние</option>
            <option value="hbt_st">ШБТ - старшие</option>
            <option value="hst_ml">ШСТ - младшие</option>
            <option value="hst_sr">ШСТ - средние</option>
            <option value="hst_st">ШСТ - старшие</option>
        </select>
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <label>Подтверждение пароля</label>
        <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
        <button type="submit">Войти</button>
        <p>
            У вас уже есть аккаунт? - <a href="/">авторизируйтесь</a>!
        </p>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>

</body>
</html>