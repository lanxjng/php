<?php
ob_start();
?>
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
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html">About </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="fruit.html">Our Fruit </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="testimonial.html">Testimonial</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="login.php">Login</a>
              <?php
              session_start();
              if(!empty($_SESSION['username']))
              {
                echo "<p class='nav-link'>"."Hello: ".$_SESSION['username'].
                     "<a class='nav-link' href='logout.php'>Thoát</a>"."</p>";
              }
              else
                  echo "<a class='nav-link' href='login.php'>Login</a>"
              ?>
                </li>
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

  <!-- end nav section -->

  <!-- fruit section -->

  <section class="fruit_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <hr>
        <h2>
          Order
        </h2>
        <hr>
      </div>
    </div>
    <div class="container-fluid">

      <div class="fruit_container">
        <?php
        include('../Admin/advance-admin/Product/control.php');
        $get_data = new data_product();
        $select = $get_data ->select_product_id($_GET['or']);
        ?>
        <form method="POST">
          <table class="table table-stripper;">
            <tr>
              <td>Tên hàng</td>
              <td>Hình ảnh</td>
              <td>Đơn giá</td>
              <td colspan="3">Số lượng (Nhập số lượng bạn muốn mua)</td>
              <td></td>
            </tr>
            <?php
              foreach($select as $se_fruit)
            ?>
            <tr>
              <td><?php echo $se_fruit['tensp']?></td>
              <td><img src="../Admin/advance-admin/uploadd/<?php echo $se_fruit['anhsp']?>"
               width="50%" height="50%"></td>
              <td><?php echo $se_fruit['giasp']?></td>
              <td><input type="number" name="txtnumber" width="10px" placeholder='1'
              value="<?php echo $_POST['txtnumber']?>">
              <?php echo "Số lượng tối đa có: ".$se_fruit['solg']?>
            </td>
            <td><input type="submit" name="txtup" value="Update"></td>
            <td><input type="submit" name="txtdel" value="Delete">
            <?php
            if(isset($_POST['txtdel']))
            {
              header('location:fruit.php');
            }
            ?>
          </td>

            </tr>
            <tr>
              <td colspan="3" align="center">Tổng tiền</td>
              <td colspan="3">
                <?php
                if(isset($_POST['txtup']))
                {
                  if($_POST['txtnumber']<=0) echo "<script>alert('Nhập số lớn hơn 0')</script>";
                  else
                  {
                    if($_POST['txtnumber']>$se_fruit['solg'])
                    echo"Bạn chọn quá số lượng cho phép";
                  else{
                    $total=$se_fruit['giasp'] * $_POST['txtnumber'];
                    echo $total."VNĐ";
                  }
                  }
                }
                ?>
              </td>
            </tr>
            <tr>
            <td><input type="submit" name="txtsub" value="Xác nhận"></td>
            <?php
            if(isset($_POST['txtsub']))
            {
              if($se_fruit['solg']==0)
              echo "<script>alert('Sản phẩm bạn chọn mua đã hết. Bạn vui lòng chọn sản phẩm khác')</script>";
            else
            {
              if(empty($_POST['txtnumber'])) echo "<script>alert('Bạn chưa nhập số lượng')</script>";
              else
              {
                if(empty($_SESSION['username']))
                {
                  echo "<script>
                  if(confirm('Bạn phải đăng nhập để thực hiện đặt hàng')) window.location('login.php')
                  </script>";
                }
                else
                {
                  if($_POST['txtnumber']>$se_fruit['solg'])
                  echo "<scpript>alert('Số lượng không đủ, bạn vui lòng chọn lại')</script>";
                else
                {
                  $_SESSION['product']=$se_fruit['ID_sp'];
                  $number_total=$se_fruit['solg'] = $_POST['txtnumber'];//Số lượng còn
                  $update=$get_data->update_number($number_total,$se_fruit['ID_sp']);
                  $insert=$get_data->insert_order($se_fruit['ID_sp'],
                  $_SESSION['username'],
                  $_POST['txtnumber'],
                  $se_fruit['giasp']*$_POST['txtnumber'],
                  0);
                  $select=$get_data->select_order_id($se_fruit['ID_sp'],$_SESSION['username']);
                  foreach($select as $i_order)
                  $SESSION['ID_order'] = $i_order['ID_sp'];
                if($insert) header('location:check_order.php');
                else echo "Không thành công";
                }
                }
              }
            }
            }
            ?>
          
            </tr>
            

          </table>

        </form>
        
        

        <div class="box">
          <img src="../Admin/advance-admin/Product/uploadd/<?php echo $se_fruit['anhsp'] ?>"
          style="width:400px; height:400px" alt="">
          <div class="link_box">
            <h5>
              <?php echo $se_fruit['tensp'] ?>
            </h5>
            <a href="oder.php?or=<?php echo $se_fruit['ID_sp']?>">
              Buy Now
            </a>
          </div>
        </div>
        <?php
        
        ?>
        
        </div>
      </div>
    </div>
  </section>

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