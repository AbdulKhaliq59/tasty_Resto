<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="../../assets/css/loginStyle.css" />
    <link rel="stylesheet" href="../css/styles.css">
    <!-- ===== BOX ICONS ===== -->
    <link
      href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css"
      rel="stylesheet"
    />

    <title>Tasty Resto | all Menu</title>
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
   
 <!--========== MENU ==========-->
 <section class="menu section bd-container" id="menu">
    <h2 class="section-title">Menu of the week</h2>
    <div class="menu__container bd-grid">
      <div class="menu__content">
        <img src="../img/plate1.png" alt="" class="menu__img" />
        <h3 class="menu__name">Barbecue salad</h3>
        <span class="menu__detail">Delicious dish</span>
        <span class="menu__preci">$22.00</span>
        <a href="#" class="button menu__button"
          ><i class="bx bx-cart-alt"></i
        ></a>
      </div>

      <div class="menu__content">
        <img src="../img/plate2.png" alt="" class="menu__img" />
        <h3 class="menu__name">Salad with fish</h3>
        <span class="menu__detail">Delicious dish</span>
        <span class="menu__preci">$12.00</span>
        <a href="#" class="button menu__button"
          ><i class="bx bx-cart-alt"></i
        ></a>
      </div>

      <div class="menu__content">
        <img src="../img/plate3.png" alt="" class="menu__img" />
        <h3 class="menu__name">Spinach salad</h3>
        <span class="menu__detail">Delicious dish</span>
        <span class="menu__preci">$9.50</span>
        <a href="#" class="button menu__button"
          ><i class="bx bx-cart-alt"></i
        ></a>
      </div>
      <div class="menu__content">
        <img src="../img/plate1.png" alt="" class="menu__img" />
        <h3 class="menu__name">Barbecue salad</h3>
        <span class="menu__detail">Delicious dish</span>
        <span class="menu__preci">$22.00</span>
        <a href="#" class="button menu__button"
          ><i class="bx bx-cart-alt"></i
        ></a>
      </div>

      <div class="menu__content">
        <img src="../img/plate2.png" alt="" class="menu__img" />
        <h3 class="menu__name">Salad with fish</h3>
        <span class="menu__detail">Delicious dish</span>
        <span class="menu__preci">$12.00</span>
        <a href="#" class="button menu__button"
          ><i class="bx bx-cart-alt"></i
        ></a>
      </div>

      <div class="menu__content">
        <img src="../img/plate3.png" alt="" class="menu__img" />
        <h3 class="menu__name">Spinach salad</h3>
        <span class="menu__detail">Delicious dish</span>
        <span class="menu__preci">$9.50</span>
        <a href="#" class="button menu__button"
          ><i class="bx bx-cart-alt"></i
        ></a>
      </div>
    </div>
    <div class="view__button">
      <a href="./assets/pages/viewMore.php" class="button">View more</a>
    </div>
   
  </section>

    <!--===== MAIN JS =====-->
    <script src="../js/main.js"></script>
  </body>
</html>
