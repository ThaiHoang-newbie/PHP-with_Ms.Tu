<head>
    <style>
        label {
            display: inline-block;
            width: 100px;
            text-align: left;
            margin-right: 10px;
        }

        input {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <h1>Thêm mới sản phẩm</h1>
    <form method="post" action="" enctype="multipart/form-data">
        <label for="MaSanPham">Mã sản phẩm:</label>
        <input type="text" id="MaSanPham" name="MaSanPham" required><br>
        <label for="TenSanPham">Tên sản phẩm:</label>
        <input type="text" id="TenSanPham" name="TenSanPham" required><br>
        <label for="DonViTinh">Đơn vị tính:</label>
        <input type="text" id="DonViTinh" name="DonViTinh" required><br>
        <label for="GiaTien">Giá tiền:</label>
        <input type="number" id="GiaTien" name="GiaTien" required><br>
        <label for="SoLuong">Số lượng:</label>
        <input type="number" id="SoLuong" name="SoLuong" required><br>
        <label for="HinhAnh">Hình ảnh:</label>
        <input type="file" id="HinhAnh" name="HinhAnh" accept="image/*" required><br>
        <input type="submit" value="Thêm mới" name="btn">
    </form>
</body>
<?php
if (isset($_POST['btn'])) {
    $MaSanPham = $_POST["MaSanPham"];
    $TenSanPham = $_POST["TenSanPham"];
    $DonViTinh = $_POST["DonViTinh"];
    $GiaTien = $_POST["GiaTien"];
    $SoLuong = $_POST["SoLuong"];
    $fileHA = $_FILES["HinhAnh"];
    $ten_file = $fileHA['name'];
    if ($ten_file == '')
        echo
            "Vui lòng chọn file hình ảnh cho sản phẩm!";
    else {
        $ketnoi = mysqli_connect('localhost', 'root', '', 'quanlysanpham') or die('Connect fail!');
        $sql = "insert into `sanpham`(MaSanPham,TenSanPham,DonViTinh,GiaTien,SoLuong,HinhAnh) 
        values('$MaSanPham','$TenSanPham','$DonViTinh','$GiaTien','$SoLuong','image/$ten_file')";
        if (mysqli_query($ketnoi, $sql)) {
            move_uploaded_file($fileHA['tmp_name'], 'image/' . $ten_file);
            echo 'Thêm mới thành công!';
        }else{
            echo "them that bai";
        }
    }

}

?>