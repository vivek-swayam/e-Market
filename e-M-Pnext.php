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
      }
    </style>

  </head>
  <body style="background-color:#CCFFCC;">

      <div style="background-color:#2874f0;height: 142px;width: 1366px;">

    <div class="container">
  <div class="row">
  
        <div class="col-md-10" style="margin-left: 60px;margin-top:46px;">
        <font size="6" style="margin-left: -142px;color: white;font-family:Forte;">e-market</font>
            <div id="custom-search-input"><form method="post" action="e-M-Pnext.php">
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
        <div class="col-md-1">
       <a href="cartother.php"><button type="button" class="btn btn-primary" style="margin-top:46px; padding: 10px 58px 14px 52px;background-color: #2874f0; ">cart</button>
        </a> 

  </div>
</div>
</div>
</div>
<br>
<br>


<div class="container">
        <div class="row">
          <div class="col-md-2" >
            <a style="position: fixed; margin-top:180px; right: 20px;" href="logout.php">
               <button type="button" class="btn btn-primary btn-lg">logout</button>
            </a>
          </div>
        </div>


<!--and orders.pr_id=product.pr_id and orders.sh_id=products.sh_id and or_status!='0'-->

<?php
  session_start();
  include('connection.php');
  
  $b=$_SESSION['a'];
  $pn=$_SESSION['name'];
$def="create view `fltr` as select pr_id,sh_id from orders where or_status=1 and cu_id='$pn'";

 $result=mysqli_query($dbc,$def);



$abc="create view `fltr1` as select product.pr_id,product.sh_id,pr_name,pr_cost,pr_description,pr_stock,pr_image from product left join fltr on product.pr_id=fltr.pr_id and product.sh_id=fltr.sh_id where fltr.pr_id is NULL";
 $result=mysqli_query($dbc,$abc);

 $r=$_POST['search'];
  $s='%'.$r.'%';
$abc="select * from fltr1 where sh_id='$b' and pr_name like'$s'";
$result=mysqli_query($dbc,$abc);
  $num=mysqli_num_rows($result); 

  
  if ($num>0) 
    {
     while($row =mysqli_fetch_array($result)) 
         {
          echo "<div class=col-md-4 style='background-color: #0099CC; color:white; margin-top: 23px; margin-left: 100px;'><div style='margin-top: 28px;'><img src='".$row['pr_image']."' /><br>";
          echo "
          <form method='post' action='cart.php'>
          <h3><b><i>".$row['pr_name']."</i></b></h3>
          <ul style='margin-top: -210px; margin-left: 45px;'>
          <u><h4 style='margin-left: 110px;'>Specs</h4></u>
          <p style='margin-left: 110px;'>Stock:".$row['pr_stock']."</p>
          <p style='margin-left: 110px;'>".$row['pr_description']."</p>
          <input type='hidden' name='prid' value='".$row['pr_id']."'/>
          <p style='margin-left: 110px;'>Cost: ".$row['pr_cost']." rs</p>
          <input type='hidden' name='prcost' value='".$row['pr_cost']."'/>
          <p style='margin-left: 110px; color:black;'><input type='text' size='2' name='qty' placeholder='Qty'></p>
        </ul>
          
          <div style='margin-left: 170px;margin-top: 16px; font-size: 18px;'>Add to Cart</div>
          <div style='margin-left: 273px;'>
          <button type='submit' class='btn btn-primary' style='margin-top:46px;margin-top:-50px; padding: 2px 9px 2px 9px;background-color: #2874f0; '>+</button> 
          </div></div>
          </div></form>
          ";        }
          }
  

?>


</div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>