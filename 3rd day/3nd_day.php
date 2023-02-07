<?php
# Date: Mon 2/6/2023
# Content: Loops

$counter = 1;

for ($i = 0; $i <= 5; $i++) {
    echo "Hi" . "<br>";
}

# Tính n! 
echo "Tính n!" . "<br>";
$n = rand(1, 5);
$val = 1;
for ($i = 1; $i <= $n + 1; $i++) {
    $val = $val * $i;
}
;
echo "$n! = $val" . "<br>";





# Cho số a,b. In các số chia hết cho 3 trong khoảng (a,b)


$list = array();
for ($a = 0; $a <= $b = rand(0, 100); $a++) {
    if ($a % 3 == 0) {
        array_push($list, $a);
    } else {
        continue;
    }
    ;
}
;
echo "Số chia hết cho 3 trong khoảng từ  đến $b là: ";
foreach ($list as $value) {
    echo "$value" . " ";
}
;

# Kiểm tra có phải là số nguyên tố không
echo "<br>Kiểm tra số nguyên tố" . "<br>";
function check($n)
{
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
        ;
    }
    return true;
}
$n = rand(2, 100);
if (check($n)) {
    echo "$n là số nguyên tố";
} else {
    echo "$n không phải là số nguyên tố";
}
;

# Cho số n, tính tổng 1+4+7+9+...+k (k<=n)
echo "<br>Cho số n, tính tổng 1+4+7+9+...+k (k<=n)" . "<br>";

$a = rand(1,100);
$b = 1;
$c = "1";
for ($i=4; $i<=$a;$i = $i + 3){
    $b = $b + $i;
    $c = $c." + ".(string) $i;
}
echo $c . " = " . $b;


# Cho số n = 1021, tính 1 + 0 + 2 + 1
echo "<br>Cho số n = 1021, tính 1 + 0 + 2 + 1" . "<br>";

$bt5 = 1234;
$bt5_clone = $bt5;
$tong = 0;

while ($bt5 > 0){
    $tong = $tong + ($bt5 % 10);
    $bt5 = $bt5 / 10;
}
echo "<br>Cho số n = $bt5_clone, tổng là: $tong" . "<br>";


echo "<br><BUTTON TYPE=\'button\" onClick=\"history.go(0)\" >Refresh</BUTTON>";