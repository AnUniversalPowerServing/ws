<?php
$WEBTECH_AWS = 'aws';
$WEBTECH_AWS_CERTIFYPROG = 'aws-certification-courses';

if(isset($_GET["1"]) && isset($_GET["2"])){
 /**
  * AWS Tutorials
  */
 if($_GET["1"]==$WEBTECH_AWS && $_GET["2"]==$WEBTECH_AWS_CERTIFYPROG){
   echo '<title>Widesecond.com | AWS Certificate Program</title>'; 
 }
}

?>