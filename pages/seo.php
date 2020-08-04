<?php include_once 'templates/api.php';  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Search Engine Optimization</title>
  <meta name="description" content="Free Web tutorials">
  <meta name="keywords" content="seo, seo tools, seo khazana, seo report, seositecheckup, seoclerks, seo login, seo jobs, seo services, seo images">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>/styles/api/core-skeleton.css">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>/vendor/font-awesome//css/font-awesome.min.css">
  <script src="<?php echo $PROJECT_URL; ?>/js/api/core-skeleton.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/babel-standalone@6/babel.min.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/react@16/react.production.min.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/react-dom@16/react-dom.production.min.js"></script>
  <script type="text/babel" src="<?php echo $PROJECT_URL; ?>/js/components/component.app.content.menu.js"></script>
  <script type="text/javascript">
$(document).ready(function(){
 $('#tutorial-seo').addClass('active');
});
var pageContent = { "contentMenu":[{ "id":"introduction-to-seo",
                                     "label":"Introduction to SEO", 
                                     "url":"tutorial/seo/introduction-to-seo", 
                                     "subContentMenu":[{"id":"necessity-of-search-engine-and-its-optimization",
                                                        "label":"Necessity of Search Engine and its Optimization",  
                                                        "url":"tutorial/seo/introduction-to-seo#Necessity-of-Search-Engine-and-its-Optimization" },
                                                        {"id":"search-engine-facts-trends-and-statistics",
                                                         "label":"Search Engine's Facts, Trends and Statistics",  
                                                         "url":"tutorial/seo/introduction-to-seo#Search-Engine-Facts-Trends-and-Statistics" },
                                                      ]
                                   },
                                   { "id":"seo-fundamentals",
                                     "label":"SEO Fundamentals", 
                                     "url":"tutorial/seo/seo-fundamentals", 
                                     "subContentMenu":[{ "id":"what-is-seo-and-how-it-works",
                                                         "label":"What is SEO and How it works?", 
                                                         "url":"tutorial/seo/what-is-seo-and-how-it-works" }] }
                                  ]
                  };
</script>

<script type="text/babel">
ReactDOM.render(<ContentMenu data={pageContent} 
                             selectMenuId="introduction-to-seo" 
                             selectSubMenuId="necessity-of-search-engine-and-its-optimization"/>, 
                             document.getElementById('content'));
</script>
</head>
<body>
  <?php include_once 'templates/header.php'; ?>

  <div class="container-fluid fs14 mtop15p">
   <div class="row">
     <div id= "content" class="col-sm-3">
      <?php include_once 'templates/tutorials/seo/00-content.php'; ?>
     </div>
     <div class="col-sm-9">

       <?php 
         if(isset($_GET["1"]) && $_GET["1"]=='introduction-to-seo'){
            include_once 'templates/tutorials/seo/01-introduction-to-seo.php';
         } else if(isset($_GET["1"]) && $_GET["1"]=='factors-improving-search-engine-ranking'){
            include_once 'templates/tutorials/seo/02-factors-improving-search-engine-ranking.php';
         } else if(isset($_GET["1"]) && $_GET["1"]=='keyword-research'){
            include_once 'templates/tutorials/seo/03-keyword-research.php';
         } else if(isset($_GET["1"]) && $_GET["1"]=='backlinks-in-seo'){
            include_once 'templates/tutorials/seo/04-backlinks-in-seo.php';
         } else if(isset($_GET["1"]) && $_GET["1"]=='how-search-engine-works'){
            include_once 'templates/tutorials/seo/05-how-search-engine-works.php';
         } else if(isset($_GET["1"]) && $_GET["1"]=='how-google-search-engine-works'){
            include_once 'templates/tutorials/seo/06-how-google-search-engine-works.php';
         } else if(isset($_GET["1"]) && $_GET["1"]=='google-crawler'){
            include_once 'templates/tutorials/seo/07-google-crawler.php';
         } else if(isset($_GET["1"]) && $_GET["1"]=='types-of-search-engine-seo'){
            include_once 'templates/tutorials/seo/08-types-of-search-engine-seo.php';
         } else if(isset($_GET["1"]) && $_GET["1"]=='black-hat-seo'){
            include_once 'templates/tutorials/seo/09-black-hat-seo.php';
         } else if(isset($_GET["1"]) && $_GET["1"]=='white-hat-seo'){
            include_once 'templates/tutorials/seo/10-white-hat-seo.php';
         } else if(isset($_GET["1"]) && $_GET["1"]=='how-website-known-to-search-engine'){
            include_once 'templates/tutorials/seo/11-how-website-known-to-search-engine.php';
         } else if(isset($_GET["1"]) && $_GET["1"]=='search-engines-ranking-factors'){
            include_once 'templates/tutorials/seo/12-search-engines-ranking-factors.php';
         } 
         

         
         
         
       ?>


       

     </div><!--/.col-sm-9 -->
   </div><!--/.row -->
   <div class="row">
    <div class="col-sm-7">
      
    </div><!--/.col-sm-7 -->
   </div>
  </div><!--/.container-fluid -->
</body>
</html>