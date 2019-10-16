<?php
function start() {
    $servername = "localhost";
$username = 'root';
$passwd = 'theophylus';
$dbname = 'accounts';

$conn = mysqli_connect($servername, $username,$passwd, $dbname);

// check connection
if (!$conn){
    die("Connection failed".mysqli_connect_error());
}
return $conn;
}
?>