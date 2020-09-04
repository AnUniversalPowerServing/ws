<div class="row">
<div class="col-sm-5">
<!-- -->
<div class="mtop15p">Import <code>js/components/core/component.auth.email.js</code></div>
<div class="mtop15p">
<pre class="code">
<code class="javascript">// Add in Constructor
this.state = { 
                emailAddress: { id:'', 
                                value:'', 
                                isValid: false, 
                                reset:false, 
                                sendOTPCode:false 
                              }
             };
</code>
</pre>
</div>
<!-- -->
<!-- -->
<div>
<div class="mtop15p mbot15p">
<pre class="code">
<code>&lt;EmailAddress id={emailAddress_Id} 
                    label={label}
                    isRequired={isRequired}
                    purpose={purpose}
                    validateUrl={validateUrl} 
                    isFormValid={this.isValid_emailAddress}
                    reset={this.state.emailAddress.reset} /&gt;
</code>
</pre>
</div>
</div>
<!-- -->
<!-- -->
<div><b>CallBack Function</b></div>
<div class="mtop15p">
<pre class="code">
<code class="javascript">isValid_emailAddress = (callBack) => {
// callBack -contains-> { id:'', value:'', 
//    isValid: true, msg: '' } 
  this.validateAndAlert(callBack, 'emailAddress');
}
</code>
</pre>
</div>
<!-- -->
</div><!--/.col-sm-5 -->
<div class="col-sm-7">

<!-- -->
<div>
<label>Component Description</label>
<div class="list-group">
<div class="list-group-item">
This Email Address Field can be used for Registering a User or to Authenticate a User.
</div><!--/.list-group-item -->
</div><!--/.list-group -->
<!-- -->

<!-- -->
<div>
<label>Attributes Description</label>
<div class="table-responsive">
<table class="table">
<thead>
 <tr>
    <th>S.No.</th>
    <th>Atttribute</th>
    <th>Type</th>
    <th>Description</th>
 </tr>
</thead>
<tbody>
 <tr>
     <td>1.</td>
     <td>id</td>
     <td>String</td>
     <td>Unique Id for the Field</td>
 </tr>
 <tr>
     <td>2.</td>
     <td>label</td>
     <td>String</td>
     <td>Label of the Field</td>
 </tr>
 <tr>
     <td>3.</td>
     <td>isRequired</td>
     <td>Boolean</td>
     <td><div>true / false</div>
         <div><code>true</code> - Mandatory Field in the Form</div>
         <div><code>false</code> - Non-Mandatory Field in the Form</div>
     </td>
 </tr>
 <tr>
     <td>4.</td>
     <td>purpose</td>
     <td>String</td>
     <td><div>Register / Authenticate</div>
         <div><code>Register</code> - Used while Registering an Account</div>
         <div><code>Authenticate</code> - Used while Authenticating an Account</div>
     </td>
 </tr>
 <tr>
     <td>5.</td>
     <td>validateUrl</td>
     <td>String</td>
     <td><div>It is a URL to validate Email exist or not in Database</div>
         <div class="list-group">
          <div class="list-group-item">
            <div><b>URL JSON Output Format:</b></div>
            <div>{ "isExist" : false }</div>
          </div><!--/.list-group-item -->
         </div><!--/.list-group -->
         <div>for purpose=<code>Register</code><div>
         <div class="table-responsive">
          <table class="table">
           <thead><tr><th>isExist</th><th>Description</th></tr></thead>
           <tbody>
             <tr><td>true</td><td>Email exists in Database (throws Validation Error)</td></tr>
             <tr><td>false</td><td>Email not exists in Database (Shows Success icon)</td></tr>
           </tbody>
          </table>
         <div>
         <div>for purpose=<code>Authenticate</code><div>
         <div class="table-responsive">
          <table class="table">
           <thead><tr><th>isExist</th><th>Description</th></tr></thead>
           <tbody>
             <tr><td>true</td><td>Email exists in Database (Shows Success icon)</td></tr>
             <tr><td>false</td><td>Email not exists in Database (throws Validation Error - Asks to Register an Account Message)</td></tr>
           </tbody>
          </table>
         <div>
     </td>
 </tr>
 <tr>
     <td>6.</td>
     <td>isFormValid</td>
     <td>CallBack Function</td>
     <td><div>Register / Authenticate</div>
         <div><code>Register</code> - Used while Registering an Account</div>
         <div><code>Authenticate</code> - Used while Authenticating an Account</div>
     </td>
 </tr>
 <tr>
     <td>7.</td>
     <td>reset</td>
     <td>Boolean</td>
     <td><div>true / false</div>
         <div><code>true</code> - Used while Registering an Account</div>
         <div><code>false</code> - Used while Authenticating an Account</div>
     </td>
 </tr>
</tbody>
</table>
</div>
<!-- -->

</div>
</div><!--/.col-sm-6 -->
</div><!--/.row -->