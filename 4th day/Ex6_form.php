<form method="POST" action="">
    Nhap tien:
    <input type="number" name="txtATM">

    <input type="submit" name="btn1">
</form>

<?php

if (isset($_POST["txtATM"])) {
    # Mô phỏng ATM
    $money = $_POST['txtATM'];

    $n50 = 0;
    for ($V = 0; $V < $money; $V += 50) {
        $n50++;
    }
    if ($V > $money) {
        $V -= 50;
        $n50 -= 1;
    }

    $n20 = 0;
    for ($T = $V; $T < $money; $T += 20) {
        $n20++;
    }
    if ($T > $money) {
        $T -= 20;
        $n20 -= 1;
    }

    $n10 = 0;
    for ($t = $T; $t < $money; $t += 10) {
        $n10++;
    }
    if ($t > $money) {
        $t -= 10;
        $n10 -= 1;
    }

    $n5 = 0;
    for ($v = $t; $v < $money; $v += 5) {
        $n5++;
    }
    if ($v > $money) {
        $v -= 5;
        $n5 -= 1;
        if ($n5 == -1){
            $n5 == 0;
        };
    }

    echo "Ban se nhan: ";
    echo "$n50 lan 50k, $n20 lan 20k, $n10 lan 10k and $n5 lan 5k. ";
}
;