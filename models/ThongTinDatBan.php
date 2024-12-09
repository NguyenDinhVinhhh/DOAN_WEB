<?php
require_once __DIR__ . '/../models/BaseModel.php';
class ThongTinDatBan extends BaseModel {
    function GetAllThongTinDatBan(){
        $result=$this->db->query("
        SELECT
         NhanVien.MaNV,NhanVien.HotenNV,KhachHang.MaKhachHang,KhachHang.Hoten,KhachHang.Sdt,KhachHang.Email,thongtindatban.NgayDat,thongtindatban.SoLuongBan,thongtindatban.MaTTDB
         FROM 
         thongtindatban 
          INNER JOIN  KhachHang ON thongtindatban.MaKhachHang = KhachHang.MaKhachHang
           INNER JOIN  NhanVien ON thongtindatban.MaNV = NhanVien.MaNV"
        );

        return $result->fetch_all(MYSQLI_ASSOC);
    }
 public function DuyetTTDB($soluong, $Manv,$Mattdb)
{
   $stmt = $this->db->prepare("UPDATE thongtindatban SET SoLuongBan=?,MaNV=? WHERE   MaTTDB=?");
   $stmt->bind_param("iii",$soluong, $Manv,$Mattdb);
   return $stmt->execute();
}
public function GetFirstTTDB($Makh)
{
    $stmt = $this->db->prepare("SELECT MaTTDB FROM thongtindatban WHERE MaKhachHang = ? LIMIT 1");
    $stmt->bind_param("i", $Makh);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    return $row ? $row['MaTTDB'] : null;
}

}