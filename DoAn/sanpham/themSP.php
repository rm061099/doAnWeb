<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>

<?php 
    if(!$_GET['id']){
        header('location: http://ngohongphuc.ml/DoAn/loaisanpham/select.php');
    }
    $id = $_GET['id'];
    //$conn= new mysqli('localhost','root','','linhkiendientu');
    include 'connect.php';
    $sql = " SELECT * FROM sanpham ";
    // $result= mysqli_query($conn, $sql);
    $result= $conn-> query($sql)->fetch_assoc(); 
    $sql1 = "SELECT * FROM nhasanxuat";
    $nsx = $conn->query($sql1); $dataNSX=mysqli_fetch_all($nsx,MYSQLI_ASSOC);
    
?>
<div class="container">
        <?php
        echo "<form action='http://ngohongphuc.ml/DoAn/sanpham/xuLyThemSP.php/?id=".$id."' method='post' enctype= 'multipart/form-data'>" ?>
       <label for="maloaisp"> Mã loại sản phẩm: </label> 
        <input type='text' name='maloaiSP' id='maloaisp' class='form-control' value='<?php echo $id ?>' readonly >

        <label for="masp">Mã sản phẩm:</label>
        <input type='text' name='maSP' id='masp' class='form-control'>

        <label for="tensp">Tên sản phẩm:</label>
        <input type='text' name='tenSP' id='tensp' class='form-control'><br>

        <label for="mota">Mô tả:</label>
        <textarea name="mota" id="mota" cols="155" rows="3"></textarea><br><br>

        <label for="nsx">Nhà sản xuất:</label>
        <select name="nsx" id="nsx" style="width: 100px" >
            <option value="">--chọn--</option>
            <?php
                foreach($dataNSX as $key => $value){?>
                    <option value='<?php echo $value['tennsx'] ?>'>
				    <?php echo $value['tennsx'] ?>
			  </option>
                <?php } ?>
        </select><br><br>

        <label for="hinh">Hình ảnh:</label>
        <input type="file" name="hinh" id="hinh"><br><br>  
        
        <label for="baohanh">Thời gian bảo hành:</label> 
        <input type='text' name='baohanh' id='baohanh' class='form-control'>

        <label for="gia">Giá:</label>
        <input type='text' name='gia' id='gia' class='form-control'><br>
        
        <input type="submit" value="Thêm" class="btn btn-primary" >
        <input type="reset" value="Xóa" class="btn btn-primary">
        </form>
    </div>
    
</body>
</html>