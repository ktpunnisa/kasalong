<?php
session_start();
if (isset($_POST['request']) && ($_POST['request'] == "admin-login")) {
  if (isset($_SESSION['admin'])) {
    unset($_SESSION['admin']);
  }
  $pwd = addslashes($_POST['pwd']);
  if ($pwd == "kasashort") {
    $_SESSION['admin'] ="pen_pineapple_apple_pen";
    header("Location: aviewall.php");
  }
  else {
    $msg =  "Wrong Password";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login for Kasalong Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/admin.css" type="text/css">
  <script src="../js/jquery.min.js"></script>
</head>
<body>
  <center>
    <h1>Kasalong Admin</h1>
    <form name="loginadmin" action="" method="post">
      <label>
        Password:
        <input type="password" name="pwd" placeholder="Enter Password">
      </label>
      <input type="hidden" name="request" value="admin-login">
      <input type="submit" name="btnSubmit" value="Login">
    </form>
    (ทดสอบ ใช้ "kasashort")<br>
    <?php if (isset($msg)) { echo $msg; } ?>
  </center>
</body>
</html>
