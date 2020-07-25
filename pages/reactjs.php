<?php $PROJECT_URL = 'http://localhost/ws'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>ReactJS</title>
  <meta charset="utf-8">
  <meta name="description" content="Free Web tutorials">
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>/styles/api/core-skeleton.css">
  <script src="<?php echo $PROJECT_URL; ?>/js/api/core-skeleton.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
<style>

</style>
<script type="text/javascript">
$(document).ready(function(){
 $('#tutorial-reactjs').addClass('active');
});
</script>
</head>
<body>

<?php include_once 'templates/header.php'; ?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">ReactJS</a></li>
    <li class="breadcrumb-item active" aria-current="page">Overview of React JS</li>
  </ol>
</nav>

<div class="container-fluid fs14 mtop15p">
  <div class="row">
   <div class="col-sm-3">
      <?php include_once 'templates/reactjs/00-content.php'; ?>
   </div><!--/.col-sm-3 -->
   <div class="col-sm-5">

     <div><h4 class="font-red"><b>Overview of React JS</b></h4></div>

     <div>
     ReactJS is an open-source javascript library, created by Facebook and released into the Market 
     in the year 2013, for building User Interfaces of the Websites.
     </div><!--/.fs14 -->

     <div class="jumbotron mtop5p mbot5p">
      <div><b>Idea behind Introducing ReactJS</b></div>
      <div>
        <ol>
          <li>To build Single-Page Applications</li>
          <li>To avoid the duplicate code in making web components and in encourage of reusability</li>
        </ol>  
      </div>
     </div><!--/.jumbotron -->

      <div>
        In MVC (Model-View-Controller) Application, ReactJS deals with the <i>View</i> of the Application.
      </div>

      <div><h4 class="font-red"><b>Features of React JS</b></h4></div>
      <div>
        <ol>
          <li>ReactJS also simplifies complex DOM manipulations by using VIRTUAL DOM and
              DIFFING ALGORITHM.</li>
          <li>ReactJS implements one-way reactive data flow</li>
        </ol>
      </div>

      <!--/.React JS Virtual DOM (VDOM) ::: START -->
      <div><h4 class="font-red"><b>React JS Virtual DOM (VDOM) and Diffing Algorithm</b></h4></div>
      <div>
        React JS DOM Manipulation Engine is also known as <i>Virtual DOM</i>. It is a programming 
        Concept where UI Representation is kept in Memory and synced with real DOM by
        <i>ReactDOM</i> library. This process is called as <i>Reconciliation</i>.
      </div>
      <div class="jumbotron mtop10p mbot10p">
        <div><h4><b>What is React Fiber?</b></h4></div>
        <div>
          It is a new Reconciliation Engine in React@16. Its main goal is to enable incremental 
          rendering of the Virtual DOM.
        </div>
      </div><!--/.jumbotron -->
      

      <div>
        The central piece of React JS Virtual DOM is its <code>Smart Diffing Algorithm</code>.
      </div>
      <!--/.React JS Virtual DOM (VDOM) ::: END -->
      

      <div><h4 class="font-red"><b>Development of React JS Application</b></h4></div>

      <div>
        Development of React JS Application can be done in two ways:
        <ol>
          <li>
            <div><b>Plugin CDN Links into a Website:</b></div>
            <div class="list-group">
              <div class="list-group-item">

               <div><b>Application:</b> In the Application Webpages, by adding script tags
               the web pages will get Ready for react Use.
               </div>

              </div><!--/.list-group-item -->
              <div class="list-group-item">
               <b>Hosting:</b> It is hosted into an Independent Web Server that runs on a port.
              </div><!--/.list-group-item -->
            </div><!--/.list-group -->
          </li>
          <li>
            <div><b>Building as a Stand-alone Application:</b></div>
            <div class="list-group">
              <div class="list-group-item">
               <b>Application:</b> This Application will be build on the Top of the NodeJS. By using a 
               Command, we will be able to create React JS Application gets Build.
              </div><!--/.list-group-item -->
              <div class="list-group-item">
               <b>Hosting:</b> This Application contains inbuilt Web server in which it runs as a Stand-alone.
              </div><!--/.list-group-item -->
            </div><!--/.list-group -->
          </li>
        </ol>
      </div>

      <div><h4 class="font-red"><b>Plugin CDN Links into a Website</b></h4></div>
      <div>
        For a website, to make it a React-Ready Website, you need to add following three script Tags:
        <ol>
          <li>
            <div><b>React Script Tag</b></div>
            <div>For Development use, you can use following Script Tag:</div>
            <div class="well bg-black code-htmlTags mbot5p">
            <span class="font-paleWhite">&lt;</span>
            <span class="font-paleBlue">script</span>
            <span class="font-paleRed">&nbsp;src=</span>
            <span class="font-paleOrange">"https://unpkg.com/react@16/umd/react.development.js"</span>
            <span class="font-paleRed">&nbsp;crossorigin</span>
            <span class="font-paleWhite">&gt;&lt;/</span>
            <span class="font-paleBlue">script</span><span class="font-paleWhite">&gt;</span>
            </div>
            <div align="center"><b>(or)</b></div>
            <div>For Production use, you can use following Script Tag:</div>
            <div class="well bg-black code-htmlTags mbot5p">
            <span class="font-paleWhite">&lt;</span>
            <span class="font-paleBlue">script</span>
            <span class="font-paleRed">&nbsp;src=</span>
            <span class="font-paleOrange">"https://unpkg.com/react@16/umd/react.production.min.js"</span>
            <span class="font-paleRed">&nbsp;crossorigin</span>
            <span class="font-paleWhite">&gt;&lt;/</span>
            <span class="font-paleBlue">script</span><span class="font-paleWhite">&gt;</span>
            </div>
          </li>
          <li>
            <div><b>React DOM Script Tag</b></div>
            <div>For Development use, you can use following Script Tag:</div>
            <div class="well bg-black code-htmlTags mbot5p">
            <span class="font-paleWhite">&lt;</span>
            <span class="font-paleBlue">script</span>
            <span class="font-paleRed">&nbsp;src=</span>
            <span class="font-paleOrange">"https://unpkg.com/react-dom@16/umd/react-dom.development.js"</span>
            <span class="font-paleRed">&nbsp;crossorigin</span>
            <span class="font-paleWhite">&gt;&lt;/</span>
            <span class="font-paleBlue">script</span><span class="font-paleWhite">&gt;</span>
            </div>
            <div align="center"><b>(or)</b></div>
            <div>For Production use, you can use following Script Tag:</div>
            <div class="well bg-black code-htmlTags mbot5p">
            <span class="font-paleWhite">&lt;</span>
            <span class="font-paleBlue">script</span>
            <span class="font-paleRed">&nbsp;src=</span>
            <span class="font-paleOrange">"https://unpkg.com/react-dom@16/umd/react-dom.production.min.js"</span>
            <span class="font-paleRed">&nbsp;crossorigin</span>
            <span class="font-paleWhite">&gt;&lt;/</span>
            <span class="font-paleBlue">script</span><span class="font-paleWhite">&gt;</span>
            </div>
            </li>
          <li>
            <div><b>Babel Script Tag</b></div>
            <div>you need to add this Script Tag, for Enabling JSX coding. This is for both Development and 
            Production Environment:</div>
            <div class="well bg-black code-htmlTags mbot5p">
            <span class="font-paleWhite">&lt;</span>
            <span class="font-paleBlue">script</span>
            <span class="font-paleRed">&nbsp;src=</span>
            <span class="font-paleOrange">"https://unpkg.com/babel-standalone@6/babel.min.js"</span>
            <span class="font-paleRed">&nbsp;crossorigin</span>
            <span class="font-paleWhite">&gt;&lt;/</span>
            <span class="font-paleBlue">script</span><span class="font-paleWhite">&gt;</span>
            </div>
            </li>
          </li>
        </ol>
      </div>

      <div>
        In this way, React - Ready Website will look like:
        <div><b>Development Environment:</b></div>
        <div class="well bg-black code-htmlTags mbot5p">
          <span class="font-paleWhite">&lt;</span>
          <span class="font-paleBlue">html</span>
          <span class="font-paleWhite">&gt;</span><br/>

          <span class="font-paleWhite">&lt;</span>
          <span class="font-paleBlue">head</span>
          <span class="font-paleWhite">&gt;</span><br/>

          <span class="font-paleWhite">&lt;</span>
          <span class="font-paleBlue">script</span>
          <span class="font-paleRed">&nbsp;src=</span>
          <span class="font-paleOrange">"https://unpkg.com/react@16/umd/react.development.js"</span>
          <span class="font-paleRed">&nbsp;crossorigin</span>
          <span class="font-paleWhite">&gt;&lt;/</span>
          <span class="font-paleBlue">script</span><span class="font-paleWhite">&gt;</span><br/>

          <span class="font-paleWhite">&lt;</span>
          <span class="font-paleBlue">script</span>
          <span class="font-paleRed">&nbsp;src=</span>
          <span class="font-paleOrange">"https://unpkg.com/react-dom@16/umd/react-dom.development.js"</span>
          <span class="font-paleRed">&nbsp;crossorigin</span>
          <span class="font-paleWhite">&gt;&lt;/</span>
          <span class="font-paleBlue">script</span><span class="font-paleWhite">&gt;</span><br/>

          <span class="font-paleWhite">&lt;</span>
          <span class="font-paleBlue">script</span>
          <span class="font-paleRed">&nbsp;src=</span>
          <span class="font-paleOrange">"https://unpkg.com/babel-standalone@6/babel.min.js"</span>
          <span class="font-paleRed">&nbsp;crossorigin</span>
          <span class="font-paleWhite">&gt;&lt;/</span>
          <span class="font-paleBlue">script</span>
          <span class="font-paleWhite">&gt;</span><br/>

          <span class="font-paleLgtGreen">&lt;!--&nbsp;</span>
          <span class="font-paleLgtGreen">Here, you can write your React JS Code under Script Tag with text/babel ::: START&nbsp;</span>
          <span class="font-paleLgtGreen">--&gt;</span><br/>

          <span class="font-paleWhite">&lt;</span>
          <span class="font-paleBlue">script</span>
          <span class="font-paleRed">&nbsp;type=</span>
          <span class="font-paleOrange">"text/babel"</span>
          <span class="font-paleRed">&gt;</span><br/>

          <span class="font-paleLgtGreen">// Your React JS Code&nbsp;</span><br/>

          <span class="font-paleWhite">&lt;/</span>
          <span class="font-paleBlue">script</span>
          <span class="font-paleWhite">&gt;</span><br/>

          <span class="font-paleLgtGreen">&lt;!--&nbsp;</span>
          <span class="font-paleLgtGreen">Here, you can write your React JS Code under Script Tag with text/babel ::: END&nbsp;</span>
          <span class="font-paleLgtGreen">--&gt;</span><br/>

          <span class="font-paleWhite">&lt;/</span>
          <span class="font-paleBlue">head</span>
          <span class="font-paleWhite">&gt;</span><br/>

          <span class="font-paleWhite">&lt;</span>
          <span class="font-paleBlue">body</span>
          <span class="font-paleWhite">&gt;</span><br/><br/>

          <span class="font-paleLgtGreen">&lt;!--&nbsp;</span>
          <span class="font-paleLgtGreen">Here, you can write your HTML Code&nbsp;</span>
          <span class="font-paleLgtGreen">--&gt;</span><br/><br/>


          <span class="font-paleWhite">&lt;/</span>
          <span class="font-paleBlue">body</span>
          <span class="font-paleWhite">&gt;</span><br/>

          <span class="font-paleWhite">&lt;/</span>
          <span class="font-paleBlue">html</span>
          <span class="font-paleWhite">&gt;</span>
        </div>
      </div>
      <div><b>Production Environment:</b></div>

   </div><!--/.col-sm-5 -->
   <div class="col-sm-4">

      <div class="list-group">
        <div class="list-group-item bg-lgtRed">
          <div><h4 class="font-red"><b>Skillset Required</b></h4></div>
          <div>
            <ul>
              <li>HTML <span class="label label-success">Mandatory</span></li>
              <li>Javascript (ECMAScript) <span class="label label-success">Mandatory</span></li>
              <li>Bootstrap (For Responsive Web Development) <span class="label label-success">Optional</span></li>
              <li>Typescript <span class="label label-success">Optional</span></li>
            </ul>
          </div>
        </div><!--/.list-group-item -->
      </div><!--/.list-group -->

      <div class="list-group">
        <div class="list-group-item bg-lgtRed">
          <div><h4 class="font-red"><b>Other Related links</b></h4></div>
          <div>
            <ul class="noListStyle">
              <li><a href="">XHP (An HTML Component Framework for PHP)</a></li>
            </ul>
          </div>
        </div><!--/.list-group-item -->
      </div><!--/.list-group -->

      <!-- What you'll learn in this Page ::: START -->
      <div class="list-group">
        <div class="list-group-item">
          <div><h4 class="font-red"><b>What you'll learn in this Page:</b></h4></div>
          <div>
              <ul>
                <li><h5 class="lh26">Overview of ReactJS</h5></li>
                <li><h5 class="lh26"></h5></li>
              </ul>
          </div>
        </div><!-- list-group-item -->
      </div><!-- list-group -->
      <!-- What you'll learn in this Page ::: END -->

   </div><!--/.col-sm-4 -->

 </div>      
</div>

</body>
</html>
