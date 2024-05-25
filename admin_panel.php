<!DOCTYPE html>
<html lang="en">
<head>
    <?php session_start();?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Панель управления</title>
    <link rel="stylesheet" href="assets/css/menu.css">

    <script type="text/javascript">
        var host = "bootadmin.org";
        if ((host == window.location.host) && (window.location.protocol != "https:"))
            window.location.protocol = "https";
    </script>
     <meta content="Bootadmin" property="og:site_name">
    <meta content="Bootadmin" property="og:title">
    <meta content="website" property="og:type">
    <meta content="Bootadmin is an open source bootstrap admin panel." property="og:description">
    <meta name="keywords" content="bootstrap, admin, theme, panel, administration, material">
    
    
    <meta content="/images/logo.png" property="og:image">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@iamshipon1988">
    <meta name="twitter:creator" content="@iamshipon1988">
    
    <meta name="twitter:title" content="Bootadmin">
    
    
    <meta name="twitter:description" content="An opensource bootstrap admin panel.">
    

    <!-- Le App Banner Data -->
    <meta name="apple-itunes-app" content="app-id=1245521413">
    <!--<meta name="apple-itunes-app" content="app-id=1245521413, affiliate-data=myAffiliateData, app-argument=myURL">-->

    <!-- Le Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Le CSS
    ================================================== -->
    <link rel="stylesheet" href="https://bootadmin.org/style/vendor/library.min.css">
    <link rel="stylesheet" href="https://bootadmin.org/style/vendor/jqueryui-flat/jquery-ui.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    
    
    <link rel="stylesheet" href="https://bootadmin.org/style/core/style.min.css">

    <!-- Le IE Conditionals
    ================================================== -->
    <!--[if lt IE 9]>
	    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le Javascript Pre-loads
    ================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Le Page Specific Codes
    ================================================== -->
    

	<!-- Le Favicons
	================================================== -->
    <link rel="apple-touch-icon" sizes="76x76" href="/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/images/favicon/site.webmanifest">
    <link rel="mask-icon" href="/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/images/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="msapplication-config" content="/images/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="/assets/css/admin_panel.css">

</head>
<body id="landing" class="sidebar-open">
    <!--
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <nav class="top-menu">
        <a class="navbar-logo" href="/"><img src="https://static.tildacdn.com/tild6230-6464-4165-b663-366163356631/favicon.ico" width="60px"></a>
        <ul class="menu-main">
            <li><a href="/timetable.php">Аналитика занятий</a></li>
            <li><a href="/timetable.php">Генерация отчёта о работе</a></li>
            <li><a href="/lessons.php">Настройки пользователей</a></li>
            <li><a href="/profile.php">Отправка уведомлений о занятих</a></li>
            <li><a href="/profile.php">Управление ВППО</a></li>
        </ul>
    </nav>
    !-->
    <div class="loading">
    <div class="loading-center"><img src="https://static.tildacdn.com/tild6137-6533-4165-a330-373733393536/ajaxdance.png" alt="Loading" /></div>
</div>
<div class="page-container animsition">
    <div id="dashboardPage">
        

