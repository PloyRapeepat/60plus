<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>สังคมผู้สูงอายุ</title>
  <link rel="stylesheet" href="dist/bootstrap.min.css">
  <script src="dist/bootstrap.bundle.min.js"></script>
</head>
<body>
  <?php
    $menu="menu_guest.php";
    if(!empty($_SESSION['user'])){
      $menu="menu_".$_SESSION['user']['user_type'].".php";
    }
    include($menu);
  ?>
  <div class="container" my-4>