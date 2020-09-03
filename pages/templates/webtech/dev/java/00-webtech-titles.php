<?php

$WEBTECH_JAVA = 'java';
$WEBTECH_ORACLEDB_DATETIME = 'java-to-oracle-database-date-time';
$WEBTECH_JAVAINTFC_COMPARABLE_COMPARATOR= 'java-interfaces-comparable-and-comparator';

if(isset($_GET["1"]) && isset($_GET["2"])){
/**
 * Java Tutorials
 */
 if($_GET["1"]==$WEBTECH_JAVA && $_GET["2"]==$WEBTECH_ORACLEDB_DATETIME){
    echo '<title>Widesecond.com | Oracle Database Date Time</title>';
 } else if($_GET["1"]==$WEBTECH_JAVA && $_GET["2"]==$WEBTECH_JAVAINTFC_COMPARABLE_COMPARATOR){
    echo '<title>Widesecond.com | Comparable and Comparator</title>';
 }
  
}

?>