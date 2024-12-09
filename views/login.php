
<style>
    section{
       
        height: 700px;
        width: 100%;
       
    }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/DO_An_WEB%20(2)/CSS/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
<?php include "header.php" ?>
<section >
    <div class="heder">
        <div class="container" style="margin: auto;margin-top: 150px;">
            <div class="card p-4 shadow-sm" style="max-width: 400px; margin: auto;">
                <h2 class="text-center mb-4">Đăng Nhập</h2>
                <form method="POST" action="">
                    <div class="form-group">
                        <label for="name">Tên:</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="number">Số điện thoại:</label>
                        <input type="text" class="form-control" id="telephone" name="telephone" required>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-block">Đăng Nhập</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</section>
<?php include "fooder.php" ?>
</body>
</html>
