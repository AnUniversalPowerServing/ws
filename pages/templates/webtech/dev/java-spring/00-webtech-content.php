<?php 
/**
 * Java Spring Framework
 */
 if($_GET["1"]==$WEBTECH_JAVASPRING && $_GET["2"]==$WEBTECH_JAVASPRING_OVERVIEW){
    include_once 'templates/webtech/dev/java-spring/01-introduction-to-java-spring-framework.php';
 } else if($_GET["1"]==$WEBTECH_JAVASPRING && $_GET["2"]==$WEBTECH_JAVASPRING_MODULES){
    include_once 'templates/webtech/dev/java-spring/02-modules-of-spring.php';
 }
?>