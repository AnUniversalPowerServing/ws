<?php $PROJECT_URL = 'http://localhost/ws'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Search Engine Optimization</title>
  <meta name="description" content="Free Web tutorials">
  <meta name="keywords" content="seo, seo tools, seo khazana, seo report, seositecheckup, seoclerks, seo login, seo jobs, seo services, seo images">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>/styles/api/core-skeleton.css">
  <script src="<?php echo $PROJECT_URL; ?>/js/api/core-skeleton.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
 $('#tutorial-seo').addClass('active');
});
</script>
</head>
<body>
  <?php include_once 'templates/header.php'; ?>

  <div class="container-fluid fs14 mtop15p">
   <div class="row">
     <div class="col-sm-3">
      <?php include_once 'templates/seo/00-content.php'; ?>
     </div>
     <div class="col-sm-6">

       <?php 
         if(isset($_GET["1"]) && $_GET["1"]=='introduction-to-seo'){
            include_once 'templates/seo/01-introduction-to-seo.php';
         } else if(isset($_GET["1"]) && $_GET["1"]=='factors-improving-search-engine-ranking'){
            include_once 'templates/seo/02-factors-improving-search-engine-ranking.php';
         } else if(isset($_GET["1"]) && $_GET["1"]=='keyword-research'){
            include_once 'templates/seo/03-keyword-research.php';
         } else if(isset($_GET["1"]) && $_GET["1"]=='backlinks-in-seo'){
            include_once 'templates/seo/04-backlinks-in-seo.php';
         } else if(isset($_GET["1"]) && $_GET["1"]=='how-search-engine-works'){
            include_once 'templates/seo/05-how-search-engine-works.php';
         } else if(isset($_GET["1"]) && $_GET["1"]=='how-google-search-engine-works'){
            include_once 'templates/seo/06-how-google-search-engine-works.php';
         } 

         
       ?>


       <!-- Google Crawler / Googlebot -->
       <div><h4 class="font-red"><b>Google Crawler / Googlebot</b></h4></div>
       <div class="list-group mbot10p">
        <div class="list-group-item">
          <i>Crawler</i> or <i>Spider</i> or <i>robot</i> is a program used to discover and scan 
          webpages in website by following links from one webpage to another. Google's Search Engine 
          Crawler is called as <i>Googlebot</i>.
        </div><!--/.list-group-item -->
       </div><!--/.list-group -->

       <div class="jumbotron mbot10p">
       Frequency of crawling a Website by a Googlebot can be few days to a few weeks. 
       Googlebot Crawling Progress can be monitored using <a href="#"><i>Index Status Report</i></a> and 
       <a href="#"><i>URL Inspection Tool</i></a>.
       </div>
       <div>Googlebot contains two different types of crawlers:</div>
       <div>
        <ul>
          <li><b>Desktop Crawler:</b> It simulates as a User on Desktop</li>
          <li><b>Mobile Crawler:</b> It simulates as a User on Mobile Device</li>
        </ul>
       </div>
       <div>Every Website will be crawled by both Googlebot Desktop and Googlebot Smartphone.</div>
       
       <!-- -->
       <div><h4 class="font-red"><b>How Googlebot access a Website?</b></h4></div>
       <div>

       </div>

       <div><h4 class="font-red"><b>Introduction to robots.txt</b></h4></div>

       <div><h4 class="font-red"><b>Googlebot Crawl Rate</b></h4></div>

       <div class="list-group">
        <div class="list-group-item">
          <div>In a second, Number of Requests made to crawl a Website by Googlebot (Google Crawler)
          is called as <i>Googlebot Crawl Rate</i>.</div>
          <div>For example, <i>5 Requests per second</i>.</div>
        </div><!--/.list-group-item -->
      </div><!--/.list-group -->
       
      <div class="jumbotron">
        We can't change how often Googlebot crawls your site. But, When the New Content or Updated an 
        Existing Content in the Website, we can request for a recrawl.
      </div><!--/.jumbotron -->

      <div><b>Recrawl Requests</b> can be done in two ways:</div>

      <div>
        <ul>
          <li>Using URL Inspection Tool</li>
          <li>By Submitting SiteMap (Many URLs at Once)</li>
        </ul>
      </div>

     </div><!--/.col-sm-6 -->
     <div class="col-sm-3">

      <div><h4 class="font-red"><b>Googlebot Terminologies</b></h4></div>

      
      
      

    </div><!--/.col-sm-5 -->
   </div><!--/.row -->
   <div class="row">
    <div class="col-sm-7">
      
    </div><!--/.col-sm-7 -->
   </div>
  </div><!--/.container-fluid -->
</body>
</html>