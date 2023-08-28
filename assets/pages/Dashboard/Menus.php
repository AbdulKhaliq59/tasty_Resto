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
    <a href="./createMenu.php" class="button">Add Menu</a>
  </div>
  <div class="container">
    <table>
      <tr>
        <th>S.NO</th>
        <th>Name</th>
        <th>price</th>
        <th>Action</th>
      </tr>
      <?php
      require('../../../connection.php');
      // Check if a delete action is triggered
      if (isset($_GET['delete_id'])) {
        $deleteId = $_GET['delete_id'];

        // Perform the deletion
        $deleteQuery = "DELETE FROM menu WHERE id = $deleteId";
        $deleteResult = mysqli_query($connection, $deleteQuery);
        if ($deleteResult) {
          echo "User deleted Successfully"; // Redirect to the same page after deletion
          header("Location: Menus.php"); // Redirect to the same page after deletion
          exit();
        } else {
          echo "Error deleting user: " . mysqli_error($connection);
        }
      }


      // Fetch user data from the database
      $selectQuery = "SELECT * FROM menu";
      $result = mysqli_query($connection, $selectQuery);

      // Check if any data is fetched
      if ($result) {
        // Loop through the fetched data and populate table rows
        while ($row = mysqli_fetch_assoc($result)) {
          echo '<tr>';
          echo '<td>' . $row['id'] . '</td>';
          echo '<td>' . $row['name'] . '</td>';
          echo '<td>' . $row['price'] . '</td>';
          echo '<td><a href="?delete_id=' . $row['id'] . '" class="delete-button">Delete</a></td>'; // Add delete action
          echo '</tr>';
        }
      }
      ?>
    </table>
  </div>

  <!--===== MAIN JS =====-->
  <script src="../../js/sidebar.js"></script>
  <script>
    // JavaScript code to show a confirmation dialog
    document.querySelectorAll('.delete-button').forEach(button => {
      button.addEventListener('click', event => {
        if (!confirm('Are you sure you want to delete this user?')) {
          event.preventDefault(); // Cancel the default link behavior
        }
      });
    });
  </script>
</body>

</html>