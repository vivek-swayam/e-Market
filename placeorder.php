<?php
session_start();
include('connection.php');
$p=$_SESSION['name'];
$query="select orders.pr_id,orders.sh_id,or_quant,pr_stock,pr_name from orders,product where or_status=0 and cu_id='$p' and orders.pr_id=product.pr_id and orders.sh_id=product.sh_id";
$result=mysqli_query($dbc,$query);
  $num=mysqli_num_rows($result); 
  
  if ($num>0) 
    {
     while($row=mysqli_fetch_array($result)) 
         {
$qty=$row['or_quant'];
$sid=$row['sh_id'];
$pid=$row['pr_id'];
$tem=$row['pr_stock']-$qty;
$name= $row['pr_name'];
if($tem>=0)
{
$query="update product set pr_stock='$tem' where sh_id='$sid' and pr_id='$pid'";
$result1=mysqli_query($dbc,$query);

$query="update orders set or_status=1 where cu_id='$p' and pr_id='$pid'";
$result1=mysqli_query($dbc,$query);
}
else{
echo '<script>alert("Sorry! , The Product: '.$name.' is out of Stock..!")</script>';
          }
        }
      }

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>LogOut</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>p{allign:centre;}</style>
     <link href="DB.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="">

    <div class="container">
      <br><br><br><br><br><br><br><br><br>
      <p style="margin-left:431px;">Your has been placed Successfully!</p>
      <a href="diffshop.php"><input class="btn" type="submit" value="Back To Home" style="margin-left:476px;"></a>  
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>