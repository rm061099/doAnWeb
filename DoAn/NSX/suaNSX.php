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
        $id=$_GET['id'];

        //$conn= new mysqli('localhost','root','','linhkiendientu');
        include 'connect.php';
        $sql = " SELECT * FROM nhasanxuat WHERE mansx = '$id' ";
        // $result= mysqli_query($conn, $sql);
        $result= $conn-> query($sql)->fetch_assoc();        
    ?>
    <div class="container">
        <?php 
       echo "<form action='http://ngohongphuc.ml/DoAn/NSX/xuLySuaNSX.php?id=".$id."' method='post'>" ?>
        Tên nhà sản xuất:
        <?php
        echo "<input type='text' name='tenNSX' class='form-control' placeholder='".$result['tennsx']."'>";
        ?>
        <br>
        <input type="submit" value="Sửa" class="btn btn-block btn-danger">
        </form>
    </div>
</body>
</html>