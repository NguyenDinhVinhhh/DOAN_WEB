
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/DO_An_WEB%20(2)/CSS/index.css">
    <link rel="stylesheet" href="/DO_An_WEB%20(2)/CSS/BanAn.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Giỏ Hàng</title>
</head>

<body>
    <?php include "headerlogin.php" ?>
    <div class="cart-container">
        <form action="" method="POST">
            <table class="cart-table">
                <?php 
                foreach ($banlist as $ban): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($ban['ViTri']); ?></td>
                        <td><?php echo htmlspecialchars($ban['MoTa']); ?></td>
                        <td><input type="radio" name="MaBan" value="<?php echo htmlspecialchars($ban['MaBan']); ?> " required></td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <td>Chọn Ngày Đặt</td>
                    <td><input type="datetime-local" name="time" id="" required></td>
                    <td colspan="3"><input type="submit" value=" Đặt Bàn"></td>
                </tr>
            </table>
        </form>

    </div>
    <?php include "fooder.php" ?>

</body>

</html>