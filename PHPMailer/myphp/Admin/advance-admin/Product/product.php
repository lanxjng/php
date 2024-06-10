﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>INSERT_PRODUCT</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">COMPANY NAME</a>
            </div>

            <div class="header-right">

                <a href="message-task.html" class="btn btn-info" title="New Message"><b>30 </b><i class="fa fa-envelope-o fa-2x"></i></a>
                <a href="message-task.html" class="btn btn-primary" title="New Task"><b>40 </b><i class="fa fa-bars fa-2x"></i></a>
                <a href="login.html" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>


            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/user.png" class="img-thumbnail" />

                            <div class="inner-text">
                                Mẫn Lan
                                <br />
                                <small>Xin Chào </small>
                            </div>
                        </div>

                    </li>


                    <li>
                        <a href="category.php"><i class="fa fa-dashboard "></i>Category</a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-yelp "></i>Product <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="select.php"><i class="fa fa-coffee"></i>Select Product</a>
                            </li>
                            <li>
                                <a href="update.php"><i class="fa fa-flash "></i>Update Product</a>
                            </li>
                            <li>
                                <a href="delete.php"><i class="fa fa-key "></i>Delete Product</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-yelp "></i>Contact<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="login.php"><i class="fa fa-coffee"></i>Register</a>
                            </li>


                        </ul>
                    </li>

                </ul>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">PRODUCT</h1>
                        <h1 class="page-subhead-line">Add new Product - WebPHP - Teacher Vân Xing </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="panel panel-info" style="width: 200%;">
                            <div class="panel-heading">
                                PRODUCT
                            </div>
                            
                            <div class="panel-body">
                                
                                <form method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Name Product</label>
                                        <input class="form-control" type="text"  name="txttensp">
                                        <p class="help-block">Input Name here.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Number Product</label>
                                        <input class="form-control" type="text" name="txtsolg">
                                        <p class="help-block">Input number here.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Picture Product</label>
                                        <input class="form-control" type="file" name="txtfile">
                                        <p class="help-block">Input picture here.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Category Product</label>
                                        <select class="form-control" name="txtcategory" >
                                                    <option value="--Chọn loại sản phẩm--">--Chọn loại sản phẩm--</option>
                                                    <?php
                                                    include('control.php');
                                                    $get_data = new data_category();
                                                    $se_cate = $get_data->select_cate();
                                                    foreach($se_cate as $i_cate)
                                                    {
                                                    ?>
                                                        <option value="<?php echo $i_cate['tencate']?>">
                                                        <?php echo $i_cate['tencate']?></option>
                                                    <?php    
                                                    }
                                                    ?>
                                                </select>
                                        <p class="help-block">Input number here.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Date Product</label>
                                        <input class="form-control" type="date" name="txtngaynhap">
                                        <p class="help-block">Input Date here.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Price Product</label>
                                        <input class="form-control" type="number" name="txtgiasp">
                                        <p class="help-block">Input number here.</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Description Product</label>
                                        <textarea class="form-control" rows="3" name="txtmota"></textarea>
                                    </div>
                                    <div>
                                    <button type="submit" name="txtsub" class="btn btn-info">Insert </button>
                                    </div>


                                </form>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
        </div>
        <!-- /. WRAPPER  -->
        <div id="footer-sec">
            &copy; 2014 YourCompany | Design By : <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
        </div>
        <!-- /. FOOTER  -->
        <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
        <!-- JQUERY SCRIPTS -->
        <script src="assets/js/jquery-1.10.2.js"></script>
        <!-- BOOTSTRAP SCRIPTS -->
        <script src="assets/js/bootstrap.js"></script>
        <!-- METISMENU SCRIPTS -->
        <script src="assets/js/jquery.metisMenu.js"></script>
        <!-- CUSTOM SCRIPTS -->
        <script src="assets/js/custom.js"></script>

        <?php
        move_uploaded_file($_FILES['txtfile']['tmp_name'],'uploadd/'.$_FILES['txtfile']['name']);
        //include('control.php'); //Goi trang control
        $get_data = new data_product(); //Goi lop data giangduong trong trang control
        if(isset($_POST['txtsub']))
        {
            $in_sp = $get_data->insert_sp($_POST['txttensp'], $_POST['txtsolg'],$_FILES['txtfile']['name'],
            $_POST['txtcategory'],$_POST['txtngaynhap'], $_POST['txtgiasp'],$_POST['txtmota']);
            if($in_sp) echo "<script> alert('Thanh cong !!')</script>";
            else echo "<script> alert('Khong thuc thi duoc !!')</script>";
        }
        ?>
        <img src="uploadd/<?php echo $_FILES['txtfile']['name']?>" >
</body>

</html>