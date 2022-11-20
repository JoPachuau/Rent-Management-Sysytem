<?php
include "../db/dbcon.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $admin_name = $_POST['username'];
    $pass = $_POST['pass'];

    $sql = "SELECT id FROM sign_up where admin_name ='$admin_name' and pass='$pass'";
    echo $sql;
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
    // If result matched $myusername and $mypassword, table row must be 1 row

    if ($count == 1) {

        $_SESSION['username'] = $pass;
        header('location: ../login.php');
        exit();
    } else {
        $msg = "Username or Password are not correct, try again";
        header("Location:../home.php?msg=$msg");
        exit();
    }
}
