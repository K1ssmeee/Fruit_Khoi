<?php 
    include("connect.php");

    class data_user {
        public function insert_user($username, $gender, $email, $address, $password, $hobby, $avatar_path) {
            global $conn;
            $sql = "insert into user(UserName, Gender, Email, Address, Password, Hobby, Avatar) 
                    VALUES('$username', '$gender', '$email', '$address', '$password', '$hobby', '$avatar_path')";

            return mysqli_query($conn, $sql);
        }

        public function select_user($username) {
            global $conn;
            $sql = "select *from user where UserName='$username'";
            return mysqli_query($conn, $sql);
        }
    }


    class data_user_order {
        public function select_last_order() {
            global $conn;
            $sql = "select * from order_user ORDER BY ID_order DESC LIMIT 1";
            return mysqli_query($conn, $sql);
        }
        
        public function select_order_pro($id_order) {
            global $conn;
            $sql = "SELECT product.*, order_details.Number_buy FROM product INNER JOIN order_details ON product.ID_pro = order_details.ID_pro
                    WHERE ID_order = $id_order";
            return mysqli_query($conn, $sql);
        } 

        public function select_all_order() {
            global $conn;
            $sql = "SELECT ID_order, UserName, Date_order, Money_into, Status 
                    FROM order_user
                    INNER JOIN user
                    ON order_user.ID_user = user.ID_user";
            
            return mysqli_query($conn, $sql);
        }
        

        public function insert($orders, $id_user, $money_into) {
            global $conn;
            $today_date = date("Y-m-d");
            $sql = "INSERT INTO order_user(id_user, date_order, money_into)
                    VALUES('$id_user', '$today_date', '$money_into')";

            if(mysqli_query($conn, $sql)) {
                $sql = "SELECT id_order FROM order_user ORDER BY id_order DESC LIMIT 1";
                $id_order = mysqli_query($conn, $sql)->fetch_assoc()["id_order"];

                foreach($orders as $order) {
                    try {
                        $id_pro = $order["product"]["ID_pro"];
                        $quantity = $order["product"]["Quantity_pro"];
                        $number_buy = $order["Number_buy"];
                        $sql = "INSERT INTO order_details VALUES ('$id_order','$id_pro','$number_buy')";
                        mysqli_query($conn, $sql);
                        $sql = "UPDATE product SET quantity_pro = $quantity - $number_buy WHERE id_pro = '$id_pro'";
                        mysqli_query($conn, $sql);
                    }
                    catch(Exception $e) {
                        echo $e->getMessage();
                        return false;
                    }
                }

                return true;
            }

            return false;
        }


        public function select_order($id) {
            global $conn;
            $sql = "SELECT id_order, username, date_order, money_into, status 
                    FROM order_user INNER JOIN user ON order_user.id_user = user.id_user
                    WHERE id_order = '$id'";
            return mysqli_query($conn, $sql);
        }


        public function revenue_date($from, $to) {
            global $conn;
            $sql = "SELECT SUM(Money_into) AS revenue FROM order_user WHERE date_order BETWEEN '$from' AND '$to'";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) != 0) {
                return $result->fetch_assoc()["revenue"];
            }
            return 0;
        }

        
        
        public function update_status($id, $status) {
            global $conn;
            $sql = "UPDATE order_user SET status = '$status' WHERE id_order = '$id'";
            return mysqli_query($conn, $sql);
        }
    }


    class data_product {
        public function insert_pro($name, $category, $picture, $quantity, $price, $date, $description) {
            global $conn;
            $sql = "insert into product(Name_pro, Category_pro, Picture_pro, Quantity_pro, Price_pro, Date_pro, Description_pro) 
                    values('$name', '$category', '$picture', '$quantity', '$price', '$date', '$description')";
            return mysqli_query($conn, $sql);
        }

        public function select_all_pro() {
            global $conn;
            $sql = "select * from product";
            return mysqli_query($conn, $sql);
        }

        public function select_product($id_pro) {
            global $conn;
            $sql = "select * from product where ID_pro = '$id_pro'";
            return mysqli_query($conn, $sql);
        }

        public function check_product($name){
            global $conn;
            $sql= "select * from product where Name_pro='$name'";
            $run = mysqli_query($conn,$sql);
            return $run;
        }

        public function update_pro($id_pro, $name, $category, $picture, $quantity, $price, $date, $description) {
            global $conn;
            $sql = "update product  
                    set Name_pro = '$name',
                        Category_pro = '$category',
                        Picture_pro = '$picture', 
                        Quantity_pro = '$quantity', 
                        Price_pro = '$price',                         
                        Date_pro = '$date',                         
                        Description_pro = '$description'  
                    where ID_pro = '$id_pro'";
            return mysqli_query($conn, $sql);
        }

        // public function select_top($num) {
        //     global $conn;

        //     $sql = "SELECT * FROM product ORDER BY product_id DESC LIMIT $num";

        //     return mysqli_query($conn, $sql);
        // }

         public function select_out_of_stock() {
            global $conn;
            $sql = "SELECT * FROM product WHERE quantity_pro = 0";
             return mysqli_query($conn, $sql);
         }

        public function delete_pro($id_pro){
            global $conn;
            $sql = "delete from product where ID_pro = '$id_pro'";
            return mysqli_query($conn, $sql);
        }

        public function delete_by_cate($cate_name) {
            global $conn;
            $sql = "delete from product where Category_pro = '$cate_name'";
            return mysqli_query($conn, $sql);
        }

        
    }

    class data_category {
        public function insert_cate($name_cate, $des_cate) {
            global $conn;
            $sql = "insert into category(Name_cate, Description_cate) 
                    values('$name_cate', '$des_cate')";
            return mysqli_query($conn, $sql);
        }

        public function select_all_cate() {
            global $conn;
            $sql = "select * from category";
            return mysqli_query($conn, $sql);
        } 

        public function select_update_cate($id_cate) {
            global $conn;
            $sql="select * from category where ID_cate= '$id_cate'";
            $run=mysqli_query($conn, $sql);
            return $run;
        }

        public function update_cate($id_cate, $name_cate, $des_cate) {
            global $conn;
            $sql = "UPDATE category  
                    SET Name_cate = '$name_cate', 
                        Description_cate = '$des_cate' 
                    WHERE ID_cate = '$id_cate'";
            return mysqli_query($conn, $sql);
        }        

        public function delete_cate($id_cate) {
            global $conn;
            $sql = "delete from category WHERE ID_cate = '$id_cate'";
            return mysqli_query($conn, $sql);
        }

    }


    class data_contact {
        public function insert_cont($yourname, $phone, $email, $message, $date) {
            global $conn;
            $sql = "insert into contact(yourname, phone, email, message, date) 
                    values('$yourname', '$phone', '$email', '$message', '$date')";
            return mysqli_query($conn, $sql);
        }

        public function select_all_cont() {
            global $conn;
            $sql = "select * from contact";
            return mysqli_query($conn, $sql);
        }

        public function delete_cont($id_contact) {
            global $conn;
            $sql = "delete from contact where ID_contact = '$id_contact'";
            return mysqli_query($conn, $sql);
        }
    }



    
