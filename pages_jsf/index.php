<?php include_once 'templates/api.php';  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>UPSC Preparation Network</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>/vendor/bootstrap-advanced/css/bootstrap-advanced.css">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>/vendor/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>/styles/api/core-skeleton.css">
  <script src="<?php echo $PROJECT_URL; ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/captcha/js/jquery-captcha-lgh.min.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/bootstrap-advanced/js/bootstrap-advanced.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/js/api/core-skeleton.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/js/templates/auth/WebForm.js"></script>

  <!-- Payment Gateway Plugin ::: START -->
  <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/js/templates/auth/PaymentButton.js"></script>
  <!-- Payment Gateway Plugin ::: END -->
<script type="text/javascript">
$(document).ready(function(){
  payTransaction = { customerId:0, purchaseId:0, purchaseDesc:'', amount:5000, orderId:0 };
  document.getElementById("paymentGateway").innerHTML = paymentButton.display();

  webFormBuilder = new WebFormBuilder(webForm);
  document.getElementById("root").innerHTML = webFormBuilder.display();
  bootstrap_formField_trigger('error',['SingleFormOpt1','MultipleFormOpt1','MultipleFormOpt2','MultipleFormOpt3']);
});
</script>
</head>
<body>
<div id="paymentGateway"></div>
<div id="root"></div>
</body>
</html>