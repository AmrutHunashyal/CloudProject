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
width:17.69999999em;
text-decoration:none;
color:white;
background-color:purple;
padding:1em 1.56em;
border-right:1px solid white;
}
a:hover {background-color:#ff3300;}
li {display:inline;}
div
{
border:40px solid transparent;
width:850px;
padding:50px 200px;
 background-color: lightgreen;
}

#round
{
-moz-border-image:url(im.jpg) 30 30 round; /* Old Firefox */
-webkit-border-image:url(im.jpg) 30 30 round; /* Safari and Chrome */
-o-border-image:url(im.jpg) 30 30 round; /* Opera */
border-image:url(im.jpg) 30 30 round;
}

#stretch
{
-moz-border-image:url(im.jpg) 30 30 stretch; /* Old Firefox */
-webkit-border-image:url(im.jpg) 30 30 stretch; /* Safari and Chrome */
-o-border-image:url(im.jpg) 30 30 stretch; /* Opera */
border-image:url(im.jpg) 30 30 stretch;
}
    </style>
  </head>
  <body bgcolor="lightskyblue">
      <form action="" method="post" name="login" onsubmit=" return validate();" >
       <h1 align="center"><img src="images1.bmp" width="180" height="135"  align="left" style=" margin-top: -6">
              K.L.E Society's<br>B.V.Bhoomraddi College of Engineering & Technology <br> Hubli-580031</h1>
          <h1 align="center" style=" background-color:orange"><i><marquee>ONLINE CAREER APTITUDE TEST</marquee></i></h1>
           <ul>
    <li> <a href="home2.php" align="center">HOME</a></li>
    <li> <a align="center">PLACEMENT INFORMATION</a></li>
    <li> <a href="technicaltalks2.php" align="center">TECHNICAL TALKS</a></li>
    <li> <a href="login.php" align="center">LOGOUT</a></li>
    </ul>
 <br>
          <br>
          <br>
          <div id="round">
  <table width="1200" cellspacing="0" border="1" style=" margin-left: -180">
<p style="margin-left:200px; font-size: 30px; color: red;"><b>COMPANY VISITING INFORMATION</b></p>
<tr>
<th style=" font-size: 23">SL NO.
<th style=" font-size: 23">COMPANY TYPE
<th width="400" style=" font-size: 23">COMPANY NAME
<th width="150" style=" font-size: 23">    DATE
<th width="150" style=" font-size: 23">      TIME
</tr>
<?php
$host="localhost"; //yout host name
$username="root";  //yout user name
$password="root";      // your password
$db_name="prashant";  // your database name
$con=mysql_connect("$host", "$username", "$password")or die("cannot connect"); //mysql connection
mysql_select_db("$db_name")or die("can not select DB"); //select your database
$query = "SELECT * FROM company";
// actually "do" the query.
$result = mysql_query($query);
while ($row = mysql_fetch_array($result))
{
//    display information for each dog.
echo "<tr>";
echo "<td style=' font-size: 23';>{$row[number]}</td>";
echo "<td style=' font-size: 23';>{$row[companytype]}</td>";
echo "<td style=' font-size: 23';>{$row[companyname]}</td>";
echo "<td style=' font-size: 23';>{$row[date1]}</td>";
echo "<td style=' font-size: 23';>{$row[time]}</td>";
}
mysql_query($query) or die('Query "' . $query . '" failed: ' . mysql_error());
?>
</table>
          </div>
          <table style="margin-top: -0.9px;" cellspacing="0">
              <tr>
                  <td width="1500" height="200" bgcolor="lightgreen">
                      <br>
                      <font color="black" style=" margin-left: 400; font-size:70;">Training and Placements</font><br>
                   </td>
              </tr>
              <tr>
                  <td width="1500" bgcolor="lightgreen">
                      <font color="black" style="font-size:25"><p style=" margin-left: 30">BVBCET has an excellent record in training and placement of students. The organization provides an
                    excellent training right from the 2nd year of BE through various HR programmes like VIKAS.
                    The Placement Cell of BVBCET has adequate infrastructure in par with required standards.</p></font>
                      <font style=" font-size: 60; margin-left: 500" color="black">Our Recruiters</font><br>
                      <table border="1" cellpadding="0" cellspacing="0" style=" margin-left: 100">
<tbody>
<tr>
<td style="width:300px;height:100px;">
<font color="black" style="font-size:25"><p>
        <strong>IT Companies</strong></p></font>
</td>
<td style="width:850px;">
<font color="black" style="font-size:25"><p>
        TCS, MindTree , iGate Patni, Infosys, Accenture, TESCO, Span Systems, TechMahindra, SLK and many more</p></font>
</td>
</tr>
<tr>
<td style="width:300px;height:200px;">
<font color="black" style="font-size:25"><p>
        <strong>Product / Core Companies</strong></p></font>
</td>
<td style="width:700px;height:200px;">
<font color="black" style="font-size:25"><p>        <br>
Robert Bosch, Informatica,Toshiba,Delphi,Akamai,INSZoom,Tejas Networks,Subex,KPIT Cummins,Exeter,CG CoreEl,BEL,Sony,PathPartner,Sankalp,KarMic,Accord soft,Huewai Technologies</p>
<p>
L&amp;T,JSW,TAML,FlowServe,Tata Motors,Quest Global,CSG, TaeguTec,Divgi Warner,TAFE, JMC, Shapoorji Pallonji,Navya Biotech, RichCore Life Sciences, Aissel and many more</p>
<br></font>
</td>
</tr>
</tbody>
</table>
                      <br>
                      <font color="black" style="font-size:25;"><p style=" margin-left: 30">
The Placement cell is lead under the torchlight of Prof. C. D . Kerure, Placement Co-ordinator. C. D. Kerure has a vast experience in bringing top companies to the campus.</p>
<p></font>
<span style="font-size:24px;margin-left: 900"><u><strong>Contact Details</strong></u></span>
<p class="col2" style="font-size:24px;margin-left: 900">
	Prof. C . D . Kerure
        <br>
        Placement Cell Co-Ordinator
        <br>
        B.V Bhoomaraddi College of Engg &amp; Tech Hubli
        <br>
        Email-id: &nbsp;placement@bvb.edu
        <br>
        Cell:&nbsp +91 9845117196
</p><br>
           </td>
              </tr>
          </table>
  <h4 align="center" style=" background-color:orange; margin-top: .5px;"><i>Leveraging   &nbsp; Knowledge!!!!...........</i></h4>
      </form>
      </body>
</html>

