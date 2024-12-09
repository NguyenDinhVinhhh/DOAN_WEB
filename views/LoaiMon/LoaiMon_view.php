<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DANH SÁCH LOẠI MÓN </title>
    <link rel="stylesheet" href="../../CSSadmin/nhanvien.css">
</head>
<body>
<div class="all">
     <?php include "../menu.php"?>
        <div class="chucnang">
            <h1>Danh sách Loại Món</h1>
            <button class="actions" >  <a href="../LoaiMon/index.php?action=add" >Thêm Loại Món</a></button>
            <table border="1" cellpadding="10" cellspacing="0">
                <tr>
                    <th>Mã Loại Món</th>
                    <th>Tên Loại Món</th>
                    <th>Xóa Loại Món</th>
                    <th>Sửa  Loại Món</th>
                </tr>
                <?php foreach ($loaimonList as $loaimon): ?>
                    <tr>
                        
                        <td><?php echo htmlspecialchars($loaimon['MaLoai']); ?></td>
                        <td><?php echo htmlspecialchars($loaimon['TenLoai']); ?></td>
                        <td class="actions"> <a href="../LoaiMon/index.php?action=delete&MaLoai=<?php echo $loaimon['MaLoai']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa</a></td>
                        <td class="actions"><a href="../LoaiMon/index.php?action=edit&MaLoai=<?php echo $loaimon['MaLoai']; ?>">Sửa</a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
    </div>
</div>

</body>
</html>
