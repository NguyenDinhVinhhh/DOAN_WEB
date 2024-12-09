<?php $base_url = "/DO_An_WEB%20(2)/";?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/DO_An_WEB%20(2)/CSSadmin/index.css">
    <title>Quản Lý Nhà Hàng Taste Haven</title>
</head>

<body>
    <div class="all">
        <div class="menu">
            <img src="<?php echo $base_url?>img/logo.png" alt="">
            <b style="font-weight: bold;font-style: italic;">Taste Haven</b>
            <ul>
                <li class="li_temp">Nhân Viên
                    <ul class="ul_temp">
                        <li> <a href="<?php echo $base_url?>views/NhanVien/index.php">Thông Tin Nhân Viên</a></li>

                    </ul>

                </li>
                <li class="li_temp"> Khách Hàng
                    <ul class="ul_temp">
                        <li><a href="<?php echo $base_url?>views/KhachHang/index.php">Thông Tin Khách Hàng</a></li>
                        <li><a href="<?php echo $base_url?>views/ThongTinBan/index.php">Thông Tin Đặt Bàn</a></li>
                    </ul>
                </li>
                <li class="li_temp"> Nhà Hàng
                    <ul class="ul_temp">
                        <li><a href="<?php echo $base_url?>views/Ban/index.php">Thông Tin Bàn Ăn</a></li>
                        <li><a href="<?php echo $base_url?>views/LoaiMon/index.php">Thông Tin Loại Món</a></li>
                        <li><a href="<?php echo $base_url?>views/MonAn/index.php">Thông Tin Món Ăn</a></li>
                    </ul>
                </li>
            </ul>

        </div>
        <div class="chucnang">

            <img src="<?php echo $base_url?>img/trang-chu-web-nha-hang.png" style="width: 100%;height: 700px;" alt="">


        </div>
    </div>
</body>

</html>