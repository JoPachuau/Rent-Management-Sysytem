 <?php
      include '../db/dbcon.php';
      $car_name = $_GET['car_name'];
      $car_type = $_GET['car_type'];
      $model = $_GET['model'];
      $price = $_GET['price'];
      $capacity = $_GET['capacity'];
      $driver_name = $_GET['driver_name'];
      $driver_number = $_GET['driver_number'];
      $number_plate = $_GET['number_plate'];

      $sql = "INSERT INTO add_car(car_name,car_type,model,price,capacity,driver_name,driver_number,number_plate) VALUES('$car_name','$car_type','$model','$price','$capacity','$driver_name','$driver_number' ,'$number_plate')";

      $res = mysqli_query($con, $sql);
      header('location:../display_car.php');
