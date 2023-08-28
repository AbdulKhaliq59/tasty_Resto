<?php
// Database connection
require('../../../connection.php');
if (isset($_POST['createMenu'])) {

    $name = $_POST['name'];
    $price = $_POST['price'];


    $insertQuery = "INSERT INTO menu (name, price) VALUES ('$name', '$price')";
    if (mysqli_query($connection, $insertQuery)) {
        echo "New food item added successfully.";
    } else {
        echo "Error: " . $insertQuery . "<br>" . mysqli_error($connection);
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- ===== BOX ICONS ===== -->
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="../../css/sidebar.css" />
    <link rel="stylesheet" href="../../css/table.css" />
    <link rel="stylesheet" href="../../css/createMenu.css" />



    <!-- <link rel="stylesheet" href="../../css/styles.css"> -->

    <title>Dashboard | Menu</title>
</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header__toggle">
            <i class="bx bx-menu" id="header-toggle"></i>
        </div>

        <div class="header__img">
            <img src="../../img/perfil.jpg" alt="" />
        </div>
    </header>

    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="#" class="nav__logo">
                    <i class="bx bx-layer nav__logo-icon"></i>
                    <span class="nav__logo-name">Tasty Resto</span>
                </a>

                <div class="nav__list">
                    <a href="./index.php" class="nav__link">
                        <i class="bx bx-grid-alt nav__icon"></i>
                        <span class="nav__name">Dashboard</span>
                    </a>

                    <a href="./users.php" class="nav__link">
                        <i class="bx bx-user nav__icon"></i>
                        <span class="nav__name">Users</span>
                    </a>

                    <a href="./messages.php" class="nav__link">
                        <i class="bx bx-message-square-detail nav__icon"></i>
                        <span class="nav__name">Messages</span>
                    </a>
                    <a href="./Menus.php" class="nav__link active">
                        <i class="bx bx-food-menu nav__icon"></i>
                        <span class="nav__name">Menu</span>
                    </a>
                </div>
            </div>

            <a href="../../../index.php" class="nav__link">
                <i class="bx bx-log-out nav__icon"></i>
                <span class="nav__name">Log Out</span>
            </a>
        </nav>
    </div>
    <h1>Menus</h1>
    <div class="view__button">
        <a href="./Menus.php" class="button">View Menu</a>
    </div>
    <div class="container">
        <div class="login__forms">
            <form action="" method="POST" class="login__registre" id="login-in">
                <h1 class="login__title">Add new Menu</h1>
                <div class="login__box">
                    <label for="">name</label>
                    <input type="text" placeholder="name" name="name" class="login__input" />
                </div>
                <div class="login__box">
                    <label for="">Price</label>
                    <input type="text" placeholder="price" name="price" class="login__input" />
                </div>

                <button type="submit" name="createMenu" class="login__button">Proceed</button>

            </form>


        </div>

        <!--===== MAIN JS =====-->
        <script src="../../js/sidebar.js"></script>
</body>

</html>