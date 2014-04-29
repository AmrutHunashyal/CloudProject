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
$questionno = $_POST['questionno'];
$questionname = $_POST['questionname'];
$option1 = $_POST['option1'];
$option2 = $_POST['option2'];
$option3 = $_POST['option3'];
$option4 = $_POST['option4'];
$keyanswer = $_POST['keyanswer'];
$testtype=$_POST['type'];
if($testtype==-4)
    {
   die('SELECT THE TEST TYPE ' . mysql_error());
}
else
    {
    if($testtype=="Apititude")
        {
     $sql = "update apititude SET question='$questionname',option1='$option1',option2='$option2',option3='$option3',option4='$option4',keyanswer='$keyanswer',testtype='$testtype' where questionno=$questionno;";
    }
    else if($testtype=="Technical")
        {
        $sql = "update technical SET question='$questionname',option1='$option1',option2='$option2',option3='$option3',option4='$option4',keyanswer='$keyanswer',testtype='$testtype' where questionno=$questionno;";
    }
}
mysql_select_db('prashant');
$retval = mysql_query( $sql, $conn );
$rs=mysql_affected_rows();
if(! $rs )
{
  die('Could not update data: Enter the  correct Question Number ' . mysql_error());
}
            else {
                echo "<script>
            alert('Updated Successfully!!!');
            window.location.href='testeditpage.php'
            </script> ";
            }
mysql_close($conn);
}
else
{
?>
      <form action="" method="post" name="testeditpage" onsubmit=" return validate();">
       <h1 align="center"><img src="images1.bmp" width="180" height="135"  align="left" style=" margin-top: -6">
              K.L.E Society's<br>B.V.Bhoomraddi College of Engineering & Technology <br> Hubli-580031</h1>
          <h1 align="center" style=" background-color:orange;"><i><marquee>ONLINE CAREER APTITUDE TEST</marquee></i></h1>
              <ul>
    <li> <a href="home1.php" align="center">HOME</a></li>
    <li> <a href="addtestdetails.php" align="center">ADD QUESTIONS </a></li>
    <li> <a href="deletetest.php" align="center">DELETE</a></li>
    <li> <a href="testdisplay.php" align="center">DISPLAY</a></li>
    <li> <a align="center">EDIT</a></li>
    <li> <a href="login.php" align="center">LOGOUT</a></li>
</ul>
  <table style="margin-top: 0px;">
              <tr>
                  <td width="500" height="500">
                      <img src="question.jpg" width="500" height="500"/>
                  </td>
                  <td width="900" height="450" bgcolor="blue" style=" color:  white; font-size: 20">
                     <p style="margin-left:250px; font-size: 30px; color:  white">EDIT QUESTIONS</p>
                     <p style="margin-left:80px;">QUESTION NO *  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                         <input type="text" name="questionno" autofocus></p>
                      <p style="margin-left:80px;">QUESTION *  &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;
                         <input type="text" name="questionname" size="70px"></p>
                       <p style="margin-left:80px;">OPTION-1 *   &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                         &nbsp; &nbsp;<input type="text" name="option1" size="70px"></p>
                       <p style="margin-left:80px;">OPTION-2 * &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                           <input type="text" name="option2"size="70px"></p>
                        <p style="margin-left:80px;">OPTION-3 * &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                           <input type="text" name="option3"size="70px"></p>
                         <p style="margin-left:80px;">OPTION-4 * &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                           <input type="text" name="option4"size="70px"></p>
                          <p style="margin-left:80px;">KEY ANSWER * &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                           <input type="text" name="keyanswer"size="70px"></p>
                          <p style="margin-left:80px;">TEST TYPE * &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;
                           <select name="type">
                               <option value="-4">Select Test Type&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                               <option>Apititude</option>
                               <option>Technical</option>
                           </select>
                      </p>
                          <input type="submit" name="update" value="UPDATE RECORD" style="margin-left: 150px; font-size: 15px;">
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

