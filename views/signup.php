<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/trangchu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <style>
        .main {
            background-color: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            margin: 2rem auto;
            text-align: center;
            }

        h2 {
            margin-bottom: 1rem;
        }

        .form-group {
            margin-bottom: 1rem;
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 0.75rem;
            background-color: #343a40;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            margin-top: 1rem;
        }

        button:hover {
            background-color: #0056b3;
        }
        footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 1rem;
            margin-top: auto;
            height: 180px;
        }
        .thick-line {
            height: 2px; /* Độ dày của đường kẻ */
            background-color: black; /* Màu của đường kẻ */
            border: none; /* Loại bỏ viền mặc định */
        }
    </style>
</head>

<body>
    <?php include "header.php" ?>
    <hr class="thick-line">
    <div class="main">
        <h2>Đăng Ký</h2>
        <form id="dangky_form" method="POST" action="">
            <div class="form-group">
                <label for="username">Tên Người Dùng</label>
                <input type="text" id="username" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Số Điện Thoại</label>
                <input type="number" id="telephone" name="sdt" required>
            </div>
            <button type="submit">Đăng Ký</button>
        </form> 
        <p>Đã có tài khoản? <a href="/NHAHANG/index.php?action=login">Đăng nhập</a></p>
    </div>
    <footer>
        <p>&copy; 2024 Nhà Hàng NOMO. Mọi quyền được bảo lưu.</p>
    </footer>
    
</body>

</html>