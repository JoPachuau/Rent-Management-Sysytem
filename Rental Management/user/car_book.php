<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'db/dbcon.php';
    include 'partials/nav.php'; ?>
</head>


<body>
    <style>
        body {
            background-color: rgb(115, 105, 215);
            background-repeat: no-repeat;
            background-size: 110% 110%;
        }

        form {
            width: 40%;
            margin: 0 auto;
        }

        div.elem-group {
            margin: 20px 0;
        }

        div.elem-group.inlined {
            width: 40%;
            display: inline-block;
            float: auto;
            margin-left: 1%;
        }

        label {
            display: block;
            font-family: 'Nanum Gothic';
            padding-bottom: 10px;
            font-size: 1.25em;
        }

        input,
        select,
        textarea {
            border-radius: 2px;
            border: 2px solid #777;
            box-sizing: border-box;
            font-size: 1.25em;
            font-family: 'Nanum Gothic';
            width: 100%;
            padding: 10px;
        }

        div.elem-group.inlined input {
            width: 95%;
            display: auto;
        }

        textarea {
            height: 250px;
        }

        hr {
            border: 1px dotted #ccc;
        }

        button {
            height: 50px;
            width: 100px;
            background: orange;
            border: none;
            color: white;
            font-size: 1.25em;
            font-family: 'Nanum Gothic';
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            border: 2px solid black;
        }
    </style>
    <form action="model/add_car_form.php" method="GET">
        <div class="elem-group">
            <label for="cus_name">Your Name</label>
            <input type="text" name="cus_name" placeholder="John Doe" required>
        </div>
        <div class="elem-group">
            <label for="cus_email">Your E-mail</label>
            <input type="text" name="cus_email" placeholder="john.doe@email.com" required>
        </div>
        <div class="elem-group">
            <label for="cus_phone">Your Phone</label>
            <input type="text" name="cus_phone" placeholder="498-348-3872" pattern=(\d{3})-?\s?(\d{3})-?\s?(\d{4}) required>
        </div>
        <div class="elem-group inlined">
            <label for="pickup">Pickup</label>
            <input type="text" name="pickup" placeholder="Airport" required>
        </div>
        <div class="elem-group inlined">
            <label for="destiny">Destiny</label>
            <input type="text" name="destiny" placeholder="Ramhlun" required>
        </div>
        <hr>
        <div class="elem-group inlined">
            <label for="check_in_date">Check-in Date</label>
            <input type="text" name="check_in_date" required>
        </div>
        <div class="elem-group inlined">
            <label for="check_out_date">Check-out Date</label>
            <input type="text" name="check_out_date" required>
        </div>
        <br>
        <div class="">
            <label for="selected_car">Select Car Preference</label>
            <?php
            $sql = 'SELECT car_name From add_car';
            $res = mysqli_query($con, $sql);
            echo "<select id='room-selection' name='selected_car' required>";
            while ($row = mysqli_fetch_array($res)) {
                echo "<option id='room-selection' >Choose a Type of Cars from the List</option>";
                echo "<option type='text' name='selected_car' >$row[0]</option>";
            }
            echo "</select>";
            ?>
        </div>
        <hr>
        <button class="btn-dark" type="submit">Submit</button>
    </form>

</body>
<?php include 'partials/footer.php'; ?>

</html>