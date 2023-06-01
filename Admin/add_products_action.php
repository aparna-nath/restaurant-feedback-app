<?php
include("dbOperation.php");//database layer
$obj=new dbOperation();

$name=$_POST["txtname"];
$desc=$_POST["txtdescribe"];
$type=$_POST["type"];
$price=$_POST["txtprice"];
$img=$_POST["meal_img"];

$sql_insert="insert into meals(meal_name,meal_desc,meal_type,meal_price,meal_img)values
('$name','$desc','$type',$price,'$img')";

$res1=$obj->sql_query($sql_insert);


if($res1==1)
{
	header("location:add_products.php");
}
else
{
	echo "Failed";
}
?>