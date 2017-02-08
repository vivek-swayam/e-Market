<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Bootstrap 101 Template</title>

    
    <link href="css/bootstrap.min.css" rel="stylesheet">

    
  </head>
  <body>
      <div style="background-color:#2874f0;height: 142px;width: 1366px;">

    <div class="container">
  <div class="row">
  
        <div class="col-md-10" style="margin-left: 60px;margin-top:46px;">
        <font size="6" style="margin-left: -142px;color: white;font-family:Forte;">e-market</font>
            <div id="custom-search-input">
                <div class="input-group col-md-12" style="margin-top: -46px; margin-left: 12px;">
                    <input type="text" class="form-control input-lg" placeholder="Search" />
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="button">
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
</div>
<br>
<br>

<?php
  session_start();
  include('connection.php');
  $query="select * from products";
  $result=mysqli_query($dbc,$query);
  $num=mysqli_num_rows($result); 
  
  if ($num>0) 
    {
     while($row =mysqli_fetch_array($result)) 
         {
          echo "<div class=col-md-4><img src='".$row['sh_image']."' /><br>".'<a href="e-M-Products.php">Hello</a></div>';
         }
    }
  
?>

<div class="container">
        <div class="row">
          <div class="col-md-2" >
            <a style="position: fixed; top: 450; right: 20px;" href="add to shop.php">
               <button type="button" class="btn btn-primary btn-lg">(+) Add Product</button>
            </a><br>
            <a style="position: fixed; margin-top:180px; right: 20px;" href="logout.php">
               <button type="button" class="btn btn-primary btn-lg">logout</button>
            </a>
          </div>
        </div>
        
<?php
  session_start();
  include('connection.php');
  $pn=$_SESSION['name'];
  $query="select * from product where sh_id='$pn'";
  $result=mysqli_query($dbc,$query);
  $num=mysqli_num_rows($result); 
  if ($num>0) 
    {
     
     while($row = $result->fetch_assoc()) 
         {

             echo "<tr><td>" . $row["id"]. "</td><td>" . $row["firstname"]. " " . $row["lastname"]. "</td></tr>";
         }
     
    }
  
?>





































        <div class="row">
         
          <div class="col-md-4">
        <img src="par.jpg" style="margin-top: 20px;height: 200px;width: 200px;">
        <br>
       <div class="row" style="margin-top:20px;margin-left:31px;">
    <div class = "form-group">
      <div class="col-md-2">
        <label for="txtUsername" class = "col-lg-2 control-label"style="margin-left: -15px;
margin-top: -3px;" >New Stock(+):</label> 
      </div>
    <div class="col-md-3" style="margin-left:8px;">
      <input class = "form-control input-block-level" type="text" title="Enter your Username" name="txtUsername" placeholder = "no"  />
    </div>
  </div>
  </div>
    <div class = "form-group"style="margin-top:20px;margin-left:31px;">
      <div class="col-md-2">
        <label for="txtUsername" class = "col-lg-2 control-label"style="margin-left: -15px;
margin-top: -3px;" >Damaged Stock(-):</label> 
      </div>
    <div class="col-md-3" style="margin-left:13px;">
      <input class = "form-control input-block-level" type="text" title="Enter your Username" name="txtUsername" placeholder = "no"  />
    </div>
  </div>
          </div>
          <div class="col-md-4">
            <img src="par.jpg" style="margin-top: 20px;height: 200px;width: 200px;">
        <br>
       <div class="row" style="margin-top:20px;margin-left:31px;">
    <div class = "form-group">
      <div class="col-md-2">
        <label for="txtUsername" class = "col-lg-2 control-label"style="margin-left: -15px;
margin-top: -3px;" >New Stock(+):</label> 
      </div>
    <div class="col-md-3" style="margin-left:8px;">
      <input class = "form-control input-block-level" type="text" title="Enter your Username" name="txtUsername" placeholder = "no"  />
    </div>
  </div>
  </div>
    <div class = "form-group"style="margin-top:20px;margin-left:31px;">
      <div class="col-md-2">
        <label for="txtUsername" class = "col-lg-2 control-label"style="margin-left: -15px;
margin-top: -3px;" >Damaged Stock(-):</label> 
      </div>
    <div class="col-md-3" style="margin-left:13px;">
      <input class = "form-control input-block-level" type="text" title="Enter your Username" name="txtUsername" placeholder = "no"  />
    </div>
  </div>
          </div>
          <div class="col-md-4">
            <img src="par.jpg" style="margin-top: 20px;height: 200px;width: 200px;">
        <br>
       <div class="row" style="margin-top:20px;margin-left:31px;">
    <div class = "form-group">
      <div class="col-md-2">
        <label for="txtUsername" class = "col-lg-2 control-label"style="margin-left: -15px;
