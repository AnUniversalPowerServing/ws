<?php
$WEBTECH_ANGULAR = 'angular';
$WEBTECH_ANGULAR_ANGULARJS = 'angular-and-angular-js-framework';
$WEBTECH_ANGULAR_OVERVIEW = 'overview-of-angular-framework';
$WEBTECH_ANGULAR_ARCHITECTURE = 'architecture-of-angular-application';

if(isset($_GET["1"]) && isset($_GET["2"])){
   /**
    * Angular Tutorials
    */
   if($_GET["1"]==$WEBTECH_ANGULAR && $_GET["2"]==$WEBTECH_ANGULAR_ANGULARJS){
      echo '<title>Widesecond.com | Angular & Angular JS</title>';
   } else if($_GET["1"]==$WEBTECH_ANGULAR && $_GET["2"]==$WEBTECH_ANGULAR_OVERVIEW){
      echo '<title>Widesecond.com | Overview of Angular Framework</title>';
   } else if($_GET["1"]==$WEBTECH_ANGULAR && $_GET["2"]==$WEBTECH_ANGULAR_ARCHITECTURE){
      echo '<title>Widesecond.com | Architecture of Angular Application</title>';
   }
}