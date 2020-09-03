<?php $DISPLAY_NAVBAR_MENU = false; ?>
<?php include_once 'templates/api.php';  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php 
   if(isset($_GET["1"])){ 
     include_once 'templates/webtech/dev/'.$_GET["1"].'/00-webtech-titles.php';
   } 
   ?>
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
<script type="text/babel">
var menu = '<?php if(isset($_GET["1"])){ echo $_GET["1"]; } ?>';
var subMenu = '<?php if(isset($_GET["2"])){ echo $_GET["2"]; } ?>';
var pageContent = {};
function build_pageBreadcrumb(jsonData){
 var content='<nav aria-label="breadcrumb">';
     content+='<ol class="breadcrumb">';
 for(var index in jsonData){
  var url = jsonData[index].url;
  var label = jsonData[index].label;
  if(url === undefined){
    content+='<li class="breadcrumb-item active" aria-current="page">'+label+'</li>';
  } else {
    content+='<li class="breadcrumb-item"><a href="'+PROJECT_URL+'/'+url+'">'+label+'</a></li>';
  }
 }  
     content+='</ol>';
     content+='</nav>';
 document.getElementById("page-breadcrumb").innerHTML = content;
}
</script>
<?php 
  if(isset($_GET["1"])){ 
    include_once 'templates/webtech/dev/'.$_GET["1"].'/00-webtech-menu.php';
  } 
?>
<script type="text/babel">
console.log(pageContent);
</script>
</head>
<body>
 
<?php include_once 'templates/header.php'; ?>

<div class="container-fluid fs14 mtop15p">
<?php if(isset($_GET["1"]) && isset($_GET["2"])){ ?>

  <div class="row">
   <div id="content" class="col-sm-3"></div>
   <div class="col-sm-9">
   <?php 
     if(isset($_GET["1"])){ 
      include_once 'templates/webtech/dev/'.$_GET["1"].'/00-webtech-content.php';
     } 
    ?>
   </div>
  </div>

<?php  } ?>
</div>
</body>
</html>