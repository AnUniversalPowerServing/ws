<?php include_once 'templates/api.php';  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>UPSC Preparation Network</title>
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
  <script src="<?php echo $PROJECT_URL; ?>/js/components/core/component.base.js"></script>
  <?php include_once 'templates/components.php'; ?>
<style>
.app-icon-s1 { width:220px;height:auto; }
.mtop15p { margin-top:15px; }
.mtop60p { margin-top:60px; }
.mtop160p { margin-top:160px; }
.progress-bar-orange { background-color: #e93d0d; }
</style>
<script type="text/babel">
 const FORM_INPUT_NAME = "name";
 const FORM_INPUT_EMAIL = "email";
 const FORM_INPUT_MOBILE = "mobile";
 const FORM_VALIDATE_EMAIL = "validate_email";
 const FORM_VALIDATE_MOBILE = "validate_mobile";
 const FORM_INPUT_SQ = "sQ"; 
 var mobCodes = [{"mobCode":"+91", "flag":"/img/country-flag/india.png","country":"India"},
                {"mobCode":"+1", "flag":"/img/country-flag/usa.png","country":"United States of America"},
                {"mobCode":"+61", "flag":"/img/country-flag/australia.png","country":"Australia"}
                  ];
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
</script>
<script type="text/babel">
ReactDOM.render(<CodeBase />, document.getElementById('loginForm'));
</script>
</head>
<body>
 <div align="center" class="mtop15p"><img src="<?php echo $PROJECT_URL;?>/img/upn/logo.jpg" class="app-icon-s1"/></div>
 <div class="container-fluid mtop15p">
 
  <div class="row">
   <div class="col-sm-4"></div>
   <div class="col-sm-4" style="margin:15px;">
	<div><h5 style="padding:5px;border-bottom:1px solid #000;"><b>Login to your Account</b></h5></div>
	<div id="loginForm" class="mtop15p">
     <div align="center" class="mtop60p"><img src="<?php echo $PROJECT_URL ?>/img/commons/loading.gif" style="width:100px;"/></div>
   </div>
   </div>
   <div class="col-sm-4"></div>
  </div>
  
  <div class="row">
   <div class="col-sm-12">
   
   </div>
  </div>
  
 </div>

</body>
</html>

  