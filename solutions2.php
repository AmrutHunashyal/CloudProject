<html>
  <head>
    <title></title>
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
width:24.59999999999em;
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
      <form action="" method="post" name="login" onsubmit=" return validate();" >
       <h1 align="center"><img src="images1.bmp" width="180" height="135"  align="left" style=" margin-top: -6">
              K.L.E Society's<br>B.V.Bhoomraddi College of Engineering & Technology <br> Hubli-580031</h1>
          <h1 align="center" style=" background-color:orange;"><i><marquee>ONLINE CAREER APTITUDE TEST</marquee></i></h1>
          <ul>
    <li> <a href="taketest.php" align="center">CLOSE</a></li>
     <li> <a align="center">SOLUTIONS  FOR THE  GIVEN  QUESTIONS</a></li>
    <li> <a href="login.php" align="center">LOGOUT</a></li>
    </ul>
         <p style="margin-left:600px; font-size: 30px; color: red"><b>SOLUTIONS</b></p>
<table cellpadding="15" border="1"align="center" width="1200" style="margin-top: -.9px;">
<tr>
<th width="200">QUESTION
<th> QUESTION &nbsp;&nbsp; &nbsp;&nbsp;TITTLE
</tr>
<?php
include 'index.php';
$query = "SELECT questionno,question,keyanswer FROM apititude";
$result = mysql_query($query);
mysql_query($query) or die('Query "' . $query . '" failed: ' . mysql_error());
while($row= mysql_fetch_array($result))
{
?>
<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row["questionno"] ?></td>
<td><?php echo $row["question"] ?><br><br>
Answer:&nbsp<?php echo $row["keyanswer"] ?>
</td>
</tr>
<?php
}
?>
</table><br><br>
 <h4 align="center" style=" background-color:orange; margin-top: .5px;"><i>Leveraging   &nbsp; Knowledge!!!!...........</i></h4>
      </form>
      </body>
</html>

