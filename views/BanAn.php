<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/NHAHANG/CSS/trangchu.css">
    <link rel="stylesheet" href="/NHAHANG/CSS/BanAn.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Bàn ăn</title>
    <style>
        
/* Container chính */
.cart-container {
    width: 90%;
    max-width: 900px;
    margin: 40px auto;
    padding: 20px;
    border-radius: 8px;
    background-color: #fff;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
    font-family: 'Arial', sans-serif;
}

/* Các phần trong form */
.form-section {
    margin-bottom: 30px;
}

h2 {
    font-size: 20px;
    color: #333;
    margin-bottom: 15px;
    text-align: left;
}

/* Bảng */
.cart-table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

/* Các ô trong bảng */
.cart-table td {
    padding: 12px 15px;
    font-size: 16px;
    color: #555;
}

/* Style cho các label */
label {
    font-weight: bold;
    color: #333;
}

/* Style cho các input */
input[type="date"],
input[type="text"],
input[type="radio"] {
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 16px;
    width: 100%;
    box-sizing: border-box;
}

/* Đặc biệt cho radio button */
input[type="radio"] {
    width: auto;
    margin-right: 10px;
}

/* Nút submit */
.submit-btn {
    padding: 12px 30px;
    background-color: #28a745;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    width: 100%;
    transition: background-color 0.3s ease;
}

.submit-btn:hover {
    background-color: #218838;
}

/* Tạo khoảng cách giữa các phần tử trong form */
.cart-table tr:not(:last-child) td {
    border-bottom: 1px solid #ddd;
}

/* Hiệu ứng hover trên các hàng trong bảng */
.cart-table tr:hover {
    background-color: #f1f1f1;
}

/* Điều chỉnh các input khi có lỗi */
input:invalid {
    border: 1px solid #ff4d4d;
}

    </style>
</head>

<body>
    <?php include "header.php" ?>
    <hr>
    <div class="cart-container">
    <form action="" method="POST">
        <div class="form-section">
            <h2>Chọn Khung Giờ</h2>
            <table class="cart-table">
                <?php foreach ($banlist as $ban): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($ban['TenKhungGio']); ?></td>
                        <td><input type="radio" name="MaKhunggio" value="<?php echo htmlspecialchars($ban['MaKhunggio']); ?>" required></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>

        <div class="form-section">
            <h2>Thông Tin Đặt Bàn</h2>
            <table class="cart-table">
                <tr>
                    <td><label for="date">Chọn Ngày Đặt</label></td>
                    <td><input type="date" name="time" id="date" required></td>
                </tr>
                <tr>
                    <td><label for="ghichu">Ghi Chú</label></td>
                    <td><input type="text" name="ghichu" id="ghichu"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit" class="submit-btn">Đặt Bàn</button>
                    </td>
                </tr>
            </table>
        </div>
    </form>
</div>

    <?php include "fooder.php" ?>

</body>

</html>
