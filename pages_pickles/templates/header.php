<script type="text/javascript">
var PROJECT_URL = '<?php echo $PROJECT_URL; ?>';

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
<style>
.navbar-default { background-color:#fff;border-color:#fff; }
.navbar-default .navbar-nav>.active>a,
 .navbar-default .navbar-nav>.active>a:focus, 
 .navbar-default .navbar-nav>.active>a:hover { 
   font-weight:bold;color:#d9534f;background-color:#fff;border-top:4px solid #d9534f;  }
 
 .navbar-default .navbar-nav { letter-spacing:1.3px; } 
</style>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#" style="font-family:thirdDegree;font-size:32px;letter-spacing:1px;">
        <span class="font-red"><b>Native pickles</b></span>
      </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li id="pickles-home"><a href="<?php echo $PROJECT_URL; ?>/pickles/home"><b>PICKLE VARIETIES</b></a></li>
        <li id="pickles-profile"><a href="<?php echo $PROJECT_URL; ?>/pickles/my-profile"><b>MY PROFILE</b></a></li>
        <li id="pickles-myOrderHistory"><a href="<?php echo $PROJECT_URL; ?>/pickles/my-order-history"><b>MY ORDER HISTORY</b></a></li>
        <li id="pickles-myCart"><a href="<?php echo $PROJECT_URL; ?>/pickles/my-cart"><b>MY CART</b></a></li>
        <li id="pickles-contactUs"><a href="<?php echo $PROJECT_URL; ?>/pickles/contact-us"><b>CONTACT US</b></a></li>
        <li id="pickles-logout"><a href="#"><b>LOG OUT</b></a></li>
        <li id="pickles-auth"><a href="<?php echo $PROJECT_URL; ?>/pickles/auth"><b>SIGN IN | REGISTER</b></a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="page-breadcrumb"></div>