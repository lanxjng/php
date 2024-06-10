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
    <style>
        table {
            width: 700px;
        }

        tr, td {
            border-top: 1px solid #dddddd; /* Đường kẻ ngang */
            border-bottom: 1px solid #dddddd; /* Đường kẻ ngang */
            text-align: left;
            padding: 15px;
        }

        td {
            border-left: none; /* Loại bỏ đường kẻ dọc bên trái */
            border-right: none; /* Loại bỏ đường kẻ dọc bên phải */
        }

        th {
            background-color: #f2f2f2;
            padding-left: 10px;
        }
    </style>
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
                                    <a class="nav-link" href="../../User/ninom-html/index123.php">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.php">About </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../../User/ninom-html/fruit.php">Our Fruit </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../../User/ninom-html/testimonial.php">Testimonial</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact Us</a>
                                </li>
                                <li class="nav-item">
                                    <ul class="navbar-nav">
                                        <?php
                                        session_start(); // Bắt đầu phiên làm việc
                                        if (!empty($_SESSION['name'])) {
                                            echo "<span class='nav-link'>Hello: " . $_SESSION['name'] .
                                                "  <a href='logout.php' class='nav-link'>Logout</a></span>";
                                        } else {
                                            echo "<a class='nav-link' href='loginuser.php'>Login</a>";
                                        }
                                        ?>
                                    </ul>
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

    <!-- info section -->
    <section class="fruit_section layout_padding">
        <div class="container">
            <div class="heading_container">
                <hr>
                <h2>
                    Order Information
                </h2>
            </div>
        </div>
        <div class="container-fluid">
            <div class="fruit_container">
                <?php
                // Kết nối CSDl  // Desc sắp xếp các bản ghi từ cao nhất -> nhỏ nhất, linit giới hạn bản ghi
                include('../Admin/advance-admin/Product/control.php');

                // Truy vấn dữ liệu đơn hàng
                $sql ="SELECT o.*, u.username, u.addresss 
                FROM order o
                INNER JOIN product p ON o.ID_pro = p.ID_sp
                INNER JOIN register u ON u.username=o.username  
                ORDER BY o.ID_order DESC LIMIT 1";

                $result = $connect->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <form action="">
                            <table>
                                <tr> 
                                    <th>Tên khách hàng</th>
                                    <td><?php echo $row['username']; ?></td>
                                </tr>
                                <tr>
                                    <th>Địa chỉ</th>
                                    <td><?php echo $row['addresss']; ?></td>
                                </tr>
                                <tr>
                                    <th>Tên sản phẩm</th>
                                    <td><?php echo $row['tensp']; ?></td>
                                </tr>
                                <tr>
                                    <th>Số lượng</th>
                                    <td><?php echo $row['solg']; ?></td>
                                </tr>
                                <tr>
                                    <th>Đơn giá</th>
                                    <td><?php echo $row['giasp']; ?></td>
                                </tr>
                                <tr>
                                    <th>Tổng tiền</th>
                                    <td><?php echo $row['total']; ?></td>
                                </tr>
                                <tr>
                                    <th>Trạng thái</th>
                                    <td><?php  
                                     $status = $row['status_or'];// Lấy giá trị trạng thái
                                    if ($status == 0) {
                                        echo "Đã đặt hàng";
                                    } else {
                                        echo $status; // Nếu không phải trạng thái 0, hiển thị giá trị số
                                    }
                                    ?></td>
                                </tr>
                                <tr>
                                    <td colspan="2">Cám ơn bạn đã mua hàng. Mua tiếp ấn <a href="fruit.php">vào đây</a>.</td>
                                </tr>
                            </table>
                        </form>
                <?php
                    }
                } else {
                    echo "Không tìm thấy thông tin đơn hàng";
                }
                // Đóng kết nối CSDL
                $conn->close();
                ?>
            </div>
        </div>
    </section>
    <!-- end info section -->

    <!-- footer section -->
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
    <!-- Owl Carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#carouselExample2Controls").carousel();
        });
    </script>

</body>

</html>
