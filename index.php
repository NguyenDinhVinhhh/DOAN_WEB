<?php
require_once 'controllers/TrangChuController.php';
$controllers = new TrangChuController();
$action = $_GET['action'] ?? 'index';
$maMA = $_GET['MaMA'] ?? null;
$MaBan = $_GET['MaBan'] ?? null;
$Soluong = $_GET['soluong'] ?? null;
$temp = $_GET['temp'] ?? null;
$maloai = $_GET['MaLoai'] ?? null;
switch ($action) {
    case 'login': {
            $controllers->login();
            break;
        }
    case 'MonAn': {
            $controllers->MonAn();
            break;
        }
    case 'signup': {
            $controllers->signup();
            break;
        }
    case 'GioiThieu': {
            $controllers->GioiThieu();
            break;
        }
    case 'TrangChu': {
            $controllers->TrangChu();
            break;
        }
    case 'Logout': {
            $controllers->LogOut();
            break;
        }
    case 'MuaHang': {
            $controllers->AddGioHang($Soluong, $maMA);
            break;
        }
    case 'GioHang': {
            $controllers->GioHang($temp);
            break;
        }
    case 'deleteGioHang': {
            $controllers->removeGioHang($maMA);
            break;
        }
    case 'BanAn': {
            $controllers->getallBanAn();
            break;
        }
    case 'MenuLoaiMon': {
            $controllers->MenuLoaiMon($maloai);
            break;
        }

    case 'index': {
            $controllers->index();
            break;
        }
    case 'lienhe': {

        $controllers->lienhe();
        break;
    }
    case 'ThemGioHang': {

        $controllers->ThemGioHang($maMA);
        break;
    }
    case 'HoaDon': {

        $controllers->HienThiHoaDon();
        break;
    }
    case 'end': {

        $controllers->End();
        break;
    }
    
}
