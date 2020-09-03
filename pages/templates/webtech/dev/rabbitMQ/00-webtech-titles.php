<?php
$WEBTECH_RABBITMQ = 'rabbitMQ';
$WEBTECH_RABBITMQ_OVERVIEW = 'overview-of-rabbitMQ';

if(isset($_GET["1"]) && isset($_GET["2"])){

   /**
    * RABBITMQ Tutorials
    */
   if($_GET["1"]==$WEBTECH_RABBITMQ && $_GET["2"]==$WEBTECH_RABBITMQ_OVERVIEW){
    echo '<title>Widesecond.com | Overview of RabbitMQ</title>';
   }
 }