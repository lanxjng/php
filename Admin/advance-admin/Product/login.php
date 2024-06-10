<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body style="background-color: #E2E2E2;">
    <div class="container">
        <div class="row text-center " style="padding-top:100px;">
            <div class="col-md-12">
                <img src="assets/img/logo-invoice.png" />
            </div>
        </div>
         <div class="row ">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                           
                            <div class="panel-body">
                                <form role="form" method="post">
                                    <hr />
                                    <h5>LOGIN</h5>
                                       <br />
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                        <input type="text" name="txtusername"class="form-control" placeholder="Your Username " />
                                    </div>

                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                        <input type="password" name="txtpasswd"class="form-control"  placeholder="Your Password" />
                                    </div>

                                    <div class="form-group">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" /> Remember me
                                            </label>
                                            <span class="pull-right">
                                                   <a href="index123.php" >Forget password ? </a> 
                                            </span>
                                        </div>
                                     
                                     <button name="send" class="btn btn-primary ">Login Now</button>
                                     <a href="register.php" style="text-decoration;margin-left:20px ">Register</a>
                                     
                                    <hr />
                                    Not register ? <a href="index123.php" >click here </a> or go to 
                                    <a href="index123.php">Home</a> 
                                    </form>
                                    <?php
                                        include('control.php'); //Goi trang control
                                        $get_data = new data_loginadmin(); //Goi lop data giangduong trong trang control
                                        session_start();
                                        if(isset($_POST['send'])){
                                        $tk=$_POST['txtusername'];
                                        $mk=($_POST['txtpasswd']);
                                        $in_login = $get_data->login($_POST['txtusername'], $_POST['txtpasswd']);
                                            if(mysqli_num_rows($in_login)==0){
                                                echo "Tên đăng nhập hoặc mật khẩu không đúng. 
                                                    Vui lòng kiểm tra lại.
                                                    <a href='login.php'>ĐĂNG KÝ</a>";
                                                    exit;
                                            }
                                            //Lấy mật khẩu trong database ra
                                            $row = mysqli_fetch_array($in_login);
                                            //So sánh 2 mật khẩu có trùng khớp hay không
                                            if($mk != $row['passwd']){
                                                echo "Mật khẩu không đúng. Vui lòng nhập lại.
                                                <a href='login.php'></a>";
                                                exit;
                                            }
                                            //Lấy thông tin người dùng
                                                $_SESSION['taikhoan']=$tk;
                                                echo "<script>alert('Đăng nhập thành công!');
                                                window.location='admin123.php';</script>";
                                        }
                                        
                                    ?>
                            </div>
                           
                        </div>
                
                
        </div>
    </div>

</body>
</html>
