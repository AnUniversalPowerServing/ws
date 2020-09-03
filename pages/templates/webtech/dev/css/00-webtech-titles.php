<?php
$WEBTECH_CSS = 'css';
$WEBTECH_CSS_OVERVIEW = 'overview-of-css';

if(isset($_GET["1"]) && isset($_GET["2"])){

   /**
    * WEBTECH_CSS_OVERVIEW Tutorials
    */
   if($_GET["1"]==$WEBTECH_CSS && $_GET["2"]==$WEBTECH_CSS_OVERVIEW){
    echo '<title>Widesecond.com | Overview of CSS</title>';
   }
 }