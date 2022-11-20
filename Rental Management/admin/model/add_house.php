<?php
include '../db/dbcon.php';
$house_name = $_GET['house_name'];
$address = $_GET['address'];
$house_number = $_GET['house_number'];
$price = $_GET['price'];
$capacity = $_GET['capacity'];
$owner_name = $_GET['owner_name'];
$owner_number = $_GET['owner_number'];

$sql = "INSERT INTO add_home(house_name,address,house_number,price,capacity,owner_name,owner_number) VALUES('$house_name','$address','$house_number','$price','$capacity','$owner_name','$owner_number' )";

$res = mysqli_query($con, $sql);
header('location:../display_house.php');
