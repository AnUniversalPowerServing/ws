<?php
  /**
   * SEO Tutorials
   */
    if($_GET["1"]==$WEBTECH_SEO && $_GET["2"]==$WEBTECH_SEO_OVERVIEW){
       include_once 'templates/webtech/dev/seo/01-overview-of-seo.php';
    } else if($_GET["1"]==$WEBTECH_SEO && $_GET["2"]==$WEBTECH_SEO_FACTORSIMPROVING_RANKING){
	   include_once 'templates/webtech/dev/seo/02-factors-improving-search-engine-ranking.php';
    } else if($_GET["1"]==$WEBTECH_SEO && $_GET["2"]==$WEBTECH_SEO_KEYWORD_RESEARCH){
	   include_once 'templates/webtech/dev/seo/03-what-is-keyword-research.php';
    } else if($_GET["1"]==$WEBTECH_SEO && $_GET["2"]==$WEBTECH_SEO_BACKLINKS){
	   include_once 'templates/webtech/dev/seo/04-backlinks-in-seo.php';
    } else if($_GET["1"]==$WEBTECH_SEO && $_GET["2"]==$WEBTECH_SEO_HOW_SEARCHENGINE_WORKS){
	   include_once 'templates/webtech/dev/seo/05-how-search-engine-works.php';
    } else if($_GET["1"]==$WEBTECH_SEO && $_GET["2"]==$WEBTECH_SEO_GOOGLE_SEARCHENGINE_WORKS){
	   include_once 'templates/webtech/dev/seo/06-how-google-search-engine-works.php';
    } else if($_GET["1"]==$WEBTECH_SEO && $_GET["2"]==$WEBTECH_SEO_GOOGLE_CRAWLER){
	   include_once 'templates/webtech/dev/seo/07-google-crawler.php';
    } else if($_GET["1"]==$WEBTECH_SEO && $_GET["2"]==$WEBTECH_SEO_TYPES_SEARCHENGINE_SEOS){
	   include_once 'templates/webtech/dev/seo/08-types-of-search-engine-seo.php';
    } else if($_GET["1"]==$WEBTECH_SEO && $_GET["2"]==$WEBTECH_SEO_BLACKHAT){
	   include_once 'templates/webtech/dev/seo/09-black-hat-seo.php';
    } else if($_GET["1"]==$WEBTECH_SEO && $_GET["2"]==$WEBTECH_SEO_WHITEHAT){
	   include_once 'templates/webtech/dev/seo/10-white-hat-seo.php';
    } else if($_GET["1"]==$WEBTECH_SEO && $_GET["2"]==$WEBTECH_SEO_HOW_WEBSITE_KNOWNTO_SEARCHENGINE){
	   include_once 'templates/webtech/dev/seo/11-how-website-known-to-search-engine.php';
    } else if($_GET["1"]==$WEBTECH_SEO && $_GET["2"]==$WEBTECH_SEO_SEARCHENGINE_RANKINGFACTORS){
	   include_once 'templates/webtech/dev/seo/12-search-engines-ranking-factors.php';
    } else if($_GET["1"]==$WEBTECH_SEO && $_GET["2"]==$WEBTECH_SEO_KEYWORDS){
	   include_once 'templates/webtech/dev/seo/13-seo-keywords.php';
    }
?>