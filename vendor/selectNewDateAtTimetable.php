<?php
session_start();
$date = $_POST['calendar'];

$date2 = date("d.m.y", strtotime($date));

unset($_SESSION["date"]);
$_SESSION["date"] = $date2;
$_SESSION["date2"] = $date;
header('Location: ../timetable.php');