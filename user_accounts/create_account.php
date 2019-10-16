<?php
session_start();
include("../resources/startConnection.php");
include("../resources/validate_input.php");

# start the connection
$conn = start();
# Create  sql code for adding elements into 
$name = $_POST['name'];
$passwd = sha1($_POST['password']);
$sql = "INSERT INTO users (name, passwd) values('$name','$passwd')";

if (is_unique($name) == 0){
    echo "User already exists.";
    header("refresh:2; url=create_acc.html");
    exit;
}

if (mysqli_query($conn, $sql)){# try inserting the content to the table.
    echo "The new node was add";
    header("refresh:5; url=create_acc.html");
}
else{
    echo "Error: ".$sql."<br>".mysqli_error($conn);
    header("refresh:20; url=create_acc.html");
}
mysqli_close($conn);
?>