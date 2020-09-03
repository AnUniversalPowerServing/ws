<?php
$WEBTECH_APACHEKAFKA = 'apache-kafka';
$WEBTECH_APACHEKAFKA_OVERVIEW = 'overview-of-apache-kafka';

if(isset($_GET["1"]) && isset($_GET["2"])){

    /**
    * Apache Kafka Tutorials
    */
   if($_GET["1"]==$WEBTECH_APACHEKAFKA && $_GET["2"]==$WEBTECH_APACHEKAFKA_OVERVIEW){
    echo '<title>Widesecond.com | Overview of Apache Kafka</title>';
   }
 }