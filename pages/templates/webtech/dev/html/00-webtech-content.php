<?php
if($_GET["1"]==$WEBTECH_HTML && $_GET["2"]==$WEBTECH_HTML_OVERVIEW){
   include_once 'templates/webtech/dev/html/01-overview-of-html-programming.php';
} else if($_GET["1"]==$WEBTECH_HTML && $_GET["2"]==$WEBTECH_HTML_HISTORY){
   include_once 'templates/webtech/dev/html/02-history-of-html-programming.php';
} else if($_GET["1"]==$WEBTECH_HTML && $_GET["2"]==$WEBTECH_HTML_GETSTARTED){
    include_once 'templates/webtech/dev/html/03-get-started-with-html-programming.php';
} else if($_GET["1"]==$WEBTECH_HTML && $_GET["2"]==$WEBTECH_HTML_TAGS){
    include_once 'templates/webtech/dev/html/04-html-tags-and-tag-attributes.php';
} else if($_GET["1"]==$WEBTECH_HTML && $_GET["2"]==$WEBTECH_HTML_FAVICON){
    include_once 'templates/webtech/dev/html/05-html-favicon.php';
} else if($_GET["1"]==$WEBTECH_HTML && $_GET["2"]==$WEBTECH_HTML_SCROLLBARS){
    include_once 'templates/webtech/dev/html/06-html-custom-scrollbars.php';
} else if($_GET["1"]==$WEBTECH_HTML && $_GET["2"]==$WEBTECH_HTML_COLORS){
    include_once 'templates/webtech/dev/html/07-html-colors.php';
}
?>