margin-top: -3px;" >New Stock(+):</label> 
      </div>
    <div class="col-md-3" style="margin-left:8px;">
      <input class = "form-control input-block-level" type="text" title="Enter your Username" name="txtUsername" placeholder = "no"  />
    </div>
  </div>
  </div>
    <div class = "form-group"style="margin-top:20px;margin-left:31px;">
      <div class="col-md-2">
        <label for="txtUsername" class = "col-lg-2 control-label"style="margin-left: -15px;
margin-top: -3px;" >Damaged Stock(-):</label> 
      </div>
    <div class="col-md-3" style="margin-left:13px;">
      <input class = "form-control input-block-level" type="text" title="Enter your Username" name="txtUsername" placeholder = "no"  />
    </div>
  </div>
          </div>

          <div class="row">
            <div class="col-md-4" style="margin-top:50px;">
            <img src="par.jpg" style="margin-top: 20px;height: 200px;width: 200px;">
        <br>
       <div class="row" style="margin-top:20px;margin-left:31px;">
    <div class = "form-group">
      <div class="col-md-2">
        <label for="txtUsername" class = "col-lg-2 control-label"style="margin-left: -15px;
margin-top: -3px;" >New Stock(+):</label> 
      </div>
    <div class="col-md-3" style="margin-left:8px;">
      <input class = "form-control input-block-level" type="text" title="Enter your Username" name="txtUsername" placeholder = "no"  />
    </div>
  </div>
  </div>
    <div class = "form-group"style="margin-top:20px;margin-left:31px;">
      <div class="col-md-2">
        <label for="txtUsername" class = "col-lg-2 control-label"style="margin-left: -15px;
margin-top: -3px;" >Damaged Stock(-):</label> 
      </div>
    <div class="col-md-3" style="margin-left:13px;">
      <input class = "form-control input-block-level" type="text" title="Enter your Username" name="txtUsername" placeholder = "no"  />
    </div>
  </div>
          </div>
          <div class="col-md-4"  style="margin-top:50px;">
            <img src="par.jpg" style="margin-top: 20px;height: 200px;width: 200px;">
        <br>
       <div class="row" style="margin-top:20px;margin-left:31px;">
    <div class = "form-group">
      <div class="col-md-2">
        <label for="txtUsername" class = "col-lg-2 control-label"style="margin-left: -15px;
margin-top: -3px;" >New Stock(+):</label> 
      </div>
    <div class="col-md-3" style="margin-left:8px;">
      <input class = "form-control input-block-level" type="text" title="Enter your Username" name="txtUsername" placeholder = "no"  />
    </div>
  </div>
  </div>
    <div class = "form-group"style="margin-top:20px;margin-left:31px;">
      <div class="col-md-2">
        <label for="txtUsername" class = "col-lg-2 control-label"style="margin-left: -15px;
margin-top: -3px;" >Damaged Stock(-):</label> 
      </div>
    <div class="col-md-3" style="margin-left:13px;">
      <input class = "form-control input-block-level" type="text" title="Enter your Username" name="txtUsername" placeholder = "no"  />
    </div>
  </div>
          </div>
          <div class="col-md-4"  style="margin-top:50px;">
            <img src="par.jpg" style="margin-top: 20px;height: 200px;width: 200px;">
        <br>
       <div class="row" style="margin-top:20px;margin-left:31px;">
    <div class = "form-group">
      <div class="col-md-2">
        <label for="txtUsername" class = "col-lg-2 control-label"style="margin-left: -15px;
margin-top: -3px;" >New Stock(+):</label> 
      </div>
    <div class="col-md-3" style="margin-left:8px;">
      <input class = "form-control input-block-level" type="text" title="Enter your Username" name="txtUsername" placeholder = "no"  />
    </div>
  </div>
  </div>
    <div class = "form-group"style="margin-top:20px;margin-left:31px;">
      <div class="col-md-2">
        <label for="txtUsername" class = "col-lg-2 control-label"style="margin-left: -15px;
margin-top: -3px;" >Damaged Stock(-):</label> 
      </div>
    <div class="col-md-3" style="margin-left:13px;">
      <input class = "form-control input-block-level" type="text" title="Enter your Username" name="txtUsername" placeholder = "no"  />
    </div>
  </div>
          </div>
          </div>
          </div>
          </div>

    </div>
        </div>
      </div>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

























