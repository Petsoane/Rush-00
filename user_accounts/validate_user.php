<?php
session_start();
include("../resources/startConnect.php");

$conn = start();
// create sql code to get the contents of database
$name = $_POST['name'];
$sql = "SELECT * from users where username like '$name'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1){
    echo "users exists";
    $_SESSION['user_name'] = $name;
    $_SESSION['passwd'] = $_POST['password'];
}
else // this is where the error code will go.
    echo "User does no exist";
mysqli_close($conn);
?>