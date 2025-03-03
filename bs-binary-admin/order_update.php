<?php 
    include("../controls.php");
    $data_user_order = new data_user_order();
    $data_user_order->update_status($_GET["id"], $_GET["stt"]);
    echo "<script> window.location = 'order_select.php' </script>";