<?php $base_url = "/NHAHANG/"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/NHAHANG/CSS/GioHang.css">
    <link rel="stylesheet" href="CSS/trangchu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">


    <title>Giỏ Hàng</title>
    <style>
        .sty {
            display: inline-block;
            /* Để căn chỉnh nội dung */
            text-align: center;
            /* Căn giữa nội dung bên trong */
            color: red;
            /* Màu chữ */
            font-size: 20px;
            /* Kích thước chữ */
            font-weight: bold;
            /* Chữ đậm */
            text-decoration: none;
            /* Loại bỏ gạch chân */
            border: 2px solid red;
            /* Viền chữ */
            padding: 10px 20px;
            /* Khoảng cách bên trong */
            border-radius: 5px;
            /* Bo tròn các góc */
            background-color: #fce4e4;
            /* Màu nền nhạt */
            transition: 0.3s;
            /* Hiệu ứng hover */
        }

        .sty:hover {
            background-color: red;
            /* Nền đổi màu khi hover */
            color: white;
            /* Chữ đổi màu khi hover */
        }

        .main {
            display: flex;
            /* Sử dụng Flexbox */
            justify-content: center;
            /* Căn giữa ngang */
            align-items: center;
            /* Căn giữa dọc */
            height: 100vh;
            /* Chiều cao toàn màn hình */
        }

        .cart-row {
            display: table-row;
            text-align: center;
            vertical-align: middle;
            border-bottom: 1px solid #ddd;
        }

        .cart-item-image img {
            width: 60px;
            /* Kích thước hình ảnh */
            height: 60px;
            border-radius: 5px;
            /* Bo tròn góc ảnh */
            object-fit: cover;
            /* Đảm bảo ảnh không bị méo */
        }

        .cart-item-name {
            font-size: 16px;
            font-weight: bold;
            color: #333;
            /* Màu chữ */
            padding: 10px;
        }

        .cart-item-quantity {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
            /* Khoảng cách giữa các phần tử */
        }

        .cart-action {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            text-decoration: none;
            /* Bỏ gạch chân */
            color: white;
            font-size: 16px;
            transition: background-color 0.3s ease;
            cursor: pointer;
        }

        .cart-action.add {
            background-color: #28a745;
            /* Màu xanh cho nút Thêm */
        }

        .cart-action.add:hover {
            background-color: #218838;
            /* Màu xanh đậm khi hover */
        }

        .cart-action.delete {
            background-color: #dc3545;
            /* Màu đỏ cho nút Xóa */
        }

        .cart-action.delete:hover {
            background-color: #c82333;
            /* Màu đỏ đậm khi hover */
        }

        .cart-quantity {
            font-size: 18px;
            font-weight: bold;
            color: #000;
            /* Màu chữ */
        }
    </style>

</head>

<body>
    <?php include "header.php" ?>
    <hr>
    <div class="cart-container">
        <table class="cart-table">
            <?php
            foreach ($GHlist as $gh): ?>
                <tr class="cart-row">
                    <td class="cart-item-image">
                        <img src="./imgadmin/<?php echo htmlspecialchars($gh['HinhAnh']); ?>" alt="Hình ảnh món ăn">
                    </td>
                    <td class="cart-item-name"><?php echo htmlspecialchars($gh['TenMonAn']); ?></td>

                    <td class="cart-item-quantity">
                        <a class="cart-action add" href="<?php echo $base_url ?>index.php?action=ThemGioHang&MaMA=<?php echo htmlspecialchars($gh['MaMA']) ?>">
                            <i class="fas fa-plus"></i>
                        </a>
                        <span class="cart-quantity"><?php echo htmlspecialchars($gh['SoLuong']); ?></span>
                        <a class="cart-action delete" href="<?php echo $base_url ?>index.php?action=deleteGioHang&MaMA=<?php echo htmlspecialchars($gh['MaMA']) ?>">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>

            <?php endforeach;
            if (empty($GHlist))
                echo '<h2 style="margin: 0; text-align: center; display: flex; justify-content: center; align-items: center; height: 100vh;">Bạn chưa có sản phẩm nào</h2>';
            else { ?>
                <tr>
                    <td><a href="<?php echo $base_url ?>index.php?action=BanAn">Chọn Vị Trí Bàn</a></td>
                </tr>
            <?php } ?>

        </table>

    </div>
</body>

</html>