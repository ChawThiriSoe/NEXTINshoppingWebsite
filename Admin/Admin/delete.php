<?php
include '../../dbconnect.php';
include '../../link.php';
$item_ID=$_GET['itemid'];
$item_Name=$_GET['itemname'];

if(isset($_POST['yes']))
{	
	$sql="delete from item where itemid='$item_ID' and itemname=''$item_Name";
	$db->exec($sql);
	echo "<script>alert('Delete Successful');location.href='deleteitem.php'</script>";
}
if(isset($_POST['no']))
{	
	echo "<script>alert('Delete Cancel');location.href='delete.php'</script>";
}

?>
<html>
	<title></title>
	<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form action="" method="post">
		<h2 class="text-center" style="color:rgb(176,209,51)">Delete Item</h2><br>
			<div class="form-group">
						<input type="text" name="itemname" value="<?php echo $item_Name;?>" readonly class="form-control">
			</div>
			<button type="submit" name="yes" class="btn btn-success">Delete</button>
			<button type="submit" name="no" class="btn btn-success">Cancel</button>
		</form>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
		
	</body>
</html>



