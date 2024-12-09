<?php
require_once __DIR__ . '/../models/LoaiMon.php';

class loaimonController {
    public function index(): void {
        $loaimonModel = new loaimon();
        $loaimonList = $loaimonModel->getAll();
        require_once __DIR__ .'../../views/loaiMon/LoaiMon_view.php';
    }

    public function addLoaiMon() {
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            var_dump($_POST); 
            $tenloai = $_POST['TenLoai'] ?? '';
            echo $tenloai;
            $loaimonModel = new loaimon();
            $loaimonModel->add($tenloai);
            echo "Thêm loai món thành công!"; 
            // Chuyển hướng về trang chính sau khi thêm thành công
            header("Location: ../LoaiMon/index.php");
            exit();
        }
    
        // Nếu không phải phương thức POST, hiển thị form để thêm mới
        require_once '../LoaiMon/add_LoaiMon.php';
    }
    
    
    public function edit($MaLoai): void {
       
        $NVModel = new loaimon();
        $loaimonList = $NVModel->getAll();
        $loaimonmodel = new loaimon();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
              
           
            $TenLoai= $_POST['TenLoai'] ;
    
            $loaimonmodel->update($MaLoai, $TenLoai);

            header("Location: ../LoaiMon/index.php");
            exit();
        }

        $loaimon = $loaimonmodel->getAll()[$MaLoai] ?? null;
        require_once __DIR__ . '/../views/LoaiMon/edit_LoaiMon.php';

    }
   
    

    public function deleteLoaiMon($MaLoai) {
        $loaimonModel = new loaimon();
        $loaimonModel->delete($MaLoai);
        header("Location: ../LoaiMon/index.php");
        exit();
    }

}
?>

