<form method="POST" action="">
    Nhap a:
    <input type="number" name="a">

    Nhap b:
    <input type="number" name="b">

    <input type="submit" name="btn1">
</form>

<?php

if (isset($_POST["a"]) || isset($_POST["b"])) {
    # Cho số a,b. In các số chia hết cho 3 trong khoảng (a,b)
    $a = $_POST["a"];
    $b = $_POST["b"];

    for ($i = $a; $i <= $b; $i++) {
        if ($i % 3 == 0) {
            echo $i;
        } else {
            continue;
        }
        ;
    }
    ;

}
;