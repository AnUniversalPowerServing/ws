<?php
$WEBTECH_WEBSESSIONS = 'web-sessions';
$WEBTECH_WEBSESSIONS_OVERVIEW = 'overview-of-web-sessions';

if(isset($_GET["1"]) && isset($_GET["2"])){

   /**
    * SELENIUM Tutorials
    */
   if($_GET["1"]==$WEBTECH_WEBSESSIONS && $_GET["2"]==$WEBTECH_WEBSESSIONS_OVERVIEW){
    echo '<title>Widesecond.com | Overview of Web Sessions</title>';
   }
 }