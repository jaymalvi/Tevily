
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registration page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,700;1,500&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@700&display=swap" rel="stylesheet"> -->
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- COMMENTED <link rel="stylesheet" href="../assets/css/docs.theme.min.css"> -->
  
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	
	<script src="js/jquery.min.js"></script>
	<script src="js/owl.carousel.js"></script>
	<link href="css/style.css" rel="stylesheet">
	<link href="css/media.css" rel="stylesheet">

	
	<!-- css files -->
	<script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
	<!-- <link rel="stylesheet" href="css/bootstrap.css">  -->
	<link rel="stylesheet" href="css/styleRegistration.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<!-- //web-fonts -->
	
</head>

<body>

<!--Header-->

	<?php require 'custom-header.php';?>

	<div class="container-fluid">
		<div class="page_header_top">
		  <div class="page_header_img">
			<div class="container">
			  <div class="destination_content_only">
				<!-- <h3>Destination</h3> -->
				<div class="progres">
				  <div class="progress-container"style="font-weight:bold;font-size:35px">
					<label>	R</label>
					<label>	E</label>
					<label>	G</label>
					<label>	I</label>
					<label>	S</label>
					<label>	T</label>
					<label>	R</label>
					<label>	A</label>
					<label>	T</label>
					<label>	I</label>
					<label>	O</label>
					<label>	N</label>
				   
				  </div>
			   </div>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	  <div class="container-fluid">
		<div class="container">
		  <div class="home_destination my-4">
			<p><a href="index.html" class="text-reset">Home</a> - <span style="color:#e8604c"><a href="destination page.html" class="text-reset">Registration</a></span></p>
		  </div>
		</div>
		<hr/>
	  </div>

<!--Header-->




<!-- Registration -->
<section class="w3ls-section contact py-5">
	<div class="container py-sm-3">
		<!-- <div class="w3ls-title">
			<h2 class="heading text-center mb-sm-5 mb-4">Registration for camp</h2>
	</div> -->
	<section id="personal">
	<form action="./addUser.php" method="POST" id="form1">
			<h4 class="text-center"><b>Personal Details</b></h4>
			<div class="row contact_wthreerow agileits-w3layouts">
				<div class="col-lg-6  w3l_contact_form">
						<select  type="dropdown" name="camp_no" placeholder="Camp Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Camp Name';}"
						required="">
						<option value="volvo">Select Camp Name</option>
						<option value="volvo">Volvo</option>
						<option value="saab">Saab</option>
						<option value="fiat">Fiat</option>
						<option value="audi">Audi</option>
					</select>
					<input class="mt-4" type="text" name="first_name" placeholder="First Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'First Name';}"
												required="">
					<textarea rows="1" name="address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Address';}" required="">Address...</textarea>
					
					<input  type="text" name="phone1" placeholder="Phone Number 1" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone Number 1';}"
							required="">
					<input class="mt-4" type="date"   name="birthdate"  placeholder="Date Of Birth" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Date Of Birth';}"
						required="">
					<select class="mt-4" type="dropdown" name="gender" placeholder="Gender" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Gender';}"
						required="">
						<option value="volvo">Select Gender</option>
						<option value="male">Male</option>
						<option value="female">Female</option>
					</select>

					<input class="mt-4" type="text" name="weight" placeholder="Weight" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Weight';}"
						required="">	
				</div>
				<div class="col-lg-6  w3l_contact_form">
						<select type="dropdown" name="camp_date" placeholder="Camp Date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Camp Date';}"
						required="">
						<option value="volvo">Select Camp Date</option>
						<option value="volvo">Volvo</option>
						<option value="saab">Saab</option>
						<option value="fiat">Fiat</option>
						<option value="audi">Audi</option>
					</select>
					<input class="mt-4" type="text" name="last_name" placeholder="Last Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Last Name';}"
												required="">
					<input class="mt-4" type="text" name="email" placeholder="Email Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}"
												required="">
					<input class="mt-4" type="text" name="phone2" placeholder="Phone Number 2" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone Number 2';}"
												required="">
					<input class="mt-4" type="text" name="age" placeholder="Age" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Age';}"
												required="">
					<input class="mt-4" type="text" name="blood_group" placeholder="Blood Group" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Blood Group';}"
						required="">
					<input class="mt-4" type="text" name="organization" placeholder="College/Organization" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'College/Organization';}"
						required="">			
				</div>
		</div>

		<h4 class="text-center mt-4"><b>Parents Details</b></h4>
			<div  class="row contact_wthreerow agileits-w3layouts">
				<div class="col-lg-6  w3l_contact_form">
					<input  type="text" name="parent_first_name" placeholder="First Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'First Name';}"
												required="">
					<input class="mt-4" type="text" name="parent_phone" placeholder="Phone Number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone Number';}"
												required="">
																																		
				</div>
				<div class="col-lg-6  w3l_contact_form">
					<input  type="text" name="parent_last_name" placeholder="Last Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Last Name';}"
						required="">	
					<input class="mt-4" type="text" name="parent_email" placeholder="Email Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}"
						required="">	
					
				</div>
		</div>

		<h4 class="text-center mt-4"><b>Other Details</b></h4>
			<div  class="row contact_wthreerow agileits-w3layouts">
				<div class="col-lg-6  w3l_contact_form">
					<span>Have you ever participated in such camps? (where if yes)</span>
					<input type="text" name="other_camp_detail" placeholder="First Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'First Name';}"
							required="">															
					<div class="file-upload mt-4">
						<div class="file-select">
							<div class="file-select-button" id="fileName">Upload Profile Photo</div>
							<div class="file-select-name" id="noFile">No file chosen...</div> 
							<input type="file" name="profile_img" id="chooseFile">
						</div>
					</div>																															
				</div>
				<div class="col-lg-6  w3l_contact_form">
					<span>Are you suffering from any disease/Phobia?</span>
					<input type="text" name="disease_phobia" placeholder="Last Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Last Name';}"
						required="">
					<div class="file-upload mt-4">
						<div class="file-select">
							<div class="file-select-button" id="fileName">Upload Identity Card</div>
							<div class="file-select-name" id="noFile">No file chosen...</div> 
							<input type="file" name="identity_img" id="chooseFile">
						</div>
					</div>	
				</div>
		</div>
		<div class="text-center">
			<button type="submit" style="padding: 10px;" class="text-center mt-4" form="form1" >Submit</button>&nbsp;&nbsp;
			<button type="submit" style="padding: 10px;" class="text-center mt-4">Cancel</button>
		</div>


