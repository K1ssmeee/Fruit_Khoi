<?php 
    include("../controls.php");

    $data_product = new data_product();
    if($data_product->delete_pro($_GET["id"])) {
        echo "<script> alert('Xóa Product thành công.') </script>";
        header("location:product_select.php");
    } 
    else {
        echo "<script> alert('Lỗi!!') </script>";
    }
?>