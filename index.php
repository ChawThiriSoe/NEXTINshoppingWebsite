<?php
include 'dbconnect.php';
include 'link.php';
session_start();
$id=$_SESSION['buyerid'];
$bname=$_SESSION['buyernname'];
$bemail=$_SESSION['buyeremail'];
$bpwd=$_SESSION['buyerpass'];
$bph=$_SESSION['buyerph'];
$badd=$_SESSION['buyeradd'];
?>

<html>
<head>
	<title>Sell & Buy with NextIN</title>
	<link rel="icon" href="images/logo.jpg">

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

	<!-- ad link -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<!-- ad link -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
	<!-- start of header -->
	<div class="container-fluid">
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
		<div class="col-md-1"></div>
			<div class="col-md-6">
				<h1 style="color: darkblue; padding-top: 50px;">Are You Ready for Shopping?</h1>
				<br><br>
				<h3>Choose your favorite!!</h3><br>
				<h3>And Buy Your favorite items!!</h3><br><br>
				<a href="clothes.php">
					<button class="btn btn-primary" style="width: 100px; height: 50px; font-size: 18px;">Shop Now</button>
				</a>
			</div>
			<div class="col-md-5">
				<img src="images/buy.jpg" style="width: 100%; height: 100%; border-radius: 20px;">
			</div>
		</div>
		<div class="row" style="padding-top: 20px;">
			<div class="col-md-1"></div>
			<div class="col-md-3">
				<img src="images/accessory.jpg" style="width: 200px; height: 200px; border-radius: 100%; border: 2px solid black;">
				<br><br>
				<h3 style="margin-left: 50px; ">Accessories</h3>
			</div>
			<div class="col-md-1"></div>
			<div class="col-md-3">
				<img src="images/cloth.jpg" style="width: 200px; height: 200px; border-radius: 100%; border: 2px solid black;">
				<br><br>
				<h3 style="margin-left: 65px; ">Clothes</h3>
			</div>
			<div class="col-md-1"></div>
			<div class="col-md-3">
				<img src="images/electronic.jpg" style="width: 200px; height: 200px; border-radius: 100%; border: 2px solid black;">
				<br><br>
				<h3 style="margin-left: 45px; ">Electronics</h3>
			</div>
		</div>
		<div class="row" style="padding-bottom: 30px;">
			<div class="col-md-2"></div>
			<div class="col-md-3" style="padding-left: 120px;">
				<img src="images/shoe.jpg" style="width: 200px; height: 200px; border-radius: 100%; border: 2px solid black;">
				<br><br>
				<h3 style="margin-left: 75px; ">Shoes</h3>
			</div>
			<div class="col-md-2"></div>
			<div class="col-md-3" style="padding-right: 50px;">
				<img src="images/other.jpg" style="width: 200px; height: 200px; border-radius: 100%; border: 2px solid black;">
				<br><br>
				<h3 style="margin-left: 45px; ">Other Items</h3>
			</div>
			<div class="col-md-2"></div>
		</div>
		
	<!-- end of body -->

	<!-- start of report -->
		<div class="row" style="padding-bottom: 30px;">
			<div class="col-md-12" style="padding-left: 120px;">
				<?php 
					$sql="select * from category where catid='1'";
					foreach ($db->query($sql) as $row){
					$cid=$row['catname'];
					}
					echo "<center><h1 style='color: red;'>The most sold category in this month <br><br>";
					echo "<img src='images/cloth.jpg' style='width: 200px; height: 200px; border-radius: 100%; border: 2px solid black;'>";
					echo " <br>$cid</h1><center>";
				?>
			</div>
		</div>
	</div>
	<!-- end of report -->

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