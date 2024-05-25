<!DOCTYPE html>
<html lang="en">
<head>
    <?php session_start();
    require_once('vendor/db_connect.php');?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Панель управления - Пользователи</title>
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
    
    <div class="loading">
    <div class="loading-center"><img src="https://static.tildacdn.com/tild6137-6533-4165-a330-373733393536/ajaxdance.png" alt="Loading" /></div>
</div>
<div class="page-container animsition">
    <div id="dashboardPage">
        
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
</div>

        <main>
            <div class="page-breadcrumb">
    <div class="row">
        <div class="col-6">
            <h4 class="page-title">Панель управления</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Основное</a></li>
                    <li class="breadcrumb-item"><a href="/admin_panel.php">Панель администратора</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Пользователи</li>
                </ol>
            </nav>
        </div>
        
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <!-- title -->
                    <div class="d-md-flex align-items-center">
                        <div>
                            <h4 class="card-title">Все активные пользователи</h4>
                        </div>
                    </div>
                    <!-- title -->
                </div>
                <div class="table-responsive">
                    <table class="table v-middle">
                        <thead>
                            <tr class="bg-light">
                                <th class="border-top-0">ФИО</th>
                                <th class="border-top-0">Группа</th>
                                <th class="border-top-0">Логин</th>
                                <th class="border-top-0">Номер телефона</th>
                                <th class="border-top-0">Телеграмм</th>
                                <th class="border-top-0">Изменить</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $sql = mysqli_query($connect, "SELECT * FROM `users` WHERE `status` != '-1'");      
                                while($result = mysqli_fetch_assoc($sql)){
                                    
                            ?>
                            <tr>
                                
                                <td><?php echo $result['full_name']?></td>
                                <td><?php if($result['user_group'] == 'bebi'){echo "Беби";} if($result['user_group'] == 'hbt_ml'){echo "ШБТ Младшие";} if($result['user_group'] == 'hbt_sr'){echo "ШБТ Средние";} if($result['user_group'] == 'hbt_st'){echo "ШБТ Старшие";}  if($result['user_group'] == 'hst_ml'){echo "ШСТ Младшие";} if($result['user_group'] == 'hst_sr'){echo "ШСТ Средние";} if($result['user_group'] == 'hst_st'){echo "ШСТ Старшие";} if($result['user_group'] == 'admin'){break;} ?> </td>
                                <td><?php echo $result['login'];?></td>
                                <td><?php echo $result['phone'];?></td>
                                <td><?php echo $result['telegram'];?></td>

                                <td> <a class="nav-link" href="#"> <i class="feather icon-edit"></i></a> </td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
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