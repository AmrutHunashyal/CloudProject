<html>
  <head>
    <title></title>
  </head>
  <body bgcolor="lightskyblue">
<?php
$host="localhost"; //yout host name
$username="root";  //yout user name
$password="root";      // your password
$db_name="prashant";  // your database name
$con=mysql_connect("$host", "$username", "$password")or die("cannot connect"); //mysql connection
mysql_select_db("$db_name")or die("can not select DB"); //select your database
$question=$_POST['question'];
$t=$_POST['type'];
if($t==-1)
    {
     die('SELECT THE TEST TYPE');
}
else {
    if($t=="Apititude")
        {
     $query = "delete from apititude where questionno=$question";
    }
    else if($t=="Technical")
        {
        $query = "delete from technical where questionno=$question";
    }
}
$result=mysql_query($query);
$row=mysql_affected_rows();
if(!$row)
{
  echo "<script>
            alert('Enter The Correct Question Number!!!');
            window.location.href='deletetest.php'
            </script> ";
}
            else {
               echo "<script>
            alert('Deleted Successfully!!!');
            window.location.href='deletetest.php'
            </script> ";
            }
?>
      </body>
</html>

