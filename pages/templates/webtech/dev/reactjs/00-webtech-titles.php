<?php
$WEBTECH_REACTJS = 'reactjs';
$WEBTECH_REACTJS_OVERVIEW = 'overview-of-reactjs';

if(isset($_GET["1"]) && isset($_GET["2"])){

   /**
    * REACTJS Tutorials
    */
   if($_GET["1"]==$WEBTECH_REACTJS && $_GET["2"]==$WEBTECH_REACTJS_OVERVIEW){
    echo '<title>Widesecond.com | Overview of React JS</title>';
   }
 }