<?php $base_url = "/DO_An_WEB%20(2)/"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/DO_An_WEB%20(2)/CSS/index.css">
    <link rel="stylesheet" href="/DO_An_WEB%20(2)/CSS/GioHang.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Giỏ Hàng</title>
</head>

<body>
    <?php include "headerlogin.php" ?>
    <div class="cart-container">
        <table class="cart-table">
            <?php 
            foreach ($GHlist as $gh): ?>
                <tr class="cart-row">
                    <td class="cart-item-image">
                        <img src="./imgadmin/<?php echo htmlspecialchars($gh['HinhAnh']); ?>" alt="Hình ảnh món ăn">
                    </td>
                    <td class="cart-item-name"><?php echo htmlspecialchars($gh['TenMonAn']); ?></td>
                    <td class="cart-item-quantity"><?php echo htmlspecialchars($gh['SoLuong']); ?></td>
                    <td><a href="<?php echo $base_url ?>index.php?action=deleteGioHang&MaMA=<?php echo htmlspecialchars($gh['MaMA']) ?>">Xóa</a></td>
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

    <?php include "fooder.php" ?>
</body>

</html>