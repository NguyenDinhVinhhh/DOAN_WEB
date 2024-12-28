<?php
require_once __DIR__ . '/../models/BaseModel.php';
class ThongTinDatBan extends BaseModel
{
    function GetAllThongTinDatBan()
    {
        $result = $this->db->query(
            "
        SELECT
         NhanVien.MaNV,
         NhanVien.HotenNV,
         KhachHang.MaKhachHang
         ,KhachHang.Hoten,KhachHang.Sdt,
         KhachHang.Email,thongtindatban.NgayDat,
         thongtindatban.MaTTDB,
         thongtindatban.ghichu,
         khunggio.TenKhungGio,
         khunggio.MaKhunggio
         FROM 
         thongtindatban 
          INNER JOIN  KhachHang ON thongtindatban.MaKhachHang = KhachHang.MaKhachHang
           INNER JOIN  NhanVien ON thongtindatban.MaNV = NhanVien.MaNV
           INNER JOIN  khunggio ON thongtindatban.MaKhunggio = khunggio.MaKhunggio"



        );

        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function DuyetTTDB($Manv, $Mattdb)
    {
        $stmt = $this->db->prepare("UPDATE thongtindatban SET MaNV=? WHERE   MaTTDB=?");
        $stmt->bind_param("ii", $Manv, $Mattdb);
        return $stmt->execute();
    }
    public function GetLargestTTDB($Makh)
    {
        $stmt = $this->db->prepare("SELECT MaTTDB FROM thongtindatban WHERE MaKhachHang = ? ORDER BY MaTTDB DESC LIMIT 1");
        $stmt->bind_param("i", $Makh);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        return $row ? $row['MaTTDB'] : null;
    }

    public function deletethongtindatban($makh, $mattdb)
    {
        $stmt = $this->db->prepare("DELETE FROM thongtindatban_khachhang_ban_monan WHERE MaKhachHang =? AND MaTTDB=? ");
        $stmt->bind_param("ii", $makh, $mattdb);
        $stmt->execute();
        $stmt = $this->db->prepare("DELETE FROM hoadon WHERE  MaTTDB=? ");
        $stmt->bind_param("i", $mattdb);
        $stmt->execute();
        $stmt = $this->db->prepare("DELETE FROM thongtindatban WHERE MaKhachHang=? AND MaTTDB=? ");
        $stmt->bind_param("ii", $makh, $mattdb);
        $stmt->execute();
    }

    public function Chonban($ttdb, $maban)
    {
        $stmt = $this->db->prepare("INSERT INTO thongtindatban_ban (MaTTDB,MaBan) VALUES (?,?)");
        $stmt->bind_param("ii", $ttdb, $maban);
        return $stmt->execute();
    }
    public function getAll($khunggio, $NgayDat)
    {
        $query = "SELECT DISTINCT thongtindatban_ban.MaBan, ban.TenBan 
              FROM thongtindatban_ban 
              JOIN thongtindatban ON thongtindatban_ban.MaTTDB = thongtindatban.MaTTDB
              JOIN ban ON thongtindatban_ban.MaBan = ban.MaBan 
              WHERE thongtindatban.MaKhunggio = ? 
                AND DATE(thongtindatban.NgayDat) = ?";

        $stmt = $this->db->prepare($query);
        $stmt->bind_param('is', $khunggio, $NgayDat);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function getAvailableTables($khunggio, $NgayDat)
    {
        $query = "SELECT DISTINCT ban.MaBan, ban.TenBan
                  FROM ban
                  WHERE ban.MaBan NOT IN (
                      SELECT thongtindatban_ban.MaBan
                      FROM thongtindatban_ban
                      JOIN thongtindatban 
                      ON thongtindatban_ban.MaTTDB = thongtindatban.MaTTDB
                      WHERE thongtindatban.MaKhunggio = ?
                      AND DATE(thongtindatban.NgayDat) = ?
                  )";
    
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('is', $khunggio, $NgayDat);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    
    
    public function xemban($mattdb)
    {
    $query = "SELECT DISTINCT thongtindatban_ban.MaBan, ban.TenBan 
    FROM thongtindatban_ban 
    JOIN ban ON thongtindatban_ban.MaBan = ban.MaBan 
    WHERE thongtindatban_ban.MaTTDB  = ? ";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i', $mattdb);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function inhoadon($mattdb)
    {
    $query = "SELECT hoadon.MaHD,hoadon_monan.MaMA,hoadon_monan.ThanhTien,hoadon_monan.DonGia,hoadon_monan.Soluong,monan.TenMonAn,monan.HinhAnh
    FROM hoadon 
    JOIN hoadon_monan ON hoadon.MaHD = hoadon_monan.MaHD 
     JOIN monan  ON hoadon_monan.MaMA  = monan.MaMA 
    WHERE hoadon.MaTTDB  = ? ";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i', $mattdb);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function addhoadon($mahoadon, $mamon, $thanhtien, $dongia, $soluong)
{

    $checkStmt = $this->db->prepare("SELECT Soluong FROM hoadon_monan WHERE MaHD = ? AND MaMA = ?");
    $checkStmt->bind_param("ii", $mahoadon, $mamon);
    $checkStmt->execute();
    $result = $checkStmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $newSoluong = $row['Soluong'] + $soluong;
        $updateStmt = $this->db->prepare("UPDATE hoadon_monan SET Soluong = ?, ThanhTien = ? WHERE MaHD = ? AND MaMA = ?");
        $newThanhtien = $newSoluong * $dongia; 
        $updateStmt->bind_param("iiii", $newSoluong, $newThanhtien, $mahoadon, $mamon);
        return $updateStmt->execute();
    } else {
        $insertStmt = $this->db->prepare("INSERT INTO hoadon_monan (MaHD, MaMA, ThanhTien, DonGia, Soluong) VALUES (?, ?, ?, ?, ?)");
        $insertStmt->bind_param("iiiii", $mahoadon, $mamon, $thanhtien, $dongia, $soluong);
        return $insertStmt->execute();
    }
}
public function Kiemtra ($MaTTDB)
{
    $query = "SELECT COUNT(*) as count 
              FROM thongtindatban_ban 
              WHERE MaTTDB = ?";
              
    $stmt = $this->db->prepare($query);
    $stmt->bind_param('i', $MaTTDB);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    
    // Trả về true nếu tìm thấy, ngược lại trả về false
    return $row['count'] > 0;
}


}
