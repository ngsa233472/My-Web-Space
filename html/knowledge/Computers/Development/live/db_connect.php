<?php
/* Database connection start */
$servername = "localhost";
$username = "developers";
$password = "1q2w3e4r5t6y&U";
$dbname = "phpzag_demos";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>