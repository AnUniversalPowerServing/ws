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
  <?php include_once 'templates/components.php'; ?>
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
ReactDOM.render(<CodeBase />, document.getElementById('root'));
ReactDOM.render(<PaymentButton orderId="0"
                               customerId="0" 
                               purchaseId="0" 
                               purchaseDesc=""  
                               amount="500" />, 
      document.getElementById('paymentGtwy'));
ReactDOM.render(<Dropdown />,  document.getElementById('select'));
</script>
</head>
<body>

<div class="container">
  <div id="root"></div>    
  <div id="paymentGtwy"></div>
  <div id="select"></div>
  <select class="form-control">
    <option>Value</option>
    <option>Value</option>
    <option>Value</option>
  </select>
</div>

</body>
</html>
