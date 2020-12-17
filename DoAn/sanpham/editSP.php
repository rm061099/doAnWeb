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
       // $conn= new mysqli('localhost','root','','linhkiendientu');
       include 'connect.php';
        $id=$_GET['id'];
        $sql = " SELECT * FROM sanpham WHERE masp = '$id' ";
        // $result= mysqli_query($conn, $sql);
        $result= $conn-> query($sql)->fetch_assoc();  
     
    ?>

    <div class="container">
        <?php 
       echo "<form action='http://ngohongphuc.ml/DoAn/sanpham/xulyEditSP.php/?id=".$id."' method='post' enctype= 'multipart/form-data'>" ?>

       <label for="tensp">Tên sản phẩm:</label>
       <?php echo "<input type='text' name='tenSP' class='form-control' id='tensp' value='".$result['tensp']."' >"?><br>
      
       <label for="mota">Mô tả:</label>
       <?php echo "<textarea name='mota' id='mota' cols='155' rows='3'> ".$result['mota']." </textarea>" ?><br><br>
       <label for="hinh">Hình ảnh:</label>
       <input type="file" name="hinh" id="hinh" > <br><br>
       <label for="baohanh">Bảo hành:</label>
        <?php echo "<input type='text' name='baohanh' id='baohanh' class='form-control' value='".$result['baohanh']."'>"; ?><br>
        <label for="gia">Giá:</label>
        <?php echo "<input type='text' name='gia' id='gia' class='form-control' value='".$result['gia']."'>"; ?><br>
        <input type="submit" value="Sửa" class="btn btn-block btn-danger">
        </form>
    </div>
</body>
</html>