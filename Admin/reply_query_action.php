<?php
include("dbOperation.php");
$obj=new dbOperation();

$cid=$_POST['hidid'];
$reply=$_POST['query_reply'];
$sql_update="update user_query set query_reply='$reply' where query_id=$cid ";
$result=$obj->sql_query($sql_update);

if($result==1)
{
	header("location:view_queries.php");
}
else
{
	echo "Failed";
}


?>