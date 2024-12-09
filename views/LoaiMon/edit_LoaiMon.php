<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../../CSSadmin/nhanvien.css">
</head>

<body>
    <div class="all">
        <?php include "../menu.php" ?>
        <div class="chucnang">
            <h1>Sửa thông tin loại món</h1>
            <form method="POST" action="">
                <table cellpadding="10" cellspacing="0">
                    <tr>
                        <th>Tên Loại Món Ăn</th>
                    </tr>
                    <?php $MaLoai = $_GET['MaLoai'] ?? null;

                    foreach ($loaimonList as $loaimon): ?>
                        <?php if ($loaimon['MaLoai'] == $MaLoai) { ?>
                            <tr>

                                <td> <input type="text" id="TenLoai" name="TenLoai" value="<?php echo htmlspecialchars($loaimon['TenLoai']); ?>" required>
                                </td>
                            </tr>
                        <?php } ?>
                    <?php endforeach; ?>
                </table>
                <input type="submit" value="Sửa">
            </form>
        </div>
    </div>

</body>

</html>