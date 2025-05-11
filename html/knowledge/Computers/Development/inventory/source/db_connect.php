<?php
/* Database connection start */						   
/*$servername = "172.16.24.196";*/
$servername = "Localhost";
$username = "purchaser";
$password = "1q2w3e4r5t^Y&U";
$dbname = "train_purchases";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno())
{
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>