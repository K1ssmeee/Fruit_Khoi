<?php 
    include("../controls.php");

    $data_category = new data_category();
    $data_product = new data_product();

    if($data_category->delete_cate($_GET["id"]) && $data_product->delete_by_cate($_GET["name"])) {
        echo "<script> alert('Xóa Category thành công!!'); 
                window.location='category_select.php'; </script>";
    } else {
        echo "<script> alert('Lỗi!!') </script>";
    }