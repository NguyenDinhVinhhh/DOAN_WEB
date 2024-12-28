<?php if($username == null)
    {?>
        <div class="main">
            <a class="sty" href="/NHAHANG/index.php?action=login">Bạn hãy đăng nhập</a>
            <a class="sty" href="/NHAHANG/index.php?action=index">Trở lại</a>
        </div><?php
    }
    else
    {
        ?><?php include "header.php" ?>
        <hr>
        <div class="cart-container">
            <table class="cart-table">
                <?php 
                foreach ($GHlist as $gh): ?>
                    <tr class="cart-row">
                        <td class="cart-item-image">
                            <img src="./imgadmin/<?php echo htmlspecialchars($gh['HinhAnh']); ?>" alt="Hình ảnh món ăn">
                        </td>
                        <td class="cart-item-name"><?php echo htmlspecialchars($gh['TenMonAn']); ?></td>
                        <td class="cart-item-quantity"><?php echo htmlspecialchars($gh['SoLuong']); ?></td>
                        <td><a href="<?php echo $base_url ?>index.php?action=deleteGioHang&MaMA=<?php echo htmlspecialchars($gh['MaMA']) ?>">Xóa</a></td>
                    </tr>

                <?php endforeach;
                if (empty($GHlist))
                    echo '<h2 style="margin: 0; text-align: center; display: flex; justify-content: center; align-items: center; height: 100vh;">Bạn chưa có sản phẩm nào</h2>';
                else { ?>
                    <tr>
                        <td><a href="<?php echo $base_url ?>index.php?action=BanAn">Chọn Vị Trí Bàn</a></td>
                    </tr>
                <?php } ?>

            </table>

        </div>
    <?php } ?>