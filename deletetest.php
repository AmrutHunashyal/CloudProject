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
      <?
      
      ?>
      <form action="databasefordeletetest.php" method="post" name="testdetails">
       <h1 align="center"><img src="images1.bmp" width="180" height="135"  align="left" style=" margin-top: -6">
              K.L.E Society's<br>B.V.Bhoomraddi College of Engineering & Technology <br> Hubli-580031</h1>
          <h1 align="center" style=" background-color:orange"><i><marquee>ONLINE CAREER APTITUDE TEST</marquee></i></h1>
  <ul>
    <li> <a href="home1.php" align="center">HOME</a></li>
    <li> <a href="addtestdetails.php" align="center">ADD QUESTIONS</a></li>
    <li> <a align="center">DELETE</a></li>
    <li> <a href="testdisplay.php" align="center">DISPLAY</a></li>
    <li> <a href="testeditpage.php" align="center">EDIT</a></li>
    <li> <a href="login.php" align="center">LOGOUT</a></li>
</ul>
          <table style="margin-top: 0px;">
              <tr>
                  <td width="500" height="400" style=" color:  white; font-size: 20">
                      <img src="q.jpg" width="500" height="400"/>
                  </td>
                 <td width="1000" height="400"bgcolor="blue" style=" color:  white; font-size: 20">
                     <p style="margin-left:170px; font-size: 30px; color:  white">DELETE QUESTIONS</p>
                 <p style="margin-left:100px;">TEST TYPE * &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;
                     <select name="type">
                       <option value="-1">Select Test Type&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                      <option>Apititude</option>
                      <option>Technical</option>
                      </select>
           <p style="margin-left:100px;">QUESTION NUMBER *  &nbsp; &nbsp; &nbsp;
         <input type="text" name="question"></p>
        <input type="submit" value="DELETE" style="margin-left: 250px; font-size: 15px;" onclick="questiondelete()">
                  </td>
              </tr>
          </table>
   <h4 align="center" style=" background-color: orange; margin-top: 1px"><i>Leveraging   &nbsp; Knowledge!!!!...........</i></h4>
      </form>
      </body>
</html>

