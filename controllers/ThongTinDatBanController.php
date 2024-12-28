<?php require_once __DIR__ . '/../models/ThongTinDatBan.php';
require_once __DIR__ . '/../models/GioHang.php';
require_once __DIR__ . '/../models/nhanvien.php';
require_once __DIR__ . '/../models/ban.php';
require_once __DIR__ . '/../models/MonAn.php';
class ThongTinDatBanController
{
    function index()
    {
        session_start();
        $admin = $_SESSION['Hoten'];

        if ($admin != 'admin' && !empty($admin)) {

            $TTBmodel = new ThongTinDatBan();
            $TTBlist = $TTBmodel->GetAllThongTinDatBan();
            require_once __DIR__ . '../../views/ThongTinBan/ThongTinBan_views.php';
        } else {
            header("Location: /NHAHANG/views/admin.php");
        }
    }


    function Chitiethoadon($Makh, $MaTTDB)
    {
        $giohangmodel = new GioHang();
        $HDlist = $giohangmodel->GetallHoaDonTTDB($Makh, $MaTTDB);
        require_once __DIR__ . '../../views/ThongTinBan/ChiTietHoaDon.php';
    }
    function addbanan($khunggio, $NgayDat, $MaTTDB)
    {
        $loaimonModel = new ThongTinDatBan();
        if ($loaimonModel->Kiemtra($MaTTDB)) {
            echo "
            <script>
                alert('Bàn đã được chọn trước đó!');
                window.location.href = '../ThongTinBan/index.php';
            </script>
        ";
            return;
        }

        $loaimonList = $loaimonModel->getAll($khunggio, $NgayDat);
        $banList = $loaimonModel->getAvailableTables($khunggio, $NgayDat);
        $err = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $ban = $_POST['ban'] ?? [];
            if (!empty($ban)) {
                $giohangmodel = new ThongTinDatBan();
                foreach ($ban as $maban) {
                    $giohangmodel->Chonban($MaTTDB, $maban);
                }
                header("Location: ../ThongTinBan/index.php");
            } else {
                $err = "Bạn chưa chọn bàn!!";
            }
        }

        require_once __DIR__ . '../../views/ThongTinBan/Chonban.php';
    }


    public function TimMaNV($hoten)
    {
        $KHmodel = new nhanvien();
        $KHlist = $KHmodel->getAll();
        foreach ($KHlist as $kh) {
            if ($kh['HotenNV'] == $hoten) {
                $ma = $kh['MaNV'];
                break;
            }
        }
        return $ma;
    }
    function DuyetTTDB($MaTTDB)
    {
        session_start();
        $nhanvien = $_SESSION['Hoten'];
        $manv = $this->TimMaNV($nhanvien);
        $TTBmodel = new ThongTinDatBan();
        $mattdb = $TTBmodel->Kiemtra($MaTTDB);
        if ($mattdb !=null) {
            $TTBmodel->duyetTTDB($manv, $MaTTDB);
            header("Location: ../ThongTinBan/index.php");
        } else {
            echo "
        <script>
            alert('Vui Lòng Chọn Bàn!');
            window.location.href = '../ThongTinBan/index.php';
        </script>
         ";
            return;
        }
    }
    function deletethongtindatban($Makh, $MaTTDB)
    {
        $giohangmodel = new ThongTinDatBan();
        $giohangmodel->deletethongtindatban($Makh, $MaTTDB);
        header("Location: ../ThongTinBan/index.php");
    }
    function xemban($MaTTDB)
    {
        $banmodel = new ThongTinDatBan();
        $loaimonList = $banmodel->xemban($MaTTDB);
        require_once __DIR__ . '../../views/ThongTinBan/checkban.php';
    }
    function inhoadon($MaTTDB)
    {

        $banmodel = new ThongTinDatBan();
        $loaimonList = $banmodel->inhoadon($MaTTDB);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $mama = $_POST['MaMA'] ?? null;
            $soluong = $_POST['soluong'] ?? null;
            $mahd = $_POST['MaHD'] ?? null;
            $monanmodel = new monan();
            $monanlist = $monanmodel->getall();
            $temp = 0;
            foreach ($monanlist as $mon) {
                if ($mon['MaMA'] == $mama) {
                    $temp = 1;
                    $dongia = $mon['DonGia'];
                    $mamon = $mon['MaMA'];
                    $thanhtien = $soluong * $dongia;
                    $banmodel->addhoadon($mahd, $mamon, $thanhtien, $dongia, $soluong);
                    break;
                }
            }
            if ($temp != 1) {
                $err = "Mã Món Ăn Không Hợp Lệ!!";
            } else {
                require_once __DIR__ . '../../views/ThongTinBan/InHoaDon.php';
            }
        }

        require_once __DIR__ . '../../views/ThongTinBan/InHoaDon.php';
    }
}
