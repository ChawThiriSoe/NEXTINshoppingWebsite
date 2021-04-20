<?php
include 'dbconnect.php';
include 'link.php';
?>
<!DOCTYPE html>
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

	<!-- faq link -->
	<link rel="stylesheet" type="text/css" href="CSS/faq.css">
	<script type="text/javascript" src="JS/faq.js"></script>
	<!-- faq link -->

	<script type="text/javascript">

		function validate(){
		var x=document.myform.email.value;
		var ph=document.myform.phone.value;
		var name=document.myform.name.value;
		var status=false;  
		var atposition=x.indexOf("@");  
		var dotposition=x.lastIndexOf(".");


		if(name.length<1){  
		document.getElementById("nameerr").innerHTML="Please enter your name!!";  
		status=false;  
		}
		else if(!isNaN(name))
		{
		document.getElementById("nameerr").innerHTML="Name must be character!!";  
		status=false;  			
		}
		else{
			status=true;
		}


		if(x.length==0)
		{
			 document.getElementById("emailerr").innerHTML="Email must be required!!";
		  status=false;
		}
		else if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){
		  document.getElementById("emailerr").innerHTML="Email format is invalid!!";
		  status=false;
		}else{
		status=true;  
		  }


		if(ph.length==0)
		{
			 document.getElementById("phoneerr").innerHTML="Phone number must be required!!";
		  status=false;
		}

		else if(ph.length<6 || ph.length>11)
		{
			 document.getElementById("phoneerr").innerHTML="Phone number must be at least 11 numbers!!";
		  status=false;
		}

		else{
		  status=true; 
		  }
		  return status;  
		}
	</script>


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
		<div class="container">
		<div class="row">
			<div class="col-md-7 box-toggle">
				<div class="contorol">
					<h5>After I receive my item, what if I have a question or concern about its authenticity?</h5>
					<span class="toggle-info pull-left">
						<i class="fa fa-plus"></i>
					</span>
				</div>
				<div class="content-box">
					<p>
						If you ever have any question about the authenticity of anything you buy from The NextIN, please bring it into a store, LCO or contact us at customerservice@nextin.com and we will reinspect it. If you continue to have concerns, we will refund your purchase price.
					</p>
				</div>
				<div class="contorol">
					<h5>What is your authentication process?</h5>
					<span class="toggle-info pull-left">
						<i class="fa fa-plus"></i>
					</span>
				</div>
				<div class="content-box">
					<p>
						Authenticity is the cornerstone of The NextIN. We staff trained, in-house professionals including gemologists, horologists, art appraisers and apparel experts who work to ensure the items we sell are authentic and in beautiful condition.
					</p>
				</div>
				<div class="contorol">
					<h5>Which items are excluded from promotions and discounts?</h5>
					<span class="toggle-info pull-left">
						<i class="fa fa-plus"></i>
					</span>
				</div>
				<div class="content-box">
					<p>
						Some of our most covetable items are not eligible for discounts based on current market value and demand. Items that do not qualify for discounts will have the phrase “Coupons and discounts are not available for this product” on their unique product pages. Only one promotional code can be used per order, and promotional discount codes cannot be combined with markdown items. 
					</p>
				</div>
				<div class="contorol">
					<h5>Can I offer a lower bid for an item? </h5>
					<span class="toggle-info pull-left">
						<i class="fa fa-plus"></i>
					</span>
				</div>
				<div class="content-box">
					<p>
						While we cannot accept bids, you can add the item to your Obsessions page and we will send you an email when this item is marked down.
					</p>
				</div>
				<div class="contorol">
					<h5>What is your return policy?</h5>
					<span class="toggle-info pull-left">
						<i class="fa fa-plus"></i>
					</span>
				</div>
				<div class="content-box">
					<p>
						Returns must be requested within 14 days of in-store purchase or shipment date and items must be received within 21 days of in-store purchase or shipment date. For online returns, you will receive a prepaid shipping label which you can use, if you choose, for a fee of $11.95.
					</p>
				</div>
				<div class="contorol">
					<h5>What are your shipping and delivery options?</h5>
					<span class="toggle-info pull-left">
						<i class="fa fa-plus"></i>
					</span>
				</div>
				<div class="content-box">
					<p>
						We ship all orders to an address outside of the United States via UPS Worldwide Expedited. We ship to over 60 countries. We cannot deliver to P.O. Boxes, APO/FPO addresses and select U.S. Territories. If you have any questions about your order contact The NextIN Customer Service team Monday – Friday, 9AM – 5PM PST at 855.435.5893, Ext. 1.
					</p>
				</div>
				<div class="contorol">
					<h5>How do I track my order?</h5>
					<span class="toggle-info pull-left">
						<i class="fa fa-plus"></i>
					</span>
				</div>
				<div class="content-box">
					<p>
						We will send an email notification including tracking information when your package has shipped. You can view the status of your order, obtain tracking information, and sign up for SMS notifications about your order in the My Purchases section under My Account.
					</p>
				</div>
				<div class="contorol">
					<h5>When is a signature required to deliver my order?</h5>
					<span class="toggle-info pull-left">
						<i class="fa fa-plus"></i>
					</span>
				</div>
				<div class="content-box">
					<p>
						The RealReal requires a signature for orders with any item over $5,000. UPS will need to obtain a signature from an adult 21 or older. You may contact UPS to create a ‘My Choice’ account to personalize some of your shipping preferences, including redirecting shipments to a UPS customer center.
					</p>
				</div>
				<div class="contorol">
					<h5>Can I cancel my order?</h5>
					<span class="toggle-info pull-left">
						<i class="fa fa-plus"></i>
					</span>
				</div>
				<div class="content-box">
					<p>
						We want to deliver your item as soon as possible, so we process orders in real time during business hours. This means we are unable to cancel orders once they have entered the shipping process. This usually occurs within 30 minutes during business hours. To find out if your order is eligible for cancellation, please contact customer service at customerservice@therealreal.com or 855.435.5893 ext. 1.
					</p>
				</div>
				<div class="contorol">
					<h5>Can I buy a Gift Card?</h5>
					<span class="toggle-info pull-left">
						<i class="fa fa-plus"></i>
					</span>
				</div>
				<div class="content-box">
					<p>
						Yes, you can purchase a gift card in the amount of your choice here. Gift Cards can be printed out or delivered directly to recipients by email.
					</p>
				</div>
			</div>
			<div class="col-md-5">
				<form name="myform" action="" onsubmit="return validate()" method="post">
				<div class="row" style="padding-top: 100px;">
					<div class="col-md-12">
						<center>
							<h3>
								Your Question
							</h3>
						</center>
					</div>
				</div>
				<div class="row" style="padding-top: 20px;">
					<div class="col-md-2"></div>
					<div class="col-md-3">
						<font class="text">
							Name:
						</font>
					</div>
					<div class="col-md-6">
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
					<div class="col-md-1"></div>
				</div>
				<div class="row" style="padding-top: 20px;">
					<div class="col-md-2"></div>
					<div class="col-md-3">
						<font class="text">
							Email:
						</font>
					</div>
					<div class="col-md-6">
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
					<div class="col-md-1"></div>
				</div>
				<div class="row" style="padding-top: 20px;">
					<div class="col-md-2"></div>
					<div class="col-md-3">
						<font class="text">
							Phone:
						</font>
					</div>
					<div class="col-md-6">
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
					<div class="col-md-1"></div>
				</div>
				<div class="row" style="padding-top: 20px;">
					<div class="col-md-2"></div>
					<div class="col-md-3">
						<font class="text">
							Enter your questions:
						</font>
					</div>
					<div class="col-md-5">
						<textarea class="form-control text" rows="5" cols="50" id="comment" placeholder="Please give us your Feedback"></textarea>
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