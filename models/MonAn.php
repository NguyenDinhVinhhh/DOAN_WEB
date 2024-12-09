<?php
require_once __DIR__ . '/../models/BaseModel.php';
class monan extends BaseModel
{
   public function getall()
   {
      $result=$this->db->query("SELECT * FROM monan");
    return $result->fetch_all(MYSQLI_ASSOC);

   } 
   public function add($hinhanh,$dongia,$maloai,$tenmon)
   {
      $stmt=$this->db->prepare("INSERT INTO monan (HinhAnh,DonGia,TenMonAn,MaLoai) VALUES (?,?,?,?)");
      $stmt->bind_param("ssss",$hinhanh,$dongia,$tenmon,$maloai);
      return $stmt->execute();

   }
   public function delete($MaMA)
   {
      $stmt=$this->db->prepare("DELETE FROM monan WHERE MaMA=? ");
      $stmt->bind_param("i",$MaMA);
      $stmt->execute();
   }
   public function edit($MaMA,$hinhanh,$dongia,$maloai,$tenmon)
   {
      $stmt=$this->db->prepare("UPDATE monan SET HinhAnh=?,DonGia=?,MaLoai=?,TenMonAn=? WHERE MaMA=? ");
      $stmt->bind_param("ssssi",$hinhanh,$dongia,$maloai,$tenmon,$MaMA);
      $stmt->execute();

   }

}
?>