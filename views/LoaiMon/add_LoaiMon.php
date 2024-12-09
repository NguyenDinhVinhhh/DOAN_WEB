<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Loại Món</title>
    <link rel="stylesheet" href="../../CSSadmin/nhanvien.css">
</head>

<body>


    <div class="all">
        <?php include "../menu.php" ?>
        <div class="chucnang">
            <h1>Thêm Loại Món</h1>

            <form method="POST" action="">
                <table>
                    <tr>
                        <td class="add_td"> <label for="TenLoai">Tên Loại:</label>
                        </td>
                        <td> <input type="text" id="Tenloai" name="TenLoai" required></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td> <button type="submit">Thêm</button> </td>
                    </tr>
                </table>

            </form>
        </div>
    </div>


</body>

</html>