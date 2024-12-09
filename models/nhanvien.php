<?php
require_once __DIR__ . '/../models/BaseModel.php';


class nhanvien extends BaseModel {
    public function getAll() {
        $result = $this->db->query("SELECT * FROM nhanvien");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function add($diachi, $hoten, $matkhau,  $ngaysinh,$sdt) {
        // Chuẩn bị câu truy vấn SQL để chèn dữ liệu mới vào bảng NhanVien
        $stmt = $this->db->prepare("INSERT INTO NhanVien (Diachi, HotenNV, Matkhau, Ngaysinh, Sdt) VALUES (?, ?, ?, ?, ?)");
    
        // Gán các giá trị cho các tham số trong câu truy vấn
            $stmt->bind_param("sssss",$diachi, $hoten, $matkhau,  $ngaysinh,$sdt );
    
        // Thực hiện truy vấn
        return $stmt->execute();
    }
    public function delete($MaNV) {
        $stmt = $this->db->prepare("DELETE FROM NhanVien WHERE MaNV = ?");
        $stmt->bind_param("i", $MaNV);
        return $stmt->execute();
    }
    public function update($MaNV,$diachi, $hoten, $matkhau,  $ngaysinh,$sdt) {
        $stmt = $this->db->prepare("UPDATE NhanVien SET Diachi = ? ,HotenNV=?, Matkhau=? ,Ngaysinh=?, Sdt=? WHERE MaNV = ?");
        $stmt->bind_param( "sssssi",$diachi, $hoten, $matkhau,  $ngaysinh,$sdt,$MaNV );
        return $stmt->execute();
    }


    

    // Thêm các phương thức khác (sửa, xóa) nếu cần
}
?>
