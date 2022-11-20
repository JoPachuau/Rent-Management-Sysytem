 <?php
    include '../db/dbcon.php';
    $id = $_GET['id'];
    $sql = "Delete FROM add_car WHERE id =$id";
    mysqli_query($con, $sql);
    header('location:../display_car.php');
