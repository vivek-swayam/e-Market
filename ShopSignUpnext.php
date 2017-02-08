

<?php
include('connection.php');
$id=$_POST["sid"];

	$simage=$_POST["simage"];
	$sname=$_POST["sname"];
	$pass=$_POST["pass1"];
	$add=$_POST["add"];
	$cit=$_POST["cit"];
	$pno=$_POST["no"];
if($id && $sname && $pass && $add && $pno && $cit && $simage)
{
$query="select * from shop where sh_id='$id'";
$result=mysqli_query($dbc,$query);
$num=mysqli_num_rows($result);

if($num==0)
{
	if($_POST["pass1"]==$_POST["pass2"])
	{
	$query1="insert into shop set sh_image='$simage' ,sh_name='$sname' ,sh_id='$id' ,sh_password='$pass',sh_area='$add' ,sh_city='$cit' ,sh_mobile='$pno'";
	$result1=mysqli_query($dbc,$query1);
	header("Location:e-M-Home.php");
	}
	else
	{
		header("Location:pass.php");
	}
}
else 
{
	header("Location:existinguser.php");
}
}
else
{
echo "<script>alert('Enter all the details');</script>";
include('ShopSignUp.php');
//header('Location:CustSignUp.php');
}



?>