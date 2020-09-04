<?php $PROJECT_URL = 'http://localhost/ws';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>/vendor/highlight/css/highlight-night-owl.css">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>/styles/api/core-skeleton.css">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>/vendor/font-awesome/css/font-awesome.min.css">
  <script src="<?php echo $PROJECT_URL; ?>/js/api/core-skeleton.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/babel-standalone@6/babel.min.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/react@16/react.production.min.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/react-dom@16/react-dom.production.min.js"></script>
  <script type="text/babel" src="<?php echo $PROJECT_URL; ?>/js/components/component.app.content.menu.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/highlight/js/highlight.min.js"></script>
  <script>hljs.initHighlightingOnLoad();</script>
</head>
<body>

<div class="container-fluid mtop15p">
 <div class="row">
  <div class="col-sm-2">
  <?php include_once 'templates/menu.php'; ?>
  </div>
  <div class="col-sm-10">
  <!-- -->
    <?php include_once 'templates/components/emailAddress.php'; ?>
  <!-- -->
  </div>
 </div>
</div>

</body>
</html>
