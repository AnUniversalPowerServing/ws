<?php
$WEBTECH_JAVASCRIPT = 'javascript';
$WEBTECH_JAVASCRIPT_OVERVIEW = 'overview-of-javascript';

if(isset($_GET["1"]) && isset($_GET["2"])){

   /**
    * Font-Awesome Icons Tutorials
    */
   if($_GET["1"]==$WEBTECH_JAVASCRIPT && $_GET["2"]==$WEBTECH_JAVASCRIPT_OVERVIEW){
    echo '<title>Widesecond.com | Overview of Javascript</title>';
   }
 }