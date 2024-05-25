<?php
session_start();
$date = $_POST['calendar'];

$date2 = date("d.m.y", strtotime($date));

unset($_SESSION["2date"]);
unset($_SESSION["2date2"]);
$_SESSION["2date"] = $date2;
$_SESSION["2date2"] = $date;
header('Location: ../admin_timetable.php');