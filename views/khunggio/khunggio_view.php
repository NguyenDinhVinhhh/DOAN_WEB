<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSSadmin/nhanvien.css">
    <title>Thông Tin Khung Giờ</title>
</head>
<body>
<div class="all">
     <?php include "../menu.php"?>
        <div class="chucnang">
                <h1>Danh sách Khung Giờ </h1>
                <button class="actions" >  <a href="../khunggio/index.php?action=add">Thêm Khung Giờ</a></button>
            <table border="1">
                <tr>
                    <th>Tên Khung Giờ</th>
                    <th>Xóa</th>
                    <th>Sửa</th>
                </tr>
                <?php foreach ( $banlist as $ban): ?>
                    <tr>
                       
                        <td><?php echo htmlspecialchars($ban['TenKhungGio']);?></td>
                        <td class="actions"><a href="../khunggio/index.php?action=delete&MaBan=<?php echo $ban['MaKhunggio'];?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa</a></td>
                        <td class="actions"><a href="../khunggio/index.php?action=edit&MaBan=<?php echo $ban['MaKhunggio'];?>">Sửa</a></td>
                    </tr>
                    <?php endforeach; ?>
            </table>
        </div>
 </div>
</body>
</html>