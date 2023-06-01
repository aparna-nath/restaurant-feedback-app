<?php
include("dbOperation.php");
$obj= new dbOperation();

$name=$_POST["txtname"];
$describe=$_POST["txtmealdes"];
$type=$_POST["txtmealtype"];
$price=$_POST["txtmealprice"];
$mealimg=$_POST["meal_img"];
$eid=$_POST["hid"];

$sql_update="update meals set meal_name='$name',meal_desc='$describe', meal_type='$type', meal_price=$price, meal_img='$mealimg' where meal_id=$eid";
$res=$obj->sql_query($sql_update);
header("location:List_meals.php");
?>