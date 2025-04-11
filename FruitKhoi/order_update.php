<?php 
    session_start();
    if(!empty($_SESSION["orders"])) {
        if($_SESSION["orders"][$_GET["i"]]["product"]["Quantity_pro"] < $_GET["number"]) {
            echo "
                <script> 
                    alert('Không thể mua quá số lượng tồn kho'); 
                    window.location = 'cart.php';
                </script>
                ";
        } else {
            $_SESSION["orders"][$_GET["i"]]["Number_buy"] = $_GET["number"];
            header("location:cart.php");
        }
    }