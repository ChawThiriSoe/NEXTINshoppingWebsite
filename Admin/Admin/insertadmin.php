<?php
include 'dbconnect.php';	//to connect with database
if(isset($_POST['register']))
{	
$admin_name=$_POST['aname'];
$admin_email=$_POST['aemail'];
$admin_phone=$_POST['phone'];

$admin_password=$_POST['apass'];

$admin_confirmpassword=$_POST['cpass'];

if($admin_password==$admin_confirmpassword)
{
$sql ="INSERT INTO admin (aemail,aname,phone,apass) VALUES ('$admin_email','$admin_name','$admin_phone','$admin_confirmpassword')";
$db->exec($sql);
echo "<script>alert('Account Successfully added');location.href='loginadmin.php'</script>";
}
else 
	echo "<script>alert('passwords do not match');location.href='registeradmin.php'</script>";
	
}
?>
