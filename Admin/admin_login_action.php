<?php
$admin_name=$_POST['admin_name'];
$password=$_POST['txtpassword'];

if($admin_name=='admin' && $password='admin123')
{
	header("location: admin_home.php");
}
else
{
	header("location:../index.php");
}
?>