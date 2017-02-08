<?php
session_start();
include('connection.php');
$a=$_POST['delete'];
$m=$_POST['l'];
$b=$_SESSION['name'];
$query="delete from orders where pr_id='$a' and cu_id='$b' and sh_id='$m' and or_status='0'";
$result=mysqli_query($dbc,$query);
header('Location:cartother.php');
?>