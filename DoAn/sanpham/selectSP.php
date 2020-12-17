<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

    <style>
        tr,td{
            padding: 20px;
        }
    </style>
    <title>Document</title>
</head>
<body>
<?php
    
    //$conn= new mysqli('localhost','root','','linhkiendientu');
    include 'connect.php';
    $sql = " SELECT * FROM sanpham ";  
    $result= $conn-> query($sql);
    if(!$result)
    {
        die('lỗi'. mysqli_error($conn));
    }   
?>

<div class="container">
    <table border="1">
    <h3><a href="http://ngohongphuc.ml/DoAn/sanpham/themSP2.php" style="text-decoration-none; color: red ">Thêm sản phẩm mới</a></h3>
    <tr>
        <td>ID LSP</td>
        <td>ID sản phẩm</td>
        <td> Tên sản phẩm </td>
        <td>NSX</td>
        <td>Thời gian bảo hành</td>
        <td>Giá</td>
        <td>hình ảnh</td>
        <td style="background-color: blue; color: white" > Sửa </td>
        <td style="background-color: blue; color: white"> Xóa </td>
    </tr>
    <?php
    while($row =mysqli_fetch_assoc($result)){?>
        <tr>
        <td> <?php echo $row['maloai']; ?></td>
        <td> <?php echo $row['masp']; ?> </td>
        <td> <?php echo $row['tensp'];?></td>
        <td> <?php echo $row['tennsx'];?></td>
        <td> <?php echo $row['baohanh'];?></td>
        <td> <?php echo $row['gia'];?></td>
        <td> <img src="img/<?php echo $row['hinh'];?>" style="max-width: 100px;"></td>
        <?php 
            echo "<td> <a href='http://ngohongphuc.ml/DoAn/sanpham/editSP.php?id=".$row['masp']."'> Sửa </a> </td>";    
            echo "<td> <a href='http://ngohongphuc.ml/DoAn/sanpham/xuLyXoaSP.php?id=".$row['masp']."'> Xóa </a> </td>";
        ?>
       
    <?php }  
    mysqli_free_result($result);?>  
    </table>
 </div>

 



    
</body>
</html>

