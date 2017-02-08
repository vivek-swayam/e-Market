<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">   
    <title>Shopkeeper adding</title>    
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  
  <body style="background-image:url(background.jpg); color:white">
    <form method="post" action="productadd.php">
    <div class="container"  style="margin:90px 0px 0px 200px">
        <div class="row">  
          <div class = "form-group">
             <div class="col-md-2">
              <label for="txtUsername" class = "col-lg-3 control-label" style="margin-left:74px;margin-top:4px;">Image Location:</label> 
            </div>
            <div class="col-md-4">
              <input class = "form-control input-block-level" type="text" title="Enter your Product name" name="iloc" placeholder = "Please paste your Product's Image Location Here!"  />
            </div><br><br><br>
            <div class="col-md-2">
              <label for="txtUsername" class = "col-lg-3 control-label" style="margin-left:74px;margin-top:4px;">Product ID:</label> 
            </div>
            <div class="col-md-4">
              <input class = "form-control input-block-level" type="text" title="Enter your Product name" name="prid" placeholder = "Please enter a unique Product ID"  />
            </div><br><br><br><br>
            <div class="col-md-2">
              <label for="txtUsername" class = "col-lg-3 control-label" style="margin-left:74px;margin-top:4px;">Productname:</label> 
            </div>
            <div class="col-md-4">
              <input class = "form-control input-block-level" type="text" title="Enter your Product name" name="pname" placeholder = "Enter your Product name"  />
            </div>
         </div>
         <br><br>
         <br>
         <div class = "form-group">
            <div class="col-md-2">
              <label for="txtUsername" class = "col-lg-3 control-label" style="margin-left:85px;margin-top:-5px;">Product description:</label> 
            </div>
            <div class="col-md-4" style="margin-top:-6px;">
              <textarea style="width:600px;height:200px; color:black;" name="pdesc"></textarea>
            </div>
         </div>
        <br><br>
        <div class = "form-group" style="margin-top:196px;">
            <div class="col-md-2">
              <label for="txtUsername" class = "col-lg-2 control-label" style="margin-left:107px;margin-top:-16px;">Quantity:</label> 
            </div>
            <div class="col-md-4" style="margin-top:-25px;">
               <input class = "form-control input-block-level" type="text" title="Enter your Product name" name="pquant" placeholder = "Enter Quantity"  />
            </div>
        </div>
        <br><br>
        <div class = "form-group" style="margin-top:13px;">
            <div class="col-md-2">
              <label for="txtUsername" class = "col-lg-2 control-label" style="margin-left:107px;margin-top:-16px;">Cost:</label> 
            </div>
            <div class="col-md-4" style="margin-top:-25px;">
              <input class = "form-control input-block-level" type="text" title="Enter your Product name" name="pcost" placeholder = "Enter single Product Cost"  />
            </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class = "form-group">
          <button type="submit" class="btn btn-primary" style="margin-left: 209px;">Add this item</button>
        </div>
      </div>  
    </div>    
  </form>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>     
      <script src="js/bootstrap.min.js"></script>
    </body>

</html>