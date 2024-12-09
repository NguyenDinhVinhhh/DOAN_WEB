<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Thông Tin Khách Hàng</title> 
       <link rel="stylesheet" href="../../CSSadmin/nhanvien.css">
</head>
<body>
<div class="all">
        <?php include "../menu.php"?>
        <div class="chucnang">
                <h1>Sửa Thông Tin Khách Hàng</h1>
                <form method="POST" action="">
                <table cellpadding="10" cellspacing="0">
                    <tr>
                        <th>Tên Khách Hàng</th>
                        <th>Email</th>
                        <th>Số Điện Thoại</th>
                    </tr>
                    <?php
                    $MaKH = $_GET['MaKH'] ?? null;
                    foreach ($khachhangList as $khachhang): ?>
                        <?php if ($khachhang['MaKhachHang'] == $MaKH) { ?>
                            <tr>
                                <td><input type="text" id="Hoten" name="Hoten" value="<?php echo htmlspecialchars($khachhang['Hoten']); ?>" required></td>
                                <td><input type="text" id="Email" name="Email" value="<?php echo htmlspecialchars($khachhang['Email']); ?>" required></td>
                                <td><input type="text" id="Sdt" name="Sdt" value="<?php echo htmlspecialchars($khachhang['Sdt']); ?>" required></td>
                            </tr>
                        <?php } ?>
                    <?php endforeach; ?>
                </table>
                <input type="submit" value="Cập Nhật">
            </form>

        </div>
   </div>
   

    
</body>
</html>
