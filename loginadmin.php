<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Đăng Nhập ADMIN</title>
</head>

<body>
    <section>
        <div class="heder">
     
            <div class="container" style="margin: auto;margin-top: 150px;">
            <?php if (empty($rr))
                echo '<span  style="margin: 0; text-align: center; display: flex; justify-content: center; align-items: center;">'.$srr.'</span>';
         ?>
                <div class="card p-4 shadow-sm" style="max-width: 400px; margin: auto;">
                    <h2 class="text-center mb-4">Đăng Nhập</h2>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="name">Tên:</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>

                        <div class="form-group">
                            <label for="number">Mật Khẩu:</label>
                            <input type="text" class="form-control" id="MK" name="MK" required>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Đăng Nhập</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>