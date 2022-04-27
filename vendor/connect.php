<?php

    //mysqli_connect
$connect = mysqli_connect('localhost', 'root', '', 'myexamples_db');

if (!$connect){
    die('Error connect to database');
}
