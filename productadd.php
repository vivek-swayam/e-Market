<?php
session_start();
include('connection.php');
$sname=$_SESSION['name'];
$pname=$_POST["pname"];
$ploc=$_POST["iloc"];
$pdesc=$_POST["pdesc"];
$pcost=$_POST["pcost"];
$pquant=$_POST["pquant"];
$num1=$_POST['prid'];

if($pname && $pdesc && $pcost && $ploc && $num1 && $pquant)
{

$query="select * from product where pr_id='$num1'";
$result=mysqli_query($dbc,$query);
$num=mysqli_num_rows($result);
if($num==0)
{
$query1="insert into product set sh_id='$sname' ,pr_id='$num1' ,pr_name='$pname',pr_cost='$pcost' ,pr_stock='$pquant' ,pr_description='$pdesc',pr_image='$ploc'";
	$result1=mysqli_query($dbc,$query1);
header('Location:skp.php');
}
else
{
echo "<script>alert('product id already exists');</script>";
	include('add to shop.php');	
}
}


else
{
	echo "<script>alert('Please,Enter all the details to Cont');</script>";
	include('add to shop.php');
}


?>