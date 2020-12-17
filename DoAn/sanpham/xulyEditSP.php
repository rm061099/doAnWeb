<?php 
    ob_start();
    $tenSP = $_POST['tenSP'];
    $hinh = $_FILES['hinh']['error']==0 ? $_FILES['hinh']['name']:'';
    $mota = $_POST['mota'];
    $gia = $_POST['gia'];
    $baohanh = $_POST['baohanh'];
    $id=$_GET['id'];
   // $conn= new mysqli('localhost','root','','linhkiendientu');
    include 'connect.php';
    $sql= "UPDATE sanpham SET tensp = '$tenSP', mota = '$mota', baohanh = '$baohanh' , gia= '$gia' , hinh = '$hinh'  WHERE masp = '$id' ";

    $result = $conn->query($sql);

    if ($hinh !='')
        move_uploaded_file($_FILES['hinh']['tmp_name'], "img/$hinh");
     header('Location: http://ngohongphuc.ml/DoAn/sanpham/selectSP.php');
    $conn->close();
?>