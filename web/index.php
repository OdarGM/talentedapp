<!--TalentEd LogIn Template-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TalentEd | Login</title>
    <link rel="icon" href="https://cdn.glitch.com/2510be4b-441e-4689-8be2-29be95d39431%2Fnewlogo.png?1529281742869"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
       body {background: url("https://www.freevector.com/uploads/vector/preview/9458/FreeVector-City-Skyscrapers-Buildings-Vector.jpg");}
       @import url(http://fonts.googleapis.com/css?family=Raleway);
#cssmenu,
#cssmenu ul,
#cssmenu ul li,
#cssmenu ul li a {
  margin: 0;
  padding: 0;
  border: 0;
  list-style: none;
  line-height: 1;
  display: block;
  position: relative;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
#cssmenu:after,
#cssmenu > ul:after {
  content: ".";
  display: block;
  clear: both;
  visibility: hidden;
  line-height: 0;
  height: 0;
}
#cssmenu {
  width: auto;
  border-bottom: 3px solid #47c9af;
  font-family: Raleway, sans-serif;
  line-height: 1;
}
#cssmenu ul {
  background: #ffffff;
}
#cssmenu > ul > li {
  float: left;
}
#cssmenu.align-center > ul {
  font-size: 0;
  text-align: center;
}
#cssmenu.align-center > ul > li {
  display: inline-block;
  float: none;
}
#cssmenu.align-right > ul > li {
  float: right;
}
#cssmenu.align-right > ul > li > a {
  margin-right: 0;
  margin-left: -4px;
}
#cssmenu > ul > li > a {
  z-index: 2;
  padding: 18px 25px 12px 25px;
  font-size: 15px;
  font-weight: 400;
  text-decoration: none;
  color: #444444;
  -webkit-transition: all .2s ease;
  -moz-transition: all .2s ease;
  -ms-transition: all .2s ease;
  -o-transition: all .2s ease;
  transition: all .2s ease;
  margin-right: -4px;
}
#cssmenu > ul > li.active > a,
#cssmenu > ul > li:hover > a,
#cssmenu > ul > li > a:hover {
  color: #ffffff;
}
#cssmenu > ul > li > a:after {
  position: absolute;
  left: 0;
  bottom: 0;
  right: 0;
  z-index: -1;
  width: 100%;
  height: 120%;
  border-top-left-radius: 8px;
  border-top-right-radius: 8px;
  content: "";
  -webkit-transition: all .2s ease;
  -o-transition: all .2s ease;
  transition: all .2s ease;
  -webkit-transform: perspective(5px) rotateX(2deg);
  -webkit-transform-origin: bottom;
  -moz-transform: perspective(5px) rotateX(2deg);
  -moz-transform-origin: bottom;
  transform: perspective(5px) rotateX(2deg);
  transform-origin: bottom;
}
#cssmenu > ul > li.active > a:after,
#cssmenu > ul > li:hover > a:after,
#cssmenu > ul > li > a:hover:after {
  background: #47c9af;
}

    </style>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/stylesheets/style_main.css">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	  
  </head>
  <body>
<div id='cssmenu'>
<ul>
   <li class='active'><a href='http://mytalented.com/'>Home</a></li>
   <li><a href='#'>Products</a></li>
   <li><a href='/views/about.html'>About Us</a></li>
   <li><a href='http://status.mytalented.com/'>Systems Status</a></li>
</ul>
</div>
	  
	  <center><h4 style="color: white">Join Us! Show the world you're Talented!</h4></center>	  
	  
    <div class="content">
      <div class="login-section">
        <img src="https://cdn.glitch.com/2510be4b-441e-4689-8be2-29be95d39431%2Fnewlogo.png?1529281742869" class="pic">
        <h1>TalentEd LogIn</h1>
        <form  action="/views/logged.php" method="post">
          <input type="text" name="id" placeholder="Talented ID" >
          <input type="password" name="pass" placeholder="Password">
          <input type="submit" value="Login">
          <a href="/views/lostPassword.php">Lost your password?</a><br>
          <a href="/views/signup.html">Don't have an account?</a>
          <center><p> &copy; 2018 TalentEd</p></center> 
          <center><p> &copy; Powered by Inv Technologies.</p></center> 
        </form>
      </div>
    </div>
<script>
	var attempt = 3; // Variable to count number of attempts.
// Below function Executes on click of login button.
function validate(){
var username = document.getElementById("username").value;
var password = document.getElementById("password").value;
if ( username == "devtesting" && password == "devadmin"){
alert ("Login successfully");
window.location = "/views/logged.html"; // Redirecting to other page.
return false;
}
else{
attempt --;// Decrementing by one.
alert("You have left "+attempt+" attempt;");
// Disabling fields after 3 attempts.
if( attempt == 0){
document.getElementById("username").disabled = true;
document.getElementById("password").disabled = true;
document.getElementById("login").disabled = true;
return false;
}
}
}


  </body>
</html>
