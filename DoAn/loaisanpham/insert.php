<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">


    <title>Thêm loại sản phẩm</title>
</head>
<body>
    <div class="container">
        <form action="xulyThem.php" method="post">

        Mã loai sản phẩm:
        <input type="text" name="maloaiSP" class="form-control">
        Tên loại sản phẩm:
        <input type="text" name="tenloaiSP" class="form-control"><br>
        <input type="submit" value="Thêm" class="btn btn-block btn-danger">
        </form>
    </div>
</body>
</html>