<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<style>
    section {

        height: 700px;
        width: 100%;
    }
</style>

<body>
    <?php include "header.php" ?>
    <section>
        <div class="container" style="width: 400px; margin-top:150px; margin-bottom: 150px;">
            <?php 
            if(!empty($errors))
            foreach ($errors as $error) {
                echo "<p style='color:red;'>$error</p>";
            }
            ?>
            <div class="card p-4 shadow-sm">
                <h2 class="text-center mb-4">Đăng Ký</h2>
                <form action="" method="post">
                    <div class="form-group">
                        <labl for="">Tên :</labl>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Email:</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Số Điện thoại:</label>
                        <input type="text" name="sdt" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Đăng Ký</button>
                </form>



            </div>

        </div>
    </section>
    <?php include "fooder.php" ?>
</body>

</html>