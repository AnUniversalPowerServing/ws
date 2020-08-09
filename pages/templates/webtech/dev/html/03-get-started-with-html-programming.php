<script type="text/javascript">
document.title='Widesecond.com | Get Started with HTML Programming';
</script>
<script type="text/babel">
console.log(pageContent);
ReactDOM.render(<ContentMenu data={pageContent} 
                             selectMenuId="html-fundamentals" 
                             selectSubMenuId="get-started-with-html-programming" />, 
                document.getElementById('content'));
</script>
<div class="row lh28">
<div class="col-sm-7 mbot35p">
  <div><h1 class="font-red"><b>Get Started HTML Programming</b></h1></div>
  <div class="list-group">
   <div class="list-group-item">
    <div align="center"><b>Why we need to write HTML Program in HTML Page?</b></div>
    <div>Generally when we create HTML Page and write some text in HTML Document, we will view in 
        Browser. Other than Plain Text, if a user likes to view Media such as Audio, video, Graphics, 
        font styles and other features in a Browser page we need to write in HTML.
    </div>
   </div><!--/.list-group-item -->
  </div><!--/.list-group -->
  <div>
    <div align="center"><b>How to write basic HTML Program?</b></div>
    <div><b>Structure of HTML Program:</b></div>
    <div>HTML program is written in tags, it contains Open tag and Close tag.</div>
    <div>
     <ul>
       <li><i>OPEN TAG</i> is written with tag Name under Angle Brackets.</li> 
       <li><i>CLOSE TAG</i> is written with tag Name under Angle Brackets where forward 
           slash is provided front of tag Name.</li>
     </ul>
    </div>
    <div><b>Basic Syntax:</b></div>
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
    <div class="row">
      <div class="col-sm-3"><code><b>&lt;!DOCTYPE html&gt;</b></code></div>
      <div class="col-sm-9">
      It is a <i>DOCUMENT TYPE</i> declaration providing instructions to Web browser about the version of 
      HTML Program in the HTML Page (This declaration mentions to the Web browser that this HTML 
      Page is programmed in HTML 5 Version). If this declaration is not mentioned, Web Browser 
      assumes HTML Page is programmed in HTML 5 Version only (by default).
      </div><!--/.col-sm-9 -->
    </div><!--/.row -->
    <div class="row">
      <div class="col-sm-3"><code><b>&lt;html&gt;&lt;/html&gt;</b></code></div>
      <div class="col-sm-9">HTML Program is written under HTML Tags.</div>
    </div><!--/.row -->
    <div class="row">
      <div class="col-sm-3"><code><b>&lt;head&gt;&lt;/head&gt;</b></code></div>
      <div class="col-sm-9">It contains information that supports HTML Page.</div>
    </div><!--/.row -->
    <div class="row">
      <div class="col-sm-3"><code><b>&lt;body&gt;&lt;/body&gt;</b></code></div>
      <div class="col-sm-9">It contains the content that to be displayed in the Web Browser</div>
    </div><!--/.row -->
  </div>
</div><!--/.col-sm-7 -->
<div class="col-sm-5">
</div><!--/.col-sm-5 -->   
</div><!--/.row -->