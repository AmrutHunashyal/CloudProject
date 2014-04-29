<?php
include 'index.php';
$query_count = "select count(*) from count";
$result = mysql_query($query_count);
if($row = mysql_fetch_array($result))
$count=$row['count(*)'];
$query_del_city = "Delete  from count";
mysql_query($query_del_city);
echo"No of currect Answers - $count";
?>
