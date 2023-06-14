<?php
    session_start();
    include('connect.php'); 
    // $sql = "SELECT * FROM tbl_product";
    // $result = exec_select($sql);
    // // print_r($result).die('OKOKOK');
    
    //1. get input, id của bài viết
	$id = isset($_REQUEST["id"]) ? $_REQUEST["id"] : 0  ;
	// echo "id={$id}";exit();
	//echo "cid={$cid}";exit();
	// echo "q=[{$q}]";exit();
	if ($id <  1) return ;
	//2.1. tao sql
	//$sql = "select * from grab_content where id={$id}";
	$sql = "select * from tbl_product where id=" . $id ;
	//echo "2.1 sql=[{$sql}]";exit();
	//2.2. thuc thi cau lenh sql
	$result = select_one($sql);
	// print_r($result);exit();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style-product.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.js"></script>
    
    <title>Chợ tốt</title>
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
                        <a href="<?php if(isset($_SESSION['username'])){
                                    }
                                    else echo 'login.php'?>">
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
            <div class="main-size">
                <div class="row info-product">
                    <div class="col-sm-8">
                        <ol>
                            <li>Chợ tốt</li>
                            <li>Nhạc cụ</li>
                            <li>TP HCM</li>
                            <li>Nhạc cụ Quận Tân Bình</li>
                            <li><?php echo $result["name"]?></li>
                        </ol>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="button">
                            <button class="btn-prev" type="button">Về danh sách</button>
                            <button class="btn-next" type="button">Tin Tiếp</button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                        <div class="col-md-8">
                            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators button-slide">
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                </div>
                                <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="<?php echo $result["img"]?>" class="d-block w-100" alt="...">
                                    
                                </div>
                                <div class="carousel-item item-btn ">
                                    <div class="item-background"></div>
                                    <img src="<?php echo $result["img"]?>" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block btn-contact">
                                    <a href="#" class="btn-call">
                                        <img src="images/btn-call.png" alt="">
                                        <span>Gọi điện</span>
                                    </a>
                                    <a href="#" class="btn-sms">
                                        <img src="images/btn-sms.png" alt="">
                                        <span>SMS</span>
                                    </a>
                                    <a href="#" class="btn-chat">
                                        <img src="images/btn-chat.png" alt="">
                                        <span>Chat</span>
                                    </a>
                                    </div>
                                </div>
                                
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            <div class="description-product">
                                <h5><?php echo $result["name"]?></h5>
                                <div class="description-price">
                                    <span class="price"><?php echo $result["price"]?></span>
                                    <div class="save">
                                        <button>
                                            <p>Lưu tin</p>
                                            <img src="images/description-save.svg" alt="">
                                        </button>
                                    </div>
                                </div>
                                <p> <?php echo $result["description"]?></p>
                            </div>
                            <div class="description-contact">
                                <div class="sc-bdVaJa hOBpFl">
                                    <div>
                                    <span>Nhấn để hiện số: <!-- --><strong><?php echo $result["phone_number"]?></strong></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row description-condition">
                                <div class="condition col-md-6">
                                    <img src="images/description-condition.png" alt="">
                                    <span>Tình trạng:</span>
                                    <span><?php echo $result["product_condition"]?></span>
                                </div>
                                <div class="category col-md-6">
                                    <img src="images/description-category.png" alt="">
                                    <span>Loại:</span>
                                    <span><?php echo $result["category"]?></span>
                                </div>
                            </div>
                        </div>

                    <div class="col-md-4 sticky-header">
                        <div class="seller">
                            <a href="#" class="seller-contact">
                                <div class="avatar">
                                    <img src="images/default-avatar.webp"  alt="">
                                </div>
                                <div class="more">
                                    <div class="seller-info">
                                        <div class="seller-name"><?php echo $result["seller"]?></div>
                                        <div class="seller-profile">
                                            <button>Xem trang</button>
                                        </div>
                                    </div>
                                    <div class="seller-status">
                                        <div class="">•</div>
                                        Hoạt động 8p trước
                                    </div>
                                </div>
                            </a>
                            <div class="seller-rate">
                                <div class="info">
                                    <div class="">Bán Chuyên</div>
                                    <div class="">
                                        <img src="images/rate-status.png" alt="">
                                    </div>
                                </div>  
                                <div class="border"></div>
                                <div class="rate">
                                    <div class="">Đánh giá</div>
                                    <div class="">
                                        <img class="rating-star" src="images/rate-star.svg" alt="">
                                        <img class="rating-star" src="images/rate-star.svg" alt="">
                                        <img class="rating-star" src="images/rate-star.svg" alt="">
                                        <img class="rating-star" src="images/rate-star.svg" alt="">
                                        <img class="rating-star" src="images/rate-star.svg" alt="">
                                    </div>
                                </div>
                                <div class="border"></div>  
                                <div class="">
                                    <div class="feedback">Phản hồi chat</div>
                                    <div class="feedback-status">Thỉnh thoảng</div>
                                </div>
                            </div>
                        </div>
                        <div class="button-contact">
                            <div class="btn-call">
                                <img src="images/white-btn-call.svg" alt="">
                                <span><?php echo $result["phone_number"]?></span>
                                <span>Bấm để hiện số</span>
                            </div>
                            <div class="btn-chat">
                                <img src="images/btn-chat.png" alt="">
                                <span>Chat với người bán</span>
                            </div>
                        </div>
                        <div class="safe-text">
                            <img src="images/safe-img.png" alt="">
                            <div class="text">
                                <p>Giao dịch, đừng giao ‘dịch’. Mua bán trong thời điểm này, bạn nhớ làm theo khuyến cáo 5k của Bộ Y Tế: “Khẩu trang – Khử khuẩn – Khoảng cách – Không tập trung – Khai báo y tế” để đảm bảo an toàn cho bản thân, gia đình và cộng đồng nhé! ❤️
                                </p>
                                <a href="#" >Tìm hiểu thêm »</a>
                            </div>
                        </div>
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