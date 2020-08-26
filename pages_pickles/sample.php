<?php include_once 'templates/api.php';  ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Pickles - SignIn / Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>/vendor/bootstrap-advanced/css/bootstrap-advanced.css">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>/styles/api/core-skeleton.css">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>/vendor/font-awesome/css/font-awesome.min.css">
  <script src="<?php echo $PROJECT_URL; ?>/js/api/core-skeleton.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/captcha/js/jquery-captcha-lgh.min.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/bootstrap-advanced/js/bootstrap-advanced.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/bootstrap-advanced/js/bootstrap-advanced.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/babel-standalone@6/babel.min.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/react@16/react.production.min.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/react-dom@16/react-dom.production.min.js"></script>
  <script type="text/babel" src="<?php echo $PROJECT_URL; ?>/js/components/core/component.auth.email.js"></script>
  <script type="text/babel" src="<?php echo $PROJECT_URL; ?>/js/components/core/component.auth.mobile.js"></script>
  <script type="text/babel" src="<?php echo $PROJECT_URL; ?>/js/components/core/component.security.captcha.js"></script>
  <script type="text/babel" src="<?php echo $PROJECT_URL; ?>/js/components/core/component.sample.js"></script>
  <script type="text/babel" src="<?php echo $PROJECT_URL; ?>/js/components/core/component.alert.js"></script>
  <script type="text/babel" src="<?php echo $PROJECT_URL; ?>/js/components/core/component.auth.validate.email.js"></script>
  <script type="text/babel" src="<?php echo $PROJECT_URL; ?>/js/components/core/component.auth.validate.mobile.js"></script>
<script type="text/babel">
function genRandomNumber(min,max){
 return Math.floor(Math.random() * (max - min + 1) + min);
}
function allowOnlyNumbers(event) {
 event = (event) ? event : window.event;
 var charCode = (event.which) ? event.which : event.keyCode;
 var status = false;
 if (charCode >= 48 && charCode <= 57) { status = true; }
 console.log("charCode: "+charCode+" status: "+status);
 return status;
}
ReactDOM.render(<Sample />, document.getElementById('root'));
</script>
</head>
<body>

<div class="container">
  <div class="jumbotron">
    <h1>Bootstrap Tutorial</h1>      
    <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing responsive, mobile-first projects on the web.</p>
  </div>
  <div id="root"></div>    
</div>

</body>
</html>
