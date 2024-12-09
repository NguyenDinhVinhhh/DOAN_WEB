<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSSadmin/nhanvien.css">
    <title>Thông Tin Bàn</title>
</head>
<body>
<div class="all">
     <?php include "../menu.php"?>
        <div class="chucnang">
                <h1>Danh sách Bàn</h1>
                <button class="actions" >  <a href="../Ban/index.php?action=add">Thêm Bàn</a></button>
            <table border="1">
                <tr>
                    <th>Mã Bàn </th>
                    <th>Vị Trí</th>
                    <th>Mô Tả</th>
                    <th>Số Lượng</th>
                    <th>Xóa Bàn</th>
                    <th>Sửa Bàn</th>
                </tr>
                <?php foreach ( $banlist as $ban): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($ban['MaBan']);?></td>
                        <td><?php echo htmlspecialchars($ban['ViTri']);?></td>
                        <td><?php echo htmlspecialchars($ban['MoTa']);?></td>
                        <td><?php echo htmlspecialchars($ban['Soluong']);?></td>
                        <td class="actions"><a href="../Ban/index.php?action=delete&MaBan=<?php echo $ban['MaBan'];?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa</a></td>
                        <td class="actions"><a href="../Ban/index.php?action=edit&MaBan=<?php echo $ban['MaBan'];?>">Sửa</a></td>
                    </tr>
                    <?php endforeach; ?>
            </table>
        </div>
 </div>
</body>
</html>