<?php
require_once __DIR__ . '/../models/BaseModel.php';
class Ban extends BaseModel
{
    function getallBan(){
        $result=$this->db->query("SELECT * FROM ban");
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    function add($vitri,$mota,$soluong)
    {
        $stmt=$this->db->prepare("INSERT INTO ban (ViTri,MoTa,Soluong) VALUES(?,?,?)");
        $stmt->bind_param("ssi",$vitri,$mota,$soluong);
        $stmt->execute();
    }
    function delete($MaBan)
    {
        $stmt=$this->db->prepare("DELETE FROM ban WHERE MaBan=?");
        $stmt->bind_param("i",$MaBan);
        $stmt->execute();
    }
    function edit($maban,$vitri,$mota,$soluong):void
    {
        $stmt=$this->db->prepare("UPDATE ban SET ViTri=?,MoTa=?,Soluong=? WHERE MaBan=?");
        $stmt->bind_param("ssii",$vitri,$mota,$soluong,$maban);
        $stmt->execute();
    }
}
?>
