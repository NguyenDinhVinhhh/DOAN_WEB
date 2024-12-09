<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Thông Tin Nhân Viên</title> 
       <link rel="stylesheet" href="../../CSSadmin/nhanvien.css">
</head>
<body>
<div class="all">
        <?php include "../menu.php"?>
        <div class="chucnang">
                <h1>Sửa Thông Tin Nhân Viên</h1>
                <form method="POST" action="">
                <table cellpadding="10" cellspacing="0">
                    <tr>
                        <th>Địa Chỉ</th>
                        <th>Tên Nhân Viên</th>
                        <th>Mật Khẩu</th>
                        <th>Ngày Sinh</th>
                        <th>Số Điện Thoại</th>
                    </tr>
                    <?php
                    $MaNV = $_GET['MaNV'] ?? null;
                    foreach ($nhanvienList as $nhanvien): ?>
                        <?php if ($nhanvien['MaNV'] == $MaNV) { ?>
                            <tr>
                                <td><input type="text" id="Diachi" name="Diachi" value="<?php echo htmlspecialchars($nhanvien['Diachi']); ?>" required></td>
                                <td><input type="text" id="Hoten" name="Hoten" value="<?php echo htmlspecialchars($nhanvien['HotenNV']); ?>" required></td>
                                <td><input type="text" id="Matkhau" name="Matkhau" value="<?php echo htmlspecialchars($nhanvien['Matkhau']); ?>" required></td>
                                <td><input type="date" id="Ngaysinh" name="Ngaysinh" value="<?php echo htmlspecialchars($nhanvien['Ngaysinh']); ?>" required></td>
                                <td><input type="text" id="Sdt" name="Sdt" value="<?php echo htmlspecialchars($nhanvien['Sdt']); ?>" required></td>
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
