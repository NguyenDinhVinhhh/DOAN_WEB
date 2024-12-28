<?php $base_url = "/NHAHANG/"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhà Hàng NOMO</title>
    <link rel="stylesheet" href="/NHAHANG/CSS/lienhe_style.css">
</head>
<body>
    <header>
        <h1>Nhà Hàng NOMO</h1>
        <nav>
            <a href="<?php echo $base_url?>index.php?action=index">Trang Chủ</a>
            <a href="<?php echo $base_url?>index.php?action=MonAn">Thực Đơn</a>
            <a href="<?php echo $base_url?>index.php?action=GioiThieu">Giới Thiệu</a>
            <a href="<?php echo $base_url?>index.php?action=lienhe">Liên Hệ</a>
        </nav>
    </header>
    <main>
        <section class="contact-info">
            <h2>Liên Hệ Chúng Tôi</h2>
            <p>Địa chỉ: Đường Cao Lỗ, Quận 4, TP.HCM</p>
            <p>Số điện thoại: 0123 456 789</p>
            <p>Email: info@nhahangnomo.com</p>
        </section>
        <section class="contact-form">
            <h2>Gửi Tin Nhắn</h2>
            <form action="submit_contact" method="POST">
                <div class="form-group">
                    <label for="name">Tên</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Số Điện Thoại</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="message">Tin Nhắn</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit">Gửi</button>
            </form>
        </section>
        <section class="map">
            <h2>Địa Điểm Của Chúng Tôi</h2>
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.123456789!2d106.123456789!3d10.123456789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x123456789abcdef%3A0xabcdef1234567890!2sYour+Restaurant+Address!5e0!3m2!1sen!2s!4v1611234567890!5m2!1sen!2s" 
                width="1300" 
                height="450" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy">
            </iframe>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Nhà Hàng NOMO. Mọi quyền được bảo lưu.</p>
    </footer>
</body>
</html>
