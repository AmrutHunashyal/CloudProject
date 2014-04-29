<html>
    <body>
<?php
include 'index.php';
$Qno= $_REQUEST["Q_no"];
$Ans= $_REQUEST["Ans"];
$query_count = "select * from apititude where questionno ='".$Qno."' and keyanswer = '".$Ans."'";
$result = mysql_query($query_count); 
if($row = mysql_fetch_array($result))
{ 	  
$query_insert_state = "Insert into count values ('".$Qno."')";
mysql_query($query_insert_state);  
}	 
else
{
}
?>
    </body>
</html>