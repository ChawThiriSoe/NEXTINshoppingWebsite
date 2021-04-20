<?php
include 'dbconnect.php';
include 'link.php';
?>
<html>
<head>
	<title>Sell & Buy with NextIN</title>
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

	<!-- slip up -->
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>
	<script>
		$(document).ready(function(){
			$("#flip1").hover(function(){
				$("#panel1").slideToggle();
			});
			$("#flip2").hover(function(){
				$("#panel2").slideToggle();
			});
			$("#flip3").hover(function(){
				$("#panel3").slideToggle();
			});
			$("#flip4").hover(function(){
				$("#panel4").slideToggle();
			});
			$("#flip5").hover(function(){
				$("#panel5").slideToggle();
			});
		})
	</script>
	<!-- slip up -->

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
	<div class="container-fluid">
		<div class="row" style="padding: 20px;">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<font size="22px" color="purple">Don't wear it? Sell it!</font><br><br>
				<p style="font-size: 20px; color: gray; font-family: malgun gothic;">
					We want to show you just how great second-hand can be. Sell the clothes that have more to give. Shop for items you won't find in stores. Vinted is open to everyone who believes that good clothes should live long.
				</p>
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<img src="images/office.jpg" width="100%" height="100%">
			</div>
		</div>
		<div class="row" style="padding: 20px;">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<font size="22px" color="purple">Investors & Leadership</font><br>
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<img src="images/per3.jpg" width="300px" height="400px">
				<div class="aboutimg">
					<font style="font-size: 24px; font-family: malgun gothic; padding-left: 50px;">Web Desinger</font><br>
					<font style="font-size: 18px; font-family: malgun gothic; padding-left: 50px;">Phyo Myint Kyaw</font>
				</div>
			</div>
			<div class="col-md-3">
				<img src="images/per1.jpg" width="300px" height="400px">
				<div class="aboutimg">
					<font style="font-size: 24px; font-family: malgun gothic; padding-left: 50px; color: black;">Team Leader</font><br>
					<font style="font-size: 18px; font-family: malgun gothic; padding-left: 50px; color: black;">Chaw Thiri Soe</font>
				</div>
			</div>
			<div class="col-md-3">
				<img src="images/per2.jpg" width="300px" height="400px">
				<div class="aboutimg">
					<font style="font-size: 24px; font-family: malgun gothic; padding-left: 50px; color: black;">Quality Manager</font><br>
					<font style="font-size: 18px; font-family: malgun gothic; padding-left: 50px; color: black;">Aye Sandi Kyaw</font>
				</div>
			</div>
			<div class="col-md-3">
				<img src="images/per4.jpg" width="300px" height="400px">
				<div class="aboutimg">
					<font style="font-size: 24px; font-family: malgun gothic; padding-left: 50px;">Process Analyst</font><br>
					<font style="font-size: 18px; font-family: malgun gothic; padding-left: 50px;">Htet Aung Hlaing</font>
				</div>
			</div>
		</div>
		<div class="row" style="padding: 20px;">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<p style="font-size: 20px; color: gray; font-family: malgun gothic;">
					In everything we do, we're still true to NextIN's initial idea, developed by our designer, Phyo Myint Kyaw. Today, Team Leader, Chaw Thiri Soe and Quality Manager, Aye Sandi Kyaw lead the NextIN Website's daily operations and growth. Our mission is also backed by 4 leading venture capital firms from both sides of the Atlantic.
				</p>
			</div>
			<div class="col-md-2"></div>
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