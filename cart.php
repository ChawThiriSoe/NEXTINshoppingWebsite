<?php 
include 'dbconnect.php';
include 'link.php';
session_start();
$bbid=$_SESSION['buyerid'];
$bname=$_SESSION['buyernname'];
$bemail=$_SESSION['buyeremail'];
$bpwd=$_SESSION['buyerpass'];
$bph=$_SESSION['buyerph'];
$badd=$_SESSION['buyeradd'];

class Item
{
	public $tid;
	public $tname;
	public $timg1;
	public $timg2;
	public $timg3;
	public $catid;
	public $tdes;
	public $type;
	public $sellerid;
	function _construct($tid,$tname,$timg1,$timg2,$timg3,$catid,$tdes,$type,$sellerid)
	{
		$this->tid=$tid;
		$this->tname=$tname;
		$this->tdate=$timg1;
		$this->tprice=$timg2;
		$this->timg=$timg3;
		$this->tdes=$catid;
		$this->tdes=$tdes;
		$this->tdes=$type;
		$this->tdes=$sellerid;
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Sell & Buy with NextIN</title>
	<link rel="icon" href="images/logo.jpg">
	 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 

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
	<div class="container-fluid" style="padding-bottom: 30px;">
		<div class="row"  style="padding-top: 20px;">
			<div class="col-md-2"></div>
			<div class="col-md-10">
				<h3>
					Your Collection
				</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<!-- collection -->
				
				<div class="row" style="margin-top: 20px;">
					<div class="col-md-11">
						<table class="table table-striped text" style="font-family: time new romen;">
							<tr>
								<th>Name</th>
								<th>Price</th>
								<th>Qty</th>
								<th>Sub Total</th>
							</tr>
							<?php 
								$total = 0;
							if(!empty($_SESSION["shopping_cart"]))
								{
								foreach($_SESSION["shopping_cart"] as $keys => $values)
								{
									$id=$values["item_id"];
									$qty=$values["item_quantity"];
									$tot = 0;
										$sql = "select * from item where itemid='$id'";
										$r = $db->query($sql);
										$res = $r->fetch();
										$t = new Item($res[0],$res[1],$res[2],$res[3],$res[4],$res[5],$res[6],$res[7],$res[8],$res[9]);
										$pr=$res[5];
										$tot=$qty*$pr;
							?>							
							<tr>
								<td><?php echo $res[1];?></td>
								<td>$ <?php echo $res[5];?></td>
								<td><?php echo $qty;?></td>
								<td>$ <?php echo $tot;?></td>
							</tr>
							<?php 
							$total=$total+$tot;
							}
							?>
							<tr>
								<td colspan="3">Total</td>
								<td char="2" colspan="3">
									$ <?php echo $total;}?>
								</td>
							</tr>
						</table>
					</div>
					<div class="col-md-1"></div>
				</div>
				<!-- collection -->
			</div>
			<div class="col-md-1"></div>
		</div>
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-2" style="padding-top: 20px;">
				<center>
					<a href="clothes.php" class="btn aa">Continue Shopping</a>
				</center>
			</div>
			<div class="col-md-2" style="padding-top: 25px;">
				<center>
					<h3>
						OR
					</h3>
				</center>
			</div>
			<form action="" method="post">
			<div class="col-md-2" style="padding-top: 20px;">
				<center>
					<input type="submit" class="btn aa" name="go" value="Check out">
				</center>
			</div>
			</form>
			<div class="col-md-3"></div>
		</div>
	</div>
	<!-- end of body -->
	<?php
if(isset($_POST['go'])){
	$sql2="INSERT INTO orders (orderprice,orderDate,buyerid) VALUES ($total,now(),$bbid)";
	$db->exec($sql2);
	
	echo "<script>window.location='fill.php'</script>";
}
 ?>

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