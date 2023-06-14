<?php
    session_start();
    include('connect.php'); 
    $sql_product = "SELECT * FROM tbl_product order by id asc limit 0,5";
    $result_product = exec_select($sql_product);
    $sql_menu_sub = "SELECT * FROM tbl_menu_sub ";
    $result_menu_sub = exec_select($sql_menu_sub);
    $sql_main_menu_sub = "SELECT * FROM tbl_chuyen_muc ";
    $result_main_menu_sub = exec_select($sql_main_menu_sub);
    $sql_user = "SELECT * FROM tbl_user ";
    $result_user = exec_select($sql_user);

    // print_r($result).die('OKOKOK');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.js"></script>
    
    <title>Chợ tốt</title>
</head>
<body>
    <div id="homepage">
        <header>
            <div class="header-top header-size">
                <div class="header-top-left">
                    <a href="index.php">
                        <img src="images/header-logo-chotot.webp" alt="Chợ Tốt">
                        
                    </a>
                </div>
                <div class="header-top-right">
                    <div class="header-top-home">
                        <a href="">
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
                        <a href="login.php">
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
            <div class="main-container homepage-background">
                <div class="main-container-slide  main-size">
                    <div class="main-container-slide-top">
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
                    
                    <div class="main-container-slide-bottom main-size">
                        <div class="slide-bottom-sub">
                            <?php foreach($result_menu_sub as $item){?>
                                <div class="sub-menu-item">
                                    <a href="#">
                                        <img src="<?php echo $item["img"]?>" alt="">
                                        <span><?php echo $item["description"]?></span>
                                    </a>
                                </div>
                            <?php }?> 
                        </div>
                    </div>
                </div>
                <div class="main-container-menu main-size">
                    <p>
                        Khám phá danh mục
                    </p>
                    <ul class="main-menu-sub">
                        <?php foreach($result_main_menu_sub as $item){?>
                            <li>
                                <a href="chuyen_muc.php?id=<?php echo $item["id"]?>">
                                    <img src="<?php echo $item["img"]?>" alt="">
                                    <span><?php echo $item["description"]?></span>
                                </a>
                            </li>
                        <?php }?>    
                    </ul>
                </div>
                <div class="main-container-product main-size">
                    <p>Tin đăng mới</p>
                    <div class="main-product-sub" id="product">
                        <div class="container">
                            <div class="row">
                                <?php foreach($result_product as $item){?>                           
                                    <div class ="col-sm-6 col-sm-4 col-md-3 col-lg-2dot4 border-product">
                                        <div class="card h-100">
                                            <a href="product.php?id=<?php echo $item["id"] ?> ">
                                                <img class="card-img-top" src="<?php echo $item["img"] ?>" >
                                            </a>
                                            <a href="product.php?id=<?php echo $item["id"] ?>"><?php echo $item["name"]?></a>
                                            <span class="product-price"><?php echo $item["price"]?></span>
                                            <div class="product-footer">
                                                <img src="images/product-footer.svg" alt="">
                                                <div class="dot"></div>
                                                <span><?php echo $item["time"]?></span>
                                                <div class="dot"></div>
                                                <span><?php echo $item["address"]?></span>
                                            </div>
                                        </div>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <div class="main-product-more">
                        <button class="more" id="more">
                        Xem thêm
                        <i class="fas fa-angle-down"></i>
                        </button>
                    </div>         
                </div>

                <div class="main-container-footer main-size">
                    <div class="container-footer-top">
                        <div class="row">
                            <div class="col-xs-12">
                                <h1>Chợ Tốt - Chợ Mua Bán, Rao Vặt Trực Tuyến Hàng Đầu Của Người Việt</span></h1>
                                
                                <p>Chợ Tốt chính thức gia nhập thị trường Việt Nam vào đầu năm 2012, với mục đích tạo ra cho bạn một kênh rao vặt trung gian, kết nối người mua với người bán lại với nhau bằng những giao dịch cực kỳ đơn giản, tiện lợi, nhanh chóng, an toàn, mang đến hiệu quả bất ngờ.</p>
                                
                                <p>Đến nay, Chợ Tốt tự hào là Website rao vặt được ưa chuộng hàng đầu Việt Nam. Hàng ngàn món hời từ <a href="https://nha.chotot.com/">Bất động sản, Nhà cửa</a>, <a href="https://xe.chotot.com">Xe cộ</a>, <a href="https://www.chotot.com/toan-quoc/mua-ban-do-dien-tu">Đồ điện tử</a>, Thú cưng, Vật dụng cá nhân... đến <a href="https://www.chotot.com/toan-quoc/viec-lam">tìm việc làm</a>, thông tin tuyển dụng, các dịch vụ - du lịch được đăng tin, rao bán trên Chợ Tốt.</p>
                                
                                <p>Với Chợ Tốt, bạn có thể dễ dàng mua bán, trao đổi bất cứ một loại mặt hàng nào, dù đó là đồ cũ hay đồ mới với nhiều lĩnh vực:</p>
                                
                                <p> <strong> Bất động sản:</strong> Cho thuê, Mua bán <a href="https://nha.chotot.com/toan-quoc/mua-ban-nha-dat">nhà đất</a>, <a href="https://nha.chotot.com/toan-quoc/mua-ban-can-ho-chung-cu">căn hộ chung cư</a>, <a href="https://nha.chotot.com/toan-quoc/sang-nhuong-van-phong-mat-bang-kinh-doanh">văn phòng mặt bằng kinh doanh</a>, phòng trọ đa dạng về diện tích, vị trí</p>
                                
                                <p> <strong> Phương tiện đi lại:</strong> <a href="https://xe.chotot.com/mua-ban-oto">xe ô tô</a>, <a href="https://xe.chotot.com/mua-ban-xe-may">xe máy</a> có độ bền cao, giá cả hợp lý, giấy tờ đầy đủ.</p>
                                
                                <p> <strong> Đồ dùng cá nhân:</strong> <a href="https://www.chotot.com/toan-quoc/mua-ban-quan-ao">quần áo</a>, <a href="https://www.chotot.com/toan-quoc/mua-ban-giay-dep">giày dép</a>, <a href="https://www.chotot.com/toan-quoc/mua-ban-tui-xach">túi xách</a>, <a href="https://www.chotot.com/toan-quoc/mua-ban-dong-ho">đồng hồ</a>... đa phong cách, hợp thời trang.</p>
                                
                                <p> <strong> Đồ điện tử:</strong> <a href="https://www.chotot.com/toan-quoc/mua-ban-dien-thoai">điện thoại di động</a>, máy tính bảng, <a href="https://www.chotot.com/toan-quoc/mua-ban-laptop">laptop</a>, <a href="https://www.chotot.com/toan-quoc/mua-ban-tivi-am-thanh">tivi, loa, amply</a>...; đồ điện gia dụng: <a href="https://www.chotot.com/toan-quoc/mua-ban-may-giat">máy giặt</a>, <a href="https://www.chotot.com/toan-quoc/mua-ban-tu-lanh">tủ lạnh</a>, <a href="https://www.chotot.com/toan-quoc/mua-ban-may-lanh-dieu-hoa">máy lạnh điều hòa</a>... với rất nhiều nhãn hiệu, kích thước khác nhau.</p>
                                
                                <p> <strong> <a href="https://www.chotot.com/toan-quoc/mua-ban-thu-cung" target="_blank">Vật nuôi, thú cưng</a></strong> đa chủng loại: <a href="https://www.chotot.com/toan-quoc/mua-ban-ga">gà</a>, <a href="https://www.chotot.com/toan-quoc/mua-ban-cho">chó</a>&nbsp;(<a href="https://www.chotot.com/tags/mua-ban-cho/cho-phoc-soc">chó phốc sóc</a>, <a href="https://www.chotot.com/tags/mua-ban-cho/cho-pug">chó pug</a>, <a href="https://www.chotot.com/tags/mua-ban-cho/cho-poodle">chó poodle</a>...), <a href="https://www.chotot.com/toan-quoc/mua-ban-chim">chim</a>, mèo (<a href="https://www.chotot.com/tags/mua-ban-meo/meo-anh-long-ngan">mèo anh lông ngắn</a>, <a href="https://www.chotot.com/tags/mua-ban-meo/meo-munchkin">mèo munchkin</a>...), cá, hamster giá cực tốt.</p>
                                
                                <p> <strong> Tuyển dụng, việc làm</strong> với hàng triệu công việc hấp dẫn, phù hợp.</p>
                                
                                <p> <strong> <a href="https://www.chotot.com/toan-quoc/dich-vu">Dịch vụ</a>, <a href="https://www.chotot.com/toan-quoc/du-lich">du lịch</a>:</strong> khách sạn, vé máy bay, vé tàu, vé xe, tour du lịch và các voucher du lịch... uy tín, chất lượng.</p>
                                
                                <p> <strong> <a href="https://www.chotot.com/toan-quoc/mua-ban-do-an-thuc-pham" target="_blank">Đồ ăn, thực phẩm</a></strong>: các món ăn được chế biến thơm ngon, hấp dẫn, thực phẩm tươi sống, an toàn &amp; giá cả hợp lý.</p>
                                
                                <p>Và còn rất nhiều mặt hàng khác nữa đã và đang được rao bán tại Chợ Tốt.</p>
                                
                                <p>Mỗi người trong chúng ta đều có những sản phẩm đã qua sử dụng và không cần dùng tới nữa. Vậy còn chần chừ gì nữa mà không để nó trở nên giá trị hơn với người khác. Rất đơn giản, bạn chỉ cần chụp hình lại, mô tả cụ thể về sản phẩm và sử dụng ứng dụng Đăng tin miễn phí của Chợ Tốt là đã có thể đến gần hơn với người cần nó.</p>
                                
                                <p>Không những thế, website chotot.com còn cung cấp cho bạn thông tin về giá cả các mặt hàng để bạn có thể tham khảo. Đồng thời, thông qua <a href="https://www.chotot.com/kinhnghiem/">Blog kinh nghiệm</a>, Chợ Tốt sẽ tư vấn, chia sẻ cho bạn những thông tin bổ ích, bí quyết, mẹo vặt giúp bạn có những giao dịch mua bán an toàn, đảm bảo. Chợ Tốt cũng sẵn sàng hỗ trợ bạn trong mọi trường hợp cần thiết.</p>
                            
                                <p>Chúc các bạn có những trải nghiệm mua bán tuyệt vời trên Chợ Tốt.</p>
                            </div>
                        </div>
                    </div>
                    <div class="container-footer-bottom">
                        <p class="">Các từ khóa phổ biến</p>
                        <ul class="list">
                            <li> 
                                <a href="https://www.chotot.com/tags/mua-ban-do-an-thuc-pham/do-uong">
                                    <span>Đồ Uống</span>
                                </a>
                            </li>
                            <li> 
                                <a href="https://www.chotot.com/tags/mua-ban-do-an-thuc-pham/do-uong">
                                    <span>Đồ Uống</span>
                                </a>
                            </li>
                            <li> 
                                <a href="https://www.chotot.com/tags/mua-ban-do-an-thuc-pham/do-uong">
                                    <span>Đồ Uống</span>
                                </a>
                            </li>
                            <li> 
                                <a href="https://www.chotot.com/tags/mua-ban-do-an-thuc-pham/do-uong">
                                    <span>Đồ Uống</span>
                                </a>
                            </li>
                            <li> 
                                <a href="https://www.chotot.com/tags/mua-ban-do-an-thuc-pham/do-uong">
                                    <span>Đồ Uống</span>
                                </a>
                            </li>
                            <li> 
                                <a href="https://www.chotot.com/tags/mua-ban-do-an-thuc-pham/do-uong">
                                    <span>Đồ Uống</span>
                                </a>
                            </li>
                            <li> 
                                <a href="https://www.chotot.com/tags/mua-ban-do-an-thuc-pham/do-uong">
                                    <span>Đồ Uống</span>
                                </a>
                            </li>
                            <li> 
                                <a href="https://www.chotot.com/tags/mua-ban-do-an-thuc-pham/do-uong">
                                    <span>Đồ Uống</span>
                                </a>
                            </li>
                            <li> 
                                <a href="https://www.chotot.com/tags/mua-ban-do-an-thuc-pham/do-uong">
                                    <span>Đồ Uống</span>
                                </a>
                            </li>
                            

                        </ul>
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

    <script src="js/jquery-3.6.0.min.js"></script>
    <script>
        var them =0;
        $(document).ready(function(){
            $("#more").click(function(){
                them=them+1;
                $.get("ajax.php",{trang:them},function(data){
                    $("#product").append(data);

                });
            });
        });
    </script>
</body>
</html>