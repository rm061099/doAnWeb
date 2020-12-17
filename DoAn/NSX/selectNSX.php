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
    
    include 'connect.php';
    $sql = " SELECT * FROM nhasanxuat ";  
    $result= $conn-> query($sql);
    if(!$result)
    {
        die('lỗi'. mysqli_error($conn));
    }   
?>

<div class="container">
    <table border="1">
    <h3><a href="http://ngohongphuc.ml/DoAn/NSX/themNSX.php" style="text-decoration-none; color: red ">Thêm nhà sản xuất mới</a></h3>
    <tr>
        <td>ID NSX</td>
        <td>Tên NSX</td>
        <td style="background-color: blue; color: white" > Sửa </td>
        <td style="background-color: blue; color: white" > Xóa </td>
    </tr>
    <?php
    while($row =mysqli_fetch_assoc($result)){?>
        <tr>
        <td> <?php echo $row['mansx']; ?></td>
        <td> <?php echo $row['tennsx']; ?> </td>
        
        <?php 
            echo "<td> <a href='http://ngohongphuc.ml/DoAn/NSX/suaNSX.php?id=".$row['mansx']."'> Sửa </a> </td>";    
            echo "<td> <a href='http://ngohongphuc.ml/DoAn/NSX/xuLyXoaNSX.php?id=".$row['mansx']."'> Xóa </a> </td>";
        ?>
       
    <?php }  
    mysqli_free_result($result);?>  
    </table>
 </div> 
</body>
</html>

