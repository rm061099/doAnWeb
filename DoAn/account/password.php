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
    <div class="container">
       <form action="xulyPassword.php" method="post">
           <div id="tieude">
                    <?php
                        session_start();
                        if($_SESSION['user']){
                            
                            echo "<b>Chào bạn ". $_SESSION['user'] ."<b>";
                        }
                    ?>
            </div>
            <div class="form-group">
                <label for="inputPassword">Mật khẩu cũ:</label>
                <input type="password" name="oldPassword" id="inputPassword" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="inputPassword">Mật khẩu mới:</label>
                <input type="password" name="newPassword" id="inputPassword" class="form-control">
            </div>
            <div class="form-group">
                <label for="inputAgainPassword">Nhập lại mật khẩu:</label>
                <input type="password" name="againPassword" id="inputAgainPassword" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Xác nhận</button>
                <button type="reset" class="btn btn-primary">Xóa</button>
            </div>
       </form>
        
    </div>
</body>
</html>