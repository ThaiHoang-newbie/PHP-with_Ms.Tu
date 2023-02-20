<?php # Cho 1 mảng gồm n phần tử là các số nguyên, 
# hãy in ra màn hình số lớn nhất và nhỏ nhất của mảng. Cho biết vị trí của các phần tử đó

// Max
function getMax($array, $all)
{
    $n = count($array);
    $max = $array[0];
    for ($i = 1; $i < $n; $i++) {
        if (is_numeric($array[$i])) {
            if ($max < $array[$i]) {
                $max = $array[$i];
            }
        }
    }
    for ($i = 0; $i < $n; $i++) {
        if ($max == $array[$i]) {
            $all = $all . ($i + 1) . " ";
        }
    }
    return "Số lớn nhất là: " . $max . " ở vị trí " . $all . ".";
}

// Min
function getMin($array, $all)
{
    $n = count($array);
    $min = $array[0];
    for ($i = 1; $i < $n; $i++) {
        if (is_numeric($array[$i])) {
            if ($min > $array[$i]) {
                $min = $array[$i];
            }
        }
    }

    for ($i = 0; $i < $n; $i++) {
        if ($min == $array[$i]) {
            $all = $all . ($i + 1) . " ";
        }
    }
    return "Số nhỏ nhất là: " . $min . " ở vị trí " . $all;
}

$all = "";
$array = [13, 12, 25, 43, "asd", "dsaf", 1, 1, 3, 1, 2];


echo (getMax($array, $all));
echo ("\n");
echo ("\n");

echo (getMin($array, $all));
?>







<form method="POST" action="">
    Từ:
    <input type="text" name="txtTu">

    <input type="submit" name="btn">
    Kết quả:
</form>




<?php
if (isset($_POST["txtTu"])) {
    $tu = $_POST['txtTu'];
}

if (isset($_POST["btn"])) {

    $valid = false;
    $dict = [
        "dog" => "Chó",
        "pig" => "Heo",
        "cock" => "Gà trống"
    ];

    foreach ($dict as $a => $a_value) {
        if (strtolower($tu) == $a) {
            echo $a_value;
            $valid = true;
        }
        if ($valid = false) {
            echo "Từ điển đang update thêm!";
        }
    }
}
?>