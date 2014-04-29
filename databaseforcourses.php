<html>
    <body>
        <script type='text/javascript'>
function searchcourse()
{
window.location.replace("courseeditpage.php");
}
    </script>
<?php
$host="localhost"; //yout host name
$username="root";  //yout user name
$password="root";      // your password
$db_name="prashant";  // your database name
$con=mysql_connect("$host", "$username", "$password")or die("cannot connect"); //mysql connection
mysql_select_db("$db_name")or die("can not select DB"); //select your database
$courseid=$_POST['courseid'];
$coursename=$_POST['coursename'];
$criteria=$_POST['criteria'];
$sem=$_POST['sem'];
if($courseid==NULL && $coursename==NULL && $criteria==NULL && $sem==NULL)
{
    printf("Values cannot be empty.");
}
else if($courseid==NULL)
    {
    printf("COURSE-ID cannot be empty.");
}
else if ($coursename==NULL)
    {
    printf("COURSENAME cannot be empty.");
}
else if ($criteria==NULL)
    {
    printf("CRITERA cannot be empty.");
}
else if ($sem==NULL)
    {
    printf("SEM cannot be empty.");
}
else
{
 $query = "INSERT INTO course(courseid,coursename,criteria,semid)
    VALUES ('$courseid', '$coursename',$criteria,'$sem')";
}
mysql_query($query) or die('Query "' . $query . '" failed: ' . mysql_error());
$result=mysql_query($query);
$r=mysql_affected_rows();
if(!$r)
    {
    echo "<script>
            alert('Inserted Failed try Again!!!');
            window.location.href='addcources.php'
            </script> ";
}
else {
    echo "<script>
            alert('Inserted Successfully!!!');
            window.location.href='addcources.php'
            </script> ";
}
?>
</body>
</html>