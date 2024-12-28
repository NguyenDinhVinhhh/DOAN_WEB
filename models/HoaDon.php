<?php
require_once __DIR__ . '/../models/BaseModel.php';
class HoaDon   extends BaseModel
{ 
    public function addHĐ_MA ($mahoadon,$thanhtien,$dongia,$MaMA, $Soluong)
    {
      
       $stmt = $this->db->prepare("INSERT INTO hoadon_monan (MaHD,MaMA,ThanhTien,DonGia,Soluong) VALUES (?, ?, ?, ?, ?) ");
       $stmt->bind_param("iiiii", $mahoadon, $MaMA, $thanhtien, $dongia, $Soluong);
       return $stmt->execute();
    }
    public function addHĐ($Mattdb)
    {
       $manv =0;
       $stmt = $this->db->prepare("INSERT INTO hoadon (MaNV,MaTTDB) VALUES (?, ?) ");
       $stmt->bind_param("ii",$manv,$Mattdb);
       return $stmt->execute();
    }
    public function GetFirstHoaDon ($Mattdb )
{
    $stmt = $this->db->prepare("SELECT MaHD  FROM hoadon  WHERE MaTTDB = ? LIMIT 1");
    $stmt->bind_param("i", $Mattdb);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    return $row ? $row['MaHD'] : null;
}
}