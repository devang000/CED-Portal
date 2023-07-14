<!DOCTYPE html>
<html>
<head>
	<title>CED-Addmission</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	
	<!-- DESCRIPTION -->
	<meta name="description" content="EduChamp : Education HTML Template" />
	
	<!-- OG -->
	<meta property="og:title" content="EduChamp : Education HTML Template" />
	<meta property="og:description" content="EduChamp : Education HTML Template" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />
	
	<!-- PAGE TITLE HERE ============================================= -->
	<title>Council of Enterpreniul Devlopmet</title>
	
	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
	
	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/assets.css">
	
	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/typography.css">
	
	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/shortcodes/shortcodes.css">
	
	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link class="skin" rel="stylesheet" type="text/css" href="assets/css/color/color-1.css">

<style>
	input[type=radio]{
		margin:0px 5px 0px 20px;
	}
	input[type=radio]{
		margin-top: 45px;
	}
	input[type=date]{
		margin-top: 30px;
	}
</style>

<script>
	function number(){
		var mn=document.getElementById("mn").value;
		var num=/^\d{10}$/;
		if(mn.match(num)){
			return true;
		}else {
			alert("Mobile Number is not Valid, It must contain 10 digits...");
			return false;
		}
	}

	function wnumber(){
		var mn=document.getElementById("wmn").value;
		var num=/^\d{10}$/;
		if(mn.match(num)){
			return true;
		}else {
			alert("Mobile Number is not Valid, It must contain 10 digits...");
			return false;
		}
	}

	function fnumber(){
		var mn=document.getElementById("fmn").value;
		var num=/^\d{10}$/;
		if(mn.match(num)){
			return true;
		}else {
			alert("Mobile Number is not Valid, It must contain 10 digits...");
			return false;
		}
	}

	function pincode(){
		var mn=document.getElementById("pin").value;
		var num=/^\d{6}$/;
		if(mn.match(num)){
			return true;
		}else {
			alert("Pincode is not valid, It must contain only 6 digits...");
			return false;
		}
	}
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#p").hide();
  $("#show").click(function(){
    $("#p").show();
   $("#hide").click(function(){
    $("#p").hide();
   });
  });
});
</script>

</head>
<body>
<body id="bg">
<div class="page-wraper">
	<div id="loading-icon-bx"></div>
	<div class="account-form">
		<div class="account-head" style="background-image:url(assets/images/gallery/pic2.jpg);">
			<a href="index.html"><img src="assets/images/logo_ced.png" width="150px" alt=""></a>
		</div>
		<div class="account-form-inner">
			<div class="account-container">
				<div class="heading-bx left">
					<h2 class="title-head">Addmission <span>Form</span></h2>
					<p>Login Your Account <a href="login.html">Click here</a></p>
				</div>	
				<form class="contact-bx">
					<div class="row placeani">
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Course Name</label>
									<input name="CourseName" type="text" required="" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Full Name</label>
									<input name="FullName" type="text" required="" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Present Address</label>
									<textarea rows="2" cols="40" name="PresentAddress" class="form-control"></textarea>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Taluka(Present Add.)</label>
									<input name="TalukaPresent" type="text" required="" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>District(Present Add.)</label>
									<input name="DistrictPresent" type="text" required="" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Pincode(Present Add.)</label>
									<input name="PincodePresent" type="text" required="" id="pin" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group"> 
									<label>Permanent Address</label>
									<textarea rows="2" cols="40" name="PermanentAddress" class="form-control"></textarea>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Taluka(Permanent Add.)</label>
									<input name="TalukaPermanent" type="text" required="" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>District(Permanent Add.)</label>
									<input name="DistrictPermanent" type="text" required="" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Pincode(Permanent Add.)</label>
									<input name="PincodePermanent" type="text" required="" id="pin" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Mobile No.</label>
									<input name="MobileNo" type="text" required="" id="mn" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Whatsapp No</label>
									<input name="WhatsappNo" type="text" required="" id="wmn" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Father No</label>
									<input name="FatherNo" type="text" required="" id="fmn" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Emergency No</label>
									<input name="EmergencyNo" type="text" required="" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Birth Date</label>
									<input name="BirthDate" type="date" required="" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Age</label>
									<input name="Age" type="text" required="" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group"> 
									<label>Education Details</label>
									<textarea rows="2" cols="40" name="EducationDetails" class="form-control"></textarea>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>College Name</label>
									<input name="CollegeName" type="text" required="" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group"> 
									<label>College Address</label>
									<textarea rows="2" cols="40" name="CollegeAddress" class="form-control"></textarea>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Allergy or Disease</label>
									<input name="r1" value="Yes" type="radio" required="" id="show">Yes
									<input name="r1" value="No" type="radio" required="" id="hide">No
								</div>
							</div>
						</div>
						<div class="col-lg-12" class="ifyes">
							<div class="form-group">
								<div class="input-group">
									<!--<label>ifyes</label>-->
									<input name="ifyes" type="text" required="" id="p" placeholder="if yes" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group"> 
									<label>Reference</label>
									<textarea rows="2" cols="40" class="form-control" name="Reference"></textarea>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Currernt Date</label>
									<input name="CurrentDate" type="date" required="" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Place</label>
									<input type="text" name="Place" required="" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-lg-12 m-b30">
							<button name="submit" type="submit" onclick="number(); wnumber(); fnumber(); pincode();" value="Submit" class="btn button-md">Confirm</button>
						</div>
						<div class="heading-bx left">
							<h2 class="title-head">TERMS AND <span>CONDITION</span></h2>
							<p><i class="fa fa-hand-o-right"></i> EVERY STUDENT ATTENDS EACH LECTURE COMPULSARY.</p>
							<p><i class="fa fa-hand-o-right"></i> ONLY 1 DAY DEMO LECTURE IS ALLOOWED.</p>
							<p><i class="fa fa-hand-o-right"></i> ONCE FEES PAY IS NOT REFENDABLE.</p>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- External JavaScripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/vendors/bootstrap/js/popper.min.js"></script>
<script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
<script src="assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
<script src="assets/vendors/magnific-popup/magnific-popup.js"></script>
<script src="assets/vendors/counter/waypoints-min.js"></script>
<script src="assets/vendors/counter/counterup.min.js"></script>
<script src="assets/vendors/imagesloaded/imagesloaded.js"></script>
<script src="assets/vendors/masonry/masonry.js"></script>
<script src="assets/vendors/masonry/filter.js"></script>
<script src="assets/vendors/owl-carousel/owl.carousel.js"></script>
<script src="assets/js/functions.js"></script>
<script src="assets/js/contact.js"></script>
<!--<script src='assets/vendors/switcher/switcher.js'></script>-->
</body>
</html>