<!-- Main Menu -->
<div class="topbar">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5 hidden-xs">
                <div class="logo">
                    <a href="/">
                        <span class="logo-emblem"><img src="https://static.tildacdn.com/tild6230-6464-4165-b663-366163356631/favicon.ico" alt="BA" /></span>
                        <span class="logo-full">Управление</span>
                    </a>
                </div>
                <a href="#" class="menu-toggle wave-effect">
                    <i class="feather icon-menu"></i>
                </a>
            </div>
            <div class="col-md-7 text-right">
                <ul>
                    <li class="btn-group user-account">
                        <a href="javascript:;" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="user-content">
                                <div class="user-name"><?php echo $_SESSION['user']['name'];?></div>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="/account/profile" class="animsition-link dropdown-item wave-effect"><i class="feather icon-user"></i> Профиль</a></li>
                            <li><a href="/account/settings" class="animsition-link dropdown-item wave-effect"><i class="feather icon-settings"></i> Настройки</a></li>
                            <li><a href="/login" class="animsition-link dropdown-item wave-effect"><i class="feather icon-log-in"></i>Выйти</a></li>
                        </ul>
                    </li>
                        
                       
                        <li class="mobile-menu-toggle">
                            <a href="#" class="menu-toggle wave-effect">
                                <i class="feather icon-menu"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

   
    <!-- Main Menu -->
    <div class="sidebar">
        <div class="logo">
            <a href="/">
                <span class="logo-emblem"><img src="https://static.tildacdn.com/tild6230-6464-4165-b663-366163356631/favicon.ico" alt="BA" /></span>
                <span class="logo-full">Управление</span>
            </a>
    </div>
    <ul id="sidebarCookie">
        <li class="spacer"></li>
        <li class="spacer"></li>
        <li class="title">
            <i class="feather icon-more-horizontal"></i>
            <span class="menu-title">Главная</span>
        </li>
        <li class="nav-item">
            <a class="nav-link wave-effect collapsed wave-effect" data-parent="#sidebarCookie" data-toggle="collapse" href="#navDashboard" aria-expanded="false" aria-controls="page-dashboards">
                <i class="feather icon-grid"></i>
                <span class="menu-title">Панель управления</span>
                <i class="feather icon-chevron-down down-arrow"></i>
            </a>
            <div class="collapse" id="navDashboard">
                <ul class="flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link wave-effect" href="/admin_panel.php">
                            <i class="feather icon-layout"></i>
                            <span class="menu-title">Общее</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link wave-effect" href="/admin_panel_users.php">
                            <i class="feather icon-layout"></i>
                            <span class="menu-title">Пользователи</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link wave-effect" href="/admin_panel_applications.php">
                            <i class="feather icon-shopping-bag"></i>
                            <span class="menu-title">Заявки</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link wave-effect" href="admin_panel_timetable.php">
                            <i class="feather icon-shopping-bag"></i>
                            <span class="menu-title">Расписание</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link wave-effect" href="admin_panel_message.php">
                            <i class="feather icon-shopping-bag"></i>
                            <span class="menu-title">Рассылка</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <!-- 
        <li class="nav-item">
            <a class="nav-link wave-effect collapsed" data-parent="#sidebarCookie" data-toggle="collapse" href="#navPageLayouts" aria-expanded="false" aria-controls="page-layouts">
                <i class="feather icon-sidebar"></i>
                <span class="menu-title">Функционал</span>
                <i class="feather icon-chevron-down down-arrow"></i>
            </a>
            <div class="collapse" id="navPageLayouts">
                <ul class="flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link wave-effect" href="http://bootadmin.org/">
                            <i class="feather icon-copy"></i>
                            <span class="menu-title">Функционал пользователей</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link wave-effect" href="http://bootadmin.org/boxed">
                            <i class="feather icon-bold"></i>
                            <span class="menu-title">Функционал ассистентов</span>
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link wave-effect" href="http://bootadmin.org/horizontal">
                            <i class="feather icon-pause"></i>
                            <span class="menu-title">Настройки администрации</span>
                        </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link js-darkSidebar wave-effect" href="javascript: void();">
                            <i class="feather icon-pause"></i>
                            <span class="menu-title">Темная тема бара</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="title">
            <i class="feather icon-more-horizontal"></i>
            <span class="menu-title">Дополнительно</span>
        </li>
        <li class="nav-item">
            <a class="nav-link wave-effect collapsed" data-parent="#sidebarCookie" data-toggle="collapse" href="#navMailbox" aria-expanded="false" aria-controls="page-mailbox">
                <i class="feather icon-mail"></i>
                <span class="menu-title">Почта</span>
                <i class="feather icon-chevron-down down-arrow"></i>
            </a>
            <div class="collapse" id="navMailbox">
                <ul class="flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link wave-effect" href="http://bootadmin.org/app/inbox">
                            <i class="feather icon-inbox"></i>
                            <span class="menu-title">Ящики</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link wave-effect" href="http://bootadmin.org/app/inbox/email">
                            <i class="feather icon-mail"></i>
                            <span class="menu-title">Почта</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link wave-effect" href="http://bootadmin.org/app/inbox/compose">
                            <i class="feather icon-send"></i>
                            <span class="menu-title">Резервные копии</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a href="http://bootadmin.org/app/calendar" class="nav-link wave-effect nav-single">
                <i class="feather icon-calendar"></i>
                <span class="menu-title">Календарь</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="http://bootadmin.org/app/calendar" class="nav-link wave-effect nav-single">
                <i class="feather icon-copy"></i>
                <span class="menu-title">Управление ВППО</span>
            </a>
        </li>
    </ul>
    !-->
