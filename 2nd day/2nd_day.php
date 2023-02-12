<?php
# Date: 3/2/2023

echo "<body style='background-color:lightblue;color:black;font-size:30px;'>";


$num = "abc";
$number = rand(1, 2);
echo ++$num;
print "<br>";




$user = "Hoang";
print '<br> 1: Hi $user <br>';
print "2: Hi $user <br>";
print "3: Hi " . "$user <br>";
print '4: Hi' . ' $user <br><br><br>';



print "VD $number: <br><br>";
print "Em bảo anh đi đi!<br><br>" .
    "Sao anh không ở lại<br><br>" .
    "Em bảo anh đứng đợi!<br><br>" .
    "..." . "<br><br>";




$a = rand(10, 100);
$b = rand(10, 100);
$c = rand(10, 100);
$d = rand(10, 100);



echo "Tổng: $a + $b =" . $a + $b . "<br>";
echo "Hiệu: $a - $b =" . $a - $b . "<br>";
echo "Tích: $a * $b =" . $a * $b . "<br>";
echo "Thương: $a / $b =" . $a / $b . "<br><br>";

# Kiểm tra chia hết cho 10
$bt1 = rand(8, 10);

if ($bt1 % 10 == 0) {
    echo "BT 1: " . "True";
} else {
    echo "BT 1: " . "False";
}
echo "<br><br>";

# Kiểm tra số lớn nhất trong mảng
echo "Array: ";
$bt2 = array();
array_push($bt2, $a, $b, $c, $d);

$largest = max($bt2);

foreach ($bt2 as $value) {
    echo "$value" . " ";
}
echo "<br>BT 2: Max = " . "$largest" . "<br><br>";



# Tính phương trình bậc 2
echo "BT3: ";

$a1 = rand(-3, 3);
$b2 = rand(-3, 3);
$c3 = rand(-3, 3);

echo "Pt: $a1 x<sup>2</sup> + $b2   x + $c3 = 0" . "<br>";

$dt = ($b2 * $b2) - (4 * $a1 * $c3);
if ($a1 != 0) {
    if ($dt > 0) {
        echo "Pt có x1 = " . ((-$b2) + sqrt($dt)) / ($a1 * 2) .
            " và có x2 = " . ((-$b2) - sqrt($dt)) / ($a1 * 2) . "<br>";
    } else if ($dt < 0) {
        echo "Pt có vô nghiệm" . "<br>";
    } else {
        echo "Pt có nghiệm kép là: x1 = x2 =" . (-$b2) / ($a1 * 2) . "<br>";
    }
} else {
    echo "Nhập lại a";
}
print "<br><br>";

?>









<form method="POST" action="">
    Canh 1:
    <input type="number" name="canh1"><br>
    Canh 2:
    <input type="number" name="canh2"><br>
    Canh 3:
    <input type="number" name="canh3"><br>

    <input type="submit" name="btn">
</form>

<?php # Kiểm tra tam giác khi có độ dài 3 cạnh
if (isset($_POST["canh1"]) || isset($_POST["canh2"]) || isset($_POST["canh3"])) {

    function check_tam_giac(int $canh1, int $canh2, int $canh3)
    {
        if (
            $canh1 == $canh2 && $canh1 != $canh3 ||
            $canh1 == $canh3 && $canh1 != $canh2 ||
            $canh2 == $canh3 && $canh1 != $canh3
        ) {
            return "BT4: Đây là tam giác cân với cạnh thứ nhất là $canh1, cạnh thứ hai là $canh2, cạnh thứ ba là $canh3";
        } else if ($canh1 == $canh2 && $canh2 == $canh3) {
            return "BT4: Đây là tam giác đều với cạnh thứ nhất là $canh1, cạnh thứ hai là $canh2, cạnh thứ ba là $canh3";
        } else {
            return "BT4: Đây là tam giác không đều không cân với cạnh thứ nhất là $canh1, cạnh thứ hai là $canh2, cạnh thứ ba là $canh3";
        }
    }
    ;
    $x = $_POST["canh1"];
    $y = $_POST["canh2"];
    $z = $_POST["canh3"];

    echo check_tam_giac($x, $y, $z);
}
;




# Reset button
echo "<br><BUTTON TYPE=\'button\" onClick=\"history.go(0)\" >Refresh</BUTTON>";
?>