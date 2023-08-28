<?php
require('../../connection.php');
if (isset($_POST['register'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $confirmPassword = $_POST['confirmPassword'];

  // Additional validation and processing can be added here

  if ($password === $confirmPassword) {
    // Perform the database insertion
    $insertQuery = "INSERT INTO user (username, password) VALUES ('$username', '$password')";
    $result = mysqli_query($connection, $insertQuery);
    echo "result" . $result;
    if ($result) {
      // Generate JavaScript for showing a toast notification
      echo "Data inserted";
    } else {
      echo "Error: " . mysqli_error($connection);
    }
  } else {
    echo "Password does not match";
  }
// <script>
// Toastify({
//   text: 'Password does not match',
//   duration: 3000,
//   gravity: 'bottom',
//   position: 'right',
//   backgroundColor: 'green',
// }).showToast();
// </script>

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- ===== CSS ===== -->
  <link rel="stylesheet" href="../../assets/css/loginStyle.css" />
  <link rel="stylesheet" href="../css/styles.css" />
  <!-- ===== BOX ICONS ===== -->
  <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
  <!-- Toast Notification CDN -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

  <!-- Include Toastify JS -->
  <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
  <title>Tasty Resto | Signup</title>
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
        <img src="../img/signup-img.svg" alt="" />
      </div>

      <div class="login__forms">
        <form action="" method="POST" class="login__registre" id="login-in">
          <h1 class="login__title">Sign Up</h1>

          <div class="login__box">
            <i class="bx bx-user login__icon"></i>
            <input type="text" placeholder="Username" name="username" class="login__input" />
          </div>

          <div class="login__box">
            <i class="bx bx-lock-alt login__icon"></i>
            <input type="password" placeholder="Password" name="password" class="login__input" />
          </div>
          <div class="login__box">
            <i class="bx bx-lock-alt login__icon"></i>
            <input type="password" placeholder="confirm Password" name="confirmPassword" class="login__input" />
          </div>
          <button class="login__button" type="submit" name="register">Sign up</button>
          <div>
            <span class="login__account">Already have an Account ?</span>
            <span class="login__signin" id="sign-up"><a href="./login.php" class="signin_up_link"> Login</a>
            </span>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div id="toast-container" class="toast-container"></div>
  <!--===== MAIN JS =====-->
  <script src="../js/main.js"></script>
</body>

</html>