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
    
     
    require 'connect.php';
    

    $sql = " SELECT * FROM loaisanpham ";
   // $result= mysqli_query($conn, $sql);
   $result= $conn-> query($sql);
    if(!$result)
    {
        die('lỗi'. mysqli_error($conn));
    }
    
?>
<div class="container">
    <table border="1">
    <h3><a href="insert.php" style="text-decoration-none; color: red ">Thêm danh mục sản phẩm mới</a></h3>
    <tr>
        <td>ID</td>
        <td> Tên loại sản phẩm </td>
        <td style="background-color: blue; color: white" > Thêm </td>
        <td style="background-color: blue; color: white" > Sửa </td>
        <td style="background-color: blue; color: white" > Xóa </td>
    </tr>
    <?php
    while($row =mysqli_fetch_assoc($result) ){?>
        
        <tr>
        <td> <?php echo $row['maloai']; ?></td>
        <td> <?php echo $row['tenloai']; ?> </td>   
        <?php 
            echo "<td> <a href='http://ngohongphuc.ml/DoAn/sanpham/themSP.php?id=".$row['maloai']."'> Thêm </a> </td>";

            echo "<td> <a href='http://ngohongphuc.ml/DoAn/loaisanpham/edit.php?id=".$row['maloai']."'> Sửa </a> </td>";
        
            echo "<td> <a href='http://ngohongphuc.ml/DoAn/loaisanpham/xulyXoa.php?id=".$row['maloai']."'> Xóa </a> </td>";
        ?>      
    </tr> 

    <?php } 
    mysqli_free_result($result);?>
    </table>
 </div>  
</body>
</html>

