<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
       <form action="xuLyDangKy.php" method="post">
           <div id="tieude">
               <b>Đăng ký thành viên</b>
            </div>
            <div class="form-group">
                <label for="inputID">Tài khoản:</label>
                <input type="text" name="id" id="inputID" class="form-control" required="">
            </div>
            <div class="form-group">
            <label for="inputPassword">Mật khẩu:</label>
            <input type="password" name="password" id="inputPassword" class="form-control">
            </div>
            <div class="form-group">
                <label for="inputAgainPassword">Nhập lại mật khẩu:</label>
                <input type="password" name="againPassword" id="inputAgainPassword" class="form-control">
            </div>
            <div class="form-group">
                <label for="inputEmail">Email:</label>
                <input type="email" name="email" id="inputEmail" class="form-control" required="">
            </div>
            <div class="form-group">
                <label for="inputDiachi">Địa chỉ:</label>
                <input type="text" name="diachi" id="inputDiachi" class="form-control" required="">
            </div>
            <div style="margin-bottom: 2rem">
                <div class="form-row">
                    <div class="col-md-7">
                        <label for="inputHoten">Họ tên:</label>
                        <input type="text" name="hoten" id="inputHoten" class="form-control">
                    </div>
                    <div class="col-md-5">
                        <label for="inputSDT">SĐT:</label>
                        <input type="text" name="sdt" id="inputSDT" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Đăng ký</button>
                <button type="reset" class="btn btn-primary">Xóa</button>
            </div>
       </form>
        
    </div>
</body>
</html>