</div>

        <main>
            <div class="page-breadcrumb">
    <div class="row">
        <div class="col-6">
            <h4 class="page-title">Панель управления</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Основное</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Панель администратора</li>
                </ol>
            </nav>
        </div>
        
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <!-- column -->
        <div class="col-sm-12 col-lg-4">
            <div class="card card-hover">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="mr-4">
                            <?php 
                                require_once('vendor/db_connect.php');
                                $week_ago = date("Y-m-d", strtotime("-1 week"));
                                $two_week_ago = date("Y-m-d", strtotime("-2 week"));
                                $month_ago = date("Y-m-d", strtotime("-1 month"));
                                $two_month_ago = date("Y-m-d", strtotime("-2 month"));
                                $today = date("Y-m-d");
                                $work_at_week = 0;
                                $two_work_at_week = 0;
                                $work_at_month = 0;
                                $work_two_at_month = 0;
                                $sql = mysqli_query($connect, "SELECT * FROM `timetable`");      

                                while($result = mysqli_fetch_assoc($sql)){
                                    if($result['date'] <= $today){
                                        if($result['date'] >= $week_ago){
                                            $work_at_week++;
                                        }
                                    }

                                    if($result['date'] <= $week_ago){
                                        if($result['date'] >= $two_week_ago){
                                            $two_work_at_week++;
                                        }
                                    }

                                    if($result['date'] <= $today){
                                        if($result['date'] > $month_ago){
                                            $work_at_month++;
                                        }
                                    }

                                    if($result['date'] <= $month_ago){
                                        if($result['date'] >= $two_month_ago){
                                            $work_two_at_month++;
                                        }
                                    }
                                    
                                }
                                

                                
