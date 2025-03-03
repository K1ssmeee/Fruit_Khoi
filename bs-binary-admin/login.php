<?php 
    include("../controls.php");
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a style="background-color: #ff7700;" class="navbar-brand" href="index.html">ADMIN</a> 
            </div>
            <div style="color: white;
                        padding: 15px 50px 5px 50px;
                        float: right;
                        font-size: 16px;"> Hello and Goodbye &nbsp; 
                    <a href="#" class="btn btn-danger square-btn-adjust"> Logout </a>
            </div>
        </nav>   
           <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				    <li class="text-center">
                    <img src="assets/img/427891565_3886442048308866_5888833976259791503_n.jpg" class="user-image img-responsive"/>
					</li>
                    <li>
                        <a  class="active-menu"  href="index123.html" ><i class="fa fa-dashboard fa-3x"></i> Home </a>
                    </li>
                    <li>
                        <a  href="login.php"><i class="fa fa-user fa-3x"></i> Login </a>
                    </li>                    
                    <!-- <li>
                        <a  href="register.php"><i class="fa fa-edit fa-3x"></i> Register </a>
                    </li>  -->
                       
                    <li>
                        <a  href="#"><i class="fa fa-folder fa-3x"></i> Category <span class="fa arrow"></span> </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a  href="category_register.php"><i class="fa fa-edit fa-3x"></i> Add Category </a>
                            </li>
                            <li>
                                <a  href="category_select.php"><i class="fa fa-table fa-3x"></i> Data Category </a>
                            </li> 
                        </ul>
                    </li>
					<li>
                        <a   href="#"><i class="fa fa-folder fa-3x"></i> Product <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a  href="product_register.php"><i class="fa fa-edit fa-3x"></i> Add Product </a>
                            </li>
                            <li>
                                <a  href="product_select.php"><i class="fa fa-table fa-3x"></i> Data Product</a>
                            </li> 
                        </ul>
                    </li>	
                    <li>
                        <a  href="contact_select.php"><i class="fa fa-phone fa-3x"></i> Contact </a>
                    </li>
                    <li>
                        <a  href="order_select.php"><i class="fa fa-shopping-cart fa-3x"></i> Order </a>
                    </li>				
					<li>
                        <a  href="#"><i class="fa fa-flag fa-3x"></i> Report <span class="fa arrow"></span> </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a  href="revenue_report.php"><i class="fa fa-edit fa-3x"></i> Revenue </a>
                            </li>
                            <li>
                                <a  href="out_of_stock.php"><i class="fa fa-times fa-3x"></i> Out of stock </a>
                            </li> 
                        </ul>
                    </li>
                </ul>               
            </div>            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <!-- <div class="row">
                    <div class="col-md-12">
                    <h2> Form LOGIN  </h2>
                    </div>
                </div>  -->
            <div class="container">
                <div class="row text-center ;">
                    <div class="col-md-12">
                        <img src="assets/img/login1.png" width="500" height="150"/>
                    </div>
                </div>
                <div class="row ">                    
                    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel-body">
                            <form role="form" method="POST">
                                <hr/>
                                <h5>Enter Details to Login</h5>
                                <br >
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                    <input type="text" name="txt_username" class="form-control" placeholder="Your Username " />
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                    <input type="password" name="txt_password" class="form-control"  placeholder="Your Password" />
                                </div>
                                <div class="form-group">
                                    <label class="checkbox-inline"> <input type="checkbox" /> Remember me  </label>
                                    <span class="pull-right"> <a href="forgot_password.php"> Forget password ? </a> </span>
                                </div>
                                <input type="submit" name="btn_submit" class="btn btn-primary " value="Login Now">
                                <hr />
                                Want register ? <a href="register.php"> click here </a> or go to <a href="index.html">Home</a> 
                            </form>
                            <?php 
                                $data_user = new data_user();
                                if(isset($_POST["btn_submit"])) {
                                    $user_info = $data_user->select_user($_POST["txt_username"]);
                                    if(mysqli_num_rows($user_info) == 1) {                                      
                                        if($_POST["txt_password"] == $user_info->fetch_assoc()["Password"]) {
                                            echo "<script> alert('Đăng nhập thành công'); window.location='index123.html' </script>";
                                        } else {
                                                echo "<script> alert('Nhập sai mật khẩu') </script>";
                                            }
                                    } else {
                                            echo "<script> alert('Tài khoản này không tồn tại') </script>";
                                        }
                                }
                            ?>
                        </div>                               
                    </div>                     
                </div>
            </div>
        </div>
    </div>

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
