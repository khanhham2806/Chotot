<?php 
    session_start();
    include("connect.php");
	//1. get input, id của bài viết
	$id = isset($_REQUEST["id"]) ? $_REQUEST["id"] * 1 : 0;
	$p = isset($_REQUEST["p"]) ? $_REQUEST["p"] * 1 : 0;
	if ($p < 1) $p = 1;
	//2.1. Thông tin chi tiết của chuyên mục
	$sql = "select * from tbl_chuyen_muc ";
	//2.2. Thực thi sql
	// $result = select_one($sql);
    $datas = exec_select($sql);
	// print_r($result);exit();
	// echo "ok"; exit();
	//2.1. Thông tin chi tiết của chuyên mục
	$cond = "where cid = {$id}";
	$sql = "select * from tbl_product {$cond}";
    // $sql = "select * from tbl_product where cid = {$id} ";
	//echo $sql;exit();
	//2.2. Thực thi sql
	$pros = exec_select($sql);
	


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style-chuyen_muc.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.js"></script>
    <title>Chuyenmuc</title>
</head>
<body>
    <div id="homepage">
        <header>
            <div class="header-top header-size">
                <div class="header-top-left">
                    <a href="https://www.chotot.com/">
                        <img src="images/header-logo-chotot.webp" alt="Chợ Tốt">
                        
                    </a>
                </div>
                <div class="header-top-right">
                    <div class="header-top-home">
                        <a href="index.php">
                            <img src="images/header-top-home.PNG" alt="">
                            <span>Trang Chủ</span>
                        </a>
                    </div>
                    <div class="header-top-manage">
                        <a href="">
                            <img src="images/header-top-manage.PNG" alt="">
                            <span>Quản lí tin</span>
                        </a>
                        
                    </div>
                    <div class="header-top-chat "> 
                        <a href="">
                            <img src="images/header-top-chat.PNG" alt="">
                            <span>Chat</span>
                        </a>
                    </div>
                    <div class="header-top-notification">  
                        <a href="">
                            <img src="images/header-top-notification.PNG" alt="">
                            <span>Thông báo</span>
                        </a>
                        
                    </div>
                    <div class="header-top-more">  
                        <a href=""class="more">
                            <img src="images/header-top-more.PNG" alt="">
                            <span>Thêm</span>
                            <a href="logout.php" class="log-out">Logout</a>
                        </a>   
                    </div>
                </div>
            </div>
            <div class="header-bottom header-size">
                <div class="header-bottom-sub">
                    <div class="header-bottom-left">
                        <input type="text" class="search-input" placeholder="Tìm kiếm trên Chợ Tốt">
                        <button class="search-button">
                            <img src="images/header-search-button.png" alt="">
                        </button>
                    </div>
                    <div class="header-bottom-mid">
                        <a href="">
                            <img src="images/header-bot-mid.PNG" alt="">
                            <span>
                                <?php 
                                if(isset($_SESSION['username'])){
                                    echo $_SESSION['username'];
                                }
                                else echo 'Đăng nhập'
                                ?>
                            </span>
                        </a>
                    </div>
                    <button class="header-bottom-right">
                        <a href="">
                            <img src="images/header-bot-right.PNG" alt="">
                            <span>Đăng tin</span>
                        </a>
                    </button>
                </div>
            </div>
        </header>

        <main>
            <div class="main-container-slide-top main-size">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators button-slide">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <a href="#">
                            <img src="images/slide-one.jpg" class="d-block w-100" alt="...">
                        </a>
                        </div>
                        <div class="carousel-item">
                        <a href="#">
                            <img src="images/slide-two.jpg" class="d-block w-100" alt="...">
                        </a>
                        </div>
                        <div class="carousel-item">
                        <a href="#">
                            <img src="images/slide-three.jpg" class="d-block w-100" alt="...">
                        </a>
                        </div>
                    </div>   
                </div>
            </div>
            <div class="main-size">
                <h5>Khám phá danh mục</h5>
                <ul class="category">
                    <li>
                        <a href="" class="category-item">
                            <img src="images/chuyen_muc1.png" alt="">
                            <div class="text">
                                <span>Mua bán</span>
                                <span>
                                    <b>319.162</b>
                                    Tin đăng mua bán
                                </span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="" class="category-item">
                            <img src="images/chuyen_muc2.png" alt="">
                            <div class="text">
                                <span>Cho thuê</span>
                                <span>
                                    <b>141.925</b>
                                    Tin đăng cho thuê
                                </span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="" class="category-item">
                            <img src="images/chuyen_muc3.png" alt="">
                            <div class="text">
                                <span>Dự án</span>
                                <span>
                                    <b>4.021</b>
                                    Dự án
                                </span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="" class="category-item">
                            <img src="images/chuyen_muc4.png" alt="">
                            <div class="text">
                                <span>Biểu đồ giá</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="main-product-sub main-size">
                <div class="container">
                    <div class="row">
                        <?php foreach($pros as $item){?>
                            <div class ="col-sm-6 col-sm-4 col-md-3 col-lg-2dot4 border-product">
                                <div class="card h-100">
                                <a href="product.php?id=<?php echo $item["id"] ?>">
                                    <img class="card-img-top" src="<?php echo $item["img"] ?>"/>
                                </a>
                                <a href="product.php?id=<?php echo $item["id"] ?>"><?php echo $item["name"] ?></a>
                                <span class="product-price"><?php echo $item["price"] ?></span>
                                <div class="product-footer">
                                    <img src="images/product-footer.svg" alt="">
                                    <div class="dot"></div>
                                    <span><?php echo $item["time"] ?></span>
                                    <div class="dot"></div>
                                    <span><?php echo $item["address"] ?></span>
                                </div>
                                </div>
                            </div>
                        <?php }?> 
                    </div>
                </div>
            </div> 
        </main>

        <footer>
            <div class="footer-container">
                <div class="footer-info footer-size">
                    <div class="download">
                        <p>Tải ứng dụng chợ tốt</p>
                        <div class="download-chotot">
                            <div class="qr-code">
                                <img src="images/QR.webp" alt="">
                            </div>
                            <div class="app">
                                <a href="">
                                    <img src="images/logo-appstore.svg" alt="">
                                </a>
                                    
                                <a href="">
                                    <img src="images/logo-chplay.svg" alt="">
                                </a>
                                    
                                <a href="">
                                    <img src="images/logo-appgallery.webp" alt="">
                                </a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="user-about">
                        <p>Hỗ trợ khách hàng    </p>
                        <ul>
                            <li>
                                <a href="#">Trung tâm trợ giúp</a>
                            </li>
                            <li>
                                <a href="#">An toàn mua bán</a>
                            </li>
                            <li>
                                <a href="#">Quy định cần biết</a>
                            </li>
                            <li>
                                <a href="#">Quy chế quyền riêng tư</a>
                            </li>
                            <li>
                                <a href="#">Liên hệ hỗ trợ</a>
                            </li>
                        </ul>
                    </div>
                    <div class="user-about">
                        <p>Về Chợ Tốt</p>
                        <ul>
                            <li>
                                <a href="#">Giới thiệu</a>
                            </li>
                            <li>
                                <a href="#">Tuyển dụng</a>
                            </li>
                            <li>
                                <a href="#">Truyền thông</a>
                            </li>
                            <li>
                                <a href="#">Blog</a>
                            </li>
                            
                        </ul>
                    </div>
                    <div class="">
                        <p>Liên kết</p>
                        <div class="link">
                            <a href="#">
                                <img src="images/icon-fb.svg" alt="">
                            </a>
                            <a href="#">
                                <img src="images/icon-youtube.svg" alt="">
                            </a>
                            <a href="#">
                                <img src="images/icon-google.svg" alt="">
                            </a>
                        </div>
                        <p>Chứng nhận</p>
                        <a href="">
                            <img src="images/bo-cong-thuong.webp" alt="">
                        </a>
                    </div>
                    
                </div>
                <hr>
                <div class="address footer-size">
                    CÔNG TY TNHH CHỢ TỐT - Địa chỉ: Phòng 1808, Tầng 18, Mê Linh Point Tower, 02 Ngô Đức Kế, Phường Bến Nghé, Quận 1, TP Hồ Chí Minh 
                    <br>
                    Giấy chứng nhận đăng ký doanh nghiệp số 0312120782 do Sở Kế Hoạch và Đầu Tư TPHCM cấp ngày 11/01/2013 
                    <br>
                    Email: trogiup@chotot.vn - Đường dây nóng: (028)38664041
                </div>
            </div>
        </footer>
    </div>
</body>
</html>