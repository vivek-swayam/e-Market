

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Customer Sign Up</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
      body
        {
          background-color:#66CCFF;
        }
    </style>
  </head>
  <body>
  <br>
  <br>


<div class="container">
        <div class="row">
          <div class="col-md-2" >
            <a style="position: fixed; top: 450; right: 20px;" href="e-M-Home.php">
               <button type="button" class="btn btn-primary btn-lg">Existing user</button>
            </a><br>
          </div>
        </div>


  <form name="CustSignUp" method="post" action="CustSignUpnext.php">
    <font size="8" style="margin-left:410px;"><b>Customer Registration Form</b></font>
  <div class="container" style="margin:110px 310px 250px 308px">
    <div class="row">
    <div class = "form-group">

	<div class="col-md-2">

	  <label for="txtUsername" class = "col-lg-2 control-label" style="margin-left:110px;margin-top:4px;">Name:</label> 
      </div>
    <div class="col-md-4">
      <input class = "form-control input-block-level" type="text" title="Enter your Username" name="name" placeholder = "Enter your name"  />
    </div>
  </div>
  </div>
  <br>
   
   
  <div class="row">
    <div class = "form-group">
      <div class="col-md-2">
        <label for="txtUsername" class = "col-lg-2 control-label"style="margin-left: 96px;
margin-top: 9px;" >UserID:</label> 
      </div>
    <div class="col-md-4">
      <input class = "form-control input-block-level" type="text" title="Enter your Username" name="id" placeholder = "UserID"  />
    </div>
  </div>
  </div>
  <br>
  <div class="row">
    <div class = "form-group">
      <div class="col-md-2">
        <label for="txtUsername" class = "col-lg-2 control-label"style="margin-left:80px;margin-top:6px;" >password:</label> 
      </div>
    <div class="col-md-4">
      <input class = "form-control input-block-level" type="password" title="Enter your Username" name="pass1" placeholder = "Enter your password"  />
    </div>
  </div>
  </div>
  <br>
  
  <div class="row">
    <div class = "form-group">
      <div class="col-md-2">
        <label for="txtUsername" class = "col-lg-2 control-label"style="margin-left:96px;margin-top:6px;" >reEnter:</label> 
      </div>
    <div class="col-md-4">
      <input class = "form-control input-block-level" type="password" title="Enter your Username" name="pass2" placeholder = "reEnter the password"  />
    </div>
  </div>
  </div>
  <br>
    <div class="row">
    <div class = "form-group">
      <div class="col-md-2">
        <label for="txtUsername" class = "col-lg-2 control-label" style="margin-left:89px;margin-top:4px;">address:</label> 
      </div>
    <div class="col-md-4">
      <textarea style="width:600px;height:200px;" name="add"></textarea>
    </div>
  </div>
  </div>
  <br>
  <div class="row">
    <div class = "form-group">
      <div class="col-md-2">
        <label for="txtUsername" class = "col-lg-2 control-label" style="margin-left:110px;margin-top:4px;">city:</label> 
      </div>
    <div class="col-md-4">
       <input class = "form-control input-block-level" type="text" title="Enter your Username" name="city" placeholder = "Enter the city"  />
    </div>
  </div>
  </div>
  <br>
   <div class="row">
    <div class = "form-group">
      <div class="col-md-2">
        <label for="txtUsername" class = "col-lg-2 control-label" style="margin-left:76px;margin-top:4px;">mobileno:</label> 
      </div>
    <div class="col-md-4">
       <input class = "form-control input-block-level" type="text" title="Enter your Username" name="no" placeholder = "Enter the phoneno"  />
    </div>
  </div>
  </div>
  <br>
  <div class="row">
    <div class = "form-group">
    <button type="submit" class="btn btn-primary" style="margin-left: 210px;">Submit</button>
    </div>
    </div>
   </div>
   </form>
  

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>