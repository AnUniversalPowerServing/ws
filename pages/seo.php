<?php $PROJECT_URL = 'http://localhost/ws'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Search Engine Optimization</title>
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
    <div class="col-sm-7">

       <?php 
         if(isset($_GET["1"]) && $_GET["1"]=='introduction-to-seo'){
            include_once 'templates/seo/01-introduction-to-seo.php';
         } else if(isset($_GET["1"]) && $_GET["1"]=='factors-improving-search-engine-ranking'){
            include_once 'templates/seo/02-factors-improving-search-engine-ranking.php';
         }
         
       ?>

       
       <div><h4 class="font-red"><b>How Search Engine works?</b></h4></div>
       <div>
       To deliver better Search Results, Search Engine performs few Activities:
       <ol class="noListStyle">
        <li>
            <div><b>Stage #1: Crawling</b></div>
            <div>
            It is a process of fetching all the web page links under a website. This task was done by 
            a software called <i>crawler</i> or <i>spider</i>.
            For Google Search Engine, this software is known as Googlebot. This Software runs by the 
            Search Engine with a periodical Frequency (Daily or Weekly) for updating existing Websites and fetching new Websites.
            </div>
        </li>
        <li>
            <div><b>Stage #2: Indexing</b></div>
            <div>
            From the Fetched Web links, for each webpage, it identifies the words and expressions.
            Then, in the Search Engine's Big Database, index is created for Web link with keywords.
            </div>
        </li>
        <li>
            <div><b>Stage #3: Processing</b></div>
            <div>
            When the search Request comes in the Search Engine, based on the keywords it fetches the 
            Web links.
            </div>
        </li>
        <li>
            <div><b>Stage #4: Calculating Relevancy (Ranking)</b></div>
            <div>
            In Stage #3, for a Searched String, we could collect Millions of Weblinks. Now, the Search 
            Engine calculates the Relevancy and display the results in ranking Order. 
            </div>
        </li>

       </ol>
       </div>

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

       <!-- -->
       <?php include_once 'templates/seo-google-searchengine-works.php'; ?>

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

    </div><!--/.col-sm-7 -->
    <div class="col-sm-5">

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