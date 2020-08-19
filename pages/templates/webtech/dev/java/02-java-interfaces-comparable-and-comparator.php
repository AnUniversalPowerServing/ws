<script type="text/babel">
ReactDOM.render(<ContentMenu data={pageContent} 
                             selectMenuId="java-interfaces" 
                             selectSubMenuId="java-interfaces-comparable-and-comparator" />, 
                document.getElementById('content'));
</script>
<div class="row">
<div class="col-sm-7 mbot35p">
  <div><h1 class="font-red"><b>Java Interfaces - Comparable and Comparator</b></h1></div>
  <div>
  Comparable and Comparator are the two interfaces used to sort the Collection Elements.
  </div>
  <div class="list-group mtop15p">
   <div class="list-group-item">
    <b>Comparable</b> interface helps to compare an object with another Object of same Type.
   </div><!--/.list-group-item -->
  </div><!--/.list-group -->
  <!-- -->
  <pre class="code">
  <code class="java">
  
  </code>
  </pre>
  <!-- -->
  <!-- -->
  <div><h5><b>See the main differences between Comparable and Comparator Interfaces:</b></h5></div>
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr class="bg-darkPurple">
        <th>S.No.</th>
        <th>Comparable</th>
        <th>Comparator</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>It is present in <code>java.lang</code> package.</td>
        <td>It is present in <code>java.util</code> package.</td>
      </tr>
      <tr>
        <td>2</td>
        <td>
          <div><b>Single Sorting Sequence</b></div>
          <div>It is able to sort the Collection with a Single Element</div>
        </td>
        <td>
          <div><b>Multiple Sorting Sequence</b></div>
          <div>It is able to sort the Collection with a Multiple Elements</div>
        </td>
      </tr>
      <tr>
        <td>3</td>
        <td>
          Sorting modifies the Actual Class
        </td>
        <td>
          Sorting doesn't modify the Actual Class
        </td>
      </tr>
    </tbody>
  </table>
  </div>
  <!-- -->
</div>
<div class="col-sm-5">

</div>
</div>