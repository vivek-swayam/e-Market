
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Bootstrap 101 Template</title>

    
    <link href="css/bootstrap.min.css" rel="stylesheet">

    
  </head>
  <body style='background-color: #CCFFCC'>
      <div style="background-color:#2874f0;height: 142px;width: 1366px;">

        <div class="container">
  <div class="row">
  
        <div class="col-md-10" style="margin-left: 60px;margin-top:46px;">
        <font size="20" style=" margin-left: 361px;color: white;font-family:Forte;">Orders</font>
        </div>
        <div class="col-md-1">
       <a href="skp.php">   <button type="button" class="btn btn-primary" style="margin-top:46px; padding: 10px 58px 14px 52px;background-color: #2874f0; ">HOME</button>
        </a> 

  </div>
</div>
</div>
</div>
<br>
<br>

<div class="container">


<div class="container">
        <div class="row">
          <div class="col-md-2" ><br>
            <a style="position: fixed; margin-top:180px; right: 20px;" href="logout.php">
               <button type="button" class="btn btn-primary btn-lg">logout</button>
            </a>
          </div>
        </div>


<?php
session_start();
include('connection.php');
$p=$_SESSION['name'];
$r=$_SESSION['name'];
$y=1;
$query="select * from orders,product where or_status='$y' and orders.pr_id=product.pr_id and orders.sh_id=product.sh_id";
  $result=mysqli_query($dbc,$query);
  $num=mysqli_num_rows($result); 
  $sum=0;
  if ($num>0) 
    {
     while($row =mysqli_fetch_array($result)) 
         {
          
    
              
          echo "

      <div class='row' style='margin-top: 23px;'> 
      <div class='row' style='background-color: #0099CC; margin-bottom: 23px;'>
       <img src='".$row['pr_image']."' alt='+' height='150' width='150' style='margin-top:20px;margin-left:153px;'>
       
        <div class = 'form-group'>

      <label for='txtUsername'  class = 'col-lg-3 control-label' style='font-size:25px; margin-left:300px;margin-top:-90px;'>".$row['pr_name']."</label 
      </div>
      </div>
      </div>
     <div class='row'>
      <div class='col-md-11' style='font-size:20px; margin-left:900px; margin-top:-135px;'>
      <form method='post' action='served.php'>
              <input type='hidden' value='".$row['pr_id']."' name='serve'/>
              <input type='hidden' value='".$row['cu_id']."' name='l'/>
              <button type='submit'>serve order</button>
              </form></div>
      <div class='col-md-11'>
        <label for='txtUsername' class = 'col-lg-2 control-label' style='margin-left:665px;margin-top:-133px;'>Quantity:".$row['or_quant']."</label> 
      </div></div>
      </div><br>
      <div class='row'>
      <div class='col-md-11'>
        <label for='txtUsername' class = 'col-lg-2 control-label' style='margin-left:650px;margin-top:-133px;'>Products Cost:".$row['or_billamount']."</label> 
      </div>
      </div>    
             



          ";
$sum=$sum+$row['or_billamount'];
        }
  echo "<b><div style='text-align:center; font-size:34px; background-color:#00FF00;'>The total Amount to be Collected: ".$sum."</div></b>";      
    }

?>



      </div>
    </div>


      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
































