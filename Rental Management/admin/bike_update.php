<html>

<body>
    <?php include 'partials/nav.php';
    include 'model/update.php';
    ?>
    <style>
        body {
            background-color: rgb(115, 105, 215);
            background-repeat: no-repeat;
            background-size: 110% 110%;
        }

        /*Button CSS*/
        .wrapper {
            position: relative;
            width: 100%;
            height: 100%;
        }

        button {
            font-family: 'Ubuntu', sans-serif;
            position: absolute;
            top: 10%;
            left: 50%;
            transform: translate(-50%, -50%);

            width: 170px;
            height: 40px;
            line-height: 1;
            font-size: 18px;
            font-weight: bold;
            letter-spacing: 1px;
            border: 3px solid #8C82FC;
            background: #fff;
            color: #8C82FC;
            border-radius: 40px;
            cursor: pointer;
            overflow: hidden;
            transition: all .35s;
        }

        button:hover {
            background: #8C82FC;
            color: #fff;
        }

        button span {
            opacity: 1;
            visibility: visible;
            transition: all .35s;
        }

        .success {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #fff;
            border-radius: 50%;
            z-index: 1;
            opacity: 0;
            visibility: hidden;
            transition: all .35s;
        }

        .success svg {
            width: 20px;
            height: 20px;
            fill: yellowgreen;
            transform-origin: 50% 50%;
            transform: translateY(-50%) rotate(0deg) scale(0);
            transition: all .35s;
        }

        button.is_active {
            width: 40px;
            height: 40px;
        }

        button.is_active .success {
            opacity: 1;
            visibility: visible;
        }

        button.is_active .success svg {
            margin-top: 50%;
            transform: translateY(-50%) rotate(720deg) scale(1);
        }

        button.is_active span {
            opacity: 0;
            visibility: hidden;
        }
    </style>
    <div class="add-box">
        <div class="user-box">

            <form action='' method="POST" align="center">
                <div class="user-box">
                    <label for="name" class="form-label" style="color: white;">Name of Bike </label><br>
                    <input type="text" class="col-sm-2" name="bike_name" value="<?php echo $row['car_name']; ?>" required style="text-align: center;">
                </div>
                <div class="user-box">
                    <label for="type" class="form-label" style="color: white;">Type of Bike </label><br>
                    <input type="text" class="col-sm-2" name="bike_type" value="<?php echo $row['car_type']; ?>" required style="text-align: center;">
                </div>
                <div class="user-box">
                    <label for="model" class="form-label" style="color: white;">Model </label><br>
                    <input type="text" class="col-sm-2" name="model" value="<?php echo $row['model']; ?>" required style="text-align: center;">
                </div>
                <div class="user-box">
                    <label for="price" class="form-label" style="color: white;">Price/km </label><br>
                    <input type="number" class="col-sm-2" name="price" value=<?php echo $row['price']; ?> required style="text-align: center;">
                </div>
                <div class="user-box">
                    <label for="number" class="form-label" style="color: white;">Number Plate </label><br>
                    <input type="number" class="col-sm-2" name="number_plate" value=<?php echo $row['number_plate']; ?> required style="text-align: center;">
                </div>
                <div class="wrapper">
                    <button class="">
                        <span>Submit</span>
                        <div class="success">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 29.756 29.756" style="enable-background:new 0 0 29.756 29.756;" xml:space="preserve">

                                <path d="M29.049,5.009L28.19,4.151c-0.943-0.945-2.488-0.945-3.434,0L10.172,18.737l-5.175-5.173   c-0.943-0.944-2.489-0.944-3.432,0.001l-0.858,0.857c-0.943,0.944-0.943,2.489,0,3.433l7.744,7.752   c0.944,0.943,2.489,0.943,3.433,0L29.049,8.442C29.991,7.498,29.991,5.953,29.049,5.009z" />
                            </svg>
                        </div>
                    </button>
                </div>
            </form>
            <td>
                </table>
                <?php
                include 'partials/footer.php';
                ?>
</body>

</html>