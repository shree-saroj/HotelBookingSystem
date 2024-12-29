<?php
require('./../../Inc/essentials.php');
require('./../../Inc/db_config.php');
session_start();
if (isset($_SESSION['admin_login']) && $_SESSION['admin_login'] == true) {
  redirect("dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login Panel</title>
  <?php require './../../Inc/links.php'; ?>
  <style>
    div.login-form {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 400px;
    }
  </style>
</head>

<body class="bg-light">

  <div class="login-form text-center rounded bg-white shadow overflow-hidden">
    <form method="POST">
      <h4 class="bg-dark text-white py-3">ADMIN LOGIN PANEL</h4>
      <div class="p-4">
        <div class="mb-3">
          <input name="admin_username" required type="text" class="form-control shadow-none text-center"
            placeholder="Username">
        </div>
        <div class="mb-4">
          <input name="admin_password" required type="password" class="form-control shadow-none text-center"
            placeholder="Password">
        </div>
        <button name="admin_login" type="submit" class="btn text-white custom-bg shadow-none">LOGIN</button>
      </div>
    </form>
  </div>


  <?php
  if (isset($_POST['admin_login'])) {
    $filtered_data = sanitizeInput($_POST);
    $query = "SELECT * FROM `tbadmin` WHERE `admin_name` = ? AND `admin_password` = ? AND `active` = 1";
    $values = [$filtered_data["admin_username"], $filtered_data["admin_password"]];
    $dataType = "ss";
    $res = executeSelectQuery($query, $values, $dataType);
    if ($res->num_rows > 0) {
      $row = mysqli_fetch_assoc($res);
      session_start();
      $_SESSION["admin_login"] = true;
      $_SESSION["admin_id"] = $row["id"];
      $_SESSION["admin_name"] = $row["admin_name"];
      redirect("dashboard.php");
    } else {
      alert("error", "Login Failed - Invalid Credentials");
    }
  }

  ?>

  <?php require './../../Inc/scripts.php' ?>

</body>

</html>