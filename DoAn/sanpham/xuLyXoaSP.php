<?php 
    ob_start();
    //$conn= new mysqli('localhost','root','','linhkiendientu');
    include 'connect.php';
    $id= $_GET['id'];

    $sql= "DELETE FROM sanpham where MaSP = '$id' "  ;
    $result=$conn->query($sql);
    
    if($result){
        header('Location: http://ngohongphuc.ml/DoAn/sanpham/selectSP.php');
    }
    else
        echo "Lỗi";
?>