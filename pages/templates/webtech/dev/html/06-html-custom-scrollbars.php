<script type="text/babel">
console.log(pageContent);
ReactDOM.render(<ContentMenu data={pageContent} 
                             selectMenuId="html-fundamentals" 
                             selectSubMenuId="html-custom-scrollbars" />, 
                document.getElementById('content'));
</script>
<style>
.scrollBar-01 { overflow-y:scroll;border:1px solid #000; }
.scrollBar-01::-webkit-scrollbar-track { -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);border-radius: 10px;background-color: #F5F5F5; }
.scrollBar-01::-webkit-scrollbar { width:12px;background-color:#F5F5F5; }
.scrollBar-01::-webkit-scrollbar-thumb { border-radius: 10px;-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);background-color: #555; }
.root { width:100%;height:100px; }
</style>
<div class="row lh26 mbot35p">
<div class="col-sm-7">
  <div><h1 class="font-red"><b>HTML Custom ScrollBars</b></h1></div>
  <div class="row">
    <img src="<?php echo $PROJECT_URL; ?>/img/webtech/html/scrollbars.png" class="col-sm-6"/>
    <div class="col-sm-6">
    <i>Custom Scrollbars in a Web page can be designed using Cascade Stylesheets (CSS).</i>
    </div>
  </div><!--/.row -->
  <div><hr/></div>
  <!-- ScrollBar#1 ::: START -->
  <div align="center"><h2><b>ScrollBar-01</b></h2></div>
  <div><b>Full Code:</b></div>
  <div class="row">
    <div class="col-sm-12">
    <!-- -->
    <pre class="code">
    <code class="html">
    &lt;!DOCTYPE html&gt;
    &lt;html&gt;
    &lt;head&gt;
    &lt;-- Header Section ::: START --&gt;
    &lt;style&gt;
    .scrollBar-01 { 
        overflow-y:scroll;
        border:1px solid #000; 
    }
    .scrollBar-01::-webkit-scrollbar-track { 
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
        border-radius: 10px;background-color: #F5F5F5; 
    }
    .scrollBar-01::-webkit-scrollbar { 
        width: 12px;
        background-color: #F5F5F5; 
    }
    .scrollBar-01::-webkit-scrollbar-thumb { 
        border-radius: 10px;
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
        background-color: #555; 
    }
    #root {
        width:100%;
        height:100px;
    }
    &lt;/style&gt;
    &lt;-- Header Section ::: END --&gt;
    &lt;/head&gt;
    &lt;body&gt;
    &lt;-- Body Section ::: START --&gt;
    &lt;div id="root" class="scrollBar-01"&gt;
    Line-01&lt;br/&gt;
    Line-02&lt;br/&gt;
    Line-03&lt;br/&gt;
    Line-04&lt;br/&gt;
    Line-05&lt;br/&gt;
    Line-06&lt;br/&gt;
    Line-07&lt;br/&gt;
    Line-08&lt;br/&gt;
    Line-09&lt;br/&gt;
    Line-10
    &lt;/div&gt;
    &lt;-- Body Section ::: END --&gt;
    &lt;/body&gt;
    &lt;/html&gt;
    </code>
    </pre>
    <div align="center" class="mbot15p"><b>index.html</b></div>
    <div><b>Output:</b></div>
    <div class="root scrollBar-01">
    Line-01<br/>
    Line-02<br/>
    Line-03<br/>
    Line-04<br/>
    Line-05<br/>
    Line-06<br/>
    Line-07<br/>
    Line-08<br/>
    Line-09<br/>
    Line-10
    </div>
    <!-- -->
    </div>
  </div><!--/.row -->
  <!-- ScrollBar#1 ::: END -->
</div><!--/.col-sm-7 -->
<div class="col-sm-5">
</div><!--/.col-sm-5 -->   
</div><!--/.row -->