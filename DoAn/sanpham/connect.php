<?php 
    $db= array(
        'server'=>'localhost',
        'username'=>'id15138916_ngohongphuc123',
        'password'=>'3S9/?\gAW8f29E|A',
        'dbname'=>'id15138916_linhkiendientu'
    );
    $conn= mysqli_connect($db['server'],$db['username'],$db['password'],$db['dbname']);

    if(!$conn){
        die('kết nối không thành công'. mysqli_connect_error($conn));
    }
?>

