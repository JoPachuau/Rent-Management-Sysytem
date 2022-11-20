<?php
include '../db/dbcon.php';
if (count($_POST) > 0) {
    mysqli_query($con, "UPDATE add_home set house_name='" . $_POST['house_name'] . "', address='" . $_POST['address'] . "', house_number='" . $_POST['house_number'] . "', price='" . $_POST['price'] .  "' ,capacity='" . $_POST['capacity'] . "',owner_name='" . $_POST['owner_name'] . "',owner_number='" . $_POST['owner_number'] . "' WHERE Id='" . $_GET['id'] . "'");

    header("Location: display_house.php");
}
$id = $_GET['id'];
$sql = "SELECT id, house_name, address,  house_number, price, capacity, owner_name, owner_number FROM add_home WHERE id = $id";
$res = mysqli_query($con, $sql);
$row = mysqli_fetch_array($res);
