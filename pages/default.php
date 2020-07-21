<?php $PROJECT_URL = 'http://localhost/ws'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>/vendor/bootstrap/css/bootstrap.min.css">
  <script src="<?php echo $PROJECT_URL; ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
<style>
.navbar-default { border-radius:0px;margin-bottom:0px;border-bottom:2px solid #d9534f; }
a.navbar-brand { font-size:14px;çolor:#d9534f; }
@media screen and (min-width: 768px) { .container-fluid .jumbotron { padding:20px; } }
.bg-black { ;background-color:#0d122f; }
.font-paleBlue { color:#0eb9a9; }
.font-paleLgtBlue { color:#5ee6da; }
.font-paleRed {color:#f7857c; }
.font-paleOrange { color:#efb35a; }
.font-paleWhite { color:#f5e8d6; }
.font-palePurple { color:#e29fec; }
.font-paleLgtGreen { color:#b2c39d; }
.font-red { color:#d9534f; }
.fs12 { font-size:12px; }
.fs14 { font-size:14px;line-height:26px; }
.mtop5p { margin-top:5px; }
.mtop15p { margin-top:15px; }
.mbot0 { margin-bottom:0px; }
.mbot5p { margin-bottom:5px; }
</style>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><span class="font-red"><b>WideSecond.com</b></span></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">React JS</a></li>
        <li><a href="#">Page 1</a></li>
        <li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid fs14 mtop15p">
  <div class="row">
   <div class="col-sm-7">

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
<style>
.code-htmlTags { font-size: 0;line-height:18px; }
.code-htmlTags span { font-size: 14px; }
</style>
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

   </div><!--/.col-sm-7 -->
   <div class="col-sm-5">
      <div class="list-group">
        <div class="list-group-item">
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
   </div><!--/.col-sm-5 -->
   <div class="col-sm-3">
    <!-- -->
    <div class="list-group">
      <div class="list-group-item">
        <span class="label label-primary">state</span>
        <span class="label label-danger">render</span>
        <span class="label label-success">props</span>
        <span class="label label-warning"></span>
        <span class="label label-primary"></span>
        <span class="label label-danger"></span>
        <span class="label label-success"></span>
        <span class="label label-warning"></span>
        <span class="label label-primary"></span>
        <span class="label label-danger"></span>
        <span class="label label-success"></span>
        <span class="label label-warning"></span>
        <span class="label label-primary"></span>
        <span class="label label-danger"></span>
        <span class="label label-success"></span>
        <span class="label label-warning"></span>
        <span class="label label-primary"></span>
        <span class="label label-danger"></span>
        <span class="label label-success"></span>
        <span class="label label-warning"></span>
        <span class="label label-primary"></span>
        <span class="label label-danger"></span>
        <span class="label label-success"></span>
        <span class="label label-warning"></span>
        <span class="label label-primary"></span>
        <span class="label label-danger"></span>
        <span class="label label-success"></span>
        <span class="label label-warning"></span>
      </div>
    </div><!--/.col-sm-3 -->
    <!-- -->
   </div>
 </div>      
</div>

</body>
</html>
