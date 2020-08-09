<script type="text/babel">
console.log(pageContent);
ReactDOM.render(<ContentMenu data={pageContent} 
                             selectMenuId="html-fundamentals" 
                             selectSubMenuId="html-favicon" />, 
                document.getElementById('content'));
</script>
<div class="row lh28">
<div class="col-sm-7">
  <div><h1 class="font-red"><b>HTML Programming - Favicon</b></h1></div>
  <div class="row">
     <img src="<?php echo $PROJECT_URL; ?>/img/webtech/html/favicon.gif" 
     alt="icon image on browser is called as Favicon" class="col-sm-10"/>
  </div><!--/.row -->
  <div><b>Favicon</b> stands for <u><i>Favourite Icon</i></u>.
 <i>It is used to represent specific one in a favourite list.
.jpg/jpeg, .png, .gif, .apng, .svg, .ico are the file formats of Favicon</i>.</div>
<!-- -->
<div class="list-group mtop15p">
   <div class="list-group-item">
    <div><b>JPG/JPEG (Joint Photographic Group/Joint Photographic Experts Group) :</b> 
    When Images are saved in JPG/JPEG, the size of the file decreases with decrease in 
    Image quality.</div>
    <div><b>PNG (Portable Network Graphics) :</b> Improved version to save Image files, introduced 
    without data loss while saving Image file.</div>
    <div><b>GIF (Graphics Interchange Format):</b> Animation motion with graphics are saved with 
    extension of GIF.</div>
    <div><b>APNG (Animated Portable Network Graphics):</b> It is an extension of PNG allowed for 
    animated graphics.</div>
    <div><b>SVG (Scalable Vector Graphics) :</b> Images and their behaviours are defined in XML 
    Files.</div>
    <div><b>ICO :</b> It is an icon image file format introduced by Microsoft Corporation first time in 
    Windows Operating System.</div>
   </div><!--/.list-group-item -->
  </div><!--/.list-group -->
  <div><hr/></div>
  <div>The following are the browsers and file formats support for Favicon:</div>
  <div>
  <table class="table table-bordered">
			   <thead>
				 <tr>
				   <th align="center">File Format</th> 
				   <th align="center">Google Chrome</th> 
				   <th align="center">Mozilla Firefox</th> 
				   <th align="center">Opera</th> 
				   <th align="center">Safari</th> 
				   <th align="center">Internet Explorer</th> 
				   <th align="center">Edge</th>
				 </tr>
			   </thead>
			   <tbody>
				  <tr>
					 <th align="center" scope="row">JPG/JPEG</th>
					 <td align="center"><img src="<?php echo $PROJECT_URL; ?>/img/commons/tick.png" class="img20s"></td>
					 <td align="center"><img src="<?php echo $PROJECT_URL; ?>/img/commons/tick.png" class="img20s"></td>
					 <td align="center"><img src="<?php echo $PROJECT_URL; ?>/img/commons/tick.png" class="img20s"></td>
					 <td align="center"><img src="<?php echo $PROJECT_URL; ?>/img/commons/tick.png" class="img20s"></td>
					 <td align="center"><img src="<?php echo $PROJECT_URL; ?>/img/commons/tick.png" class="img20s"></td>
					 <td align="center">-</td>
				  </tr>
				  <tr>
					 <th align="center" scope="row">PNG</th>
					 <td align="center"><img src="<?php echo $PROJECT_URL; ?>/img/commons/tick.png" class="img20s"></td>
					 <td align="center"><img src="<?php echo $PROJECT_URL; ?>/img/commons/tick.png" class="img20s"></td>
					 <td align="center"><img src="<?php echo $PROJECT_URL; ?>/img/commons/tick.png" class="img20s"></td>
					 <td align="center"><img src="<?php echo $PROJECT_URL; ?>/img/commons/tick.png" class="img20s"></td>
					 <td align="center"><img src="<?php echo $PROJECT_URL; ?>/img/commons/tick.png" class="img20s"></td>
					 <td align="center"><img src="<?php echo $PROJECT_URL; ?>/img/commons/tick.png" class="img20s"></td>
				  </tr>
				  <tr>
					 <th align="center" scope="row">GIF</th>
					 <td align="center"><img src="<?php echo $PROJECT_URL; ?>/img/commons/tick.png" class="img20s"></td>
					 <td align="center"><img src="<?php echo $PROJECT_URL; ?>/img/commons/tick.png" class="img20s"></td>
					 <td align="center"><img src="<?php echo $PROJECT_URL; ?>/img/commons/tick.png" class="img20s"></td>
					 <td align="center"><img src="<?php echo $PROJECT_URL; ?>/img/commons/tick.png" class="img20s"></td>
					 <td align="center"><img src="<?php echo $PROJECT_URL; ?>/img/commons/tick.png" class="img20s"></td>
					 <td align="center"><img src="<?php echo $PROJECT_URL; ?>/img/commons/tick.png" class="img20s"></td>
				  </tr>
				  <tr>
					 <th align="center" scope="row">APNG</th>
					 <td align="center"><img src="<?php echo $PROJECT_URL; ?>/img/commons/wrong.png" class="img20s"></td>
					 <td align="center"><img src="<?php echo $PROJECT_URL; ?>/img/commons/tick.png" class="img20s"></td>
					 <td align="center"><img src="<?php echo $PROJECT_URL; ?>/img/commons/tick.png" class="img20s"></td>
					 <td align="center"><img src="<?php echo $PROJECT_URL; ?>/img/commons/wrong.png" class="img20s"></td>
					 <td align="center"><img src="<?php echo $PROJECT_URL; ?>/img/commons/wrong.png" class="img20s"></td>
					 <td align="center">-</td>
				  </tr>
				  <tr>
					 <th align="center" scope="row">SVG</th>
					 <td align="center"><img src="<?php echo $PROJECT_URL; ?>/img/commons/wrong.png" class="img20s"></td>
					 <td align="center"><img src="<?php echo $PROJECT_URL; ?>/img/commons/tick.png" class="img20s"></td>
					 <td align="center"><img src="<?php echo $PROJECT_URL; ?>/img/commons/tick.png" class="img20s"></td>
					 <td align="center"><img src="<?php echo $PROJECT_URL; ?>/img/commons/wrong.png" class="img20s"></td>
					 <td align="center"><img src="<?php echo $PROJECT_URL; ?>/img/commons/wrong.png" class="img20s"></td>
					 <td align="center">-</td>
				  </tr>
				  <tr>
					 <th align="center" scope="row">ICO</th>
					 <td align="center"><img src="<?php echo $PROJECT_URL; ?>/img/commons/tick.png" class="img20s"></td>
					 <td align="center"><img src="<?php echo $PROJECT_URL; ?>/img/commons/tick.png" class="img20s"></td>
					 <td align="center"><img src="<?php echo $PROJECT_URL; ?>/img/commons/tick.png" class="img20s"></td>
					 <td align="center"><img src="<?php echo $PROJECT_URL; ?>/img/commons/tick.png" class="img20s"></td>
					 <td align="center"><img src="<?php echo $PROJECT_URL; ?>/img/commons/tick.png" class="img20s"></td>
					 <td align="center"><img src="<?php echo $PROJECT_URL; ?>/img/commons/tick.png" class="img20s"></td>
				  </tr>
			   </tbody>
			</table>
  </div>
  <div align="center"><b>ICO</b> is the suitable file format to use in the Web pages.</div>
  <div><hr/></div>
  <div><b>To set Favicon to a Website:</b></div>
  <div>
   <ol>
    <li><div>Create a Webpage (index.html) and add following code:</div>
    <!-- -->
    <pre class="code">
    <code class="html">
    &lt;!DOCTYPE html&gt;
    &lt;html&gt;
    &lt;head&gt;
    &lt;-- Header Section ::: START --&gt;
    &lt;-- Header Section ::: END --&gt;
    &lt;/head&gt;
    &lt;body&gt;
    &lt;-- Body Section ::: START --&gt;
    &lt;-- Body Section ::: END --&gt;
    &lt;/body&gt;
    &lt;/html&gt;
    </code>
    </pre>
    <div align="center" class="mbot15p"><b>index.html</b></div>
    <!-- -->
    </li>
    <li>Make a Square logo of 16 X 16 pixel or 32 X 32 pixel or 64 x 64 pixel or 128 X 128 pixel 
        and save its extension with .ico<br/>
        <b><i>Example:<i></b> <code>favicon.ico</code></li>
    <li>Place favicon.ico beside index.html</li>
    <li><div>Add &lt;link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/&gt; in the head tag 
        of HTML page as shown.</div>
    <!-- -->
    <pre class="code">
    <code class="html">
    &lt;!DOCTYPE html&gt;
    &lt;html&gt;
    &lt;head&gt;
    &lt;-- Header Section ::: START --&gt;
    &lt;link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/&gt;
    &lt;-- Header Section ::: END --&gt;
    &lt;/head&gt;
    &lt;body&gt;
    &lt;-- Body Section ::: START --&gt;
    &lt;-- Body Section ::: END --&gt;
    &lt;/body&gt;
    &lt;/html&gt;
    </code>
    </pre>
    <div align="center"><b>index.html</b></div>
    <!-- -->
    </li>
   </ol>
  </div>
  <!-- -->
</div><!--/.col-sm-7 -->
<div class="col-sm-5">
 
</div><!--/.col-sm-5 -->   
</div><!--/.row -->