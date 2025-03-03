<?php 
    include("../controls.php");

    $data_contact = new data_contact();
    if($data_contact->delete_cont($_GET["id"])) {
        echo "<script> alert('Xóa Contact thành công.') </script>";
        header("location:contact_select.php");
    } else {
        echo "<script> alert('Lỗi!!') </script>";
    }