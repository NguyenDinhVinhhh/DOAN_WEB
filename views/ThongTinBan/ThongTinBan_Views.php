<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thong Tin Ban An</title>
    <link rel="stylesheet" href="../../CSSadmin/nhanvien.css">

</head>

<body>
    <div class="all">
        <?php include "../menu.php" ?>
        <div class="chucnang">
            <div>
                <h1>Thông Tin Khách Hàng Đặt</h1>
                <table>
                    <tr>
                        <th>Ngày Đặt</th>
                        <th>Họ Tên</th>
                        <th>Số Điện Thoại</th>
                        <th>Email </th>
                        <th>Số Lượng Bàn</th>
                        <th>Chi Tiết Hóa Đơn</th>
                        <th>Xóa</th>
                        <th>Duyệt</th>

                    </tr>
                    <?php foreach ($TTBlist as $tt):
                        if ($tt['MaNV'] == 1) { ?>

                            <tr>
                                <td><?php echo htmlspecialchars($tt['NgayDat']); ?></td>
                                <td><?php echo htmlspecialchars($tt['Hoten']); ?></td>
                                <td><?php echo htmlspecialchars($tt['Sdt']); ?></td>
                                <td><?php echo htmlspecialchars($tt['Email']); ?></td>
                                <form action="../../views/ThongTinBan/index.php" method="POST">
                                    <td>
                                        <input type="number" name="Soluongban" required>
                                    </td>
                                    <td class="actions">
                                        <a href="../../views/ThongTinBan/index.php?action=chitiethoadon&Makh=<?php echo $tt['MaKhachHang']; ?>&MaTTDB=<?php echo $tt['MaTTDB']; ?>">Chi Tiết Hóa Đơn</a>
                                    </td>
                                    <td class="actions">
                                        <a href=" ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa</a>
                                    </td>
                                    <td class="actions">
                                        <button type="submit" value="duyetdon">Duyệt</button>
                                        <input type="hidden" name="Makh" value="<?php echo $tt['MaKhachHang']; ?>">
                                        <input type="hidden" name="MaTTDB" value="<?php echo $tt['MaTTDB']; ?>">
                                        <input type="hidden" name="duyet" value="DuyetTTDB">
                                    </td>
                                </form>
                            </tr>
                    <?php }
                    endforeach; ?>
                </table>
            </div>
            <div>
                <table>

                    <h1>Thông Tin Đơn Đã Duyệt</h1>
                    <?php foreach ($TTBlist as $tt):
                        if ($tt['MaNV'] != 1) { ?>


                            <tr>
                                <td><?php echo htmlspecialchars($tt['NgayDat']); ?></td>
                                <td><?php echo htmlspecialchars($tt['Hoten']); ?></td>
                                <td><?php echo htmlspecialchars($tt['Sdt']); ?></td>
                                <td><?php echo htmlspecialchars($tt['Email']); ?></td>
                                <td>NV duyệt Đơn:<?php echo htmlspecialchars($tt['HotenNV']); ?></td>
                            </tr>
                        <?php } ?>


                    <?php
                    endforeach; ?>
                </table>
            </div>
        </div>
    </div>



</body>

</html>