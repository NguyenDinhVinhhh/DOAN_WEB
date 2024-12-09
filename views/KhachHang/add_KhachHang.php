<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Khách Hàng</title>
    <link rel="stylesheet" href="../../CSSadmin/nhanvien.css">
</head>
<body>
<div class="all">
        <?php include "../menu.php"?>
        <div class="chucnang">
        <h1>Thêm Khách Hàng</h1>
        <form method="POST" action="">
        <table >
            <tr>
                <td class="add_td"><label for="Hoten">Họ tên:</label></td>
                <td><input type="text" id="Hoten" name="Hoten" required></td>
            </tr>
            <tr>
                <td class="add_td"><label for="Email">Email:</label></td>
                <td><input type="text" id="Email" name="Email" required></td>
            </tr>
            <tr>
                <td class="add_td"><label for="Sdt">Số điện thoại:</label></td>
                <td><input type="text" id="Sdt" name="Sdt" required></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit">Thêm</button></td>
            </tr>
        </table>    
    </form>
        </div>
   </div>
   

    
</body>
</html>

   
    
