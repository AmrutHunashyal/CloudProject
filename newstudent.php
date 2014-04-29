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

.two
{
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
width:38.49em;
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
      <form action="databseforstudent.php" method="post" name="student">
       <h1 align="center"><img src="images1.bmp" width="180" height="135"  align="left" style=" margin-top: -6">
              K.L.E Society's<br>B.V.Bhoomraddi College of Engineering & Technology <br> Hubli-580031</h1>
          <h1 align="center" style=" background:  orange"><i><marquee>ONLINE CAREER APTITUDE TEST</marquee></i></h1>
<ul>
    <li> <a align="center">NEW STUDENT SIGNUP PAGE</a></li>
    <li> <a href="login.php" align="center">LOGIN</a></li>
</ul>
          <table style="margin-top: 0px;">
              <tr>
                  <td>
                      <p> <img src="man.jpg" width="660" height="450"/></p>
                  </td>
                  <td style="margin-left: 660px; background-color:lightskyblue; width: 660px; height: 450px">
                      <p style="margin-left:250px; font-size: 30px;">SIGNUP </p>
                     <p style="margin-left:80px;">USN *  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                         &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<input type="text" name="id" autofocus></p>
                      <p style="margin-left:80px;">NAME * &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                         &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<input type="text" name="username2"></p>
                       <p style="margin-left:80px;">PASSWORD * &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                         &nbsp;&nbsp;<input type="password" name="password2"></p>
                        <p style="margin-left:80px;">CONFIRM-PASSWORD * &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="password" name="password3"></p>
                         <p style="margin-left:80px;">DOB * &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                         &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;<input type="text" name="dob"></p>
                          <p style="margin-left:80px;">GENDER *  &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                         &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
                         <select name="gender">
           <option value="-1"> Select Geneder type </option>
           <option>Male</option>
           <option>Female</option>
        </select>
                           <p style="margin-left:80px;">EMAIL * &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                         &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;<input type="text" name="email"></p>
                            <p style="margin-left:80px;">PHONE-NO * &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                &nbsp; &nbsp;<input type="text" name="phno"></p>
                            <input type="submit" value="Submit" style="margin-left: 220px; font-size: 15px;" onclick="validate()"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="button" value="Exit" onclick="log()" style="font-size: 15px;">
                  </td>
              </tr>
          </table>

 <h4 align="center" style=" background-color: orange; margin-top: 1px">terms and conditions apply</h4>
      </form>
      </body>
</html>

