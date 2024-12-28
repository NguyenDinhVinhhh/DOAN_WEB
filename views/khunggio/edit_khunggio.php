<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSSadmin/nhanvien.css">
    <title>Sửa bàn</title>
</head>
<body>
<div class="all">
        <?php include "../menu.php"?>
        <div class="chucnang">
            <h1>Sửa thông tin loại món</h1>
                <form action="" method="post">
                    <?php 
                    foreach($banlist as $ban):
                        if($ban['MaKhunggio']==$ma) {?>

                    <table>
                        <tr>
                            <td><label for="">Tên Khung Giờ </label></td>
                            <td><input type="text" name="TenKhungGio" value="<?php echo $ban['TenKhungGio']?>"></td>
                        </tr>
                        
                        
                    </table>
                    
                    <?php } endforeach;?>
                        <input type="submit" value="Sửa">
                </form>
         </div>
    </div>
</body>
</html>