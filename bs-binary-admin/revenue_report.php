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
</head>8
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
                <a style="background-color: #ff7700;"class="navbar-brand" href="index.html">ADMIN</a> 
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
                        <a class="active-menu"  href="index123.html"><i class="fa fa-dashboard fa-3x"></i> Home </a>
                    </li>
                    <li>
                        <a  href="login.php"><i class="fa fa-user fa-3x"></i> Login </a>
                    </li>
                    <!--<li>
                        <a  href="register.php"><i class="fa fa-edit fa-3x"></i> Register </a>
                    </li> 


                     <li>
                        <a href="#"><i class="fa fa-user fa-3x"></i> User <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a  href="login.php"><i class="fa fa-user fa-3x"></i> Login </a>
                            </li>
                            <li>
                                <a  href="register.php"><i class="fa fa-edit fa-3x"></i> Register </a>
                            </li> 
                        </ul>
                    </li> -->

                    
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
                <div class="row">
                    <div class="col-md-12">
                    <h2> Table REPORT </h2>   
                        <h5>This is dummy text , you can replace it with your original text. </h5>
                    </div>
                </div> 
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Select Report
                    </div>
                        <div class="panel-body">
                            <form method="POST">
                                <table class="table">
                                    <tr>
                                        <td style="width: 500px;">
                                            <div class="form-group"> 
                                                <label> Doanh thu từ </label> 
                                                <input class="form-control" type="date" name="txt_begin_date">
                                                <label> đến </label> 
                                                <input class="form-control" type="date" name="txt_end_date" value="<?php echo date("Y-m-d") ?>">
                                            </div> 
                                        </td> 
                                        <td  style ="border-left: 1px solid gray; vertical-align: middle; text-align: center;">
                                            <div class="form-group">                                            
                                                <h1> 
                                                    <?php 
                                                        if(isset($_POST["btn_revenue_date"])) {
                                                            $data_user_order = new data_user_order();
                                                            
                                                            if(empty($_POST["txt_begin_date"]) || empty($_POST["txt_end_date"])) {
                                                                echo 0;
                                                            }
                                                            else {
                                                                $revenue_date = $data_user_order->revenue_date($_POST["txt_begin_date"], $_POST["txt_end_date"]);
                                                                echo $revenue_date; 
                                                            }                                                          
                                                        }
                                                    ?>
                                                </h1> 
                                                $Dolar                                            
                                            </div> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> 
                                            <button type="submit" class="btn btn-info" name="btn_revenue_date"> Tính doanh thu </button>
                                        </td>

                                        <td> </td>
                                    </tr>
                                </table>
                            </form>
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
