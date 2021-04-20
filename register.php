<?php
include 'dbconnect.php';
include 'link.php';
session_start();
if(isset($_POST['btnregister'])){
	$un=trim($_POST['uname']);
	$em=trim($_POST['email']);
	$ph=trim($_POST['phone']);
	$add=trim($_POST['address']);
	$pwd=trim($_POST['pwd']);
	$encodepw=md5($pwd);
	$cpwd=trim($_POST['cpwd']);
	$encodecpw=md5($cpwd);
	$radio=$_POST['asregister'];
	
	if($radio=='buyer')
	{
	if($pwd==$cpwd){
		$sql="INSERT INTO buyer (buyernname,buyeremail,buyerph,buyeradd,buyerpass) VALUES ('$un','$em','$ph','$add','$encodecpw')";
		$db->exec($sql);
		echo "<script>window.location='login.php'</script>";
	}
	else
		echo "<script>alert('Password did not match!! Please try again!'); window.location='register.php'</script>";
	}
	
	else
	{
	if($pwd==$cpwd){
		$sql="INSERT INTO seller (sellername,selleremail,sellerpassword,sellerph,selleradd) VALUES ('$un','$em','$encodecpw','$ph','$add')";
		$db->exec($sql);
		echo "<script>window.location='login.php'</script>";
	}
	else
		echo "<script>alert('Password did not match!! Please try again!'); window.location='register.php'</script>";
	}
}

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

	<!-- login link -->
	<link rel="stylesheet" type="text/css" href="CSS/register.css">
	<!-- login link -->
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
	</div>
	<!-- end of header -->


	<!-- start of body -->
	<div class="container-fluid">
		<div class="row" style="padding-top: 30px; padding-bottom: 30px;">
			<div class="col-md-12">
				<form class="form-register" method="post" name="myform" action="" onsubmit="return validate()">
            		<div class="form-register-with-email">
                		<div class="form-white-background">
                    		<div class="form-title-row">
                        		<h1>Create an account</h1>
                    		</div>
                    		<div class="form-row">
                        		<label class="form-checkbox">
                            		<input type="radio" name="asregister" value="seller">Register as Seller
                        		</label>
                    		</div>
                    		<div class="form-row">
                        		<label class="form-checkbox">
                            		<input type="radio" name="asregister" value="buyer">Register as buyer
                        		</label>
                    		</div>
                    		<div class="form-row">
                        		<label>
                            		<span>Name</span>
                            		<input type="text" name="uname" id="name" required>
                        		</label>
                    		</div>
                    		<span id="nameerr" style="color:red;"></span>
                    		<div class="form-row">
                        		<label>
                            		<span>Email</span>
                           		 <input type="text" name="email" id="email" required>
                        		</label>
                    		</div>
                    		<span id="emailerr" style="color:red;"></span>
                    		<div class="form-row">
                        		<label>
                            		<span>Phone</span>
                           		 <input type="text" name="phone" id="ph">
                        		</label>
                    		</div>
                    		<span id="ph" style="color:red;"></span>
                    		<div class="form-row">
                        		<label>
                            		<span>Address</span>
                           		 <input type="text" name="address" id="add">
                        		</label>
                    		</div>
                    		<span id="add" style="color:red;"></span>
                    		<div class="form-row">
                        		<label>
                            		<span>Password</span>
                            		<input type="password" name="pwd" id="password" required>
                        		</label>
                    		</div>
                    		<span id="passworderr" style="color:red;"></span>
                    		<div class="form-row">
                        		<label>
                            		<span>Confirm Password</span>
                            		<input type="password" name="cpwd" id="cpassword" required>
                        		</label>
                    		</div>
                    		<span id="cpassworderr" style="color:red;"></span>
                    		<div class="form-row">
                        		<label class="form-checkbox">
                            		<input type="checkbox" name="" checked>
                            		<span>I agree to the <a href="term.php">terms and conditions</a></span>
                        		</label>
                    		</div>
                    		<div class="form-row">
                        		<button type="submit" class="re" name="btnregister">Register</button>
                    		</div>
                		</div>
                		<a href="login.php" class="form-log-in-with-existing" style="text-decoration: none;">Already have an account? Login here ---></a>
            		</div>
            		<div class="form-sign-in-with-social">
                		<div class="form-row form-title-row">
                    		<span class="form-title">Sign in with</span>
                		</div>
                		<a href="https://www.google.com" class="form-google-button">Google</a>
                		<a href="https://www.facebook.com" class="form-facebook-button">Facebook</a>
                		<a href="https://www.twitter.com" class="form-twitter-button">Twitter</a>
            		</div>
        		</form>
			</div>
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