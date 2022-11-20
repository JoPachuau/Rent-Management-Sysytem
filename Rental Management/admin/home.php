<?php
$msg = '';
if (isset($_GET['msg'])) {
  $msg = $_GET['msg'];
}
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <title>Login page</title>
</head>

<body style="background-color: grey;">
  <h1 style="text-align: center; padding:100px;">Admin Login</h1>
  <div class="card" style="width: 50rem; margin-left: 30%;">
    <form action='model/homem.php' method="POST" style="margin-left: 100px; margin-top:50px;" require>
      <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
      <?php } ?>
      <div class="mb-3 row">
        <label for="staticEmail" class="form-label">User Name:</label>
        <input type="text" class="form-control; col-sm-8" name="username" required>
      </div>
      <div class="mb-3 row">
        <label for="inputPassword" class="form-label">Password:</label>
        <input type="password" class="form-control; col-sm-8" name="pass" required>

        <div class="col-auto" style="margin-top: 30px; margin-left: 200px">
          <input type="submit" value="Log In" class="btn btn-dark mb3">

          <a class="col-auto btn btn-dark" href="signup.php" role="button">Sign Up</a>
          <a class="col-auto btn btn-dark" href="../user/home.php" role="button">User</a><br>
          <?php echo $msg; ?>
        </div>
      </div>
    </form>
  </div>
  <?php include "partials/footer.php"; ?>
</body>

</html>