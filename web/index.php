<!--TalentEd LogIn Template-->
<!DOCTYPE html>
<html lang="en">
  <head>
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
	  
  </head>
  <body>
  <div class="topnav" id="myTopnav">
  <a href="/views/about.html" class="active">About</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
</script>
<script language="javascript">
<!--//
/*This Script allows people to enter by using a form that asks for a
UserID and Password*/
function pasuser(form) {
if (form.id.value=="admin") { 
if (form.pass.value=="admin") {              
location="http://www.mytalented.com/views/logged.php" 
} else {
alert("Invalid Password")
}
} else {  alert("Invalid UserID")
}
}
//-->
</script>	  
	  
	  
	  
    <div class="content">
      <div class="login-section">
        <img src="https://cdn.glitch.com/2510be4b-441e-4689-8be2-29be95d39431%2Fnewlogo.png?1529281742869" class="pic">
        <h1>TalentEd Login</h1>
        <form  method="post">
          <input type="text" name="id" placeholder="Talented ID" >
          <input type="password" name="pass" placeholder="Password">
          <input type="button" value="Login">
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
