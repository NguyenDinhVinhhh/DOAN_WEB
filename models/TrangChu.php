<?php
require_once __DIR__ . '/../models/BaseModel.php';
class TrangChu extends BaseModel
{
    public function getall()
   {
      $result=$this->db->query("SELECT * FROM monan");
    return $result->fetch_all(MYSQLI_ASSOC);

   } 
   
   public function MenuLoaiMon($maloai)
   {
   $stmt=$this->db->prepare("SELECT * FROM monan WHERE monan.MaLoai=?");
   $stmt->bind_param("i", $maloai);
   $stmt->execute();
   $result = $stmt->get_result();
   return $result->fetch_all(MYSQLI_ASSOC);
   }
   public function KhachHang()
   {
      $result=$this->db->query("SELECT * FROM khachhang");
    return $result->fetch_all(MYSQLI_ASSOC);

   } 
   public function addKhadhang($email,$hoten,$sdt)
   {
      $stmt=$this->db->prepare("INSERT INTO khachhang (Email,Hoten,Sdt) VALUES (?,?,?)");
      $stmt->bind_param("sss",$email,$hoten,$sdt);
    return $stmt->execute();

   } 
   public function updateBan($MaKhunggio,$ghichu, $Makh,$time)
   {
      $maNV=1;
      $stmt=$this->db->prepare("INSERT INTO ThongTinDatBan (MaNV,MaKhunggio,ghichu,MaKhachHang,NgayDat) VALUES (?,?,?,?,?)");
     $stmt->bind_param("iisis", $maNV,$MaKhunggio,$ghichu,$Makh,$time);
     return $stmt->execute();
   }
   function addThongTinDatBan($maKhachHang,$time) {
      $maNV=1;
       $stmt=$this->db->prepare("INSERT INTO ThongTinDatBan (MaNV, MaKhachHang,NgayDat) VALUES (?,?,?)");
      $stmt->bind_param("iis", $maNV,$maKhachHang,$time);
      return $stmt->execute();
     
  }
  function soluonggiohang($Makh)
{
    $stmt = $this->db->prepare("SELECT SUM(Soluong) AS total FROM thongtindatban_khachhang_ban_monan WHERE MaKhachHang = ? and MaTTDB=0");
    $stmt->bind_param("i", $Makh);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    return $row['total'] ? $row['total'] : 0;
}

    
}