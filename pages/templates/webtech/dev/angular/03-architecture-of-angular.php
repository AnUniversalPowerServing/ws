<script type="text/babel">
ReactDOM.render(<ContentMenu data={pageContent} 
                             selectMenuId="introduction-to-angular-framework" 
                             selectSubMenuId="architecture-of-angular-application" />, 
                document.getElementById('content'));
</script>
<div class="row">
 <div class="col-sm-7">
  <div align="center"><h1 class="font-red"><b>Architecture of Angular Application</b></h1></div>
  <div><h1 class="font-red"><b>Angular 8/9 Application Architecture</b></h1></div>
  <div>Architecture of Angular Application is made up of eight Building blocks:</div>
  <div class="row">
    <div class="col-sm-4">
        <ol>
        <li>Components</li>
        <li>Modules</li>
        <li>Templates</li>
        <li>Metadata</li>
        <li>Data binding</li>
        </ol>
    </div><!--/.col-sm-4 -->
    <div class="col-sm-6">
        <ol start="6">
        <li>Directives</li>
        <li>Services</li>
        <li>Dependency injection</li>
        <li>Routing</li>
        </ol>
    </div><!--/.col-sm-6 -->
  </div><!--/.row -->
  <div>
      <div><h2><b>Components</b></h2></div>   
      <div>It is an area of the screen which user sees. It is enclosed with data, HTML Template 
          and Logic for View. Every App will have atleast one Component by default and we 
          call it as Root Component / App Component.
      </div>
      <div><h2><b>Modules</b></h2></div> 
      <div>Module is a Container for a group of related Components. Every App will have atleast 
          one Module by default and we call it as App Module ( <code>app.module.ts</code> ).
      </div>  
      
  </div>
 </div><!--/.col-sm-7 -->
 <div class="col-sm-5">
   
 </div><!--/.col-sm-5 -->
</div><!--/.row -->