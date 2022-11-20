 <?php
   include '../db/dbcon.php';
   $bike_name = $_GET['bike_name'];
   $bike_type = $_GET['bike_type'];
   $model = $_GET['model'];
   $price = $_GET['price'];
   $number_plate = $_GET['number_plate'];

   $sql = "INSERT INTO add_bike(id,bike_name,bike_type,model,price,number_plate) VALUES('$id','$bike_name','$bike_type','$model','$price','$number_plate')";

   $res = mysqli_query($con, $sql);
   header('location:../display_bike.php');
   ?>