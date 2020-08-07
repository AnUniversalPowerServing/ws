<?php include_once 'templates/api.php';  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Java Tutorial</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>/styles/api/core-skeleton.css">
  <script src="<?php echo $PROJECT_URL; ?>/js/api/core-skeleton.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

});
</script>
</head>
<body>
 
<?php include_once 'templates/header.php'; ?>

<div class="container-fluid fs14 mtop15p">
  <div class="row">
   <div id="content" class="col-sm-3"></div>
   <div class="col-sm-9">
     <?php 
       include_once 'templates/webtech/dev/html/01-introduction-to-html.php';
     ?>
   </div>
  </div>
</div>

</body>
</html>