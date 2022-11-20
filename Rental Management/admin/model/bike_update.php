<?php

include 'db/dbcon.php';
if (count($_POST) > 0) {
    mysqli_query($con, "UPDATE add_bike set bike_name='" . $_POST['bike_name'] . "', bike_type='" . $_POST['car_type'] . "', model='" . $_POST['model'] . "', price='" . $_POST['price'] .  "' ,number_plate	='" . $_POST['number_plate'] . "' WHERE Id='" . $_GET['id'] . "'");

    header("Location: display_bike.php");
}
$id = $_GET['id'];
$sql = "SELECT Id, bike_name, bike_type,  model, price, number_plate FROM add_bike WHERE id = $id";
$res = mysqli_query($con, $sql);
$row = mysqli_fetch_array($res);
