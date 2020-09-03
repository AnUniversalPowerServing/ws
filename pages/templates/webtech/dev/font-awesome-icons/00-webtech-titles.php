<?php
$WEBTECH_FONTAWESOMEICONS = 'font-awesome-icons';
$WEBTECH_FONTAWESOMEICONS_OVERVIEW = 'overview-of-font-awesome-icons';

if(isset($_GET["1"]) && isset($_GET["2"])){

   /**
    * Font-Awesome Icons Tutorials
    */
   if($_GET["1"]==$WEBTECH_FONTAWESOMEICONS && $_GET["2"]==$WEBTECH_FONTAWESOMEICONS_OVERVIEW){
    echo '<title>Widesecond.com | Overview of Font-Awesome Icons</title>';
   }
 }