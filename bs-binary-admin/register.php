<?php 
    include("../controls.php");
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Admin</title>
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

<div class="container d-flex justify-content-center">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Form REGISTER</h2>   
                <h5>This is dummy text, you can replace it with your original text.</h5>
            </div>
        </div> 
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-24">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Register here
                    </div>
                    <div class="panel-body">
                        <form role="form" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Enter UserName</label>
                                        <input class="form-control" type="text" name="txt_username">
                                        <p class="help-block">Help text here.</p>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label>Choose Gender</label>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="txt_gender" id="gender_male" value="male" checked=""> Male
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="txt_gender" id="gender_female" value="female"> Female
                                            </label>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label>Enter Email</label>
                                        <input class="form-control" type="text" name="txt_email">
                                        <p class="help-block">Help email here.</p>
                                    </div>  
                                    <div class="form-group">
                                            <label>Address</label>
                                            <textarea class="form-control" rows="2" name="txt_address"></textarea>
                                            <p class="help-block">Help text here.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Password</label>
                                        <input class="form-control" type="password" name="txt_password">
                                        <p class="help-block">Help password here.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Retype Password</label>
                                        <input class="form-control" type="password" name="txt_retype_password">
                                        <p class="help-block">Help password here.</p>
                                    </div>                                    
                                    <div class="form-group">
                                        <label>Choose Hobby</label>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="txt_hobby[]" value="Football">Football
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="txt_hobby[]" value="Code">Code
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="txt_hobby[]" value="Shopping">Shopping
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="txt_hobby[]" value="Code">Travel
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="txt_hobby[]" value="Shopping">Game
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Upload Avatar</label>
                                        <input class="form-control" type="file" name="txt_avatar">
                                    </div>
                                     
                                    <div class="panel-body">                   
                                        <button type="submit" class="btn btn-info" name="btn_submit"> Send Message </button>
                                    </div>
                                </form>
                                <?php
                                    if(isset($_POST["btn_submit"])) {
                                        if(empty($_POST['txt_username'])) {
                                            echo "<script> alert('Chưa nhập tên đăng nhập') </script>"; 
                                        } 
                                        elseif (empty($_POST["txt_password"])) {
                                             echo "<script> alert('Chưa nhập mật khẩu') </script>"; 
                                        }
                                        elseif ($_POST["txt_password"] != $_POST['txt_retype_password']) {
                                            echo "<script> alert('Mật khẩu nhập lại không đúng') </script>"; 
                                        }

                                        move_uploaded_file($_FILES["txt_avatar"]["tmp_name"], "../image/" . $_FILES["txt_avatar"]["name"]);

                                            $username = $_POST["txt_username"];
                                            $gender = $_POST["txt_gender"];
                                            $email = $_POST["txt_email"];
                                            $address = $_POST["txt_address"];
                                            $password = $_POST["txt_password"];
                                            $hobbies = $_POST["txt_hobby"];
                                            $avatar_path = $_FILES["txt_avatar"]["name"];
                                            

                                            $hobby_str = "";
                                            
                                            if(isset($hobbies)) {
                                                foreach($hobbies as $hobby) {
                                                    $hobby_str .= ($hobby . " ");
                                                }                                                
                                            }
                                            
                                            $data_user = new data_user();
                                            if($data_user->insert_user($username, $gender, $email, $address, $password, $hobby, $avatar_path)) {
                                                echo "<script> alert('Đăng ký thành công.') </script>";
                                            } else {
                                                echo "<script> alert('Đăng ký thất bại !!!') </script>";
                                            }
                                        }
                                    ?>
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
