<?php
    ob_start();
    session_start();
    session_unset();
    header('location: http://ngohongphuc.ml/DoAn/Demo/dangNhap.php');
?>