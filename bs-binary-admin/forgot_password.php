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
<body">
    <div class="container">
        <div class="row text-center ;">
            <div class="col-md-12">
                <img src="assets/img/forgot.jpg" width="350" height="250"/>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">                           
                    <div class="panel-body">
                        <form role="form" method="POST">
                            <hr />
                            <h5>Please fill in your information here</h5>
                               <br />
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                    <input type="text" name="txt_username" class="form-control" placeholder="Your Username " />
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                    <input type="email" name="txt_email" class="form-control"  placeholder="Your Email" />
                                </div>                                                                            
                            <hr /> 
                            <input type="submit" name="btn_submit" class="btn btn-primary " value="Send">                                   
                        </form>
                    </div>

                    <?php
                        include("../PHPMailer/src/DSNConfigurator.php");
                        include ("../PHPMailer/src/Exception.php");
                        include ("../PHPMailer/src/OAuth.php");
                        include ("../PHPMailer/src/POP3.php");
                        include ("../PHPMailer/src/PHPMailer.php");
                        include ("../PHPMailer/src/SMTP.php");

                        use PHPMailer\PHPMailer\PHPMailer;
                        use PHPMailer\PHPMailer\Exception; 
                        
                        if(isset($_POST["btn_submit"])) {
                            $data_user = new data_user();
                            $user_info = $data_user->select_user($_POST["txt_username"]);

                            if(mysqli_num_rows($user_info) == 1) {  
                                $mail = new PHPMailer(true);
                                try {
                                        $mail->SMTPDebug=2;
                                        $mail->isSMTP();
                                        $mail->Host='smtp.gmail.com';
                                        $mail->SMTPAuth=true;
                                        $mail->Username='thuynguyen02072003@gmail.com';
                                        $mail->Password='hxwe choi zqgk avqq';
                                        $mail->SMTPSecure='tls';
                                        $mail->Port=587;
                                        $mail->CharSet='utf-8';
                                        $mail->setFrom('thuynguyen02072003@gmail.com');
                                        $mail->addAddress('vannt2368@gmail.com','Cô Vân');
                                        $mail->isHTML(true);
                                        $mail->Subject='Cảm ơn!';
                                        $mail->Body='Cảm ơn bạn đã quan tâm đến nội dung website này';
                                        $mail->send();
                                        echo "<script>alert('Gửi thành công');</script>";
                                        echo "Email đã được gửi";
                                    // vanyellow1211@gmail.com
                                
                                } catch (Exception $e) {
                                    echo "Message could not send. Mailer error : " . $mail->ErrorInfo;
                                } 
                                    
                            } else {
                                echo "<script> alert('Tài khoản này không tồn tại') </script>";
                            }
                        }
                    ?>
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
