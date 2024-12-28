<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách món ăn</title>
    <link rel="stylesheet" href="../../CSSadmin/nhanvien.css">
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
            <h1> DANH SÁCH MÓN ĂN</h1>
            <button><a href="../MonAn/index.php?action=add">Thêm Món Ăn</a></button>
            <table border="1">
                <tr>
                    <th>MÃ Món Ăn</th>
                    <th>Hình Ảnh</th>
                    <th>Đơn Giá</th>
                    <th>Tên Món Ăn</th>
                    <th>Tên Loại Món Ăn</th>
                    <th>Xóa</th>
                    <th>Sữa</th>
                </tr>
                <?php foreach ($monanlist as $monan): ?>

                    <tr>
                        <td><?php echo htmlspecialchars($monan['MaMA']); ?></td>
                        <td> <img class="img_MonAn" src="../../imgadmin/<?php echo htmlspecialchars($monan['HinhAnh']); ?>" alt=""></td>
                        <td><?php echo htmlspecialchars($monan['DonGia']); ?></td>

                        <td><?php echo htmlspecialchars($monan['TenMonAn']); ?></td>
                        <?php foreach ($loaimonlist as $loaimon): ?>
                            <?php if ($monan['MaLoai'] == $loaimon['MaLoai']) { ?>
                                <td><?php echo htmlspecialchars($loaimon['TenLoai']); ?></td>
                        <?php break;
                            }
                        endforeach ?>
                            <td><a href="../MonAn/index.php?action=delete&MaMA=<?php echo htmlspecialchars($monan['MaMA']); ?>&Hinhanh=<?php echo htmlspecialchars($monan['HinhAnh']); ?>" onclick="return confirm('Bạn có muốn xóa không ?');">Xóa</a></td>
                        <td><a href="../MonAn/index.php?action=edit&MaMA=<?php echo htmlspecialchars($monan['MaMA']); ?>">Sửa</a></td>
                    </tr>
                <?php endforeach ?>

            </table>
        </div>
    </div>
</body>

</html>