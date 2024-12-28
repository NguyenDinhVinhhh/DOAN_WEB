<?php
require_once __DIR__ . '/../models/ban.php';

class banController {
    public function index(): void {
        $loaimonModel = new ban();
        $loaimonList = $loaimonModel->getAll();
        require_once __DIR__ .'../../views/ban/ban_view.php';
    }

    public function addLoaiMon() {
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            var_dump($_POST); 
            $tenloai = $_POST['TenBan'] ?? '';
            $loaimonModel = new ban();
            $loaimonModel->add($tenloai);
   
            header("Location: ../ban/index.php");
            exit();
        }
    
        // Nếu không phải phương thức POST, hiển thị form để thêm mới
        require_once '../ban/add_ban.php';
    }
    
    
    public function edit($MaLoai): void {
       
        $NVModel = new ban();
        $loaimonList = $NVModel->getAll();
        $loaimonmodel = new ban();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
              
           
            $TenLoai= $_POST['TenBan'] ;
    
            $loaimonmodel->update($MaLoai, $TenLoai);

            header("Location: ../ban/index.php");
            exit();
        }

        $loaimon = $loaimonmodel->getAll()[$MaLoai] ?? null;
        require_once __DIR__ . '/../views/ban/edit_ban.php';

    }
   
    

    public function deleteLoaiMon($MaLoai) {
        $loaimonModel = new ban();
        $loaimonModel->delete($MaLoai);
        header("Location: ../ban/index.php");
        exit();
    }

}
?>

