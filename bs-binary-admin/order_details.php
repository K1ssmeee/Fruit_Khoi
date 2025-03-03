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
                <a class="navbar-brand" href="index.html">ADMIN</a> 
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
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
                    <li>
                        <a class="active-menu"  href="index123.html"><i class="fa fa-dashboard fa-3x"></i> Home </a>
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
                <div class="row">
                    <div class="col-md-12">
                    <h2> Table ORDER_DETAILS </h2>   
                        <h5>This is dummy text , you can replace it with your original text. </h5>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-md-12">
                        <!--   Basic Table  -->
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            Order details
                        </div>
                        <div class="panel-body">
                        <?php 
                            $data_user = new data_user();
                            $data_user_order = new data_user_order();

                            $order_id = isset($_GET["id"]) ? $_GET["id"] : null;

                            if ($order_id) {
                                $order_result = $data_user_order->select_order($order_id);
                                if ($order_result) {
                                    $order = $order_result->fetch_assoc();
                                    $user_result = $data_user->select_user($order["username"]);
                                    if ($user_result) {
                                        $user = $user_result->fetch_assoc();
                                    } else {
                                        // Xử lý trường hợp không tìm thấy thông tin người dùng
                                        echo "Không tìm thấy thông tin người dùng";
                                        exit();
                                    }
                                } else {
                                    // Xử lý trường hợp không tìm thấy thông tin đơn hàng
                                    echo "Không tìm thấy thông tin đơn hàng";
                                    exit();
                                }
                            } else {
                                // Xử lý trường hợp không có ID đơn hàng được cung cấp
                                echo "Không có thông tin đơn hàng nào";
                                exit();
                            }
                        ?>

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <tbody>
                                    <tr> 
                                        <td> Tên khách hàng </td>
                                        <td> <?php echo isset($user["UserName"]) ? $user["UserName"] : "Không có thông tin" ?> </td>
                                    </tr>

                                    <tr> 
                                        <td> Địa chỉ </td>
                                        <td> <?php echo isset($user["Address"]) ? $user["Address"] : "Không có thông tin" ?> </td>
                                    </tr>
                                    <tr> 
                                        <td> Ngày đặt </td>
                                        <td> <?php echo isset($order["date_order"]) ? $order["date_order"] : "Không có thông tin" ?> </td>
                                    </tr>

                                    <tr> 
                                        <td> Trạng thái </td>
                                        <td> <?php echo isset($order["status"]) ? $order["status"] : "Không có thông tin" ?> </td>
                                    </tr>
                                    <table class="table table-bordered ">
                                        <br>
                                        <tr>
                                            <td colspan="4" style="text-align: center; font-weight: bold;"> Danh sách sản phẩm </td>
                                        </tr>  
                                        
                                        <tr>
                                            <th>Tên sản phẩm</th>
                                            <th>Hình ảnh</th>
                                            <th>Số lượng</th>
                                            <th>Đơn giá</th>                                            
                                        </tr>

                                        <?php 
                                            $order_pro = $data_user_order->select_order_pro($order["id_order"]);

                                            foreach($order_pro as $product) {
                                        ?>

                                        <tr> 
                                            <td> <?php echo $product["Name_pro"] ?> </td>
                                            <td> 
                                            <img src="../image/<?php echo $product["Picture_pro"] ?>" alt="" style="width: 80px;">
                                            </td>
                                            <td> <?php echo $product["Number_buy"] ?> </td>
                                            <td> <?php echo $product["Price_pro"] ?> </td>                                            
                                    <tr>
                                    <?php 
                                        }
                                      ?>
                                      <tr>                                        
                                        <td colspan="4" style="text-align: right; font-weight: bold;"> 
                                             <?php echo "Tổng tiền : $ ". (isset($order["money_into"]) ? $order["money_into"] : "Không có thông tin") ?>
                                        </td>
                                      </tr>
                                    </table>
                                    </tr>
                                </tbody>
                                <tr> 
                                    <h3> <a href="order_select.php"> << Quay lại </a> </h3>
                                </tr>
                            </table>
                            </div>
                        </div>
                    </div>
                        <!-- End  Basic Table  -->
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
