<?php

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


$bt1 = rand(8, 10);

if ($bt1 % 10 == 0) {
    echo "BT 1: " . "True";
} else {
    echo "BT 1: " . "False";
}
echo "<br><br>";


echo "Array: ";
$bt2 = array();
array_push($bt2, $a, $b, $c, $d);

$largest = max($bt2);

foreach ($bt2 as $value) {
    echo "$value"." ";
  }
echo "<br>BT 2: Max = " . "$largest" . "<br><br>";





echo "BT3: ";

$a1 = rand(-3,3);
$b2 = rand(-3,3);
$c3 = rand(-3,3);

echo "Pt: $a1 x<sup>2</sup> + $b2   x + $c3 = 0"."<br>";

$dt = ($b2 * $b2) - (4 * $a * $c3);
if($a1 != 0){
    if($dt>0){
        echo "Pt có x1 = " . ((-$b2) + sqrt($dt))/($a1*2) .
        " và có x2 = ". ((-$b2) - sqrt($dt))/($a1*2)."<br>";
    }else if($dt<0){
        echo "Pt có vô nghiệm"."<br>";
    }else{
        echo "Pt có nghiệm kép là: x1 = x2 =" . (-$b2) / ($a1 * 2)."<br>";
    }
}else{
    echo "Nhập lại a";
}
print "<br><br>";





function check_tam_giac(int $canh1, int $canh2, int $canh3, )
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
$canh1 = rand(1, 3);
$canh2 = rand(1, 3);
$canh3 = rand(1, 3);
echo check_tam_giac($canh1, $canh2, $canh3);




echo "<br><BUTTON TYPE=\'button\" onClick=\"history.go(0)\" >Refresh</BUTTON>";
?>