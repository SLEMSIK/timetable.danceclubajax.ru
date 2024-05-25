<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Расписание педагога</title>
    <link rel="stylesheet" href="assets/css/menu.css">
    <link rel="stylesheet" href="assets/css/timetable.css">
    <link rel="stylesheet" href="assets/css/popup.css">
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
                        
            ?>
                    
        </ul>
    </nav>
        
    <?php 
    $user_id = $_SESSION['user']['id'];
    $check_user = mysqli_query($connect, "SELECT * FROM `teachers` WHERE `user_id` = '$user_id' ");
    if (mysqli_num_rows($check_user) > 0) {

        $teacher = mysqli_fetch_assoc($check_user);
        $teacher_name = $teacher['name'];
                

    } else {
        die("Нет доступа к разделу!");
    }
    if(isset($_SESSION['date'])){}else{$_SESSION['2date'] = date('d.m.y'); $_SESSION['2date2'] = date('Y-m-d');}
    $date = date("Y-m-d", strtotime($_SESSION['2date2']));
    ?>

<div class="title">
        <h1 class="text-center py-3">Расписание педагога <?php echo $teacher_name; ?> на <?php echo $_SESSION['2date']; ?></h1> 
        <center>
        <form method="post" action="vendor/selectNewDateAtTimetableAdmin.php">
            <input  type="date" name="calendar" onchange="this.form.submit()" value="<?php echo date("Y-m-d", strtotime($_SESSION['2date2']));?>">
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
                
                $result_ms = mysqli_query($connect, "SELECT * FROM `timetable` WHERE  `date` = '$date' AND `teacher` = '$user_id '");      
                
                while($result = mysqli_fetch_assoc($result_ms)){

            ?>
                
                <tr>
                <th scope="row"><?php echo $result['title']; ?></th>
                    <td><?php echo $result['start_time']; ?></td>
                    <td><?php echo $result['end_time']; ?></td>
                    <td><?php echo $result['place']; ?></td>
                    <td><?php echo $result['teacher']; ?></td>
                    <td><?php echo $result['price']." ₽"; ?> </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>  
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', () => {

	// получаем все элементы с классом pushmenu
	const pushmenu = document.getElementsByClassName('pushmenu');

	// получаем элемент с классом hidden-overley
	const hiddenOverley = document.querySelector('.hidden-overley');

	// отслеживаем клик клика по оверлею
	hiddenOverley.addEventListener('click', (e) => {
		e.currentTarget.classList.toggle('show');
		document.querySelector('.sidebar').classList.toggle('show');
		document.querySelector('body').classList.toggle('sidebar-opened');
		for( i=0; i < pushmenu.length; i++ ){
				pushmenu[i].classList.toggle('open');
		}
	});

	const pushmenuFunction = function() {
		document.querySelector('.pushmenu').classList.toggle('open');
		document.querySelector('.sidebar').classList.toggle('show');
		document.querySelector('.hidden-overley').classList.toggle('show');
		document.body.classList.toggle('sidebar-opened')
	};

	// Отслеживаем клики кнопок с классом pushmenu 
	for( i=0; i < pushmenu.length; i++ ){
		pushmenu[i].addEventListener('click', pushmenuFunction, false);
	}

	// Получим все родительские элементы в меню
	const sidebarAccordeon = document.querySelectorAll('.sidebar .menu-parent-item a:first-child');
	const accordeonFunction =  function() { 
		this.parentNode.querySelector('ul').classList.toggle('show');
		this.querySelector('i').classList.toggle('rotate');
	}
	// Отслеживаем клики родительских пунктов меню 
	for( i=0; i < sidebarAccordeon.length; i++ ){
		sidebarAccordeon[i].addEventListener('click', accordeonFunction, false);
	}
});
</script>
</body>
</html>