<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="style.css">
    <title>Sửa thông tin</title>
</head>
<body>
    <?php 
    session_start();
    $iduser = $_SESSION['user'];
    //$conn = new mysqli('localhost','root','','linhkiendientu'); 
    include 'connect.php';
    $sql = "SELECT * FROM khachhang WHERE taikhoan = '$iduser' ";
    $result = $conn->query($sql)->fetch_assoc();
    

    ?>
    <div class="container">
       <form action="http://ngohongphuc.ml/DoAn/account/xulySuaThongTin.php" method="post">
           <div id="tieude">
                    <?php
                        
                        if($_SESSION['user']){
                            
                            echo "<b>Chào bạn ". $_SESSION['user'] ."<b>";
                        }
                    ?>
            </div>
            <div class="form-group">
                <label for="inputEmail">Email:</label>
                <input type="email" name="email" id="inputEmail" class="form-control"  value="<?php echo $result['email']; ?>" required="">
            </div>
            <div class="form-group">
                <label for="inputDiachi">Địa chỉ:</label>
                <input type="text" name="diachi" id="inputDiachi" class="form-control"  value="<?php echo $result['diachi']; ?>" required="">
            </div>
            <div style="margin-bottom: 2rem">
                <div class="form-row">
                    <div class="col-md-7">
                        <label for="inputHoten">Họ tên:</label>
                        <input type="text" name="hoten" id="inputHoten" class="form-control" value="<?php echo $result['tenkh'] ?>">
                    </div>
                    <div class="col-md-5">
                    <div>
                        <label for="inputSDT">SĐT:</label>
                        <input type="text" name="sdt" id="inputSDT" class="form-control" value="<?php echo $result['dienthoai'] ?>" required="">
                    </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Sửa</button>
                <button type="reset" class="btn btn-primary">Xóa</button>
            </div>
       </form>
        
    </div>
</body>
</html>