<?php
$WEBTECH_SEO = 'seo';
$WEBTECH_SEO_OVERVIEW = 'overview-of-seo';
$WEBTECH_SEO_FACTORSIMPROVING_RANKING = 'factors-improving-search-engine-ranking';
$WEBTECH_SEO_KEYWORD_RESEARCH = 'what-is-keyword-research';
$WEBTECH_SEO_BACKLINKS = 'backlinks-in-seo';
$WEBTECH_SEO_HOW_SEARCHENGINE_WORKS = 'how-search-engine-works';
$WEBTECH_SEO_GOOGLE_SEARCHENGINE_WORKS = 'how-google-search-engine-works';
$WEBTECH_SEO_GOOGLE_CRAWLER = 'google-crawler';
$WEBTECH_SEO_TYPES_SEARCHENGINE_SEOS = 'types-of-search-engine-seo';
$WEBTECH_SEO_BLACKHAT = 'black-hat-seo';
$WEBTECH_SEO_WHITEHAT = 'white-hat-seo';
$WEBTECH_SEO_HOW_WEBSITE_KNOWNTO_SEARCHENGINE = 'how-website-known-to-search-engine';
$WEBTECH_SEO_SEARCHENGINE_RANKINGFACTORS = 'search-engine-ranking-factors';
$WEBTECH_SEO_KEYWORDS = 'seo-keywords';

if(isset($_GET["1"]) && isset($_GET["2"])){

   /**
    * SELENIUM Tutorials
    */
   if($_GET["1"]==$WEBTECH_SEO && $_GET["2"]==$WEBTECH_SEO_OVERVIEW){
      echo '<title>Widesecond.com | Overview of SEO</title>';
   } else if($_GET["1"]==$WEBTECH_SEO && $_GET["2"]==$WEBTECH_SEO_FACTORSIMPROVING_RANKING){
	  echo '<title>Widesecond.com | Factors improving Search Engine Ranking</title>';
   } else if($_GET["1"]==$WEBTECH_SEO && $_GET["2"]==$WEBTECH_SEO_KEYWORD_RESEARCH){
	  echo '<title>Widesecond.com | What is Keyword Research?</title>';
   } else if($_GET["1"]==$WEBTECH_SEO && $_GET["2"]==$WEBTECH_SEO_BACKLINKS){
	  echo '<title>Widesecond.com | Backlinks in SEO</title>';
   } else if($_GET["1"]==$WEBTECH_SEO && $_GET["2"]==$WEBTECH_SEO_HOW_SEARCHENGINE_WORKS){
	  echo '<title>Widesecond.com | How Search Engine works?</title>';
   } else if($_GET["1"]==$WEBTECH_SEO && $_GET["2"]==$WEBTECH_SEO_GOOGLE_SEARCHENGINE_WORKS){
	  echo '<title>Widesecond.com | How Google Search Engine works?</title>';
   } else if($_GET["1"]==$WEBTECH_SEO && $_GET["2"]==$WEBTECH_SEO_GOOGLE_CRAWLER){
	  echo '<title>Widesecond.com | Google Crawler</title>';
   } else if($_GET["1"]==$WEBTECH_SEO && $_GET["2"]==$WEBTECH_SEO_TYPES_SEARCHENGINE_SEOS){
	  echo '<title>Widesecond.com | Types of Search Engine SEO\'s</title>';
   } else if($_GET["1"]==$WEBTECH_SEO && $_GET["2"]==$WEBTECH_SEO_BLACKHAT){
	  echo '<title>Widesecond.com | Black Hat SEO</title>';
   } else if($_GET["1"]==$WEBTECH_SEO && $_GET["2"]==$WEBTECH_SEO_WHITEHAT){
	  echo '<title>Widesecond.com | White Hat SEO</title>';
   } else if($_GET["1"]==$WEBTECH_SEO && $_GET["2"]==$WEBTECH_SEO_HOW_WEBSITE_KNOWNTO_SEARCHENGINE){
	  echo '<title>Widesecond.com | How Website is known to Search Engine?</title>';
   } else if($_GET["1"]==$WEBTECH_SEO && $_GET["2"]==$WEBTECH_SEO_SEARCHENGINE_RANKINGFACTORS){
	  echo '<title>Widesecond.com | Search Engine Ranking Factors</title>';
   } else if($_GET["1"]==$WEBTECH_SEO && $_GET["2"]==$WEBTECH_SEO_KEYWORDS){
	  echo '<title>Widesecond.com | SEO Keywords</title>';
   }
 }