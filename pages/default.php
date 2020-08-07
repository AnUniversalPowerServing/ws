<?php $DISPLAY_NAVBAR_MENU = false; ?>
<?php include_once 'templates/api.php';  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>WideSecond.com | Learn Tutorials</title>
  <meta name="description" content="Free Web tutorials">
  <meta name="keywords" content="seo, seo tools, seo khazana, seo report, seositecheckup, seoclerks, seo login, seo jobs, seo services, seo images">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>/styles/api/core-skeleton.css">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>/vendor/font-awesome/css/font-awesome.min.css">
  <script src="<?php echo $PROJECT_URL; ?>/js/api/core-skeleton.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/babel-standalone@6/babel.min.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/react@16/react.production.min.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/react-dom@16/react-dom.production.min.js"></script>
<style>
#appHeaderNavBar, .navbar-collapse.collapse { display:none; }
</style>
</head>
<body>
<?php include_once 'templates/header.php'; ?>

<div class="container-fluid fs14">
 <div class="row">
  <div class="col-sm-8">
    
  <?php include_once 'templates/overview/webtech-info.php'; ?>
  <?php include_once 'templates/overview/webtech-dev.php'; ?>
  <?php include_once 'templates/overview/webtech-data.php'; ?>
  <?php include_once 'templates/overview/webtech-comm.php'; ?>
  <?php include_once 'templates/overview/webtech-servers.php'; ?>  
  <?php include_once 'templates/overview/webtech-host.php'; ?>
  <?php include_once 'templates/overview/webtech-test.php'; ?>
  <?php include_once 'templates/overview/webtech-market.php'; ?>

    <!-- -->
  </div><!--/.col-sm-8 -->
 </div><!--/.row -->
</div><!--/.container-fluid -->

</body>
</html>