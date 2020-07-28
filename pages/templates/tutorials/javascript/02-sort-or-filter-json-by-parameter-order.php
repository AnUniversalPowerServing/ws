    <!-- -->
    <div><h4 class="font-red"><b>How to sort or filter a JSON data by a Parameter Order?</b></h4></div>
    <div>Lets consider following JSON Data:</div>
    <pre class="code">
    <code class="javascript">
    var jsonData = [{ "item":"Banana", "type":"Fruit" }, 
                    { "item":"Tomato", "type":"Vegetable" }, 
                    { "item":"Car", "type":"Transport" }, 
                    { "item":"Potato", "type":"Vegetable" }, 
                    { "item":"Mango", "type":"Fruit" }, 
                    { "item":"Bike", "type":"Transport" }, 
                    { "item":"Bus", "type":"Transport" }, 
                    { "item":"Train", "type":"Transport" }, 
                    { "item":"Brinjal", "type":"Vegetable" }];
    </code>
    </pre>
    <div>Now, this JSON Data is to be sorted or Filtered by a Parameter Order <code>type</code> and 
    the output should be as follows:</div>
    <pre class="code">
    <code class="javascript">
    var sortedJsonData = [{ "item":"Banana", "type":"Fruit" }, 
                          { "item":"Mango", "type":"Fruit" }, 
                          { "item":"Tomato", "type":"Vegetable" }, 
                          { "item":"Potato", "type":"Vegetable" }, 
                          { "item":"Brinjal", "type":"Vegetable" },
                          { "item":"Car", "type":"Transport" }, 
                          { "item":"Bike", "type":"Transport" }, 
                          { "item":"Bus", "type":"Transport" }, 
                          { "item":"Train", "type":"Transport" }];
    </code>
    </pre>
    <div>We define sort order of parameter <code>type</code> as follows:</div>
    <pre class="code">
    <code class="javascript">
    var sortOrder =[ "Fruit", "Vegetable", "Transport" ];
    </code>
    </pre>

    <div>Then ,call the Following function which returns sorted JSON in our required format.</div>
    <pre class="code">
    <code class="javascript">
    function sortByParamOrder(jsonData,sortOrder,param){
      var sortData = [];
      sortOrder.map((sort) => {
       jsonData.map((data) => { if(data[param] === sort){ sortData.push(data); } });
      });
      return sortData;
    } 
    </code>
    </pre>

    <div>Above Function should be called as follows:</div>
    <pre class="code">
    <code class="javascript">
    var sortedJsonData = sortByParamOrder(jsonData,sortOrder,'type');
    </code>
    </pre>

    <div><b>See the Full code of this Implementation:</b></div>
    <pre class="code">
    <code class="html">
    &lt;script type="text/javascript"&gt;
    function sortByParamOrder(jsonData,sortOrder,param){
      var sortData = [];
      sortOrder.map((sort) => {
       jsonData.map((data) => { if(data[param] === sort){ sortData.push(data); } });
      });
      return sortData;
    } 
    // Your Code starts from here
    var jsonData = [{ "item":"Banana", "type":"Fruit" }, 
                    { "item":"Tomato", "type":"Vegetable" }, 
                    { "item":"Car", "type":"Transport" }, 
                    { "item":"Potato", "type":"Vegetable" }, 
                    { "item":"Mango", "type":"Fruit" }, 
                    { "item":"Bike", "type":"Transport" }, 
                    { "item":"Bus", "type":"Transport" }, 
                    { "item":"Train", "type":"Transport" }, 
                    { "item":"Brinjal", "type":"Vegetable" }];
    var sortOrder =[ "Fruit", "Vegetable", "Transport" ];
    var sortedJsonData = sortByParamOrder(jsonData,sortOrder,'type');
    console.log(sortedJsonData); // prints the sortedJsonData
    &lt;/script&gt;
    </code>
    </pre>
    <!-- -->