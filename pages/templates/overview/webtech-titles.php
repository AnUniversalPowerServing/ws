<?php
$WEBTECH_HTML = 'html';
$WEBTECH_HTML_OVERVIEW = 'overview-of-html-programming';
$WEBTECH_HTML_HISTORY = 'history-of-html-programming';
$WEBTECH_HTML_GETSTARTED = 'get-started-with-html-programming';
$WEBTECH_HTML_TAGS = 'html-tags-and-tag-attributes';
$WEBTECH_HTML_FAVICON = 'html-favicon';
$WEBTECH_HTML_SCROLLBARS = 'html-custom-scrollbars';
$WEBTECH_HTML_COLORS = 'html-colors';

$WEBTECH_ANGULAR = 'angular';
$WEBTECH_ANGULAR_OVERVIEW = 'overview-of-angular-framework';
$WEBTECH_ANGULAR_ARCHITECTURE = 'architecture-of-angular-application';

?>
<?php 
  if(isset($_GET["1"]) && isset($_GET["2"])){
   if($_GET["1"]==$WEBTECH_HTML && $_GET["2"]==$WEBTECH_HTML_OVERVIEW){
     echo '<title>Widesecond.com | Overview of HTML Programming</title>';
   } else if($_GET["1"]==$WEBTECH_HTML && $_GET["2"]==$WEBTECH_HTML_HISTORY){
     echo '<title>Widesecond.com | History of HTML Programming</title>';
   } else if($_GET["1"]==$WEBTECH_HTML && $_GET["2"]==$WEBTECH_HTML_GETSTARTED){
     echo '<title>Widesecond.com | Get Started with HTML programming</title>';
   } else if($_GET["1"]==$WEBTECH_HTML && $_GET["2"]==$WEBTECH_HTML_TAGS){
     echo '<title>Widesecond.com | HTML Tags and Tag Attributes</title>';
   } else if($_GET["1"]==$WEBTECH_HTML && $_GET["2"]==$WEBTECH_HTML_FAVICON){
     echo '<title>Widesecond.com | HTML Favicon</title>';
   } else if($_GET["1"]==$WEBTECH_HTML && $_GET["2"]==$WEBTECH_HTML_SCROLLBARS){
     echo '<title>Widesecond.com | HTML Custom ScrollBars</title>';
   } else if($_GET["1"]==$WEBTECH_HTML && $_GET["2"]==$WEBTECH_HTML_COLORS){
     echo '<title>Widesecond.com | HTML Colors</title>';
   } 
   
   /**
    * Angular Tutorials
    */
   else if($_GET["1"]==$WEBTECH_ANGULAR && $_GET["2"]==$WEBTECH_ANGULAR_OVERVIEW){
    echo '<title>Widesecond.com | Overview of Angular Framework</title>';
   } else if($_GET["1"]==$WEBTECH_ANGULAR && $_GET["2"]==$WEBTECH_ANGULAR_ARCHITECTURE){
    echo '<title>Widesecond.com | Architecture of Angular Application</title>';
   }
  }
?>