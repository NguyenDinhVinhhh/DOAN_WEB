<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="/DO_An_WEB%20(2)/CSS/index.css">
    <link rel="stylesheet" href="/DO_An_WEB%20(2)/CSS/MonAn.css"> -->
    <link rel="stylesheet" href="nhap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<style>
    /* Container chính */
.product-list {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 8px;
}

/* Card của từng sản phẩm */
.product-card {
    background-color: #ffffff;
    border: 1px solid #ddd;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.product-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
}

/* Hình ảnh sản phẩm */
.product-image {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

/* Thông tin chi tiết sản phẩm */
.product-details {
    padding: 15px;
    text-align: center;
}

.product-name {
    font-size: 1.2em;
    font-weight: bold;
    margin: 10px 0;
    color: #333;
}

.product-price {
    font-size: 1em;
    color: #e74c3c;
    font-weight: bold;
}

/* Responsive thiết kế */
@media (max-width: 600px) {
    .product-list {
        grid-template-columns: 1fr;
        padding: 10px;
    }

    .product-card {
        margin-bottom: 20px;
    }
}

</style>

<body>
    <?php include "header.php" ?>
    <div class="product-list">
        <?php $dem = 0;
        foreach ($monlist as $monan): $dem++;
            if ($dem < 7) { ?>

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