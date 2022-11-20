<?php
include '../db/dbcon.php';
$admin_name = $_GET['admin_name'];
$phone_number = $_GET['phone_number'];
$email = $_GET['email'];
$pass = $_GET['pass'];
$confermpassword = $_GET['confermpassword'];
$sql = "INSERT INTO sign_in(admin_name,phone_number,email,pass,confermpassword) VALUES('$admin_name','$phone_number','$email','$pass','$confermpassword')";
$res = mysqli_query($con, $sql);
header('location:../home.php');
