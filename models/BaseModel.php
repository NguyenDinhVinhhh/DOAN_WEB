<?php
require_once __DIR__ . '/../mysql.php';

class BaseModel {
    protected $db;

    public function __construct() {
        // Khởi tạo kết nối cơ sở dữ liệu từ lớp Database
        $database = new Database();
        $this->db = $database->db;
    }
}
?>
