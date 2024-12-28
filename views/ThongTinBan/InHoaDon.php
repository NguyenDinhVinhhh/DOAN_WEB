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
                        <th>Mã Hóa Đơn </th>
                        <th>Hình Ảnh</th>
                        <th>Tên Món Ăn</th>
                        <th>Số Lượng</th>
                        <th>Đơn Giá </th>
                        <th>Tiền</th>
                        <th>Thành Tiền</th>
                    </tr>
                    <?php $tong=0; $mahd=0;
                    foreach ($loaimonList as $gh):
                    ?>
                        <tr>
                            <td><?php echo htmlspecialchars($gh['MaHD']); ?></td>
                            <td class="img_HoaDon">
                                <img src="<?php echo $base_url ?>imgadmin/<?php echo htmlspecialchars($gh['HinhAnh']); ?>" alt="Hình ảnh món ăn">
                            </td>
                            <td><?php echo htmlspecialchars($gh['TenMonAn']); ?></td>
                            <td class="input_HoaDon">
                            <td class="input_HoaDon"> <?php echo htmlspecialchars($gh['Soluong']); ?></td>
                            <td><?php echo htmlspecialchars($gh['DonGia']); ?></td>
                            <td><?php echo htmlspecialchars($gh['ThanhTien']); ?></td>
                            <?php $tong+=$gh['ThanhTien']; 
                             $mahd=$gh['MaHD'];?>
                        </tr>
                    <?php
                    endforeach;  ?>
                  
                </table>
              
                        Tổng Tiền là : <?php echo $tong ?>
                       <a href="../../views/ThongTinBan/index.php">Quay Lại </a> 
            <h1>Thêm Món Ăn </h1>
            <?php
            if (!empty($err)) {
            ?>
                <h3><?php echo $err; ?></h3>
               
            <?php
            }
            ?>
            <form action="" method="post">
                <table border="1">
                    <tr>
                        <td><label for=""> Mã Món Ăn</label></td>
                        <td><input type="text" name="MaMA" id=""></td>
                    </tr>
                    <tr>
                        <td><label for="">Số Lượng </label></td>
                        <td><input class="btn" type="number" name="soluong" min="1" value="1"></td>
                    </tr>
                 
                </table>
                <input type="hidden" name="MaHD" value="<?php echo $mahd?>">
                <button type="submit">Thêm</button>
            </form>
        </div>
    </div>



</body>

</html>