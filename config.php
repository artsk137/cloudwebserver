<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "login_register";

$conn = mysqli_connect($hostname, $username, $password, $database) or die("Database connection failed");

$base_url = "http://localhost:3306/";
$my_email = "YOUR_EMAIL";

$smtp['host'] = "smtp.gmail.com";
$smtp['user'] = "";
$smtp['pass'] = "";
$smtp['port'] = 465;
