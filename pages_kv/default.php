<?php 
session_start(); 
include_once 'templates/api.php';
if(!isset($_SESSION["ACCOUNT_TYPE"])){ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>KalyanaVeena</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>/font-awesome/css/font-awesome.min.css">
  <link href="<?php echo $PROJECT_URL; ?>/bootstrap-toggle/css/bootstrap-toggle.min.css" rel="stylesheet">
  <script src="<?php echo $PROJECT_URL; ?>/bootstrap-toggle/js/bootstrap-toggle.min.js"></script>
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>/vendor/bootstrap-advanced/css/bootstrap-advanced.css">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>/styles/api/core-skeleton.css">
  <script src="<?php echo $PROJECT_URL; ?>/js/api/core-skeleton.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>/vendor/bootstrap-advanced/js/bootstrap-advanced.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
    kvHeaderMenu('kvHeaderMenu-Home');
  });
  </script>
<style>
@media only screen and (max-width:768px ) {
#kvShortDesc { display:none; }
}
</style>
</head>
<body>
<?php include_once 'templates/api_header.php'; ?>

<div align="center" style="width:100%;background-color:#6c047d;color:#fff;">
  <div style="font-size:16px;padding:15px;letter-spacing:1px;line-height:26px;">
    <b>Welcome to the World's No.1 :</b> Highly Secured, most trusted and Successful Matrimonial Search Engine Platform
  </div>
