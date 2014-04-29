<html>
    <body>
        <script type='text/javascript'>
function questioninsert()
{
window.location.replace("addtestdetails.php");
}
    </script>
<?php
$host="localhost"; //yout host name
$username="root";  //yout user name
$password="root";      // your password
$db_name="prashant";  // your database name
$con=mysql_connect("$host", "$username", "$password")or die("cannot connect"); //mysql connection
mysql_select_db("$db_name")or die("can not select DB"); //select your database
$questionno=$_POST['questionno'];
$question=$_POST['question'];
$option1=$_POST['option1'];
$option2=$_POST['option2'];
$option3=$_POST['option3'];
$option4=$_POST['option4'];
$keyanswer=$_POST['keyanswer'];
$t=$_POST['type'];
if($questionno==NULL && $question==NULL && $option1==NULL && $option2==NULL && $option3==NULL && $option4==NULL && $keyanswer==NULL && $test==NULL)
{
    printf("Values cannot be empty.");
}
else if($questionno==NULL)
    {
    printf("QUESTION-NO cannot be empty.");
}
else if($question==NULL)
    {
    printf("QUESTION cannot be empty.");
}
else if ($option1==NULL)
    {
    printf("OPTION-1 cannot be empty.");
}
else if ($option2==NULL)
    {
    printf("OPTION-2 cannot be empty.");
}
else if ($option3==NULL)
    {
    printf("OPTION-3 cannot be empty.");
}
else if ($option4==NULL)
    {
    printf("OPTION-4 cannot be empty.");
}
else if ($keyanswer==NULL)
    {
    printf("KEY-ANSWER cannot be empty.");
}
else if ($t==-1)
    {
    printf("TEST-TYPE cannot be empty.");
    return FALSE;
}
else
{
 if($t=="Apititude")
        {
     $query = "INSERT INTO apititude(questionno,question,option1,option2,option3,option4,keyanswer,testtype)
     VALUES ($questionno, '$question', '$option1','$option2','$option3','$option4','$keyanswer','$t')";
    }
    else if($t=="Technical")
        {
        $query = "INSERT INTO technical(questionno,question,option1,option2,option3,option4,keyanswer,testtype)
        VALUES ($questionno, '$question', '$option1','$option2','$option3','$option4','$keyanswer','$t')";
    }
 mysql_query($query) or die('Query "' . $query . '" failed: ' . mysql_error());
$result=mysql_query($query);
$r=mysql_affected_rows();
if(!$r)
    {
    echo "<script>
            alert('Inserted Failed try Again!!!');
            window.location.href='addtestdetails.php'
            </script> ";
}
else {
    echo "<script>
            alert('Inserted Successfully!!!');
            window.location.href='addtestdetails.php'
            </script> ";
}
}
?>
    </body>
</html>