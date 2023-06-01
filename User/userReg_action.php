<html>
<body>
<?php
session_start();

include("dbOperation.php");//database layer
$obj=new dbOperation();


$username = "";
$email    = "";
$errors = array(); 

if (isset($_POST['btn_reg'])) //register button action
{
		$username=$_POST["txtname"];
		$email=$_POST["txtemail"];
		$pwd1=$_POST["password_1"];
		$pwd2=$_POST["password_2"];

			if ($pwd1 != $pwd2) 
				{
				array_push($errors, "The two passwords do not match"); //array display at the end
			 	}
}
// check if email already exists
$user_email_check = "SELECT * FROM users WHERE  user_email='$email' LIMIT 1";
$result = $obj->sql_query($user_email_check);
$user = mysqli_fetch_assoc($result);
  
  if ($user) 
  { // if user exists

    if ($user['user_email'] === $email) 
    {
      array_push($errors, "Email already exists");
    }
  }



 if (count($errors) == 0) 
 {
 	//$password = md5($pwd2);//encrypt the password before saving in the database
	$sql_insert="insert into users(user_name,user_email,user_pwd)values('$username','$email','$pwd2')";
	$res1=$obj->sql_query($sql_insert);
	if($res1==1)
	{
		
		$_SESSION["username"] = $username;
		$_SESSION['user_email']=$email;
  	$_SESSION["success"] = "You are now logged in";
  		header("location:welcome_user.php");
	}
	else
	{
		echo "Failed to register";
	}
}
else
{
	echo implode(" ",$errors);
}

?>
</body>
</html>