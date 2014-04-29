<html>
  <head>
    <title></title>
  </head>
  <body>
    <script type='text/javascript'>
    </script>
<?php
$host="localhost"; //yout host name
$username="root";  //yout user name
$password="root";      // your password
$db_name="prashant";  // your database name
$con=mysql_connect("$host", "$username", "$password")or die("cannot connect"); //mysql connection
mysql_select_db("$db_name")or die("can not select DB"); //select your database
$courseid=$_POST['courseid'];
$query = "delete from course where courseid='$courseid';";
$result=mysql_query($query);
$row=mysql_affected_rows();
if(!$row)
{
  echo "<script>
            alert('Enter The Correct Course-Id!!!');
            window.location.href='deletecources.php'
            </script> ";
}
            else {
                echo "<script>
            alert('Deleted Successfully!!!');
            window.location.href='deletecources.php'
            </script> ";
            }
?>
      </body>
</html>

