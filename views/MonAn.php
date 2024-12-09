<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách món ăn</title>
    <link rel="stylesheet" href="/DO_An_WEB%20(2)/CSS/MonAn.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <?php include "headerlogin.php" ?>
    <div class="container">
        <div class="MenuLoaiMon">
            <ul class="ul_LoaiMon">
            <?php foreach ($loaimonList as $loaimon): ?>
                <li><a href="/DO_An_WEB%20(2)/index.php?action=MenuLoaiMon&MaLoai=<?php echo htmlspecialchars($loaimon['MaLoai']); ?>"><?php echo htmlspecialchars($loaimon['TenLoai']); ?></a></li>
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
                            <form action="/DO_An_WEB%20(2)/index.php" method="GET">
                                <input class="btn" type="number" name="soluong" min="1" value="1">
                                <input type="hidden" name="MaMA" value="<?php echo htmlspecialchars($monan['MaMA']); ?>">
                                <button type="submit" class="btn-mua">Mua</button>
                                <input type="hidden" name="action" value="MuaHang">
                            </form>
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php include "fooder.php" ?>
</body>

</html>