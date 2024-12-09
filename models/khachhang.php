<?php
require_once __DIR__ . '/../models/BaseModel.php';


class khachhang extends BaseModel
{
    public function getAll()
    {
        $result = $this->db->query("SELECT * FROM khachhang");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function add($email, $hoten, $sdt)
    {
        // Chuẩn bị câu truy vấn SQL để chèn dữ liệu mới vào bảng NhanVien
        $stmt = $this->db->prepare("INSERT INTO khachhang (Hoten,Email,Sdt) VALUES (?, ?, ?)");

        // Gán các giá trị cho các tham số trong câu truy vấn
        $stmt->bind_param("sss", $hoten, $email, $sdt);

        // Thực hiện truy vấn
        return $stmt->execute();
    }
    public function delete($Makh)
    {
        $stmt = $this->db->prepare("DELETE FROM khachhang WHERE MaKhachHang = ?");
        $stmt->bind_param("i", $Makh);
        return $stmt->execute();
    }
    public function update($makhachhang, $email, $hoten, $sdt)
    {
        $stmt = $this->db->prepare("UPDATE khachhang SET Hoten= ? ,Email=?, Sdt=?  WHERE MaKhachHang = ?");
        $stmt->bind_param("sssi",  $hoten,$email, $sdt, $makhachhang);
        return $stmt->execute();
    }
}
