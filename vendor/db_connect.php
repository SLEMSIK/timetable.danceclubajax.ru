<?php

    $connect = mysqli_connect('localhost', 'root', '', 'danceclubajax');

    if (!$connect) {
        die('Error connect to DataBase');
    }