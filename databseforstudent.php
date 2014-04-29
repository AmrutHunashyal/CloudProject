<html>
    <title></title>
    <body>
         <script type='text/javascript'>
function validate()
{
window.location.replace("newstudent.php");
}
    </script>
 <?php
$host="localhost"; //yout host name
$username="root";  //yout user name
$password="root";      // your password
$db_name="prashant";  // your database name
$con=mysql_connect("$host", "$username", "$password")or die("cannot connect"); //mysql connection
mysql_select_db("$db_name")or die("can not select DB"); //select your database
$id=$_POST['id'];
$username=$_POST['username2'];
$password2=$_POST['password2'];
$password3=$_POST['password3'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$phno=$_POST['phno'];
if($id==NULL && $username==NULL && $password2==NULL && $dob==NULL && $gender==NULL && $email==NULL && $phno==NULL)
{
    printf("Values cannot be empty.");
}
else if($id==NULL)
    {
    printf("USN cannot be empty.");
}
else if($username==NULL)
    {
    printf("NAME cannot be empty.");
}
else if ($password2==NULL)
    {
    printf("Pssword cannot be empty.");
}
else if($password3==NULL)
    {
    printf("CONFORM-PASSWORD cannot be empty.");
}
else if($dob==NULL)
    {
    printf("DOB cannot be empty.");
}
else if($gender==NULL)
    {
    printf("GENDER cannot be empty.");
}
else if($email==NULL)
    {
    printf("EMAIL cannot be empty.");
}
else if($phno==NULL)
    {
    printf("PHONE-NO cannot be empty.");
}
else if ($password2==$password3)
{
 $query = "INSERT INTO student(id,username2,password2,dob,gender,email,phno) VALUES ('$id', '$username', '$password2','$dob','$gender','$email','$phno')";
 echo "<script>
            alert('Inserted Successfully!!!');
            window.location.href='newstudent.php'
            </script> ";
}
else
    {
    printf("Password cannot be matched");
}
mysql_query($query) or die('Query "' . $query . '" failed: ' . mysql_error());
?>
</body>
</html>