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
                        <a href="#"><i class="fa fa-dashboard "></i>Category</a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-yelp "></i>Product <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                        <li>
                                <a href="select.php"><i class="fa fa-flash "></i>List Product</a>
                            </li>
                            <li>
                                <a href="product.php"><i class="fa fa-coffee"></i>Insert Product</a>
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
                    <li>
                        <a href="order_list.php"><i class="fa fa-bicycle "></i>List Order <span class="fa arrow"></span></a>
                         
                    </li>

                    
                   
                    
                
                    

                    
                  
                </ul>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row" >
                    <div class="col-md-12">
                        <h1 class="page-head-line" >Product</h1>
                        <h1 class="page-subhead-line">Add new prodoct - WePHP - teacherVan </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row" >
            <div class="col-md-6 col-sm-6 col-xs-12" >
               <div class="panel panel-info" style="width: 210%;">
                        <div class="panel-heading">
                           PRODUCT
                        </div>
                        <div class="panel-body">
                            <form role="form" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Name Product</label>
                                            <input class="form-control" type="text" name="name">
                                            <p class="help-block">Inut Name here.</p>
                                        </div>
                                 <div class="form-group">
                                            <label>Number Product</label>
                                            <input class="form-control" type="text" name="sdt">
                                     <p class="help-block">Inut number here.</p>
                                        </div>
                                            <div class="form-group">
                                            <label >Picture Product</label>
                                            
                                                <input type="file" class="form-control" name="img">
                                           
                                            <p class="help-block">Inut number here.</p>
                                        </div>

                                        <div class="form-group">
                                            <label >Category Product</label>
                                                <br>
                                                <select  id="" class="form-control" name="sp">
                                                    <option value="Chưa chọn sản phẩm" >--Chọn loại sản phẩm--</option>
                                                    <option value="Thực phẩm" >--Thực phẩm--</option>
                                                    <option value="Thời trang" >--Thời trang--</option>
                                                    <option value="Điện tử" >--Điện tử--</option>
                                                </select>
                                           
                                            <p class="help-block">Inut selectnumber here.</p>
                                        </div>

                                        <div class="form-group">
                                            <label >Date Product</label>
                                            
                                                <input type="date" class="form-control" name="ngay">
                                           
                                            <p class="help-block">Inut Date here.</p>
                                        </div>

                                        <div class="form-group">
                                            <label >Price Product</label>
                                            
                                                <input type="text" class="form-control" name="price">
                                           
                                            <p class="help-block">Inut number here.</p>
                                        </div>

                                        <div class="form-group">
                                            <label >Description Product</label>
                                            
                                                
                                                
                                            <input type="text" class="form-control" name="des">
                                           
                                            <p class="help-block">Inut description here.</p>
                                        </div>
                                  
                                 
                                        <button type="submit" class="btn btn-info" name="insert">Insert </button>

                                    </form>

                                    <?php
                                    include('control.php');
                                    $get_data=new datapro();
                                    if(isset($_POST['insert']))
                                    {
                                        move_uploaded_file($_FILES['img']['tmp_name'],
                                         'upload/'.$_FILES['img']['name']);

                                         

                                        $in_pr=$get_data->insertpr($_POST['name'],
                                        $_POST['sdt'],$_FILES['img']['name'],$_POST['sp'],
                                        $_POST['ngay'],$_POST['price'],$_POST['des']);

                                        if($in_pr){
                                            echo "<script> alert('Thêm sản phẩm thành công'); </script>";
                                        }
                                        else echo "<script> alert ('Thêm sản phẩm không thành công'); </script>";
                                    }

                                    ?>
                                    <a href="select.php">Hiển thị</a>


                            </div>
                        </div>
                            </div>

          
                            <hr>
                            
    

</body>
</html>
