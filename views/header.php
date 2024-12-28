
<?php $base_url = "/NHAHANG/";
    // Kiểm tra xem session đã được khởi tạo hay chưa
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if(empty($_SESSION["username"]))
     $username=null;
    else
    $username=$_SESSION["username"];

?>
<div class="container">
    <div class="head">
        <p>Giao hàng miễn phí cho đơn hàng trên 500k</p>
        <div class="head_icon">
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <a href="#"><i class="fa-brands fa-youtube"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-tiktok"></i></a>
        </div>
    </div>
    <div class="clear:both;"></div>
    <header>
        <a href="#">
            <img class="logo" src="img/logo.png" alt="">
        </a>
        <div class="menu">
            <div class="item">
                <a href="<?php echo $base_url?>index.php?action=index">Trang chủ</a>
            </div>
            <div class="item">
                <a href="<?php echo $base_url?>index.php?action=MonAn">Thực đơn</a>
            </div>
            <div class="item">
                <a href="<?php echo $base_url?>index.php?action=GioiThieu">Giới Thiệu</a>
            </div>
            <div class="item">
                <a href="<?php echo $base_url?>index.php?action=lienhe">Liên hệ</a>
            </div>
            
        </div>
        <div class="actions">
            <div class="item">
                <i class="fa-solid fa-globe" id="language-icon"></i>
                <ul id="language-list">
                    <li>Tiếng việt </li>
                    <li>Tiếng anh</li>
                </ul>
            </div>
            
            <div class="item">
            <!-- <?php 
                    if(!empty($username))
                    {
                        $n = 0;
                        $username = $_SESSION['username'] ?? null;
                        $Makh = $this->TimMaKH($username);
                        $giohangmodel = new GioHang();
                        $GHlist = $giohangmodel->GetallGioHang($Makh);
                        foreach($GHlist as $gh)
                        {
                            $n++;
                        }
                        echo "$n";
                    }
              ?> -->
                <a href="<?php echo $base_url?>index.php?action=GioHang&&temp=giohang"><i class="fa-solid fa-cart-shopping"style="font-size: 20px;  "></i></a>
            </div>
            
            <?php if(!empty($username)){?>
                <i class="item item_link"> Hi <?php echo $username;?></i> 
                <a class="item item_link" href="<?php echo $base_url?>index.php?action=Logout"> Đăng Xuất</a>
            <?php } else
            {?>
                <a class="item item_link" href="<?php echo $base_url?>index.php?action=signup">Đăng kí </a> 
                <a class="item item_link" href="<?php echo $base_url?>index.php?action=login">Đăng nhập</a>
                <?php }?>
        </div>
    </header>