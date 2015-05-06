<?php 
$servername = "mysql101.prv.f1.k8.com.br";
$username = "brunomengatto2";
$password = "Palheta@28";
$dbname = "brunomengatto2";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>