<?php include_once 'templates/api.php';  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Java Tutorial</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>/styles/api/core-skeleton.css">
  <script src="<?php echo $PROJECT_URL; ?>/js/api/core-skeleton.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
 $('#tutorial-java').addClass('active');
});
</script>
</head>
<body>
 
<?php include_once 'templates/header.php'; ?>

<div class="container-fluid fs14 mtop15p">
  <div class="row">
   <div class="col-sm-3">
      <?php include_once 'templates/tutorials/java/00-content.php'; ?>
   </div>
   <div class="col-sm-5">
     <?php 
        if(isset($_GET["1"]) && $_GET["1"]=='introduction-to-java'){
          include_once 'templates/tutorials/java/01-introduction-to-java.php'; 
        } else if(isset($_GET["1"]) && $_GET["1"]=='architecture-of-java'){
          include_once 'templates/tutorials/java/02-architecture-of-java.php'; 
        }
         
     ?>
   </div>
  </div>
</div>

</body>
</html>