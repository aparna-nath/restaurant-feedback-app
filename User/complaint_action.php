<?php
session_start();
include("dbOperation.php");//database layer
$obj=new dbOperation();

$userid=$_SESSION['user_id'];
$mealid=$_POST['hid'];
$complaint=$_POST["txtcomplaint"];
$complaint=str_replace("'", "''", $complaint); // one single quote is replaced with two single quotes

$sql_insert="insert into complaints(user_id,meal_id,comp_detail)values
($userid,$mealid,'$complaint')";

$res1=$obj->sql_query($sql_insert);


if($res1==1)
{
	header("location:view_comp_status.php");
}
else
{
	echo "Failed";
}
?>