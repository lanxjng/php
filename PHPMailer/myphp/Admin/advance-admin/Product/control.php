<?php
    include('connect.php'); //Chen trang connect vao bai giangduong
    //Xay duong lop data_giangduong trong do chua ham lien quan dl giang duong
    class data_product
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
        public function insert_sp($tensp, $solg, $anhsp, $loaisp, $ngaynhap, $giasp, $mota)
    {
        global $connect;
        $sql = "INSERT INTO product(tensp, solg, anhsp, loaisp, ngaynhap, giasp, mota) 
        VALUES ('$tensp', '$solg', '$anhsp', '$loaisp','$ngaynhap','$giasp', '$mota')";
        $run = mysqli_query($connect,$sql);echo $sql;
        return $run;

    }
        public function select_sp()
        {
            global $connect;
            $sql = "SELECT * FROM product";
            $run = mysqli_query($connect,$sql);
            return $run;
        }
    
        public function select_sp_id($id_cate)
        {
            global $connect;
            $sql = "SELECT * FROM product WHERE ID_sp = '$id_cate'";
            $run = mysqli_query($connect,$sql);
            return $run;
        }
        public function update_sp($tensp, $solg, $anhsp, $loaisp, $ngaynhap, $giasp, $mota, $id_cate)
        {
            global $connect;
            $sql = "UPDATE product SET 
            tensp = '$tensp',
            solg = '$solg', 
            anhsp = '$anhsp', 
            loaisp = '$loaisp', 
            ngaynhap = '$ngaynhap', 
            giasp = '$giasp', 
            mota = '$mota'
            WHERE ID_sp = '$id_cate'";
            $run = mysqli_query($connect,$sql); 
            return $run;
        }
        
        public function delete_sp($id_cate)
        {
            global $connect;
            $sql = "DELETE FROM product WHERE ID_sp = '$id_cate'";
            $run = mysqli_query($connect,$sql);
            return $run;
        }
        
    }
    class data_category
    {
        public function insert_cate($tencate, $motacate)
    {
        global $connect;
        $sql = "INSERT INTO category(tencate, motacate) 
        VALUES ('$tencate', '$motacate')";
        $run = mysqli_query($connect,$sql);
        return $run;

    }
        public function select_cate()
        {
            global $connect;
            $sql = "SELECT * FROM category";
            $run = mysqli_query($connect,$sql);
            return $run;
        }
    
        public function select_cate_id($id_cate)
        {
            global $connect;
            $sql = "SELECT * FROM category WHERE ID_cate = '$id_cate'";
            $run = mysqli_query($connect,$sql);
            return $run;
        }
        public function update_cate($tencate, $motacate, $id_cate)
        {
            global $connect;
            $sql = "UPDATE category SET 
            tencate = '$tencate', 
            motacate = '$motacate'
            WHERE ID_cate = '$id_cate'";
            $run = mysqli_query($connect,$sql); 
            return $run;
        }
        
        public function delete_cate($id_cate)
        {
            global $connect;
            $sql = "DELETE FROM category WHERE ID_cate = '$id_cate'";
            $run = mysqli_query($connect,$sql);
            return $run;
        }
        
    }
    class data_loginadmin
    {
        public function insert_admin($username, $passwd)
    {
        global $connect;
        $sql = "INSERT INTO login_admin(username,passwd) 
        VALUES ('$username','$passwd')";
        $run = mysqli_query($connect,$sql);
        return $run;

    }
        public function select_admin()
        {
            global $connect;
            $sql = "SELECT * FROM login_admin";
            $run = mysqli_query($connect,$sql);
            return $run;
        }
        public function login($tk,$mk)
        {
            global $connect;
            $sql= "SELECT * FROM login_admin WHERE username='$tk' AND passwd='$mk'";
            $run = mysqli_query($connect,$sql);
            return $run;
        }
    
        public function select_admin_id($id_admin)
        {
            global $connect;
            $sql = "SELECT * FROM login_admin WHERE ID_admin = '$id_admin'";
            $run = mysqli_query($connect,$sql);
            return $run;
        }
        public function update_admin($username,$passwd, $id_admin)
        {
            global $connect;
            $sql = "UPDATE login_admin SET 
            username = '$username',
            passwd = '$passwd'
            WHERE ID_admin = '$id_admin'";
            $run = mysqli_query($connect,$sql); 
            return $run;
        }
        
        public function delete_admin($id_admin)
        {
            global $connect;
            $sql = "DELETE FROM login_admin WHERE ID_admin = '$id_admin'";
            $run = mysqli_query($connect,$sql);
            return $run;
        }
        
    }

    ?>