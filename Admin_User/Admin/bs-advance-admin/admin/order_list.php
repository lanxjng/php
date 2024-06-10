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
                                Jhon Deo Alex
                            <br />
                                <small>Last Login : 2 Weeks Ago </small>
                            </div>
                        </div>

                    </li>

                    <li>
                        <a class="active-menu" href="select.php"><i class="fa fa-flash "></i>List Product </a>
                        
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bicycle "></i>Forms <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                           
                             <li>
                                <a href="product.php"><i class="fa fa-desktop "></i>Basic </a>
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
                        <h1 class="page-head-line">Data Table</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
              
            <div class="row">
                <div class="col-md-6">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default" style="width: 200%;">
                        <div class="panel-heading" >
                            Product
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                            <?php
                            include('control.php');
                            $get_data=new datapro();
                            $select_don=$get_data->selectdon();
                            ?>
                            <form role="form" method="POST" enctype="multipart/form-data">

                                <table class="table table-striped table-bordered table-hover">
                                    
                                
                <tr class="k2">
                    <td><h4>Tên khách hàng</h4></td>
                    <td><h4>Tên sản phẩm</h4></td>
                    <td><h4>Ảnh minh họa</h4></td>
                    <td><h4>Số lượng</h4></td>
                    <td><h4>Tổng tiền</h4></td>
                    <td><h4>Trạng thái</h4></td>
                    <td><h4>Duyệt</h4></td>
                    <td><h4>Xóa</h4></td>
                </tr>

            <?php
            
            foreach ($select_don as $i_dk)
            {
                ?>
                <tr class="k2">
                    <td><?php echo $i_dk['name_nm'] ?></td>
                    <td><?php echo $i_dk['name_sp'] ?></td>
                    <td><img src="upload/<?php echo $i_dk['anh'] ?>" alt="" width="100px" height="100px"></td>
                    
                    <td><?php echo $i_dk['soluong'] ?></td>
                    
                    <td><?php echo $i_dk['tongtien'] ?></td>
                    <td><h4>Đã xác nhận</h4></td>
                    <td ><a href="#"> Update </a></td>

                    <td><a href="#"
                    onclick="if(confirm('Bạn có chắc muốn xóa'))return true;
                    else return false";> Delete </td>
                </tr> 
                <?php
            }
   
            
            ?>
                                    
                                </table>
        </form>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
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


</body>
</html>
