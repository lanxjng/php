<?php session_start();

if(empty($_SESSION['id']))
{
  echo "<script> window.location='../../Admin/bs-advance-admin/admin/login.php'</script>";
}?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Ninom</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Dosis:400,600,700|Poppins:400,600,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <?php
  include('../../Admin/bs-advance-admin/admin/control.php');
  $getdata=new datapro();
  ?>
  <div class="hero_area">
    <!-- header section strats -->
    <div class="brand_box">
      <a class="navbar-brand" href="index.html">
        <span>
          Ninom
        </span>
      </a>
    </div>
    <!-- end header section -->
  </div>

  <!-- nav section -->

  <section class="nav_section">
    <div class="container">
      <div class="custom_nav2">
        <nav class="navbar navbar-expand custom_nav-container ">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          
          

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex  flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
              <li class="nav-item active">
                  <a class="nav-link" href="fruit.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="fruit.php">About </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="fruit.php">Our Fruit </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Category.php">Testimonial</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="invoice.php">List Order</a>
                </li>
                <?php
          if(!empty($_SESSION['id']))
          {
            $select_user=$getdata->selectuserid($_SESSION['id']);
          foreach($select_user as $in_user)
          
          ?>
          <span class="collapse navbar-collapse" id="navbarSupportedContent"
          style="color: aliceblue;">Hello: <span 
          style=" margin-left: 3px;
          font-weight: bold;"><?php echo $in_user['name'] ?></span></span>
          <?php
          }
          ?>

                <?php
                    if(!empty($_SESSION['id'])){
                     ?> 
                     <li class="nav-item">
                  <a class="nav-link"  href="logout.php"
                  onclick="if(confirm('Bạn có chắc muốn đăng xuất!'))
                     return true;else return false" name="out" 
                     style=" font-weight: bold;">Thoát</a>
                </li>
                      <?php
                    }
                    ?>
                
                
              </ul>
              <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </section>
  <?php
    
    $select_frui=$getdata->selectpr();
    if(!empty($_SESSION['id'])){
      $id=$_SESSION['id']; 
    }
    
  ?>

  <!-- end nav section -->

  <!-- fruit section -->
  <form method="POST" enctype="multipart/form-data">
  <section class="fruit_section layout_padding">
    <div class="container" >
      <div class="heading_container">
        <hr>
        <h2>
          Order Information
        </h2>
        <hr>
      </div>
      <?php
    $select_hd=$getdata->slidsp();
    foreach($select_hd as $in_hd)
    {
    ?>
    <style>
    
    td{
        padding: 10px 170px 5px 150px;
    }
</style>
    <table border="1px" align="center">
     <tr>
            <td>
                Người khách hàng
            </td>
            
            <td>
                <?php echo $in_hd['name_nm'] ?>
            </td>
        </tr>
        
        <tr>
            <td>
                Tên sản phẩm
            </td>
            
            <td>
            <?php echo $in_hd['name_sp'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Số lượng 
            </td>
            
            <td>
            <?php echo $in_hd['soluong'] ?>
            </td>
        </tr>
        
        <tr>
            <td>
                Ảnh minh hoạ
            </td >
            
            <td>
            <img src="../../Admin/bs-advance-admin/admin/upload/<?php
           echo $in_hd['anh'] ?>" alt="" width="50px" height="50px">
            </td>
        </tr>
        <tr>
            <td>
                Tổng tiền
            </td>
            <td>
            <?php
                $string=strval($in_hd['tongtien']);
                $mang=str_split($string);
                $count=count($mang);
                for($i=0;$i<$count;$i++)
                {
                  echo $mang[$i];
                  if($count<=6)
                  {
                    if($count%2==0)
                    {
                      if($i==2) echo ".";
                    }
                    else
                    {
                      if($i==1) echo ".";
                    }
                  }
                  if($count<=7 && $count>6)
                  {
                    if($count%2==0)
                    {
                      if($i==2) echo ".";
                      if($i==5) echo ".";
                    }
                    else
                    {
                      if($i==0) echo ".";
                      if($i==3) echo ".";
                    }
                  }
                  if($count<=9 && $count>7)
                  {
                    if($count%2==0)
                    {
                      if($i==1) echo ".";
                      if($i==4) echo ".";
                    }
                    else
                    {
                      if($i==0) echo ".";
                      if($i==3) echo ".";
                    }
                  }
                }
                ?> đồng
            </td>
        </tr>
        <tr>
        <td style="color: green;">
            Trạng thái
        </td>
        
        <td style="color: green;">
            Đặt hàng thành công !
        </td>
      </tr>
      <tr>
        <td>
            Cảm ơn bạn đã mua hàng. Mua tiếp ấn <span><a href="fruit.php">vào đây </a></span>
        </td>
      </tr>
    </table>
    <?php
    if(!empty($_GET['sp'])){
    break;
    }
  }
  ?>
    

  </form>
    </div>
    
  
              
  <!-- end fruit section -->


  <!-- info section -->

  <section class="info_section layout_padding">
    <div class="container">
      <div class="info_logo">
        <h2>
          NiNom
        </h2>
      </div>
      <div class="info_contact">
        <div class="row">
          <div class="col-md-4">
            <a href="">
              <img src="images/location.png" alt="">
              <span>
                Passages of Lorem Ipsum available
              </span>
            </a>
          </div>
          <div class="col-md-4">
            <a href="">
              <img src="images/call.png" alt="">
              <span>
                Call : +012334567890
              </span>
            </a>
          </div>
          <div class="col-md-4">
            <a href="">
              <img src="images/mail.png" alt="">
              <span>
                demo@gmail.com
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-lg-9">
          <div class="info_form">
            <form action="">
              <input type="text" placeholder="Enter your email">
              <button>
                subscribe
              </button>
            </form>
          </div>
        </div>
        <div class="col-md-4 col-lg-3">
          <div class="info_social">
            <div>
              <a href="">
                <img src="images/facebook-logo-button.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/twitter-logo-button.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/linkedin.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/instagram.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- end info section -->


  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      &copy; <span id="displayYear"></span> All Rights Reserved By
      <a href="https://html.design/">Free Html Templates</a>
    </p>
  </section>
  <!-- footer section -->


  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>

</body>

</html>