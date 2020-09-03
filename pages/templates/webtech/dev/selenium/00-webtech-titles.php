<?php
$WEBTECH_SELENIUM = 'selenium';
$WEBTECH_SELENIUM_OVERVIEW = 'overview-of-selenium';

if(isset($_GET["1"]) && isset($_GET["2"])){

   /**
    * SELENIUM Tutorials
    */
   if($_GET["1"]==$WEBTECH_SELENIUM && $_GET["2"]==$WEBTECH_SELENIUM_OVERVIEW){
    echo '<title>Widesecond.com | Overview of Selenium</title>';
   }
 }