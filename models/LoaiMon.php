<?php
require_once __DIR__ . '/../models/BaseModel.php';


class loaimon extends BaseModel {
    public function getAll() {
        $result = $this->db->query("SELECT * FROM loaimon");
        return $result->fetch_all(MYSQLI_ASSOC);
    }
   
    public function add($tenloai) {
        // Chuẩn bị câu truy vấn SQL để chèn dữ liệu mới vào bảng NhanVien
        $stmt = $this->db->prepare("INSERT INTO loaimon (TenLoai) VALUES (?)");
    
        // Gán các giá trị cho các tham số trong câu truy vấn
            $stmt->bind_param("s",$tenloai );
    
        // Thực hiện truy vấn
        return $stmt->execute();
    }
    public function delete($maloai) {
        $stmt = $this->db->prepare("DELETE FROM loaimon WHERE MaLoai = ?");
        $stmt->bind_param("i", $maloai);
        return $stmt->execute();
    }
    public function update($maloai,$tenloai) {
        $stmt = $this->db->prepare("UPDATE loaimon SET TenLoai=? WHERE MaLoai = ?");
        $stmt->bind_param( "si",$tenloai,$maloai);
        return $stmt->execute();
    }


    

   
}
?>
