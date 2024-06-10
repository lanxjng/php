<?php
    include('connect.php'); //Chen trang connect vao bai giangduong
    
    class data_register
    {
        public function select_product_id($id)
        {
            global $connect;
            $sql = "SELECT * FROM product WHERE ID_sp = '$id'";
            $run = mysqli_query($connect,$sql);
            return $run;
        }
        public function insert_order($id_pro, $username, $number_order, $total, $status_or)
        {
            global $connect;
            $sql = "INSERT INTO order_pro(ID_pro, username, number_order, total, status_or)
            VALUES ('$id_pro', '$username', '$number_order', '$total', '$status_or')";
            $run = mysqli_query($connect,$sql);
            return $run;

        }
        public function select_order_id($id_pro,$username)
        {
            global $connect;
            $sql = "SELECT * FROM order_pro WHERE ID_pro = '$id_pro' AND username = '$username'";
            $run = mysqli_query($connect,$sql);
            return $run;
        }
        public function update_number($number_order, $id_pro)
        {
            global $connect;
            $sql = "UPDATE product SET 
            solg = '$number_order' WHERE ID_sp = '$id_pro'";
            $run = mysqli_query($connect,$sql); 
            return $run;
        }

        public function insert_dk($username, $phone, $passwd, $re_passwd, $email, $addresss, $avatar)
        {
            global $connect;
            $sql = "INSERT INTO register(username, phone, passwd, re_passwd, email, addresss, avatar) 
            VALUES ('$username','$phone','$passwd','$re_passwd','$email','$addresss','$avatar')";
            $run = mysqli_query($connect,$sql);
            return $run;

        }
        public function loginn($tk,$mk)
        {
            global $connect;
            $sql= "SELECT * FROM register WHERE email='$tk' AND passwd='$mk'";
            $run = mysqli_query($connect,$sql);
            return $run;
        }
        public function select_dk()
        {
            global $connect;
            $sql = "SELECT * FROM register";
            $run = mysqli_query($connect,$sql);
            return $run;
        }
    
        public function select_dk_id($id_user)
        {
            global $connect;
            $sql = "SELECT * FROM register WHERE ID_user = '$id_user'";
            $run = mysqli_query($connect,$sql);
            return $run;
        }
        public function update_dk($username, $phone, $passwd, $re_passwd, $email, $addresss, $avatar, $id_user)
        {
            global $connect;
            $sql = "UPDATE register SET 
            username = '$username',
            phone = '$phone', 
            passwd = '$passwd', 
            re_passwd = '$re_passwd', 
            email = '$email', 
            addresss = '$addresss', 
            avatar = '$avatar'
            WHERE ID_user = '$id_user'";
            $run = mysqli_query($connect,$sql); 
            return $run;
        }
        
        public function delete_dk($id_user)
        {
            global $connect;
            $sql = "DELETE FROM register WHERE ID_user = '$id_user'";
            $run = mysqli_query($connect,$sql);
            return $run;
        }
        
    }

    ?>