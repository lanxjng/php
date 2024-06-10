
    <?php
    include('connect.php');
    class datapro{
        public function insertpr($user,$pass,$add,$avt,$gender,$hobby,$hhh)
        {
            global $conn;
            $sql="insert into product(name,sdt,pict,cate,date,pric,des)
            values('$user','$pass','$add','$avt','$gender','$hobby','$hhh')";
            $run=mysqli_query($conn,$sql);
            return $run;
            
        }

        public function selectpr()
        {
            global $conn;
            $sql=" select * from product";
            $run=mysqli_query($conn,$sql);
            return $run; 
            
        }

        public function selectprid($id)
        {
            global $conn;
            $sql=" select * from product where id_product=$id";
            $run=mysqli_query($conn,$sql);
            return $run; 
            
        }

        public function slidsp()
        {
            global $conn;
            $sql=" select * from donmua order by id_dm desc";
            $run=mysqli_query($conn,$sql);
            return $run;
            
        }

        public function category()
        {
            global $conn;
            $sql=" select * from product order by id_product desc";
            $run=mysqli_query($conn,$sql);
            return $run;
            
        }

        public function deletepr($xoa)
        {
            global $conn;
            $sql="delete from product where id_product='$xoa'";
            $run=mysqli_query($conn,$sql);
            return $run;
            
        }

        public function id($id)
        {
            global $conn;
            $sql="select * from product where id_product='$id'";
            $run=mysqli_query($conn,$sql);
            return $run;
            
        }

        public function updatepr($name,$sdt,$pict,$cate,$date,$pric,$des,$id)
        {
            global $conn;
            $sql="update product set name='$name',sdt='$sdt',
            pict='$pict',cate='$cate',date='$date',pric='$pric',
            des='$des' where id_product='$id'";
            $run=mysqli_query($conn,$sql);
            return $run;
            
        }  

        public function updateprso($sdt,$id)
        {
            global $conn;
            $sql="update product set sdt='$sdt'
            where id_product='$id'";
            $run=mysqli_query($conn,$sql);
            return $run;
            
        }  

        public function updatedes($des,$name)
        {
            global $conn;
            $sql="update product set 
            des='$des' where name='$name'";
            $run=mysqli_query($conn,$sql);
            return $run;
            
        }  

        public function insertuser($user,$pass,$email,$phone)
        {
            global $conn;
            $sql="insert into user(name,pass,email,avat)
            values('$user','$pass','$email','$phone')";
            $run=mysqli_query($conn,$sql);
            return $run;
            
        }
        public function selectuser()
        {
            global $conn;
            $sql=" select * from user";
            $run=mysqli_query($conn,$sql);
            return $run; 
            
        }

        public function insertdon($user,$pass,$email,$phone,$anh)
        {
            global $conn;
            $sql="insert into donmua(name_nm,name_sp,soluong,tongtien,anh)
            values('$user','$pass','$email','$phone','$anh')";
            $run=mysqli_query($conn,$sql);
            return $run;
            
        }
        public function selectdon()
        {
            global $conn;
            $sql=" select * from donmua ";
            $run=mysqli_query($conn,$sql);
            return $run;
            
        }

        public function selectuserid($id)
        {
            global $conn;
            $sql=" select * from user where id_user=$id";
            $run=mysqli_query($conn,$sql);
            return $run; 
            
        }
        public function selecthd()
        {
            global $conn;
            $sql=" select * from donmua";
            $run=mysqli_query($conn,$sql);
            return $run; 
            
        }

        public function setpass($pass,$email)
        {
            global $conn;
            $sql="update user set 
            pass='$pass' where email='$email' ";
            $run=mysqli_query($conn,$sql);
            return $run; 
            
        }

        
    }
    

    ?>