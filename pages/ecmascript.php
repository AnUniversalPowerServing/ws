<?php $PROJECT_URL = 'http://localhost/ws'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Javascript (Ecmascript)</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>/styles/api/core-skeleton.css">
  <script src="<?php echo $PROJECT_URL; ?>/js/api/core-skeleton.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
 $('#tutorial-ecmascript').addClass('active');
});
</script>
</head>
<body>

<?php include_once 'templates/header.php'; ?>

<div class="container-fluid fs14 mtop15p">
  <div class="row">

   <div class="col-sm-3">
    <!-- -->
    <div class="list-group">
     <div class="list-group-item">
       <div><h4 class="font-red lh26"><b>Topics</b></h4></div>
       <div><h5 class="lh26">1. History behind the Evolution of Javascript</h5></div>
     </div><!--/.list-group-item -->
    </div><!--/.list-group -->
    <!-- -->
   </div><!--/.col-sm-3 -->

   <div class="col-sm-5">

   <?php include_once 'templates/javascript/01-introduction-to-javascript.php'; ?>

    <div><h4 class="font-red lh26"><b>How to make the First Letter of a String Uppercase (Sentence - Case Format) in Javascript?</b></h4></div>
	<div class="well bg-black code-htmlTags mbot5p">
       <span class="font-palePurple">function&nbsp;</span>
            <span class="font-paleBlue">sentenceCase</span>
            <span class="font-paleWhite">(</span>
			<span class="font-paleRed">value</span>
			<span class="font-paleWhite">)&nbsp;{</span><br/>
            <span class="font-paleOrange">&nbsp;&nbsp;&nbsp;return&nbsp;</span>
			<span class="font-paleWhite">(&nbsp;</span>
			<span class="font-paleRed">value</span>
			<span class="font-paleWhite">.charAt(</span>
			<span class="font-paleOrange">0</span>
			<span class="font-paleWhite">).</span>
			<span class="font-paleWhite">toUpperCase()</span>
			<span class="font-paleOrange">&nbsp;&nbsp;+&nbsp;&nbsp;</span>
			<span class="font-paleRed">value</span>
			<span class="font-paleWhite">.slice(</span>
			<span class="font-paleOrange">1</span>
			<span class="font-paleWhite">)&nbsp;);</span><br/>
			<span class="font-paleWhite">}</span>
    </div>
   </div><!--/.col-sm-5 -->
  
   <div class="col-sm-4">
      <div class="row">
        <div class="col-sm-12">
          <!-- What you'll learn in this Page ::: START -->
          <div class="list-group">
            <div class="list-group-item">
              <div><h4 class="font-red"><b>What you'll learn in this Page:</b></h4></div>
              <div>
                  <ul>
                    <li><h5 class="lh26">Does Javascript and ECMAScript are same or different?</h5></li>
                    <li><h5 class="lh26">What is the Idea behind the evolution and introduction of Javascript?</h5></li>
                  </ul>
              </div>
            </div><!-- list-group-item -->
          </div><!-- list-group -->
          <!-- What you'll learn in this Page ::: END -->
        </div><!--/.col-sm-12 -->
      </div><!--/.row -->
      <div class="row">
        <div class="col-sm-7">
          <!-- JavaScript Libraries and Frameworks ::: START -->
          <div class="list-group">
            <div class="list-group-item">
              <div><h4 class="font-red"><b>JavaScript Libraries</b></h4></div>
              <div>
                  <ul>
                    <li><h5 class="lh26">JQuery</h5></li>
                    <li><h5 class="lh26">React JS</h5></li>
                  </ul>
              </div>
            </div><!-- list-group-item -->
          </div><!-- list-group -->
          <!-- JavaScript Libraries and Frameworks ::: END -->
        </div><!--/.col-sm-7 -->
      </div>
      

   </div><!--/.col-sm-4 -->
  </div><!--/.row -->
</div><!--/.container-fluid -->

</body>
</html>