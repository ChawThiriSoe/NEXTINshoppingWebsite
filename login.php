<?php
include 'dbconnect.php';
include 'link.php';

session_start();
if(isset($_POST['btnlogin'])){
	$useremail=trim($_POST['email']);
	$userpwd=trim($_POST['pwd']);
	$encodepw=md5($userpwd);
	$radio=$_POST['aslogin'];
	
	if($radio=='seller')
	{
		$sql="SELECT * FROM seller WHERE selleremail='$useremail' && sellerpassword='$encodepw'";
	
	foreach ($db->query($sql) as $row){
		$id=$row['sellerid'];
		$sname=$row['sellername'];
		$semail=$row['selleremail'];
		$spwd=$row['sellerpassword'];
		$sph=$row['sellerph'];
		$sadd=$row['selleradd'];
	
	if($id!=0){
		$_SESSION['sellerid']=$id;
		$_SESSION['sellername']=$sname;
		$_SESSION['selleremail']=$semail;
		$_SESSION['sellerpassword']=$spwd;
		$_SESSION['sellerph']=$sph;
		$_SESSION['selleradd']=$sadd;
		echo "<script>window.location='sellerprofile.php'</script>";
	}
	else
		echo "<script>window.location='login.php'</script>";
	}
	}
	
	
	else
	{
	$sql="SELECT * FROM buyer WHERE buyeremail='$useremail' && buyerpass='$encodepw'";
	
	foreach ($db->query($sql) as $row){
		$id=$row['buyerid'];
		$bname=$row['buyernname'];
		$bemail=$row['buyeremail'];
		$bpwd=$row['buyerpass'];
		$bph=$row['buyerph'];
		$badd=$row['buyeradd'];
	
	if($id!=0){
		$_SESSION['buyerid']=$id;
		$_SESSION['buyernname']=$bname;
		$_SESSION['buyeremail']=$bemail;
		$_SESSION['buyerpass']=$bpwd;
		$_SESSION['buyerph']=$bph;
		$_SESSION['buyeradd']=$badd;
		echo "<script>window.location='index.php'</script>";
	}
	else
		echo "<script>window.location='login.php'</script>";
	}
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
	<link rel="stylesheet" type="text/css" href="CSS/login.css">
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
		<div class="row" style="padding-top: 30px;">
			<div class="col-md-12">
				<form class="form-login" method="post" name="myform" action="" onsubmit="return validate()">
		            <div class="form-log-in-with-email" style="padding-bottom: 30px;">
						<div class="form-white-background">
							<div class="form-title-row">
                        		<h1>Log in</h1>
                    		</div>
                    		<div class="form-row">
                        		<label class="form-checkbox">
                            		<input type="radio" name="aslogin" value="seller">Login as Seller
                        		</label>
                    		</div>
                    		<div class="form-row">
                        		<label class="form-checkbox">
                            		<input type="radio" name="aslogin" vlaue="buyer">Login as Buyer
                        		</label>
                    		</div>
                    		<div class="form-row">
                        		<label>
                            		<span>Email</span>
                            			<input type="text" name="email" id="email">
                        		</label>
                    		</div>
                            <span id="emailerr" style="color:red;"></span>
                    		<div class="form-row">
                        		<label>
                            		<span>Password</span>
                            		<input type="password" name="pwd" id="password">
                        		</label>
                    		</div>
                    		<span id="passworderr" style="color:red;"></span>
		                    <div class="form-row">
		                    	<button type="submit" class="login" name="btnlogin">Login</button>
                    		</div>
		                </div>
                		<a href="register.php" class="form-create-an-account" style="text-decoration: none;">Create an account ---></a>
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