<?php  
    ob_start();
    //$conn= new mysqli('localhost','root','','linhkiendientu');
    session_start();
    include 'connect.php';
    $id = $_SESSION['user'];

    $sql= "DELETE FROM khachhang where taikhoan = '$id' "  ;
    $result=$conn->query($sql);
    session_unset();

    if($result){
        header('location: http://ngohongphuc.ml/DoAn/Demo/dangNhap.php');
    }
    
?>