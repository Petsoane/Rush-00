<?php
# Start a session to be able to pass the information between pages
session_start();
echo "Starting to validate the page";
    // check if the login value is set
    if (!isset($_POST['submit']) && $_POST['submit'] !== 'login'){
        header("Location:login.html");
    }
    if ($_POST['passwd'] === "" || $_POST['name'] === ""){
        // echo an error and maybe redirect after
        echo "<br>Theres is a problem with the values<br>";
    }
    else if ($_POST['paswd'] === 'Theophylus123' && $_POST['name'] === "Lebogang"){
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['passwd'] = $_POST['passwd'];
        header("Location:admin.html");
    }
    else{
        echo "Invalid credentials<br><a href='login.html'>back</a>;
    }
?>