<?php 
session_start();  
if (!isset($_SESSION['user'])) {
?>
<!DOCTYPE html>
<html lang="en" class=" -webkit-">
    <head>
        <meta charset="UTF-8">
        <title>Wheels - Admin Panel</title>
        <?php include 'Views/admin_head.php'; ?>

    </head>
    <body>
      <?php require_once "Views/admin_header.php";?>
        <?php
        if ($_GET) {
          require_once 'Controllers/' . $_GET['c'] . '.php';
        } else {
          require_once "Views/dashboard.php";
        }
        ?>
    <?php require_once "Views/admin_footer.php"; ?>
    </body>
</html>
<?php
}else{
  session_destroy();
  header("location: login.php");
  exit; 
}