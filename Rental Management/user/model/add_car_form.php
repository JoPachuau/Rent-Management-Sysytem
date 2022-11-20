<?php
include '../db/dbcon.php';
$cus_name = $_GET['cus_name'];
$cus_email = $_GET['cus_email'];
$cus_phone = $_GET['cus_phone'];
$pickup = $_GET['pickup'];
$destiny = $_GET['destiny'];
$check_in_date = $_GET['check_in_date'];
$check_out_date = $_GET['check_out_date'];
$selected_car = $_GET['selected_car'];

$sql = "INSERT INTO booked(cus_name,cus_email,cus_phone,pickup,destiny,check_in_date,check_out_date,selected_car) VALUES('$cus_name','$cus_email','$cus_phone','$pickup','$destiny','$check_in_date','$check_in_date' ,'$selected_car')";
$res = mysqli_query($con, $sql);
header('location:../booked.php');
