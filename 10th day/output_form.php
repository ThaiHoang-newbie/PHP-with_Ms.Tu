<!doctype html>
<html lang="en">

<head>
    <title>Output</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <style>
        table {
            border: 1px black solid;
            text-align: center;
        }

        td {
            border: 1px black solid;
            text-align: center;
            width: 100px;
        }

        .imgs {
            width: 130px;
            height: 130px;
            object-fit: cover;
            justify-content: center;
        }

        h1 {
            text-align: center;
            margin-bottom: 0px;
            color: lightblue;
        }

        th {
            border: 1px black solid;
        }

        table {
            margin: auto;
            margin-top: 0px;
            margin-bottom: 100px;
        }
    </style>

</head>

<body>
    <h1>Product's table</h1>
    <?php
    # Connect MySQL
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'fruit';
    $conn = mysqli_connect($host, $user, $pass, $dbname);
    if (!$conn) {
        die('Could not connect: ');
    }


    echo "<br>";
    $sql = "SELECT * FROM `product`";
    $result = mysqli_query($conn, $sql);
    ?>


    <table>
        <tr>
            <th>Số thứ tự</th>
            <th>Tên sản phẩm</th>
            <th>Đơn vị tính</th>
            <th>Giá tiền</th>
            <th>Số lượng</th>
            <th>Hình ảnh</th>
        </tr>
        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<br>";
        ?>
                <tr>
                    <td><?php echo $row["pro_id"] ?></td>
                    <td><?php echo $row["pro_name"] ?></td>
                    <td><?php echo $row["unit"] ?></td>
                    <td><?php echo $row["price"] ?></td>
                    <td><?php echo $row["pro_quantity"] ?></td>
                    <td><img class='imgs' src="<?php echo $row['fruit_image'] ?>"/></td>
                    <td>
                        <a href="input_form.php">Thêm </a>
                        |<a>Xóa</a>
                        |<a>Sửa</a>
                    </td>
                </tr>
        <?php
            }
        } else {
            echo "0 results";
        }

        mysqli_close($conn);
        ?>
    </table>







    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>