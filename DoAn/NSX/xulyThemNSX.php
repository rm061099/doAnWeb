<?php 
    ob_start();
     //$conn= new mysqli('localhost','root','','linhkiendientu');
     include 'connect.php';
     $maNSX = $_POST['maNSX'];
     $tenNSX = $_POST['tenNSX'];
     $addNSX="INSERT INTO nhasanxuat (mansx,tennsx) VALUES ('$maNSX','$tenNSX')";
     $result = $conn->query($addNSX);
     if($result)
        {
            header('Location: http://ngohongphuc.ml/DoAn/NSX/selectNSX.php');
        }
    else
        echo "lỗi";
?>