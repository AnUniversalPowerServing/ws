<?php $DISPLAY_NAVBAR_MENU = false; ?>
<?php include_once 'templates/api.php';  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>WideSecond.com | Learn Tutorials</title>
  <meta name="description" content="Free Web tutorials">
  <meta name="keywords" content="seo, seo tools, seo khazana, seo report, seositecheckup, seoclerks, seo login, seo jobs, seo services, seo images">
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
<style>
#appHeaderNavBar, .navbar-collapse.collapse { display:none; }
</style>
</head>
<body>
<?php include_once 'templates/header.php'; ?>

<div class="container-fluid fs14">
 <div class="row">
  <div class="col-sm-8">
    <!-- -->
    <div class="row">
      <div class="col-sm-12">
        <div><h1 class="font-red pad8p borderBot2p-red">Web Technologies</h1></div>
        <div>Technologies used to develop the websites are discussed in this section.</div>
      </div><!--/.col-sm-12 -->
    </div><!--/.row -->
    <div class="row mtop15p">
    <div class="col-sm-6">
    <!-- -->
      <div class="list-group">
      <div class="list-group-item">
      <!-- -->
      <div><i>Web development is of:</i></div>
      <div>
         <div><b>Frontend Development</b></div>
         <div>It deals with designing of User Interface (Web Pages that we are able to see on Screen) of an Application.</div>
      </div>
      <div>
         <div><b>Backend Development</b></div>
         <div>It deals with Data Processing from Data Storage location to User Interface and vice-versa.</div>
      </div>
       <!-- -->
       </div><!--/.list-group-item -->
      </div><!--/.list-group -->
      <div class="list-group">
      <div class="list-group-item">
      <div><i>Website Data Management is of:</i></div>
      <div>
        <div><b>Data Storage</b></div>
        <div>It deals with Data Storage of an Application. It can be stored in a Database or in Files.<br/>
        Data Storage can be done in two ways - 
        <ul>
          <li>
              <div><b>Server-side Storage (Permanent Data Storage)</b></div>
              <div>Data stored in Databases or in Server File Locations</div>
          </li>
          <li>
              <div><b>Client-side Storage (Temporary Data Storage)</b></div>
              <div>Data stored in the Web Browser in the form of Cookies and Sessions</div>
          </li>
        <ul>
        </div>
      </div>
      <!-- -->
      </div><!--/.list-group-item -->
      </div><!--/.list-group -->
      <div class="list-group">
      <div class="list-group-item">
      <div><i>Web Instant Communication is of:</i></div>
      <div>
        <div><b>Messaging Queues</b></div>
        <div>It is used to communicate Messages between Endpoints which acts as a Subscriber and Publisher.</div>
      </div>
      <!-- -->
      </div><!--/.list-group-item -->
      </div><!--/.list-group -->

      
     </div><!--/.col-sm-6 -->
     <div class="col-sm-6">

     <div class="list-group">
      <div class="list-group-item">
      <!-- -->
      <div><i>Website Testing is of:</i></div>
      <div>
        <div><b>Automation Tools</b></div>
        <div>Manually, Testing a Website and identifying bugs (Errors) manually from end-to-end is a time-taking process.
            To resolve this issues, Web Automation tools are used. 
        </div>
      </div>
      <!-- -->
      </div><!--/.list-group-item -->
      </div><!--/.list-group -->

      <div class="list-group">
      <div class="list-group-item">
      <!-- -->
      <div><i>Website Hosting is of:</i></div>
      <div>
        <div><b>Web Hosting Platforms</b></div>
        <div>Website developed can be come into live in the Internet when it gets hosted. Web hosting Platforms and it's advantages are 
            known over here.
        </div>
      </div>
      <!-- -->
      </div><!--/.list-group-item -->
      </div><!--/.list-group -->

      <div class="list-group">
      <div class="list-group-item">
      <!-- -->
      <div><i>Website Marketing is of:</i></div>
      <div>
        <div><b>Search Engine Optimization (SEO)</b></div>
        <div>Billions of Websites are available in the Internet. Most of the Customers visits websites through Search Engines. 
            Search Engine Optimization deals in making your Website available to the your customers in the Search Engine.
        </div>
      </div>
      <!-- -->
      </div><!--/.list-group-item -->
      </div><!--/.list-group -->
    </div><!--/.col-sm-6 -->
  </div><!--/.row -->

  <!-- Web Development ::: START --->
  <div class="row">
    <div class="col-sm-12">
      <div class="list-group">
        <div class="list-group-item tutorial-catHeader"><b>Web Development</b></div>
      </div><!--/.list-group -->
    </div><!--/.col-sm-12 -->
  </div><!--/.row -->
  <div class="row">
    <div class="col-sm-6">

      <!-- HTML Programming Language ::: START -->
      <div class="list-group boxShadow">
        <div class="list-group-item bg-purple"><b>HTML Programming Language</b></div>
        <div class="list-group-item bg-lgtPurple">
          <div>It is the basic Programming Language for designing  Web Pages and presenting content  
              on the World Wide Web.</div>
          <div class="mtop15p">
              <span class="label btn-purple-o">Basics</span>
              <span class="label btn-purple-o">Frontend Development</span>
          </div>
          <div align="right">
              <button class="btn btn-xs btn-purple"><b>Let's Get Started</b></button>
          </div>
        </div><!--/.list-group-item -->
      </div><!--/.list-group -->
      <!-- HTML Programming Language ::: END -->

      <!-- Javascript ::: START -->
      <div class="list-group boxShadow">
        <div class="list-group-item bg-sindur"><b>Javascript</b></div>
        <div class="list-group-item bg-lgtSindur">
          <div>It is an interpreted Scripting language that describes the behaviour of an HTML document.</div>
          <div class="mtop15p">
              <span class="label btn-sindur-o">Basics</span>
              <span class="label btn-sindur-o">Frontend Development</span>
          </div>
          <div align="right">
              <button class="btn btn-xs btn-sindur"><b>Let's Get Started</b></button>
          </div>
        </div><!--/.list-group-item -->
      </div><!--/.list-group -->
      <!-- Javascript ::: END -->

       <!-- JQuery ::: START -->
       <div class="list-group boxShadow">
        <div class="list-group-item bg-primary"><b>JQuery</b></div>
        <div class="list-group-item bg-lgtPrimary">
          <div>It is an Javascript library that makes simple to write Javascript on HTML Document.</div>
          <div class="mtop15p">
              <span class="label btn-primary-o">Basics</span>
              <span class="label btn-primary-o">Frontend Development</span>
          </div>
          <div align="right">
              <button class="btn btn-xs btn-primary"><b>Let's Get Started</b></button>
          </div>
        </div><!--/.list-group-item -->
      </div><!--/.list-group -->
      <!-- JQuery ::: END -->

      <!-- ECMAScript ::: START -->
      <div class="list-group boxShadow">
        <div class="list-group-item"><b>ECMAScript</b></div>
        <div class="list-group-item">
          <div>
          ECMAScript (core part of JavaScript) is a subset of JavaScript which is standardized by 
          European Computer Manufacturers Association (ECMA) International.
          </div>
          <div class="mtop15p">
              <span class="label label-warning">Advanced</span>
              <span class="label label-primary">Frontend Development</span>
          </div>
          <div align="right">
              <button class="btn btn-xs btn-danger"><b>Let's Get Started</b></button>
          </div>
        </div><!--/.list-group-item -->
      </div><!--/.list-group -->
      <!-- ECMAScript ::: END -->

      <!-- AngularJS / Angular ::: START -->
      <div class="list-group boxShadow">
        <div class="list-group-item"><b>AngularJS / Angular</b></div>
        <div class="list-group-item">
          <div>
          AngularJS (First version of Angular) is a JavaScript based front-end Web Application 
          Framework. Angular is a TypeScript-based Web Application Framework for building Mobile 
          and Desktop Web Applications.
          </div>
          <div class="mtop15p">
              <span class="label label-warning">Advanced</span>
              <span class="label label-primary">Frontend Development</span>
              <span class="label label-danger">Backend Development</span>
              <span class="label label-success">FullStack Development</span>
          </div>
          <div align="right">
              <button class="btn btn-xs btn-danger"><b>Let's Get Started</b></button>
          </div>
        </div><!--/.list-group-item -->
      </div><!--/.list-group -->
      <!-- AngularJS / Angular ::: END -->

      <!-- PHP ::: START -->
      <div class="list-group boxShadow">
        <div class="list-group-item"><b>PHP</b></div>
        <div class="list-group-item">
          <div>
            PHP (Hypertext Pre-processor / Personal Home Pages) is a server scripting language 
            for making static, dynamic and interactive web pages.
          </div>
          <div class="mtop15p">
              <span class="label label-warning">Basic</span>
              <span class="label label-primary">Frontend Development</span>
              <span class="label label-danger">Backend Development</span>
              <span class="label label-success">FullStack Development</span>
          </div>
          <div align="right">
              <button class="btn btn-xs btn-danger"><b>Let's Get Started</b></button>
          </div>
        </div><!--/.list-group-item -->
      </div><!--/.list-group -->
      <!-- PHP ::: END -->

      <!-- Java Spring Framework ::: START -->
      <div class="list-group boxShadow">
        <div class="list-group-item"><b>Java (Spring Framework, Spring Boot & Micro-Services) </b></div>
        <div class="list-group-item">
          <div></div>
          <div class="mtop15p">
              <span class="label label-warning">Basic</span>
              <span class="label label-primary">Frontend Development</span>
              <span class="label label-danger">Backend Development</span>
              <span class="label label-success">FullStack Development</span>
          </div>
          <div align="right">
              <button class="btn btn-xs btn-danger"><b>Let's Get Started</b></button>
          </div>
        </div><!--/.list-group-item -->
      </div><!--/.list-group -->
      <!-- Java Spring Framework  ::: END -->

     </div><!--/.col-sm-6 -->
     <div class="col-sm-6">

       <!-- CSS ::: START -->
       <div class="list-group boxShadow">
        <div class="list-group-item bg-darkLeaf "><b>CSS</b></div>
        <div class="list-group-item bg-lgtDarkLeaf ">
          <div>It is a language that describes how HTML elements should be styled and displayed on an HTML document.</div>
          <div class="mtop15p">
              <span class="label btn-darkLeaf-o">Basics</span>
              <span class="label btn-darkLeaf-o">Frontend Development</span>
          </div>
          <div align="right">
              <button class="btn btn-xs btn-darkLeaf"><b>Let's Get Started</b></button>
          </div>
        </div><!--/.list-group-item -->
      </div><!--/.list-group -->
      <!-- CSS ::: END -->


      <!-- Font-Awesome Icons ::: START -->
      <div class="list-group boxShadow">
        <div class="list-group-item"><b>Font-Awesome Icons</b></div>
        <div class="list-group-item">
          <div>It is an Icon Toolkit that can be customized in size, color, shadow and anything that can be done with the power of CSS.</div>
          <div class="mtop15p">
              <span class="label label-warning">Basics</span>
              <span class="label label-primary">Frontend Development</span>
          </div>
          <div align="right">
              <button class="btn btn-xs btn-danger"><b>Let's Get Started</b></button>
          </div>
        </div><!--/.list-group-item -->
      </div><!--/.list-group -->
      <!-- Font-Awesome Icons ::: END -->

      <!-- Typescript ::: START -->
      <div class="list-group boxShadow">
        <div class="list-group-item"><b>TypeScript</b></div>
        <div class="list-group-item">
          <div>
            TypeScript is the superset of Javascript that speeds up the Development in catching Errors 
            and providing fixes during Development stage itself. 
          </div>
          <div class="mtop15p">
              <span class="label label-warning">Advanced</span>
              <span class="label label-primary">Frontend Development</span>
          </div>
          <div align="right">
              <button class="btn btn-xs btn-danger"><b>Let's Get Started</b></button>
          </div>
        </div><!--/.list-group-item -->
      </div><!--/.list-group -->
      <!-- Typescript ::: END -->

      <!-- NodeJS ::: START -->
      <div class="list-group boxShadow">
        <div class="list-group-item"><b>NodeJS</b></div>
        <div class="list-group-item">
          <div>NodeJS is a JavaScript runtime built on Chrome's V8 JavaScript engine 
            which can executes JavaScript code outside a web browser.</div>
          <div class="mtop15p">
              <span class="label label-warning">Advanced</span>
              <span class="label label-primary">Frontend Development</span>
              <span class="label label-danger">Backend Development</span>
              <span class="label label-success">FullStack Development</span>
          </div>
          <div align="right">
              <button class="btn btn-xs btn-danger"><b>Let's Get Started</b></button>
          </div>
        </div><!--/.list-group-item -->
      </div><!--/.list-group -->
      <!-- NodeJS ::: END -->
      
      <!-- ReactJS ::: START -->
      <div class="list-group boxShadow">
        <div class="list-group-item"><b>ReactJS</b></div>
        <div class="list-group-item">
          <div>
            React JS is a JavaScript library for building user interfaces (that we see on the 
            Screen) of the Web pages.
          </div>
          <div class="mtop15p">
              <span class="label label-warning">Advanced</span>
              <span class="label label-primary">Frontend Development</span>
          </div>
          <div align="right">
              <button class="btn btn-xs btn-danger"><b>Let's Get Started</b></button>
          </div>
        </div><!--/.list-group-item -->
      </div><!--/.list-group -->
      <!-- ReactJS ::: END -->

      <!-- Java (JSPs & Servlets) ::: START -->
      <div class="list-group boxShadow">
        <div class="list-group-item"><b>Java (JSPs & Servlets)</b></div>
        <div class="list-group-item">
          <div>
            JSPs (Java Server Pages) and Servlets is a FullStack Web Development 
            programming in Java where JSPs deals with Front-end Development and 
            Servlets deals with Front-end and Back-end Development.
          </div>
          <div class="mtop15p">
              <span class="label label-warning">Basic</span>
              <span class="label label-primary">Frontend Development</span>
              <span class="label label-danger">Backend Development</span>
              <span class="label label-success">FullStack Development</span>
          </div>
          <div align="right">
              <button class="btn btn-xs btn-danger"><b>Let's Get Started</b></button>
          </div>
        </div><!--/.list-group-item -->
      </div><!--/.list-group -->
      <!-- Java (JSPs & Servlets) ::: END -->

     </div><!--/.col-sm-6 -->
    </div><!--/.row -->
    <!-- Web Development ::: END --->

    <!-- Website Data Management ::: START -->
    <div class="row">
      <div class="col-sm-12">
        <div class="list-group">
            <div class="list-group-item tutorial-catHeader"><b>Website Data Development</b></div>
        </div><!--/.list-group -->
      </div><!--/.col-sm-12 -->
    </div><!--/.row -->
    <div class="row">
      <div class="col-sm-6">

        <!-- MySQLDatabase ::: START -->
        <div class="list-group boxShadow">
         <div class="list-group-item"><b>MySQLDatabase</b></div>
           <div class="list-group-item">
            <div></div>
            <div class="mtop15p">
                <span class="label label-warning">Basic</span>
                <span class="label label-primary">Server-side Data Storage</span>
            </div>
            <div align="right">
                <button class="btn btn-xs btn-danger"><b>Let's Get Started</b></button>
            </div>
           </div><!--/.list-group-item -->
        </div><!--/.list-group -->
        <!-- MySQLDatabase ::: END -->

      </div><!--/.col-sm-6 -->
      <div class="col-sm-6">

        <!-- Web Browser Cookies ::: START -->
        <div class="list-group boxShadow">
         <div class="list-group-item"><b>Web Browser Cookies</b></div>
           <div class="list-group-item">
            <div></div>
            <div class="mtop15p">
                <span class="label label-warning">Basic</span>
                <span class="label label-primary">Client-side Data Storage</span>
            </div>
            <div align="right">
                <button class="btn btn-xs btn-danger"><b>Let's Get Started</b></button>
            </div>
           </div><!--/.list-group-item -->
        </div><!--/.list-group -->
        <!-- Web Browser Cookies ::: END -->

        <!-- Web Browser Sessions ::: START -->
        <div class="list-group boxShadow">
         <div class="list-group-item"><b>Web Browser Sessions</b></div>
           <div class="list-group-item">
            <div></div>
            <div class="mtop15p">
                <span class="label label-warning">Basic</span>
                <span class="label label-primary">Client-side Data Storage</span>
            </div>
            <div align="right">
                <button class="btn btn-xs btn-danger"><b>Let's Get Started</b></button>
            </div>
           </div><!--/.list-group-item -->
        </div><!--/.list-group -->
        <!-- Web Browser Sessions ::: END -->

      </div><!--/.col-sm-6 -->
    </div><!--/.row -->
    <!-- Website Data Management ::: END -->

    <!-- Web Instant Communications ::: START -->
    <div class="row">
      <div class="col-sm-12">
        <div class="list-group">
            <div class="list-group-item tutorial-catHeader"><b>Web Instant Communications</b></div>
        </div><!--/.list-group -->
      </div><!--/.col-sm-12 -->
    </div><!--/.row -->
    <div class="row">
      <div class="col-sm-6">

        <!-- RabbitMQ ::: START -->
        <div class="list-group boxShadow">
         <div class="list-group-item"><b>RabbitMQ</b></div>
           <div class="list-group-item">
            <div></div>
            <div class="mtop15p">
                <span class="label label-warning">Advanced</span>
                <span class="label label-primary">Messaging Queues</span>
            </div>
            <div align="right">
                <button class="btn btn-xs btn-danger"><b>Let's Get Started</b></button>
            </div>
           </div><!--/.list-group-item -->
        </div><!--/.list-group -->
        <!-- RabbitMQ ::: END -->

      </div><!--/.col-sm-6 -->
      <div class="col-sm-6">

        <!-- Kafka ::: START -->
        <div class="list-group boxShadow">
         <div class="list-group-item"><b>Kafka</b></div>
           <div class="list-group-item">
            <div></div>
            <div class="mtop15p">
                <span class="label label-warning">Advanced</span>
                <span class="label label-primary">Messaging Queues</span>
            </div>
            <div align="right">
                <button class="btn btn-xs btn-danger"><b>Let's Get Started</b></button>
            </div>
           </div><!--/.list-group-item -->
        </div><!--/.list-group -->
        <!-- Kafka ::: END -->

      </div><!--/.col-sm-6 -->
    </div><!--/.row -->
    <!-- Web Instant Communications ::: END -->

     <!-- Web Testing ::: START -->
     <div class="row">
      <div class="col-sm-12">
        <div class="list-group">
            <div class="list-group-item tutorial-catHeader"><b>Web Testing</b></div>
        </div><!--/.list-group -->
      </div><!--/.col-sm-12 -->
    </div><!--/.row -->
    <div class="row">
      <div class="col-sm-6">

        <!-- Selenium Automation Tool for Java ::: START -->
        <div class="list-group boxShadow">
         <div class="list-group-item"><b>Selenium Automation Tool for Java</b></div>
           <div class="list-group-item">
            <div></div>
            <div class="mtop15p">
                <span class="label label-warning">Basic</span>
                <span class="label label-primary">Automation Tool</span>
            </div>
            <div align="right">
                <button class="btn btn-xs btn-danger"><b>Let's Get Started</b></button>
            </div>
           </div><!--/.list-group-item -->
        </div><!--/.list-group -->
        <!-- Selenium Automation Tool for Java ::: END -->

      </div><!--/.col-sm-6 -->
      <div class="col-sm-6">

      </div><!--/.col-sm-6 -->
    </div><!--/.row -->
    <!-- Web Testing  ::: END -->

    <!-- Web Servers ::: START -->
    <div class="row">
      <div class="col-sm-12">
        <div class="list-group">
            <div class="list-group-item tutorial-catHeader"><b>Web Servers</b></div>
        </div><!--/.list-group -->
      </div><!--/.col-sm-12 -->
    </div><!--/.row -->
    <div class="row">
      <div class="col-sm-6">
          
        <!-- Apache Tomcat ::: START -->
        <div class="list-group boxShadow">
         <div class="list-group-item"><b>Apache Tomcat (Java)</b></div>
           <div class="list-group-item">
            <div></div>
            <div class="mtop15p">
                <span class="label label-warning">Basic</span>
                <span class="label label-primary">Web Server</span>
            </div>
            <div align="right">
                <button class="btn btn-xs btn-danger"><b>Let's Get Started</b></button>
            </div>
           </div><!--/.list-group-item -->
        </div><!--/.list-group -->
        <!-- Apache Tomcat ::: END -->
        
      </div><!--/.col-sm-6 -->
      <div class="col-sm-6">

        <!-- Apache HTTP Server ::: START -->
        <div class="list-group boxShadow">
         <div class="list-group-item"><b>Apache HTTP Server (PHP)</b></div>
           <div class="list-group-item">
            <div></div>
            <div class="mtop15p">
                <span class="label label-warning">Basic</span>
                <span class="label label-primary">Web Server</span>
            </div>
            <div align="right">
                <button class="btn btn-xs btn-danger"><b>Let's Get Started</b></button>
            </div>
           </div><!--/.list-group-item -->
        </div><!--/.list-group -->
        <!-- Apache HTTP Server ::: END -->

      </div><!--/.col-sm-6 -->
    </div><!--/.row -->
    <!-- Web Servers  ::: END -->

    <!-- Website Hosting ::: START -->
    <div class="row">
      <div class="col-sm-12">
        <div class="list-group">
            <div class="list-group-item tutorial-catHeader"><b>Website Hosting</b></div>
        </div><!--/.list-group -->
      </div><!--/.col-sm-12 -->
    </div><!--/.row -->
    <div class="row">
      <div class="col-sm-6">
          
        <!-- Godaddy.com ::: START -->
        <div class="list-group boxShadow">
         <div class="list-group-item"><b>Godaddy.com</b></div>
           <div class="list-group-item">
            <div></div>
            <div class="mtop15p">
                <span class="label label-warning">Basic</span>
                <span class="label label-primary">Web Hosting Platform</span>
            </div>
            <div align="right">
                <button class="btn btn-xs btn-danger"><b>Let's Get Started</b></button>
            </div>
           </div><!--/.list-group-item -->
        </div><!--/.list-group -->
        <!-- Godaddy.com ::: END -->
        
      </div><!--/.col-sm-6 -->
      <div class="col-sm-6">

        <!-- AWS ::: START -->
        <div class="list-group boxShadow">
         <div class="list-group-item"><b>Amazon Web Services</b></div>
           <div class="list-group-item">
            <div></div>
            <div class="mtop15p">
                <span class="label label-warning">Advanced</span>
                <span class="label label-primary">Web Hosting Platform</span>
            </div>
            <div align="right">
                <button class="btn btn-xs btn-danger"><b>Let's Get Started</b></button>
            </div>
           </div><!--/.list-group-item -->
        </div><!--/.list-group -->
        <!-- Godaddy.com ::: END -->

      </div><!--/.col-sm-6 -->
    </div><!--/.row -->
    <!-- Website Hosting  ::: END -->

    <!-- Website Marketing ::: START -->
    <div class="row">
      <div class="col-sm-12">
        <div class="list-group">
            <div class="list-group-item tutorial-catHeader"><b>Website Marketing</b></div>
        </div><!--/.list-group -->
      </div><!--/.col-sm-12 -->
    </div><!--/.row -->
    <div class="row">
      <div class="col-sm-6">

        <!-- Search Engine Optimization (SEO) ::: START -->
        <div class="list-group boxShadow">
         <div class="list-group-item"><b>Search Engine Optimization (SEO)</b></div>
           <div class="list-group-item">
            <div></div>
            <div class="mtop15p">
                <span class="label label-warning">Basic</span>
                <span class="label label-warning">Advanced</span>
                <span class="label label-primary">Web Marketing</span>
            </div>
            <div align="right">
                <button class="btn btn-xs btn-danger"><b>Let's Get Started</b></button>
            </div>
           </div><!--/.list-group-item -->
        </div><!--/.list-group -->
        <!-- Search Engine Optimization (SEO) ::: END -->

      </div><!--/.col-sm-6 -->
      <div class="col-sm-6">

      </div><!--/.col-sm-6 -->
    </div><!--/.row -->
    <!-- Website Marketing  ::: END -->

    <!-- -->
  </div><!--/.col-sm-8 -->
 </div><!--/.row -->
</div><!--/.container-fluid -->

<style>
.tutorial-catHeader { background-color:#d9534f;padding: 5px 10px;border: 1px solid #d9534f;color:#fff;box-shadow:2px 2px 4px 1px #808080; }
</style>
</body>
</html>