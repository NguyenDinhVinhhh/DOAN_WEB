<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/DO_An_WEB%20(2)/CSS/index.css">
    <link rel="stylesheet" href="/DO_An_WEB%20(2)/CSS/MonAn.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<style>
    .product-list {
        margin-top: 620px;
    }
</style>

<body>
    <?php include "headerlogin.php" ?>
    <?php include "Banner.php" ?>
    <div class="product-list">
        <?php $dem = 0;
        foreach ($monlist as $monan): $dem++;
            if ($dem < 4) { ?>

                <div class="product-card">
                    <img class="product-image" src="./imgadmin/<?php echo htmlspecialchars($monan['HinhAnh']); ?>" alt="Hình ảnh món ăn">
                    <div class="product-details">
                        <h2 class="product-name"><?php echo htmlspecialchars($monan['TenMonAn']); ?></h2>
                        <p class="product-price">Giá: <?php echo number_format($monan['DonGia'], 0, ',', '.'); ?> VND</p>
                    </div>
                </div>
        <?php }
        endforeach; ?>
    </div>
    <?php include "fooder.php" ?>
</body>

</html>