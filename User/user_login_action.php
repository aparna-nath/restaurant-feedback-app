<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="user_style.css">
</head>
<body>
<?php

session_start();
include("dbOperation.php");//database layer
$obj=new dbOperation();
$errors= array();
include("user_errors.php");

if (isset($_POST["login_user"])) 
{
        $email=$_POST["txtemail"];
        $password=$_POST["txtpassword"];

        if (empty($email)) 
        {
            $errors .= '<p class="error">Email is required </p>';
        }
        if (empty($password))
         {
            $errors .= '<p class="error">Password is required </p>';
        }

        if (count($errors) == 0) 
        {
            //$password = md5($password);
            $query = "SELECT * FROM users WHERE user_email='$email' AND user_pwd='$password' ";
            $results = $obj->sql_query($query);
             
             if (mysqli_num_rows($results) == 1) //if 1 user exists
                 {
                    if($email=='admin@email.com' && $password='admin123')
                    {
                        $_SESSION['user_id']=17;
                        header("location:../Admin/admin_home.php");
                    }
                    else
                    {
                        
                    
                    $row = mysqli_fetch_array($results);
                    $id = $row['user_id']; //the id column in your table
                    $_SESSION['user_id'] = $id; //the id is now saved in this session for future use
                     $_SESSION['user_email'] = $email;
                     $_SESSION['success'] = "You are now logged in";

//code block for total number of complaints, checks whether to display complaint status button

                                $obj1=new dbOperation();
                                $userid=$_SESSION['user_id'];
                                $sql_comp_number="select count(comp_id) as total_comp from complaints where user_id='$userid' ";
                                $result=$obj1->sql_query($sql_comp_number);
                                $r1=mysqli_fetch_array($result);
                                //echo $r1['total_comp'];
                                $totalcomp=$r1['total_comp'];
                                if ($totalcomp==0)
                                {
                                    $_SESSION['totalcomp']=null;
                                }
                                else
                                {
                                    $_SESSION['totalcomp']=$totalcomp; 
                                }

                                //echo $_SESSION['totalcomp'];

                     header("location: welcome_user.php");
                     }
                  }
            
                
                
             /* //new while block to fetch results
               while($row = mysqli_fetch_array($results)): //fetching the row from database
                {
                    $id = $row['user_id']; //the id column in your table
                    $_SESSION['user_id'] = $id; //the id is now saved in your session for future use
                    $_SESSION['user_email'] = $email;
                    $_SESSION['success'] = "You are now logged in";
                     header("location: welcome_user.php");

                }
            */
                else 
                {
                    array_push($errors, "Wrong username/ password combination");
                    echo implode("",$errors); //implode to display array
                    echo " </br> <div class= 'error'>Click here to <a href='user_login.php'>Login</a></div> ";
                }
        }
    

}


?>
</body>
</html>