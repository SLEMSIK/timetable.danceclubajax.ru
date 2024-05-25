<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Расписание</title>
    <link rel="stylesheet" href="assets/css/timetable.css">
    <link rel="stylesheet" href="assets/css/menu.css">
    <script src="assets/js/selectNewDate.js"></script>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<body>
    <nav class="top-menu">
        <a class="navbar-logo" href="https://danceclubajax.ru"><img src="https://static.tildacdn.com/tild6230-6464-4165-b663-366163356631/favicon.ico" width="60px"></a>
        <ul class="menu-main">
            <?php 
                session_start();
                require_once 'vendor/db_connect.php'; 
                if($_SESSION['user']['status'] == 0){
                    echo('<li><a href="/timetable.php">Расписание</a></li><li><a href="/lessons.php">Занятия</a><li><a href="/profile.php">Аккаунт</a></li>');}
                else{
                    if($_SESSION['user']['status'] == 1){
                        echo('<li><a href="/timetable.php">Расписание</a></li> <li><a href="/admin_timetable.php">Расписание педагога</a></li><li><a href="/lessons.php">Занятия</a></li><li><a href="/analytics.php">Аналитика</a></li><li><a href="/profile.php">Аккаунт</a></li>');
                    }else{
                        if($_SESSION['user']['status'] == 2){
                            echo('<li><a href="/timetable.php">Расписание</a></li> <li><a href="/admin_timetable.php">Расписание педагога</a></li><li><a href="/admin_panel.php">Панель администратора</a></li><li><a href="/analytics.php">Аналитика</a></li><li><a href="/profile.php">Аккаунт</a></li>');
                        }else{
                        echo('<li><a href="/profile.php">Аккаунт</a></li>');
                        }
                    }
                }
                        


                if(isset($_SESSION['date'])){}else{$_SESSION['date'] = date('d.m.y'); $_SESSION['date2'] = date('Y-m-d');}  
            ?>
                    
        </ul>
    </nav>
    <div class="title">
        <h1 class="text-center py-3"><?php if($_SESSION['user']['status'] == 2){echo "Общее расписание";}else{echo"Расписание";}?> занятий на <?php echo $_SESSION['date']; ?></h1> 
        <center>
        <form method="post" action="vendor/selectNewDateAtTimetable.php">
            <input  type="date" name="calendar" onchange="this.form.submit()" value="<?php echo date("Y-m-d", strtotime($_SESSION['date2']));?>">
        <form>
        </center>
    </div>
    <div class="container py-5">
        
        <table class="table table-striped text-center">
            <thead class="table-purple">
                <tr>
                    <th scope="col">Занятие</th>
                    <th scope="col">Время начала</th>
                    <th scope="col">Время конца</th>
                    <th scope="col">Зал</th>
                    <th scope="col">Педагог</th>
                    <th scope="col">Стоимость</th>
                </tr>
            </thead>
            <tbody>
            <?php   
            
            
                $user_group = $_SESSION['user']['group'];
                $date = $_SESSION['date2'];
                if($_SESSION['user']['status']==2){
                    $result_ms = mysqli_query($connect, "SELECT * FROM `timetable` WHERE  `date` = '$date'");      
                }
                else{
                $result_ms = mysqli_query($connect, "SELECT * FROM `timetable` WHERE  `date` = '$date' AND `user_group` = '$user_group' or `date` = '$date' AND `user_group` = 'all'");      
                }
                while($result = mysqli_fetch_assoc($result_ms)){
                    $teacher = $result['teacher'];
                    $result1 = mysqli_query($connect, "SELECT `name` FROM `users` WHERE `id` = '$teacher'");
                    $name = mysqli_fetch_assoc($result1);
                    
                    
            ?>
                <tr>
                <th scope="row"><?php echo $result['title']; ?></th>
                    <td><?php echo $result['start_time']; ?></td>
                    <td><?php echo $result['end_time']; ?></td>
                    <td><?php echo $result['place']; ?></td>
                    <td><?php echo $name['name'] ?></td>
                    <td><?php echo $result['price']." ₽"; ?> </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>  
    </div>
</body>