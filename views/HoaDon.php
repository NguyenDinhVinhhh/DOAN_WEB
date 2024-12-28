<?php $base_url = "/NHAHANG/"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/NHAHANG/CSS/GioHang.css">
    <link rel="stylesheet" href="/NHAHANG/CSS/trangchu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Hóa Đơn</title>
</head>

<body>
    <?php include "header.php"  ?>
    <hr>
    <div class="cart-container">
        <h2 style="margin: 0; text-align: center; display: flex; justify-content: center; align-items: center; ">Hóa đơn của bạn </h2>
        <table class="cart-table">
            <?php $tongtien=0;
            foreach ($HDlist as $gh):
                $soluong = $gh['SoLuong'];
                $dongia = $gh['DonGia'];
                $tong = $soluong*$dongia;
                $tongtien+=$tong;

                ?>
                <tr class="cart-row">
                    <td class="cart-item-image">
                        <img src="<?php echo $base_url ?>imgadmin/<?php echo htmlspecialchars($gh['HinhAnh']); ?>" alt="Hình ảnh món ăn">
                    </td>
                    <td class="cart-item-name"><?php echo htmlspecialchars($gh['TenMonAn']); ?></td>
                    <td class="cart-item-quantity"><?php echo htmlspecialchars($gh['SoLuong']); ?></td>
                    <td class="cart-item-name"><?php echo $tong ?></td>
                </tr>
            <?php
            endforeach;  ?>
            <tr>
                <td>Tổng Tiền của bạn là : <?php echo $tongtien ?></td>
                <td><a href="<?php echo $base_url?>index.php?action=end "onclick="return confirm('Bạn có chắc chắn muốn đặt không?');">Đặt</a></td>
            </tr>
        </table>
    </div>
    <?php include "fooder.php" ?>
</body>

</html>