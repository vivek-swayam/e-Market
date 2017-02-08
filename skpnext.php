<?php
session_start();
include('connection.php');
$a=$_POST['ns'];
$b=$_POST['ds'];
$c=$_POST['prid'];
$d=$_POST['prstock'];
$e=$_SESSION['name'];
echo $a;
if($a)
{
$d=$d+$a;
}
if($b)
{
$d=$d-$b;
}
$query="update product set pr_stock='$d' where sh_id='$e' and pr_id='$c'";
$result1=mysqli_query($dbc,$query);
header('Location:skp.php');
?>