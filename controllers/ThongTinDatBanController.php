<?php require_once __DIR__ . '/../models/ThongTinDatBan.php';
 require_once __DIR__ . '/../models/GioHang.php';
 require_once __DIR__ . '/../models/nhanvien.php';

class ThongTinDatBanController
{
    function index()
    {
        $TTBmodel=new ThongTinDatBan();
        $TTBlist=$TTBmodel->GetAllThongTinDatBan();
        require_once __DIR__ .'../../views/ThongTinBan/ThongTinBan_views.php';

    }
    
    function Chitiethoadon($Makh,$MaTTDB)
    {   
        $giohangmodel = new GioHang();
        $HDlist=$giohangmodel->GetallHoaDonTTDB($Makh,$MaTTDB);
        require_once __DIR__ .'../../views/ThongTinBan/ChiTietHoaDon.php';

        
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
    function DuyetTTDB($soluong,$MaTTDB)
    {   session_start();
        $nhanvien=$_SESSION['Hoten'];
        $manv=$this->TimMaNV($nhanvien);
        $TTBmodel=new ThongTinDatBan();
        $TTBmodel->duyetTTDB($soluong,$manv,$MaTTDB);
        header("Location: ../ThongTinBan/index.php");

    }


}