<!doctype html>
<html lang="en">

<head>
    <title>Input</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="./form.css">
</head>

<body>
    <div class="center">
        <h1>Input the product</h1>
        <form>
            <div class="inputbox">
                <input type="text" required="required" name="stt">
                <span>Mã sản phẩm</span>
            </div>
            <div class="inputbox">
                <input type="text" required="required" name="tsp">
                <span>Tên sản phẩm</span>
            </div>
            <div class="inputbox">
                <input type="text" required="required" name="dvt">
                <span>Đơn vị tính</span>
            </div>
            <div class="inputbox">
                <input type="text" required="required" name="gt">
                <span>Giá tiền</span>
            </div>
            <div class="inputbox">
                <input type="text" required="required" name="sl">
                <span>Số lượng</span>
            </div>
            <div class="inputbox">
                <input type="file" required="required" name="ha" accept=".jpg">
                <span>Hình ảnh</span>
            </div>


            <div class="inputbox">
                <input type="submit" value="submit">
            </div>
        </form>
    </div>

    <?php
    if (isset($_POST['btn'])) {
        $stt = $_POST['stt'];
        $tsp = $_POST['tsp'];
        $dvt = $_POST['dvt'];
        $gt = $_POST['gt'];
        $sl = $_POST['sl'];
        $ha = $_FILES['ha'];
        $ha_name = $_FILES['ha'];

        # Connect MySQL
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $dbname = 'fruit';

        $conn = mysqli_connect($host, $user, $pass, $dbname);
        if (!$conn) {
            die('Could not connect: ');
        }


        $ketnoi = mysqli_connect('localhost', 'root', '', 'quanlysanpham') or die('Connect fail!');
        $sql = "insert into `sanpham` values('$stt','$tsp','$dvt','$gt','$sl','$ha');";
        if (mysqli_query($ketnoi, $sql)) {
            move_uploaded_file($ha_name['tmp_name'], 'image/'.$ha_name);
            echo 'Succesful!';
        } else {
            echo "Failed";
        }
        header("Location: output_form.php");
    };


    ?>





    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>