</form>
</section>
		</div>
	</div>
</section>


<!-- //contact -->



		
<!-- footer -->
<footer class="footer py-5">
		<div class="container py-sm-4">
			<div class="row">
				<div class="col-lg-4 col-md-6 footer-top">
					<h3 class="mb-4 pb-3 w3f_title">Subscribe Us</h3>
					<p>By subscribing to our mailing list you will always get latest news, offers and updates from us.</p>
					<form action="#" method="post">
						<input type="email" name="Email" placeholder="Enter your email..." required="">
						<button class="btn1"><i class="fas fa-arrow-right" aria-hidden="true"></i></button>
						<div class="clearfix"> </div>
					</form>
	
				</div>
				<div class="col-lg-2  col-md-6 footv3-left mt-md-0 mt-5">
					<h3 class="mb-4 pb-3 w3f_title">Navigation</h3>
					<ul class="list-agileits">
						<li>
							<a href="index.html">
								Home
							</a>
						</li>
						<li class="my-2">
							<a href="about.html">
								About Us
							</a>
						</li>
						<li class="my-2">
							<a href="camps.html">
								Camps/Events
							</a>
						</li>
						<li class="mb-2">
							<a href="photo.html">
								Gallery
							</a>
						</li>
						<li class="mb-2">
								<a href="registration.html">
									Registration
								</a>
							</li>
							<li class="mb-2">
									<a href="broucher.html">
										Broucher
									</a>
								</li>
						<li>
							<a href="contact.html">
								Contact Us
							</a>
						</li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-6 mt-lg-0 mt-5">
					<h3 class="mb-4 pb-3 w3f_title">Contact Us</h3>
					<div class="fv3-contact">
						<span class="fa fa-envelope-open mr-2"></span>
						<p>
							<a href="mailto:info@trekon.i">info@trekon.in</a>
						</p>
					</div>
					<div class="fv3-contact my-3">
						<span class="fa fa-phone-volume mr-2"></span>
						<p>+(91) 886 651 4668</p>
					</div>
					<div class="fv3-contact">
						<span class="fa fa-home mr-2"></span>
						<p>04, 1st Floor, Goyal Tower,   
							<br>Opp. Gulbai Tekra Police Choki,
							<br>Near Panjarapol Char Rasta,
							<br>University Road, Ahmedabad, 380015.</p>
					</div>
				</div>
	
				<div class="col-lg-3 col-md-6 footerv2-w3ls mt-lg-0 mt-5">
					<h3 class="mb-4 w3f_title pb-3">FOLLOW US ON</h3>
					<li><a href="https://www.facebook.com/TrekOnTrek/" ><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="https://twitter.com/TrekOn_" ><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="https://plus.google.com/u/1/103865060767841999000"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="https://www.instagram.com/trekon_trek/"><i class="fa fa-instagram"></i></a></li>
					<li><a href="https://www.youtube.com/channel/UCDRfGLMDD6SnoaRS8f3bMqw"><i class="fa fa-youtube-play"></i></a></li>															
				</div>
			</div>
		</div>
		<!-- //footer bottom -->
	</footer>
	<!-- //footer -->



<!-- copyright -->
<section class="copyright py-4 text-center">
	<div class="container">
		<p>© 2018 In Travel. All Rights Reserved | Design by <a href="" target="=_blank"> Paras Maheta </a></p>
	</div>
</section>
<!-- //copyright -->

<!-- js-scripts -->		

	<!-- js -->
	<script type="text/javascript" src="js/jquery.min.js"></script>

	<!-- COMMENTED <script type="text/javascript" src="js/bootstrap.js"></script> -->
	<!-- //js -->
	
	<!-- start-smoth-scrolling -->
	<!-- COMMENTED <script src="js/SmoothScroll.min.js"></script> -->
	<!-- COMMENTED <script type="text/javascript" src="js/move-top.js"></script> -->
	<!-- COMMENTED <script type="text/javascript" src="js/easing.js"></script> -->
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			// COMMENTED $().UItoTop({ easingType: 'easeOutQuart' });
								
			});

		$('#chooseFile').bind('change', function () {
  			var filename = $("#chooseFile").val();
  			if (/^\s*$/.test(filename)) {
				$(".file-upload").removeClass('active');
				$("#noFile").text("No file chosen..."); 
			}
			else {
				$(".file-upload").addClass('active');
				$("#noFile").text(filename.replace("C:\\fakepath\\", "")); 
			}
		});

	</script>

	<!-- //here ends scrolling icon -->
	<!-- start-smoth-scrolling -->
	
<!-- //js-scripts -->

</body>
</html>