<?php # Cho 1 mảng gồm n phần tử là các số nguyên, 
# hãy in ra màn hình số lớn nhất và nhỏ nhất của mảng. Cho biết vị trí của các phần tử đó

// Max
function getMax($array, $all)
{
    $n = count($array);
    $max = $array[0];
    for ($i = 1; $i < $n; $i++)
        if ($max < $array[$i]) {
            $max = $array[$i];
        }
    for ($i = 0; $i < $n; $i++)
        if ($max == $array[$i]) {
            $all = $all . ($i+1). " ";
        }
    return "Số lớn nhất là: " . $max . " ở vị trí " . $all.".";
}

// Min
function getMin($array, $all)
{
    $n = count($array);
    $min = $array[0];
    for ($i = 1; $i < $n; $i++)
        if ($min > $array[$i]) {
            $min = $array[$i];
        }
    for ($i = 0; $i < $n; $i++)
        if ($min == $array[$i]) {
            $all = $all . ($i+1). " ";
        }
    return "Số nhỏ nhất là: " . $min . " ở vị trí " . $all;
}

$all = "";
$array = array(1, 2, 3, 4, 5, 5, 5);

echo (getMax($array, $all));
echo ("\n");
echo ("\n");

echo (getMin($array, $all));
?>