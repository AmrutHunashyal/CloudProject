<html>
  <head>
    <title></title>
    <script type="text/javascript">
	function  xxx(a,b)
	{	
	if (window.XMLHttpRequest)
	  {
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{		
                            document.getElementById("count").innerHTML = xmlhttp.responseText;
			}
	  }
		xmlhttp.open("GET","ajax_count.php?Q_no="+b+"&Ans="+a,false);
		xmlhttp.send();
	}
	
	function  count()
	{
	
	if (window.XMLHttpRequest)
	  {
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{	
					alert(xmlhttp.responseText);
					document.getElementById("count").innerHTML = xmlhttp.responseText;
                                        window.location.replace("solutions2.php");
			}
	  }
		xmlhttp.open("GET","ajax_submit.php",false);
		xmlhttp.send();

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
width:24.59999999em;
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
      <form action="" method="post" name="test" onsubmit=" return check();" >
       <h1 align="center"><img src="images1.bmp" width="180" height="135"  align="left" style=" margin-top: -6">
              K.L.E Society's<br>B.V.Bhoomraddi College of Engineering & Technology <br> Hubli-580031</h1>
          <h1 align="center" style=" background-color:orange;"><i><marquee>ONLINE CAREER APTITUDE TEST</marquee></i></h1>
          <ul>
    <li> <a href="taketest.php" align="center">BACK</a></li>
    <li> <a align="center">APTITUDE TEST</a></li>
    <li> <a href="login.php" align="center">LOGOUT</a></li>
    </ul>
<br>
<p style="margin-left:600px; font-size: 30px; color: red"><b>APITITUDE TEST</b></p>
<table cellpadding="15" border="1"align="center" width="1200" style="margin-top: -.9px;">
<tr>
<th width="200">QUESTION
<th> QUESTION &nbsp;&nbsp; &nbsp;&nbsp;TITTLE
</tr>
<?php
include 'index.php';
$query = "SELECT questionno,question,option1,option2,option3,option4 FROM apititude ORDER BY RAND() LIMIT 0,60";
$result = mysql_query($query);
mysql_query($query) or die('Query "' . $query . '" failed: ' . mysql_error());
while($row= mysql_fetch_array($result))
{
$i = $i + 1;
?>
<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $i; ?></td>
<td>&nbsp;&nbsp;<?php echo $row["question"] ?><br><br>
<input type="radio" onclick="xxx('<?php echo $row["option1"] ?>','<?php echo $row["questionno"] ?>');" value="<?php echo $row["option1"] ?>" id="opt1" name="<?php echo $row["questionno"] ?>">&nbsp;&nbsp;<?php echo $row["option1"] ?>
<br><br><input type="radio"  onclick="xxx('<?php echo $row["option2"] ?>','<?php echo $row["questionno"] ?>'); "value="<?php echo $row["option2"] ?>" id="opt2" name="<?php echo $row["questionno"] ?>">&nbsp;&nbsp;<?php echo $row["option2"] ?>
<br><br><input type="radio" onclick="xxx('<?php echo $row["option3"] ?>','<?php echo $row["questionno"] ?>');" value="<?php echo $row["option3"] ?>" id="opt3" name="<?php echo $row["questionno"] ?>">&nbsp;&nbsp;<?php echo $row["option3"] ?>
<br><br><input type="radio" onclick="xxx('<?php echo $row["option4"] ?>','<?php echo $row["questionno"] ?>');" value="<?php echo $row["option4"] ?>" id="opt3" name="<?php echo $row["questionno"] ?>">&nbsp;&nbsp;<?php echo $row["option4"] ?>
</td>
<div name="count" id="count"></div>
</tr>
<?php
}
?>
</table>
<br>
<p style="margin-left:500px; font-size: 25px; color: red"><b>SUBMIT THE TEST:</b>
    <input type="button" style=" margin-left: 50px;" value="   SUBMIT   " onclick="count();" name="b1"/></p>
<br>
 <h4 align="center" style=" background-color:orange; margin-top: .5px;"><i>Leveraging   &nbsp; Knowledge!!!!...........</i></h4>
      </form>
      </body>
</html>