?>
                            <small>Всего занятий за неделю</small> 
                            <h4 class="mb-0"><?php echo $work_at_week; ?></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- column -->
        <div class="col-sm-12 col-lg-4">
            <div class="card card-hover">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="mr-4">
                            <small>Всего занятий за прошлую неделю</small>
                            <h4 class="mb-0"><?php echo $two_work_at_week; ?></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- column -->
        <div class="col-sm-12 col-lg-4">
            <div class="card card-hover bg-green">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="mr-4">
                            <small>Общий доход за неделю</small>
                            <?php 
                                $sql4 = mysqli_query($connect, "SELECT * FROM `timetable`");
                                $oplata = 0;
                                while($result_sql4 = mysqli_fetch_assoc($sql4) ){
                                    if($result_sql4['date'] > $week_ago){
                                        if($result_sql4['date'] <=  $today){
                                            $oplata = $oplata + $result_sql4['price'];
                                        }
                                    }
                                }?>
                            <h4 class="mb-0"><?php echo $oplata;?> ₽	</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <!-- column -->
         <div class="col-sm-12 col-lg-4">
            <div class="card card-hover">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="mr-4">
                            <small>Всего занятий за месяц</small>
                            <h4 class="mb-0"><?php echo $work_at_month; ?></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- column -->
        <div class="col-sm-12 col-lg-4">
            <div class="card card-hover">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="mr-4">
                            <small>Всего занятий за прошлый месяц</small>
                            <h4 class="mb-0"><?php echo $work_two_at_month; ?></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- column -->
        <div class="col-sm-12 col-lg-4">
            <div class="card card-hover bg-green">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="mr-4">
                            <small>Общий доход за месяц</small>
                            <?php 
                                $sql4 = mysqli_query($connect, "SELECT * FROM `timetable`");
                                $oplata = 0;
                                while($result_sql4 = mysqli_fetch_assoc($sql4) ){
                                    if($result_sql4['date'] > $month_ago){
                                        if($result_sql4['date'] <= $today){
                                            $oplata = $oplata + $result_sql4['price'];
                                        }
                                        
                                    }
                                }?>
                            <h4 class="mb-0"><?php echo $oplata;?> ₽	</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <!-- title -->
                    <div class="d-md-flex align-items-center">
                        <div>
                            <h4 class="card-title">Уроки ассистентов (месяц)</h4>
                        </div>
                    </div>
                    <!-- title -->
                </div>
                <div class="table-responsive">
                    <table class="table v-middle">
                        <thead>
                            <tr class="bg-light">
                                <th class="border-top-0">Ассистент</th>
                                <th class="border-top-0">Название</th>
                                <th class="border-top-0">Ученик/Ученики</th>
                                <th class="border-top-0">Дата</th>
                                <th class="border-top-0">Время начала</th>
                                <th class="border-top-0">Время конца</th>
                                <th class="border-top-0">Цена</th>
                                <th class="border-top-0">Оплата</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $result_ms = mysqli_query($connect, "SELECT * FROM `timetable` WHERE  `teacher` != '4'  AND `teacher` != '3'");      
                            while($result = mysqli_fetch_assoc($result_ms)){
                                if($result['date'] > $month_ago){
                                $teacher = $result['teacher'];
                                $result1 = mysqli_query($connect, "SELECT `name` FROM `users` WHERE `id` = '$teacher'");
                                $name = mysqli_fetch_assoc($result1);

                                
                                ?>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="">
                                            <h4 class="m-b-0 font-16"><?php echo $name['name'] ?></h4>
                                        </div>
                                    </div>
                                </td>
                                <td><?php echo $result['title']?></td>
                                
                                <td><?php if($result['user_group'] == 'indv'){echo $result['student'];}else{echo("Групповое занятие");}?></td>
                                <td><?php echo $result['date'];?></td>
                                <td><?php echo $result['start_time'];?></td>
                                <td><?php echo $result['end_time'];?></td>
                                <td><?php echo $result['price'];?> ₽</td>
                                <td>
                                    <h5 class="m-b-0"><?php echo $result['price']-200;?> ₽</h5>
                                </td>
                            </tr>
                            <?php }
                        }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- column -->
        <div class="col-lg-6">
            <div class="card card-hover">
                <div class="card-body">
                    <h4 class="card-title">Работа ассистентов (месяц)</h4>
                    <table class="table table-striped table-hover table-borderless table-vcenter font-size-sm">
                        <thead>
                            <tr class="text-uppercase">
                                <th class="font-w700">Имя</th>
                                <th class="d-none d-sm-table-cell font-w700">Уроки</th> 
                                <th class="d-none d-sm-table-cell font-w700 text-right" style="width: 120px;">Оплата</th>
                                <th class="font-w700 text-center" style="width: 60px;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $sql2 = mysqli_query($connect, "SELECT * FROM `users` WHERE `status` = '1'");
                            while($result = mysqli_fetch_assoc($sql2)){
                                $teacher_id = $result['id'];
                                $sql3 = mysqli_query($connect, "SELECT * FROM `timetable` WHERE `teacher` = '$teacher_id'");
                                $count = 0;
                                while($sql3_res = mysqli_fetch_assoc($sql3) ){
                                    if($sql3_res['date'] > $month_ago){
                                        $count = $count + 1;
                                    }
                                }
                                $sql4 = mysqli_query($connect, "SELECT * FROM `timetable` WHERE `teacher` = '$teacher_id' AND `date` > $month_ago");
                                $oplata = 0;
                                while($result_sql4 = mysqli_fetch_assoc($sql4) ){
                                    if($result_sql4['date'] > $month_ago){
                                        $oplata = $oplata + $result_sql4['price']-200;
                                    }
                                }
                               
                                
                                ?>
                            <tr>
                                <td>
                                    <span class="font-w600"><?php echo $result['name'];?></span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="font-size-sm text-muted"><?php echo $count;?></span>
                                </td>
                                <td class="d-none d-sm-table-cell text-right">
                                    <?php echo $oplata; ?> ₽
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="" class="js-tooltip-enabled" data-original-title="Manage">
                                    </a>
                                </td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- column -->
        <div class="col-lg-6">
            <div class="card card-hover">
                <div class="card-body">
                    <h4 class="card-title">Работа педагогов (месяц)</h4>
                    <table class="table table-striped table-hover table-borderless table-vcenter font-size-sm">
                        <thead>
                            <tr class="text-uppercase">
                                <th class="font-w700">Имя</th>
                                <th class="d-none d-sm-table-cell font-w700">Уроки</th> 
                                <th class="d-none d-sm-table-cell font-w700 text-right" style="width: 120px;">Оплата</th>
                                <th class="font-w700 text-center" style="width: 60px;"></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            $sql5 = mysqli_query($connect, "SELECT * FROM `users` WHERE `status` = '2'");
                            while($result = mysqli_fetch_assoc($sql5)){
                                $teacher_id = $result['id'];
                                $sql6 = mysqli_query($connect, "SELECT count(`id`) FROM `timetable` WHERE `teacher` = '$teacher_id'");
                                $sql6_res = mysqli_fetch_assoc($sql6);
                                $sql7 = mysqli_query($connect, "SELECT `price` FROM `timetable` WHERE `teacher` = '$teacher_id'");
                                $oplata2 = 0;
                                while($result_sql7 = mysqli_fetch_assoc($sql7) ){
                                    $oplata2 = $oplata2 + $result_sql7['price'];
                                }
                               
                                
                                ?>
                            <tr>
                                <td>
                                    <span class="font-w600"><?php echo $result['name'];?></span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="font-size-sm text-muted"><?php echo $sql6_res['count(`id`)'];?></span>
                                </td>
                                <td class="d-none d-sm-table-cell text-right">
                                <?php echo $oplata2; ?> ₽
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" data-toggle="tooltip" data-placement="left" title="" class="js-tooltip-enabled" data-original-title="Manage">
                                    </a>
                                </td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
       
<!-- Le Javascript -->
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://bootadmin.org/scripts/vendor/bootstrap.min.js"></script>
<script src="https://bootadmin.org/scripts/vendor/library.min.js"></script>



<script src="https://bootadmin.org/scripts/core/main.js"></script>


</body>
</html>