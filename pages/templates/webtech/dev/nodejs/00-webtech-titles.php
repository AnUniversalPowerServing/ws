<?php
$WEBTECH_NODEJS = 'nodejs';
$WEBTECH_NODEJS_OVERVIEW = 'overview-of-nodejs';

if(isset($_GET["1"]) && isset($_GET["2"])){

   /**
    * NodeJS Tutorials
    */
   if($_GET["1"]==$WEBTECH_NODEJS && $_GET["2"]==$WEBTECH_NODEJS_OVERVIEW){
    echo '<title>Widesecond.com | Overview of NodeJS</title>';
   }
 }