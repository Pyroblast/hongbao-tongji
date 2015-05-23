<?php
session_start();
$admin=$_SESSION['tongji_admin'];
if (!isset($admin)) {
  header("Location:login.html");
}
include("inc/function.php");
$type = $_GET['type']; 
?>
<!DOCTYPE html>
<html  lang="zh-cn">
<head>
<meta charset="utf-8">
<link rel="shortcut icon" type="image/png" href="http://www.hongbaosuoping.com/img/icon.png">

    <title>红包锁屏·数据统计</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/icon.css" rel="stylesheet">
    <link rel="stylesheet" href="css/morris.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/raphael-min.js"></script>
    <script src="js/morris.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datetimepicker.min.js"></script>
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="">红包锁屏·数据统计</a>
        </div>
        
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li <?php if ($type == "") {
              echo "class='active'";
            }?>
            ><a href="admin.php">Andriod概况</a></li>
            <li <?php if ($type == "a") {
              echo "class='active'";
            }?>
            ><a href="admin.php?type=a">IOS概况</a></li>
            <li <?php if ($type == "b") {
              echo "class='active'";
            }?>
            ><a href="admin.php?type=b">Andriod渠道</a></li>
            <li <?php if ($type == "c") {
              echo "class='active'";
            }?>
            ><a href="admin.php?type=c">Andriod实时统计</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

          <?php
          if ($type == 'a') {
            include("template/a.php");
          } elseif ($type == 'b') {
            include("template/b.php");
          } elseif ($type == 'c') {
            include("template/c.php");
          } elseif ($type == 'd') {
            include("template/d.php");
          } else  {
            include("template/default.php");
          }
          ?>
        </div>
        </div>
      </div>
</body>
</html>