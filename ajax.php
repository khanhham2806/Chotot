<?php
require("connect.php");
$count_product = 5;
$page =$_GET["trang"];
settype($page,"int");

$from = $page * $count_product;

$sql = " select * from tbl_product order by id asc limit $from, $count_product ";
// echo $sql;
$result = exec_select($sql);
// print_r($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <div class="row">
        <?php foreach($result as $item){?>                           
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
</body>
</html>
