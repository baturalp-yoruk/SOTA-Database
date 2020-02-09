<?php
$host     = "localhost";
$user     = "root";
$password = "root";
$database = "SOTA_results";
$cnnMySQL = mysqli_connect( $host, $user, $password, $database );
if( mysqli_connect_error() ) die("Veritabanına bağlanılamadı...");
$temp = mysqli_query($cnnMySQL, "set names 'utf8'");
?>
