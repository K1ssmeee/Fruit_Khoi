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
                    <img src="assets/img/427891565_3886442048308866_5888833976259791503_n.jpg" class="user-image img-responsive"/>
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
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-head-line"> Update PRODUCT</h2>
                        <h5 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h5>

                    </div>
                </div>
     <!-- /. ROW  -->
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-24">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           Update here
                        </div>
                        <div class="panel-body">
                            <form role="form" method="POST" enctype="multipart/form-data">
                                <?php 
                                    $data_product = new data_product();
                                    $update_pro = $data_product->select_product($_GET["id"])->fetch_assoc();
                                ?>
                                        <div class="form-group">
                                            <label>Name Product</label>
                                            <input class="form-control" type="text" name="txt_name" value="<?php echo $update_pro["Name_pro"] ?>">
                                            <p class="help-block">Input name here.</p>
                                        </div>

                                        <div class="form-group">
                                            <label>Choose Category</label>
                                            <select class="form-control" name="txt_category">
                                                <?php 
                                                    $data_category = new data_category();
                                                    $cate = $data_category->select_all_cate();

                                                    echo "<option value='" . $update_pro["Category_pro"] . "'>" . $update_pro["Category_pro"] . "</option>";
                                                    echo "<option> - - - - - </option>";
                                                    foreach($cate as $category) {
                                                        echo "<option value='" . $category["Name_cate"] . "'>" . $category["Name_cate"] . "</option>";
                                                    }
                                                ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Choose Picture</label> <br>
                                            <img src="../image/<?php echo $update_pro["Picture_pro"] ?>" style="width:200px;">
                                            <input class="form-control" type="file" name="txt_picture">
                                            <input type="hidden" name="txt_old_picture" value="<?php echo $update_pro["Picture_pro"] ?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Quantity Product</label></label>
                                            <input class="form-control" type="number" name="txt_quantity" value="<?php echo $update_pro["Quantity_pro"] ?>">
                                            <p class="help-block">Input number here</p>
                                        </div>                                        
                                    
                                        <div class="form-group">
                                            <label>Price Product</label>
                                            <input class="form-control" type="number" name="txt_price" value="<?php echo $update_pro["Price_pro"] ?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Date Product</label>
                                            <input class="form-control" type="date" name="txt_date" value="<?php echo $update_pro["Date_pro"] ?>">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Description Product</label>
                                            <textarea class="form-control" rows="3" name="txt_description"> <?php echo $update_pro["Description_pro"] ?> </textarea>
                                        </div>    
                                        <br>
                                        <button type="submit" class="btn btn-info" name="btn_sub"> Update data </button>                          
                                </form>
                            </div>    

                                    <?php
  
                                        if(isset($_POST["btn_sub"])) {
                                            $file_name = "";

                                            if($_FILES["txt_picture"]['error'] !== 4) {
                                                move_uploaded_file($_FILES["txt_picture"]["tmp_name"], "../image/" . $_FILES["txt_picture"]["name"]);
                                                $file_name = $_FILES["txt_picture"]["name"];
                                            } else {
                                                $file_name = $_POST["txt_old_picture"];
                                            }

                                            $data_product = new data_product();
                                            if($data_product->update_pro(
                                                $_GET["id"],
                                                $_POST["txt_name"],
                                                $_POST["txt_category"],
                                                $file_name,
                                                $_POST["txt_quantity"],
                                                $_POST["txt_price"],                                                
                                                $_POST["txt_date"],                                                
                                                $_POST["txt_description"]
                                            )) 
                                            {
                                                echo "<script> alert('Sửa Product thành công.'); window.location = 'product_select.php' </script>";
                                            }
                                        }
                                    ?>
                        </div> 
                    </div>
                </div>
            </div>        
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
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
