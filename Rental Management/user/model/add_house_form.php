<?php
include '../db/dbcon.php';
$cus_name = $_GET['cus_name'];
$cus_email = $_GET['cus_email'];
$cus_phone = $_GET['cus_phone'];
$check_in_date = $_GET['check_in_date'];
$check_out_date = $_GET['check_out_date'];
$selected_house = $_GET['selected_house'];

$sql = "INSERT INTO house_booked(cus_name,cus_email,cus_phone,check_in_date,check_out_date,selected_house) VALUES('$cus_name','$cus_email','$cus_phone','$check_in_date','$check_in_date' ,'$selected_house')";

$res = mysqli_query($con, $sql);
header('location:../booked.php');
