<?php
include 'dbconnect.php';
include 'link.php';
session_start();
$sid=$_SESSION['sellerid'];

if(isset($_POST['upload']))
{	

$name=$_POST['itemname'];

$file1=$_FILES['file1']['name'];
$file_loc=$_FILES['file1']['tmp_name'];

$folder="images/";
move_uploaded_file($file_loc, $folder.$file1);

$file2=$_FILES['file2']['name'];
$file_loc=$_FILES['file2']['tmp_name'];

$folder="images/";
move_uploaded_file($file_loc, $folder.$file2);

$file3=$_FILES['file3']['name'];
$file_loc=$_FILES['file3']['tmp_name'];

$folder="images/";
move_uploaded_file($file_loc, $folder.$file3);

$price=$_POST['itemprice'];
$description=$_POST['Description'];
$neworold=$_POST['neworold'];
$category_ID=$_POST['menu'];

$sql ="INSERT INTO item (itemname,itemimg1,itemimg2,itemimg3,itemprice,catid,Description,neworold,sellerid) VALUES ('$name','$file1','$file2','$file3','$price','$category_ID','$description','$neworold','$sid')";
$db->exec($sql);
echo "<script>alert('Insert Successful');location.href='sellerupload.php'</script>";	


}
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
						<li><a href="about.php">About Us</a></li>
						<li><a href="contact.php">Contact Us</a></li>
						<li><a href="faq.php">FAQ</a></li>
						<li>
							<a href="cart.html"><img src="images/cart.png" alt="" width="30px" height="30px"></a>
						</li>
       				 </ul>
    			</nav>
			</div>
		</div>
		<!-- NAV -->

	</div>
	<!-- end of header -->


	<!-- start of body -->
	<form action="" method="post"  enctype="multipart/form-data">
		<div class="container" style="margin-bottom:30px">
		<div class="form-group">
				Select Category:
					<select name="menu" class="form-control">

						<?php
						$sql="select * from category";
						foreach ($db->query($sql) as $row)
						{
							$category_ID=$row['catid'];
							$category_Name=$row['catname'];
							echo "<option value='$category_ID'>
							$category_Name</option>";
							}
						?>
					</select>
				</div>
		
  			
			<div class="form-group">
          Items Name
           <input type="text" name="itemname"  required placeholder="Enter Items Name" class="form-control"><br>
  			</div>
  			
  			<div class="form-group">
          Image1:
            <input type="file" name="file1"><br>
            </div>
            
            <div class="form-group">
          Image2:
            <input type="file" name="file2"><br>
            </div>
            
            <div class="form-group">
          Image3:
            <input type="file" name="file3"><br>
            </div>
            
            <div class="form-group">
           Price:
            <input type="text" name="itemprice" required placeholder="Enter Item Price" class="form-control"><br>
            </div>
            
            <div class="form-group">
        	Description:
           <input type="text" name="Description"  required placeholder="Enter Description" class="form-control"><br>
  			</div>
  			
  			<div class="form-group">
        	New or Old: 
          <select type="text" name="neworold" class="form-control">
          		<option value="Select one option">Select one option</option>
				<option value="new">New</option>
				<option value="old">Old</option>
		</select>
  			</div>
  			
  			
  			
  			
             <!-- <input type="submit" name="send" value="Send"> -->
            <button class="btn btn-primary" name="upload" style="left">Upload</button>
            
            <!-- <input type="reset" name="cancel" value="cancel"> -->
            <button class="btn btn-primary" name="cancel" style="right">Cancel</button>
            </div>
 			</form>
 			
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