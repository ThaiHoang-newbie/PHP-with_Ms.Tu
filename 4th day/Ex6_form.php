<form method="POST" action="">
    Nhập số lượng tiền:
    <input type="number" name="txtATM">

    <input type="submit" name="btn1" value="Get">
</form>

<?php

if (isset($_POST["txtATM"]) || isset($_POST["btn1"])) {
    # Mô phỏng ATM
    $money = $_POST['txtATM']; 

    $n50 = 0; 
    for ($sl_50 = 0; $sl_50< $money; $sl_50 += 50) {
        $n50++;
    }
    if ($sl_50 > $money) {
        $sl_50 -= 50;
        $n50 -= 1;
    }
    
    $n20 = 0;
    for ($sl_20 = $sl_50; $sl_20 < $money; $sl_20 += 20) {
        $n20++;
    }
    if ($sl_20 > $money) {
        $sl_20 -= 20;
        $n20 -= 1;
    }

    $n10 = 0;
    for ($sl_10 = $sl_20; $sl_10 < $money; $sl_10 += 10) {
        $n10++;
    }
    if ($sl_10 > $money) {
        $sl_10 -= 10;
        $n10 -= 1;
    }

    $n5 = 0;
    for ($sl_5 = $sl_10; $sl_5 < $money; $sl_5 += 5) {
        $n5++;
    }
    if ($sl_5 > $money) {
        $sl_5 -= 5;
        $n5 -= 1;
        if ($n5 == -1){
            $n5 == 0;
        };
    }


    echo "Với số tiền là $money vnđ <br>";
    echo "Bạn sẽ nhận: <br>";
    echo "$n50 tờ 50k 
    <br> $n20 tờ 20k 
    <br> $n10 tờ 10k 
    <br> $n5 tờ 5k. ";
}
;