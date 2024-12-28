<?php
// Đặt đường dẫn gốc của dự án
$base_url = "/NHAHANG/";
?>
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
            <h1>Chi Tiết Hóa Đơn</h1>
            <table>
                <tr>
                    <th>Hình ảnh</th>
                    <th>Tên Món Ăn</th>
                    <th>Số Lượng</th>
                    <th>Tiền</th>
                </tr>
                <?php $tongtien = 0;
                foreach ($HDlist as $gh):
                    $soluong = $gh['SoLuong'];
                    $dongia = $gh['DonGia'];
                    $tong = $soluong * $dongia;
                    $tongtien += $tong;

                ?>
                    <tr>
                        <td class="img_HoaDon">
                            <img src="<?php echo $base_url ?>imgadmin/<?php echo htmlspecialchars($gh['HinhAnh']); ?>" alt="Hình ảnh món ăn">
                        </td>
                        <td><?php echo htmlspecialchars($gh['TenMonAn']); ?></td>
                        <td class="input_HoaDon"> <?php echo htmlspecialchars($gh['SoLuong']); ?></td>
                        <td> <?php echo $tong ?></td>

                    </tr>
                <?php
                endforeach;  ?>
                <tr>
                    <td>Tổng Tiền là : <?php echo $tongtien ?></td>
                    <td><a href="../../views/ThongTinBan/index.php">Quay Lại</a></td>
                </tr>
            </table>
        </div>
    </div>



</body>

</html>