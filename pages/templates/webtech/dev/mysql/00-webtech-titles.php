<?php
$WEBTECH_MYSQL = 'mysql';
$WEBTECH_MYSQL_OVERVIEW = 'overview-of-mysql';

if(isset($_GET["1"]) && isset($_GET["2"])){

   /**
    * Font-Awesome Icons Tutorials
    */
   if($_GET["1"]==$WEBTECH_MYSQL && $_GET["2"]==$WEBTECH_MYSQL_OVERVIEW){
    echo '<title>Widesecond.com | Overview of MySQL Server</title>';
   }
 }