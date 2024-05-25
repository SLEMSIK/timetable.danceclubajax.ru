<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Занятия</title>
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
                session_start();
                require_once 'vendor/db_connect.php'; 
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
                
                $week_ago = date("Y-m-d", strtotime("-1 week"));
                $two_week_ago = date("Y-m-d", strtotime("-2 week"));
                $today = date("Y-m-d");
                $sql = mysqli_query($connect, "SELECT COUNT(*) FROM `timetable` WHERE `date` >= '$today' AND `date` <= '$week_ago'");      
                $result = mysqli_fetch_assoc($sql);
                echo($result);
            ?>
              
              
        </ul>
    </nav>


</body>
</html>