<?php
require_once __DIR__ . '/../models/BaseModel.php';
class khunggio extends BaseModel
{
    function getallBan(){
        $result=$this->db->query("SELECT * FROM khunggio");
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    function add($tenkhunggio)
    {
        $stmt=$this->db->prepare("INSERT INTO khunggio (TenKhungGio) VALUES(?)");
        $stmt->bind_param("s",$tenkhunggio);
        $stmt->execute();
    }
    function delete($Makhunggio)
    {
        $stmt=$this->db->prepare("DELETE FROM khunggio WHERE MaKhunggio=?");
        $stmt->bind_param("i",$Makhunggio);
        $stmt->execute();
    }
    function edit($Makhunggio,$TenKhungGio):void
    {
        $stmt=$this->db->prepare("UPDATE khunggio SET TenKhungGio=? WHERE MaKhunggio=?");
        $stmt->bind_param("si",$TenKhungGio,$Makhunggio);
        $stmt->execute();
    }
}
?>
