<?php
include('connection.php');
$name=$_POST["firstname"];
$pass=$_POST["lastname"];
$query="select * from customer where cu_id='$name' and cu_password='$pass'";
$result=mysqli_query($dbc,$query);
$num=mysqli_num_rows($result);
if($num==0)
{
}
else 
{
	session_start();
	$_SESSION['name']=$name;
	header("Location:diffshop.php");
}
?>
<html>
<body>
<script>alert("check credentials");</script></body>
<?php include('e-M-Home.php');?>
</html>
