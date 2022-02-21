<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'sb';

$con = mysqli_connect($servername,$username,$password,$database) or die(mysqli_error());
session_start();
?>