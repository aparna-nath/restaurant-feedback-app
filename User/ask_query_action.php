<?php
session_start();
include("dbOperation.php");//database layer
$obj=new dbOperation();

$question=$_POST["question"];
$userId=$_SESSION['user_id'];
$sql_insert="insert into user_query(user_id,query_post)values($userId,'$question')";

$res1=$obj->sql_query($sql_insert);
if($res1==1)
{
	echo "Successfully submitted your question ";
	$link = "welcome_user.php"; // Link goes here!
//print "<a href="'.$link.'">Link</a>";
	echo "<a href='$link'>Click Home</a>";
	//header("location:welcome_user.php");
}
else
{
	echo "Failed";
}
?>