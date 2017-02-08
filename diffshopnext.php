<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Different Shops</title>    
    <link href="css/bootstrap.min.css" rel="stylesheet">   
    <style>
      img{width: 200px; height:200px; margin-top: 30px; }
    </style> 

    

  </head>
  
  <body style="background-color: #CCFFCC;">
    <div style="background-color:#2874f0;height: 142px;width: 1366px;">

    <div class="container">
  <div class="row">
  
        <div class="col-md-10" style="margin-left: 60px;margin-top:46px;">
        <font size="6" style="margin-left: -142px;color: white;font-family:Forte;">e-market</font>
            <div id="custom-search-input">                  <form method="post" action="diffshopnext.php">
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
        <div class="col-md-1"><br><br><b>
       <?php
       session_start();
       echo 'Welcome, '.$_SESSION['name'];
       ?></b>

  </div>
</div>
</div>
</div><br><br>

<div class="container">
        <div class="row">
          <div class="col-md-2" >
            <a style="position: fixed; top: 450; right: 20px;" href="cartother.php">
               <button type="button" class="btn btn-primary btn-lg">Cart</button>
            </a><br>
            <a style="position: fixed; margin-top:180px; right: 20px;" href="logout.php">
               <button type="button" class="btn btn-primary btn-lg">logout</button>
            </a>
          </div>
        </div>


<?php
  //session_start();
  include('connection.php');
  $r=$_POST['search'];
  $s='%'.$r.'%';

  $query="select * from shop where sh_name like '$s'";
  $result=mysqli_query($dbc,$query);
  $num=mysqli_num_rows($result); 
  
  if ($num>0) 
    {
     while($row =mysqli_fetch_array($result)) 
         {
          echo "<div class=col-md-3 style='background-color:#0099CC; margin-left:60px; margin-top:23px;'><img src='".$row['sh_image']."' /><br>";
          echo "
          <form method='post' action='e-M-Products.php'>
          <input type='hidden' name='a' value='".$row['sh_id']."'/>
          <div style='margin-left:60px;'><input type='submit' value='".$row['sh_name']."'/></div>
          </form></div>";
          //echo "<a href='e-M-Products.php'><input type='button' value='hello' onClick=".fun($a);.";/></a></div>";   
        }

    }
?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>