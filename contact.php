<?php
include 'dbconnect.php';
include 'link.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>HotPot City</title>
	<link rel="icon" type="image/ico" href="images/logo.jpg">

	<!-- Style -->
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
	<!-- Style -->

	<!-- icon link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- icon link -->

	<!-- NAV bar -->
	<link rel="stylesheet" type="text/css" href="CSS/navbar.css">
	<!-- NAV bar -->

	<!-- quick link -->
	<link rel="stylesheet" type="text/css" href="CSS/quicklink.css">
	<!-- quick link -->

</head>
<body>
	<!-- start of header -->
	<div class="container-fluid">
		<!-- Header -->
		<div class="row" style="margin-top: 20px;">
			<div class="col-md-1"></div>
			<div class="col-md-5">
				<a href="index.html">
					<img src="images/logo.jpg" width="80px" height="80px" class="logo">
				</a>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="www.faccebook.com">
					<i class="fa fa-facebook social" style="font-size: 30px; padding-top: 25px; padding-right: 10px;"></i>
				</a>
				<a href="www.twitter.com">
					<i class="fa fa-twitter social" style="font-size: 30px; padding-top: 25px; padding-right: 10px;"></i>
				</a>
				<a href="www.instagram.com">
					<i class="fa fa-instagram social" style="font-size: 30px; padding-top: 25px; padding-right: 10px;"></i>
				</a>
				<a href="www.google.com">
					<i class="fa fa-google social" style="font-size: 30px; padding-top: 25px; padding-right: 10px;"></i>
				</a>
				<a href="www.youtube.com">
					<i class="fa fa-youtube social" style="font-size: 30px; padding-top: 25px; padding-right: 10px;"></i>
				</a>
			</div>
			<div class="col-md-1"></div>
			<div class="col-md-4">
				<div class="input-group" style="padding-top: 25px;">
                	<input class="form-control border-info py-2" type="search" placeholder="Search">
                	<div class="input-group-append">
                    	<button class="btn btn-outline-info" type="button">
                        	<i class="fa fa-search"></i>
                    	</button>
                	</div>
            	</div>
			</div>
			<div class="col-md-1"></div>
		</div>
		<!-- Header -->

		<!-- NAV -->
		<div class="row">
			<div class="col-md-12">
				<nav>
        			<ul>
            			<li><a href="index.php">Home</a></li>
            			<li><a href="service.php">Service</a></li>
            			<li><a href="">Categories</a>
            				<ul>
                				<li><a href="clothes.php">Clothes</a></li>
                				<li><a href="shoes.php">Shoes</a></li>
                				<li><a href="accessories.php">Accessories</a></li>
                				<li><a href="electronic.php">Electronic</a></li>
                				<li><a href="others.php">Others</a></li>
            				</ul>        
            			</li>
						<li><a href="about.php">About Us</a></li>
						<li><a href="contact.php">Contact Us</a></li>
						<li><a href="faq.php">FAQ</a></li>
						<li>
							<a href="cart.php"><img src="images/cart.png" alt="" width="30px" height="30px"></a>
						</li>
       				 </ul>
    			</nav>
			</div>
		</div>
		<!-- NAV -->

	</div>
	<!-- end of header -->


	<!-- start of body -->
	<div class="container-fluid" style="padding-bottom: 20px;">
		<div class="row" style="padding-top: 20px;">
			<div class="col-md-1"></div>
			<div class="col-md-4">
				<div class="row" style="padding-top: 50px;">
					<div class="col-md-1"></div>
					<div class="col-md-11">
						<h2>
							Our Office 
						</h2>
						<br>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<p class="text">
							&#149; No.7, Pyi Yeik Thar Road, Kamayut Township, Yangon
						</p>
					</div>
				</div>
				<div class="row" style="padding-top: 30px;">
					<div class="col-md-1"></div>
					<div class="col-md-11">
						<h2>
							Our Contact
						</h2>
						<br>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<p class="text">
							&#149; 09799586616
							<br>
							&#149; 09782022088
							<br>
							&#149; 09690406926
						</p>
					</div>
				</div>
				<div class="row" style="padding-top: 30px;">
					<div class="col-md-1"></div>
					<div class="col-md-11">
						<h2>
							Our Mail 
						</h2>
						<br>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<p class="text">
							&#149; www.nextincompany@gmail.com
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div style="width: 100%"><iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&height=600&hl=en&q=info%20myanmar%20university+(Your%20Business%20Name)&ie=UTF8&t=&z=14&iwloc=B&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.mapsdirections.info/en/journey-planner.htm">Route Finder</a></iframe></div><br />
			</div>
			<div class="col-md-1"></div>
		</div>
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6" style="border: 1px solid gray;">
				<div class="row">
					<div class="col-md-12">
						<center>
							<h3>
								Please Feedback Us
							</h3>
						</center>
					</div>
				</div>
				<form name="myform" action="" onsubmit="return validate()" method="post">
				<div class="row" style="padding-top: 20px;">
					<div class="col-md-2"></div>
					<div class="col-md-3">
						<font class="text">
							Name:
						</font>
					</div>
					<div class="col-md-5">
						<div class="form-group">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" class="form-control text" id="name">
									</div>
								</div>
							</div>
							<div class="row">
								<span id="nameerr" style="color:red;"></span>
							</div>
						</div>
					</div>
					<div class="col-md-2"></div>
				</div>
				<div class="row" style="padding-top: 20px;">
					<div class="col-md-2"></div>
					<div class="col-md-3">
						<font class="text">
							Email:
						</font>
					</div>
					<div class="col-md-5">
						<div class="form-group">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<input type="type" class="form-control text" id="email">
									</div>
								</div>
							</div>
							<div class="row">
								<span id="emailerr" style="color:red;"></span>
							</div>
						</div>
					</div>
					<div class="col-md-2"></div>
				</div>
				<div class="row" style="padding-top: 20px;">
					<div class="col-md-2"></div>
					<div class="col-md-3">
						<font class="text">
							Phone:
						</font>
					</div>
					<div class="col-md-5">
						<div class="form-group">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" class="form-control text" id="phone">
									</div>
								</div>
							</div>
							<div class="row">
								<span id="phoneerr" style="color:red;"></span>
							</div>
						</div>
					</div>
					<div class="col-md-2"></div>
				</div>
				<div class="row" style="padding-top: 20px;">
					<div class="col-md-2"></div>
					<div class="col-md-3">
						<font class="text">
							Comments:
						</font>
					</div>
					<div class="col-md-5">
						<textarea class="form-control text" rows="5" id="comment" placeholder="Please give your feedback"></textarea>
					</div>
					<div class="col-md-2"></div>
				</div>
				<div class="row" style="padding-bottom: 20px;">
					<div class="col-md-8"></div>
					<div class="col-md-2" style="padding-top: 20px;">
						<button class="btn btn-secondary text">Send</button>
					</div>
					<div class="col-md-2" style="padding-top: 20px;">
						<button class="btn btn-secondary text" type="reset" value="reset">Cancel</button>
					</div>
				</div>
				</form>
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>
	<!-- end of body -->


	<!-- start of footer -->
	<div class="container-fluid" style="background-color: skyblue;">
		<div class="row" style="padding-top: 30px;">
			<div class="col-md-2"></div>
			<div class="col-md-1">
				<a href="index.html">
					<img src="images/logo.jpg" width="80px" height="80px" class="logo">
				</a>
			</div>
			<div class="col-md-5"></div>
			<div class="col-md-2">
				<a href="www.faccebook.com">
					<i class="fa fa-facebook social" style="font-size: 30px; padding-top: 25px; padding-right: 10px;"></i>
				</a>
				<a href="www.twitter.com">
					<i class="fa fa-twitter social" style="font-size: 30px; padding-top: 25px; padding-right: 10px;"></i>
				</a>
				<a href="www.instagram.com">
					<i class="fa fa-instagram social" style="font-size: 30px; padding-top: 25px; padding-right: 10px;"></i>
				</a>
				<a href="www.google.com">
					<i class="fa fa-google social" style="font-size: 30px; padding-top: 25px; padding-right: 10px;"></i>
				</a>
				<a href="www.youtube.com">
					<i class="fa fa-youtube social" style="font-size: 30px; padding-top: 25px; padding-right: 10px;"></i>
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-3">
				<div class="bucket">
					<ul class="link-list">
						<li class="link-list__item">
							<a href="index.php"><font class="text">Home</font></a>
						</li>
						<li class="link-list__item">
							<a href="service.php"><font class="text">Service</font></a>
						</li>
						<li class="link-list__item">
							<a href="about.php"><font class="text">About Us</font></a>
						</li>
						<li class="link-list__item">
							<a href="contact.php"><font class="text">Contact Us</font></a>
						</li>
						<li class="link-list__item">
							<a href="faq.php"><font class="text">FAQ</font></a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-2" style="padding-top: 30px;">
				<font class="text">Your Email Address:</font>
				<br><br><br>
				<font class="text">Your Feedback:</font>
			</div>
			<div class="col-md-3" style="padding-top: 30px;">
				<div class="form-group">
						  <input type="email" class="form-control text" id="usr" placeholder="Email">
				</div>
				<br>
				<div class="form-group">
					<textarea class="form-control text" rows="5" id="comment" placeholder="Give feedback to us"></textarea>
				</div> 
				<button class="btn btn-primary">Send</button>
			</div>
			<div class="col-md-3">
				<center>
					<div class="bucket">
					<ul class="link-list">
						<li class="link-list__item">
							<a href="login.php"><font class="text" style="font-size: 20px;">Login & Register</font></a>
						</li>
						<li class="link-list__item">
							<a href="term.php"><font class="text" style="font-size: 20px;">Term & Condition</font></a>
						</li>
					</ul>
				</div>
				</center>
			</div>
		</div>
		<div class="row" style="padding-top: 20px;">
			<div class="col-md-3"></div>
			<div class="col-md-2">
				<font class="text">Our Contact:</font>
				<br><br>
				<font class="text">Our Email:</font>
				<br><br>
				<font class="text">Our Office Location:</font>
			</div>
			<div class="col-md-7">
				<font class="text">09799586616, 09782022088, 09690406926</font>
				<br><br>
				<font class="text">www.nextincompany@gmail.com</font>
				<br><br>
				<font class="text">No(71/A),Corner of Thit Taw street and Min Ye' Kyaw Swar street, Ahlone Township, Yangon</font>
			</div>
		</div>
		<div class="row" style="padding-top: 20px;">
			<div class="col-md-12">
				<center class="text">Designed and Maintained By IT Team, <br> Chaw Thiri Soe | Aye Sandi Kyaw | Phyo Myint Kyaw | Htet Aung Hlaing <br> from NextIN Co. Ltd;</center>
			</div>
		</div>
	</div>
	<!-- start of footer -->

</body>
</html>