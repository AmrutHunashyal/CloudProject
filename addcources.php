<html>
  <head>
    <title></title>
    <script type='text/javascript'>
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
      <form action="databaseforcourses.php" method="post" name="course">
       <h1 align="center"><img src="images1.bmp" width="180" height="135"  align="left" style=" margin-top: -6">
              K.L.E Society's<br>B.V.Bhoomraddi College of Engineering & Technology <br> Hubli-580031</h1>
          <h1 align="center" style=" background-color:orange"><i><marquee>ONLINE CAREER APTITUDE TEST</marquee></i></h1>
  <ul>
    <li> <a href="home1.php" align="center">HOME</a></li>
    <li> <a align="center">ADD COURSES </a></li>
    <li> <a href="deletecources.php" align="center">DELETE</a></li>
    <li> <a href="coursedisplay.php" align="center">DISPLAY</a></li>
    <li> <a href="courseeditpage.php" align="center">EDIT</a></li>
    <li> <a href="login.php" align="center">LOGOUT</a></li>
</ul>
          <table style="margin-top: 0px;">
              <tr>
                  <td width="500" height="400">
                      <img src="w.jpeg" width="500" height="400"/>
                  </td>
                  <td width="1000" height="400" bgcolor="blue" style=" color:  white; font-size: 20">
                      <p style="margin-left:180px; font-size: 30px; color:  white">ADD COURSES</p>
                     <p style="margin-left:130px;">COURSE-ID * &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;
                         &nbsp; &nbsp; &nbsp; &nbsp;
                         <input type="text" name="courseid" autofocus></p>
                      <p style="margin-left:130px;">COURSE-NAME *   &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;  &nbsp;
                         <input type="text" name="coursename"></p>
                       <p style="margin-left:130px;">CRITERIA *  &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                         &nbsp; &nbsp;<input type="text" name="criteria"></p>
                       <p style="margin-left:130px;">SEM * &nbsp;  &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp;&nbsp; &nbsp; <select name="sem">
           <option value="-1"> Select Sem &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
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
                  <input type="submit" value="Submit" style="margin-left: 140px; font-size: 15px;">
        <input type="button" value="Exit" onclick="log()" style="font-size: 15px; margin-left: 30px">
                  </td>
              </tr>
          </table>
   <h4 align="center" style=" background-color: orange; margin-top: 1px"><i>Leveraging   &nbsp; Knowledge!!!!...........</i></h4>
      </form>
      </body>
</html>

