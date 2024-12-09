<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DANH SÁCH Khách Hàng</title>
    <link rel="stylesheet" href="../../CSSadmin/nhanvien.css">

</head>

<body>
    <div class="all">
        <?php include "../menu.php" ?>
        <div class="chucnang">
            <h1>Danh Sách Khách Hàng</h1>
            <button class="actions"> <a href="../../views/KhachHang/index.php?action=add">Thêm Khách Hàng</a></button>
            <table>
                <tr>
                    <th>Mã Khách Hàng</th>
                    <th>Tên Khách Hàng</th>
                    <th>Email</th>
                    <th>Số Điện Thoại</th>
                    <th>Xóa Khách Hàng</th>
                    <th>Sửa  Khách Hàng</th>
                </tr>
                <?php foreach ($khachhanglist as $khachhang): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($khachhang['MaKhachHang']); ?></td>
                        <td><?php echo htmlspecialchars($khachhang['Hoten']); ?></td>
                        <td><?php echo htmlspecialchars($khachhang['Email']); ?></td>
                        <td><?php echo htmlspecialchars($khachhang['Sdt']); ?></td>
                        <td class="actions">
                            <a href="../../views/KhachHang/index.php?action=delete&MaKH=<?php echo $khachhang['MaKhachHang']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa</a>
                        </td>
                        <td class="actions">
                            <a href="../../views/KhachHang/index.php?action=edit&MaKH=<?php echo $khachhang['MaKhachHang']; ?>">Sửa</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>



</body>

</html>