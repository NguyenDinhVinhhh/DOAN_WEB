<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSSadmin/nhanvien.css">
    <title>Thêm Món Ăn</title>
</head>

<body>
    <div class="all">
        <?php include "../menu.php" ?>
        <div class="chucnang">
            <?php if (!empty($errors)): ?>
                <div style="color: red; margin-bottom: 20px;">
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li><?php echo htmlspecialchars($error); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
            <form action="" method="post" enctype="multipart/form-data">
                <table border="1">
                    <tr>
                        <td><label for="TenMonAn">Tên Món Ăn</label></td>
                        <td><input type="text" name="TenMonAn" id="TenMonAn" required></td>
                    </tr>
                    <tr>
                        <td><label for="hinhanh">Hình Ảnh</label></td>
                        <td><input type="file" name="hinhanh" id="hinhanh" required></td>
                    </tr>
                    <tr>
                        <td><label for="DonGia">Đơn Giá</label></td>
                        <td><input type="number" name="DonGia" id="DonGia" required></td>
                    </tr>
                    <tr>
                        <td><label for="MaLoai">Mã Loại</label></td>
                        <td>
                            <select name="TenLoai" id="TenLoai" required>
                                <?php foreach ($loaimonlist as $loaimon): ?>
                                    <option value="<?php echo $loaimon['TenLoai']; ?>">
                                        <?php echo $loaimon['TenLoai']; ?>
                                    </option>
                                <?php endforeach ?>
                            </select>
                        </td>
                    </tr>
                </table>
                <button type="submit">Thêm</button>
            </form>
        </div>
    </div>
</body>

</html>