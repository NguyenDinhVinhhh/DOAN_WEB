<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DANH SÁCH NHÂN VIÊN</title>
    <link rel="stylesheet" href="../../CSSadmin/nhanvien.css">
    
</head>
<body>
<div class="all">
     <?php include "../menu.php"?>
        <div class="chucnang">
            <h1>Danh Sách Nhân Viên</h1>
            <button class="actions"> <a href="../../views/NhanVien/index.php?action=add">Thêm Nhân Viên</a></button>
                <table>
                <tr>
                    <th>Mã Nhân Viên</th>
                    <th>Địa Chỉ</th>
                    <th>Tên Nhân Viên</th>
                    <th>Mật Khẩu</th>
                    <th>Ngày Sinh</th>
                    <th>Số Điện Thoại</th>
                    <th>Xóa Nhân Viên</th>
                    <th>Sửa Nhân Viên</th>
                </tr>
                <?php foreach ($nhanvienList as $nhanvien): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($nhanvien['MaNV']); ?></td>
                        <td><?php echo htmlspecialchars($nhanvien['Diachi']); ?></td>
                        <td><?php echo htmlspecialchars($nhanvien['HotenNV']); ?></td>
                        <td><?php echo htmlspecialchars($nhanvien['Matkhau']); ?></td>
                        <td><?php echo htmlspecialchars($nhanvien['Ngaysinh']); ?></td>
                        <td><?php echo htmlspecialchars($nhanvien['Sdt']); ?></td>
                        <td class="actions">
                            <a href="../../views/NhanVien/index.php?action=delete&MaNV=<?php echo $nhanvien['MaNV']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa</a>
                        </td>
                        <td class="actions">
                            <a href="../../views/NhanVien/index.php?action=edit&MaNV=<?php echo $nhanvien['MaNV']; ?>">Sửa</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
</div>
    
  
   
</body>
</html>
