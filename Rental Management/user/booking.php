<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php include 'partials/nav.php';
  include 'db/dbcon.php' ?>
  <style>
    body {
      background-color: rgb(115, 105, 215);
      background-repeat: no-repeat;
      background-size: 110% 110%;
    }

    /*Table/Form CSS*/


    .add-box {
      position: absolute;
      top: 50%;
      left: 50%;
      width: 2000px;
      padding: 0px;
      transform: translate(-50%, -60%);
      background: rgba(0, 0, 0, .5);
      box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
      border-radius: 50px;
    }

    .add-box .user-box {
      position: relative;
    }

    .add-box a:hover {
      background: #03e9f4;
      color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 5px #03e9f4,
        0 0 25px #03e9f4,
        0 0 50px #03e9f4,
        0 0 100px #03e9f4;
    }

    /*Button CSS*/
    .wrapper {
      position: absolute;
      width: 50%;
      height: 115%;
    }

    .btn {
      width: fit-content;
    }

    button {
      font-family: 'Ubuntu', sans-serif;


      width: 300px;
      height: 80px;
      line-height: 5;
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
      opacity: 20;
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
      visibility: active;
    }

    .add-box {
      top: 40%;
    }
  </style>
  <div class="rent">
    <h1 style="text-align: center; padding: 80px; font-family:Cursive; text-shadow:2px 2px">Rent Vehical and House</h1>
  </div>
  <div class="add-box">

    <table align="center">
      <td>
        <button type="button" class=" btn-dark"><a href="car_book.php" class="btn btn-darek " role="button" aria-disabled="true" style="color: white; font-family:Rockwell">Car Rent Booking</a></button>
        <button type="button" class=" btn-dark"><a href="bike_book.php" class="btn btn-dark " role="button" aria-disabled="true" style="color: white; font-family:Rockwell"" >Bike Rent Booking</a></button>
        <button type=" button" class=" btn-dark"><a href="house_book.php" class="btn btn-dark " role="button" aria-disabled="true" style="color: white; font-family:Rockwell"">House Rent Booking</a></button>
      </td>
    </table>

  </div>
  </form>
  </div>
  </div>
  <?php
  include 'partials/footer.php';
  ?>
</body>

</html>