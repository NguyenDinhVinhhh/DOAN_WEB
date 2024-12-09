<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSSadmin/nhanvien.css">
    <title>Sửa Món Ăn</title>
</head>
<style>
    .img_MonAn {
        width: 100px;
        height: 100px;
    }
</style>

<body>
    <div class="all">
        <?php include "../menu.php" ?>
        <div class="chucnang">
            <form action="" method="post" enctype="multipart/form-data">

                <?php $ma = $_GET['MaMA'];
                foreach ($monanlist as $monan): ?>
                    <?php if ($monan['MaMA'] == $ma) { ?>
                        <table border="1">
                            <tr>
                                <td><label for="TenMonAn">Tên Món Ăn</label></td>
                                <td><input type="text" name="TenMonAn" id="TenMonAn" value="<?php echo $monan['TenMonAn']; ?>" required></td>
                            </tr>
                            <tr>
                                <td><label for="hinhanh">Hình Ảnh</label></td>
                                <td><input type="file" name="hinhanh" id="hinhanh" value="<?php echo $monan['HinhAnh']; ?>">
                                    <img class="img_MonAn" src="../../imgadmin/<?php echo htmlspecialchars($monan['HinhAnh']); ?>" alt="">
                                </td>

                            </tr>
                            <tr>
                                <td><label for="DonGia">Đơn Giá</label></td>
                                <td><input type="number" name="DonGia" id="DonGia" value="<?php echo $monan['DonGia']; ?>" required></td>
                            </tr>
                            <tr>
                                <td><label for="MaLoai">Mã Loại</label></td>
                                <td>
                                    <select name="TenLoai" id="TenLoai" required>
                                        <?php foreach ($loaimonlist as $loaimon): ?>
                                            <?php if ($loaimon['MaLoai'] == $monan['MaLoai']) { ?>
                                                <option value="<?php echo $loaimon['TenLoai']; ?>">
                                                    <?php echo $loaimon['TenLoai']; ?>
                                                </option>
                                        <?php break;
                                            }
                                        endforeach ?>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <button type="submit">Sửa</button>
                <?PHP break;
                    }
                endforeach; ?>
            </form>
        </div>
    </div>
</body>

</html>