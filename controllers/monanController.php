<?php
require_once __DIR__ . '/../models/MonAn.php';
require_once __DIR__ . '/../models/LoaiMon.php';
class MonanController
{
    function index()
    {
        $loaimonmodel = new loaimon();
        $loaimonlist = $loaimonmodel->getAll();
        $monanmodel = new monan();
        $monanlist = $monanmodel->getall();
        require_once __DIR__ . '../../views/MonAn/MonAn_view.php';
    }
    function add()
    {
        $loaimonmodel = new loaimon();
        $loaimonlist = $loaimonmodel->getAll();
        $errors = [];
        $fileName = '';

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $relativePath = __DIR__ . "/../imgadmin"; // Nếu thư mục `imgadmin` nằm ở ngoài thư mục `controller`.
            $targetDir = realpath($relativePath);
            if ($targetDir === false) {
                $errors[] = "Thư mục imgadmin không tồn tại.";
            }

            $targetDir = rtrim($targetDir, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR;
            if (isset($_FILES['hinhanh']) && $_FILES['hinhanh']['error'] == 0) {
                $fileName = basename($_FILES['hinhanh']['name']);
                $targetFilePath = $targetDir . $fileName;
                $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
                $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];


                if (!in_array($fileType, $allowedTypes)) {
                    $errors[] = "Chỉ chấp nhận các tệp ảnh JPG, JPEG, PNG và GIF.";
                } elseif (file_exists($targetFilePath)) {
                    $errors[] = "Tệp ảnh đã tồn tại. Vui lòng chọn ảnh khác.";
                    $fileName = '';
                } elseif (!move_uploaded_file($_FILES['hinhanh']['tmp_name'], $targetFilePath)) {
                    $errors[] = "Có lỗi xảy ra khi tải lên tệp ảnh.";
                    $fileName = '';
                }
            } elseif ($_FILES['hinhanh']['error'] != 4) {
                $errors[] = "Vui lòng chọn một tệp ảnh.";
            }



            // Lấy dữ liệu từ form
            $tenmon = $_POST['TenMonAn'] ?? '';
            $dongia = $_POST['DonGia'] ?? '';
            $tenloai = $_POST['TenLoai'] ?? '';
            $hinhanh = $fileName; // Lấy tên file nếu đã upload thành công
            $maloai = '';
            foreach ($loaimonlist as $loaimon) {
                if ($loaimon['TenLoai'] == $tenloai) {
                    $maloai = $loaimon['MaLoai'];
                    break;
                }
            }
            // Kiểm tra nếu ảnh hợp lệ
            if (empty($errors)) {
                $monanmodel = new monan();
                $monanmodel->add($fileName, $dongia, $maloai, $tenmon);
                // Sau khi thêm thành công, chuyển hướng về trang danh sách món ăn
                header("Location: ../MonAn/index.php?a=$hinhanh");
                exit();
            }
        }


        // Gọi file giao diện thêm món ăn
        require_once '../MonAn/add_MonAn.php';
    }

    function delete($MaMA)
    {
        $monanmodel = new monan();
        $monanmodel->delete($MaMA);
        header("Location: ../MonAn/index.php");
        exit();
    }
    function edit($MaMA)
    {
        $monanmodel = new monan();
        $monanlist = $monanmodel->getall();
        $loaimonmodel = new loaimon();
        $loaimonlist = $loaimonmodel->getAll();
        $fileName = '';

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          
            $targetDir = realpath(__DIR__ . "/../imgadmin");
            if ($targetDir === false) {
                $targetDir = __DIR__ . "/../imgadmin";
                if (!is_dir($targetDir)) {
                    mkdir($targetDir, 0777, true);
                }
            }
            $targetDir = rtrim($targetDir, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR;

            if (isset($_FILES['hinhanh']) && $_FILES['hinhanh']['error'] == 0) {
                $fileName = basename($_FILES['hinhanh']['name']);
                $targetFilePath = $targetDir . $fileName;

                $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
                $allowedTypes = array('jpg', 'jpeg', 'png', 'gif');

                if (in_array($fileType, $allowedTypes)) {
                    if (move_uploaded_file($_FILES['hinhanh']['tmp_name'], $targetFilePath)) {
                        echo "Tệp ảnh đã được tải lên thành công!";
                    } else {
                        echo "Có lỗi xảy ra khi tải ảnh.";
                        $fileName = ''; 
                    }
                } else {
                    echo "Chỉ chấp nhận các tệp ảnh JPG, JPEG, PNG và GIF.";
                    $fileName = ''; 
                }
            } else {
            
                foreach ($monanlist as $monan) {
                    if ($monan['MaMA'] == $MaMA) {
                        $fileName = $monan['HinhAnh'];
                        break;
                    }
                }
            }

            // Lấy dữ liệu từ form
            $tenmon = $_POST['TenMonAn'] ?? '';
            $dongia = $_POST['DonGia'] ?? '';
            $tenloai = $_POST['TenLoai'] ?? '';
            $hinhanh = $fileName; 
            $maloai = '';

          
            foreach ($loaimonlist as $loaimon) {
                if ($loaimon['TenLoai'] == $tenloai) {
                    $maloai = $loaimon['MaLoai'];
                    break;
                }
            }

          
            if ($hinhanh !== '' && $maloai != '') {
                $monanmodel->edit($MaMA, $hinhanh, $dongia, $maloai, $tenmon);

              
                header("Location: ../MonAn/index.php");
                exit();
            } else {
                echo "Không thể sửa món ăn do lỗi dữ liệu.";
            }
        }

       
        require_once '../MonAn/edit_MonAn.php';
    }
}
