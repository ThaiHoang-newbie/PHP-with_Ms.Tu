<form method="POST" action="">
    Nhap a:
    <input type="number" name="a">

    <input type="submit" name="btn1">
</form>

<?php

if (isset($_POST["a"]) || isset($_POST["b"])) {
    # Cho số a,b. In các số chia hết cho 3 trong khoảng (a,b)
    $a = $_POST["a"];

    $a_clone = $a;
    $tong = 0;

    while ($a > 0) {
        $tong = $tong + ($a % 10);
        $a = $a / 10;
    }
    echo "<br>Cho số a = $a_clone, tổng là: $tong" . "<br>";


}
;