<html>
  <head>
    <title></title>
        <script type="text/javascript">
function log()
{
    this.close();
}
    </script>
    <style type="text/css">
        .one2
        {
     text-align:center;
            background-color: cornflowerblue;
           margin-top: 7px;
            margin-left: 7px;
            margin-right: 7px;
            margin-bottom: 7px;

}
.two{
      background-image: url("black.jpg");
     background-repeat: no-repeat;
     width: 1224px;
    }

.one{
            background-color:transparent;
            background-repeat: no-repeat;
            font-family:chiller;
            font-size: 105px;
            font: bolder;
}
ul
{
float:left;
width:100%;
padding:0;
margin-top: -20px;
list-style-type:none;
}
a
{
float:left;
width:10.7499999em;
text-decoration:none;
color:white;
background-color:purple;
padding:1em 1.56em;
border-right:1px solid white;
}
a:hover {background-color:#ff3300;}
li {display:inline;}
    </style>
  </head>
  <body bgcolor="lightskyblue">
      <?php
if(isset($_POST['update']))
{
$host="localhost"; //yout host name
$username="root";  //yout user name
$password="root";      // your password
$db_name="prashant";
$conn = mysql_connect($host, $username, $password);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$courseid = $_POST['courseid'];
$coursename = $_POST['coursename'];
$criteria = $_POST['criteria'];
$sem = $_POST['sem'];
$sql = "update course SET coursename='$coursename',criteria=$criteria,semid='$sem' where courseid='$courseid';";
mysql_select_db('prashant');
mysql_query($sql) or die('Query "' . $sql . '" failed: ' . mysql_error());
mysql_query($sql,$conn);
$res=mysql_affected_rows($sql);
if(!$res)
{
     echo "<script>
            alert('Updated Successfully!!!');
            window.location.href='courseeditpage.php'
            </script> ";
  
}
            else {
                echo "<script>
            alert('Enter The Correct Course-Id!!!');
            window.location.href='courseeditpage.php'
            </script> ";
            }
mysql_close($conn);
}
else
{
?>
      <form action="<?php $_PHP_SELF ?>" method="post" name="courseeditpage">
       <h1 align="center"><img src="images1.bmp" width="180" height="135"  align="left" style=" margin-top: -6">
              K.L.E Society's<br>B.V.Bhoomraddi College of Engineering & Technology <br> Hubli-580031</h1>
          <h1 align="center" style=" background-color:orange;"><i><marquee>ONLINE CAREER APTITUDE TEST</marquee></i></h1>
              <ul>
    <li> <a href="home1.php" align="center">HOME</a></li>
    <li> <a href="addcources.php" align="center">ADD COURSES </a></li>
    <li> <a href="deletecources.php" align="center">DELETE</a></li>
    <li> <a href="coursedisplay.php" align="center">DISPLAY</a></li>
    <li> <a align="center">EDIT</a></li>
    <li> <a href="login.php" align="center">LOGOUT</a></li>
</ul>
  <table style="margin-top: 0px;">
              <tr>
                  <td width="500" height="400">
                      <img src="w.jpeg" width="500" height="400"/>
                  </td>
                  <td width="1500" height="400" bgcolor="blue" style=" color:  white; font-size: 20">
                      <p style="margin-left:250px; font-size: 30px; color:  white">EDIT COURSES</p>
                     <p style="margin-left:80px;">ENTER THE COURSE-ID *  &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                         &nbsp; &nbsp; &nbsp; &nbsp;
                         <input type="text" name="courseid" autofocus id="courseid">&nbsp; &nbsp; &nbsp; &nbsp;
                      <p style="margin-left:80px;">COURSE-NAME *  &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;
                          <input type="text" name="coursename" id="coursename"></p>
                       <p style="margin-left:80px;">CRITERIA * &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                           &nbsp; &nbsp;<input type="text" name="criteria" id="criteria"></p>
                       <p style="margin-left:80px;">SEM * &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp;&nbsp; &nbsp; <select name="sem" id="sem">
                            <option value="-1"> Select Sem&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
           <option>1</option>
           <option>2</option>
           <option>3</option>
           <option>4</option>
           <option>5</option>
           <option>6</option>
           <option>7</option>
           <option>8</option>
        </select>
                         <br>
                         <br>
                         <br>
                         <input type="submit" value="UPDATE RECORD" style="margin-left: 150px; font-size: 15px;" name="update">
                            <input type="button" value="Exit" onclick="log()" style="font-size: 15px; margin-left: 30px">
                  </td>
              </tr>
          </table>
  <h4 align="center" style=" background-color:orange"><i>Leveraging   &nbsp; Knowledge!!!!...........</i></h4>
      </form>
<?php
}
?>
      </body>
</html>

