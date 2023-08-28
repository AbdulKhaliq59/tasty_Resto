<?php
require('../../connection.php');
if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Perform user authentication
  $query = "SELECT * FROM user WHERE username = '$username' && password ='$password'";
  $result = mysqli_query($connection, $query);

  if ($result) {
    $user = mysqli_fetch_assoc($result);

    if ($user) {
      // Successful login
      // You can set session variables or redirect to a dashboard page
      // For now, let's redirect to a sample dashboard page
      echo 'Your logged in';
      header("Location: ../../assets/pages/Dashboard/index.php");
      exit();
    } else {
      // Incorrect username or password
      echo "<script>
                alert('Incorrect username or password');
            </script>";
    }
  } else {
    // Error with the database query
    echo "Error: " . mysqli_error($connection);
  }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- ===== CSS ===== -->
  <link rel="stylesheet" href="../css/loginStyle.css" />
  <link rel="stylesheet" href="../css/styles.css">
  <!-- ===== BOX ICONS ===== -->
  <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />

  <title>Tasy Resto | Login</title>
</head>

<body>


  <!--========== HEADER ==========-->
  <header class="l-header" id="header">
    <nav class="nav bd-container">
      <a href="#" class="nav__logo">Tasty</a>

      <div class="nav__menu" id="nav-menu">
        <ul class="nav__list">
          <li class="nav__item">
            <a href="../../index.php" class="nav__link active-link">Home</a>
          </li>
          <li class="nav__item">
            <a href="../../index.php#about" class="nav__link">About</a>
          </li>
          <li class="nav__item">
            <a href="../../index.php#services" class="nav__link">Services</a>
          </li>
          <li class="nav__item">
            <a href="../../index.php#menu" class="nav__link">Menu</a>
          </li>
          <li class="nav__item">
            <a href="../../index.php#contact" class="nav__link">Contact us</a>
          </li>
          <li class="nav__item">
            <a href="./login.php" class="nav__link">Login</a>
          </li>

          <li><i class="bx bx-moon change-theme" id="theme-button"></i></li>
        </ul>
      </div>

      <div class="nav__toggle" id="nav-toggle">
        <i class="bx bx-menu"></i>
      </div>
    </nav>
  </header>
  <div class="login">
    <div class="login__content">
      <div class="login__img">
        <img src="../img/img-login.svg" alt="" />
      </div>

      <div class="login__forms">
        <form action="" method="POST" class="login__registre" id="login-in">
          <h1 class="login__title">Sign In</h1>

          <div class="login__box">
            <i class="bx bx-user login__icon"></i>
            <input type="text" placeholder="Username" name="username" class="login__input" />
          </div>

          <div class="login__box">
            <i class="bx bx-lock-alt login__icon"></i>
            <input type="password" placeholder="Password" name="password" class="login__input" />
          </div>

          <a href="#" class="login__forgot">Forgot password?</a>

          <button type="submit" name="login" class="login__button">Sign In</button>

          <div>
            <span class="login__account">Don't have an Account ?</span>
            <span class="login__signin" id="sign-up"><a href="./signup.php" class="signin_up_link">Sign up</a> </span>
          </div>
        </form>


      </div>
    </div>
  </div>

  <!--===== MAIN JS =====-->
  <script src="../js/main.js"></script>
</body>

</html>