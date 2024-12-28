<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DANH SÁCH Bàn </title>
    <link rel="stylesheet" href="../../CSSadmin/nhanvien.css">
</head>
<body>
<div class="all">
     <?php include "../menu.php"?>
        <div class="chucnang">
            <h1>Danh sách Bàn</h1>
            <button class="actions" >  <a href="../ban/index.php?action=add" >Thêm Bàn</a></button>
            <table border="1" cellpadding="10" cellspacing="0">
                <tr>
                    <th>Mã Bàn </th>
                    <th>Tên Bàn</th>
                    <th>Xóa Bàn</th>
                    <th>Sửa  Bàn</th>
                </tr>
                <?php foreach ($loaimonList as $loaimon): ?>
                    <tr>
                        
                        <td><?php echo htmlspecialchars($loaimon['MaBan']); ?></td>
                        <td><?php echo htmlspecialchars($loaimon['TenBan']); ?></td>
                        <td class="actions"> <a href="../ban/index.php?action=delete&MaLoai=<?php echo $loaimon['MaBan']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa</a></td>
                        <td class="actions"><a href="../ban/index.php?action=edit&MaLoai=<?php echo $loaimon['MaBan']; ?>">Sửa</a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
    </div>
</div>

</body>
</html>
