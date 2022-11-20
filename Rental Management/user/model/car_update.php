<?php

include 'db/dbcon.php';
if (count($_POST) > 0) {
  mysqli_query($con, "UPDATE add_car set car_name='" . $_POST['car_name'] . "', car_type='" . $_POST['car_type'] . "', model='" . $_POST['model'] . "', price='" . $_POST['price'] .  "' ,capacity='" . $_POST['capacity'] . "',driver_name='" . $_POST['driver_name'] . "',driver_number='" . $_POST['driver_number'] . "',number_plate	='" . $_POST['number_plate'] . "' WHERE Id='" . $_GET['id'] . "'");

  header("Location: show_vehical.php");
}
$id = $_GET['id'];
$sql = "SELECT Id, car_name, car_type,  model, price, capacity, driver_name, driver_number,number_plate FROM add_car WHERE id = $id";
$res = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