</div>
<div class="container-fluid pad0">
  <div class="row">
	<div class="col-sm-12" style="width:100%;height:600px;background-image: url('images/martimony-wallpaper.jpg');background-position:center;">
	   <div class="col-sm-1"></div>
	   <div class="col-sm-6">
		  <!--div id="kvShortDesc" class="list-group" style="margin-top:25%;opacity:0.9;">
			<div class="list-group-item pad0">
				<div align="center" class="container-fluid">
				  <div class="col-xs-12">
				  <h4 style="line-height:28px;">
				    <span style="font-family:kvfont001;font-size:30px;">KalyanaVeena.com</span> 
					<span style="font-family:kvfont002;font-size:22px;">is <span style="color:#f44336;">"an Open Matrimony Platform Where 
					Brahmin Brides and Bridegrooms Profiles are open to each Other."</span></span><h4>
				  </div>
				</div>
				<div class="container-fluid">
				  <div align="center" class="col-xs-12">
					<span style="line-height:34px;font-family:kvfont002;font-size:20px;">
					It's the First Matrimony Platform where When a User uploads a profile, Astrology is calculated 
					to the profile with other profiles and initimated to the User.</span>
				  </div>
				  <div align="right" class="col-xs-12 mbot15p">
					<button class="btn btn-success"><b>SEE HOW IT WORKS?</b></button>
				  </div>
				</div>
			</div>
		  </div-->
	   </div>
	   <div class="col-sm-1"></div>
	   <div class="col-sm-4" style="margin-top:25px;">
			<div class="list-group">
				<div class="list-group-item pad0" style="color:#000;">
					<div class="container-fluid">
						<div align="left" class="col-xs-12 mtop10p" style="border-bottom:1px solid #ccc;padding:5px;">
						  <h4>You are seeking for</h4>
						</div>
						<div align="center" class="col-xs-12 mtop10p pad0">
						   <b>PROFILE</b>
						</div>
						<div class="col-xs-12 mtop10p pad0">
						   <div class="col-xs-5 mtop5p"><b>Gender</b></div>
						   <div class="col-xs-7">
						      <select class="form-control">
								<option value="">You are looking for</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							  </select>
						   </div>
						</div>
						<div class="col-xs-12 mtop10p pad0">
						   <div class="col-xs-5 mtop5p"><b>Age</b></div>
						   <div class="col-xs-7">
						      <select class="form-control">
								<option value="">You are looking for</option>
								<option value="21-25">21-25</option>
								<option value="26-30">26-30</option>
								<option value="31-35">21-25</option>
								<option value="36-40">36-40</option>
								<option value="41-45">41-45</option>
							  </select>
						   </div>
						</div>
						<div class="col-xs-12 mtop10p pad0">
						   <div class="col-xs-5 mtop5p"><b>Martial Status</b></div>
						   <div class="col-xs-7">
						      <select class="form-control">
								<option value="">You are looking for</option>
								<option value="UnMarried">UnMarried</option>
								<option value="Divorced">Divorced</option>
								<option value="Widow">Widow</option>
							  </select>
						   </div>
						</div>
						<div align="center" class="col-xs-12 mtop10p pad0">
						   <b>CURRENT RESIDENCE</b>
						</div>
						<div class="col-xs-12 mtop10p pad0">
						   <div class="col-xs-5 mtop5p"><b>Country</b></div>
						   <div class="col-xs-7">
						      <select class="form-control">
								<option value="">You are looking for</option>
								<option value="India">India</option>
							  </select>
						   </div>
						</div>
						<div class="col-xs-12 mtop10p pad0">
						   <div class="col-xs-5 mtop5p"><b>State</b></div>
						   <div class="col-xs-7">
						      <select class="form-control">
								<option value="">You are looking for</option>
								<option value="Telangana">Telangana</option>
							  </select>
						   </div>
						</div>
						<div align="center" class="col-xs-12 mtop10p pad0">
						   <b>LIVELIHOOD</b>
						</div>
						<div class="col-xs-12 mtop10p pad0">
						   <div class="col-xs-5 mtop5p"><b>Profession</b></div>
						   <div class="col-xs-7">
						      <select class="form-control">
								<option value="">You are looking for</option>
								<option value="Accountant">Accountant</option>
								<option value="Teacher">Teacher</option>
								<option value="Physician">Physician</option>
								<option value="Engineer">Engineer</option>
								<option value="Laborer">Laborer</option>
								<option value="Technician">Technician</option>
								<option value="Lawyer">Lawyer</option>
								<option value="Veterinary Physician">Veterinary Physician</option>
								<option value="Psychologist">Psychologist</option>
								<option value="Pharmacist">Pharmacist</option>
								<option value="Dietitian">Dietitian</option>
								<option value="Midwife">Midwife</option>
								<option value="Surveyor">Surveyor</option>
								<option value="Mechanic">Mechanic</option>
								<option value="Electrician">Electrician</option>
								<option value="Architect">Architect</option>
								<option value="Software Engineer">Software Engineer</option>
								<option value="Butcher">Butcher</option>
								<option value="Surgeon">Surgeon</option>
								<option value="Radiographer">Radiographer</option>
								<option value="Health Professional">Health Professional</option>
								<option value="Actor">Actor</option>
								<option value="Consultant">Consultant</option>
								<option value="Dentist">Dentist</option>
								<option value="Designer">Designer</option>
								<option value="Judge">Judge</option>
								<option value="Secretary">Secretary</option>
								<option value="Police">Police</option>
							  </select>
						   </div>
						</div>
						<div class="col-xs-12 mtop10p pad0">
						   <div class="col-xs-5 mtop5p"><b>Occupation Type</b></div>
						   <div class="col-xs-7">
						      <select class="form-control">
								<option value="">You are looking for</option>
								<option value="Private Company">Private Company</option>
								<option value="Government / Public Sector">Government / Public Sector</option>
								<option value="Defence / Civil Services">Defence / Civil Services</option>
								<option value="Business / Self Employeed">Business / Self Employeed</option>
							  </select>
						   </div>
						</div>
						<div class="col-xs-12 mtop10p pad0">
						  <div class="col-xs-12">
						   <button class="btn btn-success mbot15p form-control"><b>Find Matches</b></button>
						  </div>
						</div>
						<div align="center" class="col-xs-12">
						
						</div>
					</div>
				</div>
			</div>
	   </div>
	</div>
  </div>
  <div class="row">
   <div class="col-sm-7" style="padding-left:15px;">
	`<div align="center" style="padding:6px;"><h3><b>This Trusted Platform is Simple, Fast and Secure</b></h3></div>
	 <div><h4>World's First Highly Secure Matrimony Platform</h4></div>
	 <div></div>
   </div><!--/.col-sm-7 -->
  </div><!--/.row -->
  <div class="row"  style="background-color:#ff9800;">
	<div class="col-sm-7">
	  <div class="col-sm-12 mtop15p mbot15p">
	    <div align="center"><h4 style="font-family:kvfont002;font-size:22px;"><b>Your Profiles in KalyanaVeena.com are more Safer than any Other Matrimony Platform.</b></h4></div>
		<div align="center"><h4 style="font-family:kvfont002;font-size:22px;"><b>We keep your Data safe and Secure.</b></h4></div>
	  </div>
	</div>
	<div class="col-sm-5">
	  <div class="col-sm-1"></div>
	  <div class="col-sm-10 mbot25p" style="margin-top:25px;">
	    <div align="center">
		  <h4 style="font-family:kvfont002;font-size:22px;"><b>Find your Known by Profile Id</b></h4>
		</div>
		<div class="mbot15p">
		<div class = "input-group">
         <input type="text" class="form-control" placeholder="Enter your Profile Id" style="border:2px solid #000;"/>
		 <span class="input-group-addon" style="background-color:#fff;border-top:2px solid #000;border-bottom:2px solid #000;border-right:2px solid #000;color:#000;"><b>Search Profile</b></span>
		</div>
		</div>
	  </div>
	  <div class="col-sm-1"></div>
	</div>
  </div>
</div>

<?php include_once 'templates/api_bottom.php'; ?>
</body>
</html>
<?php } else {  
       if($_SESSION["ACCOUNT_TYPE"]=='CUSTOMER'){  header("Location: ".$_SESSION["PROJECT_URL"].'customer/dashboard'); }
  else if($_SESSION["ACCOUNT_TYPE"]=='ADMINISTRATOR'){ header("Location: ".$_SESSION["PROJECT_URL"].'admin/dashboard');  }
}
?>