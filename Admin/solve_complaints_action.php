<?php
include("dbOperation.php");
$obj=new dbOperation();

$cid=$_POST['hidid'];
$status=$_POST['status'];
$sql_update="update complaints set comp_status='$status' where comp_id=$cid";
$result=$obj->sql_query($sql_update);

if($result==1)
{
	header("location:view_all_complaints.php");
}
else
{
	echo "Failed";
}


?>