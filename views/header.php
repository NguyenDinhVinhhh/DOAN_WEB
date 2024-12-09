<?php $base_url = "/DO_An_WEB%20(2)/";?>
<header>
        <div class="header">
            <div class="logo">
                <ul>
                    <li><img src="<?php echo $base_url?>img/logo.png" alt="" style="width: 100px; height: 70px; margin-left: 100px; margin-top: 20px;"></li>
                    <li><b style="font-weight: bold;font-style: italic; margin-left: 20px;">Taste Haven</b></li>

                </ul>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="<?php echo $base_url?>index.php?action=TrangChu">TRANG CHỦ</a></li>
                    <li><a href="<?php echo $base_url?>index.php?action=GioiThieu">GIỚI THIỆU</a></li>
                    <li><a href="<?php echo $base_url?>index.php?action=TrangChu"onclick="return confirm('Vui lòng bạn hãy đăng nhập!!');">MÓN ĂN</a> </li>
                    <li><a href="<?php echo $base_url?>index.php?action=TrangChu"onclick="return confirm('Vui lòng bạn hãy đăng nhập!!');"><i class="fa-solid fa-cart-shopping"style="font-size: 20px;  "></i></a></li>
                </ul>
            </div>
            <div class="Nav">
                <ul>
                    <li> <a href="<?php echo $base_url?>index.php?action=login" class="btn btn-primary" style="color: #000;background: #f9f9f9;">Log In</a> </li>
                    <li> <a href="<?php echo $base_url?>index.php?action=signup"  class="btn btn-primary" style="color: #000;background: #f9f9f9;">Sign Up</a> </li>
                </ul>
            </div>
        </div>
    </header>