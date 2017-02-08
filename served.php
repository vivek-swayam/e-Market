<?php
session_start();
include('connection.php');
$a=$_POST['serve'];
$b=$_POST['l'];
$m=$_SESSION['name'];
$query="delete from orders where pr_id='$a' and cu_id='$b' and sh_id='$m' and or_status='1'";
$result=mysqli_query($dbc,$query);
header('Location:serve.php');
?>