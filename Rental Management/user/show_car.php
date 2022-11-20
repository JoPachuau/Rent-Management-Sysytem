<html>
<?php include 'partials/nav.php';
include 'db/dbcon.php'; ?>
<link rel="stylesheet" href="res/app.css">

<body>
  <style>
    body {
      background-color: grey;
      background-repeat: no-repeat;
      background-size: 110% 110%;
    }

    .showtb {
      overflow-y: auto;
    }
  </style>

  <div class="table-wrapper" style="margin: 10px 70px 70px; box-shadow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );">
    <table style="border-color: black; border-width:2px;width 90%; border-style:solid; background-color:white;" border="2" cellspacing="4" align="center">
      <thead>
        <tr>
          <td style="text-align: center" ;>ID</td>
          <td style="text-align: center" ;>Car Name</td>
          <td style="text-align: center" ;>Car Type</td>
          <td style="text-align: center" ;> Model</td>
          <td style="text-align: center" ;>Price</td>
          <td style="text-align: center" ;>Capacity</td>
          <td style="text-align: center" ;>Driver Name</td>
          <td style="text-align: center" ;>Driver Number</td>
          <td style="text-align: center" ;>Number Plate</td>
        </tr>
      </thead>
      <tbody>
        <?php

        $sql = 'select id,car_name,car_type,model,price,capacity,driver_name,driver_number,number_plate from add_car ';
        $res = mysqli_query($con, $sql);

        if ($res->num_rows > 0) {
          while ($row = mysqli_fetch_array($res)) {
            echo "<tr>";
            echo "<td style='text-align: center';>" . $row[0] . "</td>";
            echo "<td style='text-align: center';>" . $row[1] . "</td>";
            echo "<td style='text-align: center';>" . $row[2] . "</td>";
            echo "<td style='text-align: center';>" . $row[3] . "</td>";
            echo "<td style='text-align: center';>" . $row[4] . "</td>";
            echo "<td style='text-align: center';>" . $row[5] . "</td>";
            echo "<td style='text-align: center';>" . $row[6] . "</td>";
            echo "<td style='text-align: center';>" . $row[7] . "</td>";
            echo "<td style='text-align: center';>" . $row[8] . "</td>";
          }
        ?>




        <?php
          echo "</tr>";
        } else {
          echo 'No Record Found';
        }
        echo '</table>';
        echo '</div>';
        include 'partials/footer.php';
        ?>