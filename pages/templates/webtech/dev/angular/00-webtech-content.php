<?php
  /**
   * Angular Tutorials
   */
    if($_GET["1"]==$WEBTECH_ANGULAR && $_GET["2"]==$WEBTECH_ANGULAR_OVERVIEW){
       include_once 'templates/webtech/dev/angular/01-overview-of-angular.php';
    } else if($_GET["1"]==$WEBTECH_ANGULAR && $_GET["2"]==$WEBTECH_ANGULAR_ANGULARJS){
       include_once 'templates/webtech/dev/angular/02-angular-and-angular-js.php';
    } else if($_GET["1"]==$WEBTECH_ANGULAR && $_GET["2"]==$WEBTECH_ANGULAR_ARCHITECTURE){
       include_once 'templates/webtech/dev/angular/03-architecture-of-angular.php';
    }
?>