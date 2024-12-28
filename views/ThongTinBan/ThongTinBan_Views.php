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
                <h1>Đơn Đặt</h1>
                <table>

                    <?php foreach ($TTBlist as $tt):
                        if ($tt['MaNV'] == 1) { ?>

                            <tr>
                                <th>Chưa Duyệt </th>
                                <td><?php echo htmlspecialchars($tt['NgayDat']); ?></td>
                                <td><?php echo htmlspecialchars($tt['Hoten']); ?></td>
                                <td><?php echo htmlspecialchars($tt['Sdt']); ?></td>
                                <td><?php echo htmlspecialchars($tt['Email']); ?></td>
                                <td><?php echo htmlspecialchars($tt['ghichu']); ?></td>
                                <td><?php echo htmlspecialchars($tt['TenKhungGio']); ?></td>
                                <td><a href="../../views/ThongTinBan/index.php?action=Chonban&MaTTDB=<?php echo $tt['MaTTDB']; ?>&NgayDat=<?php echo $tt['NgayDat']; ?>&MaKhunggio=<?php echo $tt['MaKhunggio']; ?>">Chọn Bàn </a></td>
                                <form action="../../views/ThongTinBan/index.php" method="POST">
                                    <td class="actions">
                                        <a href="../../views/ThongTinBan/index.php?action=chitiethoadon&Makh=<?php echo $tt['MaKhachHang']; ?>&MaTTDB=<?php echo $tt['MaTTDB']; ?>">Chi Tiết Hóa Đơn</a>
                                    </td>
                                    <td class="actions">
                                        <a href="../../views/ThongTinBan/index.php?action=deletethongtindatban&Makh=<?php echo $tt['MaKhachHang']; ?>&MaTTDB=<?php echo $tt['MaTTDB']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa</a>
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
                <h1>Đơn Đã Duyệt</h1>
                <table>
                    <?php foreach ($TTBlist as $tt):
                        if ($tt['MaNV'] != 1) { ?>
                            <tr>
                                <th>Đã Duyệt </th>
                                <td><?php echo htmlspecialchars($tt['NgayDat']); ?></td>
                                <td><?php echo htmlspecialchars($tt['Hoten']); ?></td>
                                <td><?php echo htmlspecialchars($tt['Sdt']); ?></td>
                                <td><?php echo htmlspecialchars($tt['Email']); ?></td>
                                <td><?php echo htmlspecialchars($tt['ghichu']); ?></td>
                                <td><?php echo htmlspecialchars($tt['TenKhungGio']); ?></td>
                                <td>NV duyệt Đơn:<?php echo htmlspecialchars($tt['HotenNV']); ?></td>
                                <td class="actions">
                                    <a href="../../views/ThongTinBan/index.php?action=inhoadon&MaTTDB=<?php echo $tt['MaTTDB']; ?>">Chi Tiết Hóa Đơn</a>
                                </td>
                                <td class="actions">
                                    <a href="../../views/ThongTinBan/index.php?action=xemban&MaTTDB=<?php echo $tt['MaTTDB']; ?>">Xem bàn </a>
                                </td>
                                <td class="actions">
                                    <a href="../../views/ThongTinBan/index.php?action=deletethongtindatban&Makh=<?php echo $tt['MaKhachHang']; ?>&MaTTDB=<?php echo $tt['MaTTDB']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa</a>
                                </td>
                            </tr>

                    <?php }
                    endforeach; ?>
                </table>
            </div>

        </div>
    </div>


</body>

</html>