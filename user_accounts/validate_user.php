<?php
$servername = "localhost";
$username = 'root';
$passwd = 'theophylus';
$dbname = 'accounts';

$conn = mysqli_connect($servername, $username,$passwd, $dbname);

// check connection
if (!$conn){
    die("Connection failed".mysqli_connect_error());
}

// create sql code to get the contents of database
$name = $_POST['name'];
$sql = "SELECT * from users where username like '$name'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1){
    echo "users exists";
}
else   
    echo "Error";
?>