<?php
/**
 * Java tutorials
 */
 if($_GET["1"]==$WEBTECH_JAVA && $_GET["2"]==$WEBTECH_ORACLEDB_DATETIME){
    include_once 'templates/webtech/dev/java/01-dateTime.php';
 } else if($_GET["1"]==$WEBTECH_JAVA && $_GET["2"]==$WEBTECH_JAVAINTFC_COMPARABLE_COMPARATOR){
    include_once 'templates/webtech/dev/java/02-java-interfaces-comparable-and-comparator.php';
 }
?>