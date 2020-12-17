<?php
    ob_start();
    session_start();
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log_In_Methods</title>
    <!-- Import Boostrap css, js, font awesome here -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://ngohongphuc.ml/DoAn/account/StyleTKKhachHang.css" rel="stylesheet">
    <style>
        a{
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="profile-card">
        <div class="image-container">
            <img src="http://ngohongphuc.ml/DoAn/Demo/images/blank-profile-picture-973460_640.png" style="width:100%">
        <?php

    if($_SESSION['user']){
        echo "<h1>Hello ". $_SESSION['user'] ."</h1>";
        echo "<a href='http://ngohongphuc.ml/DoAn/danhmuc/main/danhmuc.php'><h2>Back to Services</h2></a>";
        echo "<a href='http://ngohongphuc.ml/DoAn/giohang/gioHang.php'><h2>Back to Cart</h2></a>";
        echo " <br>";
        echo "<a><h2>Settings</h2></a>";
        echo "<button><a href='suaThongTin.php'><h2>Edit Infomation</h2></a></button><br>";
        echo "<button><a href='password.php'><h2>Change Password</h2></a></button><br>";
        echo "<button><a href='dangXuat.php'><h2>Log Out</h2></a></button><br>";
        echo "<button><a href='xulyXoaTK.php'><h2>Delete Account</h2></a></button>";
    }
    else
        {
            header('location: http://ngohongphuc.ml/DoAn/Demo/dangNhap.php');
        }
    ?>

    </div>
</body>
</html>