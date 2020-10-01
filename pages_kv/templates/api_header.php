<style>
.btn-lgtgrey { background-color:#eee;color:#000; }
div.im-checkout { max-width: 100%;margin-bottom: 0px; }
.curpoint { cursor:pointer; }
.hide-block { display:none; }
body { overflow-x:hidden; }
.pad0 { padding:0px; }
.mtop5p { margin-top:5px; }
.mtop10p { margin-top:10px; }
.mtop15p { margin-top:15px; }
.mtop20p { margin-top:20px; }
.mtop25p { margin-top:25px; }
.mbot5p { margin-bottom:5px; }
.mbot10p { margin-bottom:10px; }
.mbot15p { margin-bottom:15px; }
.mbot20p { margin-bottom:20px; }
.mbot25p { margin-bottom:25px; }
.mbot30p { margin-bottom:30px; }
.mbot35p { margin-bottom:35px; }
a { color:#fff; }
a.a-custom { text-decoration:none;color:#000; }
.navbar-nav>li>a , .navbar-nav>li>a:focus{ background-color:#fff;color:#a965b5; }
.navbar-nav>li>a:hover {  background-color:#fff;color:#333; }
.navbar-nav>li.active>a,.navbar-nav>li.active>a:hover, .navbar-nav>li.active>a:focus { color:#630062;border-bottom:3px solid #630062; }
.navbar { border-radius:0px;margin-bottom:0px; }
.navbar-white { background-color: #fff; border-color: #fff; }
.navbar-purple { background-color: #630062; border-color: #630062; }
.navbar-purple .navbar-toggle { border-color: #fff; }
.navbar-purple .navbar-toggle .icon-bar { background-color: #fff; }
.navbar-brand,.navbar-brand:hover { height:45px;color:#fff; }
body::-webkit-scrollbar-track { -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);background-color: #F5F5F5; }         
body::-webkit-scrollbar { width: 6px;background-color: #F5F5F5; }        
body::-webkit-scrollbar-thumb { background-color: #000000; }
body { overflow-x:hidden; }
@font-face { font-family: "kvfont001";src: url("../fonts/acratica-font.otf"); }
@font-face { font-family: "kvfont002";src: url("../fonts/boogaloo-regular.otf"); }
.slidecontainer { width: 100%; }
.slider { -webkit-appearance: none;width: 100%;height: 15px;border-radius: 5px;background: #d3d3d3;
		  outline: none;opacity: 0.7;-webkit-transition: .2s;transition: opacity .2s; }
.slider:hover { opacity: 1; }
.slider::-webkit-slider-thumb { -webkit-appearance:none;appearance:none;width:25px;height:25px;border-radius:50%;
								background:#4CAF50;cursor:pointer; }
.slider::-moz-range-thumb { width:25px;height:25px;border-radius:50%;background:#4CAF50;cursor:pointer; }
.nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover { background-color:#630062; }
.panel-primary>.panel-heading { color: #fff;background-color: #630062;border-color: #630062; }
.panel-primary { border-color: #630062; }
.btn-primary,.btn-primary:hover,.btn-primary:active,.btn-primary:focus, .btn-primary.active.focus, 
.btn-primary.active:focus, .btn-primary.active:hover, .btn-primary:active.focus, .btn-primary:active:focus,
.btn-primary:active:hover { color: #fff;background-color: #630062;border-color: #630062; }
</style>
<script type="text/javascript">
var CURRENT_TAB_ID;
function kvHeaderMenu(id){
 if(id!=='kvHeaderMenu-login'){ CURRENT_TAB_ID=id; }
 var arry=["kvHeaderMenu-customer-myDashboard","kvHeaderMenu-admin-mydashboard","kvHeaderMenu-Home","kvHeaderMenu-howItWorks",
"kvHeaderMenu-browseMatrimony","kvHeaderMenu-matchCalculator","kvHeaderMenu-mymatchprofiles","kvHeaderMenu-myfavourites",
"kvHeaderMenu-mycart","kvHeaderMenu-pricing","kvHeaderMenu-signUp","kvHeaderMenu-login","kvHeaderMenu-logout"];
 for(var index=0;index<arry.length;index++){
   if(id===arry[index]) { if(!$('#'+arry[index]).hasClass('active')) { $('#'+arry[index]).addClass('active'); } }
   else { if($('#'+arry[index]).hasClass('active')) { $('#'+arry[index]).removeClass('active'); } }
 }
}
</script>
<div>
<nav class="navbar navbar-white">
  <div class="container-fluid">
    <div class="navbar-header">
	  <?php if(isset($_SESSION["ACCOUNT_TYPE"])) { ?>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#kvHeaderMenu">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      <?php } ?>		
      </button>
      <a class="navbar-brand" style="margin-top:5px;" href="#"><!--img src="images/logo.png" style="width:180px;height:auto;"/-->
	    <span style="font-family:kvfont001;font-size:24px;">
		 <span style="color:#630062;">Kalyana</span><span style="color:#630062;">Veena</span><span style="color:#630062;">.com</span>
		</span>
	  </a>
    </div>
    <div id="kvHeaderMenu" class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
	    <?php if(isset($_SESSION["ACCOUNT_TYPE"])) { ?>
		<?php if($_SESSION["ACCOUNT_TYPE"]=='CUSTOMER') { ?>
	    <!-- Customer Account -->
		<li id="kvHeaderMenu-customer-myDashboard" onclick="javascript:kvHeaderMenu(this.id);">
		  <a href="<?php if(isset($_SESSION["PROJECT_URL"])){ echo $_SESSION["PROJECT_URL"]; } ?>customer/dashboard">
			<i class="fa fa-tachometer"></i>&nbsp;<b>My Dashboard</b>
		  </a>
		</li>
		<?php } ?>
        <?php if($_SESSION["ACCOUNT_TYPE"]=='ADMINISTRATOR') { ?>
		<!-- Administrator Account -->
		<li id="kvHeaderMenu-admin-mydashboard">
		  <a href="<?php if(isset($_SESSION["PROJECT_URL"])){ echo $_SESSION["PROJECT_URL"]; } ?>admin/dashboard">
		      <b><i class="fa fa-tachometer" aria-hidden="true"></i>&nbsp;Administrator Dashboard</b>
		  </a>
		</li>
		<?php } ?>
        <?php } else { ?>
        <li id="kvHeaderMenu-Home" onclick="javascript:kvHeaderMenu(this.id);">
		  <a href="<?php if(isset($_SESSION["PROJECT_URL"])){ echo $_SESSION["PROJECT_URL"]; } ?>">
		     <i class="fa fa-home"></i>&nbsp;<b>Home</b>
		  </a>
		</li>
		
		<li id="kvHeaderMenu-howItWorks" onclick="javascript:kvHeaderMenu(this.id);">
		   <a href="<?php if(isset($_SESSION["PROJECT_URL"])){ echo $_SESSION["PROJECT_URL"]; } ?>app/howItWorks">
		     <i class="fa fa-book"></i>&nbsp;<b>How it works?</b>
		   </a>
		</li>
		<?php } ?>
		<li id="kvHeaderMenu-browseMatrimony" onclick="javascript:kvHeaderMenu(this.id);">
		   <a href="<?php if(isset($_SESSION["PROJECT_URL"])){ echo $_SESSION["PROJECT_URL"]; } ?>app/browseMatrimony">
		      <i class="fa fa-mouse-pointer"></i>&nbsp;<b>Browse Matrimony</b>
		   </a>
		</li>
		
		<li id="kvHeaderMenu-matchCalculator" onclick="javascript:kvHeaderMenu(this.id);">
		   <a href="<?php if(isset($_SESSION["PROJECT_URL"])){ echo $_SESSION["PROJECT_URL"]; } ?>app/matchCalculator">
		      <i class="fa fa-search"></i>&nbsp;<b>Match Calculator</b>
		   </a>
		</li>
		<?php if(isset($_SESSION["ACCOUNT_TYPE"])) { ?>
		<?php if($_SESSION["ACCOUNT_TYPE"]=='CUSTOMER') { ?>
		<li id="kvHeaderMenu-mymatchprofiles" onclick="javascript:kvHeaderMenu(this.id);">
		   <a href="<?php if(isset($_SESSION["PROJECT_URL"])){ echo $_SESSION["PROJECT_URL"]; } ?>">
		      <i class="fa fa-list-alt"></i>&nbsp;<b>My Match Profiles</b>
		   </a>
		</li>
		
		<li id="kvHeaderMenu-myfavourites" onclick="javascript:kvHeaderMenu(this.id);">
		   <a href="<?php if(isset($_SESSION["PROJECT_URL"])){ echo $_SESSION["PROJECT_URL"]; } ?>">
		      <i class="fa fa-star"></i>&nbsp;<b>My Favourites</b>
		   </a>
		</li>

		<li id="kvHeaderMenu-mycart" onclick="javascript:kvHeaderMenu(this.id);">
		   <a href="<?php if(isset($_SESSION["PROJECT_URL"])){ echo $_SESSION["PROJECT_URL"]; } ?>">
		     <i class="fa fa-cart"></i>&nbsp;<b>My Cart</b>
		   </a>
		</li>
		<?php } ?>
		<?php } ?>
		<?php if(!isset($_SESSION["ACCOUNT_TYPE"])) { ?>
		<li id="kvHeaderMenu-pricing" onclick="javascript:kvHeaderMenu(this.id);">
		   <a href="<?php if(isset($_SESSION["PROJECT_URL"])){ echo $_SESSION["PROJECT_URL"]; } ?>app/pricing">
		     <i class="fa fa-usd"></i>&nbsp;<b>Pricing</b>
		   </a>
		</li> 
		<li id="kvHeaderMenu-signUp" onclick="javascript:signupForm(this.id);">
		   <a href="#">
		   <!--a href="<?php if(isset($_SESSION["PROJECT_URL"])){ echo $_SESSION["PROJECT_URL"]; } ?>app/signup"-->
		      <span class="glyphicon glyphicon-user"></span> <b>SignUp</b>
		   </a>
		</li> 
		<li id="kvHeaderMenu-login" onclick="javascript:loginForm(this.id);">
		  <a href="#"><span class="glyphicon glyphicon-log-in"></span> <b>Login</b></a>
		</li>
		<?php } ?>
		<?php if(isset($_SESSION["ACCOUNT_TYPE"])) { ?>
		<li id="kvHeaderMenu-logout" onclick="javascript:logoutAuthentication();">
		   <a href="<?php if(isset($_SESSION["PROJECT_URL"])){ echo $_SESSION["PROJECT_URL"]; } ?>">
		     <i class="fa fa-sign-out"></i>&nbsp;<b>logout</b>
		   </a>
		</li>
        <?php } ?>
	 </ul>
    </div>
  </div>
</nav>
</div>
<!-- Register Modal ::: Start -->
<script type="text/javascript">
$(document).ready(function(){
 
});
var SIGNUP_USER_OTPCODE;
function signupForm(id){
 kvHeaderMenu(id);
 $('#registerModal').modal();
 $('.modal-open').css('padding-right','0px');
}
function closeRegister(){
 console.log('CURRENT_TAB_ID: '+CURRENT_TAB_ID);
 kvHeaderMenu(CURRENT_TAB_ID);
 $('#registerModal').modal('hide');
}
function signup_sendOTPCode(){
 var surName = document.getElementById("signup_customer_surName").value;
 var name = document.getElementById("signup_customer_name").value;
 var mobileCode = '+91';
 var mobileNumber = document.getElementById("signup_customer_mobileNumber").value;
 if(surName.length>0){
  if(name.length>0){
   if(mobileNumber.length===10){
     js_ajax('GET',PROJECT_URL+'backend/php/dac/controller.module.app.authentication.php',
	 { action:'CHECK_MOBILENUMBER', mobile:mobileNumber },function(response){
	   if(response==='UNREGISTERED'){
	     document.getElementById("signup_customer_name").disabled=true;
	     document.getElementById("signup_customer_mobileNumber").disabled=true;
	     SIGNUP_USER_OTPCODE=Math.floor(Math.random() * (99999-10000)+1)+10000;
	     console.log("SIGNUP_USER_OTPCODE: "+SIGNUP_USER_OTPCODE);
	     /* Send OTP Code to the Customer */
	     if(!$('#signup_customer_warning').hasClass('hide-block')){ 
	      $('#signup_customer_warning').addClass('hide-block'); 
	     }
	     if($('#signup_otpcode_validation').hasClass('hide-block')){ 
	      $('#signup_otpcode_validation').removeClass('hide-block'); 
	     }
	   } else { div_display_warning('signup_customer_warning','W050'); }
	 });
   } else {
     div_display_warning('signup_customer_warning','W026');
   }
  } else {
   div_display_warning('signup_customer_warning','W046');
  }
 } else  {
   div_display_warning('signup_customer_warning','W001');
 }
 
}
function signup_validateOTPCode(){
 var otpcode = document.getElementById("signup_customer_otpcode").value;
 console.log("otpcode: "+otpcode+" SIGNUP_USER_OTPCODE: "+SIGNUP_USER_OTPCODE);
 if(parseInt(SIGNUP_USER_OTPCODE)===parseInt(otpcode)){
  document.getElementById("signup_customer_otpcode").disabled=true;
  if(!$('#signup_customer_otpwarning').hasClass('hide-block')){ $("signup_customer_otpwarning").addClass('hide-block'); }
  if($('#signup_pwdform').hasClass('hide-block')){ $('#signup_pwdform').removeClass('hide-block'); }
 } else {
    div_display_warning('signup_customer_otpwarning','W044');
 }
}
function signup_newuser(){
 var surName = document.getElementById("signup_customer_surName").value;
 var name = document.getElementById("signup_customer_name").value;
 var mobileCode = '+91';
 var mobileNumber = document.getElementById("signup_customer_mobileNumber").value;
 var accpwd = document.getElementById("signup_customer_accpwd").value;
 var confrmpwd = document.getElementById("signup_customer_confirmpwd").value;
 if(accpwd.length>0){
  if(confrmpwd.length>0){
    if(accpwd===confrmpwd){
      if(!$('#signup_customer_pwdwarning').hasClass('hide-block')){ $("signup_customer_otpwarning").addClass('hide-block'); }
	  /* Register to File */
	  js_ajax('GET',PROJECT_URL+'backend/php/dac/controller.module.app.authentication.php',
	  { action:'REGISTER_AUTHENTICATION', mobile:mobileNumber, surName:surName, name: name, accpwd:accpwd },
	  function(response){
	   console.log(response);
	   window.location.href=PROJECT_URL+'customer/dashboard';
	  });
    } else {  div_display_warning('signup_customer_pwdwarning','W047'); }
  } else { div_display_warning('signup_customer_pwdwarning','W049'); }
 } else { div_display_warning('signup_customer_pwdwarning','W048'); }
}
</script> 
<div id="registerModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" onclick="javascript:closeRegister();">&times;</button>
        <h5 align="center" class="modal-title"><b>Signup / Register Authentication</b></h5>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
		  <div id="signup_customer_warning" class="form-group">
		  
		  </div>
		  <div class="form-group">
		    <label>SurName</label>
			<input id="signup_customer_surName" type="text" class="form-control" placeholder="Enter your SurName"/>
		  </div>
		  <div class="form-group">
		    <label>Name</label>
			<input id="signup_customer_name" type="text" class="form-control" placeholder="Enter your Name"/>
		  </div>
		  
		  <div align="right" class="form-group">
			<div class="checkbox">
			    <b>Register By</b>&nbsp;&nbsp;
				<input id="signup_customer_authReg" type="checkbox" data-toggle="toggle"
				 data-on="Email" data-off="Mobile" data-width="100px" 
				 data-onstyle="primary" data-offstyle="danger"/>
			</div>
		  </div>
		  
		  <div class="form-group">
		    <label>Mobile Number</label>
			<div class="input-group">
			  <span class="input-group-addon"><b>+91</b></span>
			  <input id="signup_customer_mobileNumber" type="text" class="form-control" placeholder="Enter your Mobile Number"/>
			  <span class="input-group-addon" onclick="javascript:signup_sendOTPCode();"><b>Send OTP Code</b></span>
			</div>
		  </div>
		  
		  <div id="signup_otpcode_validation" class="hide-block">
		  
		   <div class="form-group">
		    <div class="alert alert-success">
			 <b>An OTP Code is sent to your Mobile Number. Please Enter your OTP Code below to 
			 validate your Mobile Number.</b>
			</div>
		   </div>
		  
		   <div id="signup_customer_otpwarning" class="form-group">
		   
		   </div>
		  
		   <div class="form-group">
		    <label>OTP Code</label>
			<div class="input-group">
			  <input id="signup_customer_otpcode" type="number" class="form-control" placeholder="Enter your OTP Code"/>
			  <span class="input-group-addon" onclick="javascript:signup_validateOTPCode();"><b>Validate Code</b></span>
			</div>
		   </div>
		   
		  </div>
		  
		  <div id="signup_pwdform" class="hide-block">
		  <div id="signup_customer_pwdwarning" class="form-group">
		   
		   </div>
		  <div class="form-group">
		    <label>Password</label>
			<input id="signup_customer_accpwd" type="password" class="form-control" placeholder="Enter your Password"/>
		  </div>
		  
		  <div class="form-group">
		    <label>Confirm Password</label>
			<input id="signup_customer_confirmpwd" type="password" class="form-control" placeholder="Enter your Confirm Password"/>
		  </div>
		  
		  <div class="form-group">
		    <button class="btn btn-primary form-control" onclick="javascript:signup_newuser();"><b>Signup</b></button>
		  </div>
		  
		  </div>
		  
		  
		  
		</div>
      </div>
    </div>

  </div>
</div>
<!-- Register Modal ::: End -->
<!-- Login Modal ::: Start -->
<script type="text/javascript">
function loginForm(id){
 kvHeaderMenu(id);
 $('#loginModal').modal();
 $('.modal-open').css('padding-right','0px');
}
function closeLogin(){
 console.log('CURRENT_TAB_ID: '+CURRENT_TAB_ID);
 kvHeaderMenu(CURRENT_TAB_ID);
 $('#loginModal').modal('hide');
}
function display_div_otpcode(){
 if($('#div_otpcode').hasClass('hide-block')){ $('#div_otpcode').removeClass('hide-block'); }
 if(!$('#div_btn_otpcode').hasClass('hide-block')){ $('#div_btn_otpcode').addClass('hide-block'); }
}
function display_btn_otpcode(){
 if(!$('#div_otpcode').hasClass('hide-block')){ $('#div_otpcode').addClass('hide-block'); }
 if($('#div_btn_otpcode').hasClass('hide-block')){ $('#div_btn_otpcode').removeClass('hide-block'); }
}
var SYS_OTPCODE;
function sendOTPCode(){ 
 var mobile = document.getElementById("kvlogin_mobileNumber").value;
 if(mobile.length==10){
 SYS_OTPCODE = '12345';  
 js_ajax('GET',PROJECT_URL+'backend/php/dac/controller.module.app.authentication.php',
 { action: 'SIGNIN_COUNT_AUTHENTICATION', phoneNumber:mobile },function(response){ 
   console.log(response);
   response=JSON.parse(response);
   var total_data=parseInt(response.total_data); 
   if(total_data>0){ 
     document.getElementById("alert_div_loginModal").style.display='none';
	 document.getElementById("kvlogin_mobileNumber").disabled=true;
     display_div_otpcode(); 
   }
   else { div_display_warning('alert_div_loginModal','W038'); }
 });
 } else { div_display_warning('alert_div_loginModal','W043'); } 
 
}
function loginAuthentication(){
 var mobile = document.getElementById("kvlogin_mobileNumber").value;  
 var otpcode = document.getElementById("kvlogin_otpcode").value;
 if(otpcode===SYS_OTPCODE){
   var sessionJSON='{ "session_set" : [ { "key" : "AUTH_USER_LOGIN" , "value" : "YES" },';
       sessionJSON+='{ "key" : "ACCOUNT_TYPE" , "value" : "CUSTOMER" }],';
	   sessionJSON+='"session_get" : [ "AUTH_USER_LOGIN" ] }';
       js_session(sessionJSON,function(response){ 
	   window.location.href=PROJECT_URL+'customer/dashboard';
	 });
 } else { div_display_warning('alert_div_loginModal','W044'); }
}
function logoutAuthentication() { 
  kvHeaderMenu('kvHeaderMenu-logout'); 
  js_ajax("POST",PROJECT_URL+'backend/php/api/app.session.php',{ action:'DestroySession' },function(response){
    window.location.href=PROJECT_URL;
  });
}  // ACCOUNT_TYPE CUSTOMER ADMINISTRATOR
</script>
<div id="loginModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" onclick="javascript:closeLogin();">&times;</button>
        <h5 align="center" class="modal-title"><b>Login / SignIn Authentication</b></h5>
      </div>
      <div class="modal-body">
	    <!-- Start -->
        <div class="container-fluid">
		  <div class="row">
		    <div class="col-xs-12 col-md-2"></div>
		    <div class="col-xs-12 col-md-8">
			  <div id="alert_div_loginModal" class="form-group"></div>
			</div>
			<div class="col-xs-12 col-md-2"></div>
		  </div>
		  <div class="row">
		    <div class="col-xs-12 col-md-2"></div>
		    <div class="col-xs-12 col-md-8">
			  <div class="form-group">
			    <label>Mobile Number</label>
				<div class="input-group">
				<span class="input-group-addon"><b>+91</b></span>
				<input id="kvlogin_mobileNumber" type="text" class="form-control" placeholder="Enter your Mobile Number"/>
				</div>
			  </div>
			</div>
			<div class="col-xs-12 col-md-2"></div>
		  </div>
		  <div id="div_otpcode" class="row hide-block">
		    <div class="col-xs-12 col-md-2"></div>
			<div class="col-xs-12 col-md-8">
			  <div class="form-group">
			    <label>OTP Code</label>
				<div class="input-group">
				  <input type="text" id="kvlogin_otpcode" class="form-control" placeholder="Enter your OTP Code"/>
				  <span class="input-group-addon curpoint"><b>Resend OTPCode</b></span>
				</div>
			  </div>
			  <div class="form-group">
			    <button class="btn btn-primary form-control" onclick="javascript:loginAuthentication();"><b>login</b></button>
			  </div>
			</div>
			<div class="col-xs-12 col-md-2"></div>
		  </div>
		  <div id="div_btn_otpcode" class="row">
		    <div class="col-xs-12 col-md-2"></div>
			<div class="col-xs-12 col-md-8">
			  <div class="form-group">
			    <button class="btn btn-primary form-control" onclick="javascript:sendOTPCode();"><b>Send OTP Code</b></button>
			  </div>
			</div>
			<div class="col-xs-12 col-md-2"></div>
		  </div>
		  </div>
		</div>
		<!-- End -->
      </div>
   </div>
</div>
<!-- Login Modal ::: End -->
