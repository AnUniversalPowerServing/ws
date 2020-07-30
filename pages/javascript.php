<?php include_once 'templates/api.php';  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Javascript</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>/vendor/highlight/css/highlight-night-owl.css">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>/styles/api/core-skeleton.css">
  <script src="<?php echo $PROJECT_URL; ?>/js/api/core-skeleton.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/highlight/js/highlight.min.js"></script>
  <script>hljs.initHighlightingOnLoad();</script>
<script type="text/javascript">
$(document).ready(function(){
 $('#tutorial-javascript').addClass('active');
});
</script>
</head>
<body>

<?php include_once 'templates/header.php'; ?>

<div class="container-fluid fs14 mtop15p">
  <div class="row">

   <div class="col-sm-3">
    <!-- -->
    <?php include_once 'templates/tutorials/javascript/00-content.php'; ?>
    <!-- -->
   </div><!--/.col-sm-3 -->

   <div class="col-sm-9">

   <?php
   if(isset($_GET["1"]) && $_GET["1"]=='introduction-to-javascript'){
      include_once 'templates/tutorials/javascript/01-introduction-to-javascript.php';
   } else if(isset($_GET["1"]) && $_GET["1"]=='how-to-make-a-text-into-a-sentence-case-format'){
      include_once 'templates/tutorials/javascript/03-how-to-make-a-text-into-a-sentence-case-format.php';
   } else if(isset($_GET["1"]) && $_GET["1"]=='sort-or-filter-json-by-parameter-order'){
      include_once 'templates/tutorials/javascript/02-sort-or-filter-json-by-parameter-order.php';
   } else if(isset($_GET["1"]) && $_GET["1"]=='history-behind-the-evolution-of-javascript'){
      include_once 'templates/tutorials/javascript/04-history-behind-the-evolution-of-javascript.php';
   } else if(isset($_GET["1"]) && $_GET["1"]=='html-dom-and-bom'){
      include_once 'templates/tutorials/javascript/05-html-dom-and-bom.php';
   } else if(isset($_GET["1"]) && $_GET["1"]=='how-web-browser-and-web-servers-works'){
      include_once 'templates/tutorials/javascript/06-how-web-browser-and-web-servers-works.php';
   } 

   
   

   
   ?>

   </div><!--/.col-sm-6 -->
  
   
  </div><!--/.row -->
</div><!--/.container-fluid -->

</body>
</html>