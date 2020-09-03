<?php

$WEBTECH_JAVASPRING = 'java-spring';
$WEBTECH_JAVASPRING_OVERVIEW = 'overview-of-java-spring-framework';
$WEBTECH_JAVASPRING_MODULES = 'modules-of-java-spring-framework';

if(isset($_GET["1"]) && isset($_GET["2"])){
/**
 * Java Spring Framework
 */
 if($_GET["1"]==$WEBTECH_JAVASPRING && $_GET["2"]==$WEBTECH_JAVASPRING_OVERVIEW){
    echo '<title>Widesecond.com | Overview of Java Spring Framework</title>';
 } else if($_GET["1"]==$WEBTECH_JAVASPRING && $_GET["2"]==$WEBTECH_JAVASPRING_MODULES){
    echo '<title>Widesecond.com | Modules of Java Spring Framework</title>';
 }
}

?>