<?php include_once 'templates/api.php';  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Java Tutorial</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>/styles/api/core-skeleton.css">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>/vendor/font-awesome/css/font-awesome.min.css">
  <script src="<?php echo $PROJECT_URL; ?>/js/api/core-skeleton.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/babel-standalone@6/babel.min.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/react@16/react.production.min.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/react-dom@16/react-dom.production.min.js"></script>
  <script type="text/babel" src="<?php echo $PROJECT_URL; ?>/js/components/component.app.content.menu.js"></script>
<script type="text/javascript">
var menu = '<?php if(isset($_GET["1"])){ echo $_GET["1"]; } ?>';
var subMenu = '<?php if(isset($_GET["2"])){ echo $_GET["2"]; } ?>';
</script>
<script type="text/babel">
var pageContent = {};
if(menu === 'html'){
  pageContent = { "contentMenu":[{ "id":"introduction-to-html",
                                  "label":"Introduction to html", 
                                  "subContentMenu":[{"id":"overview-of-html",
                                                     "label":"Overview to html",  
                                                     "url":"tutorial/html/overview-of-html" },
                                                       {"id":"history-of-html",
                                                        "label":"History of HTML",  
                                                        "url":"tutorial/html/history-of-html" }]
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
          if($_GET["1"]=='html' && $_GET["2"]=='overview-of-html'){
            include_once 'templates/webtech/dev/html/01-introduction-to-html.php';
          } else if($_GET["1"]=='html' && $_GET["2"]=='history-of-html'){
            include_once 'templates/webtech/dev/html/02-history-of-html.php';
          }

       }
       
     ?>
   </div>
  </div>
</div>

</body>
</html>