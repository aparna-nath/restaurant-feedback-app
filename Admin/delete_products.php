<html>
<head>
    
</head>
<body>
<?php

include("dbOperation.php");
$obj= new dbOperation();

$del=$_GET["meal_id"];
$sql_del="delete from meals where meal_id=$del";
$res=$obj->sql_query($sql_del);
header("location:List_meals.php");

?>

</body>
</html>