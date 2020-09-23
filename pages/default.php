<?php $DISPLAY_NAVBAR_MENU = false; ?>
<?php include_once 'templates/api.php';  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>WideSecond.com | Learn Tutorials</title>
  <meta name="description" content="Free Web tutorials">
  <meta name="keywords" content="widesecond, widesecond.com, tutorials, web, technologies, development, programming languages">
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
  <div class="col-sm-4">
   <!-- -->
   <a href="<?php echo $PROJECT_URL; ?>/tutorial/webtech/java/java-to-oracle-database-date-time">
      <div class="list-group mtop15p boxShadow">
        <div class="list-group-item bg-pink"><b>Java programming Language</b></div>
        <div class="list-group-item bg-lgtPink">
          <div>
          Java Programming Language is class-based object-oriented general-purpose programming 
          language that is used to develop Mobile, Desktop and Web Applications.
          </div>
          <div class="mtop15p">
              <span class="label btn-pink-o">Standard Edition</span>
              <span class="label btn-pink-o">Enterprise Edition</span>
          </div>
        </div><!--/.list-group-item -->
      </div><!--/.list-group -->
   </a>
   <!-- -->
   <!-- -->
   <a href="<?php echo $PROJECT_URL; ?>/tutorial/tutorial/networking/basic/dns-ipAddress-url">
      <div class="list-group mtop15p boxShadow">
        <div class="list-group-item bg-skyBlue"><b>Networking</b></div>
        <div class="list-group-item bg-lgtSkyBlue">
          <div>
          It is a Software and Hardware Subject that deals with Connecting two or more Computers 
          forming a network in communicating and transmitting data between them.
          </div>
          <div class="mtop15p">
              <span class="label btn-skyBlue-o">Standard Edition</span>
              <span class="label btn-skyBlue-o">Enterprise Edition</span>
          </div>
        </div><!--/.list-group-item -->
      </div><!--/.list-group -->
   </a>
   <!-- -->

  </div>
 </div><!--/.row -->
</div><!--/.container-fluid -->

</body>
</html>