<?php
$WEBTECH_APACHEHTTPSERVER = 'apache-http-server';
$WEBTECH_APACHEHTTPSERVER_OVERVIEW = 'overview-of-apache-http-server';

if(isset($_GET["1"]) && isset($_GET["2"])){

    /**
    * Apache Http Server Tutorials
    */
   if($_GET["1"]==$WEBTECH_APACHEHTTPSERVER && $_GET["2"]==$WEBTECH_APACHEHTTPSERVER_OVERVIEW){
    echo '<title>Widesecond.com | Overview of Apache Http Server</title>';
   }
 }