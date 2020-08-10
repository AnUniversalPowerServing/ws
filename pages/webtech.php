<?php $DISPLAY_NAVBAR_MENU = false; ?>
<?php include_once 'templates/api.php';  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include_once 'templates/overview/webtech-titles.php';  ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>/vendor/highlight/css/highlight-night-owl.css">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>/styles/api/core-skeleton.css">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>/vendor/font-awesome/css/font-awesome.min.css">
  <script src="<?php echo $PROJECT_URL; ?>/js/api/core-skeleton.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/babel-standalone@6/babel.min.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/react@16/react.production.min.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/react-dom@16/react-dom.production.min.js"></script>
  <script type="text/babel" src="<?php echo $PROJECT_URL; ?>/js/components/component.app.content.menu.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/highlight/js/highlight.min.js"></script>
  <script>hljs.initHighlightingOnLoad();</script>
<script type="text/javascript">
var menu = '<?php if(isset($_GET["1"])){ echo $_GET["1"]; } ?>';
var subMenu = '<?php if(isset($_GET["2"])){ echo $_GET["2"]; } ?>';
</script>
<script type="text/babel">
var pageContent = {};
if(menu === 'html'){
  pageContent = { "contentMenu":[{ "id":"introduction-to-html-programming",
                                   "label":"Introduction to HTML", 
                                   "subContentMenu":[{"id":"overview-of-html-programming",
                                                      "label":"Overview of HTML",  
                                                      "url":"tutorial/webtech/html/overview-of-html-programming" },
                                                     {"id":"history-of-html-programming",
                                                      "label":"History of HTML",  
                                                      "url":"tutorial/webtech/html/history-of-html-programming" }]
                                },
                                { "id":"html-fundamentals",
                                   "label":"HTML Fundamentals", 
                                   "subContentMenu":[{"id":"get-started-with-html-programming",
                                                      "label":"Get Started",  
                                                      "url":"tutorial/webtech/html/get-started-with-html-programming" },
                                                     {"id":"html-tags-and-tag-attributes",
                                                      "label":"HTML Tags and Tag Attributes",  
                                                      "url":"tutorial/webtech/html/html-tags-and-tag-attributes" },
                                                     {"id":"html-favicon",
                                                      "label":"HTML Favicon",  
                                                      "url":"tutorial/webtech/html/html-favicon" },
                                                     {"id":"html-custom-scrollbars",
                                                      "label":"HTML Custom ScrollBars",  
                                                      "url":"tutorial/webtech/html/html-custom-scrollbars" },
                                                     {"id":"html-colors",
                                                      "label":"HTML Colors",  
                                                      "url":"tutorial/webtech/html/html-colors" }]
                                }]
              };
} else if(menu === 'angular'){
  pageContent = { "contentMenu":[{ "id":"introduction-to-angular-framework",
                                   "label":"Introduction to Angular Framework", 
                                   "subContentMenu":[{"id":"overview-of-angular-framework",
                                                      "label":"Overview of Angular Framework",  
                                                      "url":"tutorial/webtech/angular/overview-of-angular-framework" },
                                                      {"id":"architecture-of-angular-application",
                                                      "label":"Architecture of Angular Application",  
                                                      "url":"tutorial/webtech/angular/architecture-of-angular-application" }]
                                }]
                };
}
console.log(pageContent);
</script>
</head>
<body>
 
<?php include_once 'templates/header.php'; ?>

<div class="container-fluid fs14 mtop15p">
  <div class="row">
   <div id="content" class="col-sm-3"></div>
   <div class="col-sm-9">
     <?php 
       if(isset($_GET["1"]) && isset($_GET["2"])){
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

          /**
           * Angular Tutorials
           */
          else if($_GET["1"]==$WEBTECH_ANGULAR && $_GET["2"]==$WEBTECH_ANGULAR_OVERVIEW){
            include_once 'templates/webtech/dev/angular/01-overview-of-angular.php';
          } else if($_GET["1"]==$WEBTECH_ANGULAR && $_GET["2"]==$WEBTECH_ANGULAR_ARCHITECTURE){
            include_once 'templates/webtech/dev/angular/02-architecture-of-angular.php';
          }
       }
       
     ?>
   </div>
  </div>
</div>

</body>
</html>