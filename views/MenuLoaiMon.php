<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách món ăn</title>
    <link rel="stylesheet" href="CSS/trangchu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <style>
        /* Tổng quan */
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        /* Container */
        .main {
            margin: 20px auto;
            max-width: 1200px;
            padding: 0 15px;
        }

        /* Danh sách sản phẩm */
        .product-list {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        /* Card sản phẩm */
        .product-card {
            background-color: #ffffff;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        /* Ảnh sản phẩm */
        .product-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-bottom: 1px solid #e0e0e0;
        }

        /* Thông tin sản phẩm */
        .product-details {
            padding: 15px;
        }

        .product-name {
            font-size: 18px;
            font-weight: 500;
            color: #333333;
            margin: 10px 0;
        }

        .product-price {
            font-size: 16px;
            color: #d32f2f;
            font-weight: bold;
        }

        /* Hành động sản phẩm */
        .product-actions {
            margin-top: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        /* Nút và input */
        input[type="number"] {
            width: 60px;
            padding: 5px;
            text-align: center;
            border: 1px solid #cccccc;
            border-radius: 5px;
        }

        .btn-mua {
            display: inline-block;
            background-color: #007bff;
            color: #ffffff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .btn-mua:hover {
            background-color: #0056b3;
        }
        .MenuLoaiMon {
            margin: 20px 0;
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        .ul_LoaiMon {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
        }

        .ul_LoaiMon li {
            margin: 0;
        }

        .ul_LoaiMon li a {
            text-decoration: none;
            font-size: 16px;
            font-weight: 500;
            color: #007bff;
            padding: 10px 20px;
            border: 1px solid #007bff;
            border-radius: 5px;
            transition: all 0.3s ease;
            background-color: #ffffff;
        }

        .ul_LoaiMon li a:hover {
            color: #ffffff;
            background-color: #007bff;
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
    
<body>
<?php
    // Kiểm tra xem session đã được khởi tạo hay chưa
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if(isset($_SESSION["username"])) {
        $username = $_SESSION["username"];
        $soluong=$_SESSION['soluong'] ;
    }
?>
    <?php include "header.php" ?>
    <div class="main">
        <div class="MenuLoaiMon">
            <ul class="ul_LoaiMon">
            <?php foreach ($loaimonList as $loaimon): ?>
                <li><a href="/NHAHANG/index.php?action=MenuLoaiMon&MaLoai=<?php echo htmlspecialchars($loaimon['MaLoai']); ?>"><?php echo htmlspecialchars($loaimon['TenLoai']); ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="product-list">
            <?php foreach ($monlist as $monan): ?>
                <div class="product-card">
                    <img class="product-image" src="./imgadmin/<?php echo htmlspecialchars($monan['HinhAnh']); ?>" alt="Hình ảnh món ăn">
                    <div class="product-details">
                        <h2 class="product-name"><?php echo htmlspecialchars($monan['TenMonAn']); ?></h2>
                        <p class="product-price">Giá: <?php echo number_format($monan['DonGia'], 0, ',', '.'); ?> VND</p>
                        <div class="product-actions">
                        <?php if(!empty($username)){
                                ?>  <form action="/NHAHANG/index.php" method="GET">
                                    <input class="btn" type="number" name="soluong" min="1" value="1">
                                    <input type="hidden" name="MaMA" value="<?php echo htmlspecialchars($monan['MaMA']); ?>">
                                    <button type="submit" class="btn-mua">Mua</button>
                                    <input type="hidden" name="action" value="MuaHang">
                            </form><?php
                            }else{
                                ?><a class = "btn-mua" href="/NHAHANG/index.php?action=login">Mua</a><?php
                            }?>
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php include "fooder.php" ?>
</body>

</html>