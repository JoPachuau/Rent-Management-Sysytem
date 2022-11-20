<html>
<?php include 'db/dbcon.php';
include 'partials/nav.php' ?>

<body>
    <style>
        body {
            background-color: rgb(115, 105, 215);
            background-repeat: no-repeat;
            background-size: 110% 110%;
        }
    </style>
    <div class="table-wrapper">
        <table style="border-color: black; border-width:2px;width 90%; border-style:solid; background-color:white;" border="2" cellspacing="4" align="center">
            <thead>
                <tr>
                    <td style="text-align: center" ;>ID</td>
                    <td style="text-align: center" ;>Bike Name</td>
                    <td style="text-align: center" ;>Type of Bike</td>
                    <td style="text-align: center" ;> Model</td>
                    <td style="text-align: center" ;>Price</td>
                    <td style="text-align: center" ;>Number Plate</td>
                </tr>
            </thead>
            <tbody>
                <?php

                $sql = 'select id,bike_name,bike_type, model, price,number_plate from add_bike';
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
</body>

</html>