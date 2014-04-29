<html>
  <head>
    <title></title>
    <script type="text/javascript">
function checktest()
{
    var op=document.getElementById("test").value;
    op=parseInt(op);
    if(op==1)
        {
             window.location.replace("aptitude.php");
        }
        else if(op==2)
            {
                window.location.replace("technical.php");
            }
            else if(op==3)
                {
                    window.location.replace("aptitudeandtechnical.php");
                }
                else
                    {
                        alert("SELECT THE TEST TYPE......");
                    }
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
width:24.59999em;
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
      <form action="" method="post" name="test" >
       <h1 align="center"><img src="images1.bmp" width="180" height="135"  align="left" style=" margin-top: -6">
              K.L.E Society's<br>B.V.Bhoomraddi College of Engineering & Technology <br> Hubli-580031</h1>
          <h1 align="center" style=" background-color:orange;"><i><marquee>ONLINE CAREER APTITUDE TEST</marquee></i></h1>
          <ul>
    <li> <a href="home2.php" align="center">HOME</a></li>
    <li> <a align="center">TAKE TEST</a></li>
    <li> <a href="login.php" align="center">LOGOUT</a></li>
    </ul>
          <table style="margin-top: -.9px;" cellpadding="2">
          <tr>
              <td bgcolor="lightskyblue" width="1500" height="400" align="center">
          <p style="margin-left:50px; margin-top: -30px; font-size: 30; color: red"><b>SELECT TEST TYPE:</b> &nbsp; &nbsp; 
             <select id="test">
           <option value="-1"> Select Test  Type </option>
           <option value="1">Aptitude</option>
           <option value="2">Technical</option>
           <option value="3">Aptitude and Technical</option>
        </select>
           <input type="button" value="    SELECT   " style="margin-left: 60px; font-size: 15px;" onclick="checktest()">
        <br>
         </td>
              </tr>
          </table>
 <h4 align="center" style=" background-color:orange; margin-top: .5px;"><i>Leveraging   &nbsp; Knowledge!!!!...........</i></h4>
      </form>
      </body>
</html>

