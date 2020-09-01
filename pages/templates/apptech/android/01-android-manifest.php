<div class="row">
 <div class="col-sm-7">
  <div><h1 class="font-red"><b>Android Manifest</b></h1></div>
  <div>
    <div><code><b>src/index.html</b></code> (Starting point of the App)</div>
    <div>
    </div>
  </div>
  <!-- -->
    <div>
      <h1 class="font-red"><b>tools:overrideLibrary attribute is not working 
      under &lt;uses-sdk/&gt;</b></h1>
    </div>
    <div class="mbot15p">
    Add <code>xmlns:tools="http://schemas.android.com/tools"</code> in manifest tag.
    Then, <code>tools:overrideLibrary</code> attribute works in 
    <code>&lt;uses-sdk/&gt;</code> tag.<br/>
    The Code looks like
    </div>
    <div class="mbot15p">
<pre class="code">
<code class="xml">
 &lt;?xml version="1.0" encoding="utf-8"?&gt;
 &lt;manifest
  xmlns:android="http://schemas.android.com/apk/res/android"
  xmlns:tools="http://schemas.android.com/tools"
  package="anups.dun.app"&gt;
  &lt;uses-sdk android:minSdkVersion="9"
               android:targetSdkVersion="28" 
               tools:overrideLibrary="com.google.zxing.client.android" /&gt;
 &lt;/manifest&gt;<br/>
</code>
</pre>
</div>
<div align="center"><b>Android Manifest File</b></div>
  <!-- -->
 </div><!--/.col-sm-7 -->
 <div class="col-sm-5">
 <!-- -->
  <div class="list-group">
  <div class="list-group-item">
  <div><h1 class="font-red"><b>Do you know?</b></h1></div>
  <div class="mbot15p">The first QR code system was invented by a Japanese company called Dense-Wave in 1994.</div>
  </div><!--/.list-group-item -->
  </div><!--/.list-group -->
 <!-- -->
 </div><!--/.col-sm-5 -->
</div><!--/.row -->