<html>
    <title>
    </title>
    <head>
    <script type='text/javascript'>
function testdispaly()
{
window.location.replace("addtestdetails.php");
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
width:10.7999999em;
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
      <form action="" method="post" name="testdisplay">
       <h1 align="center"><img src="images1.bmp" width="180" height="135"  align="left" style=" margin-top: -6">
              K.L.E Society's<br>B.V.Bhoomraddi College of Engineering & Technology <br> Hubli-580031</h1>
          <h1 align="center" style=" background-color:orange"><i><marquee>ONLINE CAREER APTITUDE TEST</marquee></i></h1>
            <ul>
    <li> <a href="home1.php" align="center">HOME</a></li>
    <li> <a href="addtestdetails.php" align="center">ADD QUESTIONS </a></li>
    <li> <a href="deletetest.php" align="center">DELETE</a></li>
    <li> <a align="center">DISPLAY</a></li>
    <li> <a href="testeditpage.php" align="center">EDIT</a></li>
    <li> <a href="login.php" align="center">LOGOUT</a></li>
</ul>
<table>
    <td width="1500" height="100"bgcolor="lightskyblue" style=" color:  white; font-size: 20">
        <p style="margin-left:600px; font-size: 30px; color: red"><b>APITITUDE TABLE</b></p>
    </td>
</table>
<table align="center" border=1  cellpadding=10px cellspacing=1px width="1300">
<tr>
<th>QUESTION NUMBER
<th width="500"> QUESTIONS
<th> OPTION-1
<th> OPTION-2
<th> OPTION-3
<th> OPTION-4
<th> KEY-ANSWER
<th> TEST-TYPE
</tr>
<?php
$host="localhost"; //yout host name
$username="root";  //yout user name
$password="root";      // your password
$db_name="prashant";  // your database name
$con=mysql_connect("$host", "$username", "$password")or die("cannot connect"); //mysql connection
mysql_select_db("$db_name")or die("can not select DB"); //select your database
$query = "SELECT * FROM apititude";
// actually "do" the query.
$result = mysql_query($query);
while ($row = mysql_fetch_array($result))
{
//    display information for each dog.
echo "<tr>";
echo "<td>{$row[questionno]}</td>";
echo "<td>{$row[question]}</td>";
echo "<td>{$row[option1]}</td>";
echo "<td>{$row[option2]}</td>";
echo "<td>{$row[option3]}</td>";
echo "<td>{$row[option4]}</td>";
echo "<td>{$row[keyanswer]}</td>";
echo "<td>{$row[testtype]}</td>";
}
mysql_query($query) or die('Query "' . $query . '" failed: ' . mysql_error());
?>
</table>
  <br>
  <p style="margin-left:600px; font-size: 30px; color: red"><b>TECHNICAL TABLE</b></p>
  <table align="center" border=1  cellpadding=10px cellspacing=1px width="1300">
<tr>
<th>QUESTION NUMBER
<th width="500"> QUESTIONS
<th> OPTION-1
<th> OPTION-2
<th> OPTION-3
<th> OPTION-4
<th> KEY-ANSWER
<th> TEST-TYPE
</tr>
<?php
$host="localhost"; //yout host name
$username="root";  //yout user name
$password="root";      // your password
$db_name="prashant";  // your database name
$con=mysql_connect("$host", "$username", "$password")or die("cannot connect"); //mysql connection
mysql_select_db("$db_name")or die("can not select DB"); //select your database
$query = "SELECT * FROM technical";
// actually "do" the query.
$result = mysql_query($query);
while ($row = mysql_fetch_array($result))
{
//    display information for each dog.
echo "<tr>";
echo "<td>{$row[questionno]}</td>";
echo "<td>{$row[question]}</td>";
echo "<td>{$row[option1]}</td>";
echo "<td>{$row[option2]}</td>";
echo "<td>{$row[option3]}</td>";
echo "<td>{$row[option4]}</td>";
echo "<td>{$row[keyanswer]}</td>";
echo "<td>{$row[testtype]}</td>";
}
mysql_query($query) or die('Query "' . $query . '" failed: ' . mysql_error());
?>
</table>
  </form>
   <h4 align="center" style=" background-color:orange"><i>Leveraging   &nbsp; Knowledge!!!!...........</i></h4>
      </body>
</html>