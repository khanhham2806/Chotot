<?php 
    include("connect.php");
	$id = isset($_REQUEST["id"]) ? $_REQUEST["id"] : 0;
	if ($id<  1) return ;
	//tao sql
	$sql = "select * from tbl_product where id={$id}";
	//echo $sql;exit();
	//thuc thi cau lenh sql
	$result = select_one($sql);
	//print_r($result);exit();
	if (!$result) return ;
	//print_r($result);exit();
	
	// $sql = "select * from grab_category";
	//echo $sql;exit();
	//thuc thi cau lenh sql
	// $cates = exec_select($sql);
	// $statuses = default_statuses();
	
	// $cookie_name = "user";
	// $cookie_value = $result['title'];
	// setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day    

    
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
    
    <title>Edit</title>
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
            <div class="main-size">
                <br>
                <form method="GET">
			    <input name="q" value=""/>
		    	<button>Search</button></form>
                <h1>Sửa sản phẩm</h1>
                <br/>
			    <form action="edit_exec.php" method="post" enctype="multipart/form-data">
				    <input type="hidden" name="id" value="<?php echo $result["id"]?>"/>
                    <div class="form-group">
                        <label>Image</label>
                        <input name="img" type="file" class="form-control" value="<?php echo $result["img"]?>">
                    </div>
                    <div class="form-group">
                        <label for="cid">Cid</label>
                        <input name="cid" class="form-control" value="<?php echo $result["cid"]?>">    
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input name="name" class="form-control" value="<?php echo $result["name"]?>">    
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input name="price" class="form-control" value="<?php echo $result["price"]?>">    
                    </div>
                    <div class="form-group">
                        <label for="time">Time</label>
                        <input name="time" class="form-control" value="<?php echo $result["time"]?>">    
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input name="address" class="form-control" value="<?php echo $result["address"]?>">  
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input name="description" class="form-control" value="<?php echo $result["description"]?>">  
                    </div>
                    <div class="form-group">
                        <label for="phone_number">Phone number</label>
                        <input name="phone_number" class="form-control" value="<?php echo $result["phone_number"]?>">  
                    </div>
                    <div class="form-group">
                        <label for="product_condition">Product condition</label>
                        <input name="product_condition" class="form-control" value="<?php echo $result["product_condition"]?>">  
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <input name="category" class="form-control" value="<?php echo $result["category"]?>">  
                    </div>
                    <div class="form-group">
                        <label for="seller">Seller</label>
                        <input name="seller" class="form-control" value="<?php echo $result["seller"]?>">  
                    </div>
                   
                    <button>OK</button>
                </form>
                <br>
                <ul>
                    <li><a href="add.php">Add</a></li>
                    <li><a href="search.php">Search</a></li>
		    	</ul>
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