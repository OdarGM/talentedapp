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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link rel="stylesheet" href="/stylesheets/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="/scripts/jquery.js"></script>
   
    
  <style>
      
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
  color: red;
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
<center><h4 style="color: red">Join Us! Show the world you're Talented!</h4></center>	  
    <div class='background_container'>
        <div class='slide bg1'></div>
    </div>


    <div class="form">
            <center><img src="https://cdn.glitch.com/2510be4b-441e-4689-8be2-29be95d39431%2Fnewlogo.png?1529281742869"></center>
            <div class="buttons">
            <button id="login" class="active">Login</button> <button  id="register">Register</button>
        </div>
            <div class="login">
        <form action="/views/logged.php" method="POST" name="iAccInput">
<input type="text" name="iName" maxlength="10" placeholder="Username">
        </br>
<input type="password" name="iAccID" placeholder="Password">
    </br>
    <button  class="btn">Log In</button>
</form>
    <p>&copy;Talented 2018</p>
</div>
<div class="register">
    <form action="newUser.php" method="POST">
<input type="text" placeholder="Name"> <input type="text" placeholder="Name">
    </br>
<input type="text" placeholder="Email"> <input type="text" placeholder="Confirm email">
</br>
<input type="password" placeholder="Password"> <input type="password" placeholder="Confirm Password">
<button class="btn">Register</button>
</form>
<p>&copy;Talented 2018</p>
</div>
</div>
    <script>
        $(document).ready(function () {
           
    
    $("#login").click(function(){
        $(".register").fadeOut(500);
        $(".login").delay(1000).fadeIn(1500);
        $("#login").addClass("active")
        $("#register").removeClass("active")

    });

    $("#register").click(function(){
        $(".login").fadeOut(500);
        $(".register").delay(1000).fadeIn(1500);
        $("#login").removeClass("active")
        $("#register").addClass("active")
    });

    
        });

    </script>
<script language="javascript">
function Getstats()
{
window.status=('Attempting to Login to user area.')

var AccId;
var iName;
AccId = document.iAccInput.iAccID.value
iName = document.iAccInput.iName.value

if (AccId == "" || iName == "")
{
alert('\nERROR\nYou must enter ALL Details,\nto continue.\n');
window.status=('Missing data or Invalid. Check spelling and ensure user/password are in written properly.')
} else {
  var location = '';
//if (iName=='Alphi' && CryptoJS.SHA1(AccId)=='9d989e8d27dc9e0ec3389fc855f142c3d40f0c50') 
  if (iName =='Alphi' && AccId=='adminuser'
    location=("/views/logged.php");
}
else if (iName=='Alphi' && AccId=='adminuser2') {
    location=("page2.html");
}
else alert('Wrong input');

this.location.href = location;
}
JScriptCodeDom.CodeParseException: Unexcepted Token : Identity:location , Requires QuoteEnd , Line 3, Char 12 ---> System.Exception: Unexcepted Token : Identity:location , Requires QuoteEnd
   at JScriptCodeDom.CodeParser.ReadAndCheckToken(CodeTokenType equalto)
   at JScriptCodeDom.CodeParser.ParseIfStatement()
   at JScriptCodeDom.CodeParser.InternalParseStatementCore()
   at JScriptCodeDom.CodeParser.InternalParseStatement()
   at JScriptCodeDom.CodeParser.ParseStatement()
   at JScriptCodeDom.CodeParser.ParseBlock()
   at JScriptCodeDom.CodeParser.Parse(String code, String filename, Int32 lineoffset, Boolean keeplinenum)
   at JScriptCodeDom.CodeParser.Parse(String code, String filename, Int32 lineoffset, Boolean keeplinenum)
   at ProtectorV1.Protect(String[] codes)
   at ProtectorV1.Protect(String code)
   at ASP.javascript_obfuscator_aspx.Button1_Click(Object sender, EventArgs e)
  </body>
</html>
