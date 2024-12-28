<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/NHAHANG/CSS/trangchu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
    <?php include "header.php" ?>
    <?php include "Banner.php" ?>
    <div class="content">
        <h2>SẢN PHẨM TIÊU BIỂU</h2>
        <ul class="list-products">
            <?php 
            $dem = 0; 
            foreach ($monlist as $monan): 
                $dem++;
                if ($dem <= 6): // Hiển thị tối đa 6 món ăn
            ?>
            <div class="item">
                <img class="monan" src="./imgadmin/<?php echo htmlspecialchars($monan['HinhAnh']); ?>" alt="Hình ảnh món ăn">
                <div class="stars">
                    <?php for ($i = 0; $i < 5; $i++): // Đánh giá mặc định 5 sao ?>
                        <span><i class="fa-solid fa-star"></i></span>
                    <?php endfor; ?>
                </div>
                <div class="name"><?php echo htmlspecialchars($monan['TenMonAn']); ?></div>
                <!-- <div class="desc"><?php echo htmlspecialchars($monan['MoTa']); // Mô tả món ăn ?></div> -->
                <div class="price"><?php echo number_format($monan['DonGia'], 0, ',', '.'); ?> VND</div>
            </div>
            <?php 
                endif; 
            endforeach; 
            ?>
        </ul>
    </div>

    <?php include "comment.php"?>
    <?php include "fooder.php" ?>
</body>

</html>