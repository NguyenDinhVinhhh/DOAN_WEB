<?php
class Database
{
    public $db;

    public function __construct()
    {
        $this->db = new mysqli('localhost', 'root', 'root', 'nhahang');

        // Kiểm tra kết nối
        if ($this->db->connect_error) {
            die("Kết nối thất bại: " . $this->db->connect_error);
        }
    }

    // Thêm phương thức đóng kết nối
    public function close()
    {
        $this->db->close();
    }
}
