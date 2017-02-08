<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Bootstrap 101 Template</title>

    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <style>
      img
      {
        height: 150px;
        width:150px;
        margin-top: 28px;
      }
    </style>

  </head>
  <body style="background-color:#CCFFCC;">

      <div style="background-color:#2874f0;height: 142px;width: 1366px;">

    <div class="container">
  <div class="row">
  
        <div class="col-md-10" style="margin-left: 60px;margin-top:46px;">
        <font size="6" style="margin-left: -142px;color: white;font-family:Forte;">e-market</font>
            <div id="custom-search-input">                  <form method="post" action="skpsearch.php">
                <div class="input-group col-md-12" style="margin-top: -46px; margin-left: 12px;">
                    <input type="text" class="form-control input-lg" name="search" placeholder="Search" />
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="submit"></form>
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
                </div>
            </div>
        </div>
</div>
</div>
</div>
<br>
<br>


<div class="container">
        <div class="row">
          <div class="col-md-2" >
            <a style="position: fixed; top: 450; right: 20px;" href="add to shop.php">
               <button type="button" class="btn btn-primary btn-lg">(+) Add Product</button>
            </a><br>
            <a style="position: fixed; margin-top:180px; right: 20px;" href="logout.php">
               <button type="button" class="btn btn-primary btn-lg">logout</button>
            </a><br>
               <a style="position: fixed; margin-top: 327px; right: 20px;" href="serve.php">
               <button type="button" class="btn btn-primary btn-lg">>Serve Orders</button>
            </a>
          </div>
        </div>

<!--and orders.pr_id=product.pr_id and orders.sh_id=products.sh_id and or_status!='0'-->

<?php
  session_start();
  include('connection.php');
  $b=$_SESSION['name'];

 $r=$_POST['search'];
  $s='%'.$r.'%';

$abc="select * from product where sh_id='$b' and pr_name like '$s'";
$result=mysqli_query($dbc,$abc);
  $num=mysqli_num_rows($result); 
  if ($num>0) 
    {
     while($row =mysqli_fetch_array($result)) 
         {
          echo "<div class=col-md-4 style='background-color: #0099CC; color:white; margin-top: 23px; margin-left: 100px;'><div style='margin-top: 28px;'><img src='".$row['pr_image']."' /><br>";
          echo "
          <form method='post' action='skpnext.php'>
          <h4><b><i>".$row['pr_name']."</i></b></h4>
          <ul style='margin-top: -180px; margin-left: 20px;'>
          <p style='margin-left: 110px;'>Stock:".$row['pr_stock']."</p>
          <input type='hidden' name='prid' value='".$row['pr_id']."'/>
          <input type='hidden' name='prstock' value='".$row['pr_stock']."'/>
          <p style='margin-left: 110px;'>Cost:".$row['pr_cost']."</p>
          <input type='hidden' name='prcost' value='".$row['pr_cost']."'/>
          <b><p style='margin-left: 110px; color:black;'><input type='text' size='2' name='ns' placeholder='add stock voloume'>(+)New Stock</p></b>
          <b><p style='margin-left: 110px; color:black;'><input type='text' size='2' name='ds' placeholder='sub stock voloume'>(-)Damaged Stock</p></b>
        </ul><br><br>
          <div style='margin-left: 173px;'>
          <button type='submit' class='btn btn-primary' style='margin-top:46px;margin-top:-50px; padding: 2px 9px 2px 9px;background-color: #2874f0; '>Update Status</button> 
          </div></div>
          </div></form>
          ";         }
          }

?>


</div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
