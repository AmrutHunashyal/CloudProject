<html>
    <title></title>
<script type='text/javascript'>
function insert()
{
window.location.replace("placement.php");
}
    </script>
    <body>
<?php
$host="localhost"; //yout host name
$username="root";  //yout user name
$password="root";      // your password
$db_name="prashant";  // your database name
$con=mysql_connect("$host", "$username", "$password")or die("cannot connect"); //mysql connection
mysql_select_db("$db_name")or die("can not select DB"); //select your database
$number=$_POST['no'];
$companytype=$_POST['type'];
$companyname=$_POST['companyname'];
$s=$_POST['date1'];
$time1=$_POST['time1'];
if($companytype==NULL && $companyname==NULL && $date1==NULL && $time1==-1)
{
    printf("Values cannot be empty.");
}
else if($number==NULL)
    {
    printf("NUMBER cannot be empty.");
    return FALSE;
}
else if($companytype==-1)
    {
    printf("COMPANT-TYPE cannot be empty.");
    return FALSE;
}
else if($companyname==NULL)
    {
    printf("COMPANY-NAME cannot be empty.");
}
else if ($s==NULL)
    {
    printf("DATE cannot be empty.");
}
else if ($time1==NULL)
    {
    printf("TIME cannot be empty.");
}
else
{
$query = "INSERT INTO company(number,companytype,companyname,date1,time)
VALUES ($number,'$companytype','$companyname','$s','$time1')";
mysql_query($query) or die('Query "' . $query . '" failed: ' . mysql_error());
$result=mysql_query($query);
$r=mysql_affected_rows();
if(!$r)
    {
    echo "<script>
            alert('Inserted Failed try Again!!!');
            window.location.href='placement.php'
            </script> ";
}
else {
    echo "<script>
            alert('Inserted Successfully!!!');
            window.location.href='placement.php'
            </script> ";
}
}
?>
    </body>
</html>
