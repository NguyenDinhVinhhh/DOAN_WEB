
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/trangchu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <style>
    section {
    margin-top:50px;
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 100px;
    }
    .login-container {
        background-color: white;
        padding: 32px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 400px;
        text-align: center;
    }
    h2 {
        margin-bottom: 16px;
    }
    .form-group {
        margin-bottom: 16px;
        text-align: left;
    }
    label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
    }
    input {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }
    button {
        width: 100%;
        padding: 12px;
        background-color: #343a40;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        margin-top: 16px;
    }
    button:hover {
        background-color: #0575c5;
    }
    footer {
        background-color: #343a40;
        color: white;
        text-align: center;
        padding: 16px;
        height: 180px;
    }
    .thick-line {
    height: 2px; /* Độ dày của đường kẻ */
    background-color: black; /* Màu của đường kẻ */
    border: none; /* Loại bỏ viền mặc định */
    }
    .h3{
            color:red;
            font-size: 14px;
            text-align: center;
    }

</style>
</head>
<body>
    <?php include "header.php" ?>
    <hr class="thick-line">
    <section>
        <div class="login-container">
            <?php
            if (!empty($er))
                ?><h3 class="h3"><?php echo $er;?></h3>
                <?php
             ?>
            <h2>Đăng Nhập</h2>
            <form  method="POST" action="">
                <div class="form-group" >
                    <label for="email">Tên</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="number">Số Điện Thoại </label>
                    <input type="text" id="telephone" name="telephone" required>
                </div>
                <button type="submit">Đăng nhập</button>
            </form>
            <p>Chưa có tài khoản? <a href="/NHAHANG/index.php?action=signup">Đăng ký</a></p>
        </div>
    </section>
    <footer>
        <p>&copy; 2024 Nhà Hàng NOMO. Mọi quyền được bảo lưu.</p>
    </footer>

</body>
</html>
