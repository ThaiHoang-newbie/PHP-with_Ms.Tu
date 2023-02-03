<?php   
$num = "abc";
$number = rand(1,2);
echo ++$num;
print "<br>";




$user = "Hoang";
print '<br> 1: Hi $user <br>';
print "2: Hi $user <br>";
print "3: Hi "."$user <br>";
print '4: Hi'.' $user <br><br><br>';



print "VD $number: <br><br>";
print "Em bảo anh đi đi!<br><br>" .
    "Sao anh không ở lại<br><br>" .
    "Em bảo anh đứng đợi!<br><br>" .
    "..."."<br><br>";

echo "<body style='background-color:black;color:white;'>";


$a = rand(10,100);
$b = rand(10,100);


echo "Tổng: $a + $b =" . $a + $b."<br>";
echo "Hiệu: $a - $b =" . $a - $b."<br>";
echo "Tích: $a * $b =" . $a * $b."<br>";
echo "Thương: $a / $b =" . $a / $b."<br><br>";


$bt1 = rand(8, 10);

if ($bt1 % 10 == 0) {
    echo "BT 1: "."True";
}else{
    echo "BT 1: "."False";
}

function check_tam_giac(int $canh1, int $canh2, int $canh3) {
    if($canh1 == $canh2 || $canh1 == $canh3 || $canh2 == $canh3){
        return  "Đây là tam giác cân với cạnh 1 là $canh1, cạnh 2 là $canh2, cạnh 3 là $canh3";
    }else if($canh1 == $canh2 && $canh2 == $canh3){
        return  "Đây là tam giác đều với cạnh 1 là $canh1, cạnh 2 là $canh2, cạnh 3 là $canh3";
    }else{
        return  "Đây là tam giác không đều không cân với cạnh 1 là $canh1, cạnh 2 là $canh2, cạnh 3 là $canh3";
    }
};
$canh1 = rand(1, 3);
$canh2 = rand(1, 3);
$canh3 = rand(1, 3);
echo "<br><BUTTON TYPE=\'button\"  onClick=\"check_tam_giac($canh1, $canh2, $canh3)\" >Check tam giác</BUTTON>";

echo "<br><BUTTON TYPE=\'button\"  onClick=\"history.go(0)\" >Refresh</BUTTON>";
?>
