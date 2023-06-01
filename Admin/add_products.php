<!DOCTYPE html>
<html lang="en">

<head>

<?php
session_start();
if($_SESSION['user_id'])
{


?>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">

    <!-- Site Metas -->
    <title>Add new meals</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="../images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- color -->
    <link id="changeable-colors" rel="stylesheet" href="../css/colors/orange.css" />

    <!-- Modernizer -->
    <script src="../js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div id="loader">
        <div id="status"></div>
    </div>
    <div id="site-header">
        <header id="header" class="header-block-top">
            <div class="container">
                <div class="row">
                    <div class="main-menu">
                        <!-- navbar -->
                        <nav class="navbar navbar-default" id="mainNav">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <div class="logo">
                                    <a class="navbar-brand js-scroll-trigger logo-header" href="#">
                                        <img src="../images/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div align="right">
                                    <a href="../User/logout.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true" style="background-color:#e75b1e">Log Out</a>
                                 </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="active"><a href="admin_home.php">Home</a></li>
                                    
                                    <li><a href="#footer">Contact us</a></li>
                                </ul>
                            </div>
                            <!-- end nav-collapse -->
                        </nav>
                        <!-- end navbar -->
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </header>
        <!-- end header -->
    </div>
  <!-- end site-header -->
  
 
    

    <div id="footer" class="footer-main">
        <div class="footer-news pad-top-100 pad-bottom-70 parallax">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <h2 class="ft-title color-white text-center"> Add Meals </h2>
                            <p>
                             <!-- form sarts here-->
                                <form method="post" action="add_products_action.php" name="f1">
 
<table width="200" border="1" align="center">
    
    <tr>
      <td style="color: wheat;" >Name</td>
      <td>
      <input type="text" name="txtname" id="txtname" /></td>
    </tr> 
    <tr>
      <td style="color: wheat;" >Description</td>
      <td>
      <input type="text" name="txtdescribe" id="txtdescribe" /></td>
    </tr>
    <tr>
      <td style="color: wheat;">Type</td>
      <td>
        <select name="type">
          <option>Non-Veg</option>
          <option>Veg</option>
        </select>
      </td>
    </tr>
     <tr>
      <td style="color: wheat;">Price</td>
      <td>
      <input type="text" name="txtprice" id="txtprice" /></td>
    </tr>
    <tr>
        <td style= "color: wheat;"> Upload Image </td>
        <td colspan="2"><input type="file" name="meal_img" value="Upload"></td>

    </tr>
    <tr>
      <td  colspan="2"><input type="submit" name="button" id="button" value="Submit" style="background-color:orangered;"; /></td>
    </tr>
  </table>
     
</form>
                            </p>
                        </div>
                         
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>

 <?php
   include('../footer.php');
   ?>




    <a href="#" class="scrollup" style="display: none;">Scroll</a>

    <section id="color-panel" class="close-color-panel">
        <a class="panel-button gray2"><i class="fa fa-cog fa-spin fa-2x"></i></a>
        <!-- Colors -->
        <div class="segment">
            <h4 class="gray2 normal no-padding">Color Scheme</h4>
            <a title="orange" class="switcher orange-bg"></a>
            <a title="strong-blue" class="switcher strong-blue-bg"></a>
            <a title="moderate-green" class="switcher moderate-green-bg"></a>
            <a title="vivid-yellow" class="switcher vivid-yellow-bg"></a>
        </div>
    </section>

    <!-- ALL JS FILES -->
    <script src="../js/all.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="../js/custom.js"></script>
</body>
<?php
}
else
{
    header("location:../index.php");
}
?>
</html>