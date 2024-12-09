<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSSadmin/nhanvien.css">
    <title>Thêm Bàn</title>
</head>
<body>
<div class="all">
        <?php include "../menu.php"?>
        <div class="chucnang">
                <h1>Thêm Bàn</h1>
            <form action="" method="POST">
                <table>
                    <tr>
                        <td class="add_td"><label for="">Vị Trí</label></td>
                        <td><input type="text" name="ViTri" required></td>
                    </tr>
                    <tr>
                    <td class="add_td"> <label for="">Mô Tả</label></td>
                    <td><input type="text" name="MoTa" required></td>
                    </tr>
                    <tr>
                    <td class="add_td"> <label for="">Số Lượng</label></td>
                    <td><input type="number" name="Soluong" required></td>
                    </tr>
                </table>
                <button type="submit">Thêm</button>
            </form>
         </div>
   </div>
</body>
</html>