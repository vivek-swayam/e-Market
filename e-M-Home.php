<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>e-Market</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

     <link href="DB.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="BackGround">

    <div class="container">

      <div class="row MainHeading blue1">
        <h1 id="">e-Market</h1>
      </div>

      <div class="row">
        <div class="col-md-6 colhead blue2">
          <h2>Shopkeeper</h2><br><br>
          <form method="post" action="action_page1.php">
            Shop ID:<br>
            <input class="input" type="text" name="firstname">
            <br><br>
            Password:<br>
            <input class="input" type="password" name="lastname">
            <br><br>
            <button class="btn" type="submit">Log In</button>
            <br><br>
            <a href="ShopSignUp.php">New Shop? JoinUs</a>
          </form><br>
        </div>
        
		<div class="col-md-6 colhead blue3">
          <h2>Customer</h2><br><br>
          <form method="post" action="action_page2.php">
            Username:<br>
            <input class="input" type="text" name="firstname">
            <br><br>
            Password:<br>
            <input class="input" type="password" name="lastname">
            <br><br>
            <input class="btn" type="submit" value="Log In">
            <br><br>
            <a href="CustSignUp.php">New User? SignUp</a>
          </form><br>
        </div>
      </div>

      <div class="row">
        <marquee scrollamount="17" behavior="scroll" direction="left">
          <img border="0" alt="img" src="m10.jpg" width="250" height="150">
          <img border="0" alt="img" src="m2.jpg" width="250" height="150">
          <img border="0" alt="img" src="m4.jpg" width="250" height="150">
          <img border="0" alt="img" src="m3.jpg" width="250" height="150">
          <img border="0" alt="img" src="m6.jpg" width="250" height="150">
          <img border="0" alt="img" src="m9.jpg" width="250" height="150">
          <img border="0" alt="img" src="m5.jpg" width="250" height="150">
          <img border="0" alt="img" src="m7.jpg" width="250" height="150">
          <img border="0" alt="img" src="m8.jpg" width="250" height="150">
          <img border="0" alt="img" src="m1.jpg" width="250" height="150">
        </marquee>
      </div>
      <div class="row blue4">
        <h4 style="color:white; text-align:center; font-family:andalus;">All Rights Resrerved.</h4>
      </div>
      <div class="row blue1"><br><br>
        <h3 style="color:white; text-align:center; font-family:andalus;"><u>Developed and Crafted by</u> <br><br>V.P.S.Vivek {CSE14120}   <br><br>  B.S.P Manikanta {CSE14511}   <br><br>  Y Sai Nath R V S N {CSE14126} <h3>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>