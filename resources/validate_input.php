<?php
function is_unique($name){
   
include("./startConnection.php");
echo "start to validate";
$conn = start();
# check if the user is already in th table
$result = "SELECT * from users where name like '$name'";

$user = mysqli_query($conn, $result);
echo "<br>before the querry<br>";
if (mysqli_num_rows($user) == 1){
    return 0;
}
return 1;
}
?>