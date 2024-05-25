<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Профиль </title>
    <link rel="stylesheet" href="assets/css/menu.css">
</head>
<body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <nav class="top-menu">
        <a class="navbar-logo" href="https://danceclubajax.ru"><img src="https://static.tildacdn.com/tild6230-6464-4165-b663-366163356631/favicon.ico" width="60px"></a>
        <ul class="menu-main">
            <?php 
                if($_SESSION['user']['status'] == 0){
                    echo('<li><a href="/timetable.php">Расписание</a></li><li><a href="/lessons.php">Занятия</a><li><a href="/profile.php">Аккаунт</a></li>');}
                else{
                    if($_SESSION['user']['status'] == 1){
                        echo('<li><a href="/timetable.php">Расписание</a></li> <li><a href="/admin_timetable.php">Расписание педагога</a></li><li><a href="/lessons.php">Занятия</a></li><li><a href="/analytics.php">Аналитика</a></li><li><a href="/profile.php">Аккаунт</a></li>');
                    }
                    else{
                        if($_SESSION['user']['status'] == 2){
                            echo('<li><a href="/timetable.php">Расписание</a></li> <li><a href="/admin_timetable.php">Расписание педагога</a></li><li><a href="/admin_panel.php">Панель администратора</a></li><li><a href="/analytics.php">Аналитика</a></li><li><a href="/profile.php">Аккаунт</a></li>');
                        }else{
                        echo('<li><a href="/profile.php">Аккаунт</a></li>');
                        }
                    }
                }
                        
            ?>
                    
        </ul>
    </nav>
    <!-- Профиль 

    <form>

        <h2 style="margin: 10px 0;"><?= $_SESSION['user']['full_name'] ?></h2>
        <a href="#"><?= $_SESSION['user']['group'] ?></a>
        <a href="vendor/logout.php" class="logout">Выход</a>
    </form>-->
    
    <form action="/">
    <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://sun6-20.userapi.com/s/v1/ig1/5m-fx30S9InZ_MED5NdKNRKJiziFYykuHQKsaV1HCgSu5a-Xv4hZXEcsrKg-LOtV23g8vwFY.jpg?size=980x980&quality=96&crop=0,0,980,980&ava=1"><span class="font-weight-bold"><?= $_SESSION['user']['full_name'] ?></span><span class="text-black-50"><?= $_SESSION['user']['email'] ?></span><span class="text-black-50"><?= $_SESSION['user']['telegram'] ?></span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Настройки аккаунта</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-12"><label class="labels">Имя</label><input type="text" class="form-control" placeholder="<?= $_SESSION['user']['full_name'] ?>" value="<?= $_SESSION['user']['full_name'] ?>"></div>
                    <div class="col-md-12"><label class="labels">Фамилия И.О.</label><input type="text" class="form-control" placeholder="<?= $_SESSION['user']['name'] ?>" value="<?= $_SESSION['user']['name'] ?>"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Номер телефона</label><input type="text" class="form-control" placeholder="<?= $_SESSION['user']['phone'] ?>" value="<?= $_SESSION['user']['phone'] ?>"></div>
                    <div class="col-md-12"><label class="labels">Телеграмм</label><input type="text" class="form-control" placeholder="<?= $_SESSION['user']['telegram'] ?>" value="<?= $_SESSION['user']['telegram'] ?>"></div>
                    <div class="col-md-12"><label class="labels">Почта</label><input type="text" class="form-control" placeholder="<?= $_SESSION['user']['email'] ?>" value="<?= $_SESSION['user']['email'] ?>"></div>
                    <div class="col-md-12"><label class="labels">Сменить логин</label><input type="text" class="form-control" placeholder="<?= $_SESSION['user']['login'] ?>" value="<?= $_SESSION['user']['login'] ?>"></div>
                    <div class="col-md-12"><label class="labels">Сменить пароль</label><input type="text" class="form-control" placeholder="Пароль" value=""></div>
                </div>
                
                <div class="row mt-3">
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Сохранить данные</button></div></form>
                    <form action="vendor/logout.php"><div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Выйти из аккаунта</button></div></form>
            
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Статус аккаунта</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i><?php if($_SESSION['user']['status'] == -1){ echo("❌ Ожидает подтверждения");}else{echo("✔️ Подтверждён");}?></span></div><br>
            </div>
        </div>
    </div>
</div>
</div>
</div>

</body>
</html>