<?php
include('connection.php');
$id=$_POST["id"];

	$sname=$_POST["name"];
	$pass=$_POST["pass1"];
	$add=$_POST["add"];
	$cit=$_POST["city"];
	$pno=$_POST["no"];
$query="select * from customer where cu_id='$id'";
$result=mysqli_query($dbc,$query);
$num=mysqli_num_rows($result);
if($id && $sname && $pass && $add && $pno && $cit)
{
if($num==0)
{
	if($_POST["pass1"]==$_POST["pass2"])
	{
	$query1="insert into customer set cu_name='$sname' ,cu_id='$id' ,cu_password='$pass',cu_area='$add' ,cu_city='$cit' ,cu_mobile='$pno',cu_balance='0'";
	$result1=mysqli_query($dbc,$query1);
	header("Location:e-M-Home.php");
	}
	else
	{
		header("Location:pass1.php");
	}
}
else 
{
	header("Location:existinguser1.php");
}
}
else
{
echo "<script>alert('Please,Enter all the details to Cont');</script>";
include('CustSignUp.php');
//header('Location:CustSignUp.php');
}


?>