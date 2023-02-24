<?php
session_start();
?>

<form method="POST" action="">
    Tên sp:
    <input type="text" name="txtsp">

    Giá tiền:
    <input type="number" name="txtgt">

    Mô tả:
    <input type="text" name="txtmt">

    Hình ảnh:
    <input type="file" name="txtha" accept=".jpg">

    <input type="submit" name="btn" value="Lưu">
</form>


<?php
if (isset($_POST["txtsp"]) || isset($_POST["txtgt"]) || isset($_POST["txtmt"]) || isset($_POST["txtha"])) {


    $sanpham = $_POST["txtsp"];
    $giatien = $_POST["txtgt"];
    $mota = $_POST["txtmt"];
    $hinhanh = $_POST["txtha"];

}


if (isset($_POST["btn"])) {
    $n = 0;
    if (isset($_SESSION["ar"])) {
        $n = count($_SESSION["ar"]);
    }

    $_SESSION["ar"][$n]["sp"] = $_POST["txtsp"];
    $_SESSION["ar"][$n]["gt"] = $_POST["txtgt"];
    $_SESSION["ar"][$n]["mt"] = $_POST["txtmt"];
    $_SESSION["ar"][$n]["ha"] = $_POST["txtha"];

    header("Location: output_form.php");
}
?>