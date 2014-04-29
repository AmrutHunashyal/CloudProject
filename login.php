<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title></title>
<?php
include("index.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$myusername=addslashes($_POST['username']);
$mypassword=addslashes($_POST['password']);
$sql="SELECT id FROM admin WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$active=$row['active'];
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{
session_register("myusername");
$_SESSION['login_user']=$myusername;
header("location: home1.php");
}
else
{
    echo "<script>
            alert('Invalid Adminname And Password!!!');
            window.location.href='login.php'
            </script> ";
}
$myusername2=addslashes($_POST['username']);
$mypassword2=addslashes($_POST['password']);
$sql2="SELECT id FROM student WHERE username2='$myusername' and password2='$mypassword'";
$result2=mysql_query($sql2);
$row2=mysql_fetch_array($result2);
$active2=$row2['active'];
$count2=mysql_num_rows($result2);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count2==1)
{
session_register("myusername2");
$_SESSION['login_user']=$myusername2;
header("location: home2.php");
}
else
{
     echo "<script>
            alert('Invalid Username And Password!!!');
            window.location.href='login.php'
            </script> ";
}
}
?>
<script type='text/javascript'>
function validate()
{
var op=document.getElementById("operator").value;
op=parseInt(op);
if(op==0)
{
var x=document.forms["login"]["username"].value
var y=document.forms["login"]["password"].value
if(x==null && y==null || x=="" && y=="")
    {
        alert("Adminname and password Cannot Be Left Blank.");
        return false;
    }
if (x==null || x=="")
{
alert("Adminname Cannot Be Left Blank.");
return false;
}
if (y==null || y=="")
{
alert("password Cannot Be Left Blank.");
return false;
}
else
{
return true;
}
}
else  if(op==1)
{
    var x2=document.forms["login"]["username"].value
var y2=document.forms["login"]["password"].value
if(x2==null && y2==null || x2=="" && y2=="")
    {
        alert("Username and password Cannot Be Left Blank.");
        return false;
    }
if (x2==null || x2=="")
{
alert("Username Cannot Be Left Blank.");
return false;
}
if (y2==null || y2=="")
{
alert("password Cannot Be Left Blank.");
return false;
}
else
{
return true;
}
}
else
    {
        alert("Select the type of login first.");
        return false;
    }
}

function log()
{
    this.close();
}

function nextpage()
{
    window.location.assign("newstudent.php");
}
</script>
    <style type="text/css">
        .one{
     text-align:center;

            background-color: cornflowerblue;

           margin-top: 7px;
            margin-left: 7px;
            margin-right: 7px;
            margin-bottom: 7px;
}
.two{
            font-size: 20px;
            font: bolder;
}

    </style>
  </head>
  <body bgcolor="lightskyblue">
      <form action="" method="post" name="login" onsubmit=" return validate();" >
          <h1 align="center"><img src="images1.bmp" width="180" height="135"  align="left" style=" margin-top: -6">
              K.L.E Society's<br>B.V.Bhoomraddi College of Engineering & Technology <br> Hubli-580031</h1>
          <h1 align="center" style=" background:  orange"><i><marquee>ONLINE CAREER APTITUDE TEST</marquee></i></h1>
      <marquee><h1><i>Welcome to career aptitude test</i></h1></marquee>
  <p></p>
  <p></p>
  <p></p>
  <p></p>
  <p></p>
  <p></p>
  <p></p>
  <p></p>
  <p></p>
  <p></p>
  <p></p>
  <p></p>
   <p></p>
  <p></p>
  <p></p>
  <table align="center">
      <tr>
          <td rowspan="6">
         <img src="login.png" width="360" height="310" id="rotator">
          </td>
          <td>
              <label class="two"><b>Select Which Type Login:</b><br></label>
                  <br>
                   <select name="operator" id="operator">
           <option value="-1"> Select Login type </option>
           <option name="admin" value="0">Admin Login </option>
           <option name="user" value="1">User Login</option>
        </select>
              <br>
              <br>
              <b class="two">Login here using your username and password</b></td>
          <td></td>
           <td></td>
            <td></td>
             <td></td>
              <td></td>
               <td></td>
                <td></td>
                 <td></td>
                  <td></td>
                   <td></td>
                    <td></td>
                     <td></td>
                     <td rowspan="6" class="two"><b>Is this first time here??</b><br>Hi!! for full acess u l need to take a minute to create a
                         <br>new account for urself on this website.Here are the steps.<br><br>
                         1. Fill out the NEW ACCOUNT form with ur details.<br>2.An email ll be immediately sent to ur emailid.<br>
                         3.Read ur mail and click on the web link it contains.<br>4.Your account ll be confirmed and u ll be logged in.<br>
                         5.You can access the full courses.from now on u ll<br>only need to enter yourpersonal  username and password<br> to login.
                         <br><input type="button" value="create new account"  onclick="nextpage()">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                     </td>

      </tr>
      <tr>
          <td><b class="two">UserName</b> <input type="text" name="username" autofocus ></td>
      </tr>
      <tr>
          <td><b class="two">Password</b> <input type="password" name="password" style=" margin-left: 10px"><br>
              <br>

              <input type="submit"  name="admin" value="Login" style="margin-left: 120px;"> &nbsp;
              <input type="button" value="Exit" onclick="log()">
          </td>
      </tr>
  </table>
  <p></p>

 <h4 align="center" style=" background:orange "><i>Get ready for quiz!!!!......</i></h4>
      </form>
      </body>
</html>
