<?php
include '../db/dbcon.php';
$id = $_GET['id'];
$sql = "Delete FROM add_bike WHERE id =$id";
mysqli_query($con, $sql);
header('location:../display_bike.php');
