<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SELECT PRODUCT</title>

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
                        <a href="#"><i class="fa fa-yelp "></i>Product <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="select.php"><i class="fa fa-coffee"></i>Select Product</a>
                            </li>
                            <li>
                                <a href="delete.php"><i class="fa fa-flash "></i>Delete Product</a>
                            </li>
                            <li>
                                <a href="update.php"><i class="fa fa-key "></i>Update Product</a>
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
                        <h1 class="page-head-line">Data Product</h1>
                        <h1 class="page-subhead-line">Select Product - WebPHP - Teacher Vân Xing. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->

                <div class="row">
                    
                    <div class="col-md-6">
                        <!--    Context Classes  -->
                        <div class="panel panel-default" style="width: 200%;">

                            <div class="panel-heading" >
                                Select Product
                            </div>
    <?php
    include "control.php"; // goi trang control
    $get_data = new data_product(); // goi class data_gd trong control
    $select_sp = $get_data->select_sp(); //goi function

    ?>

                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th>Name product</th>
                                            <th>Number product</th>
                                            <th>Picture product</th>
                                            <th>Category product</th>
                                            <th>Date product</th>
                                            <th>Price product</th>
                                            <th>Decription product</th>
                                            <th colspan="2">Tùy Chọn</th>
                                        </tr>
                                        <?php
                                        foreach($select_sp as $i_sp) // Duyet dl
                                        {
                                        ?>
                                        <tr>
                                            <td><?php echo $i_sp['tensp']?></td>
                                            <td><?php echo $i_sp['solg']?></td>
                                            <td><img src="uploadd/<?php echo $i_sp['anhsp']?>" width="200px" height="200px"></td>
                                            <td><?php echo $i_sp['loaisp']?></td>
                                            <td><?php echo $i_sp['ngaynhap']?></td>
                                            <td><?php echo $i_sp['giasp']?></td>
                                            <td><?php echo $i_sp['mota']?></td>
                                            <td><a href="update.php?up=<?php echo $i_sp['ID_sp']?>">Update</a></td>
                                            <td><a href="delete.php?del=<?php echo $i_sp['ID_sp']?>" 
                                            onclick="if(confirm('Bạn có chắc chắn xóa?')) return true;
                                                    else return false";>Delete</a></td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--  end  Context Classes  -->
                    </div>
                </div>
                <!-- /. ROW  -->

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


</body>

</html>