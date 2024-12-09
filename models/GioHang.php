<?php
require_once __DIR__ . '/../models/BaseModel.php';
class GioHang extends BaseModel
{
   public function getAll()
   {
      $result = $this->db->query("SELECT * FROM thongtindatban_khachhang_ban_monan ");
      return $result->fetch_all(MYSQLI_ASSOC);
   }
   public function addGH($Makh, $MaMA, $Soluong)
   {
      $MaTTDB = 0;
      $MaBan = 100;
      $stmt = $this->db->prepare("INSERT INTO thongtindatban_khachhang_ban_monan (MaTTDB, MaKhachHang, MaBan, MaMA, Soluong) VALUES (?, ?, ?, ?, ?) ");
      $stmt->bind_param("iiiii", $MaTTDB, $Makh, $MaBan, $MaMA, $Soluong);
      return $stmt->execute();
   }
   public function update($soluong, $maMA, $Makh)
   {
      $stmt = $this->db->prepare("UPDATE thongtindatban_khachhang_ban_monan  SET Soluong=? WHERE MaMA = ? AND MaKhachHang=?");
      $stmt->bind_param("iii", $soluong, $maMA, $Makh);
      return $stmt->execute();
   }
   public function updateGioHang($Mattdt, $Makh)
   {
      $stmt = $this->db->prepare("UPDATE thongtindatban_khachhang_ban_monan  SET MaTTDB=? WHERE  MaKhachHang=? AND MaTTDB=0");
      $stmt->bind_param("ii",$Mattdt, $Makh);
      return $stmt->execute();
   }

   public function GetallGioHang($MaKhachHang)
   {
      $stmt = $this->db->prepare("  
            SELECT 
            MonAn.MaMA,
            MonAn.TenMonAn, 
            MonAn.HinhAnh,
            MonAn.DonGia,
            thongtindatban_khachhang_ban_monan.SoLuong
        FROM 
            thongtindatban_khachhang_ban_monan
        INNER JOIN 
            MonAn ON thongtindatban_khachhang_ban_monan.MaMA = MonAn.MaMA
        WHERE 
            thongtindatban_khachhang_ban_monan.MaKhachHang = ?
             AND thongtindatban_khachhang_ban_monan.MaTTDB = 0
    ");

      if (!$stmt) {
         die("Lỗi prepare statement: " . $this->db->error);
      }
      $stmt->bind_param("i", $MaKhachHang);
      $stmt->execute();
      $result = $stmt->get_result();
      return $result->fetch_all(MYSQLI_ASSOC);
   }
   public function GetallHoaDon($MaKhachHang)
   {
      $stmt = $this->db->prepare("  
            SELECT 
            Ban.ViTri,
            MonAn.MaMA,
            MonAn.TenMonAn, 
            MonAn.HinhAnh,
            MonAn.DonGia,
            thongtindatban_khachhang_ban_monan.SoLuong
        FROM 
            thongtindatban_khachhang_ban_monan
        INNER JOIN 
            MonAn ON thongtindatban_khachhang_ban_monan.MaMA = MonAn.MaMA
        INNER JOIN 
            Ban ON thongtindatban_khachhang_ban_monan.MaBan = Ban.MaBan
        WHERE 
            thongtindatban_khachhang_ban_monan.MaKhachHang = ? AND MATTDB=0
    ");

      if (!$stmt) {
         die("Lỗi prepare statement: " . $this->db->error);
      }
      $stmt->bind_param("i", $MaKhachHang);
      $stmt->execute();
      $result = $stmt->get_result();
      return $result->fetch_all(MYSQLI_ASSOC);
   }
   public function GetallHoaDonTTDB($MaKhachHang, $MaTTDB)
   {
       // Chuẩn bị truy vấn SQL
       $stmt = $this->db->prepare("  
           SELECT 
               Ban.ViTri,
               MonAn.MaMA,
               MonAn.TenMonAn, 
               MonAn.HinhAnh,
               MonAn.DonGia,
               thongtindatban_khachhang_ban_monan.SoLuong
           FROM 
               thongtindatban_khachhang_ban_monan
           INNER JOIN 
               MonAn ON thongtindatban_khachhang_ban_monan.MaMA = MonAn.MaMA
           INNER JOIN 
               Ban ON thongtindatban_khachhang_ban_monan.MaBan = Ban.MaBan
           WHERE 
               thongtindatban_khachhang_ban_monan.MaKhachHang = ? 
               AND thongtindatban_khachhang_ban_monan.MaTTDB = ?
       ");
   
       if (!$stmt) {
           die("Lỗi prepare statement: " . $this->db->error);
       }
       $stmt->bind_param("ii", $MaKhachHang, $MaTTDB);
       $stmt->execute();
       $result = $stmt->get_result();
       return $result->fetch_all(MYSQLI_ASSOC);
   }
   
   public function removeGioHang($MaKhachHang, $MaMA)
   {
      $stmt = $this->db->prepare("
           SELECT Soluong 
           FROM thongtindatban_khachhang_ban_monan 
           WHERE MaKhachHang = ? AND MaMA = ?
       ");

      if (!$stmt) {
         die("Lỗi chuẩn bị câu lệnh: " . $this->db->error);
      }

      $stmt->bind_param("ii", $MaKhachHang, $MaMA);
      $stmt->execute();
      $result = $stmt->get_result();

      if ($result->num_rows > 0) {
         $row = $result->fetch_assoc();
         $currentQuantity = $row['Soluong'];
         if ($currentQuantity > 1) {
            $updateStmt = $this->db->prepare("
                   UPDATE thongtindatban_khachhang_ban_monan 
                   SET Soluong = Soluong - 1 
                   WHERE MaKhachHang = ? AND MaMA = ?
               ");

            if (!$updateStmt) {
               die("Lỗi chuẩn bị câu lệnh UPDATE: " . $this->db->error);
            }

            $updateStmt->bind_param("ii", $MaKhachHang, $MaMA);
            $updateStmt->execute();
         } else {
            $deleteStmt = $this->db->prepare("
                   DELETE FROM thongtindatban_khachhang_ban_monan 
                   WHERE MaKhachHang = ? AND MaMA = ?
               ");

            if (!$deleteStmt) {
               die("Lỗi chuẩn bị câu lệnh DELETE: " . $this->db->error);
            }

            $deleteStmt->bind_param("ii", $MaKhachHang, $MaMA);
            $deleteStmt->execute();
         }
      } else {
         echo "Không tìm thấy món ăn với MaKhachHang và MaMA tương ứng.";
      }
   }
}
