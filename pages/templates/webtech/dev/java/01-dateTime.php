<script type="text/babel">
ReactDOM.render(<ContentMenu data={pageContent} 
                             selectMenuId="introduction-to-datetime" 
                             selectSubMenuId="java-to-oracle-database-date-time" />, 
                document.getElementById('content'));
</script>
<div class="row">
<div class="col-sm-7 mbot35p">
  <div><h1 class="font-red"><b>Oracle Database Date Time</b></h1></div>
  <div>
  Oracle Database has TimeStamp (<b>Example:</b> <code>13-AUG-2020 06.26.35.399000000 AM</code>).
  Below is the Java Method that convert from Java LocalDateTime to Oracle Database 
  TimeStamp Format:
  </div>
  <!-- -->
  <pre class="code">
  <code class="java">
  public String oracleDB_12HrsFormat(LocalDateTime localDateTime) {
   int date = localDateTime.getDayOfMonth();
   String month = localDateTime.getMonth().toString().substring(0,3);
   int year = localDateTime.getYear();
   String time = localDateTime.format( 
                    DateTimeFormatter.ofPattern("hh:mm:ss a") );
   return date+"-"+month+"-"+year+" "+time;
  }
  </code>
  </pre>
  <div>This Method can be triggered for current Timestamp as follows:</div>
  <pre class="code">
  <code class="java">
   oracleDB_12HrsFormat(LocalDateTime.now());
  </code>
  </pre>
  <!-- -->
  <div><h1 class="font-red"><b>Array - Intersection - Array</b></h1></div>
  <div>Consider two Arrays</div>
  <pre class="code">
  <code class="java">
  String[] array1 = {"Apple","Mango","Banana","Grapes","Gauva","Pine Apple"};
  String[] array2 = {"Mango","Grapes"};
  </code>
  </pre>
  <div>The Result expected as:</div>
  <pre class="code">
  <code class="java">
  String[] result = {"Apple","Banana","Gauva","Pine Apple"};
  </code>
  </pre>
  <div>
   <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#arrays"><b>Using Arrays</b></a></li>
    <li><a data-toggle="tab" href="#collections"><b>Using Collections</b></a></li>
   </ul>
   <div class="list-group">
    <div class="list-group-item">
     <!-- -->
     <div class="tab-content">
     <div id="arrays" class="tab-pane fade in active">
      <h3>HOME</h3>
      <p>Some content.</p>
     </div>
     <div id="collections" class="tab-pane fade">
     <pre class="code">
     <code class="java">
    public List&lt;String&gt; getNonExistValues(String[] array1, 
                                          String[] array2) {
     List&lt;String&gt; result = Arrays.asList(array1);
     for(int i=0;i&lt;array2.length;i++) {
        result.remove(files[j]);
     }
     return result;     
    }
     </code>
     </pre>
     </div>
     </div>
     <!-- -->
    </div><!--/.list-group-item -->
   </div><!--/.list-group -->
  </div>
  <!-- -->
</div>
<div class="col-sm-5">

</div>
</div>