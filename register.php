<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style-login.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.js"></script>
    <title>Register</title>
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
                        <a href="">
                            <img src="images/header-top-more.PNG" alt="">
                            <span>Thêm</span>
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
                            <span>Đăng nhập</span>
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
            <div class="main-container login-background ">
                <div class="main-link main-size">
                    <span><a href="index.php">Trang chủ</a></span>
                    <span>>></span>
                    <span>Đăng nhập</span>
                    <span>>></span>
                    <span>Đăng Ký</span>
                </div>
                <div class="main-background">

                </div>
                <div class="main-login">
                    
                    <div class="main-login-container">
                        <div class="login-form">
                            <form method="post" action="xuly.php" class="form">
                                <div class="form-hello">
                                    <div class="">
                                        <h3>Đăng ký</h3>
                                        <p>Tạo tài khoản Chợ Tốt ngay</p>
                                    </div>
                                    <div class="">
                                        <img src="images/logo-hello.svg" alt="">
                                    </div>
                                </div>
                                <div class="form-username">
                                    <input type="tel" name="username" placeholder="Nhập SĐT của bạn">
                                </div>
                                <div class="form-password">
                                    <input type="password" name="password" placeholder="Tạo một mật khẩu có ít nhất 5 kí tự">
                                    
                                </div>
                                <button name="submit">Đăng Ký</button>
                            </form>
                        </div>
                        <div class="login-more">
                            
                            <p>
                                Bằng việc Đăng ký, bạn đã đồng ý với 
                                <a href="#"> Điều khoản sử dụng
                                </a>
                                của Chợ tốt
                            </p>
                            <small>hoặc sử dụng</small>
                            <ul>
                                <li>
                                    <a href="#">
                                        <img src="images/facebook.svg" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="images/google.svg" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="images/apple.svg" alt="">
                                    </a>
                                </li>
                            </ul>
                            <p>
                                Bạn  đã tài khoản?
                                <a href="login.php">Đăng nhập</a>
                            </p>
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