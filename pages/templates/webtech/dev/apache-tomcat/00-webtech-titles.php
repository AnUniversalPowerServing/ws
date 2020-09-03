<?php
$WEBTECH_APACHETOMCAT = 'apache-tomcat';
$WEBTECH_APACHETOMCAT_OVERVIEW = 'overview-of-apache-tomcat';

if(isset($_GET["1"]) && isset($_GET["2"])){

    /**
    * Apache Kafka Tutorials
    */
   if($_GET["1"]==$WEBTECH_APACHETOMCAT && $_GET["2"]==$WEBTECH_APACHETOMCAT_OVERVIEW){
    echo '<title>Widesecond.com | Overview of Apache Tomcat</title>';
   }
 }