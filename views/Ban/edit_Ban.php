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
                        if($ban['MaBan']==$ma) {?>

                    <table>
                        <tr>
                            <td><label for="">Vị Trí</label></td>
                            <td><input type="text" name="ViTri" value="<?php echo $ban['ViTri']?>"></td>
                        </tr>
                        <tr>
                            <td><label for="">Mô Tả</label></td>
                            <td><input type="text" name="MoTa" value="<?php echo $ban['MoTa']?>"></td>
                            
                        </tr>
                        <tr>
                            <td><label for="">Số Lượng </label></td>
                            <td><input type="text" name="Soluong" value="<?php echo $ban['Soluong']?>"></td>
                            
                        </tr>
                        
                    </table>
                    
                    <?php } endforeach;?>
                        <input type="submit" value="Sửa">
                </form>
         </div>
    </div>
</body>
</html>