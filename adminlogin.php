<?php
session_start();
error_reporting(0);
include_once 'dbConnection.php';

if (isset($_REQUEST["a_sub"])) {
  $aid = $_POST['a_id'];
  $apwd = $_POST['a_ps'];

  if ($aid != '' && $apwd != '') {
    $stmt = $con->prepare("SELECT ad_pswd FROM t_admin WHERE ad_id = ?");
    $stmt->bind_param("s", $aid);
    $stmt->execute();
    $stmt->bind_result($hashed_password);
    $stmt->fetch();

    if (password_verify($apwd, $hashed_password)) {
      $_SESSION['ad'] = $aid;
      header("location:admin.php");
    } else {
      echo '<script>alert("Invalid Login! Please try again.")</script>';
    }

    $stmt->close();
  } else {
    echo '<script>alert("Enter both username and password")</script>';
  }
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <link type="text/css" rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css">
  <script src="bootstrap/jquery.min.js"></script>
  <script src="bootstrap/bootstrap.min.js"></script>
  <script src="jquery/jquery-1.10.2.js"></script>
  <script src="jquery/jquery-ui.js"></script>
  <link href="jquery/jquery-ui.css" rel="stylesheet" type="text/css" />

  <title>Admin Login</title>
</head>

<div class="container-fluid" style="padding-left: 0; padding-right: 0;">
  <div class="row">
    <div class="col-sm-12">
      <img src="images/admin-login-bg.jpg" width="100%" style="box-shadow: 1px 5px 14px #999999; position: absolute;">
      <body><button id="back" name="back" value="back" class="toggle btn btn-primary" onclick="back()" style="position:absolute; top: 10px; left: 30px;">Back</button>
    </div>
  </div>
</div>
    <form id="adminlogin" action="adminlogin.php" method="post">

      <div id="adivtop">
        <br><br><br>
        <div class="container-fluid">
          <div class="row" style="position: relative; text-align: -webkit-center;">
            <div class="col-sm-12">
              <h3>Login</h3>
              <input type="text" id="a_id" name="a_id" class="form-control" style="width:200px;" placeholder="Admin ID"><br><br>
              <input type="password" id="a_ps" name="a_ps" class="form-control" style="width:200px;" placeholder="Password"><br><br>
              <input type="submit" id="a_sub" name="a_sub" value="Login" class="toggle btn btn-primary"><br>
            </div>
          </div>
        </div>
      </div>
    </form>
</body>

<script>
  function back() {
    location.href = 'index.php';
  }
</script>

</html>