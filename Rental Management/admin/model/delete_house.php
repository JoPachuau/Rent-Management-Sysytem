<?php
include '../db/dbcon.php';
$id = $_GET['id'];
$sql = "Delete FROM add_home WHERE id =$id";
mysqli_query($con, $sql);
header('location:../display_house.php');
