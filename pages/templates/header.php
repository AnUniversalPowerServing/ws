<?php if(!isset($DISPLAY_NAVBAR_MENU)){ $DISPLAY_NAVBAR_MENU = true; } ?>
<script type="text/javascript">
$(document).ready(function () {

$('.navbar .dropdown-item').on('click', function (e) {
    var $el = $(this).children('.dropdown-toggle');
    var $parent = $el.offsetParent(".dropdown-menu");
    $(this).parent("li").toggleClass('open');

    if (!$parent.parent().hasClass('navbar-nav')) {
        if ($parent.hasClass('show')) {
            $parent.removeClass('show');
            $el.next().removeClass('show');
            $el.next().css({"top": -999, "left": -999});
        } else {
            $parent.parent().find('.show').removeClass('show');
            $parent.addClass('show');
            $el.next().addClass('show');
            $el.next().css({"top": $el[0].offsetTop, "left": $parent.outerWidth() - 4});
        }
        e.preventDefault();
        e.stopPropagation();
    }
});

$('.navbar .dropdown').on('hidden.bs.dropdown', function () {
    $(this).find('li.dropdown').removeClass('show open');
    $(this).find('ul.dropdown-menu').removeClass('show open');
});

});

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

<div id="appHeader">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <?php if($DISPLAY_NAVBAR_MENU){ ?>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <?php } ?>
      <a class="navbar-brand" href="<?php echo $PROJECT_URL; ?>">
        <span class="font-red"><b>WideSecond.com</b></span>
      </a>
    </div>
    <?php if($DISPLAY_NAVBAR_MENU){ ?>
    <div class="collapse navbar-collapse" id="appHeaderNavBar">
      <ul class="nav navbar-nav">
      <!--
        <li id="tutorial-proglang" class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><b>Programming Languages</b>&nbsp;
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Java</a></li>
            <li><a href="#">Python</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" id="appMenu-tutorials" data-toggle="dropdown" 
         aria-haspopup="true" aria-expanded="false">
         <b>Tutorials</b>&nbsp;
         <i class="fa fa-caret-down"></i></a>
         </a>
         <ul class="dropdown-menu" aria-labelledby="appMenu-tutorials">
           <li class="dropdown-item dropdown">
              <a class="dropdown-toggle" id="tutorials-webTech" data-toggle="dropdown" 
                aria-haspopup="true" aria-expanded="false">
                  <b>Web Technologies</b>&nbsp;
                  <i class="fa fa-caret-right pull-right"></i>
              </a>
              <ul class="dropdown-menu" aria-labelledby="tutorials-webTech">
                <li class="dropdown-item dropdown">
                  <a class="dropdown-toggle" id="tutorials-webTech-frontEnd" data-toggle="dropdown" 
                    aria-haspopup="true" aria-expanded="false">
                      <b>Frontend Development</b>&nbsp;
                      <i class="fa fa-caret-right pull-right"></i>
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="tutorials-webTech-frontEnd">
                    <li class="dropdown-header">Basics</li>
                    <li class="divider"></li>
                    <li><a href="#"><b>HTML</b></a></li>
                    <li><a href="#"><b>Javascript</b></a></li>
                    <li><a href="#"><b>CSS</b></a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Frameworks</li>
                    <li class="divider"></li>
                    <li><a href="#"><b>Bootstrap</b></a></li>
                    <li><a href="#"><b>Angular</b></a></li>
                    <li><a href="#"><b>React JS</b></a></li>
                  </ul>
                </li>
                <li class="dropdown-item dropdown">
                  <a class="dropdown-toggle" id="tutorials-webTech-backEnd" data-toggle="dropdown" 
                    aria-haspopup="true" aria-expanded="false">
                      <b>Backend Development</b>&nbsp;
                      <i class="fa fa-caret-right pull-right"></i>
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="tutorials-webTech-backEnd">
                    <li class="dropdown-header">Technologies</li>
                    <li class="divider"></li>
                    <li><a href="#"><b>PHP</b></a></li>
                    <li><a href="#"><b>Java</b></a></li>
                    <li><a href="#"><b>NodeJS</b></a></li>
                  </ul>
                </li>
                <li class="dropdown-item dropdown">
                  <a class="dropdown-toggle" id="tutorials-webTech-hosting" data-toggle="dropdown" 
                    aria-haspopup="true" aria-expanded="false">
                      <b>Web Hosting</b>&nbsp;
                      <i class="fa fa-caret-right pull-right"></i>
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="tutorials-webTech-hosting">
                    <li class="dropdown-header">Basics</li>
                    <li class="divider"></li>
                    <li><a href="#"><b>Networking and Hosting</b></a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Hosting Platforms</li>
                    <li class="divider"></li>
                    <li><a href="#"><b>Amazon Web Services</b></a></li>
                    <li><a href="#"><b>Godaddy</b></a></li>
                  </ul>
                </li>
              </ul>
           </li>
          </ul>
        </li>
        <li id="tutorial-proglang" class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><b>Web Technologies</b>&nbsp;
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li class="dropdown-header">Frontend Development</li>
            <li class="divider"></li>
            <li class="dropdown-header">Basics</li>
            <li class="divider"></li>
            <li><a href="#">HTML</a></li>
            <li><a href="#">Javascript</a></li>
            <li><a href="#">ECMAScript</a></li>
            <li class="divider"></li>
            <li class="dropdown-header">Backend Development</li>
            <li class="divider"></li>
            <li><a href="#">Python</a></li>
          </ul>
        </li>
        -->
        <li id=""><a href="#"><b></b></a></li>
        <li id="tutorial-javascript"><a href="<?php echo $PROJECT_URL; ?>/tutorial/javascript/introduction-to-javascript"><b>Javascript</b></a></li>
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
  <?php } ?>
</nav>

</div>
<div id="page-breadcrumb"></div>