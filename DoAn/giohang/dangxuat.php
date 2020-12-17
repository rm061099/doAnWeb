<?php
    ob_start();
    session_start();
    session_unset();
    header('location: giohang.php');
?>