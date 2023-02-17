<?php # Cho 1 mảng gồm n phần tử là các số nguyên, 
# hãy in ra màn hình số lớn nhất và nhỏ nhất của mảng. Cho biết vị trí của các phần tử đó


$arr = [12, 12, 12, 0, 10, 12];
$len_arr = count($arr);

$arr_max = [];
$arr_min = [];

$min = $arr[0];
$max = $min;

for ($i = 1; $i < $len_arr; $i++) {
    if ($max < $arr[$i]) {
        $max = $arr[$i];
        array_push($arr_max, $i);
    }
    if ($min > $arr[$i]) {
        $min = $arr[$i];
        array_push($arr_min, $i);
    }
}
print_r($arr_max);
;

