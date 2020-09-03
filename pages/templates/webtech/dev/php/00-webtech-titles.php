<?php
$WEBTECH_PHP = 'php';
$WEBTECH_PHP_OVERVIEW = 'overview-of-php';

if(isset($_GET["1"]) && isset($_GET["2"])){

   /**
    * PHP Tutorials
    */
   if($_GET["1"]==$WEBTECH_PHP && $_GET["2"]==$WEBTECH_PHP_OVERVIEW){
    echo '<title>Widesecond.com | Overview of PHP</title>';
   }
 }