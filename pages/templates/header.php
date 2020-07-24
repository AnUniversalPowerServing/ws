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

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><span class="font-red"><b>WideSecond.com</b></span></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li id="tutorial-ecmascript"><a href="<?php echo $PROJECT_URL; ?>/tutorial/ecmascript/introduction-to-ecmascript"><b>Javascript (Ecmascript)</b></a></li>
        <li id="tutorial-typescript"><a href="<?php echo $PROJECT_URL; ?>/tutorial/typescript/introduction-to-typescript"><b>Typescript</b></a></li>
        <li id="tutorial-reactjs"><a href="<?php echo $PROJECT_URL; ?>/tutorial/reactjs/introduction-to-reactjs"><b>React JS</b></a></li>
        <li id="tutorial-aws"><a href="<?php echo $PROJECT_URL; ?>/tutorial/aws/introduction-to-aws"><b>AWS</b></a></li>
        <li id="tutorial-seo"><a href="<?php echo $PROJECT_URL; ?>/tutorial/seo/introduction-to-seo"><b>SEO</b></a></li>
        <li id="tutorial-java"><a href="<?php echo $PROJECT_URL; ?>/tutorial/java/introduction-to-java"><b>Java</b></a></li>
        <li><a href="#">Page 3</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="page-breadcrumb"></div>