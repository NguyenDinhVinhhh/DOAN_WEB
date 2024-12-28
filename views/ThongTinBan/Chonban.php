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
        <?php
            if (!empty($err)) {
            ?>
                <h3><?php echo $err; ?></h3>
               
            <?php
            }
            ?>
            <h1>Danh sách bàn đã chọn </h1>
            <?php
            if (!empty($NgayDat) && !empty($khunggio)) {
            ?>
                <h3>Ngày đặt :<?php echo $NgayDat; ?></h3>
                <h3>Khung giờ :<?php echo $khunggio; ?></h3>
            <?php
            }
            ?>
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
            <h1>Danh Sách Bàn Trống </h1>
            <form action="" method="post">
                <table class="ban-table" cellpadding="10" cellspacing="0">
                    <?php foreach ($banList as $ban ): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($ban['MaBan']); ?></td>
                            <td><?php echo htmlspecialchars($ban['TenBan']); ?></td>
                            <td>
                                <input type="checkbox" name="ban[]" value="<?php echo htmlspecialchars($ban['MaBan']); ?>" class="checkbox-ban">
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    <input type="submit" value="Chọn">
                </table>
            </form>
        </div>

    </div>

</body>

</html>