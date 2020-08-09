<script type="text/babel">
console.log(pageContent);
ReactDOM.render(<ContentMenu data={pageContent} 
                             selectMenuId="html-fundamentals" 
                             selectSubMenuId="html-tags-and-tag-attributes" />, 
                document.getElementById('content'));
</script>
<div class="row">
<div class="col-sm-7">
  <div><h1 class="font-red"><b>HTML Programming - Tags and Tag Attributes</b></h1></div>
  <div class="list-group">
  <div class="list-group-item">
  <div align="center" class="mtop15p"><b>What is a Tag and Tag Attribute in HTML?</b></div>
  <div class="mtop15p"><b>HTML TAG -</b> It is an hidden keyword which is used to format the content and 
  display the output in the Web-browser. It contains two parts:</div>
  <div>
    <ul>
     <li>Open Tag <code>&lt;tagname&gt;</code></li>
     <li>Close Tag <code>&lt;/tagname&gt;</code></li>
    </ul>
  </div>
  <div>The Syntax of HTML Program will be in HTML Tags as <code>&lt;tagname&gt;...&lt;/tagname&gt;</code> 
       Everything from Open tag to Closetag is called as HTML Element.
  </div>
  <div class="mtop15p mbot15p"><b>HTML TAG ATTRIBUTE -</b> They are specified in Name/Value pair in the Open tag that 
  provides more information about HTML Element.<br/>
  The Syntax is mentioned as
  <code>&lt;tagname attributeName="attributeValue"&gt;...&lt;/tagname&gt;</code>
  </div>
  </div><!--/.list-group-item -->
  </div><!--/.list-group -->
</div><!--/.col-sm-7 -->
<div class="col-sm-5">
</div><!--/.col-sm-5 -->   
</div><!--/.row -->