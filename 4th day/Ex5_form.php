<?php
$number =0
?>
.<form method="POST" action="">
    Nhap a:
    <input type="number" name="a" value="
                                                                                                                              
    ?>">    

    <input type="submit" name="btn1">
</form>

<?php

if (isset($_POST["a"]) || isset($_POST["b"])) {
    # Cho số a, tổng của các chữ số có trong a
    $a = $_POST["a"];

    $a_clone = $a;
    $tong = 0;

    while ($a > 1) {
        $tong = $tong + ($a % 10);
        $a = $a / 10;
    }
    ;
    echo "<br>Cho số a = $a_clone, tổng là: $tong" . "<br>";


}
;