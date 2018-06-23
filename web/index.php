<!--TalentEd LogIn Template-->
<!DOCTYPE html>
<html lang="en">
  <head>
	  <script src="/views/login.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TalentEd | LogIn</title>
    <link rel="icon" href="https://cdn.glitch.com/2510be4b-441e-4689-8be2-29be95d39431%2Fnewlogo.png?1529281742869"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
       body {background: url("https://www.freevector.com/uploads/vector/preview/9458/FreeVector-City-Skyscrapers-Buildings-Vector.jpg");}
    </style>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/stylesheets/style_main.css">
	  <script src="/views/script_main.js"></script>
  </head>
  <body>
  <div class="topnav" id="myTopnav">
  <a href="/views/about.html" class="active">About</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
	  
	  
	  
	  
    <div class="content">
      <div class="login-section">
        <img src="https://cdn.glitch.com/2510be4b-441e-4689-8be2-29be95d39431%2Fnewlogo.png?1529281742869" class="pic">
        <h1>TalentEd Login</h1>
        <form>
          <input type="text" name="username" placeholder="Talented ID" id="username">
          <input type="password" name="password" placeholder="Password" id="password">
	  <input style="width: 250px; padding: 20px; cursor: pointer; box-shadow: 6px 6px 5px; #999; -webkit-box-shadow: 6px 6px 5px #999; -moz-box-shadow: 6px 6px 5px #999; font-weight: bold; background: darkgrey; color: #000; border-radius: 10px; border: 1px solid #999; font-size: 150%;" type="button" value="Login" onclick="window.location.href='http://www.mytalented.com/views/logged.html'" />
          <a href="/views/lostPassword.php">Lost your password?</a><br>
          <a href="/views/signup.html">Don't have an account?</a>
          <center><p> &copy; 2018 TalentEd</p></center> 
          <center><p> &copy; Powered by Inv Technologies.</p></center> 
        </form>
      </div>
    </div>

  </body>
</html>
