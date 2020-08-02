<?php include_once 'templates/api.php';  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pickles - Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>/vendor/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>/styles/api/core-skeleton.css">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>/styles/proj-pickles.css">
  <script src="<?php echo $PROJECT_URL; ?>/js/api/core-skeleton.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/babel-standalone@6/babel.min.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/react@16/react.production.min.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/react-dom@16/react-dom.production.min.js"></script>
  <script type="text/javascript">
  function set_localStorage(key, value){
    localStorage.setItem(key, value);
  }
  function get_localStorage(key){
    localStorage.getItem(key);
  }
  </script>
  <script type="text/babel" src="<?php echo $PROJECT_URL; ?>/js/components/component.app.header.js"></script>
  <script type="text/babel" src="<?php echo $PROJECT_URL; ?>/js/components/component.product.menu.list.js"></script>
  <script type="text/babel" src="<?php echo $PROJECT_URL; ?>/js/components/component.page.default.js"></script>
<style>

</style>
<script type="text/javascript">
$(document).ready(function(){
 $('#pickles-home').addClass('active');
});

</script>
</head>
<body>

<!-- Add To Cart Modal ::: START -->

<!-- Add To Cart Modal ::: END -->
<div id="root"></div>


</body>
</html>