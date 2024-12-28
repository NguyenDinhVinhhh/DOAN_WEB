<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DANH SÁCH Bàn </title>
    <link rel="stylesheet" href="../../CSSadmin/nhanvien.css">

</head>

<body>
    <div class="all">
        <?php include "../menu.php" ?>
        <div class="chucnang">
        <h1>Danh sách bàn </h1>
            <table class="ban-table" cellpadding="10" cellspacing="0">
                <thead>
                    <tr>
                        <th>Mã Bàn</th>
                        <th>Tên Bàn</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($loaimonList as $loaimon): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($loaimon['MaBan']); ?></td>
                            <td><?php echo htmlspecialchars($loaimon['TenBan']); ?></td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <a href="../../views/ThongTinBan/index.php">Quay Lại </a>
        </div>

    </div>

</body>